<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="user-login.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<div class="container mt-5">

  <h1 class="orange-color t-xxxl bg-color ">Hello!開始開心寫網站 orange-color t-xxxl bg-color</h1>
  <br>
  <h6 class="brown-color t-xxl ">毛日 brown-color t-xxl</h6>
  <br>
  <h6 class="green-color t-xl">毛日 green-color t-xl</h6>
  <br>
  <h6 class="danger-color t-l">毛日 danger-color t-l</h6>
  <br>
  <h6 class="text-color t-m">毛日 text-color t-m</h6>
  <br>
  <h6 class="text-color t-s">毛日 text-color t-s</h6>
  <br>
  <h6 class="text-gray t-xs">毛日 text-gray t-xs</h6>

  <button class="btn">測試 class='btn'</button>

</div>

<!-- Model -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="login">
      <button data-dismiss="modal" class="close">
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
        <div class="login-group">
          <!-- <label for="account">帳號</label> -->
          <input type="text" class="form-control" id="account" name="account" placeholder="電子信箱">
        </div>

        <div class="login-group">
          <!-- <label for="password">密碼</label> -->
          <input type="password" class="form-control" id="password" name="password" placeholder="密碼">
        </div>

        <div class="login-group-2">
          <button class="login-btn btn">登入</button>
        </div>

        <div class="login-other">
          <a href="login-petliday.php">免費註冊</a>
          <span>｜</span>
          <a href="errorpassword.php">忘記密碼？</a>
        </div>

      </form>
    </div>
  </div>
</div>


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