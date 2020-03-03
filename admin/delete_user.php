<?php

if (isset($_GET["user_num"])) {
  $num = $_GET["user_num"];
  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "select * from echelin_user where user_num=$num";
  $user_level = mysqli_fetch_array(mysqli_query($con, $sql));
  $user_Level = $user_level['user_Level'];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "delete from echelin_user where user_num=$num";
  mysqli_query($con, $sql);
  mysqli_close($con);

  if ($user_Level === "10") {
    echo "<script>
    location.href='admin_edit_seller.php';
  </script>";
  } else {
    echo "<script>
  location.href='admin_edit_user.php';
  </script>";
  }
} else {
  $num = $_GET["num"];
  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "delete from review where num=$num";
  mysqli_query($con, $sql);
  mysqli_close($con);
  echo "<script>
  location.href='admin_edit_review.php';
  </script>";
}
