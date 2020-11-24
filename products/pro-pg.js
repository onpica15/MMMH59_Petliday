
//  上面大愛心點按加入取消清單
 $('.heart-top').on('click', function() {
        let imgSrc = $(this).find('img').attr('src')
        console.log(imgSrc);
        if (imgSrc == '/Petliday/icon/heart.png') {
            $(this).find('img').attr('src', '/Petliday/icon/heart-red-fill.png');
        } else {
            $(this).find('img').attr('src', '/Petliday/icon/heart.png');
        }
    });

// cate menu 行程介紹fixed目錄bar 滑到定位固定
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
// 123day fixed
$(window).scroll(function () {
    let nowTop = $(this).scrollTop();
    console.log('scrolltop', nowTop)
    if($(this).scrollTop() >= 1835 ){
        $('.day123-fix').css('position','fixed').css('top','200px').css('right','-20px')
    }
    else{
        $('.day123-fix').css('position','relative').css('top','200px').css('right','-20px')
    }
})
// 1835.1795
// cate menu 行程介紹fixed目錄bar 點擊了變底色＆滑到位置換底色
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

// <!-- term點了展開 -->

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

// <!-- 愛心 收藏喜好清單 -->

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

    $('#d-clip-web').attr('clipPathUnits', 'objectBoundingBox').attr('transform', 'scale(0.0019 0.00178)');