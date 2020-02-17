<?php
$input_store_name = $_POST["input_store_name"];
// echo "console.log($input_store_name)";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="./js/find_postcode.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services"></script>
    <link rel="stylesheet" href="../common/css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=2">
    <script type="text/javascript">
    function showMap() {
      var input_address = document.getElementById('input_address').value;

      var mapContainer = document.getElementById('map'), // 지도를 표시할 div
          mapOption = {
              center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
              level: 3 // 지도의 확대 레벨
          };

      // 지도를 생성합니다
      var map = new kakao.maps.Map(mapContainer, mapOption);

      // 주소-좌표 변환 객체를 생성합니다
      var geocoder = new kakao.maps.services.Geocoder();

      // 주소로 좌표를 검색합니다
      geocoder.addressSearch(input_address, function(result, status) {

          // 정상적으로 검색이 완료됐으면
           if (status === kakao.maps.services.Status.OK) {

              var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

              // 결과값으로 받은 위치를 마커로 표시합니다
              var marker = new kakao.maps.Marker({
                  map: map,
                  position: coords
              });

              // 인포윈도우로 장소에 대한 설명을 표시합니다
              var infowindow = new kakao.maps.InfoWindow({
                  content: '<div style="width:150px;text-align:center;padding:6px 0;"><? echo $input_store_name;?></div>'
              });
              infowindow.open(map, marker);

              // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
              map.setCenter(coords);
          }
      });
    }

    </script>
  </head>
  <body class="body_margin">
    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">1단계 : 기본 사항을 입력해주세요.</span>
      </div>

      <progress value="50" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <!-- 우편번호 찾기 폼 -->
              <form class="" action="" method="post">
                <div class="div_except_button">
                  <ul>
                    <li>식당 주소를 입력해주세요</li>
                  </ul>
                  <input class="input_info" type="text" id="input_postcode" placeholder="우편번호">
                  <button id="button_find_postcode" type="button" name="button" onclick="execDaumPostcode()">우편번호 찾기</button>
                  </br></br>
                  <input class="input_info" id="input_address"type="text" placeholder="주소">
                  <input type="button" name="" value="지도찾기" onclick="showMap()">
                  <!-- <button class="button_find" type="button" name="button" >지도</button> -->
                  </br></br>
                  <input class="input_info" id="input_detailAddress" type="text" placeholder="상세주 ex)상가 2층에 위치해있습니다.">
                  </br></br>
                  <input class="input_info" id="input_extraAddress" type="text" placeholder="참고항목">
                  </br></br>
                  <div id="map" style="width:100%;height:350px;">
                  </div> <!-- 지도 담는 div -->
                </div> <!-- div_except_button -->
                <div class="div_prv_next_button">
                  <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_two.php'">다음</button>
                  <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_first.php'">이전</button>
                </div>
              </form>
          </div>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
