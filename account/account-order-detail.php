<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-0 my-lg-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="container mb-3 list-section" id="list-title">
                    <div class="row  mb-3">
                        <div class="d-flex pt-3 p-4">
                            <div class="line mr-2"></div>
                            <h4 class="t-xxl">訂單明細</h4>
                        </div>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="col-12 all-step-box">
                                <div class="row form-box-fin bb-line pb-5">
                                    <div class="col-12 col-lg-3 qrcode">
                                        <img src="./img/qrcode.png" alt="">
                                    </div>
                                    <div class="col-12 col-lg-9 mb-4">
                                        <h5 class="orange-color t-l title1-m form-title order-title">訂購完成</h5>
                                        <p class="order-one text-color t-s mb-1 t-bold">訂單編號: d0150505</p>

                                    </div>
                                    <div class="col-12 col-lg-6 d-flex order-time">
                                        <p class="order-one text-gray t-xs mb-1">訂購時間: 2020/12/18</p>
                                    </div>
                                    <div class="col-12 col-lg-12 d-flex justify-content-center mb-3">
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="cute-iocn"></div>
                                    </div>
                                </div>
                                <div class="row form-box bb-line padd">
                                    <div class="col-12 d-flex flex-column align-content-center">
                                        <h6 class=" text-gray t-m mb-1 ">聯絡家長資訊:</h6>
                                        <h6 class=" text-gray t-s mb-2">若訂單有任何變動，主要聯繫人</h6>
                                        <div class="detail-all detail-quan mt-3 ">

                                            <h5 class="text-text t-m mb-2">聯絡姓名 : <span class="t-m prod-price-single text-text"><?= $_SESSION['order']['mainLastName'] ?>
                                                    <?= $_SESSION['order']['mainFirstName'] ?></span></h5>
                                            <h5 class="text-text t-m mb-2">聯繫電話 : <span class="t-m prod-price-single text-text"><?= $_SESSION['order']['phone'] ?>
                                                </span>
                                            </h5>
                                            <h5 class="text-text t-m mb-2">聯繫信箱 : <span class="t-m prod-price-single text-text"><?= $_SESSION['order']['email'] ?></span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-box bb-line">
                                    <div class="col-12 ">
                                        <div class="detail-all detail-quan d-flex justify-content-between ">
                                            <h6 class=" text-gray t-s mb-0">共<?= $_SESSION['order']['items'] ?>項商品</h6>
                                            <h5 class="brown-color t-m mb-0">總計：<span class="t-m prod-price-single danger-color "><?= $_SESSION['order']['totle_price'] ?></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php foreach ($_SESSION['cart'] as $j => $i) : ?>
                                    <div class="row form-box bb-line orderInfo">
                                        <div class="col-12 all-step-box all-order-box">
                                            <div class="row ">
                                                <div class="all-order-box-in w-100">
                                                    <div class="col-12 order-box-fin ">
                                                        <div class="itemTitle d-flex">
                                                            <div class="paw-icon mr-2">
                                                                <svg class="pawIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.08 55.96 " style="width: 15px;">
                                                                    <defs>
                                                                        <style>
                                                                            .cls-paw {
                                                                                fill: #ffa12c;
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <path class="cls-paw" d="M51.42,28.23a28.23,28.23,0,0,0-34.75,0C11.86,32,9.1,36.94,9.1,41.66,9.1,50.48,18.65,56,34,56S59,50.48,59,41.66C59,36.94,56.23,32,51.42,28.23Z" />
                                                                    <path class="cls-paw" d="M34.12,18.59c5.74,0,10.41-4.17,10.41-9.3S39.86,0,34.12,0,23.71,4.17,23.71,9.29,28.38,18.59,34.12,18.59Z" />
                                                                    <path class="cls-paw" d="M67.51,15.73A11.5,11.5,0,0,0,55.08,8.55,8.76,8.76,0,0,0,49,12.7a8.71,8.71,0,0,0-.53,7.38,11.14,11.14,0,0,0,5,5.77,11.4,11.4,0,0,0,5.69,1.56,10.52,10.52,0,0,0,1.78-.15A8.7,8.7,0,0,0,67,23.11,8.71,8.71,0,0,0,67.51,15.73Z" />
                                                                    <path class="cls-paw" d="M19.66,20.08a8.71,8.71,0,0,0-.53-7.38A8.76,8.76,0,0,0,13,8.55,11.22,11.22,0,0,0,5.53,10c-5,2.87-7,8.77-4.43,13.15h0a8.7,8.7,0,0,0,6.13,4.15A10.52,10.52,0,0,0,9,27.41a11.4,11.4,0,0,0,5.69-1.56A11.14,11.14,0,0,0,19.66,20.08Z" />

                                                                </svg>
                                                            </div>
                                                            <h5 class="text-color t-l mt-1">

                                                                <?= $i['product_name'] ?>
                                                            </h5>
                                                        </div>
                                                        <div class="detail-box-fin">
                                                            <div class="detail-all detail-time d-flex ">
                                                                <h6 class=" text-gray t-s">時間：</h6>
                                                                <h6 class=" text-gray t-s">2020/12/<?= $i['date'] ?></h6>
                                                            </div>
                                                            <div class="detail-all detail-quan d-flex ">
                                                                <h6 class=" text-gray t-s">數量：</h6>
                                                                <h6 class=" text-gray t-s"><?= $i['manQ'] ?> x 人 / <?= $i['petQ'] ?> x 寵物</h6>
                                                            </div>
                                                        </div>
                                                        <div class="single-prod-total d-flex justify-content-end bb-line">
                                                            <h5 class="t-m brown-color prod-price-single">NT$ <span class="total-box-item"><?= ($i['manQ'] * $i['price_man'] + $i['petQ'] * $i['price_pet']) ?></span></h5>
                                                        </div>

                                                        <div class="row d-flex align-content-stretch">
                                                            <!-- -----人 資料----- -->
                                                            <?php foreach ($_SESSION['order']['prod'][$j] as $k => $v) : ?>
                                                                <!-- 人 迴圈-->
                                                                <?php if ($k === 'man') : ?>
                                                                    <?php for ($x = 0; $x < count($v['Name']); $x++) { ?>
                                                                        <div class="col-12 col-lg-4 single-detail-box">
                                                                            <div class="single-detail">
                                                                                <h3 class="t-m brown-color t-bold bb-line-b pb-2 mb-3">旅客 <?php print_r($v['number'][$x]);  ?></h3>
                                                                                <p class="t-xs text-gray mb-0">姓氏
                                                                                    （須與旅遊證件一致）:</p>
                                                                                <p class="t-s text-color mb-3"><?php print_r($v['Name'][$x]);  ?></p>

                                                                                <p class="t-xs text-gray mb-0">行程當日聯繫電話:</p>
                                                                                <p class="t-s text-color mb-3"><?php print_r($v['man-phone'][$x]); ?></p>

                                                                                <p class="t-xs text-gray mb-0">身分證字號（行程保險中使用）:</p>
                                                                                <p class="t-s text-color mb-3"><?php print_r($v['idCard'][$x]); ?></p>

                                                                                <p class="t-xs text-gray mb-0">出生 年/月/日（行程保險中使用）</p>

                                                                                <p class="t-s text-color mb-0 pb-3 bb-line-b"><?php print_r($v['birthday'][$x]); ?></p>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                <?php endif ?>

                                                                <!-- -----end 人 資料 end----- -->


                                                                <!-- pet 迴圈-->
                                                                <!-- -----犬 資料----- -->
                                                                <?php if ($k === 'pet') : ?>
                                                                    <!-- <?php print_r($v); ?> -->
                                                                    <?php for ($x = 0; $x < count($v['petName']); $x++) { ?>
                                                                        <div class="col-12 col-lg-4 single-detail-box">
                                                                            <div class="single-detail">
                                                                                <h3 class="t-m brown-color t-bold bb-line-b pb-2 mb-3">寵物<?php print_r($v['number'][$x]);  ?></h3>
                                                                                <p class="t-xs text-gray mb-0">寶貝稱呼:</p>
                                                                                <p class="t-s text-color mb-3">

                                                                                    <?php print_r($v['petName'][$x]); ?>

                                                                                </p>


                                                                                <p class="t-xs text-gray mb-0">體型:</p>
                                                                                <p class="t-s text-color mb-3"><?php print_r($v['petSize'][$x]); ?></p>

                                                                                <p class="t-xs text-gray mb-0">備註：</p>
                                                                                <p class="t-s text-color mb-0 pb-3 bb-line-b"><?php print_r($v['notes'][$x]); ?></p>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>

                                                                <?php endif ?>
                                                                <!-- -----end 犬 資料 end----- -->

                                                            <?php endforeach;  ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;  ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="./account-order.php" class="ml-auto">
                            <button class="btn" onclick='account-order.php'>返回訂單</button>
                        </a>
                    </div>

                </div>

            </div>


        </div>

    </div>

</section>







<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>