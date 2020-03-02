<?php

$con = mysqli_connect("localhost","root","123456","echelin");

$seller_num = htmlspecialchars($_POST["seller_num"], ENT_QUOTES);
$input_store_name = htmlspecialchars($_POST["input_store_name"], ENT_QUOTES);
$input_business_license = htmlspecialchars($_POST["input_business_license"], ENT_QUOTES);
$input_postcode = htmlspecialchars($_POST["input_postcode"], ENT_QUOTES);
$input_address = htmlspecialchars($_POST["input_address"], ENT_QUOTES);
$input_extraAddress = htmlspecialchars($_POST["input_extraAddress"], ENT_QUOTES);
$input_detailAddress = htmlspecialchars($_POST["input_detailAddress"], ENT_QUOTES);
$introduction = htmlspecialchars($_POST["introduction"], ENT_QUOTES);
$store_type = htmlspecialchars($_POST["store_type"], ENT_QUOTES);
$type_of_etc = htmlspecialchars($_POST["type_of_etc"], ENT_QUOTES);

if($store_type=="기타") {
  $store_tye_etc=$type_of_etc ;
} else {
  $store_type;
}

$re_store_type=$store_type.$store_tye_etc;

$opening_hours_start = htmlspecialchars($_POST["opening_hours_start"], ENT_QUOTES);
$opening_hours_end = htmlspecialchars($_POST["opening_hours_end"], ENT_QUOTES);
$break_start = htmlspecialchars($_POST["break_start"], ENT_QUOTES);
$break_end = htmlspecialchars($_POST["break_end"], ENT_QUOTES);
$nokids = htmlspecialchars($_POST["nokids"], ENT_QUOTES);
$input_checkbox_etc_text = htmlspecialchars($_POST["input_checkbox_etc_text"], ENT_QUOTES);


for($i=0; $i<count($_POST["chkbox"]); $i++) {
  $set = $_POST["chkbox"];
  $set[$i];
  $set_chkbox.=$set[$i];
}
$re_chkbox=$set_chkbox.$input_checkbox_etc_text;

$phone1 = htmlspecialchars($_POST["phone1"], ENT_QUOTES);
$phone2 = htmlspecialchars($_POST["phone2"], ENT_QUOTES);
$phone3 = htmlspecialchars($_POST["phone3"], ENT_QUOTES);
$input_opening_day = htmlspecialchars($_POST["input_opening_day"], ENT_QUOTES);
$special_note = htmlspecialchars($_POST["special_note"], ENT_QUOTES);
$input_max_num_of_people = htmlspecialchars($_POST["input_max_num_of_people"], ENT_QUOTES);
$max_month = htmlspecialchars($_POST["max_month"], ENT_QUOTES);
$reserve_intensity = htmlspecialchars($_POST["reserve_intensity"], ENT_QUOTES);
$lat = htmlspecialchars($_POST["lat_update"], ENT_QUOTES);
$lon = htmlspecialchars($_POST["lon_update"], ENT_QUOTES);

// $lat = $_POST["lat"];


if($input_detailAddress) {
  $total_address=$input_address.",".$input_extraAddress.",".$input_detailAddress.",";
} else {
  $total_address=$input_address.",".$input_extraAddress.",";
}

// echo $total_address;
$sub_total_address=substr($total_address, 0, -1);


// echo $sub_total_address;

// $sub_input_checkbox=substr($convenient_facilities, 0, -1);
// echo $sub_input_checkbox;

$re_opening_hours_start = str_replace(":", " : ", $opening_hours_start);
$re_opening_hours_end = str_replace(":", " : ", $opening_hours_end);

// echo $re_opening_hours_start;
// echo $re_opening_hours_end;

$re_break_start = str_replace(":", " : ", $break_start);
$re_break_end = str_replace(":", " : ", $break_end);

$re_phone=$phone1."-".$phone2."-".$phone3;

echo $seller_num;
echo $input_store_name;
echo $input_business_license;
echo $input_postcode;
echo $sub_total_address;
echo $introduction;
echo $re_store_type;
echo $re_opening_hours_start;
echo $re_opening_hours_end;
echo $re_break_start;
echo $re_break_end;
echo $nokids;

echo $re_chkbox;
echo $re_phone;


echo $input_opening_day;
echo $special_note;
echo $input_max_num_of_people;
echo $max_month;
echo $reserve_intensity;
echo $lat;
echo $lon;

$sql = "update seller set store_name='$input_store_name', store_type='$re_store_type', store_address='$sub_total_address', store_postcode='$input_postcode', store_lat='$lat', store_lon='$lon', convenient_facilities='$re_chkbox', introduction='$introduction', break_start='$re_break_start', break_end='$re_break_end', nokids='$nokids', opening_day='$input_opening_day', opening_hours_start='$re_opening_hours_start', opening_hours_end='$re_opening_hours_end', store_tel='$re_phone', special_note='$special_note', max_reserv_time_num_of_people='$input_max_num_of_people', max_reserv_month='$max_month', intensity_of_reserv='$reserve_intensity' where seller_num='$seller_num';"
mysqli_query($con, $sql);
echo mysqli_error($con);
mysqli_close($con);
 ?>
