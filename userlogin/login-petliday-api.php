<?php
require __DIR__ . '/../parts/config.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

if(empty($_POST['apply_email'])){
    echo json_encode($output, JSON_UNESCAPED_UNICODE); exit;
}

$sql = "INSERT INTO `member_avatar`(
    `email`, `password`
    ) VALUES (
    ?, ?
    )";
    // 外面來的資料一律用問號

$stmt = $pdo->prepare($sql);
$stmt->execute([
        $_POST['apply_email'], 
        $_POST['apply_password'],
]);
// 以上是真正執行的資料，然後再放到以下stmt裡面
// 呼叫rowCount看有沒有新增
if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);