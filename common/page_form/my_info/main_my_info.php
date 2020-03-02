<div class="my_info_content">
    <div class="left_menu">

        <div class="my_info_profile">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
        </div>

        <!-- 순서대로쭉쭉 -->
        <ul>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex유저정보관리</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex업주정보관리</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex문의게시판관리</a> </li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">김성민</a></li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">김지수</a></li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">하동운</a></li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">유영삼</a></li>
            <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/test_page/index_my_info.php">테스트 페이지</a></li>
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

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">가게 등록</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게를 등록해보아요.</div>
            </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_seller_menu.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">메뉴</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게 메뉴를 등록해보아요</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_seller_store_pic.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">가게 사진</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게 사진을 등록해보아요.</div>
            </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_seller_hashtag.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">해쉬태그 설정하기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게를 표현해주세요.</div>
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
