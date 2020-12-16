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
        <div class="row my-0 my-lg-4"></div>
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

                                <div class="search-content-m col-xl-10"></div>
                                <div class="search-btn-mm col-xl-2 p-0">搜尋</div>
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
                                        <div class="title-wrap col-lg-9 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                12月愛犬入住「寵沐苑」，優惠每晚TWD1,500
                                            </p>
                                            <p class="date">2020-12-15</p>
                                            <span>礁溪最推寵物專屬旅館，即日45起全新營運！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>歡慶耶誕，12月份入住之狗貴賓即可獲贈「寒沐寵沐苑專屬相片相框」乙份，寵沐苑也特別準備「幸運轉盤」，入住即可旋轉乙次，並有機會獲得精彩好禮：寵沐苑一泊二食住宿券乙張、英國品牌卡納根無榖飼料2公斤、紐西蘭天然牧場的澳新美「翱遊」頂級肉糧20公克及專業的寵物美容課程等，讓大人與毛孩來渡假盡情享受佳節溫馨歡樂氛圍。
                                        </p>
                                    </div>
                                </div>
                                <div class="mail-wrap">
                                    <div class="collapsible coll-box-title row justify-content-start">
                                        <input type="checkbox" class="mx-0" style="height: 20px;">
                                        <div class="title-wrap col-lg-8 row justify-content-between">
                                            <img src="../index/img/logo.png" alt="">
                                            <p>
                                                [食譜]冬至毛孩寵膳｜蘋果牛蒡補氣雞湯
                                            </p>
                                            <p class="date">2020-12-10</p>
                                            <span>增強身體免疫力，毛爸媽絕對會和毛孩一起搶著吃！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>【蘋果牛蒡補氣雞湯】
                                            食材：
                                            1.切塊雞腿3-4隻
                                            2.牛蒡半條
                                            3.鴻喜菇半朵
                                            4.紅蘋果1顆
                                            5.紅棗4粒
                                            6.黃耆4-5片(也可省略更適合各種體質毛孩)...看更多
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
                                                為愛無阻 毛孩新世代
                                            </p>
                                            <p class="date"> 2020-12-05</p>
                                            <span>『與家人出遊，不應該有阻礙。』</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>這三天我們可以....
                                            ★限量毛孩養生蛋免費送★
                                            每日限量提供秋冬毛孩養生蛋，讓毛孩可以吃得開心。

                                            ★110 紀念驚喜福袋★
                                            備有 110 個紀念福袋，要給參加每場活動及有在攤位消費的 110 位幸運毛孩，福袋內除有毛孩實用禮品，其中有10位幸運兒可獲得 500 元環球購物禮卷。

                                            ★獸醫義診、寵物小美容服務、寵物溝通★
                                            通通限額免費諮詢，記得先報名保留名額喔！

                                            活動日期：109 年 12 月 11 日 –12 月 13 日
                                            活動時間：PM2：00 – 7：30
                                            活動地點：GlobalMall 環球購物中心桃園青埔 A19 館廣場(桃捷 A19 站站前戶外廣場/中壢區高鐵南路二段352 號)
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
                                            <span>毛孩的兒童節，一起享受童趣假期吧！</span>
                                        </div>
                                        <i class=" fa fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <p>身為毛小孩和人類寶貝的父母，可不能偏心哦！小孩的兒童節要過，毛小孩也要一起慶祝啦！<br>
                                            大人的兒童節，一起享受童趣假期吧！<br>
                                            10/15-10/17 限時三天！嘿嘿小編跟你說這次優惠不得了呀～點擊看攻略<br>
                                            台灣訂房四大優惠一次拿 ：小孩子才做選擇，四種優惠我通通要！（以下四大優惠可合併使用唷❤️）<br>

                                            🔥優惠一：指定台灣飯店訂房再送750g飼料！<br>
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