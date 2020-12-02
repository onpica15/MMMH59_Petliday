<?php
require __DIR__ . '/../parts/config.php';


// if (!isset($_SESSION['user'])) {
//   echo json_encode([
//       'error' => '沒登入會員',
//   ], JSON_UNESCAPED_UNICODE);
//   exit;
// }

if (empty($_SESSION['cart'])) {
    echo json_encode([
        'code' => 300,
        'error' => '購物車沒內容',

    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if (!isset($_SESSION['order'])) {
    $_SESSION['order'] = [];
}
$output = [];

$mainLastName = isset($_GET['mainLastName']) ? intval($_GET['mainLastName']) : 'invalid';
$mainFirstName = isset($_GET['mainFirstName']) ? intval($_GET['mainFirstName']) : 'invalid';
$mainGender = isset($_GET['mainGender']) ? intval($_GET['mainGender']) : 'invalid';
$phone = isset($_GET['phone']) ? intval($_GET['phone']) : 'invalid';
$email = isset($_GET['email']) ? intval($_GET['email']) : 'invalid';
$coupon = isset($_GET['coupon']) ? intval($_GET['coupon']) : 'invalid';

$totle = 0;
foreach ($_SESSION['cart'] as $i) {
    $totle += ($i['manQ'] * $i['price_man']) + ($i['petQ'] * $i['price_pet']);
}

$o_sql = "INSERT INTO `order_list`(`man_quantity`, `pet_quantity`, `mainLastName`, `mainFirstName`, `mainGender`, `phone`, `email`, `order_date`, `amount`, `member_sid`) VALUES(?,?,?,?,?,?,?,NOW(),?,?)";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    '00000',
    '00000',
    $mainLastName,
    $mainFirstName,
    $mainGender,
    $phone,
    $email,
    $totle,
    '00000',
    // $_SESSION['user']['id']

]);

// $order_sid = $pdo->lastInsertId();

echo json_encode([
    'new_id' => $pdo->lastInsertId()
], JSON_UNESCAPED_UNICODE);

// $output['order'] = $_SESSION['order'];

// echo json_encode($output, JSON_UNESCAPED_UNICODE);
// exit;


// if (isset($_SESSION['order'])) {
//     $_SESSION['cart'][$sid]['manQ'] = $manQ;
//     $_SESSION['cart'][$sid]['petQ'] = $petQ;
//     $_SESSION['cart'][$date]['date'] = $date;
//     $_SESSION['cart'][$date]['item'] = $item;
// } else {

//     $sql = "SELECT * FROM products WHERE sid=$sid";
//     $row = $pdo->query($sql)->fetch();

//     if (empty($row)) {
//         $output['code'] = 410;
//     } else {
//         //自己再加點擊值到購物車
//         $row['manQ'] = $manQ;
//         $row['petQ'] = $petQ;
//         $row['date'] = $date;
//         $row['item'] = $item;
//         $_SESSION['cart'][$row['sid']] = $row;
//     }
// }
