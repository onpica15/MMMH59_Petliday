<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<link rel="stylesheet" href="../css/all-style.css">

<style>
    .cls-3 {
        fill: #00907c;
    }

    /* lighr-gray */
    .cls-4 {
        fill: #ccc;
    }

    /* red */
    .cls-5 {
        fill: #e03d2d;
    }

    .card {
        width: 296px;
        height: 295px;
        border: none;
        box-shadow: 1px 2px 8px rgba(200, 200, 200, .5);
        position: relative;
        transition: .5s;
    }

    .card .p {
        margin-bottom: 6px;
    }

    .heart {
        width: 35px;
        height: 35px;
        background-color: #fff;
        opacity: .8;
        position: absolute;
        top: 15px;
        right: 15px;
        border-radius: 50%;
        padding: 6px 8.5px;
    }

    .card-pic {
        width: 100%;
        height: 175px;
        border-radius: 3px 3px 50px 3px;
        overflow: hidden;
        transition: .5s;
    }

    /* .card-pic:hover {
        height: 125px;
        transform: translateY(-50px);
    } */

    .c2 {
        height: 330px;
    }

    .c2 .card-pic {
        height: 235px;
    }

    /* 
    .c2 .card-pic:hover {
        height: 185px;
    } */

    .c2 .info {
        display: flex;
    }

    .c4 {
        height: 255px;
    }

    .c4 .card-pic {
        height: 140px;
        border-radius: 3px 3px 40px 3px;
    }

    /* .c4 .card-pic:hover {
        height: 90px;
    } */

    .c4 .heart {
        top: 10px;
        right: 10px;
    }

    .card-pic img {
        width: 100%;
        object-fit: cover;
    }

    .card-text h6 {
        line-height: 23px;
    }

    .card-info {
        opacity: 0;
        height: 0;
    }

    .rate-all {
        letter-spacing: 0.5px;
    }

    @media(max-width: 400px) {
        .card {
            width: 266px;
            height: 300px;
            border: none;
            box-shadow: 1px 2px 8px rgba(200, 200, 200, .5);
            position: relative;
            margin: 20px auto !important;
        }

        .card-pic {
            width: 100%;
            height: 175px;
            border-radius: 3px 3px 40px 3px;
            overflow: hidden;
        }

        .card.c2 {
            height: 240px;
            margin: 10px !important;
        }

        .c2 .card-pic {
            height: 84px;
        }

        .c2 .info {
            display: block;
        }

        .c2 .info-left,
        .c2 .heart {
            opacity: 0;
            position: absolute;
        }

        .c2 .card-text {
            font-size: 14px;
        }

        .c2 p {
            margin-bottom: 5px;
        }

        .c4 {
            height: 300px;
        }

        .c4 .card-pic {
            height: 175px;
        }

        .c4 .heart {
            top: 10px;
            right: 10px;
        }

        .arrow {
            opacity: 0;
            position: absolute;
        }
    }
</style>
<?php include __DIR__ . '/../parts/html-navbar.php' ?>

