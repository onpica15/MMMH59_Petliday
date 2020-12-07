<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="her0.css">
<link rel="stylesheet" href="index2.css">
<style>
  .cls-3 {
    fill: #00907c;
  }

  /* lighr-gray */
  .cls-4 {
    fill: #ccc;
  }

  /* red */
  .cls-5 {
    fill: #e03d2d;
  }

  .card {
    width: 296px;
    height: 295px;
    border: none;
    box-shadow: 1px 2px 8px rgba(200, 200, 200, .5);
    position: relative;
    transition: .5s;
    overflow: hidden;
  }

  .card .p {
    margin-bottom: 6px;
  }

  .heart {
    width: 35px;
    height: 35px;
    background-color: #fff;
    opacity: .8;
    position: absolute;
    top: 15px;
    right: 15px;
    border-radius: 50%;
    padding: 6px 8.5px;
  }

  .card-pic {
    width: 100%;
    height: 175px;
    border-radius: 3px 3px 50px 3px;
    overflow: hidden;
    transition: .5s;
  }

  /* .card-pic:hover {
        height: 125px;
        transform: translateY(-50px);
    } */

  .c2 {
    height: 330px;
  }

  .c2 .card-pic {
    height: 235px;
  }

  /* 
    .c2 .card-pic:hover {
        height: 185px;
    } */

  .c2 .info {
    display: flex;
  }

  .c4 {
    height: 255px;
  }

  .c4 .card-pic {
    height: 140px;
    border-radius: 3px 3px 40px 3px;
  }

  /* .c4 .card-pic:hover {
        height: 90px;
    } */

  .c4 .heart {
    top: 10px;
    right: 10px;
  }

  .card-pic img {
    width: 100%;
    object-fit: cover;
  }

  .card-text h6 {
    line-height: 23px;
  }

  .card-info {
    opacity: 0;
    height: 0;
  }

  .rate-all {
    letter-spacing: 0.5px;
  }

  @media(max-width: 400px) {
    .card {
      width: 266px;
      height: 300px;
      border: none;
      box-shadow: 1px 2px 8px rgba(200, 200, 200, .5);
      position: relative;
      margin: 20px auto !important;
    }

    .card-pic {
      width: 100%;
      height: 175px;
      border-radius: 3px 3px 40px 3px;
      overflow: hidden;
    }

    .card.c2 {
      height: 240px;
      margin: 10px !important;
    }

    .c2 .card-pic {
      height: 84px;
    }

    .c2 .info {
      display: block;
    }

    .c2 .info-left,
    .c2 .heart {
      opacity: 0;
      position: absolute;
    }

    .c2 .card-text {
      font-size: 14px;
    }

    .c2 p {
      margin-bottom: 5px;
    }

    .c4 {
      height: 300px;
    }

    .c4 .card-pic {
      height: 175px;
    }

    .c4 .heart {
      top: 10px;
      right: 10px;
    }

    .arrow {
      opacity: 0;
      position: absolute;
    }
  }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<!-- 拍立得section 電腦版-->
<section id="hero-polaroid">
  <!-- 3d start -->
  <div class="con3d container-fluid">
    <div class="moving">
      <div class="layer">
        <!-- 3d end -->
        <div class="pb1 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure1 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature1.png" alt="">
          </figure>
        </div>
        <div class="pb2 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure2 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature2.png" alt="">
          </figure>
        </div>
        <div class="pb3 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure3 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature2.png" alt="">
          </figure>
        </div>
        <div class="pb4 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure4 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature2.png" alt="">
          </figure>
        </div>
        <div class="pb5 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure5 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature2.png" alt="">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 拍立得section 手機版-->
<section id="hero-polaroid-m float-none" class="weirdpart pb-4">
  <div class="container pr-0">
    <!-- 繩子的部分 -->
    <div class="row rope">
      <figure>
        <img src="./img/illustration/rope.svg" alt="">
      </figure>
    </div>
    <!-- 拍立得照片的部分 -->
    <div class="row d-flex por-pic-m flex-nowrap mr-0 pt-3 pb-2">
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd1.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature1.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd2.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature2.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd3.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature3.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd4.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature4.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd5.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature5.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd6.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature6.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd7.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature2.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <figure class="position-absolute mt-3">
          <img src="img/pd8.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature4.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- rwd後改變順序 -->
