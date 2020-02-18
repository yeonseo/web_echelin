<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./reservation.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <title>예약 1단계</title>

  </head>
  <script type="text/javascript">

  </script>
  <body>
    <header>
      <div class="header_div">
        <span><h3> 예약 </h3></span><span> 1/4 </span><span> 단계 </span><span> 내용 확인 </span>
      </div>
    </header>
    <section>
      <div class="main_section_div">
        <div class="date_check_div">
          <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/reservation/calendar.php"; ?>
        </div>
        <div class="notice_check_div">
          <p>업장 특이사항</p><br>
          <p>업장 특이사항</p><br>
          <p>업장 특이사항</p>
        <a class="btnnext" href="./reservation_second.php">다음단계</a>
        </div>
        </div>
    </section>
    <footer>
      <div class="footer_div" >
        <h1>푸터</h1>
      </div>
    </footer>
  </body>
</html>
