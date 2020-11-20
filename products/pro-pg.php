<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<link rel="stylesheet" href="pro-pg.css">
<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<main>
    <!-- 最上綠色區塊 -->
    <div class="container-fluid top-green">
        <!-- banner輪播D -->
        <div class="row caro">
            <img src="/petliday/products/img/pd-caro1.jpg" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 520 563.52" width="520px">
                <defs>
                    <clipPath id="d-clip">
                        <path d="M263,0H164.28C73.7,0,0,73.7,0,164.28v235c0,90.59,73.7,164.29,164.28,164.29H263c141.72,0,257-126.4,257-281.76S404.69,0,263,0Z" />
            </svg>
            </clipPath>
            </defs>
        </div>
        <!-- 主要資訊區塊 -->
        <div class="top-wrap info">
            <!-- 麵包屑 -->
            <div class="row bread-row">
                <p class="t-xs">首頁 / 行程列表 / 台北出發 / 九份一日遊</p>
            </div>
            <!-- 標題row -->
            <div class="row title-row justify-content-between">
                <div class="title-left">
                    <p>花東包車三日遊｜上山下海玩得夠！</p>
                    <p>熱氣球嘉年華＆部落SUP體驗＆金針花海</p>
                </div>
                <div class="title-right d-flex">
                    <div class="price-wrap mr-3">
                        <p class="price t-xxxl">NT$ 2280</p>
                        <p class="text-gray">成團7日前免費取消</p>
                    </div>
                    <div class="heart">
                        <img src="/petliday/icon/heart.png">
                    </div>
                    <div class="share">
                        <img src="/petliday/icon/share.png">
                    </div>
                </div>
            </div>
            <!-- 評價,標籤row -->
            <div class="row rate-row">
                <div class="star">
                    <img src="/petliday/icon/star-green.png" alt="">
                </div>
                <span class="rate text-gray">4.9</span>
                <span class="rate-number"><u class="text-gray">133則評論</u></span>
                <div class="tag d-flex">
                    <p>高cp值</p>
                    <p>獨家行程</p>
                    <p>一致好評</p>
                </div>
            </div>
            <!-- 簡介row -->
            <div class="row intro justify-content-between align-items-end">
                <ul class="pl-4">
                    <li>第一天：台東熱氣球嘉年華+波希米亞露營野餐派對</li>
                    <li>第二天：台東都歷部落原鄉體驗+都歷海灘SUP探險</li>
                    <li>第三天：六十石山金針花海+瑞穗農場大地遊戲</li>
                </ul>
                <div class="select-btn ">選擇方案</div>
            </div>
        </div>
        <!-- 選擇方案區塊 -->
        <div class="top-wrap select">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="top-left">
                    <p class="topic">選擇日期、數量</p>
                    <div class="topic-line"></div>
                </div>
                <div class="top-right d-flex">
                    <div class="reset mr-2">
                        <img src="/petliday/icon/reload.png" alt="">
                    </div>
                    <span>全部重選</span>
                </div>
            </div>
            <!-- 選擇日期．日曆 -->
            <div class="select-wrap d-flex">
                <div class="select-left col-md col-sm-12 m-5 p-0">
                    <div class="select-date justify-content-between p-0 mb-5 d-flex">
                        <p class="t-l">選擇出發日期</p>
                        <div class="cal-icon d-flex align-items-center">
                            <div class="green-dot mx-2"></div>
                            <span>還有數量</span>
                            <div class="red-dot mx-2"></div>
                            <span>即將額滿</span>
                        </div>

                    </div>
                    <div class="month d-flex justify-content-between my-4">
                        <div class="arrow">
                            <img src="/Petliday/icon/left-orange.png" alt="">
                        </div>
                        <p class="my">11 月2020年</p>
                        <div class="arrow">
                            <img src="/Petliday/icon/right-orange.png" alt="">
                        </div>
                    </div>
                    <div class="calendar">
                        <table class="w-100">
                            <thead>
                                <tr id="title"></tr>
                            </thead>
                            <tbody id="data"></tbody>
                        </table>
                    </div>
                </div>
                <!-- 選擇數量 -->
                <div class="select-right col-md col-sm-12 m-5 p-0">
                    <div class="select-amount mb-5">
                        <p class="t-l">選擇數量</p>
                    </div>
                    <div class="select-brother d-flex justify-content-between my-4">
                        <div class="select-man d-flex align-items-center">
                            <label class="m-0" for="">人數</label>
                            <div class="input-group d-flex align-items-center">
                                <div class="input-group-prepend">
                                    <button class="btn-add" type="button" id="button-sub">－</button>
                                </div>
                                <input type="text" class="form-control" placeholder="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-prepend">
                                    <button class="btn-add" type="button" id="button-add">＋</button>
                                </div>
                            </div>
                        </div>
                        <div class="select-pet d-flex align-items-center">
                            <label class="m-0" for="">寵物</label>
                            <div class="input-group d-flex align-items-center">
                                <div class="input-group-prepend">
                                    <button class="btn-add" type="button" id="button-sub">－</button>
                                </div>
                                <input type="text" class="form-control" placeholder="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-prepend">
                                    <button class="btn-add" type="button" id="button-add">＋</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-middle d-flex align-items-end justify-content-between">
                        <div class="select-term">
                            <ul class="m-0">
                                <li>成團7日內免費取消</li>
                                <li>成團7日內免費取消</li>
                                <li>成團7日內免費取消</li>
                            </ul>
                        </div>
                        <div class="select-price">
                            <span>總金額</span>
                            <p>NT$ 2280</p>
                        </div>
                    </div>
                    <div class="btn-twin d-flex justify-content-between mt-5">
                        <div class="btn ml-0">加入購物車</div>
                        <div class="btn mr-0">立即預訂</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 出血狗狗背景圖 -->
    <div class="product w-100">
        <div class="bg-dog">
            <div class="container">
                <div class="row cate-fix">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                        <button type="button" class="btn-cate btn-cate-left pl-4">行程介紹</button>
                        <button type="button" class="btn-cate">方案詳情</button>
                        <button type="button" class="btn-cate">注意事項</button>
                        <button type="button" class="btn-cate">取消政策</button>
                        <button type="button" class="btn-cate">行程評價</button>
                        <button type="button" class="btn-cate
                        btn-cate-right pr-4">推薦行程</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid day123-fix">
                <div class="day123">
                    <a href="">第1天</a>
                    <a href="">第2天</a>
                    <a href="">第3天</a>
                </div>
                <div class="line">

                </div>
            </div>
            <div class="container mt-5 pt-4">
                <div class="topic">
                    <p>行程介紹</p>
                    <p class="topic-line"></p>
                </div>
                <div class="1day-text mt-5">
                    <p class="day-text">第一天：台東熱氣球嘉年華+波希米亞露營野餐派對</p>
                    <p class="mt-4 mb-1">09:00 - 09:30 台北火車站(北二門)集合，搭乘專屬Petliday巴士出發</p>
                    <p class="mb-1">16:00 - 18:00 鹿野熱氣球嘉年華，看展球和繫留搭乘</p>
                    <p class="mb-1">19:00 - 24:00 夜宿波希米亞露營區</p>
                </div>
                <div class="row r1">
                    <div class="pic1">
                        <img src="" alt="">
                        <div class="intro1">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r2">
                    <div class="pic2">
                        <img src="" alt="">
                        <div class="intro2">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r3">
                    <div class="pic3">
                        <img src="" alt="">
                        <div class="intro3">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r4">
                    <div class="pic4">
                        <img src="" alt="">
                        <div class="intro4">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r5">
                    <div class="pic5">
                        <img src="" alt="">
                        <div class="intro5">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r6">
                    <div class="pic6">
                        <img src="" alt="">
                        <div class="intro6">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r7">
                    <div class="pic7">
                        <img src="" alt="">
                        <div class="intro7">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r8">
                    <div class="pic8">
                        <img src="" alt="">
                        <div class="intro8">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r9">
                    <div class="pic9">
                        <img src="" alt="">
                        <div class="intro9">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r10">
                    <div class="pic10">
                        <img src="" alt="">
                        <div class="intro10">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row r1">
                    <div class="pic1">
                        <img src="">
                    </div>
                    <div class="intro1">
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script src="/petliday/products/calendar.js"></script>
<script>
    // ------JS開始 以上誤刪-------



    // ------JS結束 誤刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>