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
          <div class="step step1 active">
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
                <label class="text-color t-s label-all" name="surname" for="">姓氏（須與旅遊證件一致） <span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：陳" required>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">名子（須與旅遊證件一致）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：毛毛" required>
              </div>
              <div class="col-8 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">稱謂<span class="danger-color">*</span></label>
                <select class="form-input" name="" id="">
                  <option value="0">請選擇</option>
                  <option value="men">先生</option>
                  <option value="men">女士</option>
                </select>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">聯繫電話<span class="danger-color">*</span></label>
                <input class="form-input" type="tel" name="surname" placeholder="例：0900-000-000" required>
              </div>
              <div class="col-12 col-lg-12 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">聯繫信箱<span class="danger-color">*</span></label>
                <input class="form-input" type="email" name="surname" placeholder="例：petilday@petilday.com" required>
              </div>
            </div>

          </div>

          <div class="col-12 form-box contacts-box">
            <div class="row">
              <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">旅客 1</h5>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all" name="surname" for="">姓氏（須與旅遊證件一致）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：陳" required>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">名子（須與旅遊證件一致）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：毛毛" required>
              </div>
              <div class="col-8 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">身分證字號（行程保險中使用）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：A0000000000" required>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">出身年月日（行程保險中使用）<span class="danger-color">*</span></label>
                <input class="form-input" type="date" name="surname" required>
              </div>
            </div>
          </div>
          <div class="col-12 form-box contacts-box">
            <div class="row">
              <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">旅客 2</h5>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all" name="surname" for="">姓氏（須與旅遊證件一致）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：陳" required>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">名子（須與旅遊證件一致）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：毛毛" required>
              </div>
              <div class="col-8 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">身分證字號（行程保險中使用）<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：A0000000000" required>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">出身年月日（行程保險中使用）<span class="danger-color">*</span></label>
                <input class="form-input" type="date" name="surname" required>
              </div>
            </div>
          </div>
          <div class="col-12 form-box contacts-box">
            <div class="row">
              <h5 class=" col-12 brown-color t-m title1-m form-title t-bold mb-1">寵物 1</h5>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all" name="surname" for="">寶貝稱呼<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname" placeholder="例：陳" required>
              </div>
              <div class="col-8 col-lg-6 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">體型<span class="danger-color">*</span></label>
                <select class="form-input" name="" id="">
                  <option value="0">請選擇</option>
                  <option value="l-size">大型犬</option>
                  <option value="m-size">中型犬</option>
                  <option value="s-size">小型犬</option>
                </select>
              </div>
              <div class="col-12 col-lg-12 d-flex flex-column one-form">
                <label class="text-color t-s label-all " name="surname" for="">備註<span class="danger-color">*</span></label>
                <input class="form-input" type="text" name="surname">
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
                    <input class="form-input form-radio" type="radio" name="surname" placeholder="例：陳"><span class="radio-text t-m text-color">我沒有折扣碼</span>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <input class="form-input form-radio" type="radio" name="surname" placeholder="例：陳"> <span class="radio-text t-m text-color">我有折扣碼</span>
                  </div>
                </div>




              </div>

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
                <h6 class=" text-gray t-s">2039</h6>
              </div>
              <div class="detail-all detail-quan d-flex justify-content-between">
                <h6 class=" text-gray t-s">折扣卷：</h6>
                <h6 class=" text-gray t-s">( NEDDDF ) &nbsp; <span class="prod-price-single t-m danger-color">- 404</span></h6>
              </div>
            </div>
            <div class="single-prod-total d-flex justify-content-end">
              <h5 class="brown-color t-m">總計：</h5>
              <h5 class="t-m prod-price-single danger-color">NT$ 3000</h5>
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



  $('.form-input').on('click', function() {

    console.log('.fom-mousedown');
    // $('.contacts-box')
    $(this).addClass('active');
  })
  $('.form-input').on('mouseleave', function() {

    console.log('.fom-mouseleave');
    // $('.contacts-box')
    $(this).removeClass('active');
  })



  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>