<div class="change-order-wrap">
  <!-- 插圖介紹section -->
  <section id="petliday-wrap">
    <div class="container">
      <div class="row justify-item-center">
        <div class="logo-sentence col-xl-6 col-10  mx-auto">
          <img src="img/illustration/petliday.png" alt="">
        </div>
      </div>
      <div class="row d-flex justify-content-between pet-slogan">
        <div class="col-xl-4 col-12 d-flex petliday-card">
          <figure class="row petliday-fig mx-auto">
            <img src="./img/illustration/index-dog1.png" alt="">
          </figure>
          <div class="row petliday-text">
            <p class="petliday-title">放鬆</p>
            <p class="petliday-content">最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
          </div>
        </div>

        <div class="col-xl-4 col-12 d-flex petliday-card">
          <figure class="row petliday-fig mx-auto">
            <img src="img/illustration/index-dog2.png" alt="">
          </figure>
          <div class="row">
            <p class="petliday-title">一起體驗</p>
            <p class="petliday-content">我們搜羅了全台最適合與狗狗一起同遊、體驗的景點與活動！</p>
          </div>
        </div>

        <div class="col-xl-4 col-12 d-flex petliday-card">
          <figure class="row petliday-fig mx-auto">
            <img src="img/illustration/index-dog3.png" alt="">
          </figure>
          <div class="row">
            <p class="petliday-title">放心遊</p>
            <p class="petliday-content">最多樣的行程安排，讓飼主可以和寶貝毛孩一起在旅行中放鬆</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 同樂目的地section -->
  <section id="destination title-fir-m">
    <!-- 腳印標題那部分 -->
    <div class="container">
      <div class="row svg-row d-flex flex-start align-items-center title-box title-fir">
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
          <h6 class="des-title brown-color t-xxl m-0 ml-2">同樂目的地</h6>
        </span>
      </div>
    </div>
    <!-- 同樂目的地卡片 -->
    <div class="container des-wrap ">
      <div class="row des-row flex-nowrap">
        <div class="des-card">
          <figure class="m-0 img-box">
            <img src="./img/scenery-im2.jpg" alt="">
          </figure>
          <h6 class="green-color t-l text-center">北部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/scenery-im1.jpg" alt="">
          </figure>
          <h6 class="green-color t-l text-center">中部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/scenery-im4.jpg" alt="">
          </figure>
          <h6 class="green-color t-l text-center">南部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/scenery-im3.jpg" alt="">
          </figure>
          <h6 class="des-card-text green-color t-l text-center">東部、離島旅遊</h6>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- 精選行程section -->
<section id="tour">
  <!-- 腳印標題那部分 -->
  <div class="container my-5">
    <div class="row d-flex flex-start align-items-center title-box">
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
        <h6 class="des-title brown-color t-xxl m-0 ml-2">精選行程</h6>
      </span>
    </div>
  </div>
  <!-- 精選行程卡片 -->
  <!-- 桌機版 -->
  <div class="container tour-cards">
    <div class="row d-flex tour-row flex-nowrap justify-content-center">

      <div class="col-4 tour-card">
        <figure>
          <img src="./img/3x/christmas1.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕精選行程 】<br>二芭芭拉拉巴拉巴聖芭拉拉巴拉巴聖拉巴聖誕節</h6>
          <div class=" d-flex align-items-center justify-content-between w-100">
            <div class=" d-flex flex-row align-items-center ">
              <div class="star mr-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs></defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="rate text-gray t-m mb-0">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">78則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$2680</div>
          </div>
        </div>

      </div>

      <div class="col-4 tour-card">
        <figure>
          <img src="./img/3x/christmas2.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕精選行程 】<br>二芭芭拉拉巴拉巴聖芭拉拉巴拉巴聖拉巴聖誕節</h6>
          <div class=" d-flex align-items-center justify-content-between w-100">
            <div class=" d-flex flex-row align-items-center ">
              <div class="star mr-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs></defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="rate text-gray t-m mb-0">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">78則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$2680</div>
          </div>
        </div>

      </div>
      <div class="col-4 tour-card">
        <figure>
          <img src="./img/3x/christmas3.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕精選行程 】<br>二芭芭拉拉巴拉巴聖芭拉拉巴拉巴聖拉巴聖誕節</h6>
          <div class=" d-flex align-items-center justify-content-between w-100">
            <div class=" d-flex flex-row align-items-center ">
              <div class="star mr-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs></defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="rate text-gray t-m mb-0">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">78則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$2680</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- 手機版 -->
  <div class="container tour-cards-m">
    <div class="row d-flex tour-row-m justify-content-center">

    </div>
  </div>
