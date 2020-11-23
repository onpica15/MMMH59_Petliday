<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<link rel="stylesheet" href="pro-list.css">
<?php include __DIR__ . '/../parts/html-navbar.php' ?>

<div class="container-fluid top-pic-con">
    <div class="row top-pic">
        <img src="/petliday/products/img/prolist-top.png" alt="">
    </div>
</div>
<div class="container">
    <div class="row bread-row t-xs">
        <a href="">首頁</a> /
        <a href="">行程列表</a>
    </div>
    <div class="topic">
        <p>熱門行程</p>
        <p class="topic-line"></p>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row hot align-items-center justify-content-center w-100">
        <a class="arrow al mr-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="30px">
                <path class="cls-4" d="M25.12,51.56a3.52,3.52,0,0,1-2.51-1.06L1,28.22a3.5,3.5,0,0,1,0-4.88L22.61,1.06a3.5,3.5,0,0,1,5,4.88L8.38,25.78,27.64,45.62a3.51,3.51,0,0,1-2.52,5.94Z" />
            </svg>
        </a>
        <div class="hot-card">
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
                    <p class="hot-title t-xl">標題標題標題標題標題標標題標題標題標標</p>
                    <p class="hot-info">
                        內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文文內文內文內文
                    </p>
                    <div class="hot-buttom d-flex justify-content-between align-items-center">
                        <div class="hot-buttom-left d-flex">
                            <div class="star">
                                <img src="/Petliday/icon/star-green-fill.png" alt="">
                            </div>
                            <p class="rate t-xl text-gray ml-2">4.8</p>
                            <p class="rate-num mt-1 ml-2"><u class="text-gray">18則評論</u></p>
                        </div>
                        <div class="hot-button-right">
                            <p class="price orange-color t-xxl">$3880</p>
                        </div>
                    </div>
                </div>
            </div>
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
        <a href="">三日遊</a>
        <a href="">二日遊</a>
        <a href="">一日遊</a>
        <a href="">活動</a>
    </div>
    <div class="area align-items-center">
        <p class="pr-3">去哪玩？</p>
        <a href="">北部出發</a>
        <a href="">中部出發</a>
        <a href="">南部出發</a>
        <a href="">東部出發</a>
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
    <div class="row align-items-center">
        <div class="card c3 col-md m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist1.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

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
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist2.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist3.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <defs></defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="card c3 col-md m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist4.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

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
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist5.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist6.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <defs></defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="card c3 col-md m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist7.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

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
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist8.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
        <div class="card c3 col-md col-sm-12 m-3 p-0">
            <div class="heart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Zm-14-58A10.39,10.39,0,0,0,8,12.89a1.9,1.9,0,0,1-.2.37,6.13,6.13,0,0,0-.71,2.68.59.59,0,0,1,0,.14A12.15,12.15,0,0,0,7,17.33a10.74,10.74,0,0,0,.23,2.17,1.7,1.7,0,0,1,0,.22c2.07,13.93,18,30.87,24,36.92,6.08-6,21.9-22.92,24-36.84,0-.07,0-.15,0-.23a10.21,10.21,0,0,0,.26-2.24,12.11,12.11,0,0,0-.1-1.34.77.77,0,0,1,0-.15,6,6,0,0,0-.69-2.56c-.07-.11-.13-.23-.19-.34A10.31,10.31,0,0,0,35,17a3.49,3.49,0,0,1-1.56,2.79l-.16.11a3.5,3.5,0,0,1-3.93,0l-.15-.11A3.49,3.49,0,0,1,27.64,17,10.28,10.28,0,0,0,17.33,7Z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-pic w-100">
                <img src="/Petliday/products/img/prolist9.jpg" alt="">
            </div>
            <div class="card-text pt-3 pb-1 px-4">
                <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
                <div class="info d-flex justify-content-between">
                    <div class="info-left d-flex align-items-center">
                        <div class="star mr-2">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.3 63.4" width="14px">
                                <defs></defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <path class="cls-3" d="M51.47,63.4A3.55,3.55,0,0,1,49.84,63L33.15,54.22,16.45,63a3.49,3.49,0,0,1-5.07-3.69l3.18-18.59L1.06,27.55a3.5,3.5,0,0,1,1.94-6l18.66-2.71L30,2a3.5,3.5,0,0,1,6.28,0l8.35,16.92L63.3,21.58a3.5,3.5,0,0,1,1.94,6L51.74,40.71,54.92,59.3a3.5,3.5,0,0,1-3.45,4.1Z" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="rate text-gray t-m">4.9</div>
                        <div class="rate-all t-xs ml-2"><u class="text-gray">78則評論</u></div>
                    </div>
                    <div class="info-right pr-2 t-l orange-color">$2680</div>
                </div>
            </div>
            <p class="card-info px-4 t-xs">
                簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
            </p>
        </div>
    </div>

</div>
<!-- 分頁按鈕 -->
<div class="container">
    <div class="row mt-4">
        <ul class="page-list p-0 d-flex">
            <li class="pages p-arrow">
                <a class="pages-link" href="#" aria-label="Previous">
                    <div class="arrow-page">
                        <img src="/Petliday/icon/left.png" alt="">
                    </div>
                </a>
            </li>
            <li class="pages"><a class="pages-link" href="#">1</a></li>
            <li class="pages"><a class="pages-link" href="#">2</a></li>
            <li class="pages"><a class="pages-link" href="#">3</a></li>
            <li class="pages p-arrow">
                <a class="pages-link" href="#" aria-label="Next">
                    <div class="arrow-page">
                        <img src="/Petliday/icon/right.png" alt="">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
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
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>