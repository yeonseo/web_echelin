<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_register_step.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/user_seller.css">
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/js/update_find_postcode.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/js/update_seller.js"></script>
    <!-- <script src="./js/seller_register.js"></script> -->
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983"></script> -->
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services"></script>
    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
  </head>
  <body>
    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
<div class="my_info_content">
  <div class="left_menu">
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
  </div> <!-- end of left_menu -->

<?php
$seller_num=$_GET["seller_num"];


$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from seller where seller_num='$seller_num'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$seller_num = $row["seller_num"];
$store_name = $row["store_name"];
$business_license = $row["business_license"];
$store_type = $row["store_type"];
$store_address = $row["store_address"];
$store_postcode = $row["store_postcode"];
$store_lon = $row["store_lon"];
$store_lat = $row["store_lat"];
$convenient_facilities = $row["convenient_facilities"];
$introduction = $row["introduction"];
$break_start = $row["break_start"];
$break_end = $row["break_end"];
$nokids = $row["nokids"];
$opening_day = $row["opening_day"];
$opening_hours_start = $row["opening_hours_start"];
$opening_hours_end = $row["opening_hours_end"];
$store_tel = $row["store_tel"];
$special_note = $row["special_note"];
$max_reserv_time_num_of_people = $row["max_reserv_time_num_of_people"];
$max_reserv_month = $row["max_reserv_month"];
$intensity_of_reserv = $row["intensity_of_reserv"];

$re_address=explode(',', $store_address);

$re_opening_hours_start=str_replace(' : ', ":", $opening_hours_start);
$re_opening_hours_end=str_replace(' : ', ":", $opening_hours_end);

$re_break_start=str_replace(' : ', ":", $break_start);
$re_break_end=str_replace(' : ', ":", $break_end);

$re_convenient_facilities=explode(',', $convenient_facilities);

$re_store_tel = explode('-', $store_tel);

?>




