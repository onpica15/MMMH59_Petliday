<?php include __DIR__ . '/../parts/config.php';

$sid = intval($_GET['product_sid']);

$output['product_sid'] = $sid;
$where = " WHERE `sid`=$sid";

$pd_sql = "SELECT * FROM `products` $where";
$pd_row = $pdo->query($pd_sql)->fetch();


$w_sql = "DELETE FROM `member-wishlist` WHERE `prod_id`=$sid";

$w_stmt = $pdo->query($w_sql);
// php document object


echo json_encode($w_stmt, JSON_UNESCAPED_UNICODE);
