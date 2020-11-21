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
                        <button type="button" class="btn-cate">行前準備</button>
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
                    <div class="pic1"><img src="/Petliday/products/img/pd1.jpg" alt=""></div>
                    <div class="intro1">
                        <p>夏日遊台東，一定要到鹿野鄉欣賞熱氣球之美。</p>
                        <p>熱氣球的時間為早晨與傍晚兩個階段。天氣好的話，還可以看到熱氣球起飛或親自搭乘。</p>
                        <p>與寵物來場愜意之旅，看著各式各樣的氣球飛上藍天。相機準備好，絕對是殺底片的好地方！</p>
                    </div>
                </div>
                <div class="row r2">
                    <div class="pic2"><img src="/Petliday/products/img/pd2.jpg" alt=""></div>
                    <div class="intro2">
                        <p>想在大自然入眠？就入住台東「波希米亞露營區」</p>
                        <p>猶如置身北歐的異國風情，絕對是遠離塵囂好去處！</p>
                        <p>適合與三五好友帶著寵物來野餐、伴隨蟲鳴鳥叫入夢鄉。</p>
                    </div>
                </div>
                <div class="row r3">
                    <div class="pic3"><img src="/Petliday/products/img/pd3.jpg" alt=""></div>
                    <div class="intro3">
                        <p>露營區每週都有不同的主題派對及音樂饗宴，</p>
                        <p>可以認識不同的狗友，一起玩樂談心數星星。</p>
                        <p>此外，也會替寵物們準備豐盛的晚餐，野餐派對玩起來！</p>
                    </div>
                </div>
                <!-- 第二天 -->
                <div class="2day-text mt-5">
                    <p class="day-text">第二天：台東都歷部落原鄉體驗+都歷海灘SUP探險</p>
                    <p class="mt-4 mb-1">08:00 - 09:00 在波希米亞露營區用完早餐，出發到都歷部落</p>
                    <p class="mb-1">10:00 - 13:00 都歷部落農村體驗（附午餐）</p>
                    <p class="mb-1">14:00 - 16:00 都歷海灘SUP探險</p>
                    <p class="mb-1">18:00 - 24:00 夜宿花蓮加賀屋溫泉會館</p>
                </div>
                <div class="row r4">
                    <div class="pic4"><img src="/Petliday/products/img/pd4.jpg" alt=""></div>
                    <div class="intro4">
                        <p>一起走入台東部落，親自體驗原鄉的文化與日常。</p>
                        <p>位於台東縣成功鎮「都歷部落」，同樣是阿美族部落，</p>
                        <p>而都歷Torik在阿美族語中，意指將物品固定或有編織之意。</p>
                        <p>部落最具特色的便是月桃文化，</p>
                        <p>月桃樹的各部位可以拿來做成涼席、提籃等編織物。</p>
                        <p>主人可以帶著寵物先體驗採集農作物當午餐的材料，</p>
                        <p>在等待午餐的空檔，大家也可以DIY月桃的編織物當紀念品。</p>
                    </div>
                </div>
                <div class="row r5">
                    <div class="pic5"><img src="/Petliday/products/img/pd5.jpg" alt=""></div>
                    <div class="intro5">
                        <p>「自己的午餐，自己備料！」</p>
                        <p>主人可以帶著寵物採集各自午餐的食材。</p>
                        <p>部落會幫大家客製化餐點，從中搭配桃花醬與月桃草鹽調味，</p>
                        <p>嘗試部落美食的特色風味！採集的過程，</p>
                        <p>也會有互動的趣味遊戲，是主人與寵物的默契大考驗！</p>
                    </div>
                </div>
                <div class="row r6">
                    <div class="pic6"><img src="/Petliday/products/img/pd6.jpg" alt=""></div>
                    <div class="intro6">
                        <p>除了認識原鄉的生活與文化，絕對不能錯過的就是走進都歷部落的「扎拉匝海沙灘」</p>
                        <p>特別的是每個沙灘、海灣甚至礁岩，都有自己的名字喔！</p>
                        <p>這次安排部落族人帶領大家體驗SUP</p>
                        <p>SUP (Stand Up Paddle) 立槳衝浪，結合衝浪和帆船滑行原理的板類運動，</p>
                        <p>可以站坐在板子上，簡單易學，是近年來國內外非常流行的水上運動之一。</p>
                    </div>
                </div>
                <div class="row r7">
                    <div class="pic7"><img src="/Petliday/products/img/pd7.jpg" alt=""></div>
                    <div class="intro7">
                        <p>「走吧，去海邊！」海邊踏浪、玩水，</p>
                        <p>是夏日出遊的必要行程之一，更不能錯過帶著毛孩來場SUP的探險。</p>
                        <p>經過專業教練的指導，可以在寬闊無際的大海中盡情航行。</p>
                        <p>不僅是主人玩得開心，連寵物都可以共同待在衝浪板上享樂！</p>
                        <p>如果玩累了，也很適合在岸邊泡著水，享受藍色包覆的安定感。</p>
                        <p>千萬別忘了替毛孩拍一張網美照唷！</p>
                    </div>
                </div>
                <!-- 第三天 -->
                <div class="3day-text mt-5">
                    <p class="day-text">第三天：六十石山金針花海+瑞穗農場大地遊戲</p>
                    <p class="mt-4 mb-1">09:00 - 09:30 加賀屋溫泉會館用完早餐，出發</p>
                    <p class="mb-1">09:30 - 10:30 六十石山金針花海</p>
                    <p class="mb-1">11:30 - 14:00 瑞穗農場踏青+大地遊戲（附餐券）</p>
                    <p class="mb-1">14:00 - 18:30 回程，返抵出發地（晚餐附餐盒）</p>
                </div>
                <div class="row r8">
                    <div class="pic8"><img src="/Petliday/products/img/pd8.jpg" alt=""></div>
                    <div class="intro8">
                        <p>花東網美必訪的拍照景點！</p>
                        <p>六十石山位在富里鄉竹田村東側海拔約800公尺的海岸山脈上，</p>
                        <p>經過一段蜿蜒的山路後，眼前出現無邊無際的田野景致，</p>
                        <p>是每年8月至9月賞金針花海的好去處。</p>
                        <p>花田旁邊有設計小路可以走，也不用怕毛孩會隨意踩踏到金針花。</p>
                        <p>快帶家裡的毛孩來當小網美、走伸展台吧！</p>
                    </div>
                </div>
                <div class="row r9">
                    <div class="pic9"><img src="/Petliday/products/img/pd9.jpg" alt=""></div>
                    <div class="intro9">
                        <p>「瑞穗牧場」靠著源自中央山脈的潔淨水源灌溉，</p>
                        <p>種植出一片油亮碧綠的鮮美牧草，飼養著300多頭壯碩健康的荷蘭品種乳牛。</p>
                        <p>乳牛平均每天可生產20多公斤的鮮乳量，喝起來非常順口，受到許多遊客的喜愛！</p>
                        <p>午餐時間會發送餐券，建議可以嚐嚐鮮奶饅頭和乳製品等，</p>
                        <p>農場也設有紀念品販售部，替毛孩添加飾品衣物，也可以買些特色商品送親朋好友喔！</p>
                    </div>
                </div>
                <div class="row r10">
                    <div class="pic10"><img src="/Petliday/products/img/pd10.jpg" alt=""></div>
                    <div class="intro10">
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
    <div class="white-bg">
        <div class="container h-100">
            <div class="term w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>行前準備</p>
                        <p class="topic-line"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text">
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
            <div class="term w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>注意事項</p>
                        <p class="topic-line"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text">
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
                </div>
            </div>
            <div class="term w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="topic">
                        <p>取消政策</p>
                        <p class="topic-line"></p>
                    </div>
                    <a>
                        <img src="/Petliday/icon/down.png" alt="">
                    </a>
                </div>
                <div class="row term-text">
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
                        <li>出發前7天內取消：全額費用。

                        </li>
                    </ul>
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

<!-- // ------JS開始 以上誤刪------- -->



<!-- // ------JS結束 誤刪到------- -->

<?php include __DIR__ . '/../parts/html-foot.php' ?>