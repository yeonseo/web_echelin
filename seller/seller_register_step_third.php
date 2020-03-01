<?php
$input_store_name = $_POST["input_store_name"];
$input_business_license = $_POST["input_business_license"];
$input_postcode = $_POST["input_postcode"];
$input_address = $_POST["input_address"];
$input_extraAddress = $_POST["input_extraAddress"];
$input_detailAddress = $_POST["input_detailAddress"];

echo $input_store_name;
echo $input_business_license;
echo $input_postcode;
echo $input_address;
echo $input_extraAddress;
echo $input_detailAddress;
 ?>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./js/seller_register.js"></script>
    <script src="./js/preview.js"></script>
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
        <span class="span_step_info">3단계 : 상세 정보를 입력해주세요.</span>
      </div>

      <progress value="49.8" max="100"></progress>

      <form class="" name="form_seller_register_step_third" action="./seller_register_step_fourth.php" method="post">
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
      </div>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <!-- <form class="" name="" action="" method="post"> -->
              <div class="div_except_button">
                <ul>
                  <li>식당소개글</li>
                  <textarea class="textarea_step2" name="introduction" rows="8" cols="74" style="resize: none;"></textarea>
                  </br></br></br>


                  <li>식당 종류은 어떻게 되나요?</li>
                  <input type="radio" name="store_type" value="한식" checked onclick="this.form.type_of_etc.disabled=true">
                  <span class="span_content_font">한식</span>
                  <input type="radio" name="store_type" value="중식" onclick="this.form.type_of_etc.disabled=true">
                  <span class="span_content_font">중식</span>
                  <input type="radio" name="store_type" value="양식" onclick="this.form.type_of_etc.disabled=true">
                  <span class="span_content_font">양식</span>
                  <input type="radio" name="store_type" value="기타" onclick="this.form.type_of_etc.disabled=false">
                  <span class="span_content_font">기타</span>
                  <input id="input_store_type_etc" class="input_etc" type="text" name="type_of_etc" value="" disabled>
                  </br></br></br>

                  <li id="li_menu">메뉴 추가하기</li>
                  <button id="button_add" class="button_circle_add" type="button">+</button>
                  <br>
                  <br>
                  <table class="table_seller_menu" border="1">
                      <tbody>
                          <tr>
                            <th class="th_menu">메뉴</th>
                            <th class="th_menu">가격</th>
                            <th class="th_menu">사진</th>
                            <th class="th_menu">설명</th>
                            <th class="th_menu_del"></th>
                          </tr>

                          <tr class="tr_menu" name="tr_menu">
                            <td class="td_menu"><input type="text" name="input_menu" placeholder="메뉴이름" value="치즈떡볶이"></td>
                            <td class="td_menu"><input type="number" name="input_price" placeholder="가격" value="4000"></td>
                            <td class="td_menu"><input type="file" name="input_menu_img" value=""></td>
                            <td class="td_menu"><input type="text" name="input_menu_explain" placeholder="메뉴 설명"></td>
                            <td class="td_button_del"><input type="text" name=""></td>
                          </tr>
                      </tbody>
                  </table>
                 </br></br></br>


                 <li>영업시간</li>
                 <input id="input_date_time1" class="input_date_time" type="time" name="opening_hours_start" value="09:00">&nbsp-
                 <input id="input_date_time2" class="input_date_time" type="time" name="opening_hours_end" value="22:00">
                   </br></br></br>


                 <li>브레이크타임 정보</li>
                  <input type="radio" name="break_time" value="true" checked>
                  <span class="span_content_font">있음</span>
                  <input type="radio" name="break_time" value="false">
                  <span class="span_content_font">없음</span>
                  <div id="div_radio" hidden>
                    <input id="input_break_time1" class="input_date_time" type="time" name="break_start" value="15:00">&nbsp-
                    <input id="input_break_time2" class="input_date_time" type="time" name="break_end" value="17:00">
                  </div>
                  </br></br></br>

                  <li>식당 편의시설</li>
                    <input type="checkbox" name="chkbox" value="식당 내부 화장실" checked>
                    <span class="span_content_font">식당 내부 화장실</span></br>
                    <input type="checkbox" name="chkbox" value="건물 내부 화장실">
                    <span class="span_content_font">건물 내부 화장실</span></br>
                    <input type="checkbox" name="chkbox" value="자전거 거치대">
                    <span class="span_content_font">자전거 거치대</span></br>
                    <input type="checkbox" name="chkbox" value="아기 의자">
                    <span class="span_content_font">아기 의자</span></br>
                    <input type="checkbox" name="chkbox" value="장애인 시설">
                    <span class="span_content_font">장애인 시설</span></br>
                    <input type="checkbox" name="chkbox" value="놀이시설">
                    <span class="span_content_font">놀이시설</span></br>
                    <input type="checkbox" name="chkbox" value=수유방"">
                    <span class="span_content_font">수유방</span></br>
                    <input id="input_checkbox_etc" type="checkbox" name="chkbox" value="" onclick="checkbox_disable()">
                    <span class="span_content_font">기타</span>
                    <input id="input_checkbox_etc_text" class="input_etc" type="text" name="" value="" disabled>
                    </br></br></br>

                  <li>식당 전화번호</li>
                  <span class="span_content_font">손님이 문의할 수 있는 식당 대표번호를 적어주세요.</span></br>
                  <select class="input_date_time" name="phone1">
                    <option value="">02</option>
                    <option value="">010</option>
                    <option value="">031</option>
                    <option value="">032</option>
                    <option value="">033</option>
                    <option value="">041</option>
                    <option value="">042</option>
                    <option value="">043</option>
                    <option value="">044</option>
                    <option value="">051</option>
                    <option value="">052</option>
                    <option value="">053</option>
                    <option value="">054</option>
                    <option value="">055</option>
                    <option value="">061</option>
                    <option value="">062</option>
                    <option value="">063</option>
                    <option value="">064</option>
                  </select>
                  -
                  <input id="input_phone2" class="input_phone" type="number" name="phone2" value="" onchange="chkPhone(this)">
                  -
                  <input id="input_phone3" class="input_phone" type="number" name="" value="phone3" onchange="chkPhone(this)">
                  </br></br></br>


                  <li>식당 외/내부 사진</li>
                    <div class="store_pic">
                      <div class="store_inner_pic1">
                        <label for="store_image1">업로드</label>
                        <input type="file" name="file1" id="store_image1" />

                        <div class="image_preview1">
                            <img class="store_img" src="./image/cheese.png" />
                        </div>
                      </div>

                      <div class="store_inner_pic">
                      <label for="store_image2">업로드</label>
                        <input type="file" name="file2" id="store_image2" />

                        <div class="image_preview2">
                            <img class="store_img" src="./image/cheese.png" />
                        </div>
                      </div>

                      <div class="store_inner_pic">
                        <label for="store_image3">업로드</label>
                        <input type="file" name="file3" id="store_image3" />

                        <div class="image_preview3">
                            <img class="store_img" src="./image/cheese.png" />
                        </div>
                      </div>

                      <div class="store_inner_pic">
                        <label for="store_image4">업로드</label>
                        <input type="file" name="file4" id="store_image4" />

                        <div class="image_preview4">
                          <img class="store_img" src="./image/cheese.png" />
                        </div>
                      </div>

                      <div class="store_inner_pic">
                          <label for="store_image5">업로드</label>
                        <input type="file" name="file5" id="store_image5" />

                        <div class="image_preview5">
                            <img class="store_img" src="./image/cheese.png" />
                        </div>
                      </div>
                    </div>


                    <div class="div_clear_both">

                    </div>
                    </br></br>


                  <li>개업일</li>
                    <input id="input_opening_day" class="input_date_time" type="date" name="input_opening_day" value="2020-01-01">
                    </br></br></br>

                  <li>특이사항</li>
                    <textarea class="textarea_step2" name="special_note" rows="8" cols="74" style="resize: none;" value="특이사항"></textarea>
                    </br></br></br></br>


                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="stepCheck3()">다음</button>
                <button class="button_prev" type="button" name="button" onclick="history.go(-1)">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
    </section>


  </body>
</html>
