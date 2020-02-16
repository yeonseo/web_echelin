<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="./js/find_postcode.js"></script>
    <link rel="stylesheet" href="../common/css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=2">
  </head>
  <body>
    <section>
      <!-- 우편번호 찾기 폼 -->
      <div class="">
        <form class="" action="./seller_register_step_two.php" method="post">
          <ul>
            <li>식당 주소를 입력해주세요</li>
          </ul>
          <input type="text" id="input_postcode" placeholder="우편번호">
          <input type="button" onclick="execDaumPostcode()" value="우편번호 찾기"><br>
          <input type="text" id="input_address" placeholder="주소"><br>
          <input type="text" id="input_detailAddress" placeholder="상세주소">
          <input type="text" id="input_extraAddress" placeholder="참고항목">
        </br>
          <button type="button" name="button">이전</button>
          <input type="button" name="" value="계속" onclick="location.href='./seller_register_step_two.php'">
        </form>
      </div> <!--우편번호 div --><q cite=""></q>
    </section>
  </body>
</html>
