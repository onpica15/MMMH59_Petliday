<?php
include __DIR__ . '/../parts/config.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$output = [];


$action = isset($_GET['action']) ? $_GET['action'] : 'read';
// $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$manQ = isset($_GET['manQ']) ? intval($_GET['manQ']) : 1;
$petQ = isset($_GET['petQ']) ? intval($_GET['petQ']) : 1;
$date = isset($_GET['date']) ? intval($_GET['date']) : 1;
$item = isset($_GET['item']) ? intval($_GET['item']) : 1;


switch ($action) {

    default:
    case 'read':
        break;

    case 'add':
        if (!$sid or !$manQ) {
            $output['code'] = 401;
        } else {
            //如果購物車已有
            if (isset($_SESSION['cart']['sid'])) {
                $_SESSION['cart'][$sid]['manQ'] = $manQ;
                $_SESSION['cart'][$sid]['petQ'] = $petQ;
                $_SESSION['cart'][$sid]['date'] = $date;
                $_SESSION['cart'][$sid]['item'] = $item;
            } else {

                $sql = "SELECT * FROM products WHERE sid=$sid";
                $row = $pdo->query($sql)->fetch();

                if (empty($row)) {
                    $output['code'] = 410;
                } else {
                    //自己再加點擊值到購物車
                    $row['manQ'] = $manQ;
                    $row['petQ'] = $petQ;
                    $row['date'] = $date;
                    $row['item'] = $item;
                    $_SESSION['cart'][$row['sid']] = $row;
                }
            }
        }
        break;

    case 'remove':
        if (isset($_SESSION['cart'][$sid])) {
            unset($_SESSION['cart'][$sid]);
        } else {
            $output['code'] = 402;
        }

        break;
}

$output['cart'] = $_SESSION['cart'];

// $output['order'] = $_SESSION['order'];


echo json_encode($output, JSON_UNESCAPED_UNICODE);
