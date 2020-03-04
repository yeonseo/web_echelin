<?php
$seller_num=$_GET["seller_num"];
$con = mysqli_connect("localhost","root","123456","echelin");
$sql = "update reservation set noshow=false, cancel=false where seller_num='$seller_num'";
mysqli_query($con, $sql);
mysqli_close($con);
echo("
  <script>
    location.href='./seller_sellerinfo_index.php';
  </script>
");
 ?>