<body>
    <!-- 4個一排版本 -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- 左箭頭 -->
            <a class="arrow m-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-4" d="M25.12,51.56a3.52,3.52,0,0,1-2.51-1.06L1,28.22a3.5,3.5,0,0,1,0-4.88L22.61,1.06a3.5,3.5,0,0,1,5,4.88L8.38,25.78,27.64,45.62a3.51,3.51,0,0,1-2.52,5.94Z" />
                        </g>
                    </g>
                </svg>
            </a>
            <div class="card c4 col-md col-sm-12 m-3 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
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
            <div class="card c4 col-md col-sm-12 m-3 p-0">
                <div class="heart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 65" width="18px">
                        <defs></defs>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-5" d="M31.31,65A3.48,3.48,0,0,1,29,64.09C27.9,63.13,3.36,40.49.37,20.86A17,17,0,0,1,0,17.33a16.37,16.37,0,0,1,.13-2A13,13,0,0,1,1.78,9.7,17.34,17.34,0,0,1,31.32,7.07,17.33,17.33,0,0,1,60.89,9.78a12.84,12.84,0,0,1,1.6,5.38,17.22,17.22,0,0,1,.15,2.17,17.42,17.42,0,0,1-.4,3.64C59.17,40.58,34.71,63.13,33.67,64.09A3.48,3.48,0,0,1,31.31,65Z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="card-pic w-100">
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
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
            <div class="card c4 col-md col-sm-12 m-3 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
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
            <div class="card c4 col-md col-sm-12 m-3 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p class="t-s">一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 夜間觀星</p>
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
            <!-- 右箭頭 -->
            <a class="arrow m-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-4" d="M3.5,51.56A3.5,3.5,0,0,1,1,45.62L20.25,25.78,1,5.94A3.5,3.5,0,0,1,6,1.06L27.64,23.34a3.52,3.52,0,0,1,0,4.88L6,50.5A3.51,3.51,0,0,1,3.5,51.56Z" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <!-- 3個一排版本 -->
    <div class="container">
        <div class="row align-items-center">
            <!-- 左箭頭 -->
            <a class="arrow m-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-4" d="M25.12,51.56a3.52,3.52,0,0,1-2.51-1.06L1,28.22a3.5,3.5,0,0,1,0-4.88L22.61,1.06a3.5,3.5,0,0,1,5,4.88L8.38,25.78,27.64,45.62a3.51,3.51,0,0,1-2.52,5.94Z" />
                        </g>
                    </g>
                </svg>
            </a>
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
                    <img src="./img/pd1.jpg" alt="">
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
                    <img src="./img/pd1.jpg" alt="">
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
                    <img src="./img/pd1.jpg" alt="">
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
            <!-- 右箭頭 -->
            <a class="arrow m-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.62 51.56" width="20px">
                    <defs></defs>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-4" d="M3.5,51.56A3.5,3.5,0,0,1,1,45.62L20.25,25.78,1,5.94A3.5,3.5,0,0,1,6,1.06L27.64,23.34a3.52,3.52,0,0,1,0,4.88L6,50.5A3.51,3.51,0,0,1,3.5,51.56Z" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <!-- 2個一排版本 -->
    <div class="container">
        <div class="row mx-4">
            <div class="card c2 col m-4 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 觀星</p>
                    <div class="info justify-content-between">
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
            <div class="card c2 col m-4 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 觀星</p>
                    <div class="info justify-content-between">
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
        </div>
        <div class="row mx-4">
            <div class="card c2 col m-4 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 觀星</p>
                    <div class="info justify-content-between">
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
            <div class="card c2 col m-4 p-0">
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
                    <img src="./img/pd1.jpg" alt="">
                </div>
                <div class="card-text pt-3 pb-1 px-4">
                    <p>一起奔跑！宜蘭兩天一夜 | 熱氣球嘉年華 | 露營 | 觀星</p>
                    <div class="info justify-content-between">
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
        </div>
    </div>
    <?php include __DIR__ . '/../parts/html-footer.php' ?>
    <?php include __DIR__ . '/../parts/html-script.php' ?>
    <script>
        // hover效果 c3:三個一排/c2:兩個一排/c4:四個一排
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
        $('.c2').on('mouseenter', function() {
            $(this).find('.card-pic').css('height', '195px');
            $(this).find('.card-info').css({
                'opacity': '1',
                'height': '10px',
            });
        });
        $('.c2').on('mouseleave', function() {
            $(this).find('.card-pic').css('height', '235px');
            $(this).find('.card-info').css({
                'opacity': '0',
                'height': '0',
            });
        });
        $('.c4').on('mouseenter', function() {
            $(this).find('.card-pic').css('height', '90px');
            $(this).find('.card-info').css({
                'opacity': '1',
                'height': '10px',
            });
        });
        $('.c4').on('mouseleave', function() {
            $(this).find('.card-pic').css('height', '140px');
            $(this).find('.card-info').css({
                'opacity': '0',
                'height': '0',
            });
        });
    </script>
    <?php include __DIR__ . '/../parts/html-foot.php' ?>