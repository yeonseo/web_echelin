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
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_register_step.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_login_form.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_login.css">

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

    <title>Document</title>
</head>
<body>
    
   
<header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
</header>
    
    <!-- <section>
      
    </section> -->


    <div class="user_login_form">
    <div style="margin-top: 0px">
    
    <div class="login_border">
        <div class="login_bottom_border">
        <div class="sns_login_select">
                      <?php include "FB.php"; ?>
                      <?php include "naver_login.php"; ?>
                      <?php include "kakao.php"; ?>
                      <?php include "google_login.php"; ?>       
        </div>
 
        </div>

    
        <div style="margin-top:0%; margin-bottom:5%">
        <div>
         <div>
             <div class="form_center">
                 <div class="form_font">
                   
                 </div>
             </div>
         </div>   
        </div>
        <div style="margin-top: -5%; margin-bottom: 16px;">

        <div class="before_O">
            <span class="before_T">
                
                <span class="login_form3">또는</span>
            </span> 


            
        </div>
        <!-- onsubmit="return check()" -->
    <form name="myForm" action="user_login_check.php" method="post" >
        <div style="margin-bottom:5px">
              <div class="input_form">
                  <div class="input_form2">

                  <!-- // 이메일 설정하기 -->
                  <input  class="_14fdu48d" id="signup_email" name="user_Email" placeholder="이메일 주소" type="text" value="" style="text-align: center" onkeyup="signup_check('signup_email')" > 
                  <input id="input_form25" type="hidden" name="user_sns" > 
                  <span id="email_text"></span>

                  <!-- // 비밀번호 설정하기 -->
                  <input  class="_14fdu48d" id="user" name="user_pass" placeholder="비밀번호" type="password" value="" style="text-align: center;" onkeyup="signup_check('user_pass')">
                  <span id="user_password"></span>
                    </div>
                    <button id="t" type="submit" class="login_data_button" onclick="signup_check();">
                <span>로그인</span>
            </button>
            <div style="margin-top:16px; margin-bottom:16px">
                    <div class="login_echelin_bottom_form">
                      이미 echelin 계정이 있으신가요?
                      <a href="user_login_select.php" class="login_location_login" aria-busy="false">&nbsp;&nbsp; 로그인</a>
                    </div>
              </div>  
            </div>
    
</body>
</html>