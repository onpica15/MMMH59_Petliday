<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>cart/cart-style.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<div class="container cart-title">
  <div class="row">
    <div class="col-12 ">
      <h1 class="brown-color t-xxl">購物車</h1>
    </div>
  </div>

</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-12 prod-box p-4 d-flex">
      <div class="prod-img ">
        <img src="../products/img/pdpage-info-img2.jpg" alt="">
      </div>
      <div class="prod-text pl-3 pr-4 d-flex flex-column align-content-between">
        <h5 class="brown-color t-l">標題標題標題標題標題標題標題標題題標題</h5>
        <div class="small-text">
          <h6 class=" text-color t-s">2020/08/12 pm 6:00</h6>
          <p class=" green-color t-s">修改日期 ></p>
        </div>

      </div>
      <div class="change-box align-items-center">
        <div class="man-box p-2">

          <div class="change-man d-flex d-flex align-items-center">
            <p class="mr-1 mb-0">人數：</p>
            <div class="change-btn subtr-btn">-</div>
            <div class="change-quantity">1</div>
            <div class="change-btn add-btn">+</div>
          </div>
        </div>
        <div class="pet-box p-2">

          <div class="change-man d-flex d-flex align-items-center">
            <p class="mr-1 mb-0">寵物：</p>
            <div class="change-btn subtr-btn">-</div>
            <div class="change-quantity">1</div>
            <div class="change-btn add-btn">+</div>
          </div>
        </div>


      </div>
      <div class="prod-price p-5 d-flex align-items-center">
        <h5 class="t-m brown-color">NT$ 3000</h5>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 total-box d-flex justify-content-end align-items-center">
      <div class="danger-color t-l">總計: NT$ <span class="danger-color t-xl"> 3000</span> </div>

      <a href="#">
        <div class="buy-btn btn d-flex align-items-center justify-content-center">結帳</div>
      </a>


    </div>
  </div>
</div>
</div>

<div class="container mt-5">
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












<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>