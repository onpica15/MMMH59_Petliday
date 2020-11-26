<?php include __DIR__ . '<?= WEB_ROOT ?>/parts/config.php' ?>
<?php include __DIR__ . '<?= WEB_ROOT ?>/parts/html-head.php' ?>
<?php include __DIR__ . '<?= WEB_ROOT ?>/parts/html-script.php' ?>
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
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="creditCard" class="form-radio " type="radio" name="payItems" value="creditCard" checked>
                    <label for="creditCard" class="mb-0 d-flex flex-row justify-content-center align-items-center">
                      <div class=" radio-text t-m text-color mt-2 mb-2 mr-3">
                        信用卡線上刷卡一次付清
                      </div>
                      <div class="card-icon-items-box ">
                        <div class=" card-icon-items d-flex ">
                          <img class="mr-2" src="./imgs/3x/visa@3x.png" alt="">
                          <img class="mr-2" src="./imgs/3x/master@3x.png" alt="">
                          <img class="mr-2" src="./imgs/3x/jcb@3x.png" alt="">
                        </div>
                      </div>
                    </label>
                    <br>

                  </div>
                  <div id="creditCard-box" class="creditCard-box w-100">
                    <div class="col-12 d-flex align-items-center ">
                      <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mt-3 mb-3">信用卡資訊</h5>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-4 credit-card-box">
                      <div class="card1">
                        <div class="credit-card card-front">
                          <img class="credit-card-img" src="./imgs/3x/card-front@3x.png" alt="">
                          <div class="card-text-box">
                            <h3 id="card-number" class="card-text card-number">0000 0000 0000 0000</h3>
                            <h3 class="card-text card-name-t"> cardholder name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expiration</h3>
                            <h3 id="card-name" class="card-text card-name"> YOUR NAME</h3>
                            <h3 class="card-text card-date d-flex">
                              <span id="card-date-m" class="card-date-font">••</span> /
                              <span id="card-date-y" class="card-date-font">••</span>
                            </h3>
                          </div>

                        </div>
                        <div class="credit-card card-back">
                          <img class="credit-card-img" src="./imgs/3x/card-back@3x.png" alt="">
                          <div id="card-cvc" class="card-cvc">•••</div>
                        </div>
                      </div>

                    </div>
                    <div class="col-12 d-flex align-items-center  bb-line">
                      <div class="row d-flex justify-content-center w-100">
                        <div class="col-12 col-lg-6  one-form">
                          <label class="front text-color t-s label-all" name="cardNumber" for="cardNumber">信用卡號碼：&nbsp; <span class="danger-color">*</span></label><br>
                          <input id="cardNumber" class="form-input w-100" type="text" name="cardNumber" placeholder="0000 0000 0000 0000" class="front" value="" required>
                        </div>
                        <div class="col-12 col-lg-6  one-form">
                          <label class="front text-color t-s label-all " name="holderName" for="holderName">持卡人姓名：&nbsp; <span class="danger-color">*</span></label><br>
                          <input class="form-input w-100" type="text" name="holderName" id="holderName" class="front" placeholder="例：陳毛毛" value="" required>
                        </div>
                        <div class="col-12 col-lg-6 one-form">
                          <label class="front text-color t-s label-all " name="cardDatecardDate">信用卡有效日期： &nbsp;<span class="danger-color">*</span></label><br>
                          <div class="row">
                            <div class="col-8 d-flex flex-row">

                              <input id="cardDateM" class="front col-6 col-lg-4 form-input mr-3" type="text" name="cardDateMM" placeholder="MM" value="" required>

                              <input id="cardDateY" class="front col-6 col-lg-4 form-input" type="text" name="cardDateYY" placeholder="YY" value="" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6  one-form mb-5">
                          <label class="text-color t-s label-all " name="cardCVC" for="cardCVC">信用卡背面三碼：&nbsp; <span class="danger-color">*</span></label><br>
                          <input class="form-input" type="text" name="cardCVC" placeholder="CVC" value="" id="cardCVC" required>

                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- ------信用卡----  -->
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="ATM" class="form-radio" type="radio" name="payItems" value="ATM">
                    <label for="ATM" class="mb-0"><span class=" radio-text t-m text-color mt-2 mb-2">ATM付款(轉帳/網路線上繳款)</span></label>


                  </div>
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="linePay" class="form-radio" type="radio" name="payItems" value="linePay">
                    <label for="linePay" class="mb-0 d-flex flex-row justify-content-center align-items-center">
                      <span class=" radio-text t-m text-color mt-2 mb-2 mr-3">
                        LINE PAY
                      </span>
                      <div class="card-icon-items-box ">
                        <div class=" card-icon-items d-flex ">
                          <img class="mr-2" src="./imgs/3x/line@3x.png" alt="">

                        </div>
                      </div>
                    </label>


                  </div>
                  <div class="col-12 d-flex align-items-center bb-line">
                    <input id="applePay" class="form-radio" type="radio" name="payItems" value="applePay">
                    <label for="applePay" class="mb-0 d-flex flex-row justify-content-center align-items-center">
                      <span class=" radio-text t-m text-color mt-2 mb-2 mr-3">
                        Apple Pay
                      </span>
                      <div class="card-icon-items-box ">
                        <div class=" card-icon-items d-flex ">
                          <img class="mr-2" src="./imgs/3x/apple@3x.png" alt="">

                        </div>
                      </div>
                    </label>



                  </div>
                  <div class="col-12 d-flex align-items-center ">
                    <input id="travelCard" class="form-radio" type="radio" name="payItems" value="travelCard">
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




