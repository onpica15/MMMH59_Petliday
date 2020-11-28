
// D clip path**********************************

$('#d-clip-web').attr('clipPathUnits', 'objectBoundingBox').attr('transform', 'scale(0.0019 0.00178)');

//  上面大愛心點按加入取消清單**********************************

 $('.heart-top').on('click', function() {
        let imgSrc = $(this).find('img').attr('src')
        // console.log(imgSrc);
        if (imgSrc === '/petliday/icon/heart.png') {
            $(this).find('img').attr('src', '/petliday/icon/heart-red-fill.png');
        } else {
            $(this).find('img').attr('src', '/petliday/icon/heart.png');
        }
    });
// 主要資訊區 分享點擊彈出視窗
$('.share').on('click',function(){
    $('.share-row').css('top','0');
}) 
$('.share-row').on('click',function(){
    $(this).css('top','200px')
})


//calendar點日期換背景色**********************************

// const td = document.querySelectorAll('td')
$('.calendar td').on('click',function(){
    $('#data').find('td').css('background-color','#fff');
    $(this).css('background-color','#ffc072');
    // console.log('this.val()',td.innerHTML);
    // console.log('this.val()',dataTemp[i]);
})


// 選擇數量區 ＋− start**********************************

const manQuantity = document.getElementById('man-quantity')
const petQuantity = document.getElementById('pet-quantity')
const addManBtn = document.getElementById('add-man')
const subManBtn = document.getElementById('sub-man')
const addPetBtn = document.getElementById('add-pet')
const subPetBtn = document.getElementById('sub-pet')

// jq設定多個css--為什麼不行！！！！？？？？？？？？！？！？！？！？！？
// let styleOn = {
//     'background-color' :'#ccc',
//     'fill':'#555'
// };
// let styleOff = {
//     'background-color':'#eee',
//     'fill':'#ccc'
// };
// jq設定多個css--為什麼不行！！！！？？？？？？？？！？！？！？！？！？

// js寫法＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
  if (manQuantity.value = 1) {
    subManBtn.style = 'background-color:#eee;fill:#ccc';
  }
  if (petQuantity.value = 1) {
    subPetBtn.style = 'background-color:#eee;fill:#ccc';
  }

// jq寫法＊＊＊＊＊＊為什麼不行！！！！？？？？？？？？！？！？！？！？！？
//   if ($('#man-quantity').val() = 1) {
//     $('.sub-man').css(styleOff);
//   }
//   if ($('#pet-quantity').val() = 1) {
//     $('.sub-pet').css(styleOff);
//   }
// jq寫法＊＊＊＊＊＊為什麼不行！！！！？？？？？？？？！？！？！？！？！？

  addManBtn.addEventListener('click', function() {
    manQuantity.value = +manQuantity.value + 1

    if (manQuantity.value > 1) {
        subManBtn.style = 'background-color:#ccc;fill:#555';
    } else {
        subManBtn.style = 'background-color:#eee;fill:#ccc';
    };
  })

  addPetBtn.addEventListener('click', function() {
    petQuantity.value = +petQuantity.value + 1

    if (petQuantity.value > 1) {
        subPetBtn.style = 'background-color:#ccc;fill:#555';
    } else {
        subPetBtn.style = 'background-color:#eee;fill:#ccc';
    };
  })

  subManBtn.addEventListener('click', function() {
    if (manQuantity.value > 1) {
      manQuantity.value = +manQuantity.value - 1;
      if (manQuantity.value > 1) {
        subManBtn.style = 'background-color:#ccc;fill:#555';
    } else{
        subManBtn.style = 'background-color:#eee;fill:#ccc';
    }
}
  });

  subPetBtn.addEventListener('click', function() {
    console.log('subPetBtn')
    if (petQuantity.value > 1) {
      petQuantity.value = +petQuantity.value - 1;
      if (petQuantity.value > 1) {
        subPetBtn.style = 'background-color:#ccc;fill:#555';
    } else {
        subPetBtn.style = 'background-color:#eee;fill:#ccc';
    };
    }
  })

// 選擇數量區 ＋− end**********************************

// 加入購物車.立即預訂按鈕 send session
// const date = $('.calendar td[style=background-color:#ffc072]')


// function session(){
//     $.post('pro-pg-api.php', {
//         man: manQuantity.val(),
//         pet: petQuantity.val()
//     }, 'json');
// }