<form name="form_seller_update" action="./update_seller.php" method="post" enctype="multipart/form-data">
<div class="right_content">
  <ul>
    <input type="text" name="seller_num" value="<?=$seller_num?>" hidden>
    <h3>가게이름</h3> </br>
    <input id="input_store_name" class="input_info" type="text" name="input_store_name" value="<?=$store_name?>"></br></br>
    <li>사업자번호<li>
    <input type="text" class="input_info" name="input_business_license" value="<?=$business_license?>" readonly>
    </br></br>
    <li>가게 주소</li>
    <input class="input_info" id="update_postcode" name="input_postcode" type="text" value="<?=$store_postcode?>">
    <button id="button_find_postcode" type="button" name="button" onclick="execDaumPostcode()">우편번호 찾기</button>
    </br></br>
    <input class="input_info" id="update_address" name="input_address" type="text" value="<?=$re_address[0]?>" style="width:200px";>
    </br></br>
    <input class="input_info" id="update_extraAddress" name="input_extraAddress" type="text" value="<?=$re_address[1]?>">
    </br></br>
    <input class="input_info" id="update_detailAddress" name="input_detailAddress" type="text" value="<?php if(isset($re_address[2])) {?> <?=$re_address[2]?> <?php } else {?> <?php echo ""?> <?php }?>">
    </br></br>
    <div id="div_map"></div> <!-- 지도 담는 div -->
    <br>

    <li>소개글</li>
    <textarea class="textarea_step2" name="introduction" rows="8" cols="74" style="resize: none;"><?echo $introduction?></textarea></br></br>
    <li>가게 종류</li></br>
    <input type="radio" name="store_type" value="한식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="한식") ?> checked>
    <span class="span_content_font">한식</span>
    <input type="radio" name="store_type" value="중식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="중식") ?> checked>
    <span class="span_content_font">중식</span>
    <input type="radio" name="store_type" value="양식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="양식") ?> checked>
    <span class="span_content_font">양식</span>
    <input type="radio" name="store_type" value="일식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="일식") ?> checked>
    <span class="span_content_font">일식</span>
    <input type="radio" name="store_type" value="아시아음식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="아시아음식") ?> checked>
    <span class="span_content_font">아시아음식</span>
    <input type="radio" name="store_type" value="분식" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="분식") ?> checked>
    <span class="span_content_font">분식</span></br>
    <input type="radio" name="store_type" value="카페" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="카페") ?> checked>
    <span class="span_content_font">카페</span>
    <input type="radio" name="store_type" value="뷔페" onclick="this.form.type_of_etc.disabled=true" <?php if($store_type=="뷔페") ?> checked>
    <span class="span_content_font">뷔페</span>
    <input type="radio" name="store_type" value="기타" onclick="this.form.type_of_etc.disabled=false" <?php if($store_type!="한식" && $store_type!="중식" && $store_type!="양식" && $store_type!="일식" && $store_type!="아시아음식" && $store_type!="분식" && $store_type!="카페" && $store_type!="뷔페") {?> checked <?php }?>>
    <span class="span_content_font">기타</span>
    <?php
    if($store_type !="한식" && $store_type!="중식" && $store_type!="양식" && $store_type!="일식" && $store_type!="아시아음식" && $store_type!="분식" && $store_type!="카페" && $store_type!="뷔페") {
    ?>
    <input id="input_store_type_etc" class="input_etc" type="text" name="type_of_etc" value="<?=$store_type?>">
  <?php } ?>
    </br></br></br>

    <li>영업시간</li></br>
    <input id="input_date_time1" class="input_date_time" type="time" name="opening_hours_start" value="<?=$re_opening_hours_start?>">&nbsp-
    <input id="input_date_time2" class="input_date_time" type="time" name="opening_hours_end" value="<?=$re_opening_hours_end?>">
    </br></br></br>

    <li>브레이크타임 정보</li></br>
     <input id="break_time_true" type="radio" name="break_time" value="true" <?php if($break_start!=null) {?> checked <?php } else {?> <?php echo ""?> <?php }?>>
     <span class="span_content_font">있음</span>

     <input id="break_time_false" type="radio" name="break_time" value="false" <?php if($break_start=="") {?> checked <?php } else {?> <?php echo ""?> <?php }?>>
     <span class="span_content_font">없음</span>
     <div id="div_radio" hidden>

        <input id="input_break_time1" class="input_date_time" type="time" name="break_start" value="<?=$re_break_start?>">&nbsp-
        <input id="input_break_time2" class="input_date_time" type="time" name="break_end" value="<?=$re_break_end?>">

     </div>
     </br></br></br>

     <li>노키즈존 여부</li></br>
     <input type="radio" name="nokids" value="true" <?php if($nokids == 1) {?> checked <?php } else {?> <?php echo""?> <?php }?>>
     <span class="span_content_font">있음</span>
     <input type="radio" name="nokids" value="false" <?php if($nokids == 0) {?> checked <?php } else {?> <?php echo""?> <?php }?>>
     <span class="span_content_font">없음</span>
     </br></br></br>

    <li>식당 편의시설</li></br>
      <input type="checkbox" name="chkbox[]" value="식당 내부 화장실,"
      <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="식당 내부 화장실") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">식당 내부 화장실</span></br></br>
      <input type="checkbox" name="chkbox[]" value="건물 내부 화장실," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="건물 내부 화장실") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">건물 내부 화장실</span></br></br>
      <input type="checkbox" name="chkbox[]" value="자전거 거치대," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="자전거 거치대") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">자전거 거치대</span></br></br>
      <input type="checkbox" name="chkbox[]" value="아기 의자," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="아기 의자") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">아기 의자</span></br></br>
      <input type="checkbox" name="chkbox[]" value="장애인 시설," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="장애인 시설") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">장애인 시설</span></br></br>
      <input type="checkbox" name="chkbox[]" value="놀이시설," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="놀이시설") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">놀이시설</span></br></br>
      <input type="checkbox" name="chkbox[]" value="수유방," <?php for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]=="수유방") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">수유방</span></br></br>
      <input id="input_checkbox_etc" type="checkbox" name="chkbox[]" value="기타" onclick="checkbox_disable()"
      <?php for($i=0; $i<count($re_convenient_facilities); $i++) {if($re_convenient_facilities[$i]!="건물 내부 화장실" && $re_convenient_facilities[$i]!="식당 내부 화장실" && $re_convenient_facilities[$i]!="자전거 거치대" && $re_convenient_facilities[$i]!="아기 의자" && $re_convenient_facilities[$i]!="장애인 시설" &&
        $re_convenient_facilities[$i]!="놀이시설" && $re_convenient_facilities[$i]!="수유방") {?> checked <?php }?> <?php }?>>
      <span class="span_content_font">기타</span>
      <?php
      for($i=0; $i<count($re_convenient_facilities); $i++) {
        if($re_convenient_facilities[$i]!="건물 내부 화장실" && $re_convenient_facilities[$i]!="식당 내부 화장실" && $re_convenient_facilities[$i]!="자전거 거치대" && $re_convenient_facilities[$i]!="아기 의자" && $re_convenient_facilities[$i]!="장애인 시설" && $re_convenient_facilities[$i]!="놀이시설" && $re_convenient_facilities[$i]!="수유방") {
      ?>
      <input id="input_checkbox_etc_text" class="input_etc" type="text" name="input_checkbox_etc_text" value="<?=$re_convenient_facilities[$i]?>">
        <?php }}?>

      </br></br></br>

      <li>식당 전화번호</li>
      <span class="span_content_font">손님이 문의할 수 있는 식당 대표번호를 적어주세요.</span></br>
      <select class="input_date_time" name="phone1">
        <option value="02" <?php if($re_store_tel[0]=="02") {?>selected <?php }?>>02</option>
        <option value="010" <?php if($re_store_tel[0]=="010") {?>selected <?php }?>>010</option>
        <option value="031" <?php if($re_store_tel[0]=="031") {?>selected <?php }?>>031</option>
        <option value="032" <?php if($re_store_tel[0]=="032") {?>selected <?php }?>>032</option>
        <option value="033" <?php if($re_store_tel[0]=="033") {?>selected <?php }?>>033</option>
        <option value="041" <?php if($re_store_tel[0]=="041") {?>selected <?php }?>>041</option>
        <option value="042" <?php if($re_store_tel[0]=="042") {?>selected <?php }?>>042</option>
        <option value="043" <?php if($re_store_tel[0]=="043") {?>selected <?php }?>>043</option>
        <option value="044" <?php if($re_store_tel[0]=="044") {?>selected <?php }?>>044</option>
        <option value="051" <?php if($re_store_tel[0]=="051") {?>selected <?php }?>>051</option>
        <option value="052" <?php if($re_store_tel[0]=="052") {?>selected <?php }?>>052</option>
        <option value="053" <?php if($re_store_tel[0]=="053") {?>selected <?php }?>>053</option>
        <option value="054" <?php if($re_store_tel[0]=="054") {?>selected <?php }?>>054</option>
        <option value="055" <?php if($re_store_tel[0]=="055") {?>selected <?php }?>>055</option>
        <option value="061" <?php if($re_store_tel[0]=="061") {?>selected <?php }?>>061</option>
        <option value="062" <?php if($re_store_tel[0]=="062") {?>selected <?php }?>>062</option>
        <option value="063" <?php if($re_store_tel[0]=="063") {?>selected <?php }?>>063</option>
        <option value="064" <?php if($re_store_tel[0]=="064") {?>selected <?php }?>>064</option>
      </select>
      -
      <input id="input_phone2" class="input_phone" type="number" name="phone2" value="<?=$re_store_tel[1]?>" onchange="chkPhone(this)">
      -
      <input id="input_phone3" class="input_phone" type="number" name="phone3" value="<?=$re_store_tel[2]?>" onchange="chkPhone(this)">
      </br></br></br>

      <li>개업일</li>
        <input id="input_opening_day" class="input_date_time" type="date" name="input_opening_day" value="<?=$opening_day?>">
        </br></br></br>

      <li>특이사항</li>
        <textarea class="textarea_step2" name="special_note" rows="8" cols="74" style="resize: none;" value="특이사항"><?echo $special_note?></textarea>
        </br></br></br></br>

      <li>시간당 최대 예약 가능한 인원을 적어주세요.</li></br>
      <input id="input_people" class="input_people" type="number" name="input_max_num_of_people" value="<?=$max_reserv_time_num_of_people?>">&nbsp명
      </br></br></br>

      <li>사용자가 예약할 수 있는 최대 개월 수를 설정해주세요.</li></br>
        <input type="radio" name="max_month" value="1개월" <?php if($max_reserv_month=="1개월") ?> checked>
        <span class="span_content_font">1개월</span>&nbsp&nbsp
        <input type="radio" name="max_month" value="2개월"  <?php if($max_reserv_month=="2개월") ?> checked>
        <span class="span_content_font">2개월</span>&nbsp&nbsp
        <input type="radio" name="max_month" value="3개월" <?php if($max_reserv_month=="3개월") ?> checked>
        <span class="span_content_font">3개월</span>
      </br></br></br>

      <li>예약 규정 강도를 설정해주세요</li></br>
      <input type="radio" name="reserve_intensity" value="상" <?php if($intensity_of_reserv=="상") ?> checked>
      <span class="span_content_font">상</span>&nbsp&nbsp
      <input type="radio" name="reserve_intensity" value="중" <?php if($intensity_of_reserv=="중") ?> checked>
      <span class="span_content_font">중</span>&nbsp&nbsp
      <input type="radio" name="reserve_intensity" value="하" <?php if($intensity_of_reserv=="하") ?> checked>
      <span class="span_content_font">하</span></br></br>
      <div class="div_strength">
        <span class="span_strength">&nbsp&nbsp&nbsp&nbsp상 : 예약 당일 취소 시 환불 불가능.</span></br>
        <span class="span_strength">&nbsp&nbsp&nbsp&nbsp중 : 예약 당일 취소 시 결제금액의 50% 환불가능.</span></br>
        <span class="span_strength">&nbsp&nbsp&nbsp&nbsp하 : 예약 당일 취소 시 결제금액의 전액 환불가능.</span></br>
      </div>
      </br></br></br></br>

      <input id="lat" type="text" name="lat_update" value="<?=$store_lat?>" hidden>
      </br></br>
      <input id="lon" type="text" name="lon_update" value="<?=$store_lon?>" hidden>
  </ul>

   <button class="button_complete" type="button" name="button" onclick="update_seller()">완료</button>
 </div> <!-- end of right_content -->

 </form>
 <script type="text/javascript">
 var mapContainer = document.getElementById('div_map'), // 지도를 표시할 div
     mapOption = {
         center: new kakao.maps.LatLng(<?=$store_lat?>, <?=$store_lon?>), // 지도의 중심좌표
         level: 3 // 지도의 확대 레벨
     };

 var map = new kakao.maps.Map(mapContainer, mapOption);

 // 마커가 표시될 위치입니다
 var markerPosition  = new kakao.maps.LatLng(<?=$store_lat?>, <?=$store_lon?>);

 // 마커를 생성합니다
 var marker = new kakao.maps.Marker({
     position: markerPosition
 });

 // 마커가 지도 위에 표시되도록 설정합니다
 marker.setMap(map);

 var iwContent = '<div style="width:150px;text-align:center;padding:6px 0;"><?=$store_name?></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
     iwPosition = new kakao.maps.LatLng(<?=$store_lat?>, <?=$store_lon?>); //인포윈도우 표시 위치입니다

 // 인포윈도우를 생성합니다
 var infowindow = new kakao.maps.InfoWindow({
     position : iwPosition,
     content : iwContent
 });

 // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
 infowindow.open(map, marker);
 </script>


 <script type="text/javascript">
 var center;
 var latitude;
 var longitude;
   function showMap(address) {

     var mapContainer = document.getElementById('div_map'), // 지도를 표시할 div
         mapOption = {
             center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
             level: 3 // 지도의 확대 레벨
         };

     // 지도를 생성합니다
     var map = new kakao.maps.Map(mapContainer, mapOption);

     // 주소-좌표 변환 객체를 생성합니다
     var geocoder = new kakao.maps.services.Geocoder();

     // 주소로 좌표를 검색합니다
     geocoder.addressSearch(address, function(result, status) {

         // 정상적으로 검색이 완료됐으면
          if (status === kakao.maps.services.Status.OK) {

             var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

             // 결과값으로 받은 위치를 마커로 표시합니다
             var marker = new kakao.maps.Marker({
                 map: map,
                 position: coords
             });


             // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
             map.setCenter(coords);

             center=map.getCenter();
             latitude=center.getLat();
             longitude=center.getLng();
             console.log(latitude, longitude);
             document.getElementById("lat").value=latitude;
             document.getElementById("lon").value=longitude;

             // 인포윈도우로 장소에 대한 설명을 표시합니다
             var infowindow = new kakao.maps.InfoWindow({
                 content: '<div style="width:150px;text-align:center;padding:6px 0;"><?=$store_name?></div>'
             });
             infowindow.open(map, marker);


             // mapContainer.css('display', ($(this).val() === 'true') ? 'block' : 'none');

         }
     });
   }
 </script>

 </div> <!-- end of my_info_content -->
 <footer>
   <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
 </footer>



</body>
</html>
