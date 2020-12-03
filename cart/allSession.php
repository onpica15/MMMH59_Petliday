<?php
include __DIR__ . '/../parts/config.php';

// if (empty($_POST['name'])) {
//     echo json_encode($output, JSON_UNESCAPED_UNICODE), exit;
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE), exit;


echo json_encode($_SESSION);
