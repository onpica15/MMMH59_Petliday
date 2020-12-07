<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/coupon.css">


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
            <div class="col-12 col-lg-9 ">
                <div class="">
                    <!--coupon 優惠券 -->
                    <div class="tab-pane list-section account-box">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">優惠券</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="coupon-items w-100 animation">
                                    <div class="col-12 d-flex align-items-center">
                                        <input class="form-input form-input-btn " id="couponNumber" type="text" name="couponNumber" placeholder="請輸入折扣碼" value="">
                                        <button type="button" name="couponNumberBtn" class="ml-2 form-input-btn btn ">兌換</button>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12 col-lg-6 mt-4">
                                    <div class="coupon">
                                        <!-- <input class="form-radio coupon-check custom-control-input" type="radio" name="coupon-box" id="coupon-check">
                                            <label class="custom-control-label" for="coupon-check"></label> -->
                                        <div class="orange-color t-l mb-3 ">聖誕優惠 15%OFF </div>
                                        <p class="text-gray t-xs mb-0 ">折扣券碼： 2020CHRISTMAS
                                        </p>
                                        <p class="text-gray t-xs mb-0">有效日期： 2020/12/20-2021/12/31
                                        </p>
                                        <p class="text-gray t-xs mb-0">限定商品： 全站行程活動
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mt-4">
                                    <div class="coupon">
                                        <!-- <input class="form-radio coupon-check custom-control-input" type="radio" name="coupon-box" id="coupon-check">
                                            <label class="custom-control-label" for="coupon-check"></label> -->
                                        <div class="orange-color t-l mb-3 ">跨年優惠 18%OFF </div>
                                        <p class="text-gray t-xs mb-0 ">折扣券碼： 2020NEWYEAR
                                        </p>
                                        <p class="text-gray t-xs mb-0">有效日期： 2020/12/20-2021/12/31
                                            <p class="text-gray t-xs mb-0">限定商品： 跨年PARTY系列商品
                                            </p>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!-- endof coupon 優惠券 -->



                    </div>
                </div>
                <!-- endof aside-bar點出的內容 -->

            </div>
        </div>
</section>








<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>