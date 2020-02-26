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
                    <button class="card_message_receive" class="card_message" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>"><i class='fas fa-quote-left'></i> Seller <i class='fas fa-quote-right'></i></div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">받은거</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">코로나19 바이러스의 전파경로는 비말(침방울) 및 호흡기 분비물(콧물, 가래 등)과의 접촉입니다.

                            바이러스에 감염된 사람이 기침, 재채기를 했을 때 공기 중으로 날아간 비말이 다른 사람의 호흡기로 들어가거나, 손에 묻은 바이러스가 눈·코·입 등을 만질 때 점막을 통해 바이러스가 침투하여 전염이 됩니다.</div></br>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">2020년 2월 2일</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->


                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_message_send" class="card_message" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>"><i class='fas fa-quote-left'></i> Me <i class='fas fa-quote-right'></i></div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">여기는 보낸거다</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">코로나19는 어떻게 전염되나요?</div></br>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">2020년 2월 2일</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_message_receive" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>"><i class='fas fa-quote-left'></i> Seller <i class='fas fa-quote-right'></i></div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">받은거</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">코로나19 바이러스의 전파경로는 비말(침방울) 및 호흡기 분비물(콧물, 가래 등)과의 접촉입니다.

                            바이러스에 감염된 사람이 기침, 재채기를 했을 때 공기 중으로 날아간 비말이 다른 사람의 호흡기로 들어가거나, 손에 묻은 바이러스가 눈·코·입 등을 만질 때 점막을 통해 바이러스가 침투하여 전염이 됩니다.</div></br>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">2020년 2월 2일</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->


                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_message_send" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>"><i class='fas fa-quote-left'></i> Me <i class='fas fa-quote-right'></i></div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">여기는 보낸거다</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">코로나19는 어떻게 전염되나요?</div></br>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">2020년 2월 2일</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>