<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>


    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">

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

                if (isset($_SESSION['user_email'])) {
                    $user_email = $_SESSION['user_email'];
                } else {
                    // echo "console.log('유저 세션이 없다는데~~~~ 이상한데에~')";
                }


                function createMessageList($con, $dbname, $user_email)
                {
                    //메세지 그룹 계산하기 위한 것
                    $sql = "select group_num, ANY_VALUE(group_num) from message where `send_id`='" . $user_email . "' group by `group_num` order by group_num desc";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB message where ANY_VALUE(group_num) Connect Error: ' . mysqli_error($con));
                    }

                    //쪽지 리스트 갯수
                    $total_rows_message_group = mysqli_num_rows($result);

                    // 다차원 배열 반복처리 (필요시 사용)
                    ini_set('memory_limit', '-1');

                    for ($i = 0; $i < $total_rows_message_group; $i++) {
                        mysqli_data_seek($result, $i);
                        $result_message = mysqli_fetch_array($result);

                        //가장 최신의 메세지를 가져오기 위한 sql
                        $sql = "select * from message where `group_num`='" . $result_message['group_num'] . "' order by `message_num` desc";
                        $result_message_group = $con->query($sql);
                        if ($result_message_group === FALSE) {
                            die('DB message where group_num Connect Error: ' . mysqli_error($con));
                        }
                        $result_message_content = mysqli_fetch_array($result_message_group);

                        $message_num = $result_message_content["message_num"];
                        $send_id = $result_message_content["send_id"];
                        $rv_id = $result_message_content["rv_id"];
                        $subject    = $result_message_content["subject"];
                        $content    = $result_message_content["content"];
                        $regist_day  = $result_message_content["regist_day"];
                        $file_name  = $result_message_content["file_name"];


                        //메세지 그룹넘버를 겟방식으로 넘김
                        echo "<div class=" . COMMON::$css_card_menu_row . ">";
                        echo "<button class='card_menu_btn_wider' class=" . COMMON::$css_card_menu_btn . "type='button' onclick=\"location.href='http\://" . $_SERVER['HTTP_HOST'] . "/echelin/user/user_mypage_message_talk.php?message=" . $result_message['group_num'] . "'\">";
                        echo "<div class=" . COMMON::$css_card_menu_btn_icon . "><i class='fas fa-utensils'></i></div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_name . ">";
                        echo "<div>" . "여기는 식당 이름" . "</div>";
                        echo "<div>" . $send_id . "</div>";
                        echo "</div>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">" . $content . "</div>";
                        echo "</button> <!-- end of card_menu_btn_wider -->";
                        echo "</div> <!-- end of css_card_menu_row -->";
                    }
                }

                //나중에 유저 세션 들고와서 할 거임
                //메세지 그룹 계산하기 위한 것
                $user_email = "aaaaaa";
                createMessageList($con, $dbname, $user_email);

                ?>

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">쪽지목록이 될 거시다</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 식당 이름</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message_talk.php?message=<?= $massage_num ?>'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 식당 이름</div>
                            <div>연서 / 2020년 1월 14일</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">그날 아마 요리는 어쩌구.. 문의주신 사항은 어쩌구.. 저쩌구 ㅈ쩌구..</div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">
                            <div>여기는 식당 이름</div>
                            <div>여기는 최종메세지 보낸 사람 / 시간</div>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">여기는 식당 이름</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... 요기는 최신 메시지 내용... 말줄임 말줄임... </div>
                    </button>
                </div> <!-- end of css_card_menu_row -->

            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>