</section>

<!-- 體驗課程section -->
<section id="class">
  <!-- 腳印標題那部分 -->
  <div class="container">
    <div class="row d-flex flex-start align-items-center title-box">
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
        <h6 class="des-title brown-color t-xxl m-0 ml-2">與寶貝一起體驗更多課程</h6>
      </span>
    </div>
  </div>
  <!-- 體驗課程卡片 -->
  <!-- 4個一排版本 -->
  <div class="container mt-5">
    <div class="row align-items-center">
      <!-- 左箭頭 -->
      <a class="arrow m-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
          <defs></defs>
          <g id="圖層_2" data-name="圖層 2">
            <g id="圖層_1-2" data-name="圖層 1">
              <path class="cls-4" d="M25.12,51.56a3.52,3.52,0,0,1-2.51-1.06L1,28.22a3.5,3.5,0,0,1,0-4.88L22.61,1.06a3.5,3.5,0,0,1,5,4.88L8.38,25.78,27.64,45.62a3.51,3.51,0,0,1-2.52,5.94Z" />
            </g>
          </g>
        </svg>
      </a>
      <div class="card c4 col-md col-sm-12 m-3 p-0">
        <div class="heart">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
            <defs></defs>
            <g id="圖層_2" data-name="圖層 2">
              <g id="圖層_1-2" data-name="圖層 1">
                <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="card-pic w-100">
          <img src="./img/pd1.jpg" alt="">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
          <div class="info d-flex justify-content-between">
            <div class="info-left d-flex align-items-center">
              <div class="star mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs>
                  </defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                    </g>
                  </g>
                </svg>

              </div>
              <div class="rate text-gray t-m">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$2680</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
        </p>
      </div>
      <div class="card c4 col-md col-sm-12 m-3 p-0">
        <div class="heart">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
            <defs></defs>
            <g id="圖層_2" data-name="圖層 2">
              <g id="圖層_1-2" data-name="圖層 1">
                <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="card-pic w-100">
          <img src="./img/pd1.jpg" alt="">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
          <div class="info d-flex justify-content-between">
            <div class="info-left d-flex align-items-center">
              <div class="star mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs>
                  </defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                    </g>
                  </g>
                </svg>

              </div>
              <div class="rate text-gray t-m">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$2680</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
        </p>
      </div>
      <div class="card c4 col-md col-sm-12 m-3 p-0">
        <div class="heart">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
            <defs></defs>
            <g id="圖層_2" data-name="圖層 2">
              <g id="圖層_1-2" data-name="圖層 1">
                <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="card-pic w-100">
          <img src="./img/pd1.jpg" alt="">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
          <div class="info d-flex justify-content-between">
            <div class="info-left d-flex align-items-center">
              <div class="star mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs></defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                    </g>
                  </g>
                </svg>

              </div>
              <div class="rate text-gray t-m">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$2680</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
        </p>
      </div>
      <div class="card c4 col-md col-sm-12 m-3 p-0">
        <div class="heart">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
            <defs></defs>
            <g id="圖層_2" data-name="圖層 2">
              <g id="圖層_1-2" data-name="圖層 1">
                <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="card-pic w-100">
          <img src="./img/pd1.jpg" alt="">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
          <div class="info d-flex justify-content-between">
            <div class="info-left d-flex align-items-center">
              <div class="star mr-2">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                  <defs></defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                    </g>
                  </g>
                </svg>

              </div>
              <div class="rate text-gray t-m">4.9</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$2680</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
        </p>
      </div>
      <!-- 右箭頭 -->
      <a class="arrow m-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
          <defs></defs>
          <g id="圖層_2" data-name="圖層 2">
            <g id="圖層_1-2" data-name="圖層 1">
              <path class="cls-4" d="M3.5,51.56A3.5,3.5,0,0,1,1,45.62L20.25,25.78,1,5.94A3.5,3.5,0,0,1,6,1.06L27.64,23.34a3.52,3.52,0,0,1,0,4.88L6,50.5A3.51,3.51,0,0,1,3.5,51.56Z" />
            </g>
          </g>
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- 特色日遊section -->
<section id="depth">
  <!-- 腳印標題那部分 -->
  <div class="container my-5">
    <div class="row d-flex flex-start align-items-center title-box">
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
        <h6 class="des-title brown-color t-xxl m-0 ml-2">特色日遊，一起深度體驗</h6>
      </span>
    </div>
  </div>
  <!-- 圖片＋對話框為一row那部分 -->
  <div class="container my-5">
    <div class="row d-flex justify-content-between">
      <figure class="col-6 mb-0 dog-img">
        <img src="./img/3X/1.png" alt="">
      </figure>
      <figure class="chatpic-wrap col-6 position-relative">
        <img src="./img/3X/depth-chat1.png" alt="">
        <div class="text-wrap position-absolute">
          <h6 class="brown-color t-l">體驗深度旅遊</h6>
          <h6 class="brown-color t-m mb-2">人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。</h6>
          <button class="btn m-0 float-right mt-3">立即訂購</button>
        </div>
      </figure>
    </div>
  </div>
  <div class="container my-5">
    <div class="row d-flex justify-content-between">
      <figure class="chatpic-wrap col-6 position-relative">
        <img src="./img/3X/depth-chat1.png" alt="" style="transform: scaleX(-1)">
        <div class="text-wrap2 position-absolute">
          <h6 class="brown-color t-l">體驗深度旅遊</h6>
          <h6 class="brown-color t-m mb-2">人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。</h6>
          <button class="btn m-0 float-right mt-3">立即訂購</button>
        </div>
      </figure>
      <figure class="col-6 mb-0 dog-img">
        <img src="./img/3X/2.png" alt="">
      </figure>
    </div>
  </div>
  <div class="container my-5">
    <div class="row d-flex justify-content-between">
      <figure class="col-6 mb-0 dog-img">
        <img src="./img/3X/3.png" alt="">
      </figure>
      <figure class="chatpic-wrap col-6 position-relative">
        <img src="./img/3X/depth-chat1.png" alt="">
        <div class="text-wrap position-absolute">
          <h6 class="brown-color t-l">體驗深度旅遊</h6>
          <h6 class="brown-color t-m mb-2">人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。想必大家都能了解旅遊的重要性。既然如此，了解清楚旅遊到底人生。</h6>
          <button class="btn m-0 float-right mt-3">立即訂購</button>
        </div>
      </figure>
    </div>
  </div>

