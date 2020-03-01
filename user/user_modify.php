<?
$Name = $_POST["user_name"];
$Email = $_POST["user_Email"];
$Password = $_POST["user_password"];
$Geoju = $_POST["user_geoju"];
$About = $_POST["user_aboutme"];
$Phone = $_POST["user_phone"];

$con = mysqli_connect("localhost","root","123456","echelin");
$sql = "update echelin_user set `user_name`='$Name' where `user_name`='$Name'";

        // update echelin_user set `user_name`='test' where `user_name`='asd';
        // update echelin_user set `user_name`='테스트' where `user_name`='test';


// mysqli_query($con,$sql);



$result = $con->query($sql);
if ($result === FALSE) {
    die('DB bookmark_num Connect Error: ' . mysqli_error($con));
}


$sql = "update echelin_user set `user_password`='$Password' where `user_password`='$Password'";

  


$result = $con->query($sql);
if ($result === FALSE) {
    die('DB bookmark_num Connect Error: ' . mysqli_error($con));
}



// 일반인, 회원가입자, 관리자 구분
session_start();
$_SESSION["user_name"] =$Name;


mysqli_close($con);

echo "
<script>
alert('업데이트 되었니 제발..?? $Name $Password');
    location.href = 'user_myinfo_index.php';
</script>
";


?>