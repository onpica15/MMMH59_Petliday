<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>cart/cart-style.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<div class="container cart-title">
  <div class="row">
    <div class="col-12">
      <h1 class="brown-color t-xxl">購物車</h1>
    </div>
  </div>
</div>
<div class="cart-items w-100">
  <?php if (empty($_SESSION['cart'])) : ?>
    <div class="alert alert-danger" role="alert">
      購物車沒商品
    </div>
  <?php else : ?>
    <div class="container mt-4 ">
      <div class="row prod-item-title">
        <div class="col-10 col-lg-8 text-gray t-s">行程與出發時間</div>
        <div class="col-12 col-lg-3 text-gray t-s only-pc">數量</div>
        <div class="col-2 col-lg-1 text-gray t-s">價格</div>
      </div>

      <!-- ----prod-box---- -->
      <?php foreach ($_SESSION['cart'] as $i) : ?>
        <div class="row prod-box d-flex align-items-center prod-item" data-sid="<?= $i['sid'] ?>" id="prod<?= $i['sid'] ?>">


          <div class=" prod-img col-2 col-lg-2">
            <img src="../products/img/pd<?= $i['sid'] ?>.jpg" alt="">
          </div>
          <div class="col-10 col-lg-6 prod-text d-flex flex-column justify-content-center">
            <h5 class="brown-color t-l title1-m"><?= $i['product_name'] ?></h5>

            <div class="small-text">
              <h6 class=" text-gray t-s">2020/12/<?= $i['date'] ?></h6>
              <div class=" mt-4 change-date">
                <div class=" d-flex green-color t-s">
                  <svg id="date-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.16 68.06">
                    <path data-name="Path 107" d="M59.68,8.07H58.26V3.38a3.47,3.47,0,0,0-6.93,0V8.07H39.54V3.38a3.46,3.46,0,0,0-6.92,0V8.07H20.82V3.38a3.46,3.46,0,0,0-6.92,0V8.07H12.47A12.48,12.48,0,0,0,0,20.54v35A12.49,12.49,0,0,0,12.47,68.06H59.69A12.48,12.48,0,0,0,72.16,55.58v-35A12.47,12.47,0,0,0,59.68,8.07ZM12.47,15H59.68a5.57,5.57,0,0,1,5.56,5.55v2.55H6.92V20.54A5.55,5.55,0,0,1,12.47,15ZM59.68,61.13H12.47a5.54,5.54,0,0,1-5.55-5.55V30H65.24V55.58A5.55,5.55,0,0,1,59.68,61.13Z" />
                    <path data-name="Path 108" d="M34,44.27A3.94,3.94,0,0,0,35.27,43a3.76,3.76,0,0,0,.45-2,5,5,0,0,0-.38-2,4.36,4.36,0,0,0-1.1-1.52,5.23,5.23,0,0,0-1.72-1,7.42,7.42,0,0,0-4.52,0,5.06,5.06,0,0,0-1.81,1,5.49,5.49,0,0,0-1.27,1.71,6.94,6.94,0,0,0-.65,2.31h4a1.88,1.88,0,0,1,.48-1.36A1.63,1.63,0,0,1,30,39.74a1.68,1.68,0,0,1,1.22.46,1.6,1.6,0,0,1,.47,1.21,1.67,1.67,0,0,1-.5,1.25,1.86,1.86,0,0,1-1.32.49h-.21l-.29,0v2.71l.44-.07a2,2,0,0,1,.42,0,2.29,2.29,0,0,1,1.52.55,2,2,0,0,1,.63,1.63,2.25,2.25,0,0,1-.52,1.52A2.11,2.11,0,0,1,30.2,50a2.39,2.39,0,0,1-1.71-.61,2.47,2.47,0,0,1-.69-1.77H23.54a6.55,6.55,0,0,0,.14,1.47,4.47,4.47,0,0,0,.56,1.46A5.71,5.71,0,0,0,26.7,53a7.81,7.81,0,0,0,3.46.74,8.11,8.11,0,0,0,2.63-.4,6.21,6.21,0,0,0,2.07-1.12,5,5,0,0,0,1.84-4A4.29,4.29,0,0,0,36,45.68,3.68,3.68,0,0,0,34,44.27Z" />
                    <path data-name="Path 109" d="M39.77,40.32h2.42V53.26H46.5V36.66H39.77Z" />
                  </svg>

                  修改日期

                  <svg class="ml-1" id="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.87 37.58">
                    <path data-name="Path 83" d="M2.55,37.58A2.55,2.55,0,0,1,0,35a2.58,2.58,0,0,1,.72-1.78l14-14.46L.72,4.33A2.55,2.55,0,0,1,4.38.77h0L20.15,17a2.56,2.56,0,0,1,0,3.56L4.38,36.81A2.56,2.56,0,0,1,2.55,37.58Z" />
                  </svg>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-3 change-box ">
            <div class="mprice" data-mprice="<?= $i['price_man'] ?>"></div>
            <div class="pprice" data-pprice="<?= $i['price_pet'] ?>"></div>
            <div class="man-box all-box">
              <div class="change-man d-flex align-items-center change-m ">
                <p class=" mb-0 m-chanhe-box-quant">人數</p>
                <div class="change-box-m d-flex flex-row ">
                  <div class="change-btn subtr-btn ">
                    <svg id="sub-icon" class="sub-icon subIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 5.1">
                      <path data-name="Path 86" d="M32.23,0H2.61a2.55,2.55,0,1,0-.12,5.1H32.23A2.55,2.55,0,0,0,32.35,0Z" /></svg>
                  </div>

                  <input data-manQ="<?= $i['manQ'] ?>" type="text" value="" name="man-quantity" class="change-quantity man-quantity">

                  <div class="change-btn add-btn">
                    <svg id="add-icon" class="add-icon addIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 34.73">
                      <path d="M32.23,14.75H20V2.49a2.55,2.55,0,0,0-5.1,0V14.75H2.61a2.55,2.55,0,0,0-.12,5.1H14.87V32.11a2.55,2.55,0,1,0,5.1.13V19.85H32.23a2.55,2.55,0,0,0,.12-5.1Z" /></svg></div>
                </div>
              </div>
            </div>
            <div class="pet-box all-box">

              <div class="change-pet  d-flex align-items-center change-m ">
                <p class=" mb-0 m-chanhe-box-quant">寵物
                </p>
                <div class="change-box-m d-flex flex-row ">
                  <div class="change-btn subtr-btn">
                    <svg id="sub-icon1" class="sub-icon1 subIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 5.1">
                      <path data-name="Path 86" d="M32.23,0H2.61a2.55,2.55,0,1,0-.12,5.1H32.23A2.55,2.55,0,0,0,32.35,0Z" /></svg>
                  </div>
                  <input data-petQ="<?= $i['petQ'] ?>" type="text" value="" name="pet-quantity" class=" change-quantity pet-quantity"></input>
                  <div class="change-btn add-btn">
                    <svg id="add-icon1" class="add-icon1 addIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 34.73">
                      <path d="M32.23,14.75H20V2.49a2.55,2.55,0,0,0-5.1,0V14.75H2.61a2.55,2.55,0,0,0-.12,5.1H14.87V32.11a2.55,2.55,0,1,0,5.1.13V19.85H32.23a2.55,2.55,0,0,0,.12-5.1Z" /></svg>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- 總計 -->
          <div class="col-12 col-lg-1 prod-price d-flex align-items-center " data-price="">
            <h5 class="t-m brown-color prod-price-in"></h5>
          </div>

          <!-- 刪除 -->
          <div class="del-icon">
            <a href="javascript: removeItem( <?= $i['sid'] ?>) ">
              <svg id="del-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.19 31.14">
                <path data-name="Path 85" d="M19.2,15.6,30.4,4.4A2.55,2.55,0,0,0,26.89.7l-.1.1L15.6,12,4.4.8A2.55,2.55,0,1,0,.7,4.31l.1.09L12,15.6.8,26.79A2.55,2.55,0,0,0,4.4,30.4h0L15.6,19.2,26.79,30.4a2.55,2.55,0,0,0,3.61-3.61h0Z" />
              </svg>
            </a>
          </div>
        </div>
      <?php endforeach;  ?>
      <!-- ----prod-box end---- -->

    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 total-box d-flex justify-content-end align-items-center p-3">
          <div class="prod-items mr-auto t-s">共 <span>三件商品</span> </div>
          <div class="danger-color t-l mr-3">總計: NT <span class="danger-color t-xl" id="totleAmount"></span> </div>

          <a href="./order-step1.php" class="a-style">
            <button type="submit" class="buy-btn btn  btn-1 btn-2 d-flex align-items-center justify-content-center">結帳</button>
          </a>


        </div>

      </div>
    </div>
  <?php endif; ?>
