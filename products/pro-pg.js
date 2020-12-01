// variable
let isScroll = true;
let gotoPage = 0;
let index = 0;

// D clip path**********************************

$('#d-clip-web').attr('clipPathUnits', 'objectBoundingBox').attr('transform', 'scale(0.0019 0.00178)');

// D opacity carosel
$('.caro img').on('click',function(){
    console.log('hi',$(this).index())
})
setInterval(function(){
    index = index + 1;
    (index > 3) ? index=0 : index=index;
    $('.caro img').eq(index).css('opacity','1').siblings().css('opacity','0');
},2000);

//  上面大愛心點按加入取消清單**********************************

 $('.heart-top').on('click', function() {
        let imgSrc = $(this).find('img').attr('src');
        let productSid = $(this).attr('data-sid');
        // console.log(imgSrc);
        if (imgSrc === '/petliday/icon/heart.png') {
            $(this).find('img').attr('src', '/petliday/icon/heart-red-fill.png');
            insertWish();
        } else {
            $(this).find('img').attr('src', '/petliday/icon/heart.png');
            deleteWish();
        }
        console.log('productSid=',productSid);

        function insertWish(){
        $.get('insert-wish-api.php',{
            product_sid: productSid}
            // $(this).closest('.product-item').attr('data-sid')}
        ,function(data){
            console.log('data',data);
            $.post('insert-wish-api.php',data)
        },'json')
        }

        function deleteWish(){
        $.get('dele-wish-api.php',{
            product_sid: productSid}
            
        ,function(data){
            console.log('data',data);
            $.post('dele-wish-api.php',data)
        },'json')
        }
        
    });
// 主要資訊區 分享點擊彈出視窗
$('.share').on('click',function(){
    $('.share-row').css('top','0');
}) 
$('.share-row').on('click',function(){
    $(this).css('top','200px')
})
//  選擇區塊加總金額

const dallorCommas = function(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};
let total = 4280;
function calcTotal() {
    let tr = $('.change-box');
    let manP = parseInt(tr.find('.change-man').attr('data-price'));
    let manQ = parseInt($('#man-quantity').val());
    let petP = parseInt(tr.find('.change-pet').attr('data-price'));
    let petQ = parseInt($('#pet-quantity').val());
    console.log(manP,manQ,petP,petQ)
    // tr.find('td.quantity > select').val(quantity);
    total = manP * manQ + petP * petQ;
    $('.select-price p').text('NTD$ ' + dallorCommas(total));
}
$('.select-price p').text('NTD$ ' + dallorCommas(total));

$('.change-btn').on('click',function(){
    calcTotal()
})

//選擇區塊資料丟進session['cart'] start**********************************

$('.btn-twin').on('click', function() {
    const sid = $('.heart-top').attr('data-sid');
    const manQ = $('#man-quantity').val();
    const petQ = $('#pet-quantity').val();
    const date = $('.calendar .active').children('p').html();

    console.log('sid', sid);
    console.log('manQ', manQ);
    console.log('petQ', petQ);
    console.log('date', date);

    $.get('pro-pg-api.php', {
        sid: sid,
        manQ: manQ,
        petQ: petQ,
        date: date,
        item: 1,
        action: 'add'
    },
    function(data) {
        console.log(data);
        countCart(data);
    }, 'json');

})

//選擇區塊資料丟進session['cart'] end**********************************

//calendar點日期換背景色**********************************

