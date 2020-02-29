<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php";

if (!isset($con)) {
    include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php";
}

$bookmark_group_num = $_POST['bookmark_group_num'];
$seller_num = $_POST['seller_num'];

// echo "alert(ajax : $message_group_num, $content);";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert_bookmark':
            insert_message($con, $seller_num, $content);
            break;
        case 'select_bookmark':
            select();
            break;
        case 'delete_bookmark':
            select();
            break;
    }
}

function insert_message($con, $bookmark_group_num, $seller_num)
{
    //디비에 메세지 저장하기

    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장
    $sql = "INSERT INTO `bookmark` (`user_id`, `bookmark_subject`, `group_num`, `seller_num`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
            ('aaaaaa', '즐겨찾기 테스트', $bookmark_group_num, $seller_num, '$regist_day', '', '', '')
        ";

    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB ajax insertMessageTalk Connect Error: ' . mysqli_error($con));
    }


    //디비에 저장된 메세지 불러와주기
    $sql = "select * from bookmark where group_num=" . $bookmark_group_num . " order by bookmark_num desc";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB bookmark select Connect Error: ' . mysqli_error($con));
    }

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

    mysqli_close($con);
    exit;
}


function select()
{
    echo "The select function is called.";
    exit;
}

insert_message($con, $message_group_num, $content);
exit;
