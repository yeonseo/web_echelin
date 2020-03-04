<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/user_seller.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_register_step.css">

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

<?php $seller_num = $_GET["seller_num"];



$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from reservation where seller_num='$seller_num'";
$result=mysqli_query($con, $sql);
 ?>

  <form class="" name="form_store_pic" action="./store_pic_update?seller_num=<?=$seller_num?>.php" method="post" enctype="multipart/form-data">
    <div class="right_content">

    <li>아이디</li>
    <input class="input_info" type="text" name="" value="">
    </br></br></br>

    <li>예약일자</li>
    <input class="input_info" type="date" name="" value="">
    </br></br></br>

    <li>예약시간</li>
        <input class="input_info" type="time" name="" value="">
    </br></br></br>

    <li>인원</li>
    <span class="span_content_font">성인</span>
    <input class="input_info" type="number" name="" value="">
    <span class="span_content_font">어린이</span>
    <input class="input_info" type="number" name="" value="">
    <span class="span_content_font">유아</span>
    <input class="input_info" type="number" name="" value="">
    </br></br></br>

    <li>예약메뉴</li>
    <input class="input_info" type="text" name="" value="">
    <input class="input_info" type="number" name="" value="">개
    <input class="input_info" type="text" name="" value="">
    <input class="input_info" type="number" name="" value="">개
    <input class="input_info" type="text" name="" value="">
    <input class="input_info" type="number" name="" value="">개
    <input class="input_info" type="text" name="" value="">
    <input class="input_info" type="number" name="" value="">개
    <input class="input_info" type="text" name="" value="">
    <input class="input_info" type="number" name="" value="">개
    </br></br></br>

    <li>예약자 특이사항</li>
    <input class="input_info" type="text" name="" value="">
    </br></br></br>

    <li>예약 규정 강도</li>
    <input class="input_info" type="text" name="" value="">
    </br></br></br>
   <button class="button_complete" type="button" name="button" onclick="register_store_pic()">완료</button>
    </div> <!-- end of right_content -->
  </form>
</div> <!-- end of my_info_content -->
<footer>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
</footer>

</body>
</html>
