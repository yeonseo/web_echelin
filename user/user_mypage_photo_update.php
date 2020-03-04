<?php
session_start();

if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
else $useremail = "";

if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
else $username = "";

$Email =          $_POST["user_Email"];
$profile =        $_POST["user_profile"];
$profile_copied = $_POST["user_profile_copied"];
$profile_type =    $_POST["user_profile_type"];

$regist_day = date("Y-m-d (H:i)");

$upload_dir = './image/';

$upfile_name    = $_FILES["upload"]["name"];
$upfile_tmp_name = $_FILES["upload"]["tmp_name"];
$upfile_type    = $_FILES["upload"]["type"];
$upfile_size    = $_FILES["upload"]["size"];
$upfile_error    = $_FILES["upload"]["error"];

if ($upfile_name && !$upfile_error) {
    $file = explode(".", $upfile_name);
    $file_name = $file[0];
    $file_ext = $file[1];



    $new_file_name = date("Y_m_d_H_i_s");
    $new_file_name = $new_file_name;
    $copied_file_name = $new_file_name . "." . $file_ext;
    $uploaded_file = $upload_dir . $copied_file_name;

    if ($upfile_size  > 5000000) {
        echo ("
                        <script>
                        alert('파일 크기는 5MB 이상 업로드 할수 없습니다.);
                        history.go(-1)
                        </script>
                        ");
        exit;
    }

    if (!move_uploaded_file($upfile_tmp_name, $uploaded_file)) {
        echo ("
                            <script>
                            alert('디렉토리 오류 복사 실패');
                            history.go(-1)
                            </script>
                        ");
        exit;
    }
} else {
    $upfile_name      = "";
    $upfile_type      = "";
    $copied_file_name = "";
}
// $Email = $_POST["user_Email"];
// $profile =        $_POST["user_profile"];
// $profile_copied = $_POST["user_profile_copied"];
// $profile_type=    $_POST["user_profile_type"];

$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "update echelin_user set `user_profile`='$upfile_name' where `user_Email`='$Email';";
$result = $con->query($sql);
if ($result === FALSE) {
    die('DB bookmark_num Connect Error: ' . mysqli_error($con));
}

$sql = "update echelin_user set `user_profile_copied`='$copied_file_name' where `user_Email`='$Email';";
$result = $con->query($sql);
if ($result === FALSE) {
    die('DB bookmark_num Connect Error: ' . mysqli_error($con));
}

$sql = "update echelin_user set `user_profile_type`='$uploaded_file' where `user_Email`='$Email';";
$result = $con->query($sql);
if ($result === FALSE) {
    die('DB bookmark_num Connect Error: ' . mysqli_error($con));
}

session_start();
$_SESSION["user_profile"] = $upload_dir;


mysqli_close($con);



echo "
                <script>
                alert('업데이트 되었니 제발..?? $upfile_name $uploaded_file $copied_file_name  $Email');
                window.close();
                opener.document.location.reload('user_mypage_info_update.php');
                </script>

                
                ";


?>
<!-- location.href = 'user_myinfo_index.php'; -->