<?php include __DIR__ . '/../parts/config.php';
// $stmt = $pdo->query("SELECT * FROM `member_avatar` WHERE `sid` IN (1)
// ");
// $rows = $stmt->fetchAll();
// echo json_encode($_SESSION);

?>

<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">
<style>
    small.form-text {
        color: red;
    }
</style>

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
                <div class="tab-content" id="nav-tabContent">
                    <!-- list-profile 會員資料 -->
                    <div class="tab-pane show active " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <!-- 會員資料 -->
                        <!-- 連接資料庫 -->


                        <div class="container mb-3 list-section" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl auto-input">會員資料</h4>
                                </div>
                            </div>
                            <div class="row member-info">
                                <div class="col-12 col-lg-4 position-relative member-card ">

                                    <!-- uploadimg -->
                                    <?php
                                    require __DIR__ . '/processForm.php';
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
                                        <p> ID : <?= substr($_SESSION['member_avatar']['email'], 0, strpos($_SESSION['member_avatar']['email'], '@')) ?>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-8 move-down mt-xs-2">

                                    <form class="is-readonly">
                                        <div class="form-group d-flex">
                                            <label for="name" class="label-w col-form-label">姓名:</label>
                                            <input type="text" class="col-lg-6 form-control form-input is-disabled" id="name" name="name" placeholder="例:派大星" value="" disabled>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="sex" class="label-w col-form-label">性別:</label>
                                            <input type="text" class="col-lg-6 form-control form-input is-disabled" id="sex" name="sex" placeholder="男/女" value="" disabled>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="phone" class="label-w col-form-label">電話 :</label></label>
                                            <input type="phone" class="col-lg-6 form-control form-input is-disabled" id="phone" name="phone" placeholder="例:0908087020" value="" disabled>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="birthday" class="label-w col-form-label">生日 :</label>
                                            <input type="date" class="col-lg-6 form-control form-input is-disabled" id="birthday" name="birthday" placeholder="年/月/日" value="" disabled>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="email" class="label-w col-form-label">信箱 :</label>
                                            <input type="email" class="col-lg-6 form-control form-input is-disabled" id="email" name="email" placeholder="例:example@gmail.com" value="<?= $_SESSION['member_avatar']['email'] ?>" disabled>
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
                                <h4 class="t-xxl auto-input2">寵物資料</h4>
                            </div>
                            <!-- 單筆寵物資料 -->
                            <div class="row" id="pet-info">
                                <div class="col-12 col-lg-4 pet-card d-flex justify-content-center pt-3">
                                    <div class="pet-img">
                                        <img src="./img/head.png" alt="">
                                    </div>
                                    <a href="./account-edit.php" class="edit-round">
                                        <img src="./img/edit-round.svg" alt="">
                                    </a>

                                </div>
                                <form class="col-12 col-lg-8 is-readonly mt-small-2" name="formp" onsubmit="checkForm(); return false;" novalidate>
                                    <div class="row">
                                        <div class="col-lg-8 d-inline-block my-4 my-lg-0">
                                            <input type="hidden" name="sid" value="<?= $r['sid'] ?>">

                                            <div class="form-group d-flex">
                                                <label for="name2" class="col-form-label label-w">小名 :</label>
                                                <input type=" text" name="name2" id="name2" class="form-control form-input is-disabled" disabled>
                                                <small class="form-text"></small>

                                                <!-- <i class="fas fa-bone title-icon"></i> -->
                                            </div>
                                            <div class="form-group d-flex">
                                                <label for="breed" class="col-form-label label-w">品種 :</label>
                                                <input type="text" name="breed" id="breed" class="form-control form-input is-disabled" disabled>
                                            </div>
                                            <div class="form-group d-flex">
                                                <label for="age" class="col-form-label label-w">年齡 :</label>
                                                <input type="text" name="age" id="age" class="form-control form-input is-disabled" disabled>
                                            </div>
                                            <div class="form-group d-flex">
                                                <label for="birthday2" class="col-form-label label-w">生日 :</label>
                                                <input type="date" name="birthday2" id="birthday2" class="form-control form-input is-disabled" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 m-auto" style="display: inline-block;">
                                            <button type="button" class="btn-icon btn-default btn-edit js-edit mr-2">
                                                <div class="edit-icon">
                                                    <img src="../icon/edit.svg" alt="">
                                                </div>
                                            </button>
                                            <button type="button" class="btn-icon btn-default btn-save js-save mr-2">
                                                <div class="edit-icon">
                                                    <img src="../icon/success.svg" alt="">
                                                </div>
                                            </button>
                                            <button type="button" class="btn-icon btn-default ">
                                                <div class="edit-icon">
                                                    <img src="../icon/trash.svg" alt="">
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- 這個可以送出表單<button type="submit" class="btn btn-primary">完成修改</button> -->


                                    <!-- 
                                            <a href="ab-edit.php?sid<?= $r['sid'] ?>" class="edit-icon">
                                                <img src="../icon/edit.svg" alt="">
                                            </a>
                                           -->
                                </form>
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







<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script src="script.js"></script>

<script>
    // 欄位編及 儲存欄位
    $(document).ready(function() {
        $('.js-edit, .js-save').on('click', function() {
            let $form = $(this).closest('form');
            $form.toggleClass('is-readonly is-editing');
            let isReadonly = $form.hasClass('is-readonly');
            $form.find('input,textarea').prop('disabled', isReadonly);
        });
    });

    // 一鍵填入
    $('.auto-input').click(function(event) {
        event.preventDefault();
        $('#name').val('柯基裘');
        $('#birthday').val('1995-12-05');
        $('#sex').val('男');
        $('#phone').val('0908512320');

        // $.post('xxxapi.php',{
        //     name:'柯基裘',
        // },)

        $('.user-name').html('柯基裘')

    })
    $('.auto-input2').click(function(event) {
        event.preventDefault();
        $('#name2').val('黑糖');
        $('#birthday2').val('2014-05-05');
        $('#breed').val('米克斯');
        $('#age').val('6歲');

    })
    // 刪除寵物表單資料
    // function delete_it(sid) {
    //     if (confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)) {
    //         location.href = "ab-del.php?sid=" + sid;
    //     }
    // }

    // 定義檢查格式
    // const name = $('#name'),
    // age = $('#age'),
    // info_bar = $('#info_bar')

    // function checkForm() {
    // name.next().text('');
    // age.next().text('');

    // let isPass = true;
    // if (name.val().length < 2) { // isPass=false; // name.next().text('請填寫正確的姓名!'); // } // if (age.val().length < 1) { // isPass=false; // // 設定small這個標籤 // age.next().text('請填寫正確的年齡!'); // } 
    // ajax 用$()包起來$(document.form1)轉換為jquery if (isPass) { $.post('account-pet-insert-api.php', $(document.formp).serialize(), function(data) { console.log(data); // if (data.success) { // info_bar // .removeClass('alert-danger') // .addClass('alert-success') // .text('完成新增'); // } else { // info_bar // .removeClass('alert-success') // .addClass('alert-danger') // .text(data.error || '新增失敗' ); // } // info_bar.slideDown(); // setTimeout(function() { // info_bar.slideUp(); // }, 2000); }, 'json' ) // 傳回來的字串自動轉成 } } 
    // ------JS結束 勿刪到------- 
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>