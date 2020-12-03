<?php include __DIR__ . '/../parts/config.php' ?>
<?php $pageName = 'product-list'; ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>
<link rel="stylesheet" href="pro-list.css">
<?php include __DIR__ . '/../parts/html-navbar.php' ?>

<div class="container-fluid top-pic-con">
    <div class="row top-pic">
        <img src="/petliday/products/img/prolist-top.png" alt="">
    </div>
</div>
<div class="container top-container">
    <div class="row bread-row t-xs">
        <a href="<?= WEB_ROOT ?>index/index＿.php">首頁</a> /
        <a href="<?= WEB_ROOT ?>products/pro-list-ajax.php">行程列表</a>
    </div>
    <div class="topic">
        <p>熱門行程</p>
        <p class="topic-line"></p>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row hot align-items-center justify-content-center w-100 m-0">
        <a class="arrow al mr-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="30px">
                <path class="cls-4" d="M25.12,51.56a3.52,3.52,0,0,1-2.51-1.06L1,28.22a3.5,3.5,0,0,1,0-4.88L22.61,1.06a3.5,3.5,0,0,1,5,4.88L8.38,25.78,27.64,45.62a3.51,3.51,0,0,1-2.52,5.94Z" />
            </svg>
        </a>
        <div class="wrap position-relative">
            <ul class="wrap-img d-flex list-unstyled position-absolute">
                <!-- 4 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot4.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>戶外跑跳</p>
                                <p>高回頭率</p>
                                <p>露營體驗</p>
                            </div>
                            <p class="hot-title t-xl">一起奔跑吧｜宜蘭露營＋夜間觀星行程二日遊</p>
                            <p class="hot-info">
                                包車漫遊台灣北海岸，專人搭收所有設備！帶著簡單行李就能出發，體驗宜蘭在山谷中露營。
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.8</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">6則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$2980</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- 1 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot1.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>高cp值</p>
                                <p>獨家行程</p>
                                <p>一致好評</p>
                            </div>
                            <p class="hot-title t-xl">busy歹吧郎ㄉ選擇｜陽明山二子坪＆熊空茶園一日遊</p>
                            <p class="hot-info">
                                沿海處處是美景，山川壯麗美不勝收。寵物就是我男/女友！？帶上他們一起漫步陽明山與山峽台灣農林熊空茶園。
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.8</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">7則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$1680</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- 2 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot2.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>闔家歡樂</p>
                                <p>動靜皆宜</p>
                                <p>行程豐富</p>
                            </div>
                            <p class="hot-title t-xl">柯基大集合遊台中｜彩虹眷村 ＆ 豐富公園二日遊</p>
                            <p class="hot-info">
                                柯基爸媽們集合！一起猖狂遊台中景點，一起打破世界紀錄吧！在公園裡與寵物一起野餐，當日還有課種體驗活動！
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.9</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">18則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$2560</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- 3 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot3.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>網美景點</p>
                                <p>全程包車</p>
                                <p>獨家行程</p>
                            </div>
                            <p class="hot-title t-xl">上山下海玩得夠｜熱氣球＆SUP＆金針花花東包車三日遊</p>
                            <p class="hot-info">
                                六十石山、赤科山、太麻里山為花東縱谷三大金針栽植區，賞金針花海的好去處，來趟放鬆身心靈的自然之旅。
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.8</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">22則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$4280</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- 4 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot4.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>戶外跑跳</p>
                                <p>高回頭率</p>
                                <p>露營體驗</p>
                            </div>
                            <p class="hot-title t-xl">一起奔跑吧｜宜蘭露營＋夜間觀星行程二日遊</p>
                            <p class="hot-info">
                                包車漫遊台灣北海岸，專人搭收所有設備！帶著簡單行李就能出發，體驗宜蘭在山谷中露營。
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.8</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">6則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$2980</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- 1 -->
                <li class="hot-card">
                    <div class="hot-pic">
                        <img src="/petliday/products/img/pdlist_hot1.jpg" alt="">
                    </div>
                    <div class="hot-right position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.3 379.52" height="350px" width="476px">
                            <defs></defs>
                            <g id="圖層_1" data-name="圖層 1">
                                <path class="cls-6" d="M50.16.55v0h-.57V16.93C44.06,96.07,0,101.7,0,191.39s44.06,99.18,49.59,175.19v13.06l200.6.45H508.3V.55Z" />
                            </g>
                        </svg>
                        <div class="hot-text position-absolute">
                            <div class="tag d-flex">
                                <p>高cp值</p>
                                <p>獨家行程</p>
                                <p>一致好評</p>
                            </div>
                            <p class="hot-title t-xl">busy歹吧郎ㄉ選擇｜陽明山二子坪＆熊空茶園一日遊</p>
                            <p class="hot-info">
                                沿海處處是美景，山川壯麗美不勝收。寵物就是我男/女友！？帶上他們一起漫步陽明山與山峽台灣農林熊空茶園。
                            </p>
                            <div class="hot-buttom d-flex justify-content-between align-items-center">
                                <div class="hot-buttom-left d-flex">
                                    <div class="star">
                                        <img src="/Petliday/icon/star-green-fill.png" alt="">
                                    </div>
                                    <p class="rate t-xl text-gray ml-2">4.8</p>
                                    <p class="rate-num mt-1 ml-2"><u class="text-gray">7則評論</u></p>
                                </div>
                                <div class="hot-button-right">
                                    <p class="price orange-color t-xxl">$1680</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <a class="arrow ar ml-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="30px">
                <path class="cls-4" d="M3.5,51.56A3.5,3.5,0,0,1,1,45.62L20.25,25.78,1,5.94A3.5,3.5,0,0,1,6,1.06L27.64,23.34a3.52,3.52,0,0,1,0,4.88L6,50.5A3.51,3.51,0,0,1,3.5,51.56Z" />
            </svg>
        </a>
    </div>
