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

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/css/admin_page.css">

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/header.php"; ?>
  </header>
  <section>
    <div class="admin_content">
      <div class="left_menu">
        <?php include $_SERVER['DOCUMENT_ROOT']. "/echelin/admin/left_menu.php" ?>
      </div>
      <div class="right_content">
        <!-- 3x3로구역나누기 -->
        <div class="top_content">
          <!-- 1행 -->
          <div class="box">
            <!-- 유저정보수정 -->
            <a href="http://localhost/echelin/admin/edit_user.php">유저정보관리</a>
          </div>
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