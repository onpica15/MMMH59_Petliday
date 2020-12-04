<?php include __DIR__ . '/../parts/config.php';
$stmt = $pdo->query("SELECT * FROM `member_avatar` WHERE `sid` IN (1)
");
$rows = $stmt->fetchAll();
?>

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
                    <div class="tab-pane show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" href="./account-home">
                        <!-- 會員資料 -->
                        <!-- 連接資料庫 -->

                        <!-- <?php foreach ($rows as $r) : ?>
                                   
                                <?php endforeach; ?> -->

                        <div class="container mb-3 list-section" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">會員資料</h4>
                                </div>
                            </div>
                            <div class="row member-info">
                                <div class="col-12 col-lg-4 position-relative member-card ">

                                    <!-- uploadimg -->
                                    <?php
                                    require __DIR__ . './processForm.php';
                                    ?>
                                    <!-- <div class="form-group text-center"> -->
                                    <div class="member-img   position-absolute">
                                        <img src="./img/img-upload.jpg" id="profileDisplay" alt="">
                                    </div>
                                    <button class=" btn-none camera-icon" onclick="triggerClick()">
                                        <img src="../icon/camera.svg" alt="">
                                    </button>
                                    <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;">
                                    <!-- </div> -->
                                    <!-- 網路上的 -->
                                    <?php
                                    // require __DIR__ . './processForm.php';
                                    ?>
                                    <!-- <div class="form-group text-center">
                                        <img src="img/head.png" onclick="triggerClick()" id="profileDisplay">
                                        <label for="profileTmage">profile image</label>
                                        <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;">
                                    </div> -->
                                    <!-- 老師教的 -->
                                    <!-- <form name="form1" style="display: none">
                                        <input type="file" name="avatar" accept="image/*" />
                                    </form>

                                    <button class="btn-none camera-icon" id="save_profile" onclick="field.click()">
                                        <img src="../icon/camera.svg" alt="">
                                    </button>
                                    <img id="myimg" src="" alt="" /> -->


                                    <!-- endof uploadimg -->
                                    <div class="member-id text-center mt-3">
                                        <p> ID : <?= $r['id'] ?>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-8 move-down">

                                    <form class="is-readonly">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">姓名</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-input is-disabled" id="name" name="name" placeholder="例:派大星" value="<?= $r['name'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">性別</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-input is-disabled" id="password" name="password" placeholder="男/女" value="女" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 col-form-label">電話</label></label>
                                            <div class="col-sm-10">
                                                <input type="phone" class="form-control form-input is-disabled" id="phone" name="phone" placeholder="例:0908087020" value="0<?= $r['mobile'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="birthday" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-input is-disabled" id="birthday" name="birthday" placeholder="年/月/日" value="<?= $r['birthday'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">信箱</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-input is-disabled" id="email" name="email" placeholder="例:example@gmail.com" value="<?= $r['email'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <button type="button" class="btn btn-default btn-edit js-edit">資料修改</button>
                                            <button type="button" class="btn btn-default btn-save js-save">儲存修改</button>
                                            <button class="btn">密碼更改</button>

                                        </div>
                                    </form>

                                </div>
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

<script src="script.js"></script>

<script>
    $(document).ready(function() {
        $('.js-edit, .js-save').on('click', function() {
            let $form = $(this).closest('form');
            $form.toggleClass('is-readonly is-editing');
            let isReadonly = $form.hasClass('is-readonly');
            $form.find('input,textarea').prop('disabled', isReadonly);
        });
    });
    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>