</section>
<!-- 小測驗section -->
<!-- <section id="quiz" class="invisible">
  !-- 腳印標題那部分 --
<div class="container my-5">
  <div class="row  d-flex flex-start align-items-center title-box">
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
      <h6 class="des-title brown-color t-xxl m-0 ml-2">測驗最適合您的行程</h6>
    </span>
  </div>
</div>
!-- 選項＋卡片 --
<div class="container">
  <div class="row justify-content-between">
    <div class="col-3 m-0">
      <figure>
        <img class="opt" src="./img/quest-img1.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 m-0 d-flex align-items-center">
      <div class="box">
        <div class="text-wrap d-flex flex-column w-100">
          <h6 class="green-color t-l">Q2. 請問毛孩較為喜歡靜態活動還是動態活動呢？</h6>
          <h6 class="t-m">A. 喜歡待在家自己找東西玩，或和熟悉的人玩樂<br>B. 喜歡在外面奔跑，對其他人狗不怕生
          </h6>
        </div>
      </div>
    </div>
    <div class="col-3 m-0 ">
      <figure>
        <img class="opt" src="./img/quest-img2.jpg" alt="">
      </figure>
    </div>
  </div>
  <div class="row justify-content-between">
    <h6 class="col-3 t-xxl option green-color">A.</h6>
    <h6 class="col-3 t-xxl option green-color">B.</h6>
  </div>

  <div>
  </div>
  <figure class="tutor col-1">
    <img src="./img/illustration/mouse-react.png" alt=""></figure>
  <h6 class="text-gray t-xs text-center mx-auto mt-2 col-3">請將卡片拖曳至您的答案</h6>
