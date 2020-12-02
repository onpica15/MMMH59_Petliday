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
            <?php include __DIR__ . '/../account/account-aside-bar.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- list-profile 會員資料 -->
                    <div class="tab-pane fade show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" href="./account-home">
                        <!-- 會員資料 -->
                        <div class="container mb-3 list-section" id="list-title">
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
                                    <a href="#" class="camera-icon">
                                        <img src="../icon/camera.svg" alt="">
                                    </a>
                                    <div class="member-id text-center mt-3">
                                        <p> ID:pity0507
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 move-down">
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
                            <div class=" row justify-content-end">
                                <button class="btn">資料修改</button>
                                <button class="btn">密碼更改</button>
                            </div>
                        </div>
                        <!-- 寵物資料 -->
                        <div class="container mb-3 list-section" id="pet-list">
                            <div class="row pt-3 p-4">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl ">寵物資料</h4>
                            </div>
                            <!-- 單筆寵物資料 -->
                            <div class="row" id="pet-info">
                                <div class="col-12 col-lg-4 pet-card d-flex justify-content-center">
                                    <div class="pet-img">
                                        <img src="./img/head.png" alt="">
                                    </div>
                                    <a href="./account-edit.php" class="edit-round">
                                        <img src="./img/edit-round.svg" alt="">
                                    </a>

                                </div>
                                <div class="form-move-down col-12 col-lg-6">
                                    <div>
                                        <div class=" d-flex">
                                            <i class="fas fa-bone title-icon"></i>
                                            <h6 class="form-title t-l">Qbone</h6>
                                            <i class="fas fa-bone title-icon"></i>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">品種</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">年齡</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">生日</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-2 d-flex justify-content-around align-items-center" id="page-icon">
                                    <a href="" class="edit-icon">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="" class="del-icon">
                                        <img src="../icon/trash.svg" alt="">
                                    </a>
                                </div>

                            </div>
                            <!-- ----------------------------- -->
                            <div class="row" id="pet-info">
                                <div class="col-12 col-lg-4 pet-card d-flex justify-content-center">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <a href="./account-edit.php" class="edit-round">
                                        <img src="./img/edit-round.svg" alt="">
                                    </a>

                                </div>
                                <div class="form-move-down col-12 col-lg-6">
                                    <div>
                                        <div class=" d-flex">
                                            <i class="fas fa-bone title-icon"></i>
                                            <h6 class="form-title t-l">Qbone</h6>
                                            <i class="fas fa-bone title-icon"></i>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">品種</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="柴犬">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">年齡</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1歲">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-lg-2 col-form-label">生日</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2019/09/10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-2 d-flex justify-content-around align-items-center" id="page-icon">
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
                    <div class="tab-pane fade list-section" id="list-order" role="tabpanel" aria-labelledby="list-order-list">

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

                    <!--  願望清單 -->
                    <div class="tab-pane fade list-section" id="list-wish" role="tabpanel" aria-labelledby="list-wish-list">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">願望清單</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endof 願望清單 -->

                    <!--  會員信箱 -->
                    <div class="tab-pane fade list-section" id="list-mailbox" role="tabpanel" aria-labelledby="list-mailbox-list">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">會員信箱</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- endof 會員信箱 -->

                    <!--  優惠券 -->
                    <div class="tab-pane fade list-section" id="list-coupon" role="tabpanel" aria-labelledby="list-coupon-list">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">優惠券</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- endof 優惠券 -->

                    <!--  Q&A -->
                    <div class="tab-pane fade list-section" id="list-qa" role="tabpanel" aria-labelledby="list-qa-list">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">Q&A</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- endof Q&A -->

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
    $('.list-group-item').on('click', function() {
        // console.log('hi')
        // $('.list-group-item').removeClass('active');
        // $(this).addClass('active');
        // location.hash = $(this).attr('href');
    })


    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>