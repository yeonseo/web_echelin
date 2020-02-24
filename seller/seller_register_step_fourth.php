<?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
        <span class="span_step_info">4단계 : 손님을 맞이할 준비를 해주세요.</span>
      </div>

      <progress value="66.4" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">
                <ul>
                  <li>최대 예약 가능 인원을 적어주세요.</li>
                  <input class="input_people" type="number" name="" value="">&nbsp명
                  </br></br></br>

                  <li>사용자가 예약할 수 있는 최대 개월 수를 설정해주세요.</li>
                    <input type="radio" name="" value="">
                    <span class="span_content_font">1개월</span>&nbsp&nbsp
                    <input type="radio" name="" value="">
                    <span class="span_content_font">2개월</span>&nbsp&nbsp
                    <input type="radio" name="" value="">
                    <span class="span_content_font">3개월</span>
                  </br></br></br>

                  <li>예약 규정 강도를 설정해주세요</li>
                  <input type="radio" name="" value="">
                  <span class="span_content_font">상</span>&nbsp&nbsp
                  <input type="radio" name="" value="">
                  <span class="span_content_font">중</span>&nbsp&nbsp
                  <input type="radio" name="" value="">
                  <span class="span_content_font">하</span></br>
                  <div class="div_strength">
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp상 : 사용자가 방문하기 1주전에 취소시 전액 환불 가능합니다.</span></br>
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp중 : 사용자가 방문하기 4일전에 취소 시 50% 환불 가능합니다.</span></br>
                    <span class="span_strength">&nbsp&nbsp&nbsp&nbsp하 : 사용자가 방문하기 4일전에 취소 시 50% 환불 가능합니다.</span></br>
                  </div>
                  </br></br></br></br>

                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_fifth.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_third.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
