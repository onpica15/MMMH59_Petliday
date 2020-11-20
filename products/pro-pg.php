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
    <div class="container-fluid">
        <div class="bg-dog">
            <div class="row cate-fix">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                </div>
            </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 4783.92" width="1920px">
                <path class="cls-3" d="M152.69,1082.56c78.27,20.23,136.93,35.67,211.63-33S695.93,893.79,959.68,934.45c320.56,49.42,411.56,200.43,454.23,270.7S1484,1315,1599.45,1307.45s132.72-46.07,122-95.16c-7.56-34.75-37.22-64.86-96.59-78-66-14.62-62.08-127.56-69.42-207.76C1540.61,764,1414,597,1414,597c38.91,13.81,107.6,50.13,230.37,14,137.63-40.56,154.82-138.32,159.84-196s-23.77-74.79-74.2-63c-61.55,14.43-153.32-25.94-179.47-105.42-36-109.33-89.41-107.22-119.22-133-20.31-17.58-23.85-41.41-10-74S1391.06-31.16,1333.8,42c-47.15,60.25-8.34,80.3-47.15,112.64-31.43,26.19-87.11,71.18-108.26,157.77-30.57,125.13-44.72,79.85-163.07,42.2-172.89-55-440.6-75.28-659.51,75.23a727.35,727.35,0,0,0-86.72,70.34L266.91,498c-82.06-79.88-28.62-145.63-41.3-249-10.2-83.16-59.91-147.09-100.5-91.8s32.12,139.37,32.12,139.37S104.06,249,91.75,316.61C80.7,377.33,150,414.28,150,414.28S92.18,388.27,89.9,443c-1.56,37.35,50.46,108.15,97.23,146C74.74,728.06,17.31,876.18,11.59,903.13c-2.76,13-6.68,23.35-11.59,31.64v166.91C32.91,1076.2,83.09,1064.58,152.69,1082.56Z" />
                <path class="cls-3" d="M33.8,4783.72c74.82-3.77,86.73-.71,146-3.53,60.06-2.86,76.3-14,74.36-55.78-1.64-35.25-25.1-58.15-105-72.12-36-6.3-47.4-89,87.41-139.34,136.45-51,1002.57-28.9,1121.42,13.55,140.2,50.07,172.51,173.39,182.17,213s63,34.67,110.11,32.95c47.86-1.73,126.89,8.7,140.31-31.91,14.13-42.76-18.29-95.1-97.17-94.75-46.74.21-67.08-30.23-62.47-70,8-68.82,12.75-192.74-1.11-259.36-20.45-98.31-95.08-155.73-95.08-155.73,36.9,8.57,86.3,5,153.92-8.77,65.23-13.31,138.24-43.13,156.62-122.33,9.63-41.49,8-107.94-71.7-104.49s-133.19-16.24-147.84-64.49c-11.19-36.85-14.68-76.94-64.39-109.22s-116.12-52.5-196.16,3.18c-55.87,38.87-70,43.14-124.77,33.79-72.7-12.41-101.63-9-129.43,31.92-56.42,83,87.26,124.8,156,61.71,0,0-46.64,90.35-156.1,91.84-239.31,3.27-657.7-3-804.78,20.84-84.7,13.72-181.5,33.1-263.67,79.14a202.39,202.39,0,0,1,5-59.18c9.42-40.69,30.95-80.38,61.39-112.79a260.79,260.79,0,0,1,51.89-42.7,258,258,0,0,1,62.4-28.34l.25-.08a20.22,20.22,0,0,0-8.51-39.4A305.49,305.49,0,0,0,137,3812.57a319.65,319.65,0,0,0-70.92,41.3A329.2,329.2,0,0,0,6.9,3912.72c-2.36,3-4.65,6.1-6.9,9.2V4781C9.4,4783.36,20.58,4784.38,33.8,4783.72Z" />
                <path class="cls-3" d="M1907.33,2353.12a47.08,47.08,0,0,0-.4-7l-.84-6.4a339.9,339.9,0,0,0-7.49-39.4c-3.08-12.34-6.71-24-10.6-35.4s-8.11-22.37-12.54-33.14-9-21.37-13.87-31.74c-9.58-20.8-19.94-41-30.88-60.76s-22.48-39.23-34.84-58.28c-3-4.83-6.36-9.4-9.27-14.33a89.81,89.81,0,0,1-7.22-16.11c-4-11.53-6-25.15-9.38-38.35-.39-1.67-.9-3.26-1.36-4.89l-.72-2.44-.78-2.4a93.17,93.17,0,0,0-3.65-9.26,82.23,82.23,0,0,0-4.51-8.63,73.77,73.77,0,0,0-5.44-7.9,272.43,272.43,0,0,0-26.62-28.05,248.34,248.34,0,0,0-31.86-24.75,217.72,217.72,0,0,0-37.9-19.77,181.49,181.49,0,0,0-44.29-11.68c-15.7-2-32.31-2-48.54,1.44a60.83,60.83,0,0,0-11.3,115.46l18,7.7c5.46,2.33,10.64,4.12,16.24,6.25l1,.36c.36.15.71.31,1.07.45l2.14.81c1.45.55,2.92,1.21,4.4,1.73,1.5.7,3,1.21,4.55,1.9s3.1,1.25,4.7,2a408,408,0,0,1,42,21.62c7.5,4.37,15.14,9.14,23,14.11,2,1.19,4.15,2.25,6.37,3.3s4.62,1.91,7.06,2.81,5.08,1.62,7.71,2.41l2,.57,2.07.52,4.18,1.06c11.31,2.76,23.44,5.64,33,11.07a55.67,55.67,0,0,1,12.74,9.62c.91.93,1.8,1.87,2.64,2.86s1.62,2,2.44,3c1.62,2,3.24,4,4.82,6.1a375.94,375.94,0,0,1,33.92,52.26,346.62,346.62,0,0,1,24.45,57.06,294.65,294.65,0,0,1,7.84,29.65c1.39,6.83,2.5,13.67,3.28,20.48-65-41.2-141-45-219.58-36.36-171.76,18.82-230,54.85-565.33-67.94-141.45-51.8-235-106.36-158.51-128,132.61-37.5,149-51.48,144.26-92.13-6.27-53.74-250.72-206.67-292.75-269.21C710.37,1642,683,1574.74,593.5,1565.79c-104.88-10.49-136.38,52.86-188.19,124.61S262.84,1769.48,202,1774.1c-81.22,6.16-129.71,113.55-23.91,179.35,108.16,67.26,214.88,9.64,280.28,31.44,152.07,50.69-29.06,94.46-12.11,290.64,18.22,210.82,48.4,367.91,143.47,570.45s12.4,268.68,20.67,359.61c6.09,67,208.63,134.76,247.46,106.8,34.56-24.88-55.07-131.26-43-158.3,8.4-18.91,24.88-15,36.12-3.22,34.11,35.87,45.8,148.52,84.92,178.84,56.23,43.58,290.67,26.06,280-50.88-14.59-105.15-397.47-500.32-175-478.28,343.51,34,488.78-30.35,552.11-19.55,238.78,40.7,0,476.71,226.07,498.31,30.63,2.92,64.83,7.91,100.9,13.45V2374.08Q1913.82,2363.1,1907.33,2353.12Z" />
                </g>
                </g></svg> -->

        </div>
    </div>
    <div class="container ">

    </div>
</main>

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/parts/html-script.php' ?>
<script src="/petliday/products/calendar.js"></script>
<script>
    // ------JS開始 以上誤刪-------



    // ------JS結束 誤刪到-------
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>