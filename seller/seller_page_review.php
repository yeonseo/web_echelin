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

    function test(){

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

            <div class="my_info_profile">
                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
            </div>

            <!-- 순서대로쭉쭉 -->
            <ul>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php">셀러 정보변경(업뎃예정)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">ex가게 등록/변경하기(참고용)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/??.php">매출보기</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">예약관리페이지</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">메세지</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_review.php">고객이 남긴 후기</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">문의게시판(관리자랑)</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">리스트를 넣어요~</a> </li>
                <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">리스트를 넣어요~</a> </li>
            </ul>
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
