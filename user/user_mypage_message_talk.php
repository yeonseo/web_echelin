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
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/message_talk.css">

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
                <!-- 사이드 메뉴 -->
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
            </div>
            <div class="right_content">
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_message_send" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

            </div><!-- end of right_content -->

            <div class="right_content">
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_message_receive" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
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