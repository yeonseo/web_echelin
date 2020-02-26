<?php
$input_business_license = $_POST["input_business_license"];
$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from seller where business_license='$input_business_license'";
$result = mysqli_query($con, $sql);
$record = mysqli_num_rows($result);
// var_dump($result);
// echo $record;
if ($record) {
   echo "1";
} else {
   echo "0";
}
mysqli_close($con);

 ?>
