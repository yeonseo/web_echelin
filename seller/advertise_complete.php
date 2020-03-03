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
<?php

  $money_tag = $_GET['money_tag'];
  $seller_num = $_GET['seller_num'];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "select * from advertise where seller_num='$seller_num'";
  $result = mysqli_query($con, $sql);

  $count = mysqli_num_rows($result);

  for( $i = 0 ; $i < $count ; $i++ ){

    mysqli_data_seek($result, $i);

    $row = mysqli_fetch_array($result);

    $num = $row['num'];
  }


?>

            <div class="my_comment_title">
              <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 광고 신청</span><br><br>
              <span class="comment_title_main">우리 가게 광고</span>
            </div>

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

          <div class="seller_adv_complete">

            <div class="card_menu_complete">

              <div class="complete_main">

                <div class="card_menu_btn_name">신청 완료</div>
                <div class="card_menu_btn_disc">광고를 신청 하셨습니다.</div>

              </div>
<?php

  if($count == 0 || $num <= 20){

?>
              <div class="complete_order">
                <span>광고 적용중!</span>
                <p>:: 현 대기 순번</p>
              </div>
<?php
}else{
  $wait_num = $num - 20;
?>
              <div class="complete_order">
                <span><?= $wait_num?></span>
                <p>:: 현 대기 순번</p>
              </div>
<?php
}
?>
              <button class="seller_myp_btn" onclick="location.href='./advertise_first.php?money_tag=<?=$money_tag?>'">마이페이지로 돌아가기</button>

            </div>

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
