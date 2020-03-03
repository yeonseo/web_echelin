<?php
$user_num = $_POST["user_num"];
$user_password = $_POST["user_password"];
$user_name = $_POST["user_name"];
$user_Email = $_POST["user_Email"];
$user_Level = $_POST["user_Level"];
$user_phone = $_POST["user_phone"];

$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "update echelin_user set user_password=$user_password where user_num=$user_num";
$sql = "update echelin_user set user_name=$user_name where user_num=$user_num";
$sql = "update echelin_user set user_Email=$user_Email where user_num=$user_num";
$sql = "update echelin_user set user_Level=$user_Level where user_num=$user_num";
$sql = "update echelin_user set user_phone=$user_phone where user_num=$user_num";
mysqli_query($con, $sql);
mysqli_close($con);


if ($user_Level > 1) {
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
