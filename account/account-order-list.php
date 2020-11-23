<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<!-- <link rel="stylesheet" href="/../css/aside-bar-style.css"> -->
<link rel="stylesheet" href="style.css">


<style>
    .aside-bar {
        position: sticky;
        top: 15px;
        box-shadow: 0px 0px 5px rgba(200, 200, 200, 0.5);
    }

    .aside-bar h2 {
        background-color: #fff;
        border-radius: 3px;
        margin-bottom: -5px;
    }

    #acount {
        width: 100%;
        height: 100%;
        margin-top: 8vh;
        background-color: #f2f2f2;
        border-radius: 25px 25px 0 0;
    }

    #list-title {
        min-height: 300px;
        background-color: #fff;
        border-radius: 3px 30px 3px 3px;
        box-shadow: 2px 2px 5px rgba(200, 200, 200, 0.5);
    }

    .line {
        width: 1rem;
        height: 2rem;
        background: #ffa12c;
        border-radius: 2px 2px 2px 13px;
    }

    .list-group-item.active {
        z-index: 2;
        color: #ffa12c;
        background-color: #f2f2f2;
        border: rgba(200, 200, 200, 0.5);
        border-left: 3px solid #ffa12c;
    }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <?php include __DIR__ . '/../account/account-aside-bar.php' ?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- oreder-list 訂單明細 -->
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">訂單明細</h4>
                                </div>
                            </div>
                            <div class="row confirm-info">
                                <div class="col-12">
                                    <h6 class="t-l">訂單已確認</h6>
                                </div>
                                <div class="qrcode justify-content-between">
                                    <div class="col-12 col-lg-3 qrcode">
                                        <img src="./img/qrcode.png" alt="">
                                    </div>
                                    <div class="col-12 col-lg-5 info-text">
                                        <p>訂單編號：00000000</p>
                                        <p>購買時間：2020/11/23</p>
                                        <h2 class="t-l">NT$2180</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row prod-detail">
                                <div class="col-6">
                                    <h6 class="t-l">標題標題標題標題標題標題標題</h6>
                                    <p>日期： 2020/08/12 pm 6:00</p>
                                    <p>數量： 2 x 人 / 1 x 犬</p>
                                </div>
                                <div class="col-6">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="row member-detail">
                                <div class="col-12">
                                    <h6 class="t-l">旅客資訊
                                    </h6>
                                    <p>姓名： 小明</p>
                                    <p>信箱： eeeee@kk.com</p>
                                    <p>聯絡電話： 0908051350</p>
                                    <p>出生日期： 2020/11/22</p>
                                    <p>身分證號碼： A2235743245</p>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn btn-outline-warning">返回歷史訂單</button>
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
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>