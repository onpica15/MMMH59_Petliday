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
    height: 320px;
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
    padding: 6px 7px;
  }

  .card-pic {
    width: 100%;
    height: 170px;
    border-radius: 3px 3px 50px 3px;
    overflow: hidden;
    transition: .5s;
  }

  .c4 {
    height: 300px;
  }

  .c4 .card-pic {
    height: 170px;
    border-radius: 3px 3px 40px 3px;
  }


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
      width: 330px;
      height: 270px;
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

    #class .container:last-child {
      padding-left: 0;
    }
  }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<!-- 拍立得section 電腦版-->
<section id="hero-polaroid">
  <div class="pdslogan">
    <h1>渡假也要與寶貝一起享樂</h1>
    <p>準備要與毛寶貝去哪放肆玩？</p>
    <div class="search-box sbox-hero">
      <input type="text" placeholder="想與寶貝去哪玩？" class="search-bar sbar-hero pl-4">
      <button class="search-btn sbtn-hero">
        <svg class="" id="search-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352.48 336.07">
          <g>
            <path data-name="Path 144" d="M346.5,301.38l-84.25-83.79h0a142,142,0,1,0-26.4,31l82,81.51a20.3,20.3,0,1,0,28.72-28.71h0Zm-204.23-58a101,101,0,1,1,101-101,101,101,0,0,1-101,101Z" />
          </g>
        </svg></button>
    </div>
  </div>
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
            <img src="./img/signature3.png" alt="">
          </figure>
        </div>
        <div class="pb4 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure4 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature4.png" alt="">
          </figure>
        </div>
        <div class="pb5 polaroid-base d-flex position-absolute justify-content-center">
          <figure class="pf polaroid-figure5 col-11 position-absolute">
          </figure>
          <figure class="signature position-absolute">
            <img src="./img/signature5.png" alt="">
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
    <div class="row rope mt-5">
      <figure>
        <img src="./img/illustration/rope.svg" alt="">
      </figure>
    </div>
    <!-- 拍立得照片的部分 -->
    <div class="row d-flex por-pic-m flex-nowrap mr-0 pt-3 pb-2">
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd1.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature1.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd2.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature2.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd3.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature3.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd4.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature4.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd5.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature5.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd6.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature6.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
        <figure class="position-absolute mt-3">
          <img src="img/pd7.jpg" alt="">
        </figure>
        <div class="position-absolute sig-m-1">
          <img src="img/signature2.png" alt="">
        </div>
      </div>
      <div class="polaroid-base d-flex position-relative justify-content-center">
        <div class="clip c1 position-absolute">
          <img src="img/illustration/clip.svg" alt="">
        </div>
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
          <img src="img/3x/petliday.png" alt="">
        </div>
      </div>
      <div class="row d-flex justify-content-between pet-slogan pt-4 my-2">
        <div class="col-xl-4 col-12 d-flex petliday-card justify-content-between px-5 align-content-center my-2">
          <figure class=" petliday-fig my-2 mr-2 d-flex align-content-center ">
            <img src="./img/illustration/index-dog1.png" alt="">
          </figure>
          <div class="row petliday-text d-flex flex-column justify-content-center">
            <p class="petliday-title mb-2">放鬆</p>
            <p class=" petliday-content">多樣的旅遊行程<br>與寵物一起放鬆身心靈</p>
          </div>
        </div>

        <div class="col-xl-4 col-12 d-flex petliday-card justify-content-between px-5 my-2">
          <figure class=" petliday-fig my-2 mr-2 d-flex align-content-center">
            <img src="img/illustration/index-dog2.png" alt="">
          </figure>
          <div class="row d-flex flex-column justify-content-center">
            <p class="petliday-title mb-2">一起體驗</p>
            <p class=" petliday-content">全台最友善的課程景點<br>帶寵物們一起上山下海</p>
          </div>
        </div>

        <div class="col-xl-4 col-12 d-flex petliday-card justify-content-between px-5 align-content-center my-2">
          <figure class=" petliday-fig my-2 mr-2 d-flex align-content-center">
            <img src="img/illustration/index-dog3.png" alt="">
          </figure>
          <div class="row d-flex flex-column justify-content-center">
            <p class="petliday-title mb-2">放心遊</p>
            <p class=" petliday-content">毛日帶領著您與寵物<br>安心出遊！快樂回家！</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 同樂目的地section -->
  <section id="destination ">
    <!-- 腳印標題那部分 -->
    <div class="container my-3">
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
          <h6 class="des-title brown-color t-xxl m-0 ml-2">同樂目的地</h6>
        </span>
      </div>
    </div>
    <!-- 同樂目的地卡片 pc -->
    <div class="container des-wrap only-pc">
      <div class="row des-row flex-nowrap">
        <div class="des-card">
          <figure class="m-0 img-box">
            <img src="./img/3x/n.png" alt="">
          </figure>
          <h6 class="green-color t-l text-center">北部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/3x/w.png" alt="">
          </figure>
          <h6 class="green-color t-l text-center">中部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/3x/s.png" alt="">
          </figure>
          <h6 class="green-color t-l text-center">南部旅遊</h6>
        </div>
        <div class="des-card">
          <figure class="m-0">
            <img src="./img/3x/e.png" alt="">
          </figure>
          <h6 class="des-card-text green-color t-l text-center">東部、離島旅遊</h6>
        </div>
      </div>
    </div>
    <!-- 同樂目的地卡片 m -->
    <div class="all-des-m only-m">
      <div class="des-m-card-wrap">

        <div class="des-m-card">
          <img src="./img/3x/n.png" alt="">
          <div class="des-m-card-bg"></div>
          <div class="des-m-title">北部旅遊<br> <span class="des-m-title2">(共32個行程)</span> </div>
        </div>

        <div class="des-m-card">
          <img src="./img/3x/w.png" alt="">
          <div class="des-m-card-bg"></div>
          <div class="des-m-title">中部旅遊<br> <span class="des-m-title2">(共個行程)</span> </div>
        </div>

        <div class="des-m-card">
          <img src="./img/3x/s.png" alt="">
          <div class="des-m-card-bg"></div>
          <div class="des-m-title">南部旅遊<br> <span class="des-m-title2">(共3個行程)</span> </div>
        </div>

        <div class="des-m-card">
          <img src="./img/3x/e.png" alt="">
          <div class="des-m-card-bg"></div>
          <div class="des-m-title">東部、離島旅遊<br> <span class="des-m-title2">(共3個行程)</span> </div>
        </div>


      </div>
    </div>
  </section>
