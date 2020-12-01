// <!-- hot carosel -->

    // 熱門輪播 hot carosel
    let index = 1;
    $('.dots li').first().css('background', '#ffc072');

    $('.dots li').click(function() {
        $(this).css('background', '#ffc072').siblings().css('background', '#ccc');

        $('.wrap-img').css('left', -1140 * ($(this).index() + 1));
        index = $(this).index();
    });
    $('.ar').click(function() {
        index = index + 1;
        console.log('index1:', index);
        // let nowIndex = (index > 4) ? 0 : index;
        $('.wrap-img').css('transition', '0.7s').css('left', (-1140 * index));
        $('.dots li').eq(index - 1).css('background', '#ffc072').siblings().css('background', '#ccc');
        $('.wrap-img').on('transitionend webkitTransitionEnd', function() {
            if (index == 5) {
                index = 0;
                $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');
                index = 1;
                console.log('index2:', index);
                $('.wrap-img').css('transition', 'none').css('left', '-1140px')
            }
        });
    });
    $('.al').click(function() {
        index = index - 1;
        // let nowIndex = (index < 0) ? 4 : index;
        $('.wrap-img').css('transition', '0.7s').css('left', -1140 * (index + 1));
        $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');

        $('.wrap-img').on('transitionend webkitTransitionEnd', function() {
            if (index == -1) {
                index = 4;
                console.log('index4:', index);
                $('.wrap-img').css('transition', 'none').css('left', '-4560px')
                $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');
            }
        });
    });
    // rwd時候的熱門輪播 rwd425 hot carosel
    if (window.matchMedia('(max-width: 425px)').matches) {
        let index = 1;
        $('.dots li').first().css('background', '#ffc072');

        $('.dots li').click(function() {
            $(this).css('background', '#ffc072').siblings().css('background', '#ccc');

            $('.wrap-img').css('left', -340 * ($(this).index() + 1));
            index = $(this).index();
        });
        $('.ar').click(function() {
            index = index + 1;
            $('.wrap-img').css('transition', '0.7s').css('left', (-340 * index));
            $('.dots li').eq(index - 1).css('background', '#ffc072').siblings().css('background', '#ccc');


            $('.wrap-img').on('transitionend webkitTransitionEnd', function() {
                if (index == 4) {
                    index = 0;
                    $('.wrap-img').css('transition', 'none').css('left', '-40')
                    $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');
                }
            });
        });
        $('.al').click(function() {
            index = index - 1;
            // let nowIndex = (index < 0) ? 4 : index;
            $('.wrap-img').css('transition', '0.7s').css('left', -340 * (index + 1));
            $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');

            $('.wrap-img').on('transitionend webkitTransitionEnd', function() {
                if (index == -1) {
                    index = 4;
                    $('.wrap-img').css('transition', 'none').css('left', '-4560px')
                    $('.dots li').eq(index).css('background', '#ffc072').siblings().css('background', '#ccc');
                }
            });
        });
    }
// <!-- 愛心 收藏喜好清單 -->
// 原先js觸發選取器
    // $('.heart-circle').on('click', function() {
//  為了避免js先於ajax返回html內容造成js效果失效，改成父元素接收
    $(document).on('click','.heart-circle', function() {
        let imgSrc = $(this).find('img').attr('src')
        let productSid = $(this).closest('.product-item').attr('data-sid')
        // console.log(imgSrc);
        if (imgSrc == '/Petliday/icon/heart-red.png') {
            $(this).find('img').attr('src', '/Petliday/icon/heart-red-fill.png');
            insertWish();
        } else {
            $(this).find('img').attr('src', '/Petliday/icon/heart-red.png');
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
    
// <!-- 卡片hover -->
    // $('.c3').on('mouseenter', function() {
    $(document).on('mouseenter','.c3', function() {
        $(this).find('.card-pic').css('height', '135px');
        $(this).find('.card-info').css({
            'opacity': '1'
        });
    });
    $(document).on('mouseleave','.c3', function() {
        $(this).find('.card-pic').css('height', '175px')
        $(this).find('.card-info').css({
            'opacity': '0'
        });
    });