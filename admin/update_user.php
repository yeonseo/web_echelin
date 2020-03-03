<?php
if (isset($_POST["user_num"])) {
  $user_num = $_POST["user_num"];
  $user_password = $_POST["user_password"];
  $user_name = $_POST["user_name"];
  $user_Email = $_POST["user_Email"];
  $user_Level = $_POST["user_Level"];
  $user_phone = $_POST["user_phone"];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "update `echelin_user` set `user_password`='$user_password' , `user_name`='$user_name' , `user_Email`='$user_Email' , `user_Level`='$user_Level' , `user_phone`='$user_phone' where `user_num`='$user_num';";

  mysqli_query($con, $sql);
  mysqli_close($con);


  if ($user_Level === "10") {
    echo "<script>
  alert('user_num=$user_num , user_password=$user_password , user_name=$user_name , user_Email=$user_Email ,user_Level=$user_Level ,user_phone=$user_phone');
  location.href='admin_edit_seller.php';
  </script>";
  } else {
    echo "<script>
    alert('user_num=$user_num , user_password=$user_password , user_name=$user_name , user_Email=$user_Email ,user_Level=$user_Level ,user_phone=$user_phone');
    location.href='admin_edit_user.php';
  </script>";
  }
} else {
  $num = htmlspecialchars($_POST["num"], ENT_QUOTES);
  $store_name = htmlspecialchars($_POST["store_name"], ENT_QUOTES);
  $user_name = htmlspecialchars($_POST["user_name"], ENT_QUOTES);
  $star_access = htmlspecialchars($_POST["star_access"], ENT_QUOTES);
  $star_service = htmlspecialchars($_POST["star_service"], ENT_QUOTES);
  $star_flavor = htmlspecialchars($_POST["star_flavor"], ENT_QUOTES);
  $chu_up = htmlspecialchars($_POST["chu_up"], ENT_QUOTES);
  $chu_down = htmlspecialchars($_POST["chu_down"], ENT_QUOTES);

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "update `review` set `store_name`='$store_name' , `user_name`='$user_name' , `star_access`='$star_access' , `star_service`='$star_service' , `star_flavor`='$star_flavor' , `chu_up`='$chu_up' , `chu_down`='$chu_down' where `num`='$num';";
  mysqli_query($con, $sql);
  mysqli_close($con);

  echo "<script>
  alert('user_num=$num , user_name=$user_name , star_access=$star_access ,star_service=$star_service ,chu_up=$chu_up');
  location.href='admin_edit_review.php';
  </script>";
}