</div>

<!-- 精選行程section -->
<section id="tour">
  <div class="tour-m"></div>
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

      <div class="col-12 col-lg-4 tour-card">
        <figure>
          <img src="./img/3x/christmas1.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕節寫真 】<br>超萌裝扮！寵物聖誕攝影</h6>
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
              <div class="rate text-gray t-m mb-0">4.5</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">78則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$1200</div>
          </div>
        </div>

      </div>
      <div class="col-12 col-lg-4 tour-card">
        <figure>
          <img src="./img/3x/christmas2.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕節美容 】<br>亮麗豋場！毛小孩也想當網美</h6>
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
              <div class="rate text-gray t-m mb-0">4.8</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">113則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$880</div>
          </div>
        </div>

      </div>
      <div class="col-12 col-lg-4 tour-card">
        <figure>
          <img src="./img/3x/christmas3.png" alt="">
        </figure>
        <!-- 星等、評價、價錢 -->
        <div class="row w-70 mx-auto pb-3 bott-line">
          <h6 class="t-l mt-4 my-3">【 聖誕節派對 】<br>寶貝聚集！交換禮物玩起來</h6>
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
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">95則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$699</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- 手機版 -->
  <div class="container tour-cards-m " id="tour-cards-m">
    <div class="d-flex tour-row-m justify-content-center mb-4">
      <div class="tour-card-m-img">

        <img src="./img/3x/christmas1.png" alt="">

        <div class="row w-70 mx-auto pb-3 cards-text-m">
          <h6 class="t-l mt-5 my-3 mx-auto " style="text-align: center; line-height: 26px">【 聖誕節寫真 】<br>超萌裝扮！寵物聖誕攝影</h6>
          <div class=" d-flex align-items-center justify-content-between  w-100">
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
              <div class="rate text-gray t-m mb-0">4.5</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">78則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$1,299</div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex tour-row-m justify-content-center mb-4">
      <div class="tour-card-m-img">

        <img src="./img/3x/christmas2.png" alt="">

        <div class="row w-70 mx-auto pb-3 cards-text-m">
          <h6 class="t-l mt-5 my-3 mx-auto " style="text-align: center; line-height: 26px">【 聖誕節美容 】<br>亮麗豋場！毛小孩也想當網美</h6>
          <div class=" d-flex align-items-center justify-content-between  w-100">
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
              <div class="rate text-gray t-m mb-0">4.8</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">113則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$880</div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex tour-row-m justify-content-center mb-4">
      <div class="tour-card-m-img">

        <img src="./img/3x/christmas3.png" alt="">

        <div class="row w-70 mx-auto pb-3 cards-text-m">
          <h6 class="t-l mt-5 my-3 mx-auto " style="text-align: center; line-height: 26px">【 聖誕節派對 】<br>寶貝聚集！交換禮物玩起來</h6>
          <div class=" d-flex align-items-center justify-content-between  w-100">
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
              <div class="rate-all t-xs ml-2"><u class="text-gray mb-0">95則評論</u></div>
            </div>
            <div class="pr-2 t-l orange-color">$699</div>
          </div>
        </div>
      </div>
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
  <div class="container mt-5 pb-5">
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
          <img src="/Petliday/products/img/prolist7.jpg" alt="...">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-m">帶寵物遊澎湖！菊島二日遊｜ 高雄出發｜ 外島旅遊</p>
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
              <div class="rate text-gray t-m">4.8</div>
              <div class="rate-all t-xs ml-2"><u class="text-gray">97則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$5450</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          冬天的澎湖菊島也很精彩！帶上寵物走訪各大夢幻打卡點。
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
          <img src="/Petliday/products/img/prolist11.jpg" alt="...">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-m">踏浪星辰露營｜寵物友善露營花蓮二日遊</p>
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
            <div class="info-right pr-2 t-l orange-color">$4460</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          在花蓮無光害星海下入睡，早晨讓蟲鳴鳥叫喚醒，來趟放鬆身心靈的自然之旅。
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
          <img src="/Petliday/products/img/prolist28.jpg" alt="...">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-m">北海岸必去打卡點｜陰陽海＆老梅綠石槽＆象鼻岩一日遊</p>
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
              <div class="rate-all t-xs ml-2"><u class="text-gray">83則評論</u></div>
            </div>
            <div class="info-right pr-2 t-l orange-color">$1290</div>
          </div>
        </div>
        <p class="card-info px-4 t-xs">
          包車漫遊台灣北海岸，輕鬆遊走於北海岸熱門網拍景點如老梅綠石槽、鼻頭角和陰陽海
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
          <img src="/Petliday/products/img/prolist29.jpg" alt="...">
        </div>
        <div class="card-text pt-3 pb-1 px-4">
          <p class="t-m">苗栗樂活古風行｜南庄老街 & 景觀莊園 & 寵物二日遊</p>
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
          民宿在南庄山區占地寬廣，帶著狗狗旅行輕鬆安心愜意，還可與狗友們交流照顧心得。
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
<section id="depth" class="depth pt-4 pb-4 only-pc">
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
          <h6 class="brown-color t-l">◎ 寵物壽星派對</h6>
          <h6 class="brown-color t-m mb-2">生日派對讓寵物備感關愛和重視<br>主人也可以親自製作寵物的生日蛋糕<br>( 蛋糕口味依毛孩所需的營養及需求設計 )</h6>
          <h6 class="brown-color t-m mb-2">活動給主人帶來的「儀式感」也尤為重要<br>更加深了養寵人與寵物之間的感情</h6>
          <button class="btn m-0 float-right mt-1">立即訂購</button>
        </div>
      </figure>
    </div>
  </div>
  <div class="container my-5">
    <div class="row d-flex justify-content-between">
      <figure class="chatpic-wrap col-6 position-relative">
        <img src="./img/3X/depth-chat1.png" alt="" style="transform: scaleX(-1)">
        <div class="text-wrap2 position-absolute">
          <h6 class="brown-color t-l">◎ 上山野餐冒險汪</h6>
          <h6 class="brown-color t-m mb-2">有與寵物們一起玩大地遊戲的經驗嗎？<br>今年冬季最新企劃，帶著毛孩上山玩樂兼野餐</h6>
          <h6 class="brown-color t-m mb-2">毛孩與爸媽準備好了嗎<br>準備來場難忘的冒險旅程吧！</h6>
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
          <h6 class="brown-color t-l">◎ 萌寵貴婦下午茶</h6>
          <h6 class="brown-color t-m mb-2">來場約會吧！獨家限定優惠：<br>二十幾家友善寵物餐廳任意挑選</h6>
          <h6 class="brown-color t-m mb-2">帶著毛孩朝聖網美聖地<br>享受貴婦般的奢華生活</h6>
          <button class="btn m-0 float-right mt-3">立即訂購</button>
        </div>
      </figure>
    </div>
  </div>

