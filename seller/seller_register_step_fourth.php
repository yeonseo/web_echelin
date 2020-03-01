
<?php

$input_store_name = $_POST["input_store_name"];
$input_business_license = $_POST["input_business_license"];
$input_postcode = $_POST["input_postcode"];
$input_address = $_POST["input_address"];
$input_extraAddress = $_POST["input_extraAddress"];
$input_detailAddress = $_POST["input_detailAddress"];


$introduction = $_POST["introduction"];
$store_type = $_POST["store_type"];
$type_of_etc = $_POST["type_of_etc"];
$opening_hours_start = $_POST["opening_hours_start"];
$opening_hours_end = $_POST["opening_hours_end"];
$break_time = $_POST["break_time"];
$break_start = $_POST["break_start"];
$break_end = $_POST["break_end"];

$nokids = $_POST["nokids"];
$input_checkbox_etc_text = $_POST["input_checkbox_etc_text"];


$phone1 = $_POST["phone1"];
$phone2 = $_POST["phone2"];
$phone3 = $_POST["phone3"];

$input_opening_day = $_POST["input_opening_day"];
$special_note = $_POST["special_note"];

$lat = $_POST["lat"];
$lon = $_POST["lon"];



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

      <progress value="80" max="100"></progress>

      <form class="" name="form_seller_register_step_fourth" action="./seller_register_complete.php" method="post">
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
        <span>식당 소개글 : </span>
        <textarea class="textarea_step2" name="introduction" rows="8" cols="74" style="resize: none;"><? echo $introduction?></textarea>
        <span>식당 종류 : </span>
        <input class="input_info_dis" type="text" name="input_store_type" value="<?php if($store_type=="기타") {?> <? echo $type_of_etc?> <?php } else {?> <? echo $store_type?> <?php }?>">
        <span>영업시간 : </span>
        <input class="input_info_dis" type="text" name="opening_hours_start" value="<? echo $opening_hours_start?>">
        <span>영업시간 : </span>
        <input class="input_info_dis" type="text" name="opening_hours_end" value="<? echo $opening_hours_end?>">
        <span>브레이크타임 : </span>
        <input class="input_info_dis" type="text" name="input_break_time1" value="<?php if($break_time=="true") {?> <? echo $break_start?> <?php } else {?> <? echo ""?> <?php }?>">
        <span>브레이크타임 : </span>
        <input class="input_info_dis" type="text" name="input_break_time2" value="<?php if($break_time=="true") {?> <? echo $break_end?> <?php } else {?> <? echo ""?> <?php }?>">
        <span>노키즈존 여부 : </span>
        <input class="input_info_dis" type="text" name="nokids" value="<?php echo $nokids?>">
        <span>식당 편의시설 : </span>
        <input class="input_info_dis" type="text" name="input_checkbox"
        value="
          <?
          for($i=0; $i<count($_POST["chkbox"]); $i++) {
          $set = $_POST["chkbox"];
          echo $set[$i];
          if($set[$i]=="") {
            echo $input_checkbox_etc_text.",";
          }
          // substr($set, 0, -1);
        }?>">
        <span>식당 전화번호 : </span>
        <input class="input_info_dis" type="text" name="input_phone" value="<? echo $phone1."-".$phone2."-".$phone3?>">
        <span>개업일 : </span>
        <input class="input_info_dis" type="text" name="input_opening_day" value="<? echo $input_opening_day?>">
        <span>특이사항 : </span>
        <textarea class="textarea_step2" name="special_note" rows="8" cols="74" style="resize: none;"><? echo $special_note?></textarea>
        <input class="input_info_dis" type="text" name="lat" value="<? echo $lat?>">
        <input class="input_info_dis" type="text" name="lon" value="<? echo $lon?>">
      </div>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
              <div class="div_except_button">
                <ul>
                  <li>시간당 최대 예약 가능한 인원을 적어주세요.</li>
                  <input id="input_people" class="input_people" type="number" name="input_max_num_of_people" value="">&nbsp명
                  </br></br></br>

                  <li>사용자가 예약할 수 있는 최대 개월 수를 설정해주세요.</li>
                    <input type="radio" name="max_month" value="1개월">
                    <span class="span_content_font">1개월</span>&nbsp&nbsp
                    <input type="radio" name="max_month" value="2개월">
                    <span class="span_content_font">2개월</span>&nbsp&nbsp
                    <input type="radio" name="max_month" value="3개월">
                    <span class="span_content_font">3개월</span>
                  </br></br></br>

                  <li>예약 규정 강도를 설정해주세요</li>
                  <input type="radio" name="reserve_intensity" value="상">
                  <span class="span_content_font">상</span>&nbsp&nbsp
                  <input type="radio" name="reserve_intensity" value="중">
                  <span class="span_content_font">중</span>&nbsp&nbsp
                  <input type="radio" name="reserve_intensity" value="하">
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
                <button class="button_next" type="button" name="button" onclick="stepCheck4()">다음</button>
                <button class="button_prev" type="button" name="button" onclick="history.go(-1)">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
