<?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php";?>
<?php
$con = mysqli_connect("localhost","root","123456","echelin");
$useremail=$_GET["id"];
echo $useremail;


$input_store_name = htmlspecialchars($_POST["input_store_name"], ENT_QUOTES);
$input_business_license = htmlspecialchars($_POST["input_business_license"], ENT_QUOTES);
$input_postcode = htmlspecialchars($_POST["input_postcode"], ENT_QUOTES);
$input_address = htmlspecialchars($_POST["input_address"], ENT_QUOTES);
$input_extraAddress = htmlspecialchars($_POST["input_extraAddress"], ENT_QUOTES);
$input_detailAddress = htmlspecialchars($_POST["input_detailAddress"], ENT_QUOTES);

$introduction = htmlspecialchars($_POST["introduction"], ENT_QUOTES);
$input_store_type = htmlspecialchars($_POST["input_store_type"], ENT_QUOTES);
$opening_hours_start = htmlspecialchars($_POST["opening_hours_start"], ENT_QUOTES);
$opening_hours_end = htmlspecialchars($_POST["opening_hours_end"], ENT_QUOTES);
$input_break_time1 = htmlspecialchars($_POST["input_break_time1"], ENT_QUOTES);
$input_break_time2 = htmlspecialchars($_POST["input_break_time2"], ENT_QUOTES);
$nokids = htmlspecialchars($_POST["nokids"], ENT_QUOTES);
$input_checkbox = htmlspecialchars($_POST["input_checkbox"], ENT_QUOTES);
$input_phone = htmlspecialchars($_POST["input_phone"], ENT_QUOTES);
$input_opening_day = htmlspecialchars($_POST["input_opening_day"], ENT_QUOTES);
$special_note = htmlspecialchars($_POST["special_note"], ENT_QUOTES);

$input_max_num_of_people = htmlspecialchars($_POST["input_max_num_of_people"], ENT_QUOTES);
$max_month = htmlspecialchars($_POST["max_month"], ENT_QUOTES);
$reserve_intensity = htmlspecialchars($_POST["reserve_intensity"], ENT_QUOTES);

$lat = htmlspecialchars($_POST["lat"], ENT_QUOTES);
$lon = htmlspecialchars($_POST["lon"], ENT_QUOTES);

if($input_detailAddress) {
  $total_address=$input_address.",".$input_extraAddress.",".$input_detailAddress.",";
} else {
  $total_address=$input_address.",".$input_extraAddress.",";
}

// echo $input_store_name;
// echo $input_business_license;
// echo $input_postcode;
// echo $input_address;
// echo $input_extraAddress;
// echo $input_detailAddress;
// echo $introduction;
// echo $input_store_type;
// echo $opening_hours_start;
// echo $opening_hours_end;
// echo $input_break_time1;
// echo $input_break_time2;
// echo $nokids;
// echo $input_checkbox;
// echo $input_phone;
// echo $input_opening_day;
// echo $special_note;
// echo $input_max_num_of_people;
// echo $max_month;
// echo $reserve_intensity;


// echo $total_address;
$sub_total_address=substr($total_address, 0, -1);
// echo $sub_total_address;

$sub_input_checkbox=substr($input_checkbox, 0, -1);
// echo $sub_input_checkbox;

$re_opening_hours_start = str_replace(":", " : ", $opening_hours_start);
$re_opening_hours_end = str_replace(":", " : ", $opening_hours_end);

// echo $re_opening_hours_start;
// echo $re_opening_hours_end;

$re_input_break_time1 = str_replace(":", " : ", $input_break_time1);
$re_input_break_time2 = str_replace(":", " : ", $input_break_time2);


// echo $re_input_break_time1;
// echo $re_input_break_time2;

$sql = "insert into seller (user_id, business_license, store_name, store_type, store_address, store_postcode, store_lat, store_lon, convenient_facilities, introduction, break_start, break_end, nokids, opening_day, opening_hours_start, opening_hours_end, store_tel, special_note, max_reserv_time_num_of_people, max_reserv_month, intensity_of_reserv, seller_uptae_nm, keywords) ";
$sql .= "values('$useremail', '$input_business_license', '$input_store_name', '$input_store_type', '$sub_total_address', '$input_postcode', '$lat', '$lon', '$sub_input_checkbox', '$introduction', '$re_input_break_time1', '$re_input_break_time2', $nokids, '$input_opening_day', '$re_opening_hours_start', '$re_opening_hours_end', '$input_phone', '$special_note', '$input_max_num_of_people', '$max_month', '$reserve_intensity', null, null)";
mysqli_query($con, $sql);
echo mysqli_error($con);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css">
    <link rel="stylesheet" href="/echelin/common/css/common.css">
    <link rel="stylesheet" href="/echelin/common/css/search.css">
  </head>
  <body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="" onclick="location.href='../'">
        <span class="span_step_info">가게 등록 성공</span>
      </div>

      <progress value="100" max="100"></progress>

      <div class="div_outside">
        <img src="./image/flag.png" alt="">
      </div>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <span class="span_user_name"><?=$username?></span>
          <span>님</span> </br>
          <span class="span_register_info">가게 등록에 성공하셨습니다!</span>


          <div class="div_except_button">
            <ul>
              <li><a href="/echelin/seller/seller_menu.php"><div class="">메뉴 등록하러 가기</div></a></li>
              <li><a href="./seller_info_page.php"><div class="">식당 사진 업로드 하러 가기</div></a></li>
              <li><a href="../"><div class="">메인 페이지로 이동하기</div></a></li>
              <li><a href="./seller_info_page.php"><div class="">내 식당 정보로 이동하기</div></a></li>
            </ul>
          </div> <!-- div_except_button -->

        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
