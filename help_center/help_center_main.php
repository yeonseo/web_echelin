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

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>


</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
  <section>
    <div class="my_info_content">
      <div class="left_menu">
        <!-- 왼쪽 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/help_center_side_left_menu.php"; ?>
      </div>
      <div class="right_content">

        <h2>에슐랭에 처음 오셨나요?</h2>
        <h3>도움이 될 만한 게시글을 확인해보세요.</h3>
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


        <h2>에슐랭에 처음 오셨나요?</h2>
        <h3>도움이 될 만한 게시글을 확인해보세요.</h3>
        <div class="<?= COMMON::$css_card_menu_row; ?>">

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-utensils"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">긴급 상황이나 불가피한 상황으로 인해 취소해야 하는 경우에는 어떻게 하나요?</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">예기치 않은 불가피한 상황으로 예약을 취소해야 한다면 예약금을 환불하거나 취소 페널티를 면제해 드릴 수 있습니다. 에어비앤비의 '정상참작이 가능한 상황' 정책이 적용되는 경우는 아래와 같습니다. 예약을 취소하기 전에 본인의 상황이 아래 목록에 포함되어 있는지 검토하고, 필요한 증빙 서류를 제출할 수 있는지 확인해보세요.</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충</div>
          </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충</div>
          </button>

        </div> <!-- end of css_card_menu_row -->
      </div><!-- end of right_content -->
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
  </footer>
</body>

</html>