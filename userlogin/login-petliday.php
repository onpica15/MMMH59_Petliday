<link rel="stylesheet" href="user-login.css">

<!-- Model -->
<div class="modal fade" id="register_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="login">
        <button data-dismiss="modal" class="close" style="margin-top: 20px;">
          <span aria-hidden="true">×</span>
        </button>

        <form class="login-form" action="login-petliday-api.php" method="post">
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

          <h2 class="t-xl">免費註冊</h2>

          <div class="login-group input-icon">
            <!-- <label for="account">帳號</label> -->
            <input type="email" class="form-control" id="apply-email" name="email" placeholder="電子信箱">
            <img class="icon-msg" src="./imgs/mail.svg">
          </div>

          <div class="login-group input-icon">
            <!-- <label for="password">密碼</label> -->
            <input type="password" class="form-control" id="apply_password" name="password" placeholder="密碼">
            <img class="icon-psd" src="./imgs/password.svg">
          </div>

          <div class="login-group-2">
            <button class="login-btn btn">註冊</button>
          </div>

          <div class="login-other d-flex justify-content-center">
            <a data-toggle="modal" data-target="#exampleModalCenter" data-dismiss="modal">Petliday會員登入</a>
            <span>｜</span>
            <a data-toggle="modal" data-target="#noVerifiedEmail" data-dismiss="modal">尚未收到驗證信？</a>
          </div>

          <!-- 一鍵輸入 -->
          <div class="auto-input">
            <button class="input-correct"></button>
          </div>
                   
        </form>
      </div>
    </div> 
  </div>
</div>

<script>
    // 一鍵輸入：正確登入
    $('.input-correct').click(function(event) {
    event.preventDefault();
    $('#login-email').val('boy123@petliday.com');
    $('#password').val('test123');
  })
</script>