<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <!-- CSS, JS 파일 링크 시, -->
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/css/help_center_page.css">
  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>


</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small_not_fillter.php"; ?>
  </header>
  <section>
    <div class="my_info_content">
      <div class="left_menu">
        <!-- 왼쪽 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/help_center_side_left_menu.php"; ?>
      </div>
      <div class="right_content">
        <h1>안녕하세요. 무엇을 도와드릴까요?</h1>
        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-user-cog"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">식당 예약</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">식당 예약 변경, 식당에 연락하기 등에 도움을 받으세요.</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">예약 관리</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">식당 관리와 손님과의 의사소통 등에 도움을 받으세요.</div>
          </button>

        </div> <!-- end of css_card_menu_row -->


        <h1>에슐랭에 처음 오셨나요?</h1>
        <h2>도움이 될 만한 게시글을 확인해보세요.</h2>

        <!-- 도움말 json 기사를 css_card_menu_row로 자동 작업 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/json_parsing_help_center.php";
        helpCenterMainButton();
        ?>
      </div><!-- end of right_content -->
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
  </footer>
</body>

</html>
