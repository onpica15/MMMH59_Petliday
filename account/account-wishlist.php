<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">
<style>
    .heart-top,
    .share {
        margin: 10px;
        width: 30px;
        cursor: pointer;
    }

    .heart-top img,
    .share img {
        width: 100%;
        object-fit: cover;
    }

    .prod-price-in {
        color: #ffa12c;
        font-size: 18px;
        margin: 20px 10px 10px 10px;
    }

    .btn {
        margin: 14px 12px;
        line-height: 36px;
    }

    .btn-row {
        padding-right: 28px;
    }

    /* 分享 share */
    .share-frame {
        width: 300px;
        height: 230px;
        border-radius: 3px 30px 3px 3px;
        top: -35px;
        right: 15px;
        overflow: hidden;
        pointer-events: none;
    }

    .share-row {
        width: 260px;
        height: 145px;
        padding: 30px 30px;
        background-color: #fff;
        top: 110px;
        right: 0;
        border-radius: 3px 30px 3px 3px;
        transition: .5s;
        z-index: 2;
        opacity: 0;
        pointer-events: none;
    }

    .cancel-btn {
        width: 12px;
    }

    .cancel-btn img {
        width: 100%;
        object-fit: contain;
    }

    .fb,
    .line-icon,
    .email,
    .ig {
        width: 30px;
        height: 30px;
    }

    .fb p,
    .ig p {
        margin-left: 8px;
    }

    .line-icon p {
        margin-left: 3px;
    }

    .email p {
        margin-left: -2px;
    }

    .share-pic {
        height: 75px;
    }

    .share-pic p {
        font-size: 14px;
        margin-top: 5px;
    }

    .share-row img {
        width: 100%;
        object-fit: contain;
    }

    .share-row input {
        padding-left: 10px;
        padding-right: 40px;
        width: 100%;
        height: 40px;
    }

    .copy-btn {
        width: 20px;
        height: 20px;
        bottom: 58px;
        right: 40px;
    }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <!-- aside-bar 側邊攔 -->
            <?php include __DIR__ . '/../account/account-aside-bar-c.php' ?>
            <!-- endof  aside-bar 側邊攔 -->

            <!-- aside-bar點出的內容 -->
            <div class="col-12 col-lg-9">
                <div class="">
                    <!--wishlist 願望清單 -->
                    <div class="tab-pane list-section">
                        <div class="container mb-3" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">願望清單</h4>
                                </div>
                            </div>
                            <div class="share-frame position-absolute">
                                <div class="share-row position-absolute">
                                    <div class="first-row d-flex justify-content-between align-items-start">
                                        <p>分享</p>
                                        <div class="cancel-btn">
                                            <img src="/Petliday/icon/close.png" alt="">
                                        </div>
                                    </div>
                                    <div class="share-pic d-flex justify-content-between">
                                        <div class="fb">
                                            <img src="/Petliday/icon/fb.png" alt="">
                                            <p>fb</p>
                                        </div>
                                        <div class="line-icon">
                                            <img src="/Petliday/icon/line.png" alt="">
                                            <p>line</p>
                                        </div>
                                        <div class="email">
                                            <img src="/Petliday/icon/google.png" alt="">
                                            <p>email</p>
                                        </div>
                                        <div class="ig">
                                            <img src="/Petliday/icon/ig.png" alt="">
                                            <p>ig</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ----prod-box---- -->
                        <div class="container">
                            <div class="row prod-box mt-4 d-flex align-items-top">
                                <div class="prod-img col-2 col-lg-3">
                                    <img src="../products/img/prolist20.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-6 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">一起奔跑吧｜宜蘭露營 & 夜間觀星行程自由自在舒爽二日遊</h5>
                                    <div class="btn-row row">
                                        <button class="btn btn-outline">查看詳情</button>
                                        <a class="btn" href="./account-order-detail.php">加入購物車</a>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 d-flex flex-column ml-auto">
                                    <div class="icons d-flex justify-content-end">
                                        <div class="heart-top">
                                            <img src="/petliday/icon/heart-red-fill.png">
                                        </div>
                                        <div class="share">
                                            <img src="/petliday/icon/share.png">
                                        </div>
                                    </div>
                                    <h5 class="mb-5 ml-auto prod-price-in">NT$ 2000</h5>

                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row prod-box mt-4 d-flex align-items-top">
                                <div class="prod-img col-2 col-lg-3">
                                    <img src="../products/img/prolist16.jpg" alt="">
                                </div>
                                <div class="col-10 col-lg-6 prod-text d-flex flex-column">
                                    <h5 class="brown-color t-l title1-m">寵物油畫｜與毛孩共同創作還能掛在家裡擺飾一舉兩得｜ Wendy老師授課</h5>
                                    <div class="btn-row row">
                                        <button class="btn btn-outline">查看詳情</button>
                                        <a class="btn" href="./account-order-detail.php">加入購物車</a>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 d-flex flex-column ml-auto">
                                    <div class="icons d-flex justify-content-end">
                                        <div class="heart-top">
                                            <img src="/petliday/icon/heart-red-fill.png">
                                        </div>
                                        <div class="share">
                                            <img src="/petliday/icon/share.png">
                                        </div>
                                    </div>
                                    <h5 class="mb-5 ml-auto prod-price-in">NT$ 1350</h5>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- endof wishlist 願望清單 -->



                </div>
            </div>
            <!-- endof aside-bar點出的內容 -->

        </div>
    </div>
</section>







<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script>
    // ------JS開始 以上勿刪-------
    $('.share').on('click', function() {
        $('.share-row').css('top', '0').css('opacity', '1').css('pointer-events', 'auto');
    })
    $('.share-row').on('click', function() {
        $(this).css('top', '110px').css('opacity', '0').css('pointer-events', 'none');
    })

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
        console.log('productSid=', productSid);

        function insertWish() {
            $.get('insert-wish-api.php', {
                    product_sid: productSid
                }
                // $(this).closest('.product-item').attr('data-sid')}
                ,
                function(data) {
                    console.log('data', data);
                    $.post('insert-wish-api.php', data)
                }, 'json')
        }

        function deleteWish() {
            $.get('dele-wish-api.php', {
                    product_sid: productSid
                }

                ,
                function(data) {
                    console.log('data', data);
                    $.post('dele-wish-api.php', data)
                }, 'json')
        }

    });
    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>