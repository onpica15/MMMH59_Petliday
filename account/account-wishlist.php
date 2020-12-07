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
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="">
                    <!--wishlist 願望清單 -->
                    <div class="tab-pane list-section">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">願望清單</h4>
                                </div>
                            </div>
                        </div>



                    </div>

                    <!-- endof wishlist 願望清單 -->



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