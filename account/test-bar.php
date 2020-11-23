<?php include __DIR__ . '/../parts/config.php' ?>
<?php include __DIR__ . '/../parts/html-head.php' ?>
<!-- --- css 連結放下面 ----- -->
<style>
  * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }

  body {
    font-family: 'Open Sans', sans-serif;
    color: #50555a;
    padding: 100px 20px;
  }

  nav {
    z-index: 9;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 0;
    text-align: center;
  }

  .bg-color {
    background-color: #46a1de;
    transition-duration: .5s;
  }

  .text-color {
    color: #46a1de;
    transition-duration: .5s;
  }

  footer {
    padding: 40px 0;
    text-align: center;
    opacity: .33;
    color: white;
  }

  .wrapper {
    min-width: 600px;
    max-width: 900px;
    margin: 0 auto;
  }

  .tabs {
    display: table;
    table-layout: fixed;
    width: 100%;
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
  }

  .tabs>li {
    transition-duration: .25s;
    display: table-cell;
    list-style: none;
    text-align: center;
    padding: 20px 20px 25px 20px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    color: white;
  }

  .tabs>li:before {
    z-index: -1;
    position: absolute;
    content: "";
    width: 100%;
    height: 120%;
    top: 0;
    left: 0;
    background-color: rgba(255, 255, 255, 0.3);
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    transition-duration: .25s;
    border-radius: 5px 5px 0 0;
  }

  .tabs>li:hover:before {
    -webkit-transform: translateY(70%);
    transform: translateY(70%);
  }

  .tabs>li.active {
    color: #50555a;
  }

  .tabs>li.active:before {
    transition-duration: .5s;
    background-color: white;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  .tab__content {
    background-color: white;
    position: relative;
    width: 100%;
    border-radius: 5px;
  }

  .tab__content>li {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: none;
    list-style: none;
  }

  .tab__content>li .content__wrapper {
    text-align: center;
    border-radius: 5px;
    width: 100%;
    padding: 45px 40px 40px 40px;
    background-color: white;
  }

  .content__wrapper h2 {
    width: 100%;
    text-align: center;
    padding-bottom: 20px;
    font-weight: 300;
  }

  .content__wrapper img {
    width: 100%;
    height: auto;
    border-radius: 5px;
  }

  .colors {
    text-align: center;
    padding-top: 20px;
  }

  .colors>li {
    list-style: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border-bottom: 5px solid rgba(0, 0, 0, 0.1);
    display: inline-block;
    margin: 0 10px;
    cursor: pointer;
    transition-duration: .2s;
    box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
  }

  .colors>li:hover {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    border-bottom: 10px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
  }

  .colors>li.active-color {
    -webkit-transform: scale(1.2) translateY(-10px);
    transform: scale(1.2) translateY(-10px);
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    border-bottom: 20px solid rgba(0, 0, 0, 0.15);
  }

  .colors>li:nth-child(1) {
    background-color: #2ecc71;
  }

  .colors>li:nth-child(2) {
    background-color: #D64A4B;
  }

  .colors>li:nth-child(3) {
    background-color: #8e44ad;
  }

  .colors>li:nth-child(4) {
    background-color: #46a1de;
  }

  .colors>li:nth-child(5) {
    background-color: #bdc3c7;
  }
</style>


<?php include __DIR__ . '/parts/html-navbar.php' ?>
<!-- ------------------ body開始 以上勿刪 ------------------ -->

<nav class="bg-color">Adaptive tabs</nav>

<section class="wrapper">
  <ul class="tabs">
    <li class="active">Colors</li>
    <li>Favorite movies</li>
    <li>About</li>
  </ul>

  <ul class="tab__content">
    <li class="active">
      <div class="content__wrapper">
        <h2 class="text-color">Pick a color</h2>

        <ul class="colors">
          <li data-color="#2ecc71"></li>
          <li data-color="#D64A4B"></li>
          <li data-color="#8e44ad"></li>
          <li class="active-color" data-color="#46a1de"></li>
          <li data-color="#bdc3c7"></li>
        </ul>
      </div>
    </li>
    <li>
      <div class="content__wrapper">
        <h2 class="text-color">Her</h2>

        <img src="http://lewihussey.com/codepen-img/her.jpg">
      </div>
    </li>
    <li>
      <div class="content__wrapper">
        <h2 class="text-color">About</h2>

        <p>Created by <a class="text-color" href="http://lewihussey.com" target="_blank">Lewi Hussey</a></p>
      </div>
    </li>
  </ul>
</section>

<footer>By Lewi Hussey</footer>








<!-- ------------------ body結束 ------------------ -->
<?php include __DIR__ . '/../parts/html-footer.php' ?>
<!-- ---------------js/jq 開始 ------------------ -->
<?php include __DIR__ . '/../parts/html-script.php' ?>
<script>
  // ------JS開始 以上勿刪-------
  $(document).ready(function() {

    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".tabs > li").on("click", function() {

      // Remove class from active tab
      $(".tabs > li").removeClass("active");

      // Add class active to clicked tab
      $(this).addClass("active");

      // Update clickedTab variable
      clickedTab = $(".tabs .active");

      // fade out active tab
      activeTab.fadeOut(250, function() {

        // Remove active class all tabs
        $(".tab__content > li").removeClass("active");

        // Get index of clicked tab
        var clickedTabIndex = clickedTab.index();

        // Add class active to corresponding tab
        $(".tab__content > li").eq(clickedTabIndex).addClass("active");

        // update new active tab
        activeTab = $(".tab__content > .active");

        // Update variable
        activeTabHeight = activeTab.outerHeight();

        // Animate height of wrapper to new tab height
        tabWrapper.stop().delay(50).animate({
          height: activeTabHeight
        }, 500, function() {

          // Fade in active tab
          activeTab.delay(50).fadeIn(250);

        });
      });
    });

    // Variables
    var colorButton = $(".colors li");

    colorButton.on("click", function() {

      // Remove class from currently active button
      $(".colors > li").removeClass("active-color");

      // Add class active to clicked button
      $(this).addClass("active-color");

      // Get background color of clicked
      var newColor = $(this).attr("data-color");

      // Change background of everything with class .bg-color
      $(".bg-color").css("background-color", newColor);

      // Change color of everything with class .text-color
      $(".text-color").css("color", newColor);
    });
  });


  // ------JS結束 勿刪到-------
</script>
<?php include __DIR__ . '/../parts/html-foot.php' ?>