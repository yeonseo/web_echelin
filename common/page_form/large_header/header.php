<?php
if (!isset($_SESSION["userid"])) session_start();

// 일반인, 회원가입자, 관리자 구분
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";

if (isset($_SESSION["user_email"])) $useremail = $_SESSION["user_email"];
else $useremail = "";

if (isset($_SESSION["user_level"])) $userlevel = $_SESSION["user_level"];
else $userlevel = "";

if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
else $username = "";

if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";

?>

<div class="main_header">
  <div class="back_cover">
    <div class="main_head_top">
      <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php"><img src="./common/image/restaurant.png"></a>
      <ul class="header_main_menu">


        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/index_search.php">검색</a></li>
        <?
        if (!$useremail) {
        ?>
          <!-- 로그인 전 나타나야할 메뉴 -->
          <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_login_select.php">로그인</a></li>
          <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_join_main.php">회원가입</a></li>
        <?
        } else {
          // 로그인한 유저의 이름 표시 및 로그아웃 표시
          $log = $useremail . "/" . $username . "님";
        ?>
          <li class="<?= COMMON::$css_header_menu; ?>"> <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_myinfo_index.php"><?= $log ?></a></li>
          <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_logout.php">로그아웃</a></li>
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
        <li class="<?= COMMON::$css_header_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/help_center/help_center_main.php">도움말</a></li>


      </ul>
    </div>

    <div class="main_header_centers">
      <a href="#">
        <div id="center_first"></div>
      </a>
      <a href="#">
        <div id="center_second"></div>
      </a>
      <a href="#">
        <div id="center_third"></div>
      </a>
    </div>

  </div>
  <!--end ::: back_top_cover -->



</div>
<!--end ::: header_main -->