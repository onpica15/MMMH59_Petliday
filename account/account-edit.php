<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

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
                <div class="edit edit-hat">
                </div>
                <div class="edit edit-hat">
                  <img src="./img/edit-hat1.png" alt="">
                </div>
                <div class="edit edit-hat">
                  <img src="./img/edit-hat2.png" alt="">
                </div>
                <div class="edit edit-hat">
                  <img src="./img/edit-hat3.png" alt="">
                </div>
                <div class="edit edit-hat">
                  <img src="./img/edit-hat4.png" alt="">
                </div>
                <div class="edit edit-decor">
                  <div class="edit edit-hat">
                  </div>
                </div>
                <div class="edit edit-decor">
                  <img src="./img/edit-decor1.png" alt="">
                </div>
                <div class="edit edit-decor">
                  <img src="./img/edit-decor2.png" alt="">
                </div>
                <div class="edit edit-decor">
                  <img src="./img/edit-decor3.png" alt="">
                </div>
                <div class="edit edit-decor">
                  <img src="./img/edit-decor4.png" alt="">
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
              <section class="bar">
                <div class=" row title d-flex flex-start align-items-center mt-4 px-3 t-l">
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
                    <button class="col-1 col-lg-1 btn-prev border-btn-prev align-self-center"><i class="fas fa-caret-left"></i></button>

                    <div class="color-bar d-flex">
                      <div class="col selected-border d-flex align-items-center">
                        <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                      </div>
                      <div class="col selected-border d-flex align-items-center">
                        <div class="blue ball pick" style="background-color: rgb(89, 180, 255);"></div>
                      </div>
                      <div class="col selected-border active d-flex align-items-center">
                        <div class="orange ball pick" style="background-color: #ffa12c;"></div>
                      </div>
                      <div class="col selected-border d-flex align-items-center">
                        <div class="purple ball pick" style="background-color: rgb(170, 85, 219);"></div>
                      </div>
                      <div class="col selected-border d-flex align-items-center">
                        <div class="green ball pick" style="background-color: #00907c;"></div>
                      </div>
                    </div>
                    <button class="col-1 col-lg-1 btn-next border-btn-next align-self-center"><i class="fas fa-caret-right"></i></button>

                  </div>
                </div>
              </section>
              <!--endof color bar -->
              <!-- hat bar -->
              <section class="bar">
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
                  <span>帽子裝飾</span>
                </div>
                <div class="row justify-content-center my-2">

                  <div class="bar d-flex">
                    <button class="col-1 col-md-1 btn-prev align-self-center border-btn-prev1"><i class="fas fa-caret-left"></i></button>

                    <div class="color-bar d-flex">
                      <div class="col selected-border1 d-flex align-items-center active">
                        <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                      </div>
                      <div class="col selected-border1 d-flex align-items-center">
                        <div class="hat d-flex align-items-center">
                          <img src="./img/hat1.svg" alt="">
                        </div>
                      </div>
                      <div class="col selected-border1 d-flex align-items-center">
                        <div class="hat d-flex align-items-center">
                          <img src="./img/hat2.svg" alt="">
                        </div>
                      </div>
                      <div class="col selected-border1 d-flex align-items-center">
                        <div class="hat d-flex align-items-center">
                          <img src="./img/hat3.svg" alt="">
                        </div>
                      </div>
                      <div class="col selected-border1 d-flex align-items-center">
                        <div class="hat d-flex align-items-center">
                          <img src="./img/hat4.svg" alt="">
                        </div>
                      </div>

                    </div>
                    <button class="col-1 col-md-1 btn-next align-self-center border-btn-next1"><i class="fas fa-caret-right"></i></button>

                  </div>
                </div>
              </section>
              <!--endof hat bar -->
              <!-- decor bar -->
              <section class="bar">
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

                    <div class="color-bar d-flex">
                      <div class="col selected-border2 d-flex align-items-center active">
                        <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                      </div>
                      <div class="col selected-border2 d-flex align-items-center">
                        <div class="decor d-flex align-items-center">
                          <img src="./img/bow.svg" alt="">
                        </div>
                      </div>
                      <div class="col selected-border2 d-flex align-items-center">
                        <div class="decor d-flex align-items-center">
                          <img src="./img/glass.svg" alt="">
                        </div>
                      </div>
                      <div class="col selected-border2 d-flex align-items-center">
                        <div class="decor d-flex align-items-center">
                          <img src="./img/neckless.svg" alt="" style="width: 88px;">
                        </div>
                      </div>
                      <div class="col selected-border2 d-flex align-items-center">
                        <div class="decor d-flex align-items-center">
                          <img src="./img/neckless2.svg" alt="" style="width: 88px;">
                        </div>
                      </div>

                    </div>
                    <button class="col col-md-1 btn-next align-self-center border-btn-next2"><i class="fas fa-caret-right"></i></button>

                  </div>
                </div>
              </section>
              <!--endof decor bar -->
              <!-- rwd -->

              <ul class="nav nav-tabs mx-2 my-4 d-lg-none" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link nav-mb active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">相框顏色</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link nav-mb" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">帽子裝飾</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link nav-mb" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">裝飾配件</a>
                </li>
              </ul>
              <div class="tab-content d-lg-none" id="myTabContent">
                <!-- color-bar -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row justify-content-center my-2">

                    <div class="bar d-flex">
                      <button class="col-1 col-lg-1 btn-prev border-btn-prev align-self-center"><i class="fas fa-caret-left"></i></button>

                      <div class="color-bar d-flex">
                        <div class="col selected-border d-flex align-items-center">
                          <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                        </div>
                        <div class="col selected-border d-flex align-items-center">
                          <div class="blue ball pick" style="background-color: rgb(89, 180, 255);"></div>
                        </div>
                        <div class="col selected-border active d-flex align-items-center">
                          <div class="orange ball pick" style="background-color: #ffa12c;"></div>
                        </div>
                        <div class="col selected-border d-flex align-items-center">
                          <div class="purple ball pick" style="background-color: rgb(170, 85, 219);"></div>
                        </div>
                        <div class="col selected-border d-flex align-items-center">
                          <div class="green ball pick" style="background-color: #00907c;"></div>
                        </div>
                      </div>
                      <button class="col-1 col-lg-1 btn-next border-btn-next align-self-center"><i class="fas fa-caret-right"></i></button>

                    </div>
                  </div>
                </div>
                <!-- hat-bar -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="row justify-content-center my-2">

                    <div class="bar d-flex">
                      <button class="col-1 col-md-1 btn-prev align-self-center border-btn-prev1"><i class="fas fa-caret-left"></i></button>

                      <div class="color-bar d-flex">
                        <div class="col selected-border1 d-flex align-items-center active">
                          <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                        </div>
                        <div class="col selected-border1 d-flex align-items-center">
                          <div class="hat">
                            <img src="./img/hat1.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border1 d-flex align-items-center">
                          <div class="hat">
                            <img src="./img/hat2.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border1 d-flex align-items-center">
                          <div class="hat">
                            <img src="./img/hat3.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border1 d-flex align-items-center">
                          <div class="hat">
                            <img src="./img/hat4.svg" alt="">
                          </div>
                        </div>

                      </div>
                      <button class="col-1 col-md-1 btn-next align-self-center border-btn-next1"><i class="fas fa-caret-right"></i></button>

                    </div>
                  </div>
                </div>
                <!-- decor-bar -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="row justify-content-center my-2">
                    <div class="bar d-flex">
                      <button class="col col-md-1 btn-prev align-self-center border-btn-prev2"><i class="fas fa-caret-left"></i></button>

                      <div class="color-bar d-flex">
                        <div class="col selected-border2 d-flex align-items-center active">
                          <div class="ban ball pick"><i class="fas fa-ban "></i></div>
                        </div>
                        <div class="col selected-border2 d-flex align-items-center">
                          <div class="decor">
                            <img src="./img/bow.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border2 d-flex align-items-center">
                          <div class="decor">
                            <img src="./img/glass.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border2 d-flex align-items-center">
                          <div class="decor">
                            <img src="./img/neckless.svg" alt="">
                          </div>
                        </div>
                        <div class="col selected-border2 d-flex align-items-center">
                          <div class="decor">
                            <img src="./img/neckless2.svg" alt="">
                          </div>
                        </div>

                      </div>
                      <button class="col col-md-1 btn-next align-self-center border-btn-next2"><i class="fas fa-caret-right"></i></button>

                    </div>
                  </div>
                </div>
              </div>

              <!-- rwd -->
              <div class="row justify-content-center">
                <button class="btn clear-all">全部清除</button>
                <a class="btn" href="account-profile2.php">儲存修改</a>

              </div>
            </div>
          </div>





        </div>
      </div>

