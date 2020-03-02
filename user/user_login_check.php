<?
$user_email = $_POST["user_Email"];
$user_pass =  $_POST["user_pass"];
$user_Level = $_POST["user_Level"];
$user_Name =  $_POST["user_name"];

$con = mysqli_connect("localhost","root","123456","echelin");
$sql = "select * from echelin_user where user_Email='$user_email'";
$result = mysqli_query($con,$sql);

$num_match = mysqli_num_rows($result);
if(!$num_match){

    echo ("
    <script>
    window.alert('등록 되지 않은 이메일 입니다.')
    history.go(-1)
    </script>
    ");
}
else{

    $row = mysqli_fetch_array($result);
    $echelin_pass = $row["user_password"];

    mysqli_close($con);

    if($user_pass!==$echelin_pass){
        
        echo("
        <script>
          window.alert('비밀번호가 틀립니다! $echelin_pass , $user_pass')
          history.go(-1)
        </script>
     ");
     exit;
    }
    else{
        session_start();
        $_SESSION["user_Email"]=$row["user_Email"];
        $_SESSION["user_password"]=$row["user_password"];
        $_SESSION["user_level"]=$row["user_Level"];
        $_SESSION["user_name"]=$row["user_name"];
        echo("
        <script>
          window.alert('로그인 성공')
        </script>
     ");
    }
    echo("
              <script>
              location.href = '/echelin/index.php';
              </script>
            ");
}
?>