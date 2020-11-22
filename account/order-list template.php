<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<!-- <link rel="stylesheet" href="/../css/aside-bar-style.css"> -->

<style>
    .aside-bar {
        position: sticky;
        top: 15px;
        box-shadow: 0px 0px 5px rgba(200, 200, 200, 0.5);
    }

    .aside-bar h2 {
        background-color: #fff;
        border-radius: 3px;
        margin-bottom: -5px;
    }

    #acount {
        width: 100%;
        height: 100%;
        margin-top: 8vh;
        background-color: #f2f2f2;
        border-radius: 25px 25px 0 0;
    }

    #list-title {
        min-height: 300px;
        background-color: #fff;
        border-radius: 3px 30px 3px 3px;
        box-shadow: 2px 2px 5px rgba(200, 200, 200, 0.5);
    }

    .line {
        width: 1rem;
        height: 2rem;
        background: #ffa12c;
        border-radius: 2px 2px 2px 13px;
    }

    .list-group-item.active {
        z-index: 2;
        color: #ffa12c;
        background-color: #f2f2f2;
        border: rgba(200, 200, 200, 0.5);
        border-left: 3px solid #ffa12c;
    }
</style>

<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container">
        <div class="row my-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <?php include __DIR__ . '/../account/account-aside-bar.php' ?>





        </div>
    </div>
</section>










<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------



    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>