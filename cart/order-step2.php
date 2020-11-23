<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>cart/cart-style.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<div class="container cart-title ">
  <div class="row">
    <div class="col-12">
      <div class="row d-flex justify-content-center">
        <div class="col-11 col-lg-8 step-box d-flex">
          <div class="step step1 ">
            <div class="step-title t-m ">
              <span>
                <svg id="food-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.03 39.5">
                  <path id="Path_443" data-name="Path 443" class="cls-222" d="M36.25,20a19.87,19.87,0,0,0-24.49,0,12.53,12.53,0,0,0-5.34,9.47C6.42,35.63,13.16,39.5,24,39.5s17.59-3.86,17.59-10.08A12.56,12.56,0,0,0,36.25,20Z" />
                  <path id="Path_444" data-name="Path 444" class="cls-222" d="M24.06,13.15A6.6,6.6,0,1,0,16.72,6.6,7,7,0,0,0,24.06,13.15Z" />
                  <path id="Path_445" data-name="Path 445" class="cls-222" d="M47.6,11.14a8.1,8.1,0,0,0-8.77-5.06,6,6,0,0,0-4.69,8.12,7.88,7.88,0,0,0,3.5,4.07,8.05,8.05,0,0,0,4,1.1,7.45,7.45,0,0,0,1.25-.11A6,6,0,0,0,48,12.51a6.54,6.54,0,0,0-.37-1.38Z" />
                  <path id="Path_446" data-name="Path 446" class="cls-222" d="M13.86,14.2A6,6,0,0,0,9.17,6.07a7.9,7.9,0,0,0-5.27,1C.39,9.09-1,13.25.77,16.34h0A6.13,6.13,0,0,0,5.1,19.26a7.45,7.45,0,0,0,1.25.11,8.05,8.05,0,0,0,4-1.1A7.88,7.88,0,0,0,13.86,14.2Z" />
                </svg>
              </span> 旅客明細
            </div>
          </div>
          <div class="step step2 step-active">
            <div class="step-title t-m active">
              <span>
                <svg id="food-icon" class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.03 39.5">
                  <path id="Path_443" data-name="Path 443" class="cls-222" d="M36.25,20a19.87,19.87,0,0,0-24.49,0,12.53,12.53,0,0,0-5.34,9.47C6.42,35.63,13.16,39.5,24,39.5s17.59-3.86,17.59-10.08A12.56,12.56,0,0,0,36.25,20Z" />
                  <path id="Path_444" data-name="Path 444" class="cls-222" d="M24.06,13.15A6.6,6.6,0,1,0,16.72,6.6,7,7,0,0,0,24.06,13.15Z" />
                  <path id="Path_445" data-name="Path 445" class="cls-222" d="M47.6,11.14a8.1,8.1,0,0,0-8.77-5.06,6,6,0,0,0-4.69,8.12,7.88,7.88,0,0,0,3.5,4.07,8.05,8.05,0,0,0,4,1.1,7.45,7.45,0,0,0,1.25-.11A6,6,0,0,0,48,12.51a6.54,6.54,0,0,0-.37-1.38Z" />
                  <path id="Path_446" data-name="Path 446" class="cls-222" d="M13.86,14.2A6,6,0,0,0,9.17,6.07a7.9,7.9,0,0,0-5.27,1C.39,9.09-1,13.25.77,16.34h0A6.13,6.13,0,0,0,5.1,19.26a7.45,7.45,0,0,0,1.25.11,8.05,8.05,0,0,0,4-1.1A7.88,7.88,0,0,0,13.86,14.2Z" />
                </svg>
              </span> 確認付款
            </div>
          </div>
          <div class="step step3 ">
            <div class="step-title t-m ">
              <span>
                <svg id="food-icon" mlns="http://www.w3.org/2000/svg" viewBox="0 0 48.03 39.5">
                  <path id="Path_443" data-name="Path 443" class="cls-222" d="M36.25,20a19.87,19.87,0,0,0-24.49,0,12.53,12.53,0,0,0-5.34,9.47C6.42,35.63,13.16,39.5,24,39.5s17.59-3.86,17.59-10.08A12.56,12.56,0,0,0,36.25,20Z" />
                  <path id="Path_444" data-name="Path 444" class="cls-222" d="M24.06,13.15A6.6,6.6,0,1,0,16.72,6.6,7,7,0,0,0,24.06,13.15Z" />
                  <path id="Path_445" data-name="Path 445" class="cls-222" d="M47.6,11.14a8.1,8.1,0,0,0-8.77-5.06,6,6,0,0,0-4.69,8.12,7.88,7.88,0,0,0,3.5,4.07,8.05,8.05,0,0,0,4,1.1,7.45,7.45,0,0,0,1.25-.11A6,6,0,0,0,48,12.51a6.54,6.54,0,0,0-.37-1.38Z" />
                  <path id="Path_446" data-name="Path 446" class="cls-222" d="M13.86,14.2A6,6,0,0,0,9.17,6.07a7.9,7.9,0,0,0-5.27,1C.39,9.09-1,13.25.77,16.34h0A6.13,6.13,0,0,0,5.1,19.26a7.45,7.45,0,0,0,1.25.11,8.05,8.05,0,0,0,4-1.1A7.88,7.88,0,0,0,13.86,14.2Z" />
                </svg>
              </span> 完成訂單
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- --------------------step---------------- -->
<div class="container container-mt">
  <div class="row">
    <div class="col-12 col-lg-8 all-step-box all-form-box ">
      <div class="row">
        <div class="all-form-box-in w-100">
          <div class="col-12 form-box">
            <h5 class="green-color t-l title1-m form-title">付款方式</h5>
          </div>
          <div class="col-12 form-box contacts-box">
            <div class="row">
              <div class="col-12 col-lg-12">
                <div class="row ">
                  <div class="col-12 d-flex align-items-center ">
                    <input id="creditCard" class="form-radio " type="radio" name="payItems" checked>
                    <label for="creditCard" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">信用卡線上刷卡一次付清</span></label>
                    <br>

                  </div>
                  <div class="col-12 d-flex align-items-center ">
                    <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mt-3 mb-3">信用卡資訊</h5>
                  </div>
                  <div class="col-12 d-flex justify-content-center mb-4 credit-card-box">
                    <div class="card1">
                      <div class="credit-card card-front">
                        <img class="credit-card-img" src="./imgs/3x/card-front@3x.png" alt="">
                        <div class="card-text-box">
                          <h3 class="card-text card-number">0000 0000 0000 0000</h3>
                          <h3 class="card-text card-name-t"> cardholder name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expiration</h3>
                          <h3 class="card-text card-name"> CHANH CHU YDHS</h3>
                          <h3 class="card-text card-date">MM / YY</h3>
                        </div>

                      </div>
                      <div class="credit-card card-back">
                        <img class="credit-card-img" src="./imgs/3x/card-back@3x.png" alt="">
                        <div class="card-cvc">CVC</div>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 d-flex align-items-center  bb-line">
                    <div class="row d-flex justify-content-center w-100">
                      <div class="col-12 col-lg-6  one-form">
                        <label class="text-color t-s label-all" name="cardNumber" for="cardNumber">信用卡號碼：&nbsp; <span class="danger-color">*</span></label><br>
                        <input id="cardNumber" class="form-input w-100" type="text" name="cardNumber" placeholder="0000 0000 0000 0000" required>
                      </div>
                      <div class="col-12 col-lg-6  one-form">
                        <label class="text-color t-s label-all " name="holderName" for="holderName">持卡人姓名：&nbsp; <span class="danger-color">*</span></label><br>
                        <input class="form-input w-100" type="text" name="holderName" id="holderName" placeholder="例：陳毛毛" required>
                      </div>
                      <div class="col-12 col-lg-6 one-form">
                        <label class="text-color t-s label-all " name="cardDatecardDate">信用卡有效日期： &nbsp;<span class="danger-color">*</span></label><br>
                        <div class="row">
                          <div class="col-8 d-flex flex-row">
                            <input id="cardDate" class="col-6 col-lg-4 form-input mr-3" type="text" name="cardDateMM" placeholder="MM" required>
                            <input id="cardDateY" class="col-6 col-lg-4 form-input" type="text" name="cardDateYY" placeholder="YY" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6  one-form mb-5">
                        <label class="text-color t-s label-all " name="surname" for="">信用卡被後三碼：&nbsp; <span class="danger-color">*</span></label><br>
                        <input class="form-input" type="text" name="surname" placeholder="CVC" required>
                      </div>
                    </div>
                  </div>

                  <!-- ------信用卡----  -->
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="ATM" class="form-radio" type="radio" name="payItems">
                    <label for="ATM" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">ATM付款(轉帳/網路線上繳款)</span></label>


                  </div>
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="linePay" class="form-radio" type="radio" name="payItems">
                    <label for="linePay" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">LINE PAY</span></label>

                  </div>
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="applePay" class="form-radio" type="radio" name="payItems">
                    <label for="applePay" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">Apple Pay</span></label>

                  </div>
                  <div class="col-12 d-flex align-items-center ">
                    <input id="travelCard" class="form-radio" type="radio" name="payItems">
                    <label for="travelCard" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">國民旅遊卡</span></label>

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-12 order-box order-box-total">
            <div class="row mt-3">
              <div class="col-12 col-lg-7 text-gray t-xs ">
                <p>點擊“確認結帳”，即表示您已確認訂單無誤以及同意右邊顯示的總金額，且同意 服務條款 和 退訂政策</p>
              </div>



              <div class="col-12 col-lg-5 single-prod-total d-flex justify-content-end mb-3 mt-1">
                <h5 class="brown-color t-m">總計：</h5>
                <h5 class="t-l prod-price-single danger-color ">NT$ 3000</h5>
              </div>
            </div>
            <div class="pay-btn-box pb-3 ">
              <a href="./order-step3.php" class="a-style w-100 d-flex justify-content-end">
                <button class="btn pay-btn ml-3">確認結帳</button>
              </a>
              <a href="./order-step1.php" class=" a-style w-100 d-flex justify-content-start">
                <button class="btn-outline pay-btn mr-3">回上一步</button>
              </a>
            </div>


          </div>
        </div>
      </div>
    </div>


    <div class="col-12 col-lg-4 all-step-box all-order-box">
      <div class="row ">
        <div class="all-order-box-in w-100">
          <div class="col-12 order-box">
            <h5 class="text-color t-m mt-1">標題標題標題標題標題標題標題標題題標題標題</h5>
            <div class="detail-box">
              <div class="detail-all detail-time d-flex justify-content-between">
                <h6 class=" text-gray t-s ">時間：</h6>
                <h6 class=" text-gray t-s">2020/08/12 pm 6:00</h6>
              </div>
              <div class="detail-all detail-quan d-flex justify-content-between">
                <h6 class=" text-gray t-s">數量：</h6>
                <h6 class=" text-gray t-s">2 x 人 / 1 x 犬</h6>
              </div>
            </div>
            <div class="single-prod-total d-flex justify-content-end">
              <h5 class="t-m brown-color prod-price-single">NT$ 3000</h5>
            </div>
          </div>
          <div class="col-12 order-box">
            <h5 class="text-color t-m mt-1">標題標題標題標題標題標題標題標題題標題標題</h5>
            <div class="detail-box">
              <div class="detail-all detail-time d-flex justify-content-between">
                <h6 class=" text-gray t-s ">時間：</h6>
                <h6 class=" text-gray t-s">2020/08/12 pm 6:00</h6>
              </div>
              <div class="detail-all detail-quan d-flex justify-content-between">
                <h6 class=" text-gray t-s">數量：</h6>
                <h6 class=" text-gray t-s">2 x 人 / 1 x 犬</h6>
              </div>
            </div>
            <div class="single-prod-total d-flex justify-content-end">
              <h5 class="t-m brown-color prod-price-single">NT$ 3000</h5>
            </div>
          </div>
          <div class="col-12 order-box order-box-total">
            <div class="detail-box-total">
              <div class="detail-all detail-time d-flex justify-content-between">
                <h6 class=" text-gray t-s ">價格：</h6>
                <h6 class=" text-gray t-s ">2039</h6>
              </div>
              <div class="detail-all detail-quan d-flex justify-content-between ">
                <h6 class=" text-gray t-s ">折扣卷：</h6>
                <h6 class=" text-gray t-s ">( NEDDDF ) &nbsp; <span class="prod-price-single t-m danger-color">- 404</span></h6>
              </div>
            </div>
            <div class="single-prod-total d-flex justify-content-end">
              <h5 class="brown-color t-m ">總計：</h5>
              <h5 class="t-m prod-price-single danger-color ">NT$ 3000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- <div class="container mt-5">
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

</div> -->












<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------
  var card = document.querySelector('.card1');
  card.addEventListener('click', function() {
    card.classList.toggle('is-flipped');

  });


  // $('.form-input').on('click', function() {

  //   console.log('.fom-mousedown');
  //   // $('.contacts-box')
  //   $(this).addClass('active');
  // })
  // $('.form-input').on('mouseleave', function() {

  //   console.log('.fom-mouseleave');
  //   // $('.contacts-box')
  //   $(this).removeClass('active');
  // })



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>