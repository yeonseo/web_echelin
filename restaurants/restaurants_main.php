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

    //팝업창에서 나타낼 북마크를 부르기 위한 함수
    if (isset($_SESSION['user_email'])) {
        $user_email = $_SESSION['user_email'];
    } else {
        // echo "console.log('유저 세션이 없다는데~~~~ 이상한데에~')";
    }
    function createBookmarkGroupList($con, $dbname, $user_email)
    {
        //메세지 그룹 계산하기 위한 것
        $sql = "select bookmark_num, group_num, ANY_VALUE(group_num) from bookmark where `user_id`='" . $user_email . "' group by `group_num` order by bookmark_num asc";
        $result = $con->query($sql);
        if ($result === FALSE) {
            die('DB bookmark where ANY_VALUE(group_num) Connect Error: ' . mysqli_error($con));
        }

        //쪽지 리스트 갯수
        $total_rows_bookmark_group = mysqli_num_rows($result);

        // 다차원 배열 반복처리 (필요시 사용)
        ini_set('memory_limit', '-1');

        for ($i = 0; $i < $total_rows_bookmark_group; $i++) {
            mysqli_data_seek($result, $i);
            $result_bookmark = mysqli_fetch_array($result);

            //가장 최신의 메세지를 가져오기 위한 sql
            $sql = "select * from bookmark where `group_num`='" . $result_bookmark['group_num'] . "' order by `bookmark_num` desc";
            $result_bookmark_group = $con->query($sql);
            if ($result_bookmark_group === FALSE) {
                die('DB message where group_num Connect Error: ' . mysqli_error($con));
            }
            $result_bookmark_content = mysqli_fetch_array($result_bookmark_group);

            $bookmark_num = $result_bookmark_content["bookmark_num"];
            $user_id = $result_bookmark_content["user_id"];
            $subject    = $result_bookmark_content["bookmark_subject"];
            $group_num = $result_bookmark_content["group_num"];
            $seller_num    = $result_bookmark_content["seller_num"];
            $regist_day  = $result_bookmark_content["regist_day"];
            $file_name  = $result_bookmark_content["file_name"];
            //메세지 그룹넘버를 겟방식으로 넘김
            echo "<li class='selected_bookmark_group'><button type='button' value='$group_num'><i class='fas fa-heart' id='selected_bookmark_group$group_num'></i><input id='selected_bookmark_subject$group_num' type='text' value='$subject' hidden> &nbsp; $subject </button></li>";
        }
        $group_num = $group_num + 1;
        echo "<li class='selected_bookmark_group'><button type='button' value='$group_num'><i class='fas fa-heart' id='selected_bookmark_group$group_num'></i><input id='selected_bookmark_subject_input' type='text' value=''></button></li>";
    }


    //위쪽 버튼 나타내기
    echo "<form id='restaurant_upper_buttons' name='restaurant_upper_buttons' method='POST'>";
    echo "<div class='restaurants_upper_btn_box'>";
    echo "<input id='restaurant_seller_id' type='text' value='$seller_num' hidden>";
    echo "<button type='button' id='restaurant_bookmark_btn' class='button_next' value='restaurant_bookmark'><i class='fas fa-heart'></i> &nbsp; List </button>";
    echo "<button type='button' id='kakao-link-btn' class='button_next' value='restaurant_share' href='javascript:;'><i class='fas fa-share-alt'></i> &nbsp; Share </button>";
    echo "</div> <!-- end of restaurants_upper_btn_box -->";

    // echo "<div class='restaurants_bottom_btn_box'>";
    // echo "<button type='button' class='button_next' value='restaurant_bookmark' onClick='layer_popup();'><i class='fas fa-heart'></i> &nbsp; List </button>";
    // echo "</div> <!-- end of restaurants_bottom_btn_box -->";
    echo "</form>";


    //팝업창 띄우기 부분
    echo "<div class='dim_layer'>";
    echo "<div class='dimBg'></div>";
    echo "<div id='layer2' class='pop_layer'>";
    echo "<div class='pop_container'>";
    echo "<div class='pop_conts'>";

    echo "<form id='restaurant_popup_buttons' name='restaurant_popup_buttons' method='POST' >";
    echo "<ul>";
    //북마크 리스트 생성 함수 부름
    //나중에 유저 세션 들고와서 할 거임
    //메세지 그룹 계산하기 위한 것
    $user_email = "aaaaaa";
    createBookmarkGroupList($con, $dbname, $user_email);
    echo "</ul>";
    echo "<div class='btn_r'>
        <button type='button' class='button_next' id='restaurant_bookmark_update' value='update_bookmark' > Save </button>
        <button type='button' class='button_next' id='button_popup_close' value='restaurant_bookmark'> Close </button>
        </div>";
    echo "</form>";

    echo "</div> <!-- end of pop_conts -->";
    echo "</div> <!-- end of pop_container -->";
    echo "</div> <!-- end of pop_layer -->";
    echo "</div> <!-- end of dim_layer -->";
    ?>



    <div class="restaurants_main_content_box">
        <div class="restaurants_center_content">

            <div class="restaurants_main_content_right_btn_box">

                <?php
                $user_email = 'aaaaaa';
                $seller_num = 'aaaaaa1';
                //대화한 이력이 있는지 조회
                $sql = "select * from message where `send_id`='" . $user_email . "' and `rv_id`='" . $seller_num . "'";
                $result = $con->query($sql);
                if ($result === FALSE) {
                    die('DB message check Connect Error: ' . mysqli_error($con));
                }

                //쪽지 리스트 갯수
                $total_rows_message_group = mysqli_num_rows($result);
                if ($total_rows_message_group > 0) {
                    $result_message = mysqli_fetch_array($result);
                    $message_group_num = $result_message['group_num'];
                } else {
                    //메세지 그룹 계산하기 위한 것
                    $sql = "select group_num, ANY_VALUE(group_num) from message where `send_id`='" . $user_email . "' group by `group_num` order by group_num desc";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB message where ANY_VALUE(group_num) Connect Error: ' . mysqli_error($con));
                    }

                    //쪽지 리스트 갯수
                    $total_rows_message_group = mysqli_num_rows($result);
                    $message_group_num = $total_rows_message_group + 1;
                }

                // echo "<a href='/echelin/user/user_mypage_message_talk.php?message=" . $message_group_num . "'\">식당에 문의하기</a>";
                ?>
                <button onclick="location.href='../reservation/reservation_first.php?seller_num=<?= $seller_num ?>'"><i class="fas fa-utensils"></i> &nbsp; 예약하러 가기 </button>
                <button onclick="location.href='../user/user_mypage_message_talk.php?message=<?= $message_group_num ?>'"><i class="fas fa-comments"></i> &nbsp; 문의하러 가기 </button>
            </div>

            <?php

            function getJsonDataMakeArticle($con, $dbname, $seller_num)
            {

                //restaurants 테이블에서 값들고옴
                $seller_num = 1;


                $sql = "select * from " . $dbname . ".seller where `seller_num`=" . $seller_num;
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

            <!-- 공유하기를 위한 자바스크립트 추가 시작 -->
            <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
            <script type="text/javascript">
                //<![CDATA[
                // // 사용할 앱의 JavaScript 키를 설정해 주세요.
                Kakao.init('3e786f8df14fcfc89d159421a6a7c9b6');
                // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
                Kakao.Link.createDefaultButton({
                    container: '#kakao-link-btn',
                    objectType: 'feed',
                    content: {
                        title: "지수네",
                        description: "엄마가 해준 밥이 먹고 싶다면 여기로 오세염",
                        imageUrl: 'https://lh3.googleusercontent.com/proxy/ZL6IbPsJ1bP5FHc3fk_ZN9V-XNUFoPOnajGpso_jHq-lKlHIXJk42CF5j8xfHzBnT7_ejQJAd_O1C3PSxP5Z12StImRx1y8Fmp6-_eHXYTTY-acX',
                        link: {
                            mobileWebUrl: 'https://developers.kakao.com',
                            webUrl: 'https://developers.kakao.com'
                        }
                    },
                    social: {
                        likeCount: 286,
                        commentCount: 45,
                        sharedCount: 845
                    },
                    buttons: [{
                            title: '웹으로 보기',
                            link: {
                                mobileWebUrl: 'https://developers.kakao.com',
                                webUrl: 'https://developers.kakao.com'
                            }
                        },
                        {
                            title: '앱으로 보기',
                            link: {
                                mobileWebUrl: 'https://developers.kakao.com',
                                webUrl: 'https://developers.kakao.com'
                            }
                        }
                    ]
                });
                //]]>
            </script>
            <!-- 공유하기를 위한 자바스크립트 추가 끝 -->
        </div><!-- end of restaurants_center_content -->

    </div><!-- end of restaurants_main_content_box -->

</div><!-- end of restaurants_content -->