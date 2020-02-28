<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/js/user_join_signup.js"></script>
    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_modify.css">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
    <title>Document</title>
</head>


<body>
<header>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>        
</header>

<div class="modify_form">
  <div style="margin-top:5px;">
  <img class="user_photo" src="http://localhost/echelin/user/image/user.PNG" width="" alt="">
        <div class="modify_user">
          사진 업데이트 하기
        </div>
      </div>

      <div  class="user_in" style="">
      <span class="text_number">성민님의 인증 내역</span><br>
      <div  class="modify_form_2" style="margin-top: 15px;">
      <span class="data_email">이메일 주소(DB)</span><br>
      <span class="data_number">전화번호(DB)</span>
      </div>
      </div>
    </div>
    
    <div>
    </div> 
    <!-- end of modify_form -->

    <div class="about_me">
      안녕하세요 저는 $sung 입니다.
      <div class="about_me2">
     &nbsp; 회원가입:$registerday
     <button class="button_background">프로필 수정하기</button>
     </div>
    </div>
  

    <div>
      <div>

      </div>
    </div>

    


</body>
</html>