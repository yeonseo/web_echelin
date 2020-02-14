<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <img src="./image/cheese.png" alt="">
      <span id="header_span">2단계 : 상세 정보를 입력해주세요 </span>


        <div class="">
          <form class="" action="index.html" method="post">

            <ul>
              <li>
                식당소개글</br>
                <textarea name="name" rows="8" cols="80"></textarea>
              </li>
            </ul>

            <ul>
              <li>
                식당 메뉴</br>
                <input type="text" name="" value="">
                <button type="button" name="button">추가</button>
              </li>
            </ul>

            <ul>
              <li>
                <table border=1px solid black;>
                  <tr>
                    <th>메뉴</th>
                    <th>가격</th>
                  </tr>

                  <tr>
                    <td>입력한 메뉴가 보임</td>
                    <td>  <input type="text" name="" value="여기는 input"></td>
                  </tr>

                  <tr>
                    <td>입력한 메뉴가 보임</td>
                    <td>  <input type="text" name="" value="메뉴추가->테이블도 늘어남"></td>
                  </tr>
                </table>
              </li>
            </ul>

            <ul>
              <li>
                브레이크타임 정보
                </br>
                <input type="radio" name="" value="">있음
                <input type="radio" name="" value="">없음
                <input type="time" name="" value="">&nbsp-
                <input type="time" name="" value="">
                </br>
              </li>
            </ul>

            <ul>
              <li>
                식당 편의시설
                </br>
                <input type="checkbox" name="" value="">식당 내부 화장실
                <input type="checkbox" name="" value="">건물 화장실 이용
                <input type="checkbox" name="" value="">자전거 거치대
                <input type="checkbox" name="" value="">아기 의자
                <input type="checkbox" name="" value="">기타
                <input type="text" name="" value="기타 클릭 시 input 활성화">
              </li>
            </ul>

            <ul>
              <li>
                식당 사진
                </br>
                <input type="file" name="" value="">
              </li>
            </ul>

            <ul>
              <li>
                특이사항
              </br>
                <textarea name="name" rows="8" cols="80"></textarea>
              </li>
            </ul>

            <button type="button" name="button">이전</button>
            <input type="button" name="" value="계속" onclick="location.href='./seller_register_step_third.php'">
          </form>
        </div>
    </section>
  </body>
</html>
