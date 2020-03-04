<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
        <script src="./js/vendor/modernizr.custom.min.js"></script>
        <script src="./js/vendor/jquery-1.10.2.min.js"></script>
        <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="./js/menu.js" defer></script>
    </head>
</html>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php";
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php";
$seller_num=post('seller_num');
$store_name=post('upso_nm');
$introduction=post('upso_description');
$user_id=post('user_email');
$seller_id=post('upso_seller_user_id');
$select_date=post('date_result');
$select_time=post('time_result');
$select_person=post('person');
$select_menu=post('insert_menu');
$reservation_special=post('text_spcial');
$reservation_status=post('upso_intensity_of_reserv');



function post($name){
  if (isset($_POST[$name])) {
      $get_result= $_POST[$name];
  } else {
      $get_result= '엥';
  }
  echo "get_result = ($get_result)<br>";
  return $get_result;
}
function reservationInsert($con, $dbname ,$seller_num ,$store_name ,$introduction ,$user_id ,$seller_id ,$select_date ,$select_time ,$select_person ,$select_menu ,$reservation_special ,$reservation_status)
{

    $sql = "insert into `reservation` (`reservation_num`,`seller_num`, `store_name`, `introduction`,`user_id`, `seller_id`, `select_date`, `select_time`, `select_person`, `select_menu`, `reservation_special`, `intensity_of_reserv`, `noshow`) ";
    $sql .= "values(null,'$seller_num' ,'$store_name' ,'$introduction' ,'$user_id' ,'$seller_id' ,'$select_date' ,'$select_time' ,'$select_person' ,'$select_menu' ,'$reservation_special' ,'$reservation_status' , null)";
    echo  "<br>string = ".$sql . "<br>";
    mysqli_query($con, $sql);
    echo mysqli_error($con);
    mysqli_close($con);
    echo "
	      <script>
	          location.href = location.href='./reservation_complete.php?seller_num=$seller_num&store_name=$store_name&select_date=$select_date';
	      </script>
	  ";
}
reservationInsert($con, $dbname ,$seller_num ,$store_name ,$introduction ,$user_id ,$seller_id ,$select_date ,$select_time ,$select_person ,$select_menu ,$reservation_special ,$reservation_status);
?>
