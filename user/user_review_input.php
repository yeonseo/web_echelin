<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_review_input.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

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
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 후기 등록</span><br><br>
            <span class="comment_title_main">후기를 등록해주세요.</span>
          </div>

          <div class="comment_user_form">

            <div class="comment_profile_img">
              <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
            </div>

            <div class="comment_user_name">
              <span>이무권 ( mu3386 ) · 등록 시간</span>
            </div>

            <div class="seller_res_name">
              <a href="#">#식당 명</a>
            </div>

            <div class="border_line1"></div>

            <textarea class="textarea_form" rows="8" cols="80" placeholder=" 내용"></textarea>

            <div class="border_line2"></div>

            <div class="comment_star_rating">

              <ul>
                <li>접근성 &nbsp&nbsp <span>★★★★☆</span></li>
                <li>서비스 &nbsp&nbsp <span>★★★☆☆</span></li>
                <li>맛평가 &nbsp&nbsp <span>★★★★★</span></li>
              </ul>

            </div>

            <div class="border_line3"></div>

            <div class="comment_div_tag">

              <a href="#"><span>#맛집태그</span></a>&nbsp
              <a href="#"><span>#해시태그</span></a><br>
              <a href="#"><span>#추천맛집</span></a>

            </div>



            <div class="comment_div_button">

              <button>완료</button>
              <button>목록</button>

            </div>

          </div>
        </div><!-- container -->
      </div><!-- right_content -->
    </div><!-- my_info_content -->

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>
