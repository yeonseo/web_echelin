<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
      <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">
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

     <div class="container">

       <div class="my_comment_title">
         <span class="comment_title_sub">상점 관리 &nbsp&nbsp > &nbsp&nbsp 가게 사진 등록하기</span><br><br>
         <span class="comment_title_main">내 가게</span>
       </div>

     <div class="div_section">

       <div class="show_main">

         <div class="show_basic">

<?php

$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from seller where user_id='$useremail'";
$result=mysqli_query($con, $sql);
// mysqli_error($con);

while($row=mysqli_fetch_array($result)) {
  $seller_num=$row['seller_num'];
  $store_name=$row['store_name'];
  $store_address=$row['store_address'];

  $sql2 = "select * from store_img where seller_num='$seller_num' limit 1";

    $result2 = mysqli_query($con, $sql2);

    while($row = mysqli_fetch_array($result2)){

    $store_file_name = $row['store_file_name'];
    $store_file_type = $row['store_file_type'];
    $store_file_copied = $row['store_file_copied'];
?>

        <div class="show_element">
          <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?= $store_file_copied;?>">
         <div class="element_main">
           <span class="span_first">내 가게 번호 ::: <?= $seller_num?></span>
           <span class="span_second">내 가게 ::: <?= $store_name?></span>
           <span class="span_third">가게 주소 ::: <?= $store_address?></span>
         </div>
<?php
}
}

 mysqli_close($con);
?>
        <div class="show_btn_div">
            <button class='btn_store_update' onclick="location.href='./seller_store_pic.php?seller_num=<?=$seller_num?>'">수정하기</button>
        </div>

     </div>
   </div>


       </div> <!-- div_section -->
     </div><!-- container -->
   </div><!-- right_content -->
       </div> <!-- end of my_info_content -->

       <footer>
         <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
       </footer>

  </body>
</html>
