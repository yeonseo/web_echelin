<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>


  <!-- CSS, JS 파일 링크 시, -->
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/css/restaurants_page.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/css/help_center_page.css">

  <link rel='stylesheet' href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/css/user_review.css">
  <script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/js/jquery.js"></script>
  <script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/js/like_dislike.js"></script>

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
  <section>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/restaurants/restaurants_main.php"; ?>
  </section>
  <div style="margin-bottom: 300px"></div>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>
</body>

</html>