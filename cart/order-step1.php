<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>cart/cart-style.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<div class="container cart-title ">
  <div class="row">
    <div class="col-12">
      <div class="row d-flex justify-content-center">
        <div class="col-11 col-lg-8 step-box d-flex">
          <div class="step step1 step-active">
            <div class="step-title t-m active">
              <span>
                <svg id="food-icon" class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.03 39.5">
                  <path id="Path_443" data-name="Path 443" class="cls-222" d="M36.25,20a19.87,19.87,0,0,0-24.49,0,12.53,12.53,0,0,0-5.34,9.47C6.42,35.63,13.16,39.5,24,39.5s17.59-3.86,17.59-10.08A12.56,12.56,0,0,0,36.25,20Z" />
                  <path id="Path_444" data-name="Path 444" class="cls-222" d="M24.06,13.15A6.6,6.6,0,1,0,16.72,6.6,7,7,0,0,0,24.06,13.15Z" />
                  <path id="Path_445" data-name="Path 445" class="cls-222" d="M47.6,11.14a8.1,8.1,0,0,0-8.77-5.06,6,6,0,0,0-4.69,8.12,7.88,7.88,0,0,0,3.5,4.07,8.05,8.05,0,0,0,4,1.1,7.45,7.45,0,0,0,1.25-.11A6,6,0,0,0,48,12.51a6.54,6.54,0,0,0-.37-1.38Z" />
                  <path id="Path_446" data-name="Path 446" class="cls-222" d="M13.86,14.2A6,6,0,0,0,9.17,6.07a7.9,7.9,0,0,0-5.27,1C.39,9.09-1,13.25.77,16.34h0A6.13,6.13,0,0,0,5.1,19.26a7.45,7.45,0,0,0,1.25.11,8.05,8.05,0,0,0,4-1.1A7.88,7.88,0,0,0,13.86,14.2Z" />
                </svg>
              </span> 旅客明細
            </div>
          </div>
          <div class="step step2 ">
            <div class="step-title t-m ">
              <span>
                <svg id="food-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.03 39.5">
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

  <form action="" method="POST" name="form_all">
    <div class="row">
      <div class="col-12 col-lg-8 all-step-box all-form-box ">
        <div class="row">
          <div class="all-form-box-in w-100">
            <div class="col-12 form-box">
              <h5 class="green-color t-l title1-m form-title fast-main">訂購人資料</h5>



            </div>

            <div class="col-12 form-box contacts-box">
              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">聯絡家長資訊</h5>
                <h5 class=" col-7 text-gray t-xs mb-2">若訂單有任何變動，主要聯繫人</h5>
                <div class="col-5 d-flex justify-content-end">
                  <input type="checkbox" id="autoUpdate" class="" checked></input>
                  <label for="autoUpdate" class="text-gray t-xs mb-2">同步更新會員資料</label>
                </div>
              </div>


              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="mainLastName" for="mainLastName">姓氏：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="mainLastName" class="form-input form-error" type="text" name="mainLastName" placeholder="例：陳">
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="mainFirstName" for="mainFirstName">名字：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="mainFirstName" class="form-input" type="text" name="mainFirstName" placeholder="例：毛毛">
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-8 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="mainGender" for="mainGender">稱謂 :&nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <select class="form-input" name="mainGender" id="mainGender">
                    <option name="0" value="0">請選擇</option>
                    <option name="man" value="man">先生</option>
                    <option name="woman" value="woman">女士</option>
                  </select>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="phone" for="phone">聯繫電話 :&nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <input id="phone" class="form-input" type="tel" name="phone" placeholder="例：0900-000-000">
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-12 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="email" for="email">聯繫信箱 :&nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <input id="email" class="form-input" type="email" name="email" placeholder="例：petilday@petilday.com">
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
              </div>


            </div>



            <!-- ---自動表格---- -->
            <!-- ---自動表格---- -->
            <div class="w-100 info-form"></div>

            <!-- 付款方式 -->
            <!-- <form action="" method="POST" name="form_order"> -->
            <div class="col-12 form-box contacts-box">
              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">發票資訊</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row ">
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="donateReceipt" class="form-radio custom-control-input" type="radio" name="receipt" checked value="捐贈發票">
                      <label for="donateReceipt" class="form-radio-label custom-control-label mb-0"><span class=" radio-text t-m text-color">捐贈發票</span></label>
                    </div>
                    <div class="col-12 d-flex align-items-center bb-line">

                      <input id="receipt2" class="form-radio  custom-control-input" type="radio" name="receipt" value="二聯電子發票">
                      <label for="receipt2 " class="mb-0 custom-control-label"><span class=" radio-text t-m text-color ">二聯電子發票</span></label>
                    </div>

                    <div class="col-12 d-flex align-items-center">

                      <input id="receipt3" class="form-radio custom-control-input" type="radio" name="receipt" value="三聯電子發票">
                      <label for="receipt3" classs="mb-0 custom-control-label "><span class=" radio-text t-m text-color">三聯電子發票</span></label>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- </form> -->
          </div>
          <!-- <form action="" method="POST" name="form_coupon" class="w-100"> -->
          <div class="all-form-box-in w-100 mt-3">
            <div class="col-12 form-box">
              <h5 class="green-color t-l title1-m form-title">優惠折扣碼</h5>
            </div>
            <div class="col-12 form-box contacts-box">

              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center">
                      <input id="couponNo" class="form-radio custom-control-input" type="radio" name="coupon" value="無折扣碼" checked>
                      <label class=" radio-text t-m text-color custom-control-label" for="couponNo">無折扣碼</label>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                      <input id="couponYes" class="form-radio custom-control-input" type="radio" name="coupon" value="我有折扣碼">
                      <label class="radio-text t-m text-color custom-control-label " for="couponYes">我有折扣碼</label>
                    </div>
                    <div class="coupon-items w-100 animation">
                      <div class="col-12 d-flex align-items-center">
                        <input class="form-input form-input-btn " id="couponNumber" type="text" name="couponNumber" placeholder="請輸入折扣碼" value="">
                        <button type="button" name="couponNumberBtn" class="ml-2 form-input-btn btn ">兌換</button>
                      </div>
                      <div class="col-12 col-lg-6 mt-4">
                        <div class="coupon">
                          <input class="form-radio coupon-check custom-control-input" type="radio" name="coupon-box" id="coupon-check">
                          <label class="custom-control-label" for="coupon-check"></label>
                          <div class="orange-color t-l mb-3 ">新客優惠 20%OFF </div>
                          <p class="text-gray t-xs mb-0 ">折扣券碼： 2020WELCOME
                          </p>
                          <p class="text-gray t-xs mb-0">有效日期： 2020/12/18-2021/6/30
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-12 order-box order-box-total">
              <div class="detail-box-total">
                <div class="detail-all detail-time d-flex justify-content-between">
                  <h6 class=" text-gray t-s ">價格：</h6>
                  <h6 class=" text-gray t-s totleAmount">0</h6>
                </div>
                <div class="detail-all detail-quan d-flex justify-content-between">
                  <h6 class=" text-gray t-s">折扣卷：</h6>
                  <div class="d-flex">
                    <h6 class=" text-gray t-s coupon-munber">&nbsp; </h6>
                    <span class="prod-price-single t-m danger-color coupon-price">- 0</span>
                  </div>
                </div>
              </div>
              <div class="single-prod-total d-flex justify-content-end mb-3 mt-1 ">
                <h5 class="brown-color t-m">總計：</h5>
                <h5 class="t-l prod-price-single danger-color all_total">0</h5>
              </div>

              <div class="pay-btn-box pb-3 ">
                <!-- href="./order-step2.php" -->
                <a href="#go-pay" class="a-style w-100 d-flex justify-content-end">
                  <div class="btn pay-btn d-flex align-items-center" id="pay-btn">繼續結帳</div>
                </a>
                <a href="./cart.php" class=" a-style w-100 d-flex justify-content-start">
                  <button class="btn-outline pay-btn mr-3">回購物車</button>
                </a>
              </div>

            </div>
          </div>
          <!-- </form> -->

          <!-- ----------付款資訊-------------- -->
          <!-- <form action="" method="POST" name="form_pay"> -->
          <div class="all-form-box-in w-100 pay-all" id="go-pay">
            <div class="col-12 form-box">
              <h5 class="green-color t-l title1-m form-title">付款方式</h5>
            </div>
            <div class="col-12 form-box contacts-box">
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row ">
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="creditCard " class="form-radio custom-control-input" type="radio" name="payItems" value="creditCard" checked>
                      <label for="creditCard" class="mb-0 d-flex flex-row justify-content-center align-items-center custom-control-label">
                        <div class="radio-text t-m text-color mt-2 mb-2 mr-3">
                          信用卡線上刷卡一次付清
                        </div>
                        <div class="card-icon-items-box" for="creditCard">
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
                        <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mt-3 mb-3">請輸入信用卡資訊：</h5>
                      </div>
                      <div class="col-12 d-flex justify-content-center mb-4 credit-card-box">
                        <div class="card1">
                          <div class="credit-card card-front">
                            <img class="credit-card-img" src="./imgs/3x/card-front@3x.png" alt="">
                            <div class="card-text-box">
                              <h3 id="card-number" class="card-text card-number ">0000 0000 0000 0000</h3>
                              <h3 class="card-text card-name-t"> cardholder name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expiration</h3>
                              <h3 id="card-name" class="card-text card-name"> FULL NAME</h3>
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
                        <div class="row d-flex all-bb justify-content-center w-100">
                          <div class="col-12 col-lg-6  one-form">
                            <label class="front text-color t-s label-all" name="cardNumber" for="cardNumber">信用卡號碼：&nbsp; <span class="danger-color">*</span></label><br>
                            <input id="cardNumber" class="form-input w-100" type="text" name="cardNumber" placeholder="0000 0000 0000 0000" maxlength="16" class="front" value="">
                          </div>
                          <div class="col-12 col-lg-6  one-form">
                            <label class="front text-color t-s label-all " name="holderName" for="holderName">持卡人姓名：&nbsp; <span class="danger-color">*</span></label><br>
                            <input class="form-input w-100" type="text" name="holderName" id="holderName" class="front" placeholder="例：陳毛毛" value="">
                          </div>
                          <div class="col-12 col-lg-6 one-form">
                            <label class="front text-color t-s label-all " name="cardDatecardDate">信用卡有效日期： &nbsp;<span class="danger-color">*</span></label><br>
                            <div class="row">
                              <div class="col-8 d-flex flex-row">

                                <input id="cardDateM" class="front col-6 col-lg-4 form-input mr-3" type="text" name="cardDateMM" placeholder="MM" value="" maxlength="2">

                                <input id="cardDateY" class="front col-6 col-lg-4 form-input" type="text" name="cardDateYY" placeholder="YY" value="" maxlength="2">
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6  one-form mb-5">
                            <label class="text-color t-s label-all " name="cardCVC" for="cardCVC">信用卡背面三碼：&nbsp; <span class="danger-color">*</span></label><br>
                            <input class="form-input" type="text" name="cardCVC" placeholder="CVC" value="" id="cardCVC" maxlength="3">

                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- ------信用卡----  -->
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="ATM" class="form-radio custom-control-input" type="radio" name="payItems" value="ATM">
                      <label for="ATM" class="mb-0 custom-control-label"><span class=" radio-text t-m text-color mt-2 mb-2">ATM付款(轉帳/網路線上繳款)：：請於12/19 23:59前完成繳款</span></label>


                    </div>
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="linePay " class="form-radio custom-control-input" type="radio" name="payItems" value="linePay">
                      <label for="linePay" class="mb-0 d-flex flex-row justify-content-center align-items-center custom-control-label">
                        <span class=" radio-text t-m text-color mt-2 mb-2 mr-3">
                          LINE PAY：(可用LINE點數折抵) 請備妥手機以完成交易
                        </span>
                        <div class="card-icon-items-box ">
                          <div class=" card-icon-items d-flex ">
                            <img class="mr-2" src="./imgs/3x/line@3x.png" alt="">

                          </div>
                        </div>
                      </label>


                    </div>
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="applePay " class="form-radio custom-control-input" type="radio" name="payItems" value="applePay">
                      <label for="applePay" class="mb-0 d-flex flex-row justify-content-center align-items-center custom-control-label">
                        <span class=" radio-text t-m text-color mt-2 mb-2 mr-3">
                          Apple Pay：請備妥手機以完成交易
                        </span>
                        <div class="card-icon-items-box ">
                          <div class=" card-icon-items d-flex ">
                            <img class="mr-2" src="./imgs/3x/apple@3x.png" alt="">

                          </div>
                        </div>
                      </label>



                    </div>
                    <div class="col-12 d-flex align-items-center ">
                      <input id="travelCard" class="form-radio custom-control-input" type="radio" name="payItems" value="travelCard">
                      <label for="travelCard" class="mb-0 custom-control-label"><span class=" radio-text t-m text-color mt-2 mb-2">國民旅遊卡</span></label>

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-12 order-box order-box-total">
              <div class="row mt-3">
                <div class="col-12 col-lg-7 text-gray t-xs ">
                  <p>點擊“確認結帳”，即表示您已確認訂單無誤以及同意右邊顯示的總金額，且同意 服務條款 | 隱私權政策 | 銀行履約保證 | 退費保障政策。</p>
                </div>



                <div class="col-12 col-lg-5 single-prod-total d-flex justify-content-end mb-3 mt-1">
                  <h5 class="brown-color t-m">總計：</h5>
                  <h5 class="t-l prod-price-single danger-color all_total">NT$ 0</h5>
                </div>
              </div>
              <div class="pay-btn-box pb-3 ">
                <a href="./order-step3.php" class="a-style w-100 d-flex justify-content-end">
                  <button class="btn pay-btn ml-3">確認結帳</button>
                </a>
                <a href="./cart.php" class=" a-style w-100 d-flex justify-content-start">
                  <button class="btn-outline pay-btn mr-3">回購物車</button>
                </a>
              </div>


            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
      <!-- -----右邊----- -->

      <div class="col-12 col-lg-4 all-step-box all-order-box">
        <div class="row ">
          <div class="all-order-box-in w-100">
            <?php foreach ($_SESSION['cart'] as $i) : ?>
              <div class="col-12 order-box form-quan" data-sid="<?= $i['sid'] ?>" data-man="<?= $i['manQ'] ?>" data-pet="<?= $i['petQ'] ?>" id="prod<?= $i['sid'] ?>">
                <h5 class="text-color t-m mt-1 title-box-item"><?= $i['product_name'] ?></h5>
                <div class="detail-box">
                  <div class="detail-all detail-time d-flex justify-content-between">
                    <h6 class=" text-gray t-s ">時間：</h6>
                    <h6 class=" text-gray t-s">2020/08/<?= $i['date'] ?></h6>
                  </div>
                  <div class="detail-all detail-quan d-flex justify-content-between">
                    <h6 class=" text-gray t-s">數量：</h6>
                    <h6 class=" text-gray t-s " data-sid="<?= $i['sid'] ?>" data-man="<?= $i['manQ'] ?>" data-pet="<?= $i['petQ'] ?>"><?= $i['manQ'] ?> x 人 / <?= $i['petQ'] ?> x 犬</h6>
                  </div>
                </div>
                <div class="single-prod-total d-flex justify-content-end">
                  <h5 class="t-m brown-color prod-price-single ">NT$ <span class="total-box-item"><?= ($i['manQ'] * $i['price_man'] + $i['petQ'] * $i['price_pet']) ?></span></h5>
                </div>
              </div>
              <div class="justinfo">
                <input class="justinfo" type="text" name="sid[]" value="<?= $i['sid'] ?>">
                <input class="justinfo" type="text" name="manQ[]" value="<?= $i['manQ'] ?>">
                <input class="justinfo" type="text" name="petQ[]" value="<?= $i['petQ'] ?>">
              </div>
            <?php endforeach;  ?>

            <div id="order-box-total" class="col-12 order-box order-box-total">
              <div class="detail-box-total">
                <div class="detail-all detail-time d-flex justify-content-between">
                  <h6 class=" text-gray t-s ">價格：</h6>
                  <h6 class=" text-gray t-s totleAmount"></h6>
                </div>
                <div class="detail-all detail-quan d-flex justify-content-between ">
                  <h6 class=" text-gray t-s ">折扣卷：</h6>
                  <div class="d-flex">
                    <h6 class=" text-gray t-s coupon-munber">&nbsp; </h6>
                    <span class="prod-price-single t-m danger-color coupon-price">- 0</span>
                  </div>
                </div>
              </div>
              <div class="single-prod-total d-flex justify-content-end">
                <h5 class="brown-color t-m ">總計：</h5>
                <h5 class="t-m all_total prod-price-single danger-color">0</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="justinfo">
      <input class="justinfo" type="text" name="coupon_t" value="2020WELCOME">
      <input class="justinfo totle_price" type="text" name="totle_price" value="">
    </div>
  </form>
