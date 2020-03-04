<?php
date_default_timezone_set('Asia/Seoul');
$upload_dir = './menuImg/';
$con = mysqli_connect("localhost","root","123456","echelin");

// $user_id = "infor16";
// $seller_num = "6";
$seller_num = $_GET["seller_num"];
echo $seller_num;

$menu_count = count($_POST["input_menu"]);

for($i=0; $i<$menu_count; $i++) {
$random=mt_rand(1,9999);
$menu_name = $_POST["input_menu"][$i];
$menu_price = $_POST["input_price"][$i];
$menu_explain = $_POST["input_menu_explain"][$i];

echo $menu_name;
echo $menu_price;
echo $menu_explain;


$menu_file_name	 = $_FILES["input_menu_img"]["name"][$i];
$menu_file_type	 = $_FILES["input_menu_img"]["type"][$i];
$menu_file_tmp_name	 = $_FILES["input_menu_img"]["tmp_name"][$i];
$menu_file_error    = $_FILES["input_menu_img"]["error"][$i];
$menu_file_size	 = $_FILES["input_menu_img"]["size"][$i];

if ($menu_file_name && !$menu_file_error)
{

  $file = explode(".", $menu_file_name);

  $menu_file_name = $file[0];
  $file_ext  = $file[1];

  $new_file_name = date("Y_m_d_H_i_s")."_".$random;

  $copied_file_name = $new_file_name.".".$file_ext;

  $uploaded_file = $upload_dir.$copied_file_name;

  if( $menu_file_size  > 6000000 ) {
      echo("
      <script>
      alert('업로드 파일 크기가 지정된 용량(6MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
      history.go(-1)
      </script>
      ");
      exit;
  }

  if (!move_uploaded_file($menu_file_tmp_name, $uploaded_file) )
  {
      echo("
        <script>
        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
        </script>
      ");
      exit;
  }
}
else
{
  $menu_file_name      = "";
  $menu_file_type      = "";
  $copied_file_name = "";
}

for($i=0; $i<$menu_count; $i++) {
  $sql = "update menu_img set menu_name='$menu_name', menu_price='$menu_price', menu_file_name='$menu_file_name', menu_file_type='$menu_file_type', menu_file_copied='$copied_file_name', menu_explain='$menu_explain' where seller_num='$i'";
  mysqli_query($con, $sql);
}
var_dump($con);

} //end of for
mysqli_close($con);
?>
