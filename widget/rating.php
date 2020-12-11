
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="/Petliday/widget/rating.css">


<!-- ------------------ body開始 以上勿刪 ------------------ -->
<!-- rating -->
<div class="index-rating">
  <div class="rating-title">
    <span>逛得愉快嗎<img src="/Petliday/widget/imgs/bone.svg" alt="bone"></span>
  </div>

  <div class="rating-info position-relative">
    <p>Petliday 網頁瀏覽是否滿意？</p>
    <form>
      <div class="rating-bone">
        <input id="bone5" name="bone" type="radio" value="5" class="radio-btn hide" />
        <label for="bone5"><img src="/Petliday/widget/imgs/bone-1.svg" alt=""></label>

        <input id="bone4" name="bone" type="radio" value="4" class="radio-btn hide" />
        <label for="bone4"><img src="/Petliday/widget/imgs/bone-1.svg" alt=""></label>

        <input id="bone3" name="bone" type="radio" value="3" class="radio-btn hide" />
        <label for="bone3"><img src="/Petliday/widget/imgs/bone-1.svg" alt=""></label>

        <input id="bone2" name="bone" type="radio" value="2" class="radio-btn hide" />
        <label for="bone2"><img src="/Petliday/widget/imgs/bone-1.svg" alt=""></label>

        <input id="bone1" name="bone" type="radio" value="1" class="radio-btn hide" />
        <label for="bone1"><img src="/Petliday/widget/imgs/bone-1.svg" alt=""></label>

        <div class="clear"></div>
      </div>

      <div class="col-10 col-lg-4">
        <div class="rating-input d-flex mt-2 ml-2">
          <input type="text" class="form-control" placeholder="輸入更多回饋" aria-label="Recipient's username" aria-describedby="button-addon2" id="rating-input">
          <div class="rating-input-append">
            <button id="rating-btn" type="button">送出</button>
          </div>
        </div>
      </div>
    </form>



    <div class="rating-success position-absolute w-100" style="top:0;background:#eee;z-index:-1;opacity:0;transition:.5s">
      <p class="success-text"><img src="/Petliday/widget/imgs/paw.svg" alt="paw"> Thank you</p>
      <p>您的寶貴回饋<br>是Petliday前進的動力！</p>
    </div>

  </div>
</div>


<!-- ------------------ body結束 ------------------ -->

<!-- ---------------js/jq 開始 ------------------ -->


<script>
  // ------JS開始 以上勿刪-------

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
    $('.rating-success').css('z-index',1).css('opacity',1);
  });



  // rating 滑到footer前停住 **********************
let footertop = $('footer').offset().top

  $(function(){
    $(window).scroll(function() {
      if ($(window).scrollTop() < 3200) {
        $('.index-rating').css('opacity', '0');
      } else if ($(window).scrollTop() > 3200) {
        console.log('hi')
        $('.index-rating').css('opacity', '1');
      
      }
    //   console.log('$(window).scrollTop()',$(window).scrollTop());
    //   console.log('footer ',$('footer').offset().top);
     console.log('window',$(window).height());
    //  let ratingfixed = ($(window).height())
    //   console.log('ratingfixed',ratingfixed)
      if($(window).width() > 992){
        console.log('hi 992')
        if($(window).scrollTop() >= 5000){
          console.log('hi absolute')
          $('.index-rating').css('position','absolute').css('bottom',$(document).height() -  $('footer').offset().top + 25)
        }
        else if($(window).scrollTop() < 5000){
          console.log('hi fixed')
          $('.index-rating').css('position','fixed').css('bottom',$(document).height() -  footertop+ 25);
          // $('.index-rating').css('position','fixed').css('bottom',100);
        }
      }
      else{
        if($(window).scrollTop() >= 16050){
          // console.log('hi')
          $('.index-rating').css('position','absolute').css('bottom',$(document).height() -  $('footer').offset().top + 25)
        }
        else{
          $('.index-rating').css('position','fixed').css('bottom',100);
        }
      }
      
    });
  })
  

  // ------JS結束 勿刪到-------
</script>
