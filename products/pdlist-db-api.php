<?php include __DIR__ . '/../parts/config.php';
//tag+++++++++++++++++++++++++++++++++++++++ 
$output = [];


$getWhere = isset($_GET['where']) ? ($_GET['where']) : '';
// $area = isset($_GET[`area`]) ? intval($_GET['`area`']) : 0;

// 印出抓到的資料ex:{"where": "2 AND `cate`=4 AND `area`='s'"}
// echo json_encode([
//     'where' => $_GET['`cate`'] ?? [],
//     // 'area' => $_GET['`area`'] ?? [],
// ], JSON_UNESCAPED_UNICODE);

// 能抓到正確資料的sql格式
// $c_sql = "SELECT * FROM `products` WHERE (`cate`=1 OR `cate`=2) AND (`area`='n' OR `area`='n')";
// $c_rows = $pdo->query($c_sql)->fetchAll();

//tag+++++++++++++++++++++++++++++++++++++++ 

$where = " WHERE ($getWhere)";
// echo $where;

// // $output['dTime'] = $time;
// // $output['dArea'] = $area;
// // $where .= " AND `cate`=$time ";


$ta_sql = " SELECT * FROM products $where ";
$ta_row = $pdo->query($ta_sql)->fetchAll();

echo json_encode($ta_row, JSON_UNESCAPED_UNICODE);
exit;
// 

// <?php foreach ($ta_row as $ta) : >
    // <button type="button" class="cate-btn btn btn-outline-primary" data-sid="<?= $ta['sid'] >">
        // <?= $ta['star'] >
        // </button>
    // <?php endforeach >

// <?php exit;

    // if (!isset($_SESSION['prolist'])) {
    //     $_SESSION['prolist'] = [];
    // }




    // $perPage = 9; // 每頁幾筆
    // $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    // $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 3;

    // // 取得分類（分類目錄按鈕標題）
    // $c_sql = "SELECT * FROM `pd_time` ORDER BY `pd_time`.`sid` ASC";
    // $c_rows = $pdo->query($c_sql)->fetchAll();

    // $where = " WHERE 1 ";
    // // if (!empty($cate)) {
    // $params['cate'] = $cate;
    // $where .= " AND `cate`=$cate ";
    // // }


    // // $t_sql = "SELECT COUNT(1) FROM products";
    // $t_stmt = $pdo->query($t_sql);

    // $totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總筆數
    // $totalPages = ceil($totalRows / $perPage); // 總頁數

    // if ($totalRows != 0) {
    //     if ($page < 1) {
    //         header('Location: pdlist-db.php');
    //         exit;
    //     }
    //     if ($page > $totalPages) {
    //         header('Location: pdlist-db.php?page=' . $totalPages);
    //         exit;
    //     }
    //     $sql = sprintf(
    //         "SELECT * FROM products %s ORDER BY sid ASC LIMIT %s, %s",
    //         $where,
    //         ($page - 1) * $perPage,
    //         $perPage
    //     );

    //     $stmt = $pdo->query($sql);
    //     $rows = $stmt->fetchAll();
    // } else {
    //     $rows = [];
    // }
    // 
