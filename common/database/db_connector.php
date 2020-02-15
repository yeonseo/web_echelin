<?php
date_default_timezone_set("Asia/Seoul");

$servername = "localhost";
$dbusername = "root";
$password = "123456";
$dbname = "echelin";
$dbflag = "NO";


//mysqli object-oriented로 적용함
$con = new mysqli($servername, $dbusername, $password);
if ($con->connect_error) {
    die("DB Connection Filed: " . mysqli_connect_error());
}

$sql = "show databases";
$result = $con->query($sql);
if ($result === FALSE) {
    die('Show Databases Error: ' . mysqli_error($con));
}

//echelin Database가 없을 경우 생성함
if ($row = $result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        if ($row[0] === $dbname) {
            $dbflag = "OK";
            break;
        }
    }
}

if ($dbflag === "NO") {
    $sql = "create database " . $dbname;

    if ($con->query($sql)) {
        echo "<script>alert('$dbname 디비 생성되었습니다.');</script> ";
    } else {
        echo "실패원인" . mysqli_error($con);
    }
}

$sql = "use " . $dbname;
$dbconn = $con->query($sql);
if ($dbconn === FALSE) {
    die('DB Database Connect Error: ' . mysqli_error($con));
}

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
