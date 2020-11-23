<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
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
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- list-profile 會員資料 -->
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <!-- 會員資料 -->
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">會員資料</h4>
                                </div>
                            </div>
                            <div class="row member-info">
                                <div class="col-12 col-lg-4 position-relative member-card ">
                                    <div class="member-img   position-absolute">
                                        <img src="./img/avatar-1.jpg" alt="">

                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>
                                    <div class="member-id text-center mt-3">
                                        <p> ID:pity0507
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">姓名</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="黎小霈">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/08/24">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pity0824@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">地址</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="台北市">
                                            </div>
                                        </div>
                                        <br>

                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">資料修改</button>
                                <button class="btn">密碼更改</button>

                            </div>
                        </div>
                        <!-- 寵物資料 -->
                        <div class="col mb-3" id="pet-list">
                            <div class="row pt-3 p-4">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl ">寵物資料</h4>
                            </div>
                            <!-- 單筆寵物資料 -->
                            <div class="row" id="pet-info">
                                <div class="col-4 pet-card">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <h6 class="t-l">Qbone</h6>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">品種</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">年齡</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 d-flex justify-content-around align-items-center" id="page-icon">
                                    <a href="" class="edit-icon">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="" class="del-icon">
                                        <img src="../icon/trash.svg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="row" id="pet-info">
                                <div class="col-4 pet-card">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <a href="" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <h6 class="t-l">Qbone</h6>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">品種</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">年齡</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 d-flex justify-content-around align-items-center" id="page-icon">
                                    <a href="" class="edit-icon">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="" class="del-icon">
                                        <img src="../icon/trash.svg" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">新增寵物</button>
                            </div>
                        </div>

                    </div>
                    <!-- endof list-profile -->

                    <!-- list-order 我的訂單 -->
                    <div class="tab-pane fade" id="list-order" role="tabpanel" aria-labelledby="list-order-list">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">我的訂單</h4>
                                </div>
                            </div>
                            <!-- search -->
                            <div class="row search w-100">
                                <input class="col-12" type="search" placeholder="搜索歷史清單" aria-label="Search">
                                <button class="btn-search" type="submit">go</button>
                            </div>
                            <!-- ----prod-box---- -->


                            <div class="row prod-box d-flex align-items-center">
                                <div class="prod-img col-2 col-lg-2">
                                    <img src="../products/img/pd6.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-7 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">標題標題標題標題標題標題標題標題題標題</h5>
                                    <h6 class="t-m title1-m">方案類型:恆春二日遊</h6>

                                    <div class="small-text">
                                        <h6 class=" text-gray t-s">訂購日期: 2020/08/12 pm 6:00</h6>

                                    </div>
                                </div>
                                <div class="col-1 col-lg-3 d-flex flex-column ml-auto align-self-end">
                                    <h5 class="mb-4 ml-auto t-m brown-color prod-price-in">NT$ 3000</h5>
                                    <h5 class="ml-auto green-color t-l title1-m">訂單已完成</h5>
                                </div>



                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">訂單明細</button>
                                <button class="btn">訂單評論</button>
                            </div>


                            <!-- ----endof prod-box---- -->

                        </div>
                    </div>

                    <!-- endof list-order 我的訂單 -->

                    <div class="tab-pane fade" id="list-wish" role="tabpanel" aria-labelledby="list-wish-list">願望清單
                    </div>
                    <div class="tab-pane fade" id="list-mailbox" role="tabpanel" aria-labelledby="list-mailbox-list">會員信箱

                    </div>
                    <div class="tab-pane fade" id="list-coupon" role="tabpanel" aria-labelledby="list-coupon-list">優惠券

                    </div>
                    <div class="tab-pane fade" id="list-qa" role="tabpanel" aria-labelledby="list-qa-list">Q&A

                    </div>
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



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>