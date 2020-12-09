<?php include __DIR__ . '/../parts/config.php' ?>

<?php

$sid = intval($_GET['sid']);
$sql = "SELECT * FROM products WHERE sid=$sid";
$rows = $pdo->query($sql)->fetch();



// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
// exit;

?>

<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>
<link rel="stylesheet" href="pro-pg.css">
<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<main>
    <!-- 最上綠色區塊 -->
    <div class="container-fluid top-green">
        <!-- banner輪播D -->
        <div class="row caro position-relative">
            <img class="position-absolute" src="/petliday/products/img/pd<?= $rows['sid'] ?>-caro4.jpg" alt="">
            <img class="position-absolute" src="/petliday/products/img/pd<?= $rows['sid'] ?>-caro3.jpg" alt="">
            <img class="position-absolute" src="/petliday/products/img/pd<?= $rows['sid'] ?>-caro2.jpg" alt="">
            <img class="position-absolute" src="/petliday/products/img/pd<?= $rows['sid'] ?>-caro1.jpg" alt="">
            <!--clipPathUnits="objectBoundingBox" transform="scale(0.0019 0.00178)" -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 563.52" width="500px">
                <defs>
                    <clipPath id="d-clip-web">
                        <path d="M263,0H164.28C73.7,0,0,73.7,0,164.28v235c0,90.59,73.7,164.29,164.28,164.29H263c141.72,0,257-126.4,257-281.76S404.69,0,263,0Z" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <!-- 主要資訊區塊 -->

        <div class="top-wrap info position-relative">
            <!-- 分享彈出視窗 -->
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
                    <input type="text" class="copy-link" value="http://localhost/Petliday/products/pro-pg.php?sid=1">
                    <div class="copy-btn position-absolute">
                        <img src="/Petliday/icon/copy.png" alt="">
                    </div>
                </div>
            </div>
            <!-- 麵包屑 -->
            <div class="row bread-row t-xs">
                <a href="<?= WEB_ROOT ?>index/index＿.php">首頁</a> /
                <a href="<?= WEB_ROOT ?>products/pro-list-ajax.php">行程列表</a> /
                <a href="<?= WEB_ROOT ?>products/pro-list-ajax.php"><?= $rows['pd_area'] ?></a> /
                <a href="<?= WEB_ROOT ?>products/pro-pg.php?sid=1"><?= $rows['pd_short'] ?></a>
            </div>
            <!-- 標題row -->
            <div class="row title-row justify-content-between">
                <div class="title-left">
                    <p><?= $rows['product_name1'] ?></p>
                    <p><?= $rows['product_name2'] ?></p>
                </div>
                <div class="title-right d-flex">
                    <div class="price-wrap mr-3">
                        <p class="price t-xxl">NT$<?= $rows['price_all'] ?></p>
                        <p class="text-gray">成團7日前免費取消</p>
                    </div>
                    <div class="heart-top" data-sid=<?= $rows['sid'] ?>>
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
                    <img src="/petliday/icon/star-green-fill.png" alt="">
                </div>
                <span class="rate text-gray"><?= $rows['star'] ?></span>
                <a href="#rate-section" class="rate-number"><u class="text-gray"><?= $rows['rate'] ?>則評論</u></a>
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
                <a href="#select-section" class="select-btn ">選擇方案</a>
            </div>
        </div>
        <!-- 選擇方案區塊 -->
        <div class="top-wrap select">
            <div id="select-section" class="top d-flex justify-content-between align-items-center">
                <div class="top-left">
                    <div class="topic">
                        <p>選擇日期、數量</p>
                        <p class="topic-line"></p>
                    </div>
                </div>
                <div class="top-right d-flex">
                    <div class="reset mr-2">
                        <img src="/petliday/icon/reload.png" alt="">
                    </div>
                    <span>全部重選</span>
                </div>
            </div>
            <!-- 選擇日期．日曆 -->
            <div class="select-wrap w-100">
                <div class="select-left col-md col-sm-12">
                    <div class="select-date justify-content-between d-flex">
                        <p class="t-l">選擇出發日期</p>
                        <div class="cal-icon d-flex align-items-center">
                            <div class="green-dot mx-2"></div>
                            <span>還有數量</span>
                            <div class="red-dot mx-2"></div>
                            <span>即將額滿</span>
                        </div>

                    </div>
                    <div class="month d-flex justify-content-between">
                        <div class="arrow">
                            <img src="/Petliday/icon/left-orange.png" alt="">
                        </div>
                        <p class="cal-title fw-5">12月2020年</p>
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
                <div class="select-right col-md col-sm-12">
                    <div class="select-amount">
                        <p class="t-l">選擇數量</p>
                    </div>
                    <!-- 彭版加減數量 start *****************************-->
                    <!-- <div class="select-brother justify-content-between my-4">
                        <div class="select-man d-flex align-items-center">
                            <label for="">人數</label>
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
                            <label for="">寵物</label>
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
                    </div> -->
                    <!-- 彭版加減數量 end *****************************-->

                    <!-- ㄩㄐ版加減數量 start *****************************-->
                    <div class="change-box">
                        <div class="man-box all-box">
                            <p class="pl-2 pb-2">人數</p>
                            <div class="change-man d-flex align-items-center" data-price="<?= $rows['price_man'] ?>">
                                <div class="change-btn sub-btn">
                                    <svg id="sub-man" class="sub-man" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 5.1">
                                        <path data-name="Path 86" d="M32.23,0H2.61a2.55,2.55,0,1,0-.12,5.1H32.23A2.55,2.55,0,0,0,32.35,0Z" /></svg>
                                </div>
                                <input type="text" placeholder="1" value="" name="man-quantity" id="man-quantity" class="change-quantity"></input>
                                <div class="change-btn add-btn">
                                    <svg id="add-man" class="add-man" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 34.73">
                                        <path d="M32.23,14.75H20V2.49a2.55,2.55,0,0,0-5.1,0V14.75H2.61a2.55,2.55,0,0,0-.12,5.1H14.87V32.11a2.55,2.55,0,1,0,5.1.13V19.85H32.23a2.55,2.55,0,0,0,.12-5.1Z" /></svg></div>
                            </div>
                        </div>
                        <div class="pet-box all-box">
                            <p class="pl-2 pb-2">寵物</p>
                            <div class="change-pet d-flex align-items-center" data-price="<?= $rows['price_pet'] ?>">
                                <div class="change-btn subtr-btn">
                                    <svg id="sub-pet" class="sub-pet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 5.1">
                                        <path data-name="Path 86" d="M32.23,0H2.61a2.55,2.55,0,1,0-.12,5.1H32.23A2.55,2.55,0,0,0,32.35,0Z" /></svg>
                                </div>
                                <input type="text" placeholder="1" value="" name="pet-quantity" id="pet-quantity" class="change-quantity"></input>
                                <div class="change-btn add-btn">
                                    <svg id="add-pet" class="add-pet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.84 34.73">
                                        <path d="M32.23,14.75H20V2.49a2.55,2.55,0,0,0-5.1,0V14.75H2.61a2.55,2.55,0,0,0-.12,5.1H14.87V32.11a2.55,2.55,0,1,0,5.1.13V19.85H32.23a2.55,2.55,0,0,0,.12-5.1Z" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ㄩㄐ版加減數量 end *****************************-->
                    <div class="select-middle d-flex align-items-end justify-content-between">
                        <div class="select-term">
                            <ul class="m-0">
                                <li>成團7日前免費取消</li>
                                <li>歡迎使用優惠券</li>
                                <li>現場請出示電子憑證</li>
                            </ul>
                        </div>
                        <div class="select-price">
                            <span>總金額</span>
                            <p class="t-xxl danger-color"></p>
                        </div>
                    </div>
                    <div class="btn-twin d-flex justify-content-between">
                        <a class="btn ml-0 add-cart-btn">加入購物車</a>
                        <a class="btn mr-0">立即預訂</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 出血狗狗背景圖 -->
    <div id="trip-section" class="product w-100">
        <div id="day1" class="bg-dog">
            <div class="container">
                <div class="row cate-fix">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                        <button type="button" class="btn-cate bc1 btn-cate-left pl-4">行程介紹</button>
                        <button type="button" class="btn-cate bc2">行前準備</button>
                        <button type="button" class="btn-cate bc3">注意事項</button>
                        <button type="button" class="btn-cate bc4">取消政策</button>
                        <button type="button" class="btn-cate bc5">行程評價</button>
                        <button type="button" class="btn-cate bc6
                        btn-cate-right pr-4">推薦行程</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid day123-fix">
                <div class="day123">
                    <a class="day1" href="#day1">第1天</a>
                    <a class="day2" href="#day2">第2天</a>
                    <a class="day3" href="#day3">第3天</a>
                </div>
                <div class="line">
                </div>
                <div class="end-dot"></div>
            </div>
            <div class="container main-c">
                <div class="topic topic-intro">
                    <p>行程介紹</p>
                    <p class="topic-line"></p>
                </div>
                <div class="day-text-all">
                    <a href="#page1" class="hide-mb" data-transition="slideup">查看完整行程</a>
                    <p class="day-text">第一天：台東熱氣球嘉年華 & 波希米亞露營野餐派對</p>
                    <p class="mt-4 mb-1">09:00 - 09:30 台北火車站(北二門)集合，搭乘專屬Petliday巴士出發</p>
                    <p class="mb-1">16:00 - 18:00 鹿野熱氣球嘉年華，看展球和繫留搭乘</p>
                    <p class="mb-1">19:00 - 24:00 夜宿波希米亞露營區</p>
                </div>
                <div class="item1">
                    <div class="pic520"><img src="/Petliday/products/img/pd1.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>夏日遊台東，一定要到鹿野鄉欣賞熱氣球之美。</p>
                        <p>熱氣球的時間為早晨與傍晚兩個階段。</p>
                        <p>天氣好的話，還可以看到熱氣球起飛或親自搭乘。</p>
                        <p>與寵物來場愜意之旅，看著各式各樣的氣球飛上藍天。</p>
                        <p>相機準備好，絕對是殺底片的好地方！</p>
                    </div>
                </div>
                <div class="item2">
                    <div class="pic420"><img src="/Petliday/products/img/pd2.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>想在大自然入眠？就入住台東「波希米亞露營區」</p>
                        <p>猶如置身北歐的異國風情，絕對是遠離塵囂好去處！</p>
                        <p>適合與三五好友帶著寵物來野餐、伴隨蟲鳴鳥叫入夢鄉。</p>
                    </div>
                </div>
                <div class="item3 pb-5">
                    <div class="pic580"><img src="/Petliday/products/img/pd3.jpg" alt=""></div>
                    <div id="day2" class="item-intro">
                        <p>露營區每週都有不同的主題派對及音樂饗宴，</p>
                        <p>可以認識不同的狗友，一起玩樂談心數星星。</p>
                        <p>此外，也會替寵物們準備豐盛的晚餐，野餐派對玩起來！</p>
                    </div>
                </div>
                <!-- 第二天 -->
                <div class="day-text-all">
                    <a href="/Petliday/products/pro-pg-mb.php" class="hide-mb" data-transition="slideup">查看完整行程</a>
                    <p class="day-text">第二天：台東都歷部落原鄉體驗 & 都歷海灘SUP探險</p>
                    <p class="mt-4 mb-1">08:00 - 09:00 在波希米亞露營區用完早餐，出發到都歷部落</p>
                    <p class="mb-1">10:00 - 13:00 都歷部落農村體驗（附午餐）</p>
                    <p class="mb-1">14:00 - 16:00 都歷海灘SUP探險</p>
                    <p class="mb-1">18:00 - 24:00 夜宿花蓮加賀屋溫泉會館</p>
                </div>
                <div class="item4">
                    <div class="pic420"><img src="/Petliday/products/img/pd4.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>一起走入台東部落，親自體驗原鄉的文化與日常。</p>
                        <p>位於台東縣成功鎮「都歷部落」，同樣是阿美族部落，</p>
                        <p>而都歷Torik在阿美族語中，意指將物品固定或有編織之意。</p>
                        <p>部落最具特色的便是月桃文化，</p>
                        <p>月桃樹的各部位可以拿來做成涼席、提籃等編織物。</p>
                        <p>主人可以帶著寵物先體驗採集農作物當午餐的材料，</p>
                        <p>在等待午餐的空檔，大家也可以DIY月桃的編織物當紀念品。</p>
                    </div>
                </div>
                <div class="item5">
                    <div class="pic580"><img src="/Petliday/products/img/pd5.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>「自己的午餐，自己備料！」</p>
                        <p>主人可以帶著寵物採集各自午餐的食材。</p>
                        <p>部落會幫大家客製化餐點，從中搭配桃花醬與月桃草鹽調味，</p>
                        <p>嘗試部落美食的特色風味！採集的過程，</p>
                        <p>也會有互動的趣味遊戲，是主人與寵物的默契大考驗！</p>
                    </div>
                </div>
                <div class="item6">
                    <div class="pic420"><img src="/Petliday/products/img/pd6.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>除了認識原鄉的生活與文化，</p>
                        <p>絕對不能錯過的就是走進都歷部落的「扎拉匝海沙灘」，</p>
                        <p>特別的是每個沙灘、海灣甚至礁岩，都有自己的名字喔！</p>
                        <p>這次安排部落族人帶領大家體驗SUP(Stand Up Paddle)立槳衝浪 </p>
                        <p>結合衝浪和帆船滑行原理的板類運動，可以站坐在板子上，</p>
                        <p>簡單易學，是近年來國內外非常流行的水上運動之一。</p>
                    </div>
                </div>
                <div class="item7 pb-5">
                    <div class="pic520"><img src="/Petliday/products/img/pd7.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>「走吧，去海邊！」海邊踏浪、玩水，是夏日出遊的必要行程之一，</p>
                        <p>更不能錯過帶著毛孩來場SUP的探險。經過專業教練的指導，</p>
                        <p>可以在寬闊無際的大海中盡情航行。不僅是主人玩得開心，</p>
                        <p id="day3">連寵物都可以共同待在衝浪板上享樂！如果玩累了，也很適合在岸邊泡著水，</p>
                        <p>享受藍色包覆的安定感。千萬別忘了替毛孩拍一張網美照唷！</p>
                    </div>
                </div>
                <!-- 第三天 -->
                <div class="day-text-all">
                    <a href="/Petliday/products/pro-pg-mb.php" class="hide-mb" data-transition="slideup">查看完整行程</a>
                    <p class="day-text">第三天：六十石山金針花海 & 瑞穗農場大地遊戲</p>
                    <p class="mt-4 mb-1">09:00 - 09:30 加賀屋溫泉會館用完早餐，出發</p>
                    <p class="mb-1">09:30 - 10:30 六十石山金針花海</p>
                    <p class="mb-1">11:30 - 14:00 瑞穗農場踏青+大地遊戲（附餐券）</p>
                    <p class="mb-1">14:00 - 18:30 回程，返抵出發地（晚餐附餐盒）</p>
                </div>
                <div class="item8">
                    <div class="pic580"><img src="/Petliday/products/img/pd8.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>花東網美必訪的拍照景點！</p>
                        <p>六十石山位在富里鄉竹田村東側海拔約800公尺的海岸山脈上，</p>
                        <p>經過一段蜿蜒的山路後，眼前出現無邊無際的田野景致，</p>
                        <p>是每年8月至9月賞金針花海的好去處。</p>
                        <p>花田旁邊有設計小路可以走，也不用怕毛孩會隨意踩踏到金針花。</p>
                        <p>快帶家裡的毛孩來當小網美、走伸展台吧！</p>
                    </div>
                </div>
                <div class="item9">
                    <div class="pic420"><img src="/Petliday/products/img/pd9.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>「瑞穗牧場」靠著源自中央山脈的潔淨水源灌溉，</p>
                        <p>種植出一片油亮碧綠的鮮美牧草，</p>
                        <p>飼養著300多頭壯碩健康的荷蘭品種乳牛。</p>
                        <p>午餐時間會發送餐券，建議可以嚐嚐鮮奶饅頭和乳製品等，</p>
                        <p>農場也設有紀念品販售部，替毛孩添加飾品衣物，也可以買些特色商品送親朋好友喔！</p>
                    </div>
                </div>
                <div class="item10">
                    <div class="pic520"><img src="/Petliday/products/img/pd10.jpg" alt=""></div>
                    <div class="item-intro">
                        <p>有在農場與寵物們一起玩大地遊戲的經驗嗎？</p>
                        <p>除了乳牛在草原散步、鴕鳥在旁奔跑，在場的我們熱情也不能少啊。</p>
                        <p>毛孩與爸媽準備好了嗎？準備來場難忘的冒險旅程吧！</p>
                        <p>遊戲時間約1小時，拍完大合照，就可以帶著寵物們自由活動。</p>
                        <p>三天的旅程即將劃下句點，期望大家帶著滿滿的收穫回家囉！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 資訊條款三排區 -->
    <div id="prepare-section" class="white-bg">
        <div class="container">
            <div id="intention-section" class="term t1 w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>行前準備</p>
                        <p class="topic-line-gray"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text w-100">
                    <ul class="mt-2">
                        <li>牽繩＋胸背或胸背帶。</li>
                        <li>推車：搭車時段統一放置於遊覽車行李箱區。</li>
                        <li> 毛孩搭車準備物品：
                        </li>
                        <li>1.可悠閒坐或趴在座位►請麻拔準備椅套或大毛巾墊在位子上，寵愛毛孩本團備有毛孩專用車用安全帶需扣上。</li>
                        <li> 2.撒嬌汪：愛抱抱►請鏟屎官記得下車前要舒緩一下，免得腳麻無法下車。
                        <li>3.安全汪：習慣於提籠裡►請自備外出籠放於座位上或寶貝座位前方地上。
                        </li>
                    </ul>
                    <ul class="hidden">
                        <li>最愛的玩具、零食 ► 可安定毛孩情緒。
                        </li>
                        <li>毛孩外出壺(隨行杯、折疊碗)
                        </li>
                        <li>隨身用拾便袋、尿布 ► 麻拔需自行清理毛孩便便，尿尿如非於草地上敬請使用尿布吸收避免產生異味。
                        </li>
                        <li>請各位拔麻務必遵守牽繩及清理毛孩便便尿尿，維護寵物友善環境，才會有更多的寵物友善資源喔
                        </li>
                        <li>毛孩的食物：攜帶毛孩平時使用的食碗和食物（飼料或濕食），較能降低因在陌生環境而不願進食，或水土不服的狀況發生。
                        </li>
                        <li>飲水：如果能帶著毛孩平常使用的水碗最好。因夏天暑熱，隨時給毛孩補充水分，注意水質的乾淨，並避免在大太陽下曝曬過久，以免脫水中暑。
                        </li>
                        <li>胸背帶、牽繩及名牌：出門在外最怕毛孩因好奇心、興奮等各種原因導致行為失控、暴衝，而許多突發狀況也都是在一瞬間發生的。牽繩除了能看緊毛孩，同時也是對其他遊客的一種禮貌；名牌可掛在項圈上，上頭應有毛孩名、飼主姓名及聯絡方式。
                        </li>
                        <li>禮貌帶／尿布墊：狗狗的地域性很強，只要一到陌生的環境就一定要抬起腳來做記號；尤其是過夜旅遊，若放任狗狗在隨地亂小便，不僅難清理，也非常不尊重民宿主人。
                        </li>
                        <li>藥品：出遊前請至動物醫院找獸醫開藥，如暈車藥、腸胃藥、外傷藥、消毒水、繃帶等簡單急救包，以備不時之需；同時將旅遊當地的動物醫院資料記錄下來並隨身帶著。
                        </li>
                        <li>毛孩的「床」：過夜旅遊最擔心有些毛孩會因為「認床」產生焦慮感，而嗚咽不停。可以帶著毛孩常用的鋪墊或毯子，或是考慮購買一個可攜帶式的寵物床給牠，讓毛孩出門在外也能有在家的安全感。
                        </li>
                    </ul>
                </div>
            </div>
            <div id="cancel-section" class="term t2 w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>注意事項</p>
                        <p class="topic-line-gray"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text w-100">
                    <ul class="mt-2">
                        <li>尚未結紮之男寳寶：尊重同行女寶寶請穿禮貌帶或尿布。
                        </li>
                        <li>發情中男女寶寶：禁止進入泳池區。
                        </li>
                        <li>每車須達16人以上方可成團（最晚於行程出發前七日，客服人員會告知確認是否成團）。
                        </li>
                        <li>需用素食者請於報名時先告知。
                        </li>
                        <li>車位編排依報到當日，旅客報到之先後順序，排隊劃位。
                        </li>
                        <li>行程出發前二日另行傳真或電話通知相關注意事項。
                        </li>
                    </ul>
                    <ul class="hidden">
                        <li>請於規定時間內準時集合，報名時登記的手機請開機，以免領隊聯絡不到客人，無法上車。
                        </li>
                        <li>遊覽車為密閉空間，請勿攜帶危險物品上車，以免影響遊客安全。
                        </li>
                        <li>行程中如旅客因個人因素私自脫隊，集合不到，本公司不予退費。
                        </li>
                        <li>本行程所載明之車行時間僅供參考，因路況或遇假日遊客眾多，行程順序將視情況前後更動。
                        </li>
                        <li>敬請自備防寒衣物及雨具，個人慣用隨身藥品：如暈車藥、感冒藥、防蚊蟲液等。
                        </li>
                        <li>由於遊覽車上屬密閉式空間，為了您與其他旅客的健康，若有感冒咳嗽等症狀之旅客請記得戴上口罩喔！
                        </li>
                        <li>本行程團費費用包含之項目如有不使用者，視同放棄，恕不另行退款。</li>
                    </ul>
                </div>
            </div>
            <div class="term t3 w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>取消政策</p>
                        <p class="topic-line-gray"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text w-100">
                    <ul class="mt-2">
                        <li>報名後因故不能參加活動時，請儘早來電告知
                        </li>
                        <li>取消手續費規定：
                        </li>
                        <li>出發前31天以上取消：總費用的10%；
                        </li>
                        <li>出發前21-30天取消：總費用的50%；
                        </li>
                        <li>出發前8-20天取消：總費用之75%；
                        </li>
                        <li id="rate-section">出發前7天內取消：全額費用。
                        </li>
                    </ul>
                    <ul class="hidden">
                        <li>若旅程中無法參加使用內含之活動、餐費、入場費、住房等，所繳費用恕不退費。
                        </li>
                        <li>報名訂單需經客服人員確認回覆後始可生效，並視同雙方同意簽署國內旅遊定型化契約書，敬請詳閱該契約書內容。
                        </li>
                        <li>線上預約並非保證訂位成功，仍需以客服人員回覆確認為準。
                        </li>
                        <li>旅客同意，本商品經訂購付款後，如要取消或延期所衍生之費用需自行負責。
                        </li>
                        <li>如遇颱風、地震、豪雨等大自然不可抗拒之因素，本公司保有延期出發或全額退費之權利。
                        </li>
                        <li>取消規定：本公司作業均遵依照觀光局相關規定，與旅客簽署旅遊契約書，詳細取消規訂請參閱《國內旅遊定型化契約書》。
                        </li>
                        <li>通知日需以人事行政局公告之正常上班時間為依準，超過時間以下個工作日計算，敬請見諒。</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="topic-wrap">
                <div class="topic">
                    <p id="rate-area">行程評價</p>
                    <p class="topic-line"></p>
                </div>
            </div>
            <a class="hide-rate-mb" data-transition="slideup">查看完整評價</a>
        </div>
        <div class="container rate-container pt-0">
            <div class="rate-scroll pb-5 position-relative">
                <div class="row">
                    <div class="rate-card c1">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar1.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs">愛莉師</p>
                            <p class="rate-title t-m mb-2">台東熱氣球嘉年華</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">很幸運的看到起飛的景象，超級美的</p>
                            <p class="t-s mb-1">狂拍照留念，第一站就佔了很多手機記憶體耶</p>
                            <p class="t-s mb-1">明年想要再帶我們家的小可愛來看！</p>
                        </div>
                    </div>
                    <div class="rate-card c2">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar2.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">John</p>
                            <p class="rate-title t-m mb-2">露營區很棒</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">可以跟三五好友帶著寵物來露營，真的是很棒的體驗</p>
                            <p class="t-s mb-1">營區還有特別準備寵物的食材，非常貼心！</p>
                        </div>
                    </div>
                    <div class="rate-card c3">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar3.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-2">Lily Alien</p>
                            <p class="rate-title t-m mb-2">六十石山金針花海</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">有非常充裕的時間可以在這裡狂殺底片</p>
                            <p class="t-s mb-1">這裡實在太美了！</p>
                            <p class="t-s mb-1">我跟我們家的寵物也陷入網美的世界了 (害羞)</p>
                        </div>
                    </div>
                    <div class="rate-card c4">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar4.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">蝦哩</p>
                            <p class="rate-title t-m mb-2">三天兩夜玩得超開心</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">旅行社真的太貼心了，行程充裕不緊湊。</p>
                            <p class="t-s mb-1">跟自己的寵物體驗上山下海的行程很難得！</p>
                            <p class="t-s mb-1">在這裡認識好多狗友們，開心 :)</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="rate-card c5">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar5.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">木瓜人</p>
                            <p class="rate-title t-m mb-2">都歷海灘SUP</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">之前在網路上看到別人分享和狗狗一起衝浪的體驗</p>
                            <p class="t-s mb-1">想不到今天我實現了！！！</p>
                            <p class="t-s mb-1">而且有專業教練的帶領，可以非常安心的盡興玩樂！</p>
                        </div>
                    </div>
                    <div class="rate-card c6">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar6.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">Tom Cat</p>
                            <p class="rate-title t-m mb-2">住宿與食物</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">旅行社選的住宿景點，對寵物都是非常的友善</p>
                            <p class="t-s mb-1">食物也會精心準備，完全不馬虎耶！吃得超開心</p>
                            <p class="t-s mb-1">CP值超級高的行程，推推</p>
                        </div>
                    </div>
                    <div class="rate-card c7">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar7.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-2">柏拉圖</p>
                            <p class="rate-title t-m mb-2">值得體驗的行程</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">浮潛真的太棒了，海底的珊瑚礁非常漂亮！</p>
                            <p class="t-s mb-1">天氣超熱，遊覽車絕對非常適合</p>
                            <p class="t-s mb-1">搭中巴環七美島，司機時間抓的很充裕，也都會解說</p>
                        </div>
                    </div>
                    <div class="rate-card c8">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar8.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">Silver Gray</p>
                            <p class="rate-title t-m mb-2">cp值頗高的單日旅遊</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">我們這團才6人，所以旅遊品質超棒的啦！</p>
                            <p class="t-s mb-1">小烏來風景區可以從玻璃天空步道欣賞壯闊的瀑布景觀</p>
                            <p class="t-s mb-1">導遊大哥一路上很細心為我們解說，體貼友善</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="rate-card c9">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar9.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">比利獸</p>
                            <p class="rate-title t-m mb-2">免裝備豪華露營</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">第一次體會豪華露營，真的很不錯，營區環境很舒服</p>
                            <p class="t-s mb-1">暖東峽谷步道整理的很好，很適合全家大小一起去散步</p>
                            <p class="t-s mb-1">餐食很用心，吃的很豐盛，有機會會再去住一晚。</p>
                        </div>
                    </div>
                    <div class="rate-card c10">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar10.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">Pitty Girl</p>
                            <p class="rate-title t-m mb-2">風景優美</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">自備食材。環境乾淨舒適。 很棒的懶人露營</p>
                            <p class="t-s mb-1">提供的備品也都很齊全、設想周到 會推薦朋友來
                            </p>
                        </div>
                    </div>
                    <div class="rate-card c11">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar11.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-2">阿蓉</p>
                            <p class="rate-title t-m mb-2">汪汪地瓜園控窯</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">非常愉快的控窯體驗，食材非常的充足</p>
                            <p class="t-s mb-1">導覽哥哥講解的很生動，朋友都非常踴躍發言</p>
                            <p class="t-s mb-1">謝謝店家的用心讓我們渡過了愉快的週末！</p>
                        </div>
                    </div>
                    <div class="rate-card c12">
                        <div class="rate-l m-3"><img src="/Petliday/products/img/avatar12.jpg" alt="">
                        </div>
                        <div class="rate-r m-2">
                            <p class="rate-name t-xs mt-3">迷唇妹</p>
                            <p class="rate-title t-m mb-2">麻雀雖小，五臟俱全</p>
                            <div class="star d-flex mb-3">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                                <img src="/petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="t-s mb-1">食材豐盛好吃，環境乾淨舒適。</p>
                            <p class="t-s mb-1">店家細心解說流程，還預備了許多孩子能參與的活動</p>
                            <p class="t-s mb-1">環境非常好，腹地廣大，很適合帶毛孩一起去玩樂</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="topic-wrap">
                <div class="topic">
                    <p id="recommand-section">推薦行程</p>
                    <p class="topic-line"></p>
                </div>
            </div>
        </div>
        <!-- 3個一排card -->
        <div class="container p-0">
            <div class="row align-items-center w-100">
                <div class="card c3 col-md m-3 p-0">
                    <div class="card-pic w-100">
                        <img src="/Petliday/products/img/reco1.jpg" alt="">
                    </div>
                    <div class="card-text pt-3 pb-1 px-4">
                        <p>寵物陪你血拼到手軟｜桃園華泰名品城 & 春天農場一日遊</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="info-left d-flex align-items-center">
                                <div class="star mr-2">
                                    <img src="/petliday/icon/star-green-fill.png" alt="">
                                </div>
                                <div class="rate text-gray t-m">4.8</div>
                                <div class="rate-all t-xs ml-2"><u class="text-gray">121則評論</u></div>
                            </div>
                            <div class="info-right pr-2 t-l orange-color">$1680</div>
                        </div>
                    </div>
                    <p class="card-info px-4 t-xs">
                        帶你探索華泰名品城的各式生活主題，與毛孩也能輕鬆愉悅地享受購物樂趣。
                    </p>
                </div>
                <div class="card c3 col-md col-sm-12 m-3 p-0">
                    <div class="card-pic w-100">
                        <img src="/Petliday/products/img/reco2.jpg" alt="">
                    </div>
                    <div class="card-text pt-3 pb-1 px-4">
                        <p>你就是寵物的大廚｜寵物鮮食烹飪 & 營養知識教學課程</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="info-left d-flex align-items-center">
                                <div class="star mr-2">
                                    <img src="/petliday/icon/star-green-fill.png" alt="">
                                </div>
                                <div class="rate text-gray t-m">4.9</div>
                                <div class="rate-all t-xs ml-2"><u class="text-gray">66則評論</u></div>
                            </div>
                            <div class="info-right pr-2 t-l orange-color">$1280</div>
                        </div>
                    </div>
                    <p class="card-info px-4 t-xs">
                        透過營養師協助規劃後的鮮食，幫助飼主在家也能輕鬆備餐，寶貝天天吃得健康美味又營養
                    </p>
                </div>
                <div class="card c3 col-md col-sm-12 m-3 p-0">
                    <div class="card-pic w-100">
                        <img src="/Petliday/products/img/reco3.jpg" alt="">
                    </div>
                    <div class="card-text pt-3 pb-1 px-4">
                        <p>手牽狗去散步｜墾丁龍磐公園 & 小巴里島岩三日遊</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="info-left d-flex align-items-center">
                                <div class="star mr-2">
                                    <img src="/petliday/icon/star-green-fill.png" alt="">
                                </div>
                                <div class="rate text-gray t-m">4.7</div>
                                <div class="rate-all t-xs ml-2"><u class="text-gray">49則評論</u></div>
                            </div>
                            <div class="info-right pr-2 t-l orange-color">$2680</div>
                        </div>
                    </div>
                    <p class="card-info px-4 t-xs">
                        放假來屏東三日遊玩，屏東有哪些好玩的地方，來趟屏東輕旅行感受一下在地的自然風光。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- white-bg -->
    <!-- <div class="scroll-top">
        <img src="/Petliday/icon/up.png" alt="">
    </div> -->

