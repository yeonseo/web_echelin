<div class="restaurants_content">

    <div class="restaurants_main_pic_box">
        <div class="pic_box_left">
            <img src="" alt="">
        </div>
        <div class="pic_box_right">
            <img src="" alt="">
        </div>
        <div class="pic_box_right">
            <img src="" alt="">
        </div>
        <div class="pic_box_right">
            <img src="" alt="">
        </div>
        <div class="pic_box_right">
            <img src="" alt="">
        </div>
    </div>

    <div class="restaurants_main_upper_btn_box">
        <button><i class="fas fa-heart"></i> &nbsp; List </button>
        <button><i class="fas fa-share-alt"></i> &nbsp; Share</button>
    </div>
    <div class="restaurants_main_bottom_btn_box">
        <button><i class="fas fa-heart"></i> &nbsp; List </button>
    </div>

    <div class="right_content">



        <?php
        function getJsonDataMakeArticle()
        {
            // 디비에서 상점 데이터를 가지고 와서 만들어줄것
            // 일단 임시값
            $upso_nm = '가게이름이야아앙';
            $upso_keyword = '이거슨 키워드 리스트가 될 예저어어어엉ㅍ';
            $upso_description = '가게 설며엉어어어어엎';
            $upso_facilities = '이거슨 편의시설 리스트가 될 예저어어어엉ㅍ';

            // 다차원 배열 반복처리 (필요시 사용)
            ini_set('memory_limit', '-1');

            if (json_last_error() > 0) {
                echo json_last_error_msg() . PHP_EOL;
            }

            //print_r($result_json);
            //print_r($sub_json_object_array); // 배열 요소를 출력해준다.


            echo "<div class=" . COMMON::$css_article_content_box . ">";

            echo "<div class=" . COMMON::$css_article_content_title . ">";
            echo "<h1>" . $upso_nm . "</h1>";

            echo "<ul>";
            for ($i = 0; $i < 3; $i++) {
                echo  "<li>" . $upso_keyword . "</li>";
            } //end of for
            echo "</ul>";
            echo "</div>";

            echo "<div class=" . COMMON::$css_article_content_sub_title . ">";
            echo "<p>" . $upso_description . "</p>";
            echo "<button>식당에 연락하기</button>";
            echo "</div>";

            echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">";
            echo "<h3>편의시설</h3>";
            echo "<ul>";
            for ($i = 0; $i < 4; $i++) {
                echo  "<li>" . $upso_facilities . "</li>";
            } //end of for
            echo "<button>편의시설 모두보기</button>";
            echo "</ul>";

            echo "</br>무권아 코맨드 집어넣어죠오오오오ㅓㅏㅁㅊ핀엎 ㅗ민어푸니</br>";
            echo "</div> ";

            echo "</div> <!-- end of css_article_content_box -->";
        }

        getJsonDataMakeArticle();
        ?>


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



    </div><!-- end of right_content -->