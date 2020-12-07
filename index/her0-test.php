<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<style>
    .con3d {
        width: 70%;
        margin: 120px 140px;
    }

    .moving {
        position: relative;
        width: 80%;
        height: 985%;
        margin: auto;
        perspective: 900px;
    }

    .layer {
        padding: 10px;
        box-sizing: border-box;
        cursor: pointer;
        transform-style: preserve-3d;
    }
</style>
</head>

<div class="container-fluid">
    <div class="moving">
        <div class="layer">
            <img class="margin" src="/Petliday/index/img/pd1.jpg" width="100%">
        </div>
    </div>
</div>

<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    var move = 50;
    var rotate = 40;

    $(document).mousemove(function(e) {
        var docX = $(document).width();
        var docY = $(document).height();

        var moveX = (e.pageX - docX / 2) / (docX / 2) * -move;
        var moveY = (e.pageY - docY / 2) / (docY / 2) * -move;

        var rotateY = (e.pageX / docX * rotate * 2) - rotate;
        var rotateX = -((e.pageY / docY * rotate * 2) - rotate);

        $('.layer')
            .css('left', moveX + 'px')
            .css('top', moveY + 'px')
            .css('transform', 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
    });
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>