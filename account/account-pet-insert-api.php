<?php require __DIR__ . '/../parts/config.php';
//輸出 決定送給前端的格式
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

// 如果是空陣列的話 (沒填值得話就退出)
if (empty($_POST['name'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// 抓取從表單來的資料 用? NOW()當下的時間 sql語法逗號
// $sql = "INSERT INTO `member_pet`(`name`, `breed`, `age`, `birthday`) VALUES ('1','2','3','4')";
$sql = "INSERT INTO `member_pet`(`name`, `breed`, `age`, `birthday`) VALUES (?,?,?,?)";


// 做一個準備的動作(因為有?)
$stmt = $pdo->prepare($sql);

//execute執行 ab-insert表單李的name 對應到資料表的欄位 php語法逗號  
$stmt->execute([
    $_POST['name'],
    $_POST['breed'],
    $_POST['age'],
    $_POST['birthday'],
]);

// 如有新增成功的話
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