</section>
<section id="depthM" class="depthM pt-4 pb-4 only-m pet-bg-fixd">
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
  <div class="container ">
    <div class="row">
      <div class="col-12 pet-m-img">
        <img src="./img/3X/1.png" alt="">
      </div>
      <div class="col-12 pet-m-box  mb-4">
        <h4 class="t-l brown-color">◎ 寵物壽星派對</h4>
        <h6 class="t-m text-color">生日派對讓寵物備感關愛和重視，
          主人也可以親自製作寵物的生日蛋糕
          ( 蛋糕口味依毛孩所需的營養及需求設計 )，
          活動給主人帶來的「儀式感」也尤為重要，
          更加深了養寵人與寵物之間的感情</h6>
        <div class="card-btn">
          <div class="btn card-btn-m">立即訂購</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 pet-m-img mt-3 d-flex flex-row-reverse">
        <img src="./img/3X/2.png" alt="">
      </div>
      <div class="col-12 pet-m-box  mb-4">
        <h4 class="t-l brown-color">◎ 上山野餐冒險汪</h4>
        <h6 class="t-m text-color">有與寵物們一起玩大地遊戲的經驗嗎？<br>
          今年冬季最新企劃，帶著毛孩上山玩樂兼野餐，
          毛孩與爸媽準備好了嗎，
          準備來場難忘的冒險旅程吧！</h6>
        <div class="card-btn">
          <div class="btn card-btn-m">立即訂購</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 pet-m-img mt-3">
        <img src="./img/3X/3.png" alt="">
      </div>
      <div class="col-12 pet-m-box  mb-4">
        <h4 class="t-l brown-color">◎ 萌寵貴婦下午茶</h4>
        <h6 class="t-m text-color">來場約會吧！獨家限定優惠：<br>
          二十幾家友善寵物餐廳任意挑選<br>
          帶著毛孩朝聖網美聖地<br>
          享受貴婦般的奢華生活</h6>
        <div class="card-btn">
          <div class="btn card-btn-m">立即訂購</div>
        </div>
      </div>
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

