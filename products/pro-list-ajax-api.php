<?php include __DIR__ . '/../parts/config.php';
//tag+++++++++++++++++++++++++++++++++++++++ 
$output = [];


$getWhere = isset($_GET['where']) ? ($_GET['where']) : "`cate`=3 OR `cate`=2 OR `cate`=1 OR `cate`=4) AND (`area`='n'";
// `cate`=3 OR `cate`=2 OR `cate`=1 OR `cate`=4) AND (`area`='n'
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

$where = " WHERE ($getWhere) ";
// echo json_encode($where, JSON_UNESCAPED_UNICODE);

// // $output['dTime'] = $time;
// // $output['dArea'] = $area;
// // $where .= " AND `cate`=$time ";


$ta_sql = " SELECT * FROM products $where ";
$ta_row = $pdo->query($ta_sql)->fetchAll();

echo json_encode($ta_row, JSON_UNESCAPED_UNICODE);
exit;
