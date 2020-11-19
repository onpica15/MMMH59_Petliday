<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<link rel="stylesheet" href="style.css">


<?php include __DIR__ . '/../parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->
<section id="acount">
    <div class="container mt-5">

        <h1 class="orange-color t-xxxl bg-color ">Hello!開始開心寫網站 orange-color t-xxxl bg-color</h1>
        <br>
        <h6 class="brown-color t-xxl ">毛日 brown-color t-xxl</h6>
        <br>
        <h6 class="green-color t-xl">毛日 green-color t-xl</h6>
        <br>
        <h6 class="danger-color t-l">毛日 danger-color t-l</h6>
        <br>
        <h6 class="text-color t-m">毛日 text-color t-m</h6>
        <br>
        <h6 class="text-color t-s">毛日 text-color t-s</h6>
        <br>
        <h6 class="text-gray t-xs">毛日 text-gray t-xs</h6>

        <button class="btn">測試 class='btn'</button>

    </div>
    <div class="container">
        <div class="row my-5"></div>
    </div>
    <!-- aside-bar 側邊攔 -->
    <div class="container">
        <div class="row">
            <div class="col-3 ">
                <h2 class="list-group-item text-center t-xxl">會員中心</h2>

                <div class="list-group text-center t-l" id="list-tab" role="tablist">

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">會員資料</a>

                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-order" role="tab" aria-controls="messages">我的訂單</a>

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-wishlist" role="tab" aria-controls="profile">願望清單</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-mailbox" role="tab" aria-controls="settings">會員信箱</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-coupon" role="tab" aria-controls="settings">優惠券</a>

                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-qa" role="tab" aria-controls="settings">Q&A</a>
                </div>
            </div>

            <!-- 會員資料 -->

            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col mb-3 " id="member-list">
                            <div class="row pt-3 p-2">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl">會員資料</h4>
                            </div>
                            <div class="row ">
                                <div class="col-4 ">
                                    <div class="member-img">
                                        <img src="./img/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="member-id">
                                        ID:pity0507
                                    </div>
                                </div>
                                <div class="col-8">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">姓名</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="黎小霈">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/08/24">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pity0824@gmail.com">
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
                                <button class="btn">儲存修改</button>
                                <button class="btn">密碼更改</button>

                            </div>
                        </div>

                        <!-- 寵物資料 -->

                        <div class="col mb-3" id="pet-list">
                            <div class="row pt-3 p-2">
                                <div class="line mr-2"></div>
                                <h4 class="t-xxl ">寵物資料</h4>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pet-img">
                                        <img src="./img/avatar-pet1" alt="">
                                    </div>
                                    <h6>Qbone</h6>

                                </div>
                                <div class="col-6">
                                    <div class="pet-detail">
                                        <p>品種 : 柴犬</p>
                                        <p>年齡 : 1歲</p>
                                        <p>生日 : 2019/09/10</p>

                                    </div>

                                </div>
                                <div class="col-2" id="page-icon">
                                    <a href="">
                                        <img src="../icon/edit.svg" alt="">
                                    </a>
                                    <a href="">
                                        <img src="../icon/trash.svg" alt="">

                                    </a>
                                </div>

                            </div>
                            <div class="row justify-content-end">
                                <button class="btn">新增寵物</button>
                            </div>
                        </div>
                    </div>
                    <!--  list-order 我的訂單-->
                    <div class="tab-pane fade" id="list-order" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="col mb-3 " id="member-list">
                                    <div class="row pt-3 p-2">
                                        <div class="line mr-2"></div>
                                        <h4 class="t-xxl">我的訂單</h4>
                                    </div>
                                    <div class="row ">
                                        <div class="col-4 ">
                                            <div class="member-img">
                                                <img src="./img/avatar-1.jpg" alt="">
                                            </div>
                                            <div class="member-id">
                                                ID:pity0507
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">姓名</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="黎小霈">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">生日</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1996/08/24">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pity0824@gmail.com">
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
                                        <button class="btn">儲存修改</button>
                                        <button class="btn">密碼更改</button>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="list-wishlist" role="tabpanel" aria-labelledby="list-profile-list">list-wishlist</div>

                            <div class="tab-pane fade" id="list-mailbox" role="tabpanel" aria-labelledby="list-settings-list">list-mailbox</div>

                            <div class="tab-pane fade" id="list-coupon" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>

                            <div class="tab-pane fade" id="list-qa" role="tabpanel" aria-labelledby="list-settings-list">list-coupon</div>
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