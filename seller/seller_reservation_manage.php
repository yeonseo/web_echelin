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
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/js/update_seller.js"></script>

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
$row=mysqli_fetch_array($result);
$user_id=$row["user_id"];
$select_date=$row["select_date"];
$select_time=$row["select_time"];
$select_person=$row["select_person"];
$select_menu=$row["select_menu"];
$reservation_special=$row["reservation_special"];
$intensity_of_reserv=$row["intensity_of_reserv"];

$re_select_time=str_replace(' : ', ":", $select_time);
$re_select_person=explode(',', $select_person);

$re_select_menu=explode(',', $select_menu);
 ?>

  <form class="" name="form_reservation_result" action="./seller_reservation_update.php?seller_num=<?=$seller_num?>" method="post" enctype="multipart/form-data">
    <div class="right_content">

    <h3>예약자 정보</h3>
  </br>
  <ul>



    <li>아이디</li>
    <input class="input_info" type="text" name="" value="<?=$user_id?>">
    </br></br></br>

    <li>예약일자</li>
    <input class="input_info" type="text" name="" value="<?=$select_time?>">
    </br></br></br>

    <li>예약시간</li>
    <input class="input_info" type="time" name="" value="<?=$re_select_time?>">
    </br></br></br>

    <li>인원</li>
    <span class="span_content_font">성인</span>
    <input class="input_info" type="number" name="" value="<?=$re_select_person[0]?>">명</br>
    <span class="span_content_font">어린이</span>
    <input class="input_info" type="number" name="" value="<?=$re_select_person[1]?>">명</br>
    <span class="span_content_font">유아</span>
    <input class="input_info" type="number" name="" value="<?=$re_select_person[2]?>">명</br>
    </br></br></br>

    <li>예약메뉴</li>
    <input class="input_info" class="input_num" type="text" name="" value="<?=$re_select_menu[0]?>">
    <input class="input_info" type="number" name="" value="<?=$re_select_menu[1]?>">개</br>
    <input class="input_info" type="text" name="" value="<?=$re_select_menu[2]?>">
    <input class="input_info" type="number" name="" value="<?=$re_select_menu[3]?>">개</br>
    <input class="input_info" type="text" name="" value="<?=$re_select_menu[4]?>">
    <input class="input_info" type="number" name="" value="<?=$re_select_menu[5]?>">개</br>
    <input class="input_info" type="text" name="" value="<?=$re_select_menu[6]?>">
    <input class="input_info" type="number" name="" value="<?=$re_select_menu[7]?>">개</br>
    <input class="input_info" type="text" name="" value="<?=$re_select_menu[8]?>">
    <input class="input_info" type="number" name="" value="<?=$re_select_menu[9]?>">개</br>
    </br></br></br>

    <li>예약자 특이사항</li>
    <textarea class="textarea_step2" name="special_note" rows="8" cols="74" style="resize: none;" value="특이사항"><?=$reservation_special?></textarea>
    </br></br></br>

    <li>예약 규정 강도</li>
    <input class="input_info" type="text" name="" value="<?=$intensity_of_reserv?>">
    </br></br></br>

      </ul>
   <button class="button_complete" type="button" name="button" onclick="reservation_noshow_result()">완료</button>
    </div> <!-- end of right_content -->
  </form>
</div> <!-- end of my_info_content -->
<footer>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
</footer>

</body>
</html>
