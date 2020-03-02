<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_mypage_review.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script type="text/javascript">
    function test() {

      var html = "<div class='content_yes'>";

      html += "<div class='yes_top'>";

      html += "<div class='comment_profile_img'>";
      html += "<a href='#'><img src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg'></a>"
      html += "</div>";

      html += "<span><a href='#'>유저 이름</a> &nbsp·&nbsp 등록 시간</span>";
      html += "<div class='div_chu'>";
      html += "<div id='like_count'><img src='./image/like.png'> &nbsp;0</div>";
      html += "<div id='dislike_count'><img src='./image/dislike.png'> &nbsp;0</div>";
      html += "</div>";

      html += "</div>";

      html += "<div class='yes_main'>";
      html += "후기 내용 공간";
      html += "</div>";

      html += "</div>";

      $(".content_main .content_no").remove();
      $(".content_main").append(html);

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
        <!-- 사이드 메뉴 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
      </div>

      <div class="right_content">

        <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 고객이 남긴 후기</span><br><br>
            <span class="comment_title_main">우리 가게 후기</span>
          </div>

          <div class="tab_container">
            <div class="tab_content">

              <ul>
                <li>

                  <div class="tab_content_first">
                    <div class="content_title"><span>내가 받은 후기</span></div>

                    <div class="content_main">
                      <div class="content_no">
                        <span class="no_span">받은 후기가 없어요.</span>
                      </div>

                    </div>
                  </div>
                </li>

              </ul>

            </div>
            <!-- #tab1 -->

          </div>
          <!-- .tab_container -->

          <button type="button" name="button" onclick="test()">테스트</button>
        </div>
        <!-- container -->

      </div><!-- right_content -->

    </div>

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>