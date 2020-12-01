<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="rating.css">

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
<!-- rating -->
<div class="index-rating">
  <span>逛得愉快嗎<img src="./imgs/bone.svg" alt="bone"></span>
</div>

<div class="rating-info">
  <p>Petliday 網頁瀏覽是否滿意？</p>
  <form>
    <div class="rating-bone">
      <input id="bone5" name="bone" type="radio" value="5" class="radio-btn hide" />
      <label for="bone5"><img src="./imgs/bone-2.svg" alt=""></label>

      <input id="bone4" name="bone" type="radio" value="4" class="radio-btn hide" />
      <label for="bone4"><img src="./imgs/bone-2.svg" alt=""></label>

      <input id="bone3" name="bone" type="radio" value="3" class="radio-btn hide" />
      <label for="bone3"><img src="./imgs/bone-2.svg" alt=""></label>

      <input id="bone2" name="bone" type="radio" value="2" class="radio-btn hide" />
      <label for="bone2"><img src="./imgs/bone-2.svg" alt=""></label>

      <input id="bone1" name="bone" type="radio" value="1" class="radio-btn hide" />
      <label for="bone1"><img src="./imgs/bone-2.svg" alt=""></label>

      <div class="clear"></div>
    </div>
  </form>

  <div class=" col-10 col-lg-4 ">
    <div class="rating-input d-flex mt-2 ml-2">
      <input type="text" class="form-control" placeholder="輸入更多回饋" aria-label="Recipient's username" aria-describedby="button-addon2" id="rating-input">
      <div class="rating-input-append">
        <button type="button" id="rating-btn">送出</button>
      </div>
    </div>
  </div>
</div>


<!-- scroll_top -->
<div class="scroll_top">
  <i class="fas fa-chevron-circle-up" style="color: #148F7C;"></i>
</div>





<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------

  // scroll_top
  $(".scroll_top").click(function() {
    $("html,body").animate({
      "scrollTop": ""
    })
    n = 1
  })

  $(window).scroll(function() {
    if ($(window).scrollTop() <= $(".login").offset().top) {
      $(".scroll_top").css('opacity', '0');
    } else {
      $(".scroll_top").css('opacity', '1');
    }
  });

  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>