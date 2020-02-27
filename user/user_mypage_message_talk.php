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


    <script type="text/javascript">
        function check_input() {
            //쪽지용
            if (!document.message_form.subject.value) {
                alert("내용을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if (!document.message_form.content.value) {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();


            //문의 게시판 용
            if (!document.board_form.subject.value) {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if (!document.board_form.content.value) {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }


        function test() {

            var html = "<div class='content_yes'>";

            html += "<div class='yes_top'>";
            html += "<span><a href='#'>식당 링크</a> &nbsp·&nbsp 등록 시간</span>";
            html += "<div><button class='btn_init'>수정</button> <button class='btn_delete'>삭제</button></div>";
            html += "<div class='div_chu'>";
            html += "<div id='like_count'><img src='./image/like.png'> &nbsp;0</div>";
            html += "<div id='dislike_count'><img src='./image/dislike.png'> &nbsp;0</div>";
            html += "</div>";

            html += "</div>";

            html += "<div class='yes_main'>";
            html += "후기 내용 공간";
            html += "</div>";

            html += "</div>";

            $(".content_main .content_no").remove();
            $(".content_main").append(html);



            $.ajax({
                url: "member_check_id_ajax.php?id=" + inputID,
                type: "get",
                success: function(returnData) {
                    //아이디 중복시
                    if (returnData === "ID_overlap") {
                        $(document).ready(function() {
                            $("#inputID ~ .warningIcon, #inputID ~ .warningMessage").css("visibility", "visible");
                        });
                        $("#inputID ~ .warningMessage").text("사용중인 아이디입니다.");
                        confirmArray[1] = false;
                    } else if (returnData === "ID_possible") {
                        //사용가능한 아이디
                        $(document).ready(function() {
                            $("#inputID ~ .warningIcon, #inputID ~ .warningMessage").css("visibility", "hidden");
                        });
                        confirmArray[1] = true;
                    } else {
                        console.log("DB 통신 오류" + returnData);
                        confirmArray[1] = false;
                    }
                },
                error: function() {
                    console.log("아이디 중복확인 ajax 실패");
                }
            });

        }
    </script>


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


                <!-- 메세지 입력칸 -->
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <div class="card_menu_btn_wider" class="<?= COMMON::$css_card_menu_btn; ?>">
                        <form class="message_talk_send" name="message_talk_send" action="">
                            <textarea type="text"></textarea>
                            <button class="button_next"> <i class="fas fa-utensils"></i> </button>
                        </form>
                    </div>
                </div> <!-- end of css_card_menu_row -->


                <!-- 메세지 가져오기 -->
                <?php

                if (isset($_GET['message'])) {
                    $message_num  = $_GET['message'];
                } else {
                    // echo "console.log('메세지 넘버 안들고오는데에~~~ 이상한데에~')";
                }


                function createMessageTalk($con, $dbname, $message_num)
                {
                    $sql = "select * from message where group_num=" . $message_num . " order by message_num desc";
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB message_num Connect Error: ' . mysqli_error($con));
                    }
                    $total_rows_talk = mysqli_num_rows($result);

                    // 다차원 배열 반복처리 (필요시 사용)
                    ini_set('memory_limit', '-1');

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
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . "><i class='fas fa-quote-left'></i> Seller <i class='fas fa-quote-right'></i></div>";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . ">$send_id</div>";
                        } else {
                            echo "<button class='card_message_receive' class=" . COMMON::$css_card_menu_btn . ">";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . "><i class='fas fa-quote-left'></i> Me <i class='fas fa-quote-right'></i></div>";
                            echo "<div class=" . COMMON::$css_card_menu_btn_name . ">$send_id</div>";
                        }
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">$content</div></br>";
                        echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">2020년 2월 2일</div>";
                        echo "</button> <!-- end of message -->";
                        echo "</div> <!-- end of css_card_menu_row -->";
                    }
                }


                //메세지 겟방식으로 들고오기
                $message_num = 0;
                createMessageTalk($con, $dbname, $message_num);

                ?>
            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>