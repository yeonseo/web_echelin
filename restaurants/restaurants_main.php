<div class="restaurants_content">

    <?php

    if (isset($_GET['seller_num'])) {
        $seller_num = $_GET['seller_num'];
    } else {
        // echo "console.log('레스토랑 주소가 이상한데에~')";
    }
    ?>

    <div class="restaurants_main_pic_box">

        <?php



        function setMenuImg($con, $dbname, $seller_num)
        {

            //restaurants 테이블에서 값들고옴

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
    if (isset($_SESSION['user_Email'])) {
        $user_email = $_SESSION['user_Email'];
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

                $user_email = $_SESSION['user_Email'];
                //대화한 이력이 있는지 조회
                $sql = "select * from message where `send_id`='" . $user_email . "' and `seller_num`='" . $seller_num . "'";

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
                    $total_rows_message_group = mysqli_fetch_array($result);
                    $message_group_num = $total_rows_message_group['group_num'] + 1;


                    //첫 메세지 입력
                    $content = "셀러에게 문의 메세지를 남겨보세요~";
                    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장

                    $sql = "INSERT INTO `message` (`send_id`, `seller_num`, `group_num`, `group_order`, `subject`, `content`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
                        ('$user_email', '$seller_num' , '$message_group_num', 0, '', '$content', '$regist_day', '', '', '');
                    ";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB ajax insertMessageTalk Connect Error: ' . mysqli_error($con));
                    }
                }

                // echo "<a href='/echelin/user/user_mypage_message_talk.php?message=" . $message_group_num . "'\">식당에 문의하기</a>";
                ?>
                <button onclick="location.href='../reservation/reservation_first.php?seller_num=<?= $seller_num ?>'"><i class="fas fa-utensils"></i> &nbsp; 예약하러 가기 </button>
                <button onclick="location.href='../user/user_mypage_message_talk.php?message=<?= $message_group_num ?>'"><i class="fas fa-comments"></i> &nbsp; 문의하러 가기 </button>
            </div>

            <?php

            function getJsonDataMakeArticle($con, $dbname, $seller_num)
            {
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
                    echo  "<li><i class=\"fas fa-hashtag\"></i>" . $upso_facilities[$i] . "</li>";
                } //end of for
                echo "<a href=\"#\">편의시설 모두보기</a>";
                echo "</ul>";

                echo "</div>";
                echo "</div> <!-- end of css_article_content_box -->";
            }

            getJsonDataMakeArticle($con, $dbname, $seller_num);
            ?>

            <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services"></script>
            <?php
            $sqlmap = "select * from seller where seller_num='$seller_num'";
            $result_map = mysqli_query($con, $sqlmap);
            $row_map = mysqli_fetch_array($result_map);
            $store_name = $row_map["store_name"];
            $store_lat = $row_map["store_lat"];
            $store_lon = $row_map["store_lon"];
            ?>
            <div id="map" style="width:66.7%;height:350px;"></div> <!-- 지도 담는 div -->
            <script type="text/javascript">
                var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                    mapOption = {
                        center: new kakao.maps.LatLng(<?= $store_lat ?>, <?= $store_lon ?>), // 지도의 중심좌표
                        level: 3 // 지도의 확대 레벨
                    };

                var map = new kakao.maps.Map(mapContainer, mapOption);

                // 마커가 표시될 위치입니다
                var markerPosition = new kakao.maps.LatLng(<?= $store_lat ?>, <?= $store_lon ?>);

                // 마커를 생성합니다
                var marker = new kakao.maps.Marker({
                    position: markerPosition
                });

                // 마커가 지도 위에 표시되도록 설정합니다
                marker.setMap(map);

                var iwContent = '<div style="width:150px;text-align:center;padding:6px 0;"><?= $store_name ?></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                    iwPosition = new kakao.maps.LatLng(<?= $store_lat ?>, <?= $store_lon ?>); //인포윈도우 표시 위치입니다

                // 인포윈도우를 생성합니다
                var infowindow = new kakao.maps.InfoWindow({
                    position: iwPosition,
                    content: iwContent
                });

                // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
                infowindow.open(map, marker);
            </script>


            <!-- 리뷰 -->

            <div class="user_comment_title">
                <span>게스트 후기</span>

                <p class="star_rating">
                    <a href="#" class="on">★</a>
                    <a href="#" class="on">★</a>
                    <a href="#" class="on">★</a>
                    <a href="#">★</a>
                    <a href="#">★</a>
                </p>
            </div>

            <div class="user_comment">


                <?php
                define('SCALE', 10);


                if (isset($_GET["page"])) // 넘어온 get방식에 키값 page가 세팅되어있느냐. 없으면 post. 굳이 이렇게 쓰는것은 어디선가 get방식으로 보내겠다는 뜻.
                    $page = $_GET["page"];
                else
                    $page = 1;

                if (isset($_GET["nowpagelist"])) {
                    $now_page_list = $_GET["nowpagelist"];
                    $first_num = $now_page_list - 9;
                } else {
                    $now_page_list = 10;
                    $first_num = 1;
                }

                $con = mysqli_connect("localhost", "root", "123456", "echelin");
                $sql = "select * from review where seller_num='$seller_num'";
                $result = mysqli_query($con, $sql);
                $total_record = mysqli_num_rows($result); // 전체 글 수 // 레코드셋 개수체크함수

                $scale = 5;

                // 전체 페이지 수($total_page) 계산
                if ($total_record % $scale == 0)
                    $total_page = floor($total_record / $scale);
                else
                    $total_page = floor($total_record / $scale) + 1;

                // 표시할 페이지($page)에 따라 $start 계산
                $start = ($page - 1) * $scale;

                $number = $total_record - $start;

                for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {

                    mysqli_data_seek($result, $i);
                    // 가져올 레코드로 위치(포인터) 이동
                    $row = mysqli_fetch_array($result);
                    // 하나의 레코드 가져오기
                    $num = $row["num"];
                    $name = $row["user_name"];
                    $regist_day = $row["regist_day"];
                    $content = $row["content"];
                    $chu_up = $row["chu_up"];
                    $chu_down = $row["chu_down"];

                ?>
                    <div class="user_comment_content">

                        <div class="comment_profile_img">
                            <img src="../user/image/2020_02_27_07_32_34.jpg">
                        </div>

                        <div class="comment_profile_name">
                            <a href="#"><span><strong><?= $name ?></strong> · &nbsp;<?= $regist_day ?></span></a>
                            <p class="star_rating_content">
                                <a href="#" class="on">★</a>
                                <a href="#" class="on">★</a>
                                <a href="#" class="on">★</a>
                                <a href="#">★</a>
                                <a href="#">★</a>
                            </p>
                        </div>

                        <div class="comment_line">
                            <span><?= $content ?></span>
                        </div>

                        <div class="div_chu_box">

                            <div class="div_chu">
                                <!-- <img src="./img/like.png" onclick="update_chu('up','<?= $num ?>')"> &nbsp; <?= $chu_up ?> &nbsp;
                <img src="./img/dislike.png" onclick="update_chu('down','<?= $num ?>')"> &nbsp; <?= $chu_down ?> &nbsp; -->
                                <div id="like_count" class="like_count<?php echo $num; ?>" onclick="update_like('up','<?= $num ?>')"><img src="../user/image/like.png"> &nbsp;<?= $chu_up ?></div>
                                <div id="dislike_count" class="dislike_count<?php echo $num; ?>" onclick="update_dislike('down','<?= $num ?>')"><img src="../user/image/dislike.png"> &nbsp;<?= $chu_down ?></div>

                            </div>

                        </div>

                    <?php
                    $number--;
                }
                mysqli_close($con);

                    ?>

                    <div class="page_line">

                        <ul class="page_num">


                            <?php
                            $now_page_list_add = $now_page_list;
                            if ($total_page >= 2 && $page >= 2) {
                                $new_page = $page - 1;

                                if ($page > 10) {
                                    $now_page_list_minas = $now_page_list - 10;
                                    $next_new_page = $now_page_list_minas - 1;
                                    echo "<li><a href='restaurants_main.php?page=$next_new_page&nowpagelist=$now_page_list_minas'>◀◀&nbsp;</a> </li>";
                                }
                                if (($new_page) == ($now_page_list_add - 10)) {

                                    $new_page = $now_page_list_add - 11;
                                    $now_page_list_add -= 10;
                                    echo "<li><a href='restaurants_main.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;◀&nbsp;</a> </li>";
                                } else {
                                    echo "<li><a href='restaurants_main.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;◀&nbsp;</a> </li>";
                                }
                            } else
                                echo "<li>&nbsp;</li>";

                            // 게시판 목록 하단에 페이지 링크 번호 출력
                            for ($i = $first_num; $i < $now_page_list; $i++) {
                                if ($page == $i)     // 현재 페이지 번호 링크 안함
                                {
                                    echo "<li><b>&nbsp;$i&nbsp;</b></li>";
                                } else {
                                    echo "<li><a href='restaurants_main.php?page=$i&nowpagelist=$now_page_list'>&nbsp;$i&nbsp;</a><li>";
                                }
                            }
                            if ($total_page >= 2 && $page != $total_page) {
                                $new_page = $page + 1;




                                if (($now_page_list_add - 1) == $page) {
                                    $new_page = $now_page_list_add + 1;
                                    $now_page_list_add += 10;
                                    echo "<li><a href='restaurants_main.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;▶</a> </li>";
                                } else {
                                    echo "<li><a href='restaurants_main.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;▶</a> </li>";
                                }


                                // echo "<li> <a href='comment_list.php?page=$new_page&nowpagelist=$now_page_list'>▶&nbsp;</a> </li>";

                                if ($now_page_list + 10 < floor($total_record / SCALE)) {
                                    $now_page_list_add = $now_page_list + 10;
                                    $next_new_page = $now_page_list + 1;
                                    echo "<li> <a href='restaurants_main.php?page=$next_new_page&nowpagelist=$now_page_list_add'>&nbsp;▶▶</a> </li>";
                                }
                            } else
                                echo "<li>&nbsp;</li>";
                            ?>
                        </ul> <!-- page num -->

                    </div> <!-- end of user_comment -->

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