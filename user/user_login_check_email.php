<?
$email = $_POST["user_Email"];
$con = mysqli_connect("localhost","root","123456","myweb_info");
$sql = "select * from echelin_user where user_Email='$email'";
$result = mysqli_query($con,$sql);
$record = mysqli_num_rows($result);

if($record){    

    echo "alert('중복되는 아이디 입니다.')";

}else{
    echo "alert('로그인 하세용') ";
}
mysqli_close($con);
?>