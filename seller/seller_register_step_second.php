<?php
$input_store_name = $_POST["input_store_name"];
// echo "console.log($input_store_name)";
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
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services"></script>
    <link rel="stylesheet" href="./css/seller_register_step.css">
    <link rel="stylesheet" href="/echelin/common/css/user_seller.css">
    <link rel="stylesheet" href="/echelin/common/css/common.css">
    <link rel="stylesheet" href="/echelin/common/css/search.css">
    <script type="text/javascript">


    </script>
  </head>
  <body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>


    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">2단계 : 정확한 식당 위치를 등록해주세요.</span>
      </div>

      <progress value="33.2" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <!-- 우편번호 찾기 폼 -->
              <form class="" action="" method="post">
                <div class="div_except_button">
                  <ul>
                    <li>식당 주소를 입력해주세요</li>
                  </ul>
                  <input class="input_info" type="text" id="input_postcode" placeholder=" 우편번호">
                  <button id="button_find_postcode" type="button" name="button" onclick="execDaumPostcode()">우편번호 찾기</button>
                  </br></br>
                  <input class="input_info" id="input_address"type="text" placeholder=" 주소">
                  <!-- <button class="button_show_map" type="button" name="button" onclick="showMap()">지도보기</button> -->
                  </br></br>
                  <input class="input_info" id="input_extraAddress" type="text" placeholder=" 참고항목">
                  </br></br>
                  <input class="input_info" id="input_detailAddress" type="text" placeholder=" 예) 상가 2층에 위치해있습니다.">
                  </br></br>
                  <div id="div_map" style="width:100%;height:350px;"></div> <!-- 지도 담는 div -->
                </div> <!-- div_except_button -->
                <div class="div_prv_next_button">
                  <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_third.php'">다음</button>
                  <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_second.php'">이전</button>
                </div>
              </form>
          </div>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>


  </body>
</html>
