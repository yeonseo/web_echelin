<?php

session_start(); // 일반인, 회원가입자, 관리자 구분
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
?>


<div class="search_header">

  <div class="search_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
  </div>

  <div class="search_top">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/restaurant.png"></a>

    <ul class="header_main_menu">
      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/index_search.php">검색</a></li>

      <!-- 로그인 성공시 나타나야할 메뉴 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">저장목록</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">일정</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">메세지</a></li>

      <!-- 로그인 전 나타나야할 메뉴 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_login_select.php">로그인</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_join_main.php">회원가입</a></li>

      <!-- 각각 보여질 부분 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_myinfo_index.php">유저</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_sellerinfo_index.php">셀러</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php">관리자</a></li>

      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/help_center_main.php">도움말</a></li>
    </ul>

  </div>
  <form class="" action="index_search.php" method="post">
    <input class="search_input" type="text" placeholder=" 식당이름을 검색해 주세요." name="r_name">
    <button class="search_result_btn">검색</button>
    <button type="button" name="button" class="search_result_btn" id="keyword_btn">&nbsp키워드 ▼</button>
  </form>

</div>