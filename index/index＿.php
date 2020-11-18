<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<style>
  body {
    background-color: #bce2e2;
  }

  .polaroid-base {
    margin: 3% auto;
    width: 90vw;
    height: 100vh;
    box-shadow: 3px 3px 20px 0 rgba(0, 0, 0, 0.4);
    background-color: #F2F2F2;
    transform: rotate(-2deg);
    -webkit-transform: rotate(-2deg);
    -o-transform: rotate(-2deg);
    -ms-transform: rotate(-2deg);
  }

  .polaroid-figure {
    margin: 3% auto;
    width: 90vw;
    height: 70vh;
    box-shadow: rgba(0, 0, 0, 0.4) 3px 3px 15px 0px inset;
    background: url() no-repeat;
    background-size: cover;
  }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<!-- 拍立得section -->
<section>
  <div class="polaroid-base d-flex position-relative justify-content-center">
    <div class="polaroid-figure col-10 position-absolute"></div>
  </div>
</section>
<section>
  <p></p>
  <div class="container">
    <div class="row d-flex justify-content-between">
      <figure class="col-4">
        <img src="img/index-dog1.png" alt="">
        <h3>放鬆</h3>
        <p>最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
      </figure>
      <figure class="col-4">
        <img src="img/index-dog2.png" alt="">
        <h3>一起體驗</h3>
        <p>我們搜羅了全台最適合與狗狗一起同遊、體驗的景點與活動！</p>
      </figure>
      <figure class="col-4">
        <img src="img/index-dog3.png" alt="">
        <h3>放鬆</h3>
        <p>最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
      </figure>
    </div>
  </div>
</section>









<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>