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

  <!-- 웹폰트  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <script src="./js/vendor/modernizr.custom.min.js"></script>
  <script src="./js/vendor/jquery-1.10.2.min.js"></script>
  <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>

  <!-- 아이콘 폰트  https://fontawesome.com/  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/v4-shims.css">
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_haeder/header_small.php"; ?>
  </header>
  <section>
    <div class="my_info_content">
      <div class="left_menu">

        <div class="my_info_profile">
          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
        </div>

        <!-- 순서대로쭉쭉 -->
        <ul>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">유저정보관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">업주정보관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">문의게시판관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행1열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행2열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">2행3열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행1열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행2열</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">3행3열</a></li>
        </ul>
      </div>
      <div class="right_content">


        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-user-cog"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-utensils"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-id-card"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-question-circle"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
          </button>

        </div> <!-- end of css_card_menu_row -->

      </div><!-- end of right_content -->
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>
</body>

</html>