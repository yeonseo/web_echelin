<?php
$num = $_POST["user_num"];
$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "delete from echelin_user where user_num=$num";
mysqli_query($con, $sql);
mysqli_close($con);

if ($user_Level > 1) {
  echo "<script>
  location.href='admin_edit_seller.php';
</script>";
} else {
  echo "<script>
location.href='admin_edit_user.php';
</script>";
}
