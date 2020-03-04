<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 타이틀 변수를 부르기 위해 common_class_value.php를 부르고 선언함 -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/css/reservation.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/css/restaurants_page.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/css/help_center_page.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <script src="./js/vendor/modernizr.custom.min.js"></script>
    <script src="./js/vendor/jquery-1.10.2.min.js"></script>
    <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
  </head>
  <body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
<?php

$seller_num=get('seller_num');
$store_name=get('store_name');
$select_date=get('select_date');
if (isset($_SESSION["user_Email"])){
   $user_email = $_SESSION["user_Email"];
}
else {
  echo("<script>
  alert('로그인 후에 이용할 수 있습니다.');
  location.href='../restaurants/restaurants_index.php?seller_num=$seller_num';
  </script>");
}

function get($name){
  if (isset($_GET[$name])) {
      $get_result= $_GET[$name];
  } else {
      $get_result= '어?';
  }
  return $get_result;
}
?>


    <section><div class="div_step">
      <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
      <span class="span_step_info">예약이 완료되었습니다.</span>
    </div>
    <progress value="100" max="100">0%</progress>
    <div class="restaurants_main_content_box">
     <div class="restaurants_center_content">

      <?php

      echo  "<h1 class= \"hcomplete\">".$select_date."에 ". $store_name."(으)로의 예약 완료</h1>";

       ?>
            <div class="reservation_complete_content_right_btn_box">
            <button onclick="location.href='../index.php'"><i class="fas fa-utensils"></i> &nbsp; 홈으로 </button>
            <button onclick="location.href='../user/user_mypage_reserv.php'"><i class="fas fa-utensils"></i> &nbsp; 예약 내역 목록 </button>

               </div>
          </div>

        </div>

    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>

  </body>
</html>
