

<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<style>
<?php include __DIR__ .  '/../userlogin/user-login.css' ?> 
</style>
<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<!-- Model -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">
      <div class="login">
      

        <form class="login-form" name="login-form" onsubmit="checkForm(); return false;">
        <div id="info_bar" class="alert alert-danger" role="alert" style="display: none"></div>
        <button data-dismiss="modal" class="close" style="position:absolute;top:14px;right:0;">
          <span aria-hidden="true">×</span>
        </button>
        
        
          <h2 class="t-xl">使用社群平台帳戶登入</h2>
          <h2 class="t-m">立即登入，隨時給毛孩獨家優惠</h2>
          <div class="login-social d-flex justify-content-center">
            <div class="login-facebook m-4"><img src="/PETLIDAY/userlogin/imgs/facebook.svg" alt=""></div>
            <div class="login-line m-4"><img src="/PETLIDAY/userlogin/imgs/LINE.svg" alt=""></div>
            <div class="login-google m-4"><img src="/PETLIDAY/userlogin/imgs/Google.svg" alt=""></div>
            <div class="login-apple m-4"><img src="/PETLIDAY/userlogin/imgs/apple.svg" alt=""></div>
          </div>

          <div class="login-border">
            <div class="text-or">或</div>
          </div>

          <h2 class="t-xl">Petliday會員登入</h2>

          <div class="login-group input-icon">
            <!-- <label for="email">帳號</label> -->
            <input type="email" class="form-control" id="login-email" name="email" placeholder="電子信箱" required oninvalid="setCustomValidity('請填寫您的信箱');" oninput="setCustomValidity('');">
            <img class="icon-msg" src="/PETLIDAY/userlogin/imgs/mail.svg">
          </div>

          <div class="login-group input-icon">
            <!-- <label for="password">密碼</label> -->
            <input type="password" class="form-control" id="password" name="password" placeholder="密碼" required>
            <img class="icon-psd" src="/PETLIDAY/userlogin/imgs/password.svg">
          </div>

          <div class="login-group-2">
            <button class="login-btn btn">登入</button>
          </div>

          <div class="login-other d-flex justify-content-center">
            <a data-toggle="modal" data-target="#register_show" data-dismiss="modal">免費註冊</a>
            <span>｜</span>
            <a data-toggle="modal" data-target="#errorPassword" data-dismiss="modal" class>忘記密碼</a>
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
<!-- <div class="scroll-top">
  <i class="fas fa-chevron-circle-up" style="color: #148F7C;"></i>
</div> -->


<!-- 範例 -->

<!-- ------------------ body結束 ------------------ -->

<!-- ---------------js/jq 開始 ------------------ -->
<?php // include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------
  const email = $('#login-email'),
    password = $('#password'),
    info_bar = $('#info_bar');

  function checkForm() {

    $.post('/PETLIDAY/userlogin/user-login-api.php', {
        email: email.val(),
        password: password.val()
      },
      function(data) {
        if (data.success) {
          info_bar
            .removeClass('alert-danger')
            .addClass('alert-success')
            .text('登入成功');
            console.log('location pathname',location.pathname)
            console.log('location href',location.href)

            if(location.pathname === '/PETLIDAY/index/index%EF%BC%BF.php'){
              location.reload();
            }
            else{
              
            }
          
        } else {
          info_bar
            .removeClass('alert-success')
            .addClass('alert-danger')
            .text('登入失敗');
        }
        info_bar.slideDown();

        setTimeout(function() {
          info_bar.slideUp();
        }, 2000);
      }, 'json');
  }

  // $('.register_show').on('click',function(event){
  //   event.preventDefault();
  //   console.log('register_show')
  // })

  // 一鍵輸入：錯誤登入
  $('.input-error').click(function(event) {
    event.preventDefault();
    $('#login-email').val('abcd000@petliday.com');
    $('#password').val('test123456');
  })

  // 一鍵輸入：正確登入
  $('.input-correct').click(function(event) {
    event.preventDefault();
    $('#login-email').val('boy123@petliday.com');
    $('#password').val('test123');
  })

  // scroll-top
  // $(".scroll-top").click(function() {
  //   $("html,body").animate({
  //     "scrollTop": ""
  //   })
  //   n = 1
  // })

  // $(window).scroll(function() {
  //   if ($(window).scrollTop() <= $(".login").offset().top) {
  //     $(".scroll-top").css('opacity', '0');
  //   } else {
  //     $(".scroll-top").css('opacity', '1');
  //   }
  // });




  // ------JS結束 勿刪到-------
</script>
