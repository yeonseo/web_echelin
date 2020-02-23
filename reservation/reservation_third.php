

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">
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
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
        </header>
        <section><div class="div_step">
          <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
          <span class="span_step_info">3단계 : 예약 내역을 확인해주세요.</span>
        </div>
        <progress value="60" max="100">0%</progress>




          <div class="main_section_div">
            <div class="date_check_div">
              <p>어느날짜에 예약했고</p><br>
              <p>몇명이서 갈거다.</p>
            </div>
            <div class="notice_check_div">
              <p>무슨 메뉴를 선택했고</p><br>
              <p>아이는 몇명이고</p><br>
              <p>기타 특이사항</p><br>
              <p>그래서 얼마를 결제해야하기에</p><br>
              <p>확인해라</p>
            <a class="btnnext" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_pay.php">결제</a>
            </div>






        <div class="div_prv_next_button">
          <button class="button_next" type="button" name="button" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_pay.php'">다음</button>
          <button class="button_prev" type="button" name="button" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_second.php'">이전</button>
        </div>
        </section>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
        </footer>
    </body>
</html>
