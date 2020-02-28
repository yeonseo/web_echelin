<?php
$input_store_name = $_POST["input_store_name"];
$input_business_license = $_POST["input_business_license"];
echo $input_store_name;
echo $input_business_license;
 ?>
 <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="./js/find_postcode.js"></script>
    <script src="./js/map.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="./js/seller_register.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services"></script>
    <link rel="stylesheet" href="./css/seller_register_step.css">
    <link rel="stylesheet" href="/echelin/common/css/user_seller.css">
    <link rel="stylesheet" href="/echelin/common/css/common.css">
    <link rel="stylesheet" href="/echelin/common/css/search.css">
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
                    content: '<div style="width:150px;text-align:center;padding:6px 0;"><? echo $input_store_name;?></div>'
                });
                infowindow.open(map, marker);


                // mapContainer.css('display', ($(this).val() === 'true') ? 'block' : 'none');

            }
        });
      }
    </script>
  </head>
  <body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>


    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="" onclick="location.href='../'">
        <span class="span_step_info">2단계 : 정확한 식당 위치를 등록해주세요.</span>
      </div>

      <progress value="33.2" max="100"></progress>

      <div class="div_outside">
        <form class="" id="form_first_show" name="form_first_show" action="./seller_register_step_third.php" method="post">
          <span>내 식당 : </span>
          <input class="input_info_dis" type="text" name="input_store_name" value="<? echo $input_store_name?>">&nbsp&nbsp
          <span>사업자번호 : </span>
          <input class="input_info_dis" type="text" name="input_business_license" value="<? echo $input_business_license?>">
        </form>
      </div>


      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <!-- 우편번호 찾기 폼 -->
              <form class="" id="form_seller_register_step_second" name="form_seller_register_step_second" action="./seller_register_step_third.php" method="post">
                <div class="div_except_button">
                  <ul>
                    <li>식당 주소를 입력해주세요</li>
                  </ul>
                  <input class="input_info" id="input_postcode" name="input_postcode" type="text" placeholder=" 우편번호">
                  <button id="button_find_postcode" type="button" name="button" onclick="execDaumPostcode()">우편번호 찾기</button>
                  </br></br>
                  <input class="input_info" id="input_address" name="input_address" type="text" placeholder=" 주소">
                  </br></br>
                  <input class="input_info" id="input_extraAddress" name="input_extraAddress" type="text" placeholder=" 참고항목">
                  </br></br>
                  <input class="input_info" id="input_detailAddress" name="input_detailAddress" type="text" placeholder=" 예) 상가 2층에 위치해있습니다.">
                  </br></br>
                  <div id="div_map"></div> <!-- 지도 담는 div -->
                  <input id="lat" type="text" name="lat" hidden>
                  </br></br>
                  <input id="lon" type="text" name="lon" hidden>
                  </br></br>

                </div> <!-- div_except_button -->
                <div class="div_prv_next_button">
                  <button class="button_next" type="button" name="button" onclick="stepCheck2()">다음</button>
                  <button class="button_prev" type="button" name="button" onclick="history.go(-1)">이전</button>
                </div>
              </form>
          </div>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