</section>









<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script src="script.js"></script>

<script>
  // ------JS開始 以上勿刪-------
  // 選擇顏色邊框
  $('.border-btn-next').on('click', function() {
    if ($('.selected-border.active').next().length > 0) {
      console.log('css', $('.selected-border.active').next().find('.ball').css('background-color'))
      let $color = $('.selected-border.active').next().find('.ball').css('background-color');
      $('#profileDisplay').css('box-shadow', '0 0 0 3px ' + $color);
      $('.selected-border.active').removeClass('active').next().addClass('active')

    }
  })

  $('.border-btn-prev').on('click', function() {
    // console.log('hi', $('.selected-border.active'))
    if ($('.selected-border.active').prev().length > 0) {
      console.log('css', $('.selected-border.active').prev().find('.ball').css('background-color'))
      let $color = $('.selected-border.active').prev().find('.ball').css('background-color');
      $('#profileDisplay').css('box-shadow', '0 0 0 3px ' + $color);
      $('.selected-border.active').removeClass('active').prev().addClass('active')
    }
  })

  // 初始化帽子顯示第一頂
  $('.edit-hat').hide().eq(0).show()

  $('.border-btn-next1').on('click', function() {
    if ($('.selected-border1.active').next().length > 0) {
      // 更換帽子
      console.log('index', );
      let index = $('.selected-border1.active').index()
      $('.edit-hat').hide().eq(index + 1).show()
      // 邊框
      $('.selected-border1.active').removeClass('active').next().addClass('active')
    }
  })
  $('.border-btn-prev1').on('click', function() {
    if ($('.selected-border1.active').prev().length > 0) {
      let index = $('.selected-border1.active').index()
      $('.edit-hat').hide().eq(index - 1).show()
      $('.selected-border1.active').removeClass('active').prev().addClass('active')
    }
  })

  $('.edit-decor').hide().eq(0).show()

  $('.border-btn-next2').on('click', function() {
    if ($('.selected-border2.active').next().length > 0) {
      let index = $('.selected-border2.active').index()
      $('.edit-decor').hide().eq(index + 1).show()
      $('.selected-border2.active').removeClass('active').next().addClass('active')
    }
  })
  $('.border-btn-prev2').on('click', function() {
    if ($('.selected-border2.active').prev().length > 0) {
      let index = $('.selected-border2.active').index()
      $('.edit-decor').hide().eq(index - 1).show()
      $('.selected-border2.active').removeClass('active').prev().addClass('active')
    }
  })
  // 當點選clear-all的時候
  $('.clear-all').on('click', function() {
    console.log('hi')
    // 移除其他人的active
    $('.selected-border').siblings().removeClass('active')
    // 讓框框只顯示在eq(0)的那個元素上
    $('.selected-border').eq(0).addClass('active')
    $('#profileDisplay').css('box-shadow', '0 0 0 3px ' + '#fff');


    $('.selected-border1').siblings().removeClass('active')
    $('.selected-border1').eq(0).addClass('active')
    $('.edit-hat').hide().eq(0).show()

    $('.selected-border2').siblings().removeClass('active')
    $('.selected-border2').eq(0).addClass('active')
    $('.edit-decor').hide().eq(0).show()



    // 為fa-ban 加上active(.selected-border1.active.index)
  })

  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>