</div>


<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script>
  // ------JS開始 以上勿刪-------

  let couponYes = document.querySelector('#couponYes')
  let couponNo = document.querySelector('#couponNo')
  let coupon = document.querySelector('.coupon-items')

  const dallorCommas = function(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  };

  // couponYes.addEventListener('click', function() {
  //   coupon.classList.remove('unable');

  // });
  // couponNo.addEventListener('click', function() {
  //   coupon.classList.add('unable');

  // });

  let couponItems = $('.coupon-items');

  $('.coupon-items').slideUp()

  $('#couponNo').on('click', function() {
    $('.coupon-items').slideUp()


  })
  $('#couponYes').on('click', function() {
    $('.coupon-items').slideDown()

  })

  function total() {
    let total = 0;
    // let all_total = total;
    $('.total-box-item').each(function() {
      price = parseInt($(this).html())
      console.log('$(this).html()', $(this).html())
      total += price;

      $('.totleAmount').text('NT$ ' + dallorCommas(total));
      $('.totleAmount').attr('data-total', total);

      $('.all_total').text('NT$ ' + dallorCommas(total));
      $('.all_total').attr('data-allTotal', total);

    });
    console.log('Atotal', total * 0.2)
    console.log('$(span.coupon-price)', $('span.coupon-price'))
    $('.coupon-munber').text('');
    $('span.coupon-price').text(' -$ 0');

    $('.all_total').text('NT$ ' + dallorCommas(total));
    $('.all_total').attr('data-allTotal', total);

    // $('.coupon-munber').text('')

    $('.coupon .custom-control-input').click(function() {

      console.log('click')
      $('span.coupon-price').text(' -$ ' + dallorCommas(parseInt(total * 0.2)));
      $('.all_total').attr('data-allTotal', parseInt(total * 0.8));
      $('.all_total').text('NT$ ' + dallorCommas(parseInt(total * 0.8)));

      $('.coupon-munber').text('( 2020WELCOME )');
    })



  };
  total();



  ///////自動輸入相對應人數表格
  $('.form-quan').each(function() {
    let form_title = $(this).find('.title-box-item').html();
    let form_sid = parseInt($(this).attr('data-sid'));
    let form_man = parseInt($(this).attr('data-man'));
    let form_pet = parseInt($(this).attr('data-pet'));
    let form_inner = $('.info-form');
    let xl_title = `<div class="contacts-box  col-12 form-box-title green-color t-m title1-m t-bold ">【 ${form_title} 】旅客資料：</div>`;
    let dayDisplay = ''
    // let dayDisplay_all = ''
    let dayDisplay_pet = ''
    console.log('form_title', form_title)

    for (let i = 1; i < form_man + 1; i++) {
      dayDisplay += `<div class="col-12 form-box contacts-box" data-sid="${form_sid}" data-type="man" >
              <div class="row fast-btn fast-man${i}">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1 ">旅客 ${i}</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="lastName" for="lastName">姓名：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input  class="form-input man-Name${i}" type="text" name="Name[]" placeholder="例：陳毛毛" >
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="firstName" for="firstName">行程當日聯繫電話：&nbsp;<span class="danger-color">*</span></label>
                  <input  class="form-input man-phone${i}" type="text" name="man-phone[]" placeholder="例：0900-000-000" >
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-8 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="idCard" for="idCard">身分證字號：（行程保險中使用）&nbsp;<span class="danger-color">*</span></label>
                  <input  class="form-input man-idCard${i}" type="text" name="idCard[]" placeholder="例：A0000000000" >
                </div>

                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="birthday" for="birthday">出生 年/月/日：（行程保險中使用）&nbsp;<span class="danger-color">*</span></label>
                  <input  class="form-input man-birthday${i}" type="date" name="birthday[]" >
                </div>
              </div>

            </div>`
    }
    for (let k = 1; k < form_pet + 1; k++) {
      dayDisplay_pet += `<div class="col-12 form-box contacts-box" data-sid="${form_sid}" data-type="pet">
      <div class="row fast-btn fast-pet${k}">
       <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1 ">寵物${k}</h5>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6 d-flex flex-column one-form">
          <label class="text-color t-s label-all" name="petName" for="petName">寶貝稱呼： &nbsp;&nbsp;<span class="danger-color">*</span></label>
          <input  class="form-input pet-petName${k}" type="text" name="petName[]" placeholder="例：毛日日" >
        </div>
        <div class="col-8 col-lg-6 d-flex flex-column one-form">
          <label class="text-color t-s label-all " name="petSize" for="petSize">體型： &nbsp;&nbsp;<span class="danger-color">*</span></label>
          <select class="form-input pet-Size${k}" name="petSize[]">
            <option class="option-style" name="0" value="0">請選擇</option>
            <option name="lSize" value="lSize">大型犬</option>
            <option name="MSize" value="MSize">中型犬</option>
            <option name="SSize" value="SSize">小型犬</option>
          </select>
        </div>
        <div class="col-12 col-lg-12 d-flex flex-column one-form">
          <label class="text-color t-s label-all " name="notes" for="notes">備註： &nbsp;&nbsp;<span class="danger-color">*</span></label>
          <input class="form-input pet-notes${k}" type="text" name="notes[]" >
        </div>
      </div>
      </div>`
    }

    // xl_title + dayDisplay + dayDisplay_pet;

    form_inner.append(xl_title + dayDisplay + dayDisplay_pet);

  })
  $('.fast-main').on('click', function() {
    $('#mainLastName').val('陳');
    $('#mainFirstName').val('嘉偉');
    $('#mainGender').val('man');
    $('#phone').val('0945-362-746');
    $('#email').val('rich184@gmail.com');
  })

  $('.fast-man4').on('click', function() {
    $('.man-Name4').val('夏暐涵');
    $('.man-phone4').val('0988-178-888');
    $('.man-idCard4').val('F224938385');
    $('.man-birthday4').val('1982-06-30');
  })
  $('.fast-man1').on('click', function() {
    $('.man-Name1').val('陳嘉偉');
    $('.man-phone1').val('0945-362-746');
    $('.man-idCard1').val('A135648385');
    $('.man-birthday1').val('1985-10-03');
  })
  $('.fast-man5').on('click', function() {
    $('.man-Name1').val('吳春玫');
    $('.man-phone1').val('0965-184-168');
    $('.man-idCard1').val('A235648385');
    $('.man-birthday1').val('1988-08-26');
  })
  $('.fast-man2').on('click', function() {
    $('.man-Name2').val('孔瑜琳');
    $('.man-phone2').val('0977-369-717');
    $('.man-idCard2').val('H263482385');
    $('.man-birthday2').val('1989-01-16');
  })
  $('.fast-man3').on('click', function() {
    $('.man-Name3').val('陳宇威');
    $('.man-phone3').val('0977-369-717');
    $('.man-idCard3').val('Q135648385');
    $('.man-birthday3').val('1990-02-28');
  })
  // ----
  $('.fast-pet4').on('click', function() {
    $('.pet-petName4').val('胡迪');
    $('.pet-Size4').val('MSize');
    $('.pet-notes4').val('無');
  })

  $('.fast-pet1').on('click', function() {
    $('.pet-petName1').val('嘿蹦');
    $('.pet-Size1').val('SSize');
    $('.pet-notes1').val('希望能提供推車');
  })

  $('.fast-pet2').on('click', function() {
    $('.pet-petName2').val('球球');
    $('.pet-Size2').val('lSize');
    $('.pet-notes2').val('狗狗有皮膚問題，提供的食物需要避免麥類');
  })
  $('.fast-pet3').on('click', function() {
    $('.pet-petName3').val('熊熊');
    $('.pet-Size3').val('MSize');
    $('.pet-notes3').val('寶貝看到同類喜歡吠叫，希望工作人員幫忙一下');
  })
  // ----

  $('#pay-btn').on('click', function() {


    const coupon = '2020WELCOME';

    $.post('<?= WEB_ROOT ?>cart/cart_to_api.php',

      // $(document.form_main, document.form_order, document.form_coupon, document.form_coupon, document.form_pay).serialize(),

      $(document.form_all).serialize(),
      function(data) {
        console.log('data', data);
      }, );



  });

  // 右邊價錢～～～～～滑動固定
  // console.log('scrollTop', $('#order-box-total').scrollTop())
  // $('rder-box-total').scrollTop()

  // console.log('AAAAorder_box_total', order_box_total);

  let wdth = $(window).width();
  let order_box_first = $('#order-box-total').offset().top;
  $(window).resize(function() {
    wdth = $(window).width()

  })


  $(window).on('scroll', function() {
    let scrollnow = $(window).scrollTop();
    let scrollwidth = wdth;
    let order_box_total = $('#order-box-total').offset().top;
    console.log('wdth', wdth)
    console.log('scrollnow', scrollnow);
    console.log('scrollwidth', scrollwidth);
    console.log('order_box_total', order_box_total - scrollnow);
    console.log('order_box_first', order_box_first);

    // let order_box_total = $('#order-box-total').scrollTop();


    if (order_box_total - scrollnow <= 80 && wdth > 991.98) {
      console.log('fixed')
      $('#order-box-total').addClass('fixed')
    }


    if (order_box_first - scrollnow > 80 && wdth > 991.98) {
      console.log('removeClassfixed')
      $('#order-box-total').removeClass('fixed')
    }




  })

  // console.log('windowwdth', wdth)







  // }) 付款

  // -----------------------------------------------------------------
  // -----------------------------------------------------------------
  // -----------------------------------------------------------------
  // -----------------------------------------------------------------

  let card = document.querySelector('.card1');
  let cardCVC = document.querySelector('#cardCVC');
  let cardNumber = document.querySelector('#cardNumber');
  let holderName = document.querySelector('#holderName');
  let cardDateM = document.querySelector('#cardDateM');
  let cardDateY = document.querySelector('#cardDateY');
  let cardDate = document.querySelector('.card-date');
  // let cardDateBox = document.querySelector('.credit-card-box');
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
      if ($(this).val().length == $(this).attr('maxlength'))
        $(this).parent().next().children(':input').focus();
    }
  );
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
      if ($(this).val().length == $(this).attr('maxlength'))
        $(this).next(':input').focus();
    }
  )
  // $("span#card-date-y.card-date-font").html('YY');

  $("#cardDateY").keyup(
    function() {
      $("span#card-date-y.card-date-font").html(this.value)
      if (!(this.value)) {
        $("span#card-date-y.card-date-font").html('YY')
      }
      if ($(this).val().length == $(this).attr('maxlength'))
        $(this).parentsUntil('.all-bb').next().children(':input').focus();
    }
  );
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


  // $('input').keyup(function(e) {
  //   if ($(this).val().length == $(this).attr('maxlength'))
  //     $(this).next(':input').focus();
  // });

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