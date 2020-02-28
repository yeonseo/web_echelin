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
                $message_group_num = 1;
                $message_;

                function createMessageTalk($con, $dbname, $message_group_num)
                {
                    $sql = "select * from message where group_num=" . $message_group_num . " order by message_num desc";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB message_num Connect Error: ' . mysqli_error($con));
                    }

                    $total_rows_talk = mysqli_num_rows($result);

                    // 다차원 배열 반복처리 (필요시 사용)
                    ini_set('memory_limit', '-1');

                    $result_message = mysqli_fetch_array($result);

                    $send_id = $result_message["send_id"];
                    $rv_id = $result_message["rv_id"];
                    $subject    = $result_message["subject"];
                    $content    = $result_message["content"];
                    $regist_day  = $result_message["regist_day"];
                    $file_name  = $result_message["file_name"];


                    //입력창 생성
                    echo "<div class=" . COMMON::$css_card_menu_row . " id='message_input_row' >";

                    echo "<div class='card_menu_btn_wider' class=" . COMMON::$css_card_menu_btn . ">";

                    echo "<form id='message_talk_send' name='message_talk_send' method='POST' >";
                    echo "<input id='message_group_num' type='text' value='$message_group_num' hidden>";
                    echo "<textarea id='message_content' name='message_content' type='text'></textarea>";
                    echo "<button type='button' id='message_send_btn' class='button_next' value='insert_message'><i class='fas fa-utensils'></i></button>";
                    echo "</form>";

                    echo "</div> <!-- end of card_menu_btn_wider -->";
                    echo "</div> <!-- end of css_card_menu_row -->";

                    //메세지 리스트 부름
                    for ($i = 0; $i < $total_rows_talk; $i++) {
                        mysqli_data_seek($result, $i);
                        $result_message = mysqli_fetch_array($result);

                        $send_id = $result_message["send_id"];
                        $rv_id = $result_message["rv_id"];
                        $subject    = $result_message["subject"];
                        $content    = $result_message["content"];
                        $regist_day  = $result_message["regist_day"];
                        $file_name  = $result_message["file_name"];

                        echo "<div class=" . COMMON::$css_card_menu_row . ">";

                        //나중에 유저 세션 들고와서 할 거임
                        if ($send_id === "aaaaaa") {
                            echo "<button class='card_message_send' class=" . COMMON::$css_card_menu_btn . ">";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . "><i class='fas fa-quote-left'></i> Me <i class='fas fa-quote-right'></i></div>";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . ">$send_id</div>";
                        } else {
                            echo "<button class='card_message_receive' class=" . COMMON::$css_card_menu_btn . ">";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . "><i class='fas fa-quote-left'></i> Seller <i class='fas fa-quote-right'></i></div>";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . ">$send_id</div>";
                        }
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">$content</div></br>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">2020년 2월 2일</div>";
                        echo "</button> <!-- end of message -->";
                        echo "</div> <!-- end of css_card_menu_row -->";
                    }
                }
                ?>



                <!-- 메세지 가져오기 -->
                <?php
                //메세지 겟방식으로 들고오기
                if (isset($_GET['message'])) {
                    $message_group_num  = $_GET['message'];
                } else {
                    echo "console.log('메세지 넘버 안들고오는데에~~~ 이상한데에~')";
                }

                $message_group_num = $_GET['message'];
                createMessageTalk($con, $dbname, $message_group_num);

                ?>

                <script type="text/javascript">
                    $('#message_send_btn').click(function() {
                        //쪽지용
                        if (!$('#message_content').val() | $('#message_content').val() === '') {
                            alert("내용을 입력하세요!");
                            $('#message_content').focus();
                            return;
                        } else {
                            var clickBtnValue = $('#message_send_btn').val();
                            var message_group_num = $('#message_group_num').val();
                            var message_content = $('#message_content').val();
                            // alert("값 가져옴!!!" + clickBtnValue + " " + message_group_num + " " + message_content + " ");
                            $.ajax({
                                type: "POST",
                                url: './user_mypage_message_insert.php',
                                data: {
                                    'action': clickBtnValue,
                                    'message_group_num': message_group_num,
                                    'message_content': message_content
                                },
                                success: function(data) {
                                    $(document).ready(function() {
                                        $('#message_input_row').after(data);
                                    });
                                },
                                error: function(data) {
                                    alert("Data return: " + data);
                                }
                            }).done(function(msg) {
                                // alert("Data Saved: " + msg);
                            });
                        }
                    });

                    function check_input($message_group_num) {

                    }
                </script>

            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>