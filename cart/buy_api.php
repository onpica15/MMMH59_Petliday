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


$totle = 0;

foreach ($_SESSION['cart'] as $i) {
    $totle += ($i['manQ'] * $i['price_man']) + ($i['petQ'] * $i['price_pet']);
}

$o_sql = "INSERT INTO `order_list`(`man_quantity`, `pet_quantity`, `mainLastName`, `mainFirstName`, `mainGender`, `phone`, `email`, `order_date`, `amount`, `member_sid`) VALUES(?,?,?,?,?,?,?,NOW(),?,?)";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['cart']['manQ'],
    $_SESSION['cart']['petQ'],
    $_SESSION['cart']['manQ'],
    $_SESSION['cart']['manQ'],
    $totle,
    $_SESSION['user']['id']
    
]);


// $totle = 0;

// foreach ($_SESSION['cart'] as $i) {
//   $totle += $i['price'] * $i['quantity'];
// }
