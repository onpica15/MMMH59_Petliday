<?php
require __DIR__ . '/../parts/config.php';
header('Content-Type: application/json');

$allowFiles = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
    'image/gif' => '.gif',
];

$output = [
    'imgs' => [],
    'error' => '沒有上傳圖檔'
];

if (empty($_FILES['photo'])) {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

foreach ($_FILES['photo']['type'] as $i => $type) {
    if ($allowFiles[$type]) {
        $newName = uniqid() . rand(100, 999) . $allowFiles[$type];
        move_uploaded_file($_FILES['photo']['tmp_name'][$i], __DIR__ . '/uploads/' . $newName);
        $output['imgs'][] = $newName;
    }
}
$output['error'] = '';
echo json_encode($output, JSON_UNESCAPED_UNICODE);
