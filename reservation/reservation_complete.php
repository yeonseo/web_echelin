

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

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <script src="./js/vendor/modernizr.custom.min.js"></script>
    <script src="./js/vendor/jquery-1.10.2.min.js"></script>
    <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
  </head>
  <body>


    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_haeder/header_small.php"; ?>
    </header>
    <section><div class="div_step">
      <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
      <span class="span_step_info">예약이 완료되었습니다.</span>
    </div>
    <progress value="100" max="100">0%</progress>



      <div class="main_section_div">
        <div class="date_check_div">

        </div>
        <div class="notice_check_div">
          예약내용@@@ <br>
          예약이 다 되었음
        <a class="btnnext">확인</a>
        </div>

    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_haeder/footer.php"; ?>
    </footer>

  </body>
</html>
