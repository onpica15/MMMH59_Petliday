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

<div class="container">
  <div class="row">
    <div class="login">
      <form class="login-form">
        <h2 class="t-xl">使用社群平台帳戶登入</h2>
        <h2 class="t-m">立即登入，隨時給毛孩獨家優惠</h2>
        <div class="login-social">
          <!-- 放社群icon -->
        </div>
        
        <div class="col-lg-5" style="padding-left: 0;">
          <hr>
        </div>
        <div class="col-lg-2" style="font-size: 14px; text-align: center; padding: 7px;">
          或
        </div>
        <div class="col-lg-5" style="padding-right: 0;">
          <hr>
        </div>

        <h2 class="t-xl">Petliday會員登入</h2>
        <div class="login-group">
          <!-- <label for="account">電子信箱</label> -->
          <input type="text" class="form-control" id="account" name="account" placeholder="電子信箱">
        </div>
        <div class="login-group">
          <!-- <label for="password">密碼</label> -->
          <input type="password" class="form-control" id="password" name="password" placeholder="密碼">
        </div>
      </form>
    </div>
  </div>
</div>



<!-- 範例 -->






<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>