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
        <span class="span_step_info">1단계 : 기본 사항을 입력해주세요.</span>
      </div>

      <progress value="25" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <span class="span_user_name">김지수</span>
          <span class="span_hello">님 안녕하세요!</span>
          <span class="span_register_info">가게 등록을 시작해볼까요?</span>

          <div class="div_form">
            <form class="" name="form_seller_register_step_first" action="./seller_register_step_first2.php" method="post">
              <ul>
                <li>등록하시려는 가게 이름을 적어주세요.</li>
                  <input class="input_info" type="text" name="input_store_name" value="">
                </br></br>
                <li>사업자등록번호를 등록해주세요</li>
                  <input class="input_info" type="text" name="" value="">
                  <button class="button_find_add" type="button" name="button">찾기</button>
              </ul>
              <div class="div_prv_next_button">
                <button class="button_next" id="button_next" type="submit" name="button" onclick="location.href='./seller_register_step_first2.php'">다음</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
