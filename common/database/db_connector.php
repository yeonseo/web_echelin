<?php
date_default_timezone_set("Asia/Seoul");

$servername = "localhost";
$dbusername = "root";
$password = "111111";
$dbflag = "NO";

$con = mysqli_connect($servername, $dbusername, $password);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "show databases";
$result = mysqli_query($con, $sql) or die('Error: ' . mysqli_error($con));

while ($row = mysqli_fetch_row($result)) {
    if ($row[0] === 'echelin') {
        $dbflag = "OK";
        break;
    }
}

if ($dbflag === "NO") {
    $sql = "create database echelin";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('echelin 디비 생성되었습니다.');</script> ";
    } else {
        echo "실패원인" . mysqli_error($con);
    }
}

//2. 데이타 베이스 선택 use kdhong_db
$dbconn = mysqli_select_db($con, "echelin") or die('Error: ' . mysqli_error($con));


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function alert_back($data)
{
    echo "<script>alert('$data');history.go(-1);</script>";
    exit;
}
