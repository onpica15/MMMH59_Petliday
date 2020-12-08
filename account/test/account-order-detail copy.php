<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

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
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- oreder-list 訂單明細 -->
                    <div class="tab-pane fade show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                        <div class="container mb-3 list-section" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">訂單明細</h4>
                                </div>
                            </div>
                        </div>
                        <!-- 訂單已確認 -->
                        <div class="container">
                            <div class="row confirm-info">
                                <div class="col-10 col-lg-10">
                                    <h6 class="t-l">訂單已完成</h6>
                                </div>
                                <div class="col w-100"></div>
                                <div class="col-12 col-lg-3 qrcode">
                                    <img src="./img/qrcode.png" alt="">
                                </div>
                                <div class="col-12 col-lg-8 info-text justify-content-end">
                                    <p>訂單編號: d0150505</p>
                                    <p>訂購時間: 2020/10/22 pm 12:00</p>
                                </div>

                            </div>
                            <div class="row form-box mt-2 mb-4">
                                <div class="col-12 ">
                                    <div class="detail-all detail-quan d-flex justify-content-end ">
                                        <h6 class=" text-gray t-s mb-0 mr-2">共 2 項商品</h6>
                                        <h5 class="brown-color t-m mb-0">總計：<span class="t-xl prod-price-single danger-color ">NT$ 3000</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row form-box-fin bb-line pb-5">

                                <div class="col-12 col-lg-6 mb-4">
                                    <h5 class="orange-color t-l title1-m form-title order-title">訂購完成</h5>
                                </div>
                                <div class="col-12 col-lg-6 d-flex order-time">
                                    <p class="order-one text-gray t-xs mb-1">訂購時間: 2020/10/22 pm 12:00</p>
                                </div>
                                <div class="col-12 col-lg-12 d-flex justify-content-center mb-3">
                                    <p class="order-one text-color t-s mb-1 t-bold">訂單編號: d0150505</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="cute-iocn"></div>
                                </div>
                            </div> -->

                        </div>
                        <!-- 旅客資訊 -->
                        <div class="container">
                            <div class="row ">
                                <div class="all-order-box-in w-100">
                                    <div class="col-12 order-box-fin">
                                        <!--  -->
                                        <div class="order-items">
                                            <h5 class="text-color t-l mt-1">標題標題標題標題標題標題標題標題題標題標題</h5>
                                            <div class="detail-box-fin">
                                                <div class="detail-all detail-time d-flex justify-content-between">
                                                    <h6 class=" text-gray t-s ">時間：</h6>
                                                    <h6 class=" text-gray t-s">2020/08/12 pm 6:00</h6>
                                                </div>
                                                <div class="detail-all detail-quan d-flex justify-content-between">
                                                    <h6 class=" text-gray t-s">數量：</h6>
                                                    <h6 class=" text-gray t-s">2 x 人 / 1 x 犬</h6>
                                                </div>
                                            </div>
                                            <div class="single-prod-total d-flex justify-content-end bb-line">
                                                <h5 class="t-m brown-color prod-price-single">NT$ 1500</h5>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="order-items">
                                            <h5 class="text-color t-l mt-1">標題標題標題標題標題標題標題標題題標題標題</h5>
                                            <div class="detail-box-fin">
                                                <div class="detail-all detail-time d-flex justify-content-between">
                                                    <h6 class=" text-gray t-s ">時間：</h6>
                                                    <h6 class=" text-gray t-s">2020/08/12 pm 6:00</h6>
                                                </div>
                                                <div class="detail-all detail-quan d-flex justify-content-between">
                                                    <h6 class=" text-gray t-s">數量：</h6>
                                                    <h6 class=" text-gray t-s">2 x 人 / 1 x 犬</h6>
                                                </div>
                                            </div>
                                            <div class="single-prod-total d-flex justify-content-end bb-line">
                                                <h5 class="t-m brown-color prod-price-single">NT$ 1500</h5>
                                            </div>
                                        </div>
                                        <div class="row d-flex align-content-stretch">
                                            <div class="col-12 col-lg-4 single-detail-box">
                                                <div class="single-detail">
                                                    <h3 class="t-m brown-color t-bold bb-line-b pb-2 mb-3">旅客 1</h3>
                                                    <p class="t-xs text-gray mb-0">姓氏
                                                        （須與旅遊證件一致）:</p>
                                                    <p class="t-s text-color mb-3">陳</p>

                                                    <p class="t-xs text-gray mb-0">名字
                                                        （須與旅遊證件一致）:</p>
                                                    <p class="t-s text-color mb-3">毛毛</p>

                                                    <p class="t-xs text-gray mb-0">身分證字號（行程保險中使用）:</p>
                                                    <p class="t-s text-color mb-3">A0000000000</p>

                                                    <p class="t-xs text-gray mb-0">出生 年/月/日（行程保險中使用）</p>

                                                    <p class="t-s text-color mb-0 pb-3 bb-line-b">2020年 10月 10日</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 single-detail-box">
                                                <div class="single-detail">
                                                    <h3 class="t-m brown-color t-bold bb-line-b pb-2 mb-3">旅客 2</h3>
                                                    <p class="t-xs text-gray mb-0">姓氏
                                                        （須與旅遊證件一致）:</p>
                                                    <p class="t-s text-color mb-3">陳</p>

                                                    <p class="t-xs text-gray mb-0">名字
                                                        （須與旅遊證件一致）:</p>
                                                    <p class="t-s text-color mb-3">毛毛</p>

                                                    <p class="t-xs text-gray mb-0">身分證字號（行程保險中使用）:</p>
                                                    <p class="t-s text-color mb-3">A0000000000</p>

                                                    <p class="t-xs text-gray mb-0">出身年月日（行程保險中使用）</p>
                                                    <p class="t-s text-color mb-0 pb-3 bb-line-b">2020年 10月 10日</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 single-detail-box">
                                                <div class="single-detail">
                                                    <h3 class="t-m brown-color t-bold bb-line-b pb-2 mb-3">寵物 1</h3>
                                                    <p class="t-xs text-gray mb-0">寶貝稱呼:</p>
                                                    <p class="t-s text-color mb-3">毛毛毛</p>


                                                    <p class="t-xs text-gray mb-0">體型:</p>
                                                    <p class="t-s text-color mb-3">大型犬</p>

                                                    <p class="t-xs text-gray mb-0">備註：</p>
                                                    <p class="t-s text-color mb-0 pb-3 bb-line-b">希望提供碗給毛毛毛喝</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="container">
                            <div class="row">
                                <button class="btn btn-outline-warning ml-auto">返回我的訂單</button>
                            </div>
                        </div>
                    </div>
                    <!-- endof oreder-list 訂單明細 -->
                </div>

            </div>






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