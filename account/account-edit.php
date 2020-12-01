<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<section id="acount">
  <div class="container">
    <div class="row my-4"></div>
  </div>
  <div class="container">
    <div class="row">
      <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>

      <div class="col-12 col-lg-9">
        <div class="tab-content" id="nav-tabContent">
          <!-- list-profile 會員資料 -->
          <div class="tab-pane active list-section " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

            <div class="container mb-3" id="list-title">
              <div class="row  mb-3">
                <div class="d-flex pt-3 p-4">
                  <div class="line mr-2"></div>
                  <h4 class="t-xxl">修改寵物頭像</h4>
                </div>
              </div>
              <div class="row pet-avatar justify-content-center">
                <div class="edit">
                  <img src="./img/edit-hat1.png" alt="">
                </div>
                <div class="edit">
                  <img src="./img/edit-decor1.png" alt="">
                </div>
                <!-- uploadimg -->
                <?php
                require __DIR__ . './processForm.php';
                ?>

                <div class="avatar-img">
                  <img src="./img/head.png" id="profileDisplay" alt="">
                </div>
                <button class=" btn-none camera-icon" onclick="triggerClick()">
                  <img src="../icon/camera.svg" alt="">
                </button>
                <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;">



                <!-- endof uploadimg -->
              </div>
              <!-- color bar -->
              <div class="row title d-flex flex-start align-items-center mt-4 px-3 t-l">
                <svg class="title-icon m-2" id="paw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.08 55.96">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #3c2e26;
                      }
                    </style>
                  </defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-1" d="M51.42,28.23a28.23,28.23,0,0,0-34.75,0C11.86,32,9.1,36.94,9.1,41.66,9.1,50.48,18.65,56,34,56S59,50.48,59,41.66C59,36.94,56.23,32,51.42,28.23Z" />
                      <path class="cls-1" d="M34.12,18.59c5.74,0,10.41-4.17,10.41-9.3S39.86,0,34.12,0,23.71,4.17,23.71,9.29,28.38,18.59,34.12,18.59Z" />
                      <path class="cls-1" d="M67.51,15.73A11.5,11.5,0,0,0,55.08,8.55,8.76,8.76,0,0,0,49,12.7a8.71,8.71,0,0,0-.53,7.38,11.14,11.14,0,0,0,5,5.77,11.4,11.4,0,0,0,5.69,1.56,10.52,10.52,0,0,0,1.78-.15A8.7,8.7,0,0,0,67,23.11,8.71,8.71,0,0,0,67.51,15.73Z" />
                      <path class="cls-1" d="M19.66,20.08a8.71,8.71,0,0,0-.53-7.38A8.76,8.76,0,0,0,13,8.55,11.22,11.22,0,0,0,5.53,10c-5,2.87-7,8.77-4.43,13.15h0a8.7,8.7,0,0,0,6.13,4.15A10.52,10.52,0,0,0,9,27.41a11.4,11.4,0,0,0,5.69-1.56A11.14,11.14,0,0,0,19.66,20.08Z" />
                    </g>
                  </g>
                </svg>
                <span>相框顏色</span>
              </div>
              <div class="row justify-content-center my-2">

                <div class="bar d-flex">
                  <button class="col col-md-1 btn-prev border-btn-prev align-self-center"><i class="fas fa-caret-left"></i></button>

                  <div class="col col-md-10 color-bar d-flex justify-content-around">
                    <div class=" selected-border d-flex align-items-center">
                      <div class="mx-2 red ball pick" style="background-color: rgb(255, 83, 83);"></div>
                    </div>
                    <div class=" selected-border d-flex align-items-center">
                      <div class="mx-2 blue ball pick" style="background-color: rgb(89, 180, 255);"></div>
                    </div>
                    <div class=" selected-border active d-flex align-items-center">
                      <div class="mx-2 orange ball pick" style="background-color: #ffa12c;"></div>
                    </div>
                    <div class=" selected-border d-flex align-items-center">
                      <div class="mx-2 purple ball pick" style="background-color: rgb(170, 85, 219);"></div>
                    </div>
                    <div class="selected-border d-flex align-items-center">
                      <div class="mx-2 green ball pick" style="background-color: #00907c;"></div>
                    </div>
                  </div>
                  <button class="col col-md-1 btn-next border-btn-next align-self-center"><i class="fas fa-caret-right"></i></button>

                </div>
              </div>
              <!--endof color bar -->
              <!-- top decoration bar -->
              <div class="row title d-flex flex-start align-items-center mt-4 px-3 t-l">
                <svg class="title-icon m-2" id="paw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.08 55.96">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #3c2e26;
                      }
                    </style>
                  </defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-1" d="M51.42,28.23a28.23,28.23,0,0,0-34.75,0C11.86,32,9.1,36.94,9.1,41.66,9.1,50.48,18.65,56,34,56S59,50.48,59,41.66C59,36.94,56.23,32,51.42,28.23Z" />
                      <path class="cls-1" d="M34.12,18.59c5.74,0,10.41-4.17,10.41-9.3S39.86,0,34.12,0,23.71,4.17,23.71,9.29,28.38,18.59,34.12,18.59Z" />
                      <path class="cls-1" d="M67.51,15.73A11.5,11.5,0,0,0,55.08,8.55,8.76,8.76,0,0,0,49,12.7a8.71,8.71,0,0,0-.53,7.38,11.14,11.14,0,0,0,5,5.77,11.4,11.4,0,0,0,5.69,1.56,10.52,10.52,0,0,0,1.78-.15A8.7,8.7,0,0,0,67,23.11,8.71,8.71,0,0,0,67.51,15.73Z" />
                      <path class="cls-1" d="M19.66,20.08a8.71,8.71,0,0,0-.53-7.38A8.76,8.76,0,0,0,13,8.55,11.22,11.22,0,0,0,5.53,10c-5,2.87-7,8.77-4.43,13.15h0a8.7,8.7,0,0,0,6.13,4.15A10.52,10.52,0,0,0,9,27.41a11.4,11.4,0,0,0,5.69-1.56A11.14,11.14,0,0,0,19.66,20.08Z" />
                    </g>
                  </g>
                </svg>
                <span>頭飾配件</span>
              </div>
              <div class="row justify-content-center my-2">

                <div class="bar d-flex">
                  <button class="col col-md-1 btn-prev align-self-center border-btn-prev1"><i class="fas fa-caret-left"></i></button>

                  <div class="col col-md-10 color-bar d-flex justify-content-around">
                    <div class="selected-border1 active d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/hat1.svg" alt="">
                      </div>
                    </div>
                    <div class="selected-border1 d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/hat2.svg" alt="">
                      </div>
                    </div>
                    <div class="selected-border1 d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/hat3.svg" alt="">
                      </div>
                    </div>

                  </div>
                  <button class="col col-md-1 btn-next align-self-center border-btn-next1"><i class="fas fa-caret-right"></i></button>

                </div>
              </div>
              <!--endof top decoration bar -->
              <!-- top decoration bar -->
              <div class="row title d-flex flex-start align-items-center mt-4 px-3 t-l">
                <svg class="title-icon m-2" id="paw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.08 55.96">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #3c2e26;
                      }
                    </style>
                  </defs>
                  <g id="圖層_2" data-name="圖層 2">
                    <g id="圖層_1-2" data-name="圖層 1">
                      <path class="cls-1" d="M51.42,28.23a28.23,28.23,0,0,0-34.75,0C11.86,32,9.1,36.94,9.1,41.66,9.1,50.48,18.65,56,34,56S59,50.48,59,41.66C59,36.94,56.23,32,51.42,28.23Z" />
                      <path class="cls-1" d="M34.12,18.59c5.74,0,10.41-4.17,10.41-9.3S39.86,0,34.12,0,23.71,4.17,23.71,9.29,28.38,18.59,34.12,18.59Z" />
                      <path class="cls-1" d="M67.51,15.73A11.5,11.5,0,0,0,55.08,8.55,8.76,8.76,0,0,0,49,12.7a8.71,8.71,0,0,0-.53,7.38,11.14,11.14,0,0,0,5,5.77,11.4,11.4,0,0,0,5.69,1.56,10.52,10.52,0,0,0,1.78-.15A8.7,8.7,0,0,0,67,23.11,8.71,8.71,0,0,0,67.51,15.73Z" />
                      <path class="cls-1" d="M19.66,20.08a8.71,8.71,0,0,0-.53-7.38A8.76,8.76,0,0,0,13,8.55,11.22,11.22,0,0,0,5.53,10c-5,2.87-7,8.77-4.43,13.15h0a8.7,8.7,0,0,0,6.13,4.15A10.52,10.52,0,0,0,9,27.41a11.4,11.4,0,0,0,5.69-1.56A11.14,11.14,0,0,0,19.66,20.08Z" />
                    </g>
                  </g>
                </svg>
                <span>裝飾配件</span>
              </div>
              <div class="row justify-content-center my-2">

                <div class="bar d-flex">
                  <button class="col col-md-1 btn-prev align-self-center border-btn-prev2"><i class="fas fa-caret-left"></i></button>

                  <div class="col col-md-10 color-bar d-flex">
                    <div class="selected-border2 active d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/bow.svg" alt="">
                      </div>
                    </div>
                    <div class="selected-border2 d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/glass.svg" alt="">
                      </div>
                    </div>
                    <div class="selected-border2 d-flex align-items-center">
                      <div class="mx-2">
                        <img src="./img/neckless.svg" alt="" style="width: 102px;">
                      </div>
                    </div>

                  </div>
                  <button class="col col-md-1 btn-next align-self-center border-btn-next2"><i class="fas fa-caret-right"></i></button>

                </div>
              </div>
              <!--endof top decoration bar -->
              <div class="row justify-content-center">
                <button class="btn">全部清除</button>
                <a class="btn" href="account-profile2.php">儲存修改</a>

              </div>
            </div>
          </div>





        </div>
      </div>

