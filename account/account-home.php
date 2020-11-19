<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container ">
        <div class="row ">
            <div class="col-3">
                <h2 class="list-group-item">會員中心</h2>

                <div class="list-group" id="list-tab" role="tablist">

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">會員資料</a>

                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-order" role="tab" aria-controls="messages">我的訂單</a>

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-wishlist" role="tab" aria-controls="profile">願望清單</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-mailbox" role="tab" aria-controls="settings">會員信箱</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-coupon" role="tab" aria-controls="settings">優惠券</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-qa" role="tab" aria-controls="settings">Q&A</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col mb-3" id="member-list">
                            <div class="row">
                                <div class="line mr-2"></div>
                                <h4>會員資料</h4>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="member-img">
                                        <img src="./img/avatar-pet1.jpg" alt="">
                                    </div>
                                    <div class="member-id">
                                        ID:petty777
                                    </div>
                                </div>
                                <div class="col-8">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">姓名</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="霈霈">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/09/10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pitypetty12@example.com">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword">
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button>儲存修改</button>
                                <button>密碼更改</button>

                            </div>
                        </div>
                        <div class="col mb-3" id="pet-list">
                            <div class="row">
                                <div class="line mr-2"></div>
                                <h4>寵物資料</h4>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="pet-img">
                                        <img src="" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <h6>布丁狗</h6>
                                    <div class="pet-detail">
                                        <p>品種:</p>
                                        <p>年齡:</p>
                                        <p>生日:</p>
                                    </div>

                                </div>
                                <div class="col align-self-end">
                                    <a href="">edit</a>
                                    <a href="">remove</a>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button>新增寵物</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-order" role="tabpanel" aria-labelledby="list-messages-list">list-order</div>

                    <div class="tab-pane fade" id="list-wishlist" role="tabpanel" aria-labelledby="list-profile-list">list-wishlist</div>

                    <div class="tab-pane fade" id="list-mailbox" role="tabpanel" aria-labelledby="list-settings-list">list-mailbox</div>

                    <div class="tab-pane fade" id="list-coupon" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>

                    <div class="tab-pane fade" id="list-qa" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>
                </div>
            </div>
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