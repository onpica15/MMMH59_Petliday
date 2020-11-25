<?php include __DIR__ . '/../parts/config.php' ?>

<?php $pageName = 'product-list';

$perPage = 9; // 每頁幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
// $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$t_sql = "SELECT COUNT(1) FROM products";
$t_stmt = $pdo->query($t_sql);

$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總筆數
$totalPages = ceil($totalRows / $perPage); // 總頁數

if ($totalRows != 0) {
    if ($page < 1) {
        header('Location: pdlist-db.php');
        // header表轉向到原本頁面預設值
        exit;
    }
    if ($page > $totalPages) {
        header('Location: pdlist-db.php?page=' . $totalPages);
        // 轉向到最後一頁
        exit;
    }
    $sql = sprintf(
        "SELECT * FROM products ORDER BY sid ASC LIMIT %s, %s",
        ($page - 1) * $perPage,
        $perPage
    );
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}
?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<link rel="stylesheet" href="pro-list.css">
<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<div class="container">
    <div class="row align-items-center">
        <?php foreach ($rows as $r) : ?>
            <div class="col-md-4 col-12 p-4">
                <a href="" class="card c3">
                    <div class="heart-circle">
                        <div class="heart"><img src="/Petliday/icon/heart-red.png" alt=""></div>
                    </div>
                    <div class="card-pic w-100">
                        <img src="/Petliday/products/img/prolist<?= $r['sid'] ?>.jpg" alt="...">
                        <!-- <img src="/Petliday/products/img/prolist1.jpg" alt=""> -->
                    </div>
                    <div class="card-text pt-3 pb-1 px-4">
                        <p><?= $r['product_name'] ?></p>
                        <div class="info d-flex justify-content-between">
                            <div class="info-left d-flex align-items-center">
                                <div class="star mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                        <defs>
                                        </defs>
                                        <g id="圖層_2" data-name="圖層 2">
                                            <g id="圖層_1-2" data-name="圖層 1">
                                                <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                            </g>
                                        </g>
                                    </svg>

                                </div>
                                <div class="rate text-gray t-m"><?= $r['star'] ?></div>
                                <div class="rate-all t-xs ml-2"><u class="text-gray"><?= $r['rate'] ?>則評論 </u></div>
                            </div>
                            <div class="info-right pr-2 t-l orange-color">$<?= $r['price_all'] ?></div>
                        </div>
                    </div>
                    <p class="card-info px-4 t-xs">
                        簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
                    </p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- 11/13 研究分頁按鈕連結-->

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------
    const card = document.querySelector('.card');
    card.addEventListener('click', function() {
        console.log('sid', <?= $r['sid'] ?>);
    })


    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>