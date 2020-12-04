<?php
require __DIR__ . '/../parts/config.php';

$pageName = 'ab-list';

// 每頁有幾筆
$perPage = 5;
// 得到頁碼後轉換成整數 設定三元判斷式沒有選擇的時候設定為1
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// total to sql 算出有幾個項目
$t_sql = "SELECT COUNT(1) FROM member_avatar";
$t_stmt = $pdo->query($t_sql);

// echo json_encode($t_stmt->fetchAll());
// die('');
// exit;
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總比數
$totalPages = ceil($totalRows / $perPage); //總頁數

// LIMIT 0,5 每頁五筆取0~5
$sql = sprintf("SELECT * FROM member_pet ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
// ORDER BY sid DESC 排序方式
$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll();

?>

<?php include __DIR__ . '/../parts/html-head.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">address</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['breed'] ?></td>
                    <td><?= $r['age'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>