<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
  </head>
  <body>
    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <div class="my_info_content">
      <div class="left_menu">
          <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
      </div> <!-- end of left_menu -->


      <div class="right_content">
        <form name="form_menu" class="" action="./menu_upload.php" method="post" enctype="multipart/form-data">
        가게 사진
      </form>
       </div> <!-- end of right_content -->
       </div> <!-- end of my_info_content -->

       <footer>
         <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
       </footer>

  </body>
</html>
