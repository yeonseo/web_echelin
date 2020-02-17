<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
                  <input class="input_info" type="text" name="" value="">
                  <button class="button_find_add" type="button" name="button">추가</button>
                  </br></br>

                  <table border=1px solid black;>
                    <tr>
                      <th>메뉴</th>
                      <th>가격</th>
                      <th>사진</th>
                    </tr>

                    <tr>
                      <td>입력한 메뉴가 보임</td>
                      <td><input type="text" name="" value="여기는 input"></td>
                      <td><input type="file" name="" value=""></td>
                    </tr>

                    <tr>
                      <td>입력한 메뉴가 보임</td>
                      <td><input type="text" name="" value="메뉴추가->테이블도 늘어남"></td>
                      <td><input type="file" name="" value=""></td>
                    </tr>
                  </table>
                 </br></br>

                  <li>브레이크타임 정보</li>
                    <input type="radio" name="" value="">있음
                    <input type="radio" name="" value="">없음
                    <input type="time" name="" value="">&nbsp-
                    <input type="time" name="" value="">
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
