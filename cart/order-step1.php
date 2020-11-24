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
  <pre>
    <?php print_r($_POST) ?>
    </pre>
  <form action="" method="POST">
    <div class="row">

      <div class="col-12 col-lg-8 all-step-box all-form-box ">
        <div class="row">
          <div class="all-form-box-in w-100">
            <div class="col-12 form-box">
              <h5 class="green-color t-l title1-m form-title">訂購人資料</h5>
            </div>
            <div class="col-12 form-box contacts-box">
              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">聯絡家長資訊</h5>
                <h5 class=" col-12 text-gray t-xs mb-2">若訂單有任何變動，客服將聯繫你</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="mainLastName" for="mainLastName">姓氏：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="mainLastName" class="form-input form-error" type="text" name="mainLastName" placeholder="例：陳" required>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="mainFirstName" for="mainFirstName">名子：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="mainFirstName" class="form-input" type="text" name="mainFirstName" placeholder="例：毛毛" required>
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
                  <input id="phone" class="form-input" type="tel" name="phone" placeholder="例：0900-000-000" required>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-12 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="email" for="email">聯繫信箱 :&nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <input id="email" class="form-input" type="email" name="email" placeholder="例：petilday@petilday.com" required>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
              </div>


            </div>

            <div class="col-12 form-box contacts-box">
              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">旅客 1</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="lastName" for="lastName">姓氏：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="lastName" class="form-input form-error" type="text" name="lastName" placeholder="例：陳" required>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="firstName" for="firstName">名子：（須與旅遊證件一致）&nbsp;<span class="danger-color">*</span></label>
                  <input id="firstName" class="form-input" type="text" name="firstName" placeholder="例：毛毛" required>
                  <small class="form-feedback danger-color t-xs"></small>
                </div>
                <div class="col-8 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="idCard" for="idCard">身分證字號：（行程保險中使用）&nbsp;<span class="danger-color">*</span></label>
                  <input id="idCard" class="form-input" type="text" name="idCard" placeholder="例：A0000000000" required>
                </div>

                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="birthday" for="birthday">出生 年/月/日：（行程保險中使用）&nbsp;<span class="danger-color">*</span></label>
                  <input id="birthday" class="form-input" type="date" name="birthday" required>
                </div>
              </div>

            </div>

            <div class="col-12 form-box contacts-box">

              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">寵物 1</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all" name="petName" for="petName">寶貝稱呼： &nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <input id="petName" class="form-input" type="text" name="petName" placeholder="例：毛日日" required>
                </div>
                <div class="col-8 col-lg-6 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="petSize" for="petSize">體型： &nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <select id="petSize" class="form-input" name="petSize">
                    <option class="option-style" name="0" value="0">請選擇</option>
                    <option name="lSize" value="lSize">大型犬</option>
                    <option name="MSize" value="MSize">中型犬</option>
                    <option name="SSize" value="SSize">小型犬</option>
                  </select>
                </div>
                <div class="col-12 col-lg-12 d-flex flex-column one-form">
                  <label class="text-color t-s label-all " name="notes" for="notes">備註： &nbsp;&nbsp;<span class="danger-color">*</span></label>
                  <input class="form-input" type="text" name="notes" id="notes">
                </div>
              </div>

            </div>
            <div class="col-12 form-box contacts-box">
              <div class="row">
                <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">發票資訊</h5>
              </div>

              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row ">
                    <div class="col-12 d-flex align-items-center bb-line">
                      <input id="donateReceipt" class="form-radio " type="radio" name="receipt"><label for="donateReceipt" class="mb-0"><span class=" radio-text t-m text-color">捐贈發票</span></label>
                    </div>
                    <div class="col-12 d-flex align-items-center bb-line">

                      <input id="receipt2" class="form-radio " type="radio" name="receipt">
                      <label for="receipt2" class="mb-0"><span class=" radio-text t-m text-color">二聯電子發票</span></label>
                    </div>

                    <div class="col-12 d-flex align-items-center">

                      <input id="receipt3" class="form-radio " type="radio" name="receipt">
                      <label for="receipt3" class="mb-0"><span class=" radio-text t-m text-color">三聯電子發票</span></label>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="all-form-box-in w-100 mt-3">
            <div class="col-12 form-box">
              <h5 class="green-color t-l title1-m form-title">優惠折扣碼</h5>
            </div>
            <div class="col-12 form-box contacts-box">

              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center">
                      <input id="couponNo" class="form-radio" type="radio" name="coupon" checked>
                      <label class=" radio-text t-m text-color" for="couponNo">我沒有折扣碼</label>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                      <input id="couponYes" class="form-radio" type="radio" name="coupon">
                      <label class="radio-text t-m text-color" for="couponYes">我有折扣碼</label>
                    </div>
                    <div class="coupon-items w-100 animation">
                      <div class="col-12 d-flex align-items-center">
                        <input class="form-input form-input-btn" id="couponNumber" type="text" name="couponNumber" placeholder="請輸入折扣碼">
                        <button type="submit" name="couponNumberBtn" class="ml-2 form-input-btn btn ">兌換</button>
                      </div>
                      <div class="col-12 col-lg-6 mt-4">
                        <div class="coupon">
                          <input class="form-radio coupon-check" type="radio" name="coupon-box">
                          <h5 class="orange-color t-l mb-3">新客優惠 20%OFF </h5>
                          <p class="text-gray t-xs mb-0">折扣券碼： WJIFJIJEE
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
                  <h6 class=" text-gray t-s">2039</h6>
                </div>
                <div class="detail-all detail-quan d-flex justify-content-between">
                  <h6 class=" text-gray t-s">折扣卷：</h6>
                  <h6 class=" text-gray t-s">( NEDDDF ) &nbsp; <span class="prod-price-single t-m danger-color">- 404</span></h6>
                </div>
              </div>
              <div class="single-prod-total d-flex justify-content-end mb-3 mt-1 ">
                <h5 class="brown-color t-m">總計：</h5>
                <h5 class="t-l prod-price-single danger-color ">NT$ 3000</h5>
              </div>

              <div class="pay-btn-box pb-3 ">
                <!-- href="./order-step2.php" -->
                <a href="#" class="a-style w-100 d-flex justify-content-end">
                  <button type="submit" class="btn pay-btn ml-3">繼續結帳</button>
                </a>
                <a href="./cart.php" class=" a-style w-100 d-flex justify-content-start">
                  <button class="btn-outline pay-btn mr-3">回購物車</button>
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


  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>