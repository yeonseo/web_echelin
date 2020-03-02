<?php

  $seller_num = $_GET['seller_num'];

  $money_tag = $_POST['money_tag'];

  date_default_timezone_set('Asia/Seoul');
  $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

  $con = mysqli_connect("localhost", "root", "123456", "echelin");

  $sql = "select * from store_img where seller_num='$seller_num'";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($result);

  $store_file_copied = $row['store_file_copied'];
  $store_file_name = $row['store_file_name'];
  $store_file_type = $row['store_file_type'];



  $sql2 = "select * from seller where seller_num='$seller_num'";
  $result2 = mysqli_query($con, $sql2);

  $row2 = mysqli_fetch_array($result2);

  $store_name = $row2['store_name'];
  $introduction = $row2['introduction'];


  $sql = "insert into advertise (seller_num, file_name, file_type, file_copied, store_name, introduction, regist_day, noshow) ";
  $sql .= "values('$seller_num', '$store_file_name', '$store_file_type', '$store_file_copied', '$store_name', '$introduction','$regist_day', true)";
  mysqli_query($con, $sql);


  echo "
     <script>
     alert('신청이 완료되었습니다.');
      location.href = './advertise_complete.php?money_tag=$money_tag&seller_num=$seller_num';
     </script>
  ";

  mysqli_close($con);
?>
