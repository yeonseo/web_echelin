<?php
//만약 라지 헤더에서 세션이 있다면 중복을 막음
if (!isset($_SESSION["userid"])) session_start();

// 일반인, 회원가입자, 관리자 구분
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";

if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
else $useremail = "";

if (isset($_SESSION["user_level"])) $userlevel = $_SESSION["user_level"];
else $userlevel = "";

if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
else $username = "";

if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";


?>


<div class="search_header">

  <div class="search_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="https://ca-times.brightspotcdn.com/dims4/default/444499c/2147483647/strip/true/crop/3000x2000+0+0/resize/840x560!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F7d%2F24%2F0d9fed4c40c285ffca41843ae569%2Fdecadefood.jpg"></a>
  </div>

  <div class="search_top">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/../echelin/common/image/echelin_logo_main_example.png"></a>

    <ul class="header_main_menu">

      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/index_search.php">검색</a></li>
      <?
      if (!$useremail) {
      ?>
        <!-- 로그인 전 나타나야할 메뉴 -->
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_login_select.php">로그인</a></li>
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_join_main.php">회원가입</a></li>
      <?
      } else {

        $log = $useremail . "/" . $username . "님";
      ?>
        <li class="<?= COMMON::$css_header_menu; ?>"> <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_logout.php"><?= $log ?></a></li>
        <li class="<?= COMMON::$css_header_menu; ?>"> <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_logout.php">로그아웃</a></li>


        <!-- 로그인 성공시 나타나야할 메뉴 -->
        <!-- <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">저장목록</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">일정</a></li>
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">메세지</a></li> -->
        <!-- 각각 보여질 부분 -->
        <!-- <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php">관리자</a></li> -->
      <?
      }
      ?>

      <!-- 판매자 / 관리자 인 경우 보이는 화면 -->
      <?
      if ($userlevel == 10) {
      ?>
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_sellerinfo_index.php">상점관리</a></li>
      <?
      }
      ?>

      <?
      if ($userlevel == 100) {
      ?>
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php">관리하기</a></li>
      <?
      }
      ?>
      <!-- 끝 -->



      <!-- 공통 -->
      <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/help_center_main.php">도움말</a></li>
    </ul>

  </div>
  <form class="" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/index_search.php" method="post">
    <input class="search_input" type="text" placeholder=" 식당이름을 검색해 주세요." name="r_name">
    <button class="search_result_btn" id="search">검색</button>
  </form>

</div>
