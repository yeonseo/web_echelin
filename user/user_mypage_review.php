<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_review.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script type="text/javascript">
    function test() {

      var html = "<div class='content_yes'>";

      html += "<div class='yes_top'>";
      html += "<span><a href='#'>식당 링크</a> &nbsp·&nbsp 등록 시간</span>";
      html += "<div><button class='btn_init'>수정</button> <button class='btn_delete'>삭제</button></div>";
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
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
      </div>

      <div class="right_content">

        <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 내가 남긴 후기</span><br><br>
            <span class="comment_title_main">나의 작성 후기</span>
          </div>

          <div class="tab_container">
            <div class="tab_content">

              <ul>
                <li>

                  <div class="tab_content_first">
                    <div class="content_title"><span>작성해야 할 후기</span></div>

                    <div class="content_main">
                      <div class="content_no">
                        <span class="no_span">작성할 후기가 없어요.</span>
                      </div>

                    </div>
                  </div>
                </li>

                <li>

                  <div class="tab_content_first">
                    <div class="content_title"><span>작성 한 후기</span></div>

                    <div class="content_main">
                      <div class="content_no">
                        <span class="no_span">작성된 후기가 없어요.</span>
                      </div>

                    </div>
                  </div>

                </li>

              </ul>

            </div>
            <!-- .tab_content -->

          </div>
          <!-- .tab_container -->

          <button type="button" name="button" onclick="test()">테스트</button>
        </div>
        <!-- #container -->
      </div>
    </div>

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>