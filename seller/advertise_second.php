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

      function check_pay(classN, val){
        document.getElementById(classN).value = val;
      }

      function check_input() {

        var chk_radio = document.getElementsByName('chk_pay');

        var sel_type = null;

        for( var i=0 ; i < chk_radio.length ; i++){
          if(chk_radio[i].checked == true){
            sel_type = chk_radio[i].value;
          }
        }

        if(sel_type == null){
          alert("광고 게시 시간을 선택하세요.");
          return false;
        }

        document.adver_form.submit();
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

            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
        </div>

        <div class="right_content">

          <div class="container">

            <div class="my_comment_title">
              <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 광고 신청</span><br><br>
              <span class="comment_title_main">우리 가게 광고</span>
            </div>

<?php
  $user_email = "infor15";

  $seller_num = $_GET['seller_num'];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "select * from echelin_user where user_Email='$user_email'";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($result);

  $user_profile = $row['user_profile'];
  $user_profile_copied = $row['user_profile_copied'];
  $user_profile_type = $row['user_profile_type'];


  $sql2    = "select * from seller where seller_num='$seller_num'";
  $result2 = mysqli_query($con, $sql2);

  $row2 = mysqli_fetch_array($result2);

  $store_name = $row2['store_name'];

  $sql3    = "select * from advertise";
  $result3 = mysqli_query($con, $sql3);

  $count = mysqli_num_rows($result3);

  for( $i = 0 ; $i < $count ; $i++ ){

    mysqli_data_seek($result, $i);

    $row = mysqli_fetch_array($result);

    $num = $row['num'];
  }

?>

      <div class="seller_adv_notice">

        <button class="adv_menu_btn" type="button">
          <i class="far fa-id-card"></i>
          <div class="adv_menu_btn_name">광고 신청</div>
          <div class="adv_menu_btn_disc">홈페이지에 가게를 소개해주세요.</div>
        </button>

        <button class="adv_menu_btn" type="button">
          <i class="fas fa-clipboard-list"></i>
          <div class="adv_menu_btn_name">수수료</div>
          <div class="adv_menu_btn_disc">24시간 동안 게시 할 수 있어요.</div>
        </button>

      </div>

      <div class="seller_adv_line1"></div>

      <div class="seller_adv_main">

        <form name="adver_form" method="post" action="./seller_advertise_curd.php?seller_num=<?=$seller_num?>" enctype="multipart/form-data">

            <div class="seller_profile_img">
              <!--<a href="#"><img src="./data/<?php echo $user_profile_copied; ?>"></a>-->
              <a href="#"><img src="../user/image/2020_02_27_07_28_29.jpg"></a>
            </div>

            <div class="seller_name">
              <span><?php echo $username;?> · <?php echo $user_email;?> </span>
            </div>

            <div class="seller_adv_line2"></div>

            <input class="seller_tag" type="text" value="<?php echo $store_name;?>" readonly>


            <br>

            <div class="seller_timecheck">

              <input type="radio" name="chk_pay" value="1,800kw" onclick="check_pay('seller_tag_id', this.value)"> 24시간 &nbsp&nbsp
              <!-- <input type="radio" name="chk_pay" value="3,000kw" onclick="check_pay('seller_tag_id', this.value)"> 48시간 -->

            </div>

            <input id="seller_tag_id" class="seller_tag" name="money_tag" type="text" placeholder=" 수수료" readonly>

            <div class="seller_adv_line3"></div>

<?php

  if($count == 0 || $num <= 20){

?>
            <input class="seller_tag" type="text" placeholder=" 현재 대기 순위 : 대기 없음" readonly>
<?php
}else{
  $wait_num = $num - 20;
?>
            <input class="seller_tag" type="text" placeholder=" 현재 대기 순위 : <?= $wait_num?>" readonly>
<?php
}
?>

            <button class="seller_adver_apply" type="button" onclick="check_input()">광고 신청 하기</button>

        </form>
      </div>

      </div><!-- right_content -->
    </div>
    </div><!-- my_info_content -->

    </section>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>

  </body>
</html>