</div>
<div class="container">
    <div class="row dots justify-content-end">
        <ul class="d-flex">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
<div class="container trip-select">
    <div class="topic">
        <p>行程一覽</p>
        <p class="topic-line"></p>
    </div>
    <div class="time align-items-center">
        <p class="pr-3">玩多久？</p>
        <a class="tag-not-on tag-on" data-time="3">三日遊</a>
        <a class="tag-not-on tag-on" data-time="2">二日遊</a>
        <a class="tag-not-on tag-on" data-time="1">一日遊</a>
        <a class="tag-not-on tag-on" data-time="4">活動</a>
    </div>
    <div class="area align-items-center">
        <p class="pr-3">去哪玩？</p>
        <a class="tag-not-on tag-on" data-area="n">北部出發</a>
        <a class="tag-not-on" data-area="c">中部出發</a>
        <a class="tag-not-on" data-area="s">南部出發</a>
        <a class="tag-not-on" data-area="e">東部出發</a>
    </div>
    <form action="" class="order">
        <div class="form-group d-flex align-items-center justify-content-end">
            <label for="exampleFormControlSelect1">排序方式</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>依熱門程度</option>
                <option>依價錢低至高</option>
                <option>依價錢高至低</option>
            </select>
        </div>
    </form>
</div>
<!-- 商品卡列表 -->
<div class="container">
    <div class="row product-row align-items-center">
    </div>
</div>

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->

