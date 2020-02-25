<div class="my_info_content">
    <div class="left_menu">

        <div class="my_info_profile">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
        </div>

        <!-- 순서대로쭉쭉 -->
        <ul>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">유저 정보변경(업뎃예정)</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_reserv.php">예약내역 보기</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">메세지</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">찜목록</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_review.php">내가 남긴 후기</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">문의게시판(관리자랑)</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_review_input.php">후기 등록창 (임시)</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">더 필요한 리스트를 넣어요~</a> </li>
        </ul>
    </div>
    <div class="right_content">


        <div class="<?= COMMON::$css_card_menu_row; ?>">

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">정보변경(업뎃예정)</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">예약내역 확인</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">돈을벌자 돈을벌자 뜐뜐!</div>
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
