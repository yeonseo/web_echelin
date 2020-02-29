<?     //만약 라지 헤더에서 세션이 있다면 중복을 막음
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

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/js/user_join_signup.js"></script>
    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_modify.css">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>        
</header>




<div class="modify_form">
  <div style="margin-top:5px;">
  <img class="user_photo" src="http://localhost/echelin/user/image/user.PNG" width="" alt="">
        <div class="modify_user">
         <a class="photo_update" href="#">사진 업데이트 하기</a>
        </div>
      </div>
      <?
      
      ?>
      <div  class="user_in" style="">
      <span class="text_number"><?$username?></span><br>
      <div  class="modify_form_2" style="margin-top: 15px;">
      <span class="data_email">주소(email)</span><br>
      <span class="data_number">전화번호(DB)</span>
      </div>
      </div>
    </div>
    <div>
    </div> 
    <!-- end of modify_form -->




    <div class="about_me">
      안녕하세요 저는 ??? 입니다.
      <div class="about_me2">
     &nbsp; 회원가입:$registerday
     <button class="button_background">프로필 수정하기</button> <br>
     <a  class="my_hugi" href="#">내가 작성한 후기</a>
     </div>
    </div>


    <div>
      <div>

      </div>
    </div>

    