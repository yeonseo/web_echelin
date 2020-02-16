<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../common/css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=3">
  </head>
  <body class="body_margin">
    <section>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">3단계 : 손님을 맞이할 준비를 해주세요.</span>
      </div>

      <progress value="100" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">

          <div class="div_form">
            <form class="" name="" action="" method="post">
              <ul>
                <li>최대 예약 가능 인원을 적어주세요.</li>
                <input  class="input_info" type="text" name="" value="">
                </br></br>

                <li>예약 가능한 시간을 설정해주세요.</li>
                <input type="time" name="" value="">&nbsp-
                <input type="time" name="" value="">
                </br></br>

                <li>예약 가능한 기간을 설정해주세요.</li>
                <input type="date" name="" value="">&nbsp-
                <input type="date" name="" value="">
                </br></br>
              </ul>
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_complete.php'">다음</button>
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_two.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
    </div> <!--div_register_shape-->
    </section>
  </body>
</html>