</div>


<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script>
  // ------JS開始 以上勿刪-------
  // const petQuantity = document.querySelectorAll('.pet-quantity');
  // const manQuantity = document.querySelectorAll('.man-quantity');
  // const addButton = document.querySelectorAll('.add-icon');
  // const subButton = document.querySelectorAll('.sub-icon');
  // const addButton1 = document.querySelectorAll('.add-icon1');
  // const subButton1 = document.querySelectorAll('.sub-icon1');

  const dallorCommas = function(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  };
  // 刪除------
  function removeItem(sid) {
    $.get('<?= WEB_ROOT ?>products/pro-pg-api-ching.php', {
        sid: sid,
        action: 'remove'
      },
      function(data) {
        console.log(data);
        countCart(data);
        $('#prod' + sid).remove();

      }, 'json');

  };
  // 輸入------
  $('.prod-item').each(function() {
    const tr = $(this);
    // const price = parseInt(tr.find('td.price').attr('data-price'))
    const mQuantity = parseInt(tr.find('.man-box input').attr('data-manQ'))
    // const tr = $(this).attr('data-sid');
    const pprice = parseInt(tr.find('.pprice').attr('data-pprice'))
    const mprice = parseInt(tr.find('.mprice').attr('data-mprice'))
    const pQuantity = parseInt(tr.find('.pet-box input').attr('data-petQ'))
    const price = (mQuantity * mprice) + (pQuantity * pprice);

    console.log('mQuantity', mQuantity)
    console.log('pQuantity', pQuantity)
    tr.find('.man-box input').val(mQuantity);
    tr.find('.pet-box input').val(pQuantity);
    tr.find('.prod-price h5').html('$ ' + dallorCommas(price));

    // -------加減按鈕區-------

    const addButton = $(tr.find('.add-icon'));
    const subButton = $(tr.find('.sub-icon'));
    const addButton1 = $(tr.find('.add-icon1'));
    const subButton1 = $(tr.find('.sub-icon1'));


    if (mQuantity > 1) {
      console.log('> 1')
      subButton.addClass('able-icon');
      subButton.remove('unable-icon');
      subButton.hover(function() {
        $(this).css('background-color', rgb(171, 171, 171));
      })
    }

    if (mQuantity == 1) {
      subButton.remove('able-icon');
      subButton.addClass('unable-icon');
      subButton.hover(function() {
        $(this).css('background-color', ' #eee');
      })



    }

    if (pQuantity > 1) {
      console.log('> 1')
      subButton1.remove('unable-icon');
      subButton1.addClass('able-icon');
      subButton.hover(function() {
        $(this).css('background-color', rgb(171, 171, 171));
      })

    }

    if (pQuantity == 1) {
      subButton1.remove('able-icon');
      subButton1.addClass('unable-icon');
      subButton.hover(function() {
        $(this).css('background-color', ' #eee');
      })


    }

  });

  // const addButton = $('.add-icon');
  // const subButton = $('.sub-icon');
  // const addButton1 = $('.add-icon1');
  // const subButton1 = $('.sub-icon1');
  // let item = parseInt($('.prod-item').find('.man-box input').val());
  // let mQuantityV = addButton.closest('.prod-item').find('.man-box input');
  // let pQuantityV = $('.prod-item').find('.pet-box input');
  // let item = $('.prod-item').find('.man-box input').val();

  $('.add-icon').click(function() {
    console.log('add-icon-click')
    let item = parseInt($(this).closest('.prod-item').find('.man-box input').val());
    const subButton = $(this).closest('.prod-item').find('.sub-icon');


    console.log('A1addButton', item)
    if (item == 1) {
      subButton.addClass('unable-icon');
      subButton.remove('able-icon');
    } else if (item > 1) {
      console.log('> 1')
      subButton.addClass('able-icon');
      subButton.remove('unable-icon');
    }


    item = +item + 1
    $(this).closest('.prod-item').find('.man-box input').val(item)
    console.log('AAAAAAAaddButton', item)
  })

  $('.sub-icon').click(function() {
    console.log('subButton-click')
    let item = parseInt($(this).closest('.prod-item').find('.man-box input').val());
    const subButton = $(this).closest('.prod-item').find('.sub-icon');
    if (item == 1) {
      subButton.addClass('unable-icon');
      subButton.remove('able-icon');
    } else if (item > 1) {
      item = +item - 1
      console.log('A1-subButton', item)

      console.log('> 1')
      subButton.addClass('able-icon');
      subButton.remove('unable-icon');
    }


    $(this).closest('.prod-item').find('.man-box input').val(item)
    console.log('AAAAAAA-subButton', item)

  })



  $('.add-icon1').click(function() {
    console.log('add-icon1-click')
    let item = parseInt($(this).closest('.prod-item').find('.pet-box input').val());
    const subButton1 = $(this).closest('.prod-item').find('.sub-icon1');

    console.log('A1addButton', item)



    item = +item + 1
    $(this).closest('.prod-item').find('.pet-box input').val(item)
    console.log('AAAAAAAaddButton', item)
    if (item == 1) {
      subButton1.addClass('unable-icon');
      subButton1.remove('able-icon');

    } else if (item > 1) {
      console.log('> 1')
      subButton1.addClass('able-icon');
      subButton1.remove('unable-icon');
    }
  })



  $('.sub-icon1').click(function() {
    console.log('subButton-click')
    let item = parseInt($(this).closest('.prod-item').find('.pet-box input').val());
    const subButton1 = $(this).closest('.prod-item').find('.sub-icon1');

    if (item == 1) {
      subButton1.addClass('unable-icon');
      subButton1.remove('able-icon');
    } else if (item > 1) {
      item = +item - 1
      console.log('A1-subButton', item)

      console.log('> 1')
      subButton1.addClass('able-icon');
      subButton1.remove('unable-icon');
    }


    $(this).closest('.prod-item').find('.pet-box input').val(item)
    console.log('AAAAAAA-subButton', item)

  })
  // // --------------------------------------------
  // const petQuantity = document.querySelector('.pet-quantity');
  // const manQuantity = document.querySelector('.man-quantity');
  // const addButton = document.querySelector('.add-icon');
  // const subButton = document.querySelector('.sub-icon');
  // const addButton1 = document.querySelector('.add-icon1');
  // const subButton1 = document.querySelector('.sub-icon1');

  // addButton.addEventListener('click', function() {
  //   console.log('addButton')

  //   manQuantity.value = +manQuantity.value + 1

  //   if (manQuantity.value > 1) {
  //     subButton.style['background-color'] = '#ccc';
  //     subButton.style['fill'] = '#555';
  //   } else if (manQuantity.value == 1) {
  //     subButton.style['background-color'] = '#eee';
  //     subButton.style['fill'] = '#ccc';
  //   };

  //   console.log(manQuantity.value)
  // });

  // subButton.addEventListener('click', function() {
  //   console.log('subButton')
  //   if (manQuantity.value > 1) {
  //     manQuantity.value = +manQuantity.value - 1;
  //   };

  //   if (manQuantity.value > 1) {
  //     subButton.style['background-color'] = '#ccc';
  //     subButton.style['fill'] = '#555';
  //   } else if (manQuantity.value == 1) {
  //     subButton.style['background-color'] = '#eee';
  //     subButton.style['fill'] = '#ccc';
  //   };
  //   console.log(manQuantity.value)
  // });
  // //  pet------------------

  // if (petQuantity.value == 1) {
  //   subButton1.style['background-color'] = '#eee';
  //   subButton1.style['fill'] = '#ccc';
  // };

  // addButton1.addEventListener('click', function() {
  //   console.log('addButton1')
  //   petQuantity.value = +petQuantity.value + 1

  //   if (petQuantity.value > 1) {
  //     subButton1.style['background-color'] = '#ccc';
  //     subButton1.style['fill'] = '#555';
  //   } else if (petQuantity.value == 1) {
  //     subButton1.style['background-color'] = '#eee';
  //     subButton1.style['fill'] = '#ccc';
  //   };

  //   console.log(petQuantity.value)
  // })

  // subButton1.addEventListener('click', function() {
  //   console.log('subButton1')
  //   if (petQuantity.value > 1) {
  //     petQuantity.value = +petQuantity.value - 1;
  //   }
  //   if (petQuantity.value > 1) {
  //     subButton1.style['background-color'] = '#ccc';
  //     subButton1.style['fill'] = '#555';
  //   } else if (petQuantity.value == 1) {
  //     subButton1.style['background-color'] = '#eee';
  //     subButton1.style['fill'] = '#ccc';
  //   };

  //   // console.log(petQuantity.value)
  // })

  // --------------------------------------------

  function calcTotal() {
    let total = 0;
    $('.prod-item').each(function() {
      const tr = $(this);
      let mQuantity = parseInt(tr.find('.man-box input').val());
      let pQuantity = parseInt(tr.find('.pet-box input').val());
      const pprice = parseInt(tr.find('.pprice').attr('data-pprice'));
      const mprice = parseInt(tr.find('.mprice').attr('data-mprice'));
      const price = (mQuantity * mprice) + (pQuantity * pprice);

      // tr.find('td.quantity > select').val(quantity); 
      // tr.find('.prod-price h5').html('$ ' + dallorCommas(price));
      total += price;
    });
    $('#totleAmount').text('$' + dallorCommas(total))
  }
  calcTotal()


  $('.prod-item .change-box').click(function() {
    const combo = $(this);
    const tr = $(this).closest('.prod-item').attr('data-sid');
    // const addButton = $(this).find('.add-icon');
    // const subButton = $(this).find('.sub-icon');
    // const addButton1 = $(this).find('.add-icon1');
    // const subButton1 = $(this).find('.sub-icon1');
    // const subButton1 = $(this).find('man-box .sub-icon');
    let mQuantity = parseInt($(this).find('.man-box input').val());
    let pQuantity = parseInt($(this).find('.pet-box input').val());
    const pprice = parseInt($('.prod-item').find('.pprice').attr('data-pprice'));
    const mprice = parseInt($('.prod-item').find('.mprice').attr('data-mprice'));
    const price = (mQuantity * mprice) + (pQuantity * pprice);
    ('data-quantity');
    // console.log('mQuantity', mQuantity);

    const subButton = $(this).closest('.prod-item').find('.man-box .subIcon');

    const subButton1 = $(this).closest('.prod-item ').find('.pet-box .subIcon');


    $.get('<?= WEB_ROOT ?>products/pro-pg-api-ching.php', {
      sid: tr,
      action: 'add',
      manQ: mQuantity,
      petQ: pQuantity,
    }, function(data) {
      console.log(data);
      // countCart(data);
      combo.attr('data-manQ', mQuantity);
      combo.attr('data-petQ', pQuantity);
      combo.attr('data-petQ', pQuantity);
      combo.closest('.prod-item').find('.prod-price h5').html('$ ' + dallorCommas(price));
      calcTotal();
      if (mQuantity == 1) {
        subButton.addClass('unable-icon')
        subButton.removeClass('able-icon');
      } else if (mQuantity > 1) {
        subButton.addClass('able-icon')
        subButton.removeClass('unable-icon');
      };
      if (pQuantity == 1) {
        subButton1.addClass('unable-icon');
        subButton1.removeClass('able-icon');
      } else if (pQuantity > 1) {
        subButton1.addClass('able-icon');
        subButton1.removeClass('unable-icon');
      };


    }, 'json');
    // console.log('AAAAsmQuantity', mQuantity);
    // console.log('AAAAsmQuantity', pQuantity);
  })













  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>