</main>

<!-- </?php include __DIR__ . '/../userlogin/user-login.php' ?> -->
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<script>
    const title = document.getElementById('title')
    const data = document.getElementById('data')

    const now = new Date()

    const nowY = now.getFullYear()
    const nowM = now.getMonth() + 1

    const weekList = ['日', '一', '二', '三', '四', '五', '六']

    for (let i = 0; i < weekList.length; i++) {
        title.innerHTML += `<th class="fw-5">${weekList[i]}</th>`
    }

    const days = new Date(2020, 12, 0).getDate()

    const weekdayFirst = new Date('2020/12/1').getDay()

    console.log(days, weekdayFirst)

    const numberOfMember = days + weekdayFirst

    const dataTemp = []

    for (let i = 0; i < numberOfMember; i++) {
        if (i < weekdayFirst) {
            dataTemp.push('')
        } else {
            dataTemp.push(i - weekdayFirst + 1)
        }
    }
    console.log(dataTemp)

    let dataDisplay = '<tr>'

    for (let i = 0; i < dataTemp.length; i++) {
        // dataDisplay += `<td><p>${dataTemp[i]}</p><p class="green-color t-m">2280</p></td>`
        // dataDisplay += `<td><p>${dataTemp[i]}</p>`

        // ((i + 3) % 7 === 0|| (i + 4) % 7 === 0 || (i + 5) % 7 === 0 || (i + 6) % 7 === 0||(i) % 7 === 0)
        if ((i + 2) % 13 === 0 || (i + 5) % 10 === 0) {
            dataDisplay += `<td><p class="danger-color fw-5">${dataTemp[i]}</p><p class="danger-color"><?= $rows['price_all'] ?></p></td>`
        } else if ((i + 3) % 11 === 0) {
            dataDisplay += `<td style="pointer-events:none"><p class="text-gray fw-5">${dataTemp[i]}</p><p class="text-gray t-xs">已額滿</p></td>`
        } else if ((i + 1) % 7 === 0) {
            dataDisplay += `<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color"><?= $rows['price_all'] + 500 ?></p></td>`
            dataDisplay += '</tr><tr>'
        } else if (i == 0 || i == 1) {
            dataDisplay += `<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color"></p></td>`
        } else {
            dataDisplay += `<td><p class="fw-5">${dataTemp[i]}</p><p class="green-color"><?= $rows['price_all'] ?></p></td>`
        }
    }
    data.innerHTML = dataDisplay

    //測試取得點擊的日期值
    // $('.calendar td').on('click', function() {
    //     $('#data').find('td').css('background-color', '#fff');
    //     $(this).css('background-color', '#ffc072');
    //     // console.log('this.val()',td.innerHTML);
    //     console.log('date', $(this).children('p').html());
    // })
</script>

<!-- ------JS開始 以上誤刪------- -->
<!-- <script src="/petliday/products/calendar.js"></script> -->

<script src="/petliday/products/pro-pg.js"></script>
<!-- // ------JS結束 誤刪到------- -->

<?php include __DIR__ . '/../parts/html-foot.php' ?>