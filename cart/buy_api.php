<?php
require __DIR__ . '/../parts/config.php';


if (!isset($_SESSION['member_avatar'])) {
    echo json_encode([
        'error' => '沒登入會員',
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if (empty($_SESSION['cart'])) {
    echo json_encode([
        'code' => 300,
        'error' => '購物車沒內容',

    ], JSON_UNESCAPED_UNICODE);
    exit;
}
if (empty($_SESSION['order'])) {
    echo json_encode([
        'code' => 350,
        'error' => '沒訂單沒內容',

    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$o_sql = "INSERT INTO `order_list`(`coupon`, `items`, `mainLastName`, `mainFirstName`, `mainGender`, `phone`, `email`, `amount`, `member_sid`, `order_date`)VALUES(?,?,?,?,?,?,?,?,?,NOW())";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['order']['coupon_t'],
    $_SESSION['order']['items'],
    $_SESSION['order']['mainLastName'],
    $_SESSION['order']['mainFirstName'],
    $_SESSION['order']['mainGender'],
    $_SESSION['order']['phone'],
    $_SESSION['order']['email'],
    $_SESSION['order']['totle_price'],
    $_SESSION['member_avatar']['sid'],

]);

$order_sid = $pdo->lastInsertId();

// $_SESSION['user']['id']
// $order_sid = $pdo->lastInsertId();

// $total = ($_SESSION['cart']['manQ'] * $_SESSION['cart']['price_man']) + ($_SESSION['cart']['petQ'] * $_SESSION['cart']['price_pet']);


$d_sql = "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price_all`, `quantity_man`, `quantity_pet`) VALUES(?,?,?,?,?)";

$d_stmt = $pdo->prepare($d_sql);

foreach ($_SESSION['cart'] as $i) {
    $d_stmt->execute([
        $order_sid,
        $i['sid'],
        $i['total'],
        $i['manQ'],
        $i['petQ'],
    ]);
};

$orderDetails_sid = $pdo->lastInsertId();

$m_sql = "INSERT INTO `order-man`(`orderDetailsSid`, `prod-sid`, `Name`, `man-phone`, `idCard`, `birthday`) VALUES(?,?,?,?,?,?)";

$m_stmt = $pdo->prepare($m_sql);

foreach ($_SESSION['cart'] as $j => $i) {
    foreach ($_SESSION['order']['prod'][$j] as $k => $v) {
        if ($k === 'man') {
            for ($x = 0; $x < count($v['Name']); $x++) {

                $m_stmt->execute([
                    $orderDetails_sid,
                    $v['prodSid'][$x],
                    $v['Name'][$x],
                    $v['man-phone'][$x],
                    $v['idCard'][$x],
                    $v['birthday'][$x],
                ]);
            };
        };
    };
};

$p_sql = "INSERT INTO `order-pet`(`orderDetailsSid`, `prod-sid`, `petName`, `petSize`, `notes`) VALUES(?,?,?,?,?)";

$p_stmt = $pdo->prepare($p_sql);

foreach ($_SESSION['cart'] as $j => $i) {
    foreach ($_SESSION['order']['prod'][$j] as $k => $v) {
        if ($k === 'pet') {
            for ($x = 0; $x < count($v['petName']); $x++) {

                $p_stmt->execute([
                    $orderDetails_sid,
                    $v['prodSid'][$x],
                    $v['petName'][$x],
                    $v['petSize'][$x],
                    $v['notes'][$x],

                ]);
            };
        };
    };
};

// $orderDetails_sid = $pdo->lastInsertId();




unset($_SESSION['cart']);


echo json_encode([
    'success' => true,
    'new_id' => $order_sid,
    'new_id2' => $orderDetails_sid,
], JSON_UNESCAPED_UNICODE);







// echo json_encode([
    
// ], JSON_UNESCAPED_UNICODE);