// cate menu 行程介紹fixed目錄bar 滑到定位固定**********************************

$(window).scroll(function () {
    let nowTop = $(this).scrollTop();
    if($(this).scrollTop() >= 1835 ){
        $('.cate-fix').css('position','fixed').css('top','63px').css('left','405px')
    }
    else{
        $('.cate-fix').css('position','relative').css('top','0').css('left','0')
    }
})
if (window.matchMedia('(max-width: 425px)').matches) {
    $(window).scroll(function () {
        let nowTop = $(this).scrollTop();
        if($(this).scrollTop() >= 1795 ){
            $('.cate-fix').css('position','fixed').css('top','63px').css('left','15px')
        }
        else{
            $('.cate-fix').css('position','relative').css('top','0')
        }
    })
}
// 123day fixed**********************************

$(window).scroll(function () {
    let nowTop = $(this).scrollTop();
    if(nowTop >= 1835 && nowTop <= 6530){
        $('.day123-fix').css('position','fixed').css('top','200px').css('right','-20px')
    }
    else if(nowTop > 6530){
        $('.day123-fix').css('position','relative').css('top','4800px').css('right','-20px')
    }
    else{
        $('.day123-fix').css('position','relative').css('top','200px').css('right','-20px')
    }
})
// 123day 滑到區域換色**********************************

$(window).scroll(function () {
    let nowTop = $(this).scrollTop();
    console.log('scrolltop', nowTop)
    if(nowTop>1865 && nowTop<3310){
        $('.day1').css('background-color','#fff').siblings().css('background-color','#f2eee8');
    }
    else if(nowTop>3310 && nowTop<5260){
        $('.day2').css('background-color','#fff').siblings().css('background-color','#f2eee8');
    }
    else if(nowTop>5260 && nowTop<7050){
        $('.day3').css('background-color','#fff').siblings().css('background-color','#f2eee8');
    }
})
// 1835.1795
// cate menu 行程介紹fixed目錄bar 點擊了變底色＆滑到位置換底色**********************************

$('.btn-cate').on('click',function(){
    $(this).css('background-color','#ffc072').siblings().css('background-color','#fff');
})
$(window).scroll(function () {
    let nowTop = $(this).scrollTop();
    console.log('scrolltop', nowTop)
    if(nowTop>1835 && nowTop<6830){
        $('.bc1').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
    else if(nowTop>6830 && nowTop<7280){
        $('.bc2').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
    else if(nowTop>7280 && nowTop<7760){
        $('.bc3').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
    else if(nowTop>7760 && nowTop<8330){
        $('.bc4').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
    else if(nowTop>8330 && nowTop<9200){
        $('.bc5').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
    else if(nowTop>9200){
        $('.bc6').css('background-color','#ffc072').siblings().css('background-color','#fff');
    }
})

// <!-- term點了展開 -->**********************************


    $('.t1').on('click', function() {
        console.log('height', $(this).css('height'));
        if ($(this).css('height') === '350px') {
            $(this).css('height', '790px').find('.hidden').css('display', 'inline-block');
        } else {
            $(this).css('height', '350px').find('.hidden').css('display', 'none');
        }
    });
    $('.t2, .t3').on('click', function() {
        console.log('height', $(this).css('height'));
        if ($(this).css('height') === '350px') {
            $(this).css('height', '570px').find('.hidden').css('display', 'inline-block');
        } else {
            $(this).css('height', '350px').find('.hidden').css('display', 'none');
        }
    });
        $('.c3').on('mouseenter', function() {
            $(this).find('.card-pic').css('height', '135px');
            $(this).find('.card-info').css({
                'opacity': '1',
                'height': '10px',
            });
        });
    $('.c3').on('mouseleave', function() {
        $(this).find('.card-pic').css('height', '175px')
        $(this).find('.card-info').css({
            'opacity': '0',
            'height': '0',
        });
    });

// <!-- 愛心 收藏喜好清單 -->**********************************


    $('.heart-circle').on('click', function() {
        console.log('heart');
        let imgSrc = $(this).find('img').attr('src')
        console.log(imgSrc);
        if (imgSrc == '/Petliday/icon/heart-red.png') {
            $(this).find('img').attr('src', '/Petliday/icon/heart-red-fill.png');
        } else {
            $(this).find('img').attr('src', '/Petliday/icon/heart-red.png');
        }
    });
