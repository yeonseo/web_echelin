<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">


    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  </head>
  <body>

    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <section>

      <div class="my_info_content">

        <div class="left_menu">

            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
        </div>

        <div class="right_content">

          <div class="container">

            <div class="my_comment_title">
              <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 광고 신청</span><br><br>
              <span class="comment_title_main">우리 가게 광고</span>
            </div>

          <div class="div_section">

            <div class="show_main">

              <div class="show_basic">

<?php
$useremail = "infor15";

$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select EXISTS (select * from seller) as success";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if($row['success'] == 0){

?>
              <div class="show_no">
                <span class="no_span">판매자님의 가게가 없어요.</span>
              </div>
<?php

}else{

  if(isset($_GET['money_tag'])){
    $money_tag = $_GET['money_tag'];
  }else{
    $money_tag = "";
  }

  $sql = "select * from seller where user_id='$useremail'";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_array($result)){

    $seller_num = $row['seller_num'];
    $store_name = $row['store_name'];
    $store_address = $row['store_address'];
    $introduction = $row['introduction'];

    $sql2 = "select * from store_img where seller_num='$seller_num'";

    $result2 = mysqli_query($con, $sql2);

    while($row = mysqli_fetch_array($result2)){

    $store_file_name = $row['store_file_name'];
    $store_file_type = $row['store_file_type'];
    $store_file_copied = $row['store_file_copied'];
?>

             <div class="show_element">
              <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?= $store_file_copied;?>">

              <div class="element_main">
                <span class="span_first">매장 명 ::: <?= $store_name?></span>
                <span class="span_second">소개 ::: <?= $introduction?></span>
                <span class="span_third">주소 ::: <?= $store_address?></span>
              </div>
<?php

    $sql3 = "select * from advertise where seller_num='$seller_num'";
    $result3 = mysqli_query($con, $sql3);

    $row3 = mysqli_fetch_array($result3);

    $noshow = $row3['noshow'];
    $regist_day = $row3['regist_day'];

    date_default_timezone_set('Asia/Seoul');
    $time_now = date("Y-m-d (H:i)", strtotime("-1 days"));

    if($regist_day < $time_now){
      $delete_sql = "delete from advertise where seller_num='$seller_num'";
      mysqli_query($con, $delete_sql);
    }


      if($noshow == true){

?>
                <div class="show_btn_div">
                  <span>광고 신청 완료!</span>
                  <button class='btn_adver_click' onclick="location.href='./advertise_complete.php?seller_num=<?=$seller_num?>&money_tag=<?=$money_tag?>'">광고 현황 보기</button>
                </div>
<?php

      }elseif($noshow == false){

?>
                <div class="show_btn_div">
                  <span>광고 신청 가능</span>
                  <button class='btn_adver_click' onclick="location.href='./advertise_second.php?seller_num=<?=$seller_num?>'">광고 신청하기</button>
                </div>

<?php
      }

?>
            </div> <!-- element_main -->
<?php

        }
      }
    }
      mysqli_close($con);
?>

          </div>
        </div>


            </div> <!-- div_section -->
          </div><!-- container -->
        </div><!-- right_content -->
      </div><!-- my_info_content -->

    </section>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>

  </body>
</html>
