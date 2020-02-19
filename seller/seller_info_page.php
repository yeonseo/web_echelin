<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=2">
  </head>
  <body>
    <section>
      <div class="div_seller_info">
        <div class="">
          <h3>엽기꼼닭발 </h3>
          <ul>
            <li>판매자번호 : <input input class="input_info" type="text" name="" value="" readonly></li>
          </ul>
          <form class="" action="index.html" method="post">
            <ul>
              <li>식당 이름</li>
              <button class="button_find_add_comp" type="button" name="button">변경하기</button>
              <input class="input_info" type="text" name="" value="">
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </ul>
          </form>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>사업자등록번호</li>
              <input type="number" name="" value="" placeholder="사업자등록번호" readonly>
            </ul>
          </form>
        </div>




        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>식당 소개글 쓰기</li>
              <textarea name="name" rows="8" cols="80"></textarea>
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </ul>
          </form>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>식당 특이사항</li>
              <textarea name="name" rows="8" cols="80"></textarea>
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </ul>
          </form>
        </div>


        <div class=" ">
          <form class="" action="./seller_register_step_two.php" method="post">
            <ul>
              <li>식당 주소 변경하기</li>
              <input type="text" id="input_postcode" placeholder="우편번호">
              <input type="button" onclick="execDaumPostcode()" value="우편번호 찾기"><br>
              <input type="text" id="input_address" placeholder="주소"><br>
              <input type="text" id="input_detailAddress" placeholder="상세주소">
              <input type="text" id="input_extraAddress" placeholder="참고항목">
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </ul>
          </form>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>메뉴</li>
              <input type="text" name="" value="">
              <button type="button" name="button">추가</button>
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </ul>
          </form>
        </div>


        <div class="">
          <ul>
            <li>식당 예약 가능 시간 변경하기</li>
            <form class="" action="index.html" method="post">
              <select class="" name="">
                <option value="">시간 선택</option>
                <option value="">11시</option>
                <option value="">12시</option>
                <option value="">13시</option>
                <option value="">14시</option>
                <option value="">15시</option>
                <option value="">16시</option>
                <option value="">17시</option>
              </select>
              <span>-</span>
              <select class="" name="">
                <option value="">시간 선택</option>
                <option value="">11시</option>
                <option value="">12시</option>
                <option value="">13시</option>
                <option value="">14시</option>
                <option value="">15시</option>
                <option value="">16시</option>
                <option value="">17시</option>
              </select>
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </form>
          </ul>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>예약 가능 인원</li>
              <input type="number" name="" value="">
            </ul>
          </form>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>사진 올리기</li>
              <input type="file" name="" value="">
            </ul>
          </form>
        </div>

        <div class="">
          <form class="" action="index.html" method="post">
            <ul>
              <li>편의시설</li>
              <input type="checkbox" name="" value="">자전거거치대
              <input type="checkbox" name="" value="">내부 화장실 이용
              <input type="checkbox" name="" value="">건물 화장실 이용
              <input type="text" name="" value="" placeholder="기타">
            </ul>
          </form>
        </div>

        <div class="">
          <ul>
            <li>브레이크 타임 여부</li>
            <form class="" action="index.html" method="post">
              <input type="radio" name="" value="">있음
              <input type="radio" name="" value="">없음
              <select class="" name="">
                <option value="">시간 선택</option>
                <option value="">11시</option>
                <option value="">12시</option>
                <option value="">13시</option>
                <option value="">14시</option>
                <option value="">15시</option>
                <option value="">16시</option>
                <option value="">17시</option>
              </select>
              <span>-</span>
              <select class="" name="">
                <option value="">시간 선택</option>
                <option value="">11시</option>
                <option value="">12시</option>
                <option value="">13시</option>
                <option value="">14시</option>
                <option value="">15시</option>
                <option value="">16시</option>
                <option value="">17시</option>
              </select>
              <button class="button_find_add_comp" type="submit" name="button">완료</button>
            </form>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>
