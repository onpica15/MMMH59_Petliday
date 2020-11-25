<?php include __DIR__ . '/../parts/config.php' ?>
<?php
if(isset($_POST['account']) and isset($_POST['password'])){
  if($_POST['account']==='boy123@petliday.com' and $_POST['password']==='test123');
  else{
    $msg = '用戶帳號或密碼不正確';
  }
}
?>


<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="user-login.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<!-- Model -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="login">
        <button data-dismiss="modal" class="close" style="margin-top: 20px;">
          <span aria-hidden="true">×</span>
        </button>

        <form class="login-form">
          <h2 class="t-xl">使用社群平台帳戶登入</h2>
          <h2 class="t-m">立即登入，隨時給毛孩獨家優惠</h2>
          <div class="login-social d-flex justify-content-center">
            <div class="login-facebook m-4"><img src="./imgs/facebook.svg" alt=""></div>
            <div class="login-line m-4"><img src="./imgs/LINE.svg" alt=""></div>
            <div class="login-google m-4"><img src="./imgs/Google.svg" alt=""></div>
            <div class="login-apple m-4"><img src="./imgs/apple.svg" alt=""></div>
          </div>

          <div class="login-border">
            <div class="text-or">或</div>
          </div>

          <h2 class="t-xl">Petliday會員登入</h2>

          <div class="login-group input-icon">
            <!-- <label for="account">帳號</label> -->
            <input type="text" class="form-control" id="account" name="account" placeholder="電子信箱">
            <img class="icon-msg" src="./imgs/mail.svg">
          </div>

          <div class="login-group input-icon">
            <!-- <label for="password">密碼</label> -->
            <input type="password" class="form-control" id="password" name="password" placeholder="密碼">
            <img class="icon-psd" src="./imgs/password.svg">
          </div>

          <?php if(isset($msg)): ?>
            <div>
              <?= $msg ?>
            </div>
          <?php endif; ?>

          <div class="login-group-2">
            <button class="login-btn btn">登入</button>
          </div>

          <div class="login-other d-flex justify-content-center">
            <a data-toggle="modal" data-target="#register_show" data-dismiss="modal">免費註冊</a>
            <span>｜</span>
            <a data-toggle="modal" data-target="#errorPassword" data-dismiss="modal" class>忘記密碼？</a>
          </div>

          <!-- 一鍵輸入 -->
          <div class="auto-input">
            <button class="input-error"></button>
            <button class="input-correct"></button>
          </div>

        </form>
      </div>
    </div> 
  </div>
</div>


<?php include __DIR__ . '/login-petliday.php' ?>
<?php include __DIR__ . '/errorpassword.php' ?>
<?php include __DIR__ . '/no-verified-email.php' ?>

<!-- scroll-top -->
<div class="scroll-top">
  <i class="fas fa-chevron-circle-up" style="color: #148F7C;"></i>
</div>


<!-- 範例 -->

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------

  // $('.register_show').on('click',function(event){
  //   event.preventDefault();
  //   console.log('register_show')
  // })

  // 錯誤登入
  $('.input-error').click(function(event){
    event.preventDefault();
    $('#account').val('abcd000@petliday.com');
    $('#password').val('test123456');
  })

  // 正確登入
  $('.input-correct').click(function(event){
    event.preventDefault();
    $('#account').val('boy123@petliday.com');
    $('#password').val('test123');
  })

  // scroll-top
  $(".scroll-top").click(function() {
    $("html,body").animate({
      "scrollTop": ""
    })
    n = 1
  })

  $(window).scroll(function() {
    if ($(window).scrollTop() <= $(".login").offset().top) {
      $(".scroll-top").css('opacity', '0');
    } else {
      $(".scroll-top").css('opacity', '1');
    }
  });

  AOS.init();


  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>