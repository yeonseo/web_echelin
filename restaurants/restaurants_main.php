<div class="restaurants_content">

    <div class="restaurants_main_pic_box">
        <?php

        if (isset($_GET['seller_num'])) {
            $seller_num = $_GET['seller_num'];
        } else {
            // echo "console.log('레스토랑 주소가 이상한데에~')";
        }

        $seller_num = 1;



        function setMenuImg($con, $dbname, $seller_num)
        {

            //restaurants 테이블에서 값들고옴
            $seller_num = 1;

            $sql = "select * from " . $dbname . ".store_img where seller_num=" . $seller_num;
            $result = $con->query($sql);
            if ($result === FALSE) {
                die('DB seller Connect Error: ' . mysqli_error($con));
            }
            $rowcount = 0;
            while ($row = mysqli_fetch_array($result)) {
                $store_file_copied  = $row["store_file_copied"];
                if ($rowcount == 0) {
        ?>
                    <div class="pic_box_left">
                        <img src="../seller/storeimg/<?= $store_file_copied ?>" alt="">
                    </div>

                <?php
                } else {
                ?>
                    <div class="pic_box_right">
                        <img src="../seller/storeimg/<?= $store_file_copied ?>" alt="">
                    </div>

        <?php
                }

                $rowcount++;
            }
        }
        setMenuImg($con, $dbname, $seller_num);
        ?>
    </div>



    <!-- 화면 위쪽의 버튼들 -->
    <?php
    echo "<form id='restaurant_upper_buttons' name='restaurant_upper_buttons' method='POST' >";
    echo "<div class='restaurants_upper_btn_box'>";
    echo "<input id='restaurant_seller_id' type='text' value='$seller_num' hidden>";
    echo "<button type='button' id='restaurant_bookmark_btn' class='button_next' value='restaurant_bookmark'><i class='fas fa-heart'></i> &nbsp; List </button>";
    echo "<button type='button' id='restaurant_share_btn' class='button_next' value='restaurant_share'><i class='fas fa-share-alt'></i> &nbsp; Share </button>";
    echo "</div> <!-- end of restaurants_upper_btn_box -->";

    echo "<div class='restaurants_bottom_btn_box'>";
    echo "<button type='button' id='restaurant_bookmark_btn' class='button_next' value='restaurant_bookmark'><i class='fas fa-heart'></i> &nbsp; List </button>";
    echo "</div> <!-- end of restaurants_bottom_btn_box -->";
    echo "</form>";


    echo "<div class='dim-layer'>";
    echo "<div class='dimBg'></div>";

    echo "<div id='layer2' class='pop-layer'>";
    echo "<div class='pop-container'>";
    echo "<div class='pop-conts'>";
    // content
    echo "<p class='ctxt mb20'>Thank you.<br>
    Your registration was submitted successfully.<br>
    Selected invitees will be notified by e-mail on JANUARY 24th.<br><br>
    Hope to see you soon!
    </p>

    <div class='btn-r'>
        <a href='#' class='btn-layerClose'>Close</a>
    </div>";
    // content

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div> <!-- end of dim-layer -->";
    ?>

    <a href="#layer2" class="btn-example">딤처리 팝업레이어 1</a>




    <div class="restaurants_main_content_box">
        <div class="restaurants_center_content">

            <div class="restaurants_main_content_right_btn_box">
                <button onclick="location.href='../reservation/reservation_first.php?seller_num=<?= $seller_num ?>'"><i class="fas fa-utensils"></i> &nbsp; 예약하러 가기 </button>
            </div>

            <?php

            function getJsonDataMakeArticle($con, $dbname, $seller_num)
            {

                //restaurants 테이블에서 값들고옴
                $seller_num = 1;

                $sql = "select * from " . $dbname . ".seller where seller_num=" . $seller_num;
                $result = $con->query($sql);
                if ($result === FALSE) {
                    die('DB seller Connect Error: ' . mysqli_error($con));
                }

                $result_restaurant = mysqli_fetch_array($result);

                // 디비에서 상점 데이터를 가지고 와서 만들어줄것
                // 일단 임시값
                $upso_nm = $result_restaurant['store_name'];
                $upso_keyword = '이거슨 키워드';
                $upso_description = $result_restaurant['introduction'];
                $upso_facilities = explode(',', $result_restaurant['convenient_facilities']);

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

                echo "<ul class=restaurant_keyword_list>";
                for ($i = 0; $i < count($upso_facilities); $i++) {
                    echo  "<li><i class=\"fas fa-hashtag\"></i>" . $upso_keyword . "</<i></li>";
                } //end of for
                echo "</ul>";
                echo "</div>";

                echo "<div class=" . COMMON::$css_article_content_sub_title . ">";
                echo "<p>" . $upso_description . "</p>";
                echo "<a href=\"#\">식당에 문의하기</a>";
                echo "</div>";

                echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">";
                echo "<h3>편의시설</h3>";
                echo "<ul class=restaurant_facilities_list>";
                for ($i = 0; $i < count($upso_facilities); $i++) {
                    echo  "<li><i class=\"fas fa-hashtag\"></i>" . $upso_facilities[$i] . "</<i></li>";
                } //end of for
                echo "<a href=\"#\">편의시설 모두보기</a>";
                echo "</ul>";

                echo "</br>무권아 코맨드 집어넣어죠오오오오ㅓㅏㅁㅊ핀엎 ㅗ민어푸니</br>";
                echo "</i> ";
                echo "</div>";
                echo "</div> <!-- end of css_article_content_box -->";
            }

            getJsonDataMakeArticle($con, $dbname, $seller_num);
            ?>

            <script language="JavaScript" type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/js/restaurants_bookmark.js"></script>

        </div><!-- end of restaurants_center_content -->

    </div><!-- end of restaurants_main_content_box -->

</div><!-- end of restaurants_content -->