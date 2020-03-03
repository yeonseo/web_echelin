<?php

  $gbn = $_REQUEST['gbn'];
  $num = $_REQUEST['num'];

  date_default_timezone_set('Asia/Seoul');
  $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

  $con = mysqli_connect("localhost","root","123456", "echelin");

  if($gbn == "up") {

    $sql = "update review set chu_up=chu_up+1 where num='$num'";
    mysqli_query($con, $sql);

    $sql = "select * from review where num='$num'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    $chu_up = $row['chu_up'];

    echo "$chu_up";

  } else if($gbn == "down") {
    $sql = "update review set chu_down=chu_down+1 where num='$num'";
    mysqli_query($con, $sql);

    $sql = "select * from review where num='$num'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    $chu_down = $row['chu_down'];

    echo "$chu_down";
  }
  // echo "<img src='./img/like.png' onclick='update_chu('up',$num)> &nbsp; $chu_up &nbsp;
  // <img src='./img/dislike.png' onclick='update_chu('down',$num)> &nbsp; $chu_down &nbsp;";



  mysqli_close($con);

?>
