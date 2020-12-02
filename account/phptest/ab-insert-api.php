<?php
require __DIR__ . '/../parts/config.php';

// 送給前端的格式
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有資料',
];
// 使用json格式 之後要用ajax
if (empty($_POST['name'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `member_avatar`(
`id`, `email`, `mobile`, 
`birthday`, `name`,`address`
) VALUES (
    ?, ?, ?, 
?, ?, ?)";

$stmt = $pdo->prepare($sql);

// 把值填進去並execute執行獲得bool
$stmt->execute([
    $_POST['id'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['name'],
    $_POST['address']
]);
// rowcount()拿到1代表新增成功
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
// 如果成功的話會出現字串
