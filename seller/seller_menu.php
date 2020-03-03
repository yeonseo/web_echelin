<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_register_step.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/user_seller.css">
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/js/update_seller.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
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

<form name="form_menu" class="" action="./menu_upload.php" method="post" enctype="multipart/form-data">
  <div class="right_content">
    <li id="li_menu">메뉴 추가하기</li>
    <button id="button_add" class="button_circle_add" type="button">+</button>
    <br>
    <br>
    <table class="table_seller_menu" border="1">
      <tbody>
        <tr>
          <th class="th_menu">메뉴</th>
          <th class="th_menu">가격</th>
          <th class="th_menu">사진</th>
          <th class="th_menu">설명</th>
          <th class="th_menu_del"></th>
        </tr>

        <tr class="tr_menu" name="tr_menu">
          <td class="td_menu"><input type="text" name="input_menu[]" placeholder="메뉴이름" value="치즈떡볶이"></td>
          <td class="td_menu"><input type="number" name="input_price[]" placeholder="가격" value="4000"></td>
          <td class="td_menu"><input type="file" name="input_menu_img[]" value="" multiple></td>
          <td class="td_menu"><input type="text" name="input_menu_explain[]" placeholder="메뉴 설명"></td>
          <td class="td_button_del"><input type="text" name=""></td>
        </tr>
      </tbody>
    </table>
  </br>
   <button class="button_complete" type="button" name="button" onclick="register_menu()">완료</button>
 </div> <!-- end of right_content -->
 </form>

  </div> <!-- end of my_info_content -->
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>



 </body>
 </html>
