<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./reservation.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
        <title> <?= COMMON::$title; ?> </title>
    </head>
    <script type="text/javascript"></script>
    <body>
        <header>
            <div class="header_div">
                <span>
                    <h3>
                        예약
                    </h3>
                </span>
                <span>
                    2/4
                </span>
                <span>
                    단계
                </span>
                <span>
                    메뉴 선택
                </span>
            </div>
        </header>
        <section>
          <div class="main_section_div">
            <div class="date_check_div">
              <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/reservation/menu.php"; ?>
            </div>
            <div class="notice_check_div">
              <p>업장 특이사항</p>
            <a class="btnnext" href="./reservation_third.php">다음단계</a>
            </div>
            </div>
        </section>
        <footer>
            <div class="footer_div">
                <h1>푸터</h1>
            </div>
        </footer>
    </body>
</html>
