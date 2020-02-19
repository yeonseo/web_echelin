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
        <span class="span_step_info">5단계 : 우리 식당을 해쉬태그로 표현해주세요.</span>
      </div>

      <progress value="83" max="100"></progress>

      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">

                <span class="span_hashtag">#</span>
                <span class="span_hashtag_intro">우리 식당 해쉬태그를 만들어보아요</span>
                <input id="write_hashtag" class="input_hashtag" type="text" name="name" placeholder="#맛집 #분위기좋은 ">&nbsp&nbsp
                <button id="button_hashtag_add" class="button_circle_add" type="button">+</button>
                <!-- <input type="submit" value="추가하기"> -->
                <h3 id="hashtag_output"></h3>

              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_complete.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_fourth.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
    </section>


  </body>
</html>
