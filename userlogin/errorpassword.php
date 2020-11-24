<link rel="stylesheet" href="user-login.css">

<!-- Model -->
<div class="modal fade" id="errorPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="login">
        <button data-dismiss="modal" class="close" style="margin-top: 20px;">
          <span aria-hidden="true">×</span>
        </button>

        <form class="login-form-two">
          <h2 class="t-xl">重設密碼</h2>
          <h2 class="t-m" style="line-height:24px;">輸入您當初註冊的電子信箱<br>我們會發送重設密碼的連結給您</h2>

          <div class="login-group input-icon">
            <!-- <label for="account">帳號</label> -->
            <input type="text" class="form-control" id="account" name="account" placeholder="電子信箱">
            <img class="icon-msg" style="bottom:209px;" src="./imgs/mail.svg">
          </div>

          <div class="login-group-2">
            <button class="login-btn btn">重新寄出驗證信</button>
          </div>

          <div class="login-other">
            <a data-toggle="modal" data-target="#exampleModalCenter" data-dismiss="modal">Petliday會員登入</a>
            <span>｜</span>
            <a data-toggle="modal" data-target="#register_show" data-dismiss="modal">免費註冊</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>