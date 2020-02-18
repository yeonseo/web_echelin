<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>


  <!-- CSS, JS 파일 링크 시, -->
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">


  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/css/admin_page.css">
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <script src="./js/vendor/modernizr.custom.min.js"></script>
  <script src="./js/vendor/jquery-1.10.2.min.js"></script>
  <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_haeder/header_small.php"; ?>
  </header>
  <section>
    <div class="admin_content">
      <div class="left_menu">
        <!-- 순서대로쭉쭉 -->
        <ul>
          <li class="user_modify" class="<?= COMMON::$css_sub_menu; ?>"><a href="#">유저정보관리</a> </li>
          <li class="seller_modify" class="<?= COMMON::$css_sub_menu; ?>"><a href="#">업주정보관리</a> </li>
          <li class="qna_modify" class="<?= COMMON::$css_sub_menu; ?>"><a href="#">문의게시판관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행1열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행2열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행3열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행1열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행2열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행3열</a></li>
        </ul>
      </div>
      <div class="right_content">
        <!-- 3x3로구역나누기 -->
        <div class="top_content">
          <!-- 1행 -->
          <div class="main_comment">
            <div class="best_comment">
              <div class="best_comment_first">
                <a href="#">
                  <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_1.jpg">
                </a>
              </div>

              <div class="best_comment_second">
                <a href="#">
                  <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_2.jpg">
                </a>
              </div>
              <div class="best_comment_third">
                <a href="#">
                  <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_3.jpg">
                </a>
              </div>
            </div> <!-- end of best_comment -->
            <div class="box">
              <!-- 판매자정보수정 -->
              <a href="#">업주정보관리</a>
            </div>
            <div class="box">
              <!-- 문의게시판수정 -->
              <a href="#">문의게시판관리</a>
            </div>
          </div><!-- 탑켄텐트div -->
          <div class="center_content">
            <div class="box">
              2행1열
            </div>
            <div class="box">
              2행2열
            </div>
            <div class="box">
              2행3열
            </div>
          </div>
          <div class="bottom_content">
            <div class="box">
              3행1열
            </div>
            <div class="box">
              3행2열
            </div>
            <div class="box">
              3행3열
            </div>
          </div>
        </div>
      </div>
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>
</body>

</html>