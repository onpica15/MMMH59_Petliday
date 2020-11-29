<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<?php
$pageName = 'ab-insert';
?>
<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php if (isset($msg)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $msg ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增通錄資料</h5>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id">id</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">address</label>
                            <textarea class="form-control" id="address" name="address" cols="30" rows="3"></textarea>
                            <small class="form-text"></small>
                        </div>


                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
    // ------JS開始 以上勿刪-------

    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const name = $('#name'),
        email = $('#email'),
        info_bar = $('#info_bar')

    function checkForm() {
        name.next().text('');
        email.next().text('');

        let isPass = true;

        if (name.val().length < 2) {
            isPass = false;
            name.next().text('請填寫正確的姓名!');
        }
        // https://github.com/shinder/mmmh57-php/blob/master/proj/login.php

        if (email.val()) {
            if (!email_re.test(email.val())) {
                isPass = false;
                email.next().text('請填寫正確的 email 格式!');
            }
        }

        if (isPass) {
            // document.form1指定的
            $.post('ab-insert-api.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    info_bar
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .text('完成新增');
                } else {
                    info_bar
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .text(data.error || '新增失敗');
                }
                info_bar.slideDown();

                setTimeout(function() {
                    info_bar.slideUp();
                }, 2000);
            }, 'json')
        }


    }

    // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>