<section id="about" class="mt-5 pt-5 pb-3">
  <div class="container ">
    <div class="row">
      <div class="col-12 col-lg-7 mt-4">
        <h4 class="mb-3 t-xxl mb-3">為什麼選擇Petliday？</h4>
        <h6 class="t-s text-color about-text">毛日旅行社替飼主省去規劃行程的煩惱<br>安心的帶著毛寶貝一起搭專車、共食和入住友善旅店等。</h6>
        <h6 class="t-s text-color about-text">也提供寵物多元的課程體驗、旅遊必備新手包與專業團隊諮詢的服務<br>讓旅客有多元的選擇！</h6>
        <a href="<?= WEB_ROOT ?>about/about.php">
          <div class="btn m-0 mt-3 btn-more">認識更多</div>
        </a>
      </div>
      <div class="col-12 col-lg-5 about d-flex justify-content-end mt-4 pt-3">
        <img src="./img/3X/about.png" alt="">

      </div>

    </div>
  </div>
</section>


<?php include __DIR__ . '/../userlogin/user-login.php' ?>
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
<script>
  $('.search-box.nav-pc').css('opacity', '0');
  $(window).scroll(function() {
    let nowTop = $(window).scrollTop();
    console.log(nowTop);
    if (nowTop < 400) {
      $('.pdslogan').css({
        'opacity': '1',
        'scale': '1'
      });
      $('.search-box.nav-pc').css('opacity', '0');
    } else {
      $('.pdslogan').css({
        'opacity': '0',
        'scale': '0.3'
      });
      $('.search-box.nav-pc').css('opacity', '1');
    }
    // if(nowTop > 400){
    //   $('.pdslogan').css({'opacity':'0','scale':'0.3'});
    //   $('.search-box.nav-pc').css('opacity','1');
    // }
    // else{
    //   $('.pdslogan').css({'opacity':'1','scale':'1'});
    //   $('.search-box.nav-pc').css('opacity','0');
    // }
  })