<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script>
  // ------JS開始 以上勿刪-------
  let card = document.querySelector('.card1');
  let cardCVC = document.querySelector('#cardCVC');
  let cardNumber = document.querySelector('#cardNumber');
  let holderName = document.querySelector('#holderName');
  let cardDateM = document.querySelector('#cardDateM');
  let cardDateY = document.querySelector('#cardDateY');
  let cardDate = document.querySelector('.card-date');
  let cardCount = 0;

  card.addEventListener('click', function() {
    card.classList.toggle('is-flipped');
    cardCount += 1;
    console.log(cardCount)
  });

  cardCVC.addEventListener('click', function() {
    console.log('cardCVC')
    if (cardCount % 2) {

    } else {
      card.classList.toggle('is-flipped');
      cardCount += 1;
      console.log(cardCVC)
      console.log(cardCount)
    }
  });

  cardNumber.addEventListener('click', function() {
    console.log('cardNumber')
    if (cardCount % 2) {
      card.classList.toggle('is-flipped');
      cardCount += 1;
      console.log(cardNumber)
      console.log(cardCount)
    }
  });
  holderName.addEventListener('click', function() {
    console.log('holderName')
    if (cardCount % 2) {
      card.classList.toggle('is-flipped');
      cardCount += 1;
      console.log(holderName)
      console.log(cardCount)
    }
  });


  cardDateM.addEventListener('click', function() {
    console.log('cardDateM')
    if (cardCount % 2) {
      card.classList.toggle('is-flipped');
      cardCount += 1;
      console.log(cardDateM)
      console.log(cardCount)
    }
  });
  cardDateY.addEventListener('click', function() {
    console.log('cardDateY')
    if (cardCount % 2) {
      card.classList.toggle('is-flipped');
      cardCount += 1;
      console.log(cardDateY)
      console.log(cardCount)
    }
  });



  $("#cardNumber").keyup(
    function() {
      $("#card-number").html(this.value)
      if (!(this.value)) {
        $("#card-number").html('0000 0000 0000 0000')
      }
    }
  )
  $("#holderName").keyup(
    function() {
      $("#card-name").html(this.value)
      if (!(this.value)) {
        $("#card-name").html('YOUR NAME')
      }
    }
  )


  $("#cardDateM").keyup(
    function() {
      $("span#card-date-m.card-date-font").html(this.value)
      if (!(this.value)) {
        $("span#card-date-m.card-date-font").html('MM')
      }
    }
  )
  // $("span#card-date-y.card-date-font").html('YY');

  $("#cardDateY").keyup(
    function() {
      $("span#card-date-y.card-date-font").html(this.value)
      if (!(this.value)) {
        $("span#card-date-y.card-date-font").html('YY')
      }
    }
  )
  $("#cardCVC").keyup(
    function() {
      $("#card-cvc").html(this.value)
      if (!(this.value)) {
        $("#card-cvc").html('cvc')
      }
    }
  )

  const cardNumberConfirm = function(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  };

  ' ^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$'



  // let couponNo = document.querySelector('#couponNo');
  // let payItems = document.querySelector('[name=payItems]');
  // let creditCard = document.querySelector('#creditCard');
  // let creditCardBox = document.querySelector('.creditCard-box');
  // let atm = document.querySelector('#ATM');
  // let creditCardParent = creditCard.parentElement;

  // console.log('creditCardParent', creditCardParent);

  // creditCard.addEventListener('click', function() {
  //   creditCardBox.classList.add('can-display');
  //   creditCardParent.classList.remove('bb-line');
  // });
  // atm.addEventListener('click', function() {
  //   creditCardBox.classList.remove('can-display');
  //   creditCardParent.classList.add('bb-line');

  // });

  let val = $('input[name=payItems]:checked').val();
  let checked = $('input[name=payItems]:checked');
  let CardParent = $('#creditCard').parent()

  console.log('CardParent', CardParent);

  $('.creditCard-box').slideDown();
  $('#creditCard').on('click', function() {
    console.log('#creditCard');
    console.log('val', val);

    if (val = 'creditCard') {
      console.log('creditCard,checked');
      $(CardParent).removeClass('bb-line')
      $('.creditCard-box').slideDown();
    }
  })

  $('#ATM').on('click', function() {
    $('.creditCard-box').slideUp()
    $(CardParent).addClass('bb-line')
  });

  // $('#creditCard').on('click', function() {
  //   $('.creditCard-box').slideDown()
  // })


  // if (creditCard.checked) {
  //   console.log('creditCard')
  //   creditCardBox.classList.add('can-display');
  //   creditCardParent.classList.remove('bb-line');

  // } else if (atm.checked) {
  //   creditCardBox.classList.remove('can-display');
  // }
  // if (atm.checked) {
  //   console.log('atm')
  //   creditCardBox.classList.remove('can-display');
  //   creditCardParent.classList.adds('bb-line');
  // }



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>