</section>










<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script src="script.js"></script>

<script>
  // ------JS開始 以上勿刪-------
  <?php include __DIR__ . '/../account/account-aside-bar-js.php' ?>

  $('.border-btn-next').on('click', function() {
    if ($('.selected-border.active').next().length > 0) {
      $('.selected-border.active').removeClass('active').next().addClass('active')
    }
  })

  $('.border-btn-prev').on('click', function() {
    // console.log('hi', $('.selected-border.active'))
    if ($('.selected-border.active').prev().length > 0) {
      $('.selected-border.active').removeClass('active').prev().addClass('active')
    }
  })

  $('.border-btn-next1').on('click', function() {
    if ($('.selected-border1.active').next().length > 0) {
      $('.selected-border1.active').removeClass('active').next().addClass('active')
    }
  })
  $('.border-btn-prev1').on('click', function() {
    if ($('.selected-border1.active').prev().length > 0) {
      $('.selected-border1.active').removeClass('active').prev().addClass('active')
    }
  })
  $('.border-btn-next2').on('click', function() {
    if ($('.selected-border2.active').next().length > 0) {
      $('.selected-border2.active').removeClass('active').next().addClass('active')
    }
  })
  $('.border-btn-prev2').on('click', function() {
    if ($('.selected-border2.active').prev().length > 0) {
      $('.selected-border2.active').removeClass('active').prev().addClass('active')
    }
  })
  // .avatar-img img boxshadow//.pick
  $('.pick').on('click', function() {
    // console.log('hi')
    let color = $(this).css('background-color')
    $('.avatar-img img').css('boxshadow', color)
  })

  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>