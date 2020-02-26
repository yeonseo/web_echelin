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
                <!-- 사이드 메뉴 -->
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
            </div>

            <?php
            //디비에서 사용자 아이디로 만들어진 메세지 목록 가져올 예정
            //메세지 번호로 어쩌구 저쩌구 할 예정

            //메세지로 가져온 목록 수 대로 포문 돌려서 밑에 애들 만들 예정
            $massage_num = "123123123"

            ?>
            <div class="right_content">
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">문의목록이 될 거시다</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 문의 제목</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 문의 제목</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 문의 제목</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 문의 제목</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>