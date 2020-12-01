<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="scrollTop.css">

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

<!-- scroll-top -->
<div class="scroll-top">
  <i class="fas fa-chevron-circle-up"></i>
</div>





<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------

  // scroll-top
  $(".scroll-top").click(function() {
    $("html,body").animate({
      "scrollTop": ""
    })
    n = 1
  })

  // $(".scroll-top").fadeOut(0);
  $(window).scroll(function() {
    if ($(window).scrollTop() <= $(".hero").offset().top) {
      $(".scroll-top").css('opacity', '0');
    } else {
      $(".scroll-top").css('opacity', '1');
    }
  });

  AOS.init();
  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>