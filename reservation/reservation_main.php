

<!DOCTYPE html>
<html>

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
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
    <section>
      <div class="main_section_div">
          <img src="./img/topmain.png" alt="">
          <img src="./img/topmain1.png" alt="">
          <img src="./img/topmain2.png" alt="">
          <img src="./img/topmain3.png" alt="">
          <img src="./img/topmain3_1.png" alt="">
          <img src="./img/topmain4.png" alt="">
          <img src="./img/topmain5.png" alt="">
        </div>

        <div class="div_prv_next_button">
          <button class="button_next" type="button" name="button" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_first.php'">다음</button>
          <button class="button_prev" type="button" name="button" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_main.php'">이전</button>
        </div>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>
</body>

</html>
