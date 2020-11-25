<?php
require __DIR__ . '/config.php';


if (empty($_SESSION['cart'])) {
  echo json_encode([
      'code' => 300,
      'error' => '購物車沒內容',

  ], JSON_UNESCAPED_UNICODE);
  exit;
   
}