// const td = document.querySelectorAll('td')
$('.calendar td').on('click',function(){
    $('#data').find('td').css('background-color','#fff').removeClass('active');
    $(this).css('background-color','#ffc072').addClass('active');
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
if (window.matchMedia('(max-width: 425px)').matches) {
    // 手機版
    $(window).scroll(function () {
        let nowTop = $(this).scrollTop();
        if($(this).scrollTop() >= 1932 ){
            $('.cate-fix').css('position','fixed').css('top','63px').css('left','15px')
            // $('.trip-section').css('padding-top','80px');
            $('.main-c').css('padding-top','80px');
        }
        else{
            $('.cate-fix').css('position','relative').css('top','0').css('left','0px')
            // $('.trip-section').css('padding-top','0px');
            $('.main-c').css('padding-top','0px');
        }
    });
    // 網頁版
} else {
    $(window).scroll(function () {
        let nowTop = $(this).scrollTop();
        if($(this).scrollTop() >= 1833 ){
            $('.cate-fix').css('position','fixed').css('top','63px').css('left','405px')
            $('.bg-dog').css('padding-top','80px');
            // $('.day123-fix').css('top','200px');
        }
        else{
            $('.cate-fix').css('position','relative').css('top','0').css('left','0')
            $('.bg-dog').css('padding-top','0px');
            
        }
    })
}
// 123day fixed**********************************
if (window.matchMedia('(max-width: 425px)').matches) {
$(window).scroll(function () {
        $('.day123-fix').css('position','relative').css('top','0px').css('right','0px')
})
// 網頁版
}else{
    $(window).scroll(function () {
        let nowTop = $(this).scrollTop();
        if(nowTop >= 1833 && nowTop <= 6530){
            $('.day123-fix').css('position','fixed').css('top','140px').css('right','-20px')
        }
        else if(nowTop > 6530){
            $('.day123-fix').css('position','relative').css('top','4800px').css('right','-20px')
        }
        else{
            $('.day123-fix').css('position','relative').css('top','0px').css('right','-20px')
        }
    })
}
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

    switch (gotoPage){
        case 0:
            if(nowTop === 1900) isScroll = true;
            break;
        case 1:
            if(nowTop === 7045) isScroll = true;
            break;
        case 2:
            if(nowTop === 7380) isScroll = true;
            break;
        case 3:
            if(nowTop === 7790) isScroll = true;
            break;
        case 4:
            if(nowTop === 8460) isScroll = true;
            break;
        case 5:
            if(nowTop === 9418) isScroll = true;
            break;

        default:
            break;
    }


    if(isScroll){
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
    }
    
})

// <!-- term點了展開 -->**********************************

if (window.matchMedia('(max-width: 425px)').matches) {
    // 手機版
    $('.t1').on('click', function() {
        console.log('height', $(this).css('height'));
        if ($(this).css('height') === '300px') {
            $(this).css('height', '960px').find('.hidden').css('display', 'inline-block');
        } else {
            $(this).css('height', '300px').find('.hidden').css('display', 'none');
        }
    });
    $('.t2').on('click', function() {
        console.log('height', $(this).css('height'));
        if ($(this).css('height') === '300px') {
            $(this).css('height', '620px').find('.hidden').css('display', 'inline-block');
        } else {
            $(this).css('height', '300px').find('.hidden').css('display', 'none');
        }
    });
    $('.t3').on('click', function() {
        console.log('height', $(this).css('height'));
        if ($(this).css('height') === '220px') {
            $(this).css('height', '560px').find('.hidden').css('display', 'inline-block');
        } else {
            $(this).css('height', '220px').find('.hidden').css('display', 'none');
        }
    });
    // 電腦版
}else{
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
}
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



    $('.btn-cate').on('click',function(){
        // console.log('hi',$(this).index())
        
        isScroll = false;

        let index = $(this).index();
        switch (index){
            case 0:
                gotoPage = 0;
                break;
            case 1:
                gotoPage = 1;
                break;
            case 2:
                gotoPage = 2;
                break;
            case 3:
                gotoPage = 3;
                break;
            case 4:
                gotoPage = 4;
                break;
            case 5:
                gotoPage = 5;
                break;

            default:
                break;
        }

    })

    $('.btn-cate').on('mouseenter',function(){
        if($(this).css('background-color') === 'rgb(255, 192, 114)'){
        }
        else{
            $(this).css('background-color','#ffe0b9')
        }
    })

    $('.btn-cate').on('mouseleave',function(){
        if($(this).css('background-color') === 'rgb(255, 192, 114)'){
            console.log('hi #ffc072')
        }
        else{
            $(this).css('background-color','#fff')
        }

    })
