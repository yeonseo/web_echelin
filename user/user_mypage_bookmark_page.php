<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>


    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/user_seller.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/message_talk.css">

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
            <div class="right_content">
                <?php
                function createListInBookmark($con, $dbname, $user_email, $bookmark_page)
                {
                    //많은 양의 데이터 처리 시, 사용
                    ini_set('memory_limit', '-1');

                    $sql = "select * from bookmark where `user_id`='" . $user_email . "' and group_num=" . $bookmark_page . " order by bookmark_num desc";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB bookmark_num Connect Error: ' . mysqli_error($con));
                    }
                    $total_rows_bookmark = mysqli_num_rows($result);

                    //수정버튼 생성
                    echo "<form id='user_myinfo_bookmark' name='user_myinfo_bookmark' method='POST' >";
                    echo "<div class='btn_r'>
                        <button type='button' class='button_next' id='restaurant_bookmark_modify' value='modify_bookmark' ><i class='fas fa-heart'></i> &nbsp; 편집하기 </button>
                        </div>";

                    echo "</form>";


                    //메세지 리스트 부름
                    for ($i = 0; $i < $total_rows_bookmark; $i++) {
                        mysqli_data_seek($result, $i);
                        $result_bookmark = mysqli_fetch_array($result);

                        $bookmark_num = $result_bookmark["bookmark_num"];
                        $user_id = $result_bookmark["user_id"];
                        $bookmark_subject = $result_bookmark["bookmark_subject"];
                        $group_num    = $result_bookmark["group_num"];
                        $seller_num    = $result_bookmark["seller_num"];
                        $regist_day  = $result_bookmark["regist_day"];
                        $file_name  = $result_bookmark["file_name"];

                        $sql = "select * from seller where seller_num=" . $seller_num;
                        $result_seller = $con->query($sql);
                        if ($result_seller === FALSE) {
                            die('DB bookmark_num, seller Connect Error: ' . mysqli_error($con));
                        }
                        $result_seller_array = mysqli_fetch_array($result_seller);

                        //북마크 그룹넘버를 겟방식으로 넘김
                        echo "<div class=" . COMMON::$css_card_menu_row . ">";
                        echo "<button class=" . COMMON::$css_card_menu_btn . "type='button' value='$seller_num'>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_icon . "><i class='fas fa-utensils'></i></div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_name . ">" . $result_seller_array['store_name'] . "</div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">" . $result_seller_array['store_type'] . "</div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">" . $result_seller_array['convenient_facilities'] . "</div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">" . $result_seller_array['introduction'] . "</div>";
                        echo "</button> <!-- end of css_card_menu_btn -->";
                        echo "</div> <!-- end of css_card_menu_row -->";
                    }
                }
                ?>

                <!-- 북마크 가져오기 -->
                <?php
                //북마크 그룹 겟방식으로 들고오기
                if (isset($_GET['bookmark_page'])) {
                    $bookmark_page = $_GET['bookmark_page'];
                } else {
                    echo "console.log('북마크 넘버 안들고오는데에~~~ 이상한데에~')";
                }
                $user_email = 'aaaaaa';
                $bookmark_page = $_GET['bookmark_page'];
                createListInBookmark($con, $dbname, $user_email, $bookmark_page);

                ?>

                <script language="JavaScript" type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/js/user_mypage_message_talk.js"></script>

            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>