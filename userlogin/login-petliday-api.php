<?php
require __DIR__ . '/../parts/config.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

if(empty($_POST['email'])){
    echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
}

$sql = "INSERT INTO `member_avatar`(
    `email`, `password`
    ) VALUES (
    ?, ?
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
        $_POST['email'],
        $_POST['password']
]);
if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);