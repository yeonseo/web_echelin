<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_advertise.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script type="text/javascript">
    function check_pay(classN, val) {
      document.getElementById(classN).value = val;
    }
  </script>


</head>

<body>

  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>

  <section>

    <div class="my_info_content">

      <div class="left_menu">
        <!-- 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
      </div>

      <div class="right_content">

        <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 광고 신청</span><br><br>
            <span class="comment_title_main">우리 가게 광고</span>
          </div>

          <div class="seller_adv_notice">

            <button class="adv_menu_btn" type="button">
              <i class="far fa-id-card"></i>
              <div class="adv_menu_btn_name">광고 신청</div>
              <div class="adv_menu_btn_disc">홈페이지에 가게를 소개해주세요.</div>
            </button>

            <button class="adv_menu_btn" type="button">
              <i class="fas fa-clipboard-list"></i>
              <div class="adv_menu_btn_name">수수료</div>
              <div class="adv_menu_btn_disc">12시간, 24시간 단위로 게시 할 수 있어요.</div>
            </button>

          </div>

          <div class="seller_adv_line1"></div>

          <div class="seller_adv_main">

            <div class="seller_profile_img">
              <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
            </div>

            <div class="seller_name">
              <span>이무권 · mu3386 </span>
            </div>

            <div class="seller_adv_line2"></div>

            <input class="seller_tag" type="text" placeholder=" 식당 명 자동" readonly>

            <br>

            <div class="seller_timecheck">

              <input type="radio" name="chk_pay" value="1,800 kw" onclick="check_pay('seller_tag_id', this.value)"> 12시간 &nbsp&nbsp
              <input type="radio" name="chk_pay" value="3,000 kw" onclick="check_pay('seller_tag_id', this.value)"> 24시간

            </div>

            <input id="seller_tag_id" class="seller_tag" type="text" placeholder=" 수수료" readonly>

            <div class="seller_adv_line3"></div>

            <input class="seller_tag" type="text" placeholder=" 현재 waiting value" readonly>

            <div class="seller_res_tag">

              <a href="#"><span>#맛집태그</span></a>&nbsp
              <a href="#"><span>#마파두부</span></a>&nbsp
              <a href="#"><span>#해시태그</span></a><br>&nbsp&nbsp
              <a href="#"><span>#추천맛집</span></a>

            </div>

            <button class="seller_adver_apply">광고 신청 하기</button>

          </div>
          <!--seller_adv_main-->
        </div>
      </div> <!-- right_content -->

    </div>

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>