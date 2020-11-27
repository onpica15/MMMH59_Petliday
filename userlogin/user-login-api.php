<?php
require __DIR__ . '/../parts/config.php';
$output = [
    'success' => false,
];

if (empty($_POST['email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
}
// TODO: 檢查資料格式

$sql = "SELECT `sid`, `email`, `name` FROM `member_avatar` WHERE `email`=? AND `password`=?";
$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['email'],
    $_POST['password'],
]);

if($stmt->rowCount()>0){
    $output['success'] = true;
    $_SESSION['member_avatar'] = $stmt->fetch();
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);