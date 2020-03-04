<div class="my_info_content">
    <div class="left_menu">
        <!-- 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
    </div>
    <div class="right_content">
        <?php
        $sql = "select count(seller_num) from seller where user_id = '$useremail';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $count = $row[0];
        ?>

        <div class="<?= COMMON::$css_card_menu_row; ?>">

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="sellerInfoChk(<?= $count ?>)">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">내 가게 정보 수정</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">등록했던 내 가게 정보를 다시 수정할 수 있어요.</div>

            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">가게 등록하기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게를 등록해보아요.</div>
            </button>

        </div> <!-- end of css_card_menu_row -->

        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="sellerMenuChk(<?=$count?>)">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">메뉴 등록하기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게에 메뉴를 등록할 수 있어요.</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="sellerPicChk(<?=$count?>)">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">가게 사진 등록하기</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">내 가게 사진을 등록할 수 있어요.</div>
            </button>

        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_message.php'">

                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-comments"></i>
                </div>

                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">메세지</div>
                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            </button>

            <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_review.php'">
                <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                    <i class="fas fa-star"></i>
                </div>

                <div class="<?= COMMON::$css_card_menu_btn_name; ?>">고객이 남긴 후기</div>

                <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            </button>

        </div> <!-- end of css_card_menu_row -->
    </div><!-- end of right_content -->
