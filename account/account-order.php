<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="">
                    <!--list-order 我的訂單 -->
                    <div class="tab-pane list-section">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">我的訂單</h4>
                                </div>
                            </div>
                        </div>

                        <!-- search -->
                        <div class="container">
                            <div class="row ml-0">
                                <div class="col-12 col-lg-6 search align-items-center">
                                    <div class="icon-search">
                                        <i class='fas fa-search'></i>
                                    </div>
                                    <input class="form-control" type="search" placeholder="搜索歷史清單" aria-label="Search">
                                    <a class="btn-green btn-search" type="submit">go</a>
                                </div>
                            </div>
                        </div>
                        <!-- ----prod-box---- -->
                        <div class="container">
                            <div class="row prod-box mt-4 d-flex align-items-top">
                                <div class="prod-img col-2 col-lg-3">
                                    <img src="../products/img/pd6.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-6 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">標題標題標題標題標題標題標題標題題標題</h5>
                                    <h6 class="t-m title1-m">方案類型:恆春二日遊</h6>

                                    <div class="small-text">
                                        <h6 class=" text-gray t-s">訂購日期: 2020/08/12 pm 6:00</h6>

                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 d-flex flex-column ml-auto align-self-end">
                                    <h5 class="mb-5 ml-auto t-m brown-color prod-price-in">NT$ 3000</h5>
                                    <h5 class="ml-auto green-color t-l title1-m">訂單已完成</h5>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button class="btn btn-outline">訂單評論</button>
                                <a class="btn" href="./account-order-detail.php">訂單明細</a>
                            </div>

                        </div>
                        <!-- ----endof prod-box---- -->
                        <div class="container">
                            <div class="row prod-box mt-4 d-flex align-items-top">
                                <div class="prod-img col-2 col-lg-3">
                                    <img src="../products/img/pd6.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-6 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">標題標題標題標題標題標題標題標題題標題</h5>
                                    <h6 class="t-m title1-m">方案類型:恆春二日遊</h6>

                                    <div class="small-text">
                                        <h6 class=" text-gray t-s">訂購日期: 2020/08/12 pm 6:00</h6>

                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 d-flex flex-column ml-auto align-self-end">
                                    <h5 class="mb-5 ml-auto t-m brown-color prod-price-in">NT$ 3000</h5>
                                    <h5 class="ml-auto text-gray t-l title1-m">訂單取消</h5>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button class="btn btn-outline">訂單評論</button>
                                <a class="btn" href="./account-order-detail.php">訂單明細</a> </div>

                        </div>

                    </div>

                    <!-- endof list-order 我的訂單 -->



                </div>
            </div>
            <!-- endof aside-bar點出的內容 -->

        </div>
    </div>
</section>








<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------


    <?php include __DIR__ . '/../account/account-aside-bar-js.php' ?>

    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>