<script src="/Petliday/products/pro-list.js"></script>
<script>
    // <!-- ajax同步 -->
    // $.ajax({
    //     type: "get",
    //     url: "pro-list.js",
    //     dataType: "json",
    //     async: false
    // })
    // ------JS開始 以上勿刪-------
    const productTpl = function(a) {
        return `
        <div class="product-item col-md-4 col-12 p-4" data-sid="${a.sid}">
            <div class="card c3">
                <div class="heart-circle">
                    <div class="heart"><img src="/Petliday/icon/heart-red.png" alt=""></div>
                    <div class="heart heart-fly"><img src="/Petliday/icon/heart-red-fill.png" alt=""></div>
                </div>
                <a href="pro-pg.php?sid=${a.sid}" class="card-pic w-100">
                    <img src="/Petliday/products/img/prolist${a.sid}.jpg" alt="...">
                </a>
                <div class="card-text pt-3 pb-1 px-4">
                    <p>${a.product_name}</p>
                    <div class="info d-flex justify-content-between">
                        <div class="info-left d-flex align-items-center">
                            <div class="star mb-2 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                    <defs>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <div class="rate text-gray t-m">${a.star}</div>
                            <div class="rate-all t-xs ml-2"><u class="text-gray">${a.rate}則評論 </u></div>
                        </div>
                        <div class="info-right pr-2 t-l orange-color">$${a.price_all}</div>
                    </div>
                </div>
                <p class="card-info px-4 t-xs">
                    ${a.intro}
                </p>
            </div>
        </div>
        `;
    }
    // tag selection
    function getWhere() {
        const dataTime = [];
        const dataArea = [];
        $('.time a.tag-on').each(function(i, el) {
            console.log($(this).attr('data-time'));
            dataTime.push($(this).attr('data-time'));
        })
        $('.area a.tag-on').each(function(i, el) {
            console.log($(this).attr('data-area'));
            dataArea.push($(this).attr('data-area'));
        })
        // const dTime = dataTime.join(',');
        // const dArea = dataArea.join(',');
        let sendTime = [];
        let sendArea = [];
        let whereArray = [];
        let whereStr = '';
        dataTime.forEach(function(el) {
            sendTime.push('`cate`=' + el);
            // sendData.push('dTime[]=' + el);
        });
        dataArea.forEach(function(el) {
            sendArea.push('`area`=' + `'${el}'`);
            // sendData.push('dArea[]=' + el);
        });
        const sendTimeStr = sendTime.join(' OR ');
        const sendAreaStr = sendArea.join(' OR ');

        // console.log('sendTime', sendTimeStr);
        // console.log('sendArea', sendAreaStr);
        whereArray.push(sendTimeStr);
        whereArray.push(sendAreaStr);
        console.log('whereArray', whereArray);
        if (sendTimeStr.length !== 0 && sendAreaStr.length !== 0) {
            console.log('hi')
            whereStr = whereArray.join(") AND (");
        } else {
            console.log('nono')
            whereStr = whereArray.join("");
        }
        location.href = "#" + whereStr;

        // 點擊標籤按鈕時同時確認排序
        let order = $('.order select').val()
        // console.log('order', order);
        if (order === '依價錢低至高') {
            whereStr = whereStr + ') ORDER BY CAST(`products`.`price_all` as SIGNED INTEGER) ASC';
        } else if (order === '依價錢高至低') {
            whereStr = whereStr + ') ORDER BY CAST(`products`.`price_all` as SIGNED INTEGER) DESC'
        } else if (order === '依熱門程度') {
            whereStr = whereStr + ')'
        }
        console.log('whereStr', whereStr);

        $.get('pro-list-ajax-api.php', {
                where: whereStr,
            },
            function(data) {
                console.log('daaaaaaa', data);

                let str = '';
                if (data && data.length) {
                    data.forEach(function(el) {
                        str += productTpl(el);
                    });
                }
                $('.product-row').html(str);
            }, 'json');
    }
    $('.time a, .area a').on('click', function tagClick() {
        $(this).toggleClass('tag-on');
        getWhere()
    })
    // 排序點擊時更新卡片排序方式：熱門（預設sid) / 價錢低到高 / 價錢高到低
    $('.order select').on('change', function() {
        console.log('林阿嬤好')
        getWhere()
    })
    $.get('pro-list-ajax-api.php', {
            none: '?',
        },
        function(data) {
            console.log('daaaaaaa', data);

            let str = '';
            if (data && data.length) {
                data.forEach(function(el) {
                    str += productTpl(el);
                });
            }
            $('.product-row').html(str);
        }, 'json');


    // 取得點擊卡片的sid值
    $('.card-pic').on('click', function(event) {
        const item = $(this).closest('.product-item');
        // closest往上找最近的
        const sid = item.attr('data-sid');
        // const qty = item.find('.quantity').val();
        // find往下找
        console.log({
            sid: sid,
            // quantity: qty
        });
    });
    // ------JS結束 勿刪到-------
</script>

<?php include __DIR__ . '/../parts/html-foot.php' ?>