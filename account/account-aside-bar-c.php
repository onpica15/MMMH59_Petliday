            <div class="aside-bar col-12 col-lg-3 px-0 ">


                <h2 class="pb-4 pt-3 text-center t-xxl">會員中心</h2>

                <div class="menu-bar list-group text-center t-l" id="list-tab" role="tablist">

                    <!-- <div class="menu-bar"> -->
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-profile.php">會員資料</a>
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-order.php">我的訂單</a>
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-wishlist.php">願望清單</a>
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-mailbox.php">會員信箱</a>
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-coupon.php">優惠券</a>
                    <a class="col-4 col-lg-12 list-group-item list-group-item-action" href=" account-qa.php">Q&A</a>
                    <!-- </div> -->



                </div>

            </div>


            <script>
                let pageInfo = ['account-profile', 'account-order', 'account-wishlist', 'account-mailbox', 'account-coupon', 'account-qa']

                pageInfo.forEach((item, index) => {
                    // console.log('check if item?', item, window.location.pathname.indexOf(item))
                    if (window.location.pathname.indexOf(item) != -1) {
                        $('.list-group-item').removeClass('active').eq(index).addClass('active')
                    }

                })
                // console.log('path ', window.location.pathname)
            </script>