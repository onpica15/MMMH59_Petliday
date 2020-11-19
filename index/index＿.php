<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="index.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<!-- 拍立得section -->
<section id="hero-polaroid">
  <div class="polaroid-base d-flex position-relative justify-content-center">
    <div class="polaroid-figure col-10 position-absolute"></div>
  </div>
</section>
<!-- 插圖介紹section -->
<section id="petliday-wrap">
  <div class="container">
    <div class="row justify-item-center my-5">
      <div class="logo-sentence mx-auto">
        <img src="img/illustration/petliday.png" alt="">
      </div>
    </div>
    <div class="row d-flex justify-content-between my-5">
      <div class="col-4 d-flex petliday-card">
        <figure class="row petliday-fig mx-auto">
          <img src="img/illustration/index-dog1.png" alt="">
        </figure>
        <div class="row">
          <p class="petliday-title">放鬆</p>
          <p class="petliday-content">最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
        </div>
      </div>

      <div class="col-4 d-flex petliday-card">
        <figure class="row petliday-fig mx-auto">
          <img src="img/illustration/index-dog2.png" alt="">
        </figure>
        <div class="row">
          <p class="petliday-title">一起體驗</p>
          <p class="petliday-content">我們搜羅了全台最適合與狗狗一起同遊、體驗的景點與活動！</p>
        </div>
      </div>

      <div class="col-4 d-flex petliday-card">
        <figure class="row petliday-fig mx-auto">
          <img src="img/illustration/index-dog3.png" alt="">
        </figure>
        <div class="row">
          <p class="petliday-title">放鬆</p>
          <p class="petliday-content">最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 同樂目的地section -->
<section id="destination">
  <!-- 腳印標題那部分 -->
  <div class="container">
    <div class="row d-flex flex-start align-items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.2 20.76">
        <g id="圖層_2" data-name="圖層 2">
          <g id="圖層_1-2" data-name="圖層 1">
            <g id="Group_518" data-name="Group 518">
              <path id="Path_424" data-name="Path 424" class="cls-1" d="M19,10.48a10.48,10.48,0,0,0-12.88,0,6.6,6.6,0,0,0-2.8,5c0,3.27,3.54,5.3,9.24,5.3s9.24-2,9.24-5.3A6.6,6.6,0,0,0,19,10.48Z" />
              <path id="Path_425" data-name="Path 425" class="cls-1" d="M12.61,6.91A3.47,3.47,0,1,0,8.75,3.47,3.68,3.68,0,0,0,12.61,6.91Z" />
              <path id="Path_426" data-name="Path 426" class="cls-1" d="M25,5.85a4.26,4.26,0,0,0-4.61-2.66,3.15,3.15,0,0,0-2.66,3.55,3,3,0,0,0,.2.72A4.13,4.13,0,0,0,19.74,9.6a4.34,4.34,0,0,0,2.11.58,3.68,3.68,0,0,0,.66-.06,3.12,3.12,0,0,0,2.66-3.55A3.06,3.06,0,0,0,25,5.85Z" />
              <path id="Path_427" data-name="Path 427" class="cls-1" d="M7.25,7.46A3.12,3.12,0,0,0,5.51,3.39a3.09,3.09,0,0,0-.72-.2A4.12,4.12,0,0,0,2,3.72,3.65,3.65,0,0,0,.37,8.59h0a3.25,3.25,0,0,0,2.27,1.53,3.68,3.68,0,0,0,.66.06A4.14,4.14,0,0,0,5.41,9.6,4.07,4.07,0,0,0,7.25,7.46Z" />
            </g>
          </g>
        </g>
      </svg>
      <span>
        <h6 class="des-title brown-color t-xxl m-0">同樂目的地</h6>
      </span>
    </div>
  </div>
  <!-- 同樂目的地卡片 -->
  <div class="container">
    <div class="row d-flex des-row flex-nowrap justify-content-center">
      <div class="col-3 des-card">
        <figure>
          <img src="img/scenary-im2.jpg" alt="">
        </figure>
        <h6 class="t-l">北部旅遊</h6>
      </div>
      <div class="col-3 des-card">
        <figure>
          <img src="" alt="">
        </figure>
        <h6 class="t-l">中部旅遊</h6>
      </div>
      <div class="col-3 des-card">
        <figure>
          <img src="" alt="">
        </figure>
        <h6 class="t-l">南部旅遊</h6>
      </div>
      <div class="col-3 des-card">
        <figure>
          <img src="" alt="">
        </figure>
        <h6 class="des-card-text t-l">東部、離島旅遊</h6>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- 精選行程section -->
<section id="tour">
  <!-- 腳印標題那部分 -->
  <div class="container">
    <div class="row d-flex flex-start align-items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.2 20.76">
        <g id="圖層_2" data-name="圖層 2">
          <g id="圖層_1-2" data-name="圖層 1">
            <g id="Group_518" data-name="Group 518">
              <path id="Path_424" data-name="Path 424" class="cls-1" d="M19,10.48a10.48,10.48,0,0,0-12.88,0,6.6,6.6,0,0,0-2.8,5c0,3.27,3.54,5.3,9.24,5.3s9.24-2,9.24-5.3A6.6,6.6,0,0,0,19,10.48Z" />
              <path id="Path_425" data-name="Path 425" class="cls-1" d="M12.61,6.91A3.47,3.47,0,1,0,8.75,3.47,3.68,3.68,0,0,0,12.61,6.91Z" />
              <path id="Path_426" data-name="Path 426" class="cls-1" d="M25,5.85a4.26,4.26,0,0,0-4.61-2.66,3.15,3.15,0,0,0-2.66,3.55,3,3,0,0,0,.2.72A4.13,4.13,0,0,0,19.74,9.6a4.34,4.34,0,0,0,2.11.58,3.68,3.68,0,0,0,.66-.06,3.12,3.12,0,0,0,2.66-3.55A3.06,3.06,0,0,0,25,5.85Z" />
              <path id="Path_427" data-name="Path 427" class="cls-1" d="M7.25,7.46A3.12,3.12,0,0,0,5.51,3.39a3.09,3.09,0,0,0-.72-.2A4.12,4.12,0,0,0,2,3.72,3.65,3.65,0,0,0,.37,8.59h0a3.25,3.25,0,0,0,2.27,1.53,3.68,3.68,0,0,0,.66.06A4.14,4.14,0,0,0,5.41,9.6,4.07,4.07,0,0,0,7.25,7.46Z" />
            </g>
          </g>
        </g>
      </svg>
      <span>
        <h6 class="des-title brown-color t-xxl m-0">精選行程</h6>
      </span>
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