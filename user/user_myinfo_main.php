<div class="my_info_content">
    <div class="left_menu">
        <!-- 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
    </div>
    <div class="right_content">
        <div class="<?= COMMON::$css_card_menu_row; ?>">

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_info_update.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">내 정보변경</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">이름, 비밀번호, 전화번호 등을 수정 할 수 있어요</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_reserv.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">예약내역 보기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">예약내역에 대한 변동사항을 확인 할 수 있어요</div>
            </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">메세지</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">주고 받은 메세지를 확인 할 수 있어요</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_bookmark.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">찜목록</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">찜했던 식당들을 확인 할 수 있어요</div>
            </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_review.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">내가 남긴 후기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">다녀온 식당에 남긴 후기를 확인할 수 있습니다</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_review_input.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-question-circle"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">후기 등록하기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            </button>

        </div> <!-- end of css_card_menu_row -->

    </div><!-- end of right_content -->