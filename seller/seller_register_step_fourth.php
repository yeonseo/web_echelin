
<?php
$input_store_name = $_POST["input_store_name"];
$input_business_license = $_POST["input_business_license"];
$input_postcode = $_POST["input_postcode"];
$input_address = $_POST["input_address"];
$input_extraAddress = $_POST["input_extraAddress"];
$input_detailAddress = $_POST["input_detailAddress"];


// $introduction = $_POST["introduction"];
// $store_type = $_POST["store_type"];
// $type_of_etc = $_POST["type_of_etc"];
// $input_menu = $_POST["input_menu"];
// $input_price = $_POST["input_price"];
// $input_menu_img = $_POST["input_menu_img"];
// $input_menu_explain = $_POST["input_menu_explain"];
// $opening_hours_start = $_POST["opening_hours_start"];
// $opening_hours_end = $_POST["opening_hours_end"];
// $break_start = $_POST["break_start"];
// $break_end = $_POST["break_end"];
// $chkbox = $_POST["chkbox"];
// $phone1 = $_POST["phone1"];
// $phone2 = $_POST["phone2"];
// $phone3 = $_POST["phone3"];

//
//
// for($i=1; $i<6; $i++) {
// $random=mt_rand(1,9999);
// $file_name	 = $_FILES["file".$i]["name"];
// $file_type	 = $_FILES["file".$i]["type"];
// $file_tmp_name	 = $_FILES["file".$i]["tmp_name"];
// $file_error    = $_FILES["file".$i]["error"];
// $file_size	 = $_FILES["file".$i]["size"];
//
// // print_r($_FILES);
//
// if ($file_name && !$file_error)
// {
//
//   $file = explode(".", $file_name);
//
//   $file_name = $file[0];
//   $file_ext  = $file[1];
//
//   $new_file_name = date("Y_m_d_H_i_s")."_".$random;
//
//   $copied_file_name = $new_file_name.".".$file_ext;
//
//   $uploaded_file = $upload_dir.$copied_file_name;
//
//   if( $file_size  > 6000000 ) {
//       echo("
//       <script>
//       alert('업로드 파일 크기가 지정된 용량(6MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
//       history.go(-1)
//       </script>
//       ");
//       exit;
//   }
//
//   if (!move_uploaded_file($file_tmp_name, $uploaded_file) )
//   {
//       echo("
//         <script>
//         alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
//         </script>
//       ");
//       exit;
//   }
// }
// else
// {
//   $file_name      = "";
//   $file_type      = "";
//   $copied_file_name = "";
// }
//
//

//
// $input_opening_day = $_POST["input_opening_day"];
// $special_note = $_POST["special_note"];
 ?>


 <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./js/seller_register.js"></script>
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
        <span class="span_step_info">4단계 : 손님을 맞이할 준비를 해주세요.</span>
      </div>

      <progress value="66.4" max="100"></progress>

      <div class="div_outside">
        <span>내 식당 : </span>
        <input class="input_info_dis" type="text" name="input_store_name" value="<? echo $input_store_name?>">&nbsp&nbsp
        <span>사업자번호 : </span>
        <input class="input_info_dis" type="text" name="input_business_license" value="<? echo $input_business_license?>">
        <span>우편번호 : </span>
        <input class="input_info_dis" type="text" name="input_postcode" value="<? echo $input_postcode?>">&nbsp&nbsp
        <span>주소 : </span>
        <input class="input_info_dis" type="text" name="input_address" value="<? echo $input_address?>">
        <span>참고항목 : </span>
        <input class="input_info_dis" type="text" name="input_extraAddress" value="<? echo $input_extraAddress?>">
        <span>상세주소 : </span>
        <input class="input_info_dis" type="text" name="input_detailAddress" value="<? echo $input_detailAddress?>">
        <span>식당 종류 : </span>
        <input class="input_info_dis" type="text" name="input_detailAddress" value="<? echo $input_detailAddress?>">

        <!-- <? echo $input_store_name?> </br>
        <? echo $input_business_license?> </br>
        <? echo $input_postcode?> </br>
        <? echo $input_extraAddress?> </br>
        <? echo $input_detailAddress?> </br>

        <? echo $introduction?> </br>
        <? echo $store_type?> </br>
        <? echo $type_of_etc?> </br>
        <? echo $input_menu?> </br>
        <? echo $input_price?> </br>
        <? echo $input_menu_img?> </br>
        <? echo $input_menu_explain?> </br>
        <? echo $opening_hours_start?> </br>
        <? echo $opening_hours_end?> </br>
        <? echo $break_start?> </br>
        <? echo $break_end?> </br>
        <? echo $chkbox?> </br>
        <? echo $phone1?> </br>
        <? echo $phone2?> </br>
        <? echo $phone3?> </br>
        <? echo $phone3?> </br>
        <? echo $image?> </br>
        <? echo $input_opening_day?> </br>
        <? echo $special_note?> </br> -->
      </div>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">
                <ul>
                  <li>최대 예약 가능 인원을 적어주세요.</li>
                  <input class="input_people" type="number" name="" value="">&nbsp명
                  </br></br></br>

                  <li>사용자가 예약할 수 있는 최대 개월 수를 설정해주세요.</li>
                    <input type="radio" name="" value="">
                    <span class="span_content_font">1개월</span>&nbsp&nbsp
                    <input type="radio" name="" value="">
                    <span class="span_content_font">2개월</span>&nbsp&nbsp
                    <input type="radio" name="" value="">
                    <span class="span_content_font">3개월</span>
                  </br></br></br>

                  <li>예약 규정 강도를 설정해주세요</li>
                  <input type="radio" name="" value="">
                  <span class="span_content_font">상</span>&nbsp&nbsp
                  <input type="radio" name="" value="">
                  <span class="span_content_font">중</span>&nbsp&nbsp
                  <input type="radio" name="" value="">
                  <span class="span_content_font">하</span></br>
                  <div class="div_strength">
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp상 : 사용자가 방문하기 1주전에 취소시 전액 환불 가능합니다.</span></br>
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp중 : 사용자가 방문하기 4일전에 취소 시 50% 환불 가능합니다.</span></br>
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp하 : 사용자가 방문하기 4일전에 취소 시 50% 환불 가능합니다.</span></br>
                  </div>
                  </br></br></br></br>

                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_fifth.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_third.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
