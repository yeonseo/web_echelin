<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <div class="">
        <h3>엽기꼼닭발 </h3>
        <ul>
          <li>판매자번호 : 2465785</li>
        </ul>
        <form class="" action="index.html" method="post">
          <ul>
            <li>식당 이름</li>
            <button type="button" name="button">변경하기</button>
            <input type="text" name="" value="">
            <input type="button" name="" value="완료">
          </ul>
        </form>
      </div>

      <div class="">
        <input type="number" name="" value="" placeholder="사업자등록번호" readonly>
      </div>

      <div class="">
        식당 소개글 쓰기
        <form class="" action="index.html" method="post">
          <textarea name="name" rows="8" cols="80"></textarea>
          <input type="button" name="" value="완료">
        </form>

        식당 특이사항
        <form class="" action="index.html" method="post">
          <input type="textarea" name="" value="">
          <input type="button" name="" value="완료">
        </form>
      </div>

      <div class=" ">
        식당 주소 변경하기
        <form class="" action="./seller_register_step_two.php" method="post">
          <input type="text" id="input_postcode" placeholder="우편번호">
          <input type="button" onclick="execDaumPostcode()" value="우편번호 찾기"><br>
          <input type="text" id="input_address" placeholder="주소"><br>
          <input type="text" id="input_detailAddress" placeholder="상세주소">
          <input type="text" id="input_extraAddress" placeholder="참고항목">
          <input type="button" name="" value="완료" onclick="./seller_register_step_two.php">
        </form>
      </div>

      <div class="">
        메뉴
        <form class="" action="index.html" method="post">
          <input type="text" name="" value="">
          <button type="button" name="button">추가</button>
          <input type="button" name="" value="완료">
        </form>
      </div>
      <div class="">

      </div>

      <div class="">
        식당 예약 가능 시간 변경하기
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
          <input type="button" name="" value="완료">
        </form>
      </div>

      <div class="">
        예약 가능 인원
        <input type="number" name="" value="">
      </div>

      <div class="">
        사진 올리기
        <form class="" action="index.html" method="post">
          <input type="file" name="" value="">
        </form>
      </div>

      <div class="">
        편의시설
        <form class="" action="index.html" method="post">
          <input type="checkbox" name="" value="">자전거거치대
          <input type="checkbox" name="" value="">내부 화장실 이용
          <input type="checkbox" name="" value="">건물 화장실 이용
          <input type="text" name="" value="" placeholder="기타">
        </form>
      </div>

      <div class="">
        브레이크 타임 여부
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
          <input type="button" name="" value="완료">
        </form>
      </div>






    </div>
  </body>
</html>
