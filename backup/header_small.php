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
<div id="search_header">
    <div id="search_profile">
        <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
    </div>

    <div id="search_top">
        <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/restaurant.png"></a>
        <ul>
            <li><a href="#">저장목록</a></li>
            <li><a href="#">일정</a></li>
            <li><a href="#">메세지</a></li>
            <li><a href="#">도움말</a></li>
        </ul>
    </div>

    <input id="search_input" type="text" placeholder=" &nbsp&nbsp검색어를 입력해주세요.">
    <button id="search_result">검색</button>

</div>