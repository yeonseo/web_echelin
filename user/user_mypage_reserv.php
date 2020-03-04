
<?php
  // session_start();
  if (isset($_SESSION["user_Email"])){
     $user_email = $_SESSION["user_Email"];
  }
  else {
    // $user_email = "libero@natoquepenatibuset.co.uk";
    $user_email = "k@naver.com";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/echelin/reservation/reserved_db.php";
    ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">

      function test(){

          var html = "<div class='show_element'>";

                html += "<img src='../seller/storeImg/best_1.jpg'>";
                  html += "<div class='element_main'>";
                    html += "<span class='span_first'>가게 이름 ::: 맛나곱창</span>";
                    html += "<span class='span_second'>가게 소개 ::: 왕십리 곱창 최고의 맛집</span>";
                    html += "<span class='span_third'>가게 주소 ::: 서울특별시 성동구 홍익동 130-1</span>";
                  html += "</div>";

                  html += "<div class='show_btn_div'>";
                    html += "<span>예약 현황 상태 ···</span>";
                    html += "<label class='btn' for='open-pop'>상세 확인</label>";
                    html += "<label class='btn' for='open-cancel'>예약 취소</label>";

                  html += "</div>";

            html += "</div>";

          $(".show_basic .show_no").remove();
          $(".show_basic").append(html);

        }

    </script>

  </head>
  <body>

    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <section>

      <div class="my_info_content">

        <div class="left_menu">

            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
        </div>

        <div class="right_content">

          <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 예약 내역</span><br><br>
            <span class="comment_title_main">내 예약 현황</span>
          </div>

          <div class="div_section">

            <button type="button" class="test_btn" onclick="test()">테스트</button>

            <div class="show_main">

              <div class="show_basic">




                <?php
                  if ($rowcnt==0) {
                    ?>
                      <div class="show_no">
                        <span class="no_span">다녀오거나 예약한 가게가 없어요.</span>
                      </div>
                    <?php
                  }else{
                    for($i = 0 ; $i < $cnt ; $i++ ){
                      echo "<div class='show_element'>";

                            echo "<img src='../seller/storeImg/".$store_file_copied[$i]."'>";
                              echo "<div class='element_main'>";
                                echo "<span class='span_first'>가게 이름 ::: ".$store_name[$i]."</span>";
                                echo "<span class='span_second'>가게 소개 ::: ".$introduction[$i]."</span>";
                                echo "<span class='span_third'>예약 날짜 ::: ".$select_date[$i]."</span>";
                              echo "</div>";

                              echo "<div class='show_btn_div'>";
                                echo "<span>예약 현황 상태 ···</span>";
                                echo "<label class='btn' for='open-pop'>상세 확인</label>";
                                echo "<label class='btn' for='open-cancel'>예약 취소</label>";

                              echo "</div>";

                        echo "</div>";
                    }
                  }

                 ?>



              </div>
            </div>

             <!--<div class="show_element">
              <img src="./img/best_1.jpg">

              <div class="element_main">
                <span class="span_first">가게 이름 ::: 맛나곱창</span>
                <span class="span_second">가게 소개 ::: 왕십리 곱창 최고의 맛집</span>
                <span class="span_third">가게 주소 ::: 서울특별시 성동구 홍익동 130-1</span>
              </div>

              <div class="show_btn_div">
                <span>예약 현황란 ···</span>
                <button class='btn_reserv'>예약 정보</button>
                <button class='btn_review'>후기 남기기</button>
              </div>

            </div>-->


            </div> <!-- div_section -->
          </div><!-- container -->
        </div><!-- right_content -->
      </div><!-- my_info_content -->

      <!-- 예약 상세 팝업 -->

      <input class="modal-state" id="open-pop" type="checkbox" />
      <div class="modal">
        <label class="modal_bg" for="open-pop"></label>
        <div class="modal_inner">
          <label class="modal_close" for="open-pop"></label>
          <h2>popup 제목</h2>
          <p>내용</p>
        </div>
      </div>
      <!-- 예약 상세 팝업 -->

      <!-- 예약 취소 팝업 -->

      <input class="modal-state" id="open-cancel" type="checkbox" />
      <div class="modal">
        <label class="modal_bg" for="open-cancel"></label>
        <div class="modal_inner">
          <label class="modal_close" for="open-cancel"></label>
          <h2>취소 하시겠습니까?</h2>
          <p>내용</p>
        </div>
      </div>
      <!-- 예약 상세 팝업 -->

      <?php
      for ($i=0;$i<$cnt;$i++)
      {

         echo "reservation_num = ".$reservation_num[$i]."<br>";
         echo "seller_num = ".$seller_num[$i]."<br>";
         echo "store_name = ".$store_name[$i]."<br>";
         echo "introduction = ".$introduction[$i]."<br>";
         echo "seller_id = ".$seller_id[$i]."<br>";
         echo "select_date = ".$select_date[$i]."<br>";
         echo "select_time = ".$select_time[$i]."<br>";
         echo "select_person = ".$select_person[$i]."<br>";
         echo "select_menu = ".$select_menu[$i]."<br>";
         echo "reservation_special = ".$reservation_special[$i]."<br>";
         echo "intensity_of_reserv = ".$intensity_of_reserv[$i]."<br>";
         echo "noshow = ".$noshow[$i]."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
      }

       ?>
    </section>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>

  </body>
</html>
