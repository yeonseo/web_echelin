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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">

      function test(){

          var html = "<div class='show_element'>";

                html += "<img src='./image/best_1.jpg'>";
                  html += "<div class='element_main'>";
                    html += "<span class='span_first'>가게 이름 ::: 맛나곱창</span>";
                    html += "<span class='span_second'>가게 소개 ::: 왕십리 곱창 최고의 맛집</span>";
                    html += "<span class='span_third'>가게 주소 ::: 서울특별시 성동구 홍익동 130-1</span>";
                  html += "</div>";

                  html += "<div class='show_btn_div'>";
                    html += "<span>예약 현황 상태 ···</span>";
                    html += "<button class='btn_reserv'>예약 정보</button>";
                    html += "<button class='btn_review' onclick='location.href='#''>후기 남기기</button>";
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

            <div class="my_info_profile">
                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
            </div>

            <!-- 순서대로쭉쭉 -->
            <ul>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">유저 정보변경(업뎃예정)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_reserv.php">예약내역 보기</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">메세지</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">찜목록</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_review.php">내가 남긴 후기</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/??.php">문의게시판(관리자랑)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_review_input.php">후기 등록창 (임시)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">더 필요한 리스트를 넣어요~</a> </li>
            </ul>
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

                <div class="show_no">
                  <span class="no_span">다녀오거나 예약한 가게가 없어요.</span>
                </div>

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

    </section>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>

  </body>
</html>
