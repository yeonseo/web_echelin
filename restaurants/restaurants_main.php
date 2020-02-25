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

    <div class="restaurants_upper_btn_box">
        <button><i class="fas fa-heart"></i> &nbsp; List </button>
        <button><i class="fas fa-share-alt"></i> &nbsp; Share</button>
    </div>
    <div class="restaurants_bottom_btn_box">
        <button><i class="fas fa-heart"></i> &nbsp; List </button>
    </div>



    <div class="restaurants_main_content_box">


        <div class="restaurants_center_content">

            <div class="restaurants_main_content_right_btn_box">
                <button><i class="fas fa-utensils"></i> &nbsp; 예약하러 가기 </button>
            </div>

            <?php

            if (isset($_GET['seller_num'])) {
                $seller_num = $_GET['seller_num'];
            } else {
                // echo "console.log('레스토랑 주소가 이상한데에~')";
            }

            $seller_num = 1;
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

                echo "</div> <!-- end of css_article_content_box -->";
            }

            getJsonDataMakeArticle($con, $dbname, $seller_num);
            ?>

        </div><!-- end of restaurants_center_content -->

    </div><!-- end of restaurants_main_content_box -->

</div><!-- end of restaurants_content -->