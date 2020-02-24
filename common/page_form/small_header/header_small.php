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
            <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">로그인</a></li>
            <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">회원가입</a></li>

            <!-- 공통 -->
            <li class="<?= COMMON::$css_header_menu; ?>"><a href="#">도움말</a></li>
        </ul>

    </div>
    <form class="" action="index_search.php" method="post">
      <input class="search_input" type="text" placeholder=" &nbsp&nbsp검색어를 입력해주세요.">
      <button class="search_result_btn">검색</button>
      <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/js/header.js"></script>
      <button type="button" name="button" class="search_result_btn" id="keyword_btn">&nbsp키워드 ▼</button>
   </form>

</div>
<div id="keyword_header" style=" display:none; position:relative;">
  <ul class="keywords">
    <li id="keyword1" onclick="selectKeyword('keyword1');">#조용한</li>
    <li id="keyword2">#편안한</li>
    <li id="keyword3">#시끌벅적한</li>
    <li id="keyword4">#푸짐한</li>
    <li id="keyword5">#케쥬얼한</li>
    <li id="keyword6">#아이와함께</li>
    <li id="keyword7">#모임하기좋은</li>
    <li id="keyword8">#특별한날</li>
    <li id="keyword9">#코스요리</li>
    <li id="keyword10">#프로포즈</li>
    <li id="keyword11">#데이트</li>
    <li id="keyword12">#백종원의3대천왕</li>
    <li id="keyword13">#생활의달인</li>
    <li id="keyword14">#혼밥</li>
    <li id="keyword15">#수요미식회</li>
  </ul>
</div>