</div>

</section> -->

<section id="about" class="mt-5">
  <div class="container ">
    <div class="row">
      <div class="col-12 col-lg-7 mt-4">
        <h4 class="mb-3 t-xxl mb-3">為什麼選擇Petliday？</h4>
        <h6 class="t-s text-color about-text">你知道世界上有超過百萬名自由行旅客選擇KKday作為旅遊規劃網站嗎？<br>他們透過KKday找到安全又安心的體驗行程！</h6>
        <button class="btn m-0 mt-3">認識更多</button>
      </div>
      <div class="col-12 col-lg-5 about d-flex justify-content-end mt-4">
        <img src="./img/3X/about.png" alt="">

      </div>

    </div>
  </div>
</section>





<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script>
  $('.c4').on('mouseenter', function() {
    $(this).find('.card-pic').css('height', '90px');
    $(this).find('.card-info').css({
      'opacity': '1',
      'height': '10px',
    });
  });
  $('.c4').on('mouseleave', function() {
    $(this).find('.card-pic').css('height', '140px');
    $(this).find('.card-info').css({
      'opacity': '0',
      'height': '0',
    });
  });
</script>
<!-- // ------JS開始 以上勿刪------- -->
<!-- hero網頁 拍立得 -->
<script>
  let index = 0;
  setInterval(function() {
    index = index + 1;
    (index > 4) ? index = 0: index = index;
    $('.con3d .polaroid-base').eq(index).addClass('pickup').siblings().removeClass('up10');
    setTimeout(() => {
      $('.con3d .polaroid-base').eq(index).addClass('up10').removeClass('pickup');
    }, 200);
  }, 1800);
</script>
<!-- // hero 3d start -->
<script>
  var move = 20;
  var rotate = 10;

  $(document).mousemove(function(e) {
    var docX = $(document).width();
    var docY = $(document).height();

    var moveX = (e.pageX - docX / 2) / (docX / 2) * -move;
    var moveY = (e.pageY - docY / 2) / (docY / 2) * -move;

    var rotateY = (e.pageX / docX * rotate * 2) - rotate;
    var rotateX = -((e.pageY / docY * rotate * 2) - rotate);

    $('.layer')
      .css('left', moveX + 'px')
      .css('top', moveY + 'px')
      .css('transform', 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
  });
</script>
<!-- // hero 3d end -->
<!-- hero手機 拍立得 -->
<script>
  let index2 = 0;
  let index3 = 0;
  setInterval(function() {
    index2 = index2 + 1;
    (index2 > 5) ? index2 = 1: index2 = index2;
    $('.por-pic-m .polaroid-base').eq(index2).addClass('col-5 por-frame-2 mx-3 p-0').removeClass('col-4 por-frame-1').siblings().removeClass('col-5 por-frame-2 mx-3 p-0').addClass('col-4 por-frame-1');
  }, 2000);

  $('.weirdpart .container').delay(2000).fadeIn("slow", function() {
    setInterval(function() {
      index3 = index3 + 1;
      (index3 > 4) ? index3 = 0: index3 = index3;
      $('.weirdpart .container').css('right', (index3 * 160 + 'px'))
    }, 2000);
  });

  // setTimeout(function() {
  //   setInterval(function() {
  //     index2 = index2 + 1;
  //     (index2 > 5) ? index2 = 0: index2 = index2;
  //     $('.weirdpart .container').css('right', (index2 * 120 + 'px'))
  //   }, 2000);
  // }, 2000);
</script>

<!-- // ------JS結束 勿刪到------- -->
<?php include __DIR__ . '/../parts/html-foot.php' ?>