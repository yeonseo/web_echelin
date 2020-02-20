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
        <span class="span_step_info">3단계 : 상세 정보를 입력해주세요.</span>
      </div>

      <progress value="49.8" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">
                <ul>
                  <li>식당소개글</li>
                  <textarea name="name" rows="8" cols="74" style="resize: none;"></textarea>
                  </br></br>

                  <li id="li_menu">식당 메뉴</li>
                  <button id="button_add" class="button_circle_add" type="button">+</button>
                  <br>
                  <br>
                  <table class="table_seller_menu" border="1">
                      <tbody>
                          <tr>
                            <th>메뉴</th>
                            <th>가격</th>
                            <th>사진</th>
                          </tr>

                          <tr name="tr_menu">
                            <td><input type="text" name="" placeholder="메뉴이름"></td>
                            <td><input type="number" name="" placeholder="가격"></td>
                            <td><input type="file" name="" value=""></td>
                          </tr>
                      </tbody>
                  </table>
                 </br></br>


                  <li>브레이크타임 정보</li>
                    <input type="radio" name="break_time" value="true">있음
                    <input type="radio" name="break_time" value="false">없음
                    <div id="div_radio" hidden>
                      <input id="ccc"type="time" name="" value="">&nbsp-
                      <input type="time" name="" value="">
                    </div>

                    </br></br>

                  <li>식당 편의시설</li>
                    <input type="checkbox" name="" value="">식당 내부 화장실
                    <input type="checkbox" name="" value="">건물 화장실 이용</br>
                    <input type="checkbox" name="" value="">자전거 거치대
                    <input type="checkbox" name="" value="">아기 의자
                    <input type="checkbox" name="checkbox_etc" value="">기타
                    <input id="input_etc" type="text" name="" value="기타 클릭 시 input 활성화" disabled>
                    </br></br>

                  <li>식당 사진</li>
                    <input type="file" name="" value="">
                    </br></br>

                  <li>특이사항</li>
                    <textarea name="name" rows="8" cols="74" style="resize: none;"></textarea>


                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_fourth.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_second.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
    </section>


  </body>
</html>