</script>

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
    $('.por-pic-m .polaroid-base').eq(index2).addClass('col-8 por-frame-2 mx-3 p-0').removeClass('col-2 por-frame-1').siblings().removeClass('col-8 por-frame-2 mx-3 p-0').addClass('col-2 por-frame-1');
    $('.polaroid-base').find('.clip').removeClass('c2')
    $('.por-pic-m .polaroid-base').eq(index2).find('.clip').addClass('c2');

  }, 2000);

  $('.weirdpart .container').delay(2000).fadeIn("slow", function() {
    setInterval(function() {
      index3 = index3 + 1;
      (index3 > 4) ? index3 = 0: index3 = index3;
      $('.weirdpart .container').css('right', (index3 * 80 + 'px'))
    }, 2000);
  });

  // setTimeout(function() {
  //   setInterval(function() {
  //     index2 = index2 + 1;
  //     (index2 > 5) ? index2 = 0: index2 = index2;
  //     $('.weirdpart .container').css('right', (index2 * 120 + 'px'))
  //   }, 2000);
  // }, 2000);
  // rating 展開設定 ******************************

  $(".index-rating").mouseenter(function() {
    $(".index-rating").animate({
      right: "0"
    });
    $(".rating-title").show().fadeOut(500);
  });

  $(".index-rating").mouseleave(function() {
    $(".index-rating").animate({
      right: "-200px"
    });
    $(".rating-title").show().fadeIn(300);
  });

  // button送出成功顯示畫面
  $("#rating-btn").on("click", function() {
    $('.rating-success').css('z-index', 1).css('opacity', 1);
  });



  // rating 滑到footer前停住 **********************
  $(function() {
    $(window).scroll(function() {
      //   console.log('$(window).scrollTop()',$(window).scrollTop());
      //   console.log('footer ',$('footer').offset().top);
      //  console.log('window',$(window).height());
      //   console.log($(window).width())
      if ($(window).width() > 992) {
        if ($(window).scrollTop() >= 879) {
          // console.log('hi')
          $('.index-rating').css('position', 'absolute').css('bottom', $(document).height() - $('footer').offset().top + 25)
        } else {
          $('.index-rating').css('position', 'fixed').css('bottom', 100);
        }
      } else {
        if ($(window).scrollTop() >= 1000) {
          // console.log('hi')
          $('.index-rating').css('position', 'absolute').css('bottom', $(document).height() - $('footer').offset().top + 25)
        } else {
          $('.index-rating').css('position', 'fixed').css('bottom', 100);
        }
      }

    });
  })
</script>

<!-- // ------JS結束 勿刪到------- -->
<?php include __DIR__ . '/../parts/html-foot.php' ?>

<?php include __DIR__ . '/../widget/rating.php' ?>