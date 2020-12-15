<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="about.css">

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<!-- 電腦版 -->
<div class="computer-imgs">
    <hero>
        <div class="hero">
            <img src="./img/about_hero.png">
        </div>
    </hero>

    <section1>
        <div class="section1">
            <img src="./img/about_sec1.png">
        </div>
    </section1>

    <section2>
        <div class="section2">
            <img src="./img/about_sec2.png">
        </div>
    </section2>

    <section3>
        <div class="section3">
            <img src="./img/about_sec3.png">
        </div>
    </section3>

    <section4>
        <div class="section4">
            <img src="./img/about_sec4_v1.png">
        </div>
    </section4>
</div>

<!-- 手機版 -->
<div class="phone-imgs">
    <hero>
        <div class="hero d-block d-sm-none">
            <img src="./img/about_m_hero.png">
        </div>
    </hero>

    <section1>
        <div class="section1 d-block d-sm-none">
            <img src="./img/about_m_sec1.png">
        </div>
    </section1>

    <section2>
        <div class="section2 d-block d-sm-none">
            <img src="./img/about_m_sec2.png">
        </div>
    </section2>

    <section3>
        <div class="section3 d-block d-sm-none">
            <img src="./img/about_m_sec3.png">
        </div>
    </section3>

    <section4>
        <div class="section4 d-block d-sm-none">
            <img src="./img/about_m_sec4.png">
        </div>
    </section4>
</div>

<!-- Petliday做了什麼的部分末 -->
<?php include __DIR__ . '/../userlogin/user-login.php' ?>
<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------
    // ------JS結束 勿刪到---------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>