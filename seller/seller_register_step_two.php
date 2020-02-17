<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./js/seller_register.js"></script>
    <link rel="stylesheet" href="../common/css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=2">
  </head>
  <body class="body_margin">
    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">2단계 : 상세 정보를 입력해주세요</span>
      </div>

      <progress value="75" max="100">0%</progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">
                <ul>
                  <li>식당소개글</li>
                  <textarea name="name" rows="8" cols="80"></textarea>
                  </br></br>

                  <li>식당 메뉴</li>
                  <div id="div_add_input_table">
                    <input input class="input_info" type="text" name="" value="">
                    <button id="button_add" class="button_circle" type="button" name="button">+</button>
                  </div>
                  </br></br>


                  <table id="table_menu" class="table_seller_menu">
                    <tr>
                      <th>메뉴</th>
                      <th>가격</th>
                      <th>사진</th>
                    </tr>

                    <tr>

                      <td>갈릭페뇨파스타</td>
                      <td>22,000</td>
                      <td><input type="file" name="" value=""></td>
                    </tr>
                    <tbody>

                    </tbody>
                  </table>
                 </br></br>



                  <li>브레이크타임 정보</li>
                    <input id="radio_checked" type="radio" name="" value="" onchange="setDisplay()">있음
                    <input type="radio" name="" value="" onchange="setDisplay()">없음
                    <div id="div_radio">
                      <input type="time" name="" value="">&nbsp-
                      <input type="time" name="" value="">
                    </div>

                    </br></br>

                  <li>식당 편의시설</li>
                    <input type="checkbox" name="" value="">식당 내부 화장실
                    <input type="checkbox" name="" value="">건물 화장실 이용</br>
                    <input type="checkbox" name="" value="">자전거 거치대
                    <input type="checkbox" name="" value="">아기 의자
                    <input type="checkbox" name="" value="">기타
                    <input type="text" name="" value="기타 클릭 시 input 활성화">
                    </br></br>

                  <li>식당 사진</li>
                    <input type="file" name="" value="">
                    </br></br>

                  <li>특이사항</li>
                    <textarea name="name" rows="8" cols="80"></textarea>
                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_third.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_first2.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
    </section>
  </body>
</html>
