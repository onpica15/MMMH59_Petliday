<?php
// 叫出web root 跟目錄
require __DIR__ . '/parts/config.php';
header('Content-Type: application/json');

$output = [
    'img' => '',
    'errror' => '只接jpeg圖檔'
];
// 如果檔案格式不屬於image/jpeg
if (empty($_FILES['avatar'] or $_FILES['avatar']['type'] !== 'image/jpeg')) {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// 磁碟位置

move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/uploads/' . $_FILES['avatar']['name']);
// 網路位置
$output['img'] = WEB_ROOT . 'uploads/' . $_FILES['avatar']['name'];
$output['error'] = '';

echo json_encode($output, JSON_UNESCAPED_UNICODE);
