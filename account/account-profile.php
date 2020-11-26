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