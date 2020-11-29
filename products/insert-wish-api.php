<?php include __DIR__ . '/../parts/config.php';

$output = [
    'success' => false,
    'product_sid' => 0,
    'error' => '沒有願望清單'
];
// if (empty($_GET['product_sid'])) {
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

$sid = intval($_GET['product_sid']);

$output['product_sid'] = $sid;
$where = " WHERE `sid`=$sid";

$pd_sql = "SELECT * FROM `products` $where";
$pd_row = $pdo->query($pd_sql)->fetch();


$w_sql = "INSERT INTO `member-wishlist`(
    `prod_id`, `product_name`,`active`,`member_sid`) VALUES (
    ?, ? ,? ,?)";

$w_stmt = $pdo->prepare($w_sql);
// php document object
$w_stmt->execute([
    $pd_row['sid'],
    $pd_row['product_name'],
    1,
    23
]);

echo json_encode($w_stmt, JSON_UNESCAPED_UNICODE);
