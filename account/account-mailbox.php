<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php include __DIR__ . '/../parts/html-script.php' ?>

<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="mailbox.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>account/style.css">



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
                    <!--mailbox 會員信箱 -->
                    <div class="tab-pane list-section pb-5">
                        <div class="container" id="list-title">
                            <div class="row  mb-3">
                                <div class="d-flex pt-3 p-4">
                                    <div class="line mr-2"></div>
                                    <h4 class="t-xxl">會員信箱</h4>
                                </div>
                            </div>
                        </div>
                        <!-- search bar -->
                        <div class="container">
                            <div class="row search-bar-m">
                                <div class="search-icon-m col-xl-1"></div>
                                <div class="search-content-m col-xl-9"></div>
                                <div class="search-btn-m col-xl-2 p-0">搜尋</div>
                            </div>
                        </div>
                        <!-- 2 btns -->
                        <div class="container">
                            <div class="row btn-2 justify-content-end text-right">
                                <a class="text-gray">選取刪除</a>
                                <a class="text-gray">選取已讀</a>
                            </div>
                        </div>
                        <!-- 手風琴開展部分start -->
                        <div class="container coll-container mb-5">
                            <div class="row coll-row">
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                小編手把手教您怎麼訂購最划算
                                            </p>
                                            <p class="date">yesterday</p>
                                            <span>大人的兒童節，一起享受微醺假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>你多久沒好好放鬆了呢？小孩的兒童節過了，換我們大人啦！<br>
                                            大人的兒童節，一起享受微醺假期吧！<br>

                                            4/15-4/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊連結看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750ml紅/白酒一瓶！<br>
                                            🔥優惠二：指定台灣飯店下殺價格<br>
                                            🔥優惠三：訂房折扣碼<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                小編手把手教您怎麼訂購最划算
                                            </p>
                                            <p class="date">yesterday</p>
                                            <span>大人的兒童節，一起享受微醺假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>你多久沒好好放鬆了呢？小孩的兒童節過了，換我們大人啦！<br>
                                            大人的兒童節，一起享受微醺假期吧！<br>

                                            4/15-4/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊連結看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750ml紅/白酒一瓶！<br>
                                            🔥優惠二：指定台灣飯店下殺價格<br>
                                            🔥優惠三：訂房折扣碼<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                小編手把手教您怎麼訂購最划算
                                            </p>
                                            <p class="date">yesterday</p>
                                            <span>大人的兒童節，一起享受微醺假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>你多久沒好好放鬆了呢？小孩的兒童節過了，換我們大人啦！<br>
                                            大人的兒童節，一起享受微醺假期吧！<br>

                                            4/15-4/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊連結看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750ml紅/白酒一瓶！<br>
                                            🔥優惠二：指定台灣飯店下殺價格<br>
                                            🔥優惠三：訂房折扣碼<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                小編手把手教您怎麼訂購最划算
                                            </p>
                                            <p class="date">yesterday</p>
                                            <span>大人的兒童節，一起享受微醺假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>你多久沒好好放鬆了呢？小孩的兒童節過了，換我們大人啦！<br>
                                            大人的兒童節，一起享受微醺假期吧！<br>

                                            4/15-4/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊連結看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750ml紅/白酒一瓶！<br>
                                            🔥優惠二：指定台灣飯店下殺價格<br>
                                            🔥優惠三：訂房折扣碼<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                小編手把手教您怎麼訂購最划算
                                            </p>
                                            <p class="date">yesterday</p>
                                            <span>大人的兒童節，一起享受微醺假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>你多久沒好好放鬆了呢？小孩的兒童節過了，換我們大人啦！<br>
                                            大人的兒童節，一起享受微醺假期吧！<br>

                                            4/15-4/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊連結看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750ml紅/白酒一瓶！<br>
                                            🔥優惠二：指定台灣飯店下殺價格<br>
                                            🔥優惠三：訂房折扣碼<br>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- 手風琴開展部分end -->

                    </div>

                    <!-- endof mailbox 會員信箱 -->



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

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }


    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>