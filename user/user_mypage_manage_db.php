<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php";

if (!isset($con)) {
    include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php";
}

// echo "alert(ajax : $message_group_num, $content);";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert_message':
            $message_group_num = $_POST['message_group_num'];
            $send_id = $_POST['send_id'];
            $rv_id = $_POST['rv_id'];
            $content = $_POST['message_content'];
            insert_message($con, $message_group_num, $send_id, $rv_id, $content);
            break;
        case 'select':
            select();
            break;
        case 'update_bookmark':
            $bookmark_subject = $_POST['bookmark_subject'];
            $bookmark_group_num = $_POST['bookmark_group_num'];
            $seller_num = $_POST['seller_num'];
            update_bookmark($con, $bookmark_subject, $bookmark_group_num, $seller_num);
            break;
        case 'delete_bookmark':
            $bookmark_group_num = $_POST['bookmark_group_num'];
            $seller_num = $_POST['seller_num'];
            delete_bookmark($con, $bookmark_group_num, $seller_num);
            break;
        default:
            echo "alert(action wrong!);";
    }
} else {
    echo "alert(action action wrong!);";
}

function insert_message($con, $message_group_num, $send_id, $rv_id, $content)
{
    //디비에 메세지 저장하기
    $message_group_num = $message_group_num;
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장

    $sql = "INSERT INTO `message` (`send_id`, `rv_id`, `group_num`, `group_order`, `subject`, `content`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
            ('$send_id', '$rv_id' , '$message_group_num', 0, '', '$content', '$regist_day', '', '', '')
        ";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB ajax insertMessageTalk Connect Error: ' . mysqli_error($con));
    }


    //디비에 저장된 메세지 불러와주기
    $sql = "select * from message where group_num=" . $message_group_num . " order by message_num desc";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB message_num Connect Error: ' . mysqli_error($con));
    }

    $result_message = mysqli_fetch_array($result);

    $send_id = $result_message["send_id"];
    $rv_id = $result_message["rv_id"];
    $subject    = $result_message["subject"];
    $content    = $result_message["content"];
    $regist_day  = $result_message["regist_day"];
    $file_name  = $result_message["file_name"];

    echo "<div class=" . COMMON::$css_card_menu_row . ">";

    echo "<button class='card_message_send' class=" . COMMON::$css_card_menu_btn . ">";
    echo "<div class=" . COMMON::$css_card_menu_btn_name . "><i class='fas fa-quote-left'></i> Me <i class='fas fa-quote-right'></i></div>";
    echo "<div class=" . COMMON::$css_card_menu_btn_name . ">$send_id</div>";
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


function update_bookmark($con, $bookmark_subject, $bookmark_group_num, $seller_num)
{
    //디비에 저장된 북마크 확인하기
    $sql = "select * from bookmark where user_id='aaaaaa' and group_num='" . $bookmark_group_num . "' and seller_num='" . $seller_num . "' order by bookmark_num desc";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB bookmark check Connect Error: ' . mysqli_error($con));
    }

    if (mysqli_fetch_row($result) > 0) {
        echo "bookmarked";
        return;
    }

    //디비에 북마크 저장하기
    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장
    $sql = "INSERT INTO `bookmark` (`user_id`, `bookmark_subject`, `group_num`, `seller_num`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
            ('aaaaaa', '$bookmark_subject', '$bookmark_group_num', '$seller_num','$regist_day','','','');
        ";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB ajax insertMessageTalk Connect Error: ' . mysqli_error($con));
    }

    mysqli_close($con);
    exit;
}


function delete_bookmark($con, $bookmark_group_num, $seller_num)
{
    // //디비에 저장된 북마크 확인하기
    // $sql = "select * from bookmark where user_id='aaaaaa' and group_num='" . $bookmark_group_num . "' and seller_num='" . $seller_num . "' order by bookmark_num desc";
    // $result = $con->query($sql);
    // if ($result === FALSE) {
    //     die('DB bookmark check Connect Error: ' . mysqli_error($con));
    // }

    // if (mysqli_fetch_row($result) > 0) {
    //     echo "bookmarked";
    //     return;
    // }

    //디비에 북마크 저장하기
    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장
    $sql = "DELETE FROM `bookmark` where `user_id`='aaaaaa' and `group_num`='" . $bookmark_group_num . "' and `seller_num`='" . $seller_num . "';";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB ajax insertMessageTalk Connect Error: ' . mysqli_error($con));
    }

    echo "delete_succeed";

    mysqli_close($con);
    exit;
}
