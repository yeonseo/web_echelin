<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

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


    <div class="user_singup_form">
    <div style="margin-top: 0px">
    
    <div class="singup_border">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_login_form.php"; ?>

        <div style="margin-top:70%; margin-bottom:10%">
        <div>
         <div>
             <div class="form_center">
                 <div class="form_font">
                   
                 </div>
             </div>
         </div>   
        </div>
        <div style="margin-top: 16px; margin-bottom: 16px;">

        <div class="before_O">
            <span class="before_T">
                
                <span class="singup_form3">또는</span>
            </span> 


            
        </div>
        <!-- onsubmit="return check()" -->
    <form name="myForm" action="user_join_insert.php" method="post" >
        <div style="margin-bottom:5px">
              <div class="input_form">
                  <div class="input_form2">

                  <!-- // 이메일 설정하기 -->
                  <input  class="_14fdu48d" id="signup_email" name="user_Email" placeholder="이메일 주소" type="text" value="" style="text-align: center" onkeyup="signup_check('signup_email')" > 
                  <input id="input_form25" type="hidden" name="user_sns"> 
                  <span id="email_text"></span>

                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;">
                  <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd"></path></svg>




                  <!-- // 비밀번호 설정하기 -->
                  <input  class="_14fdu48d" id="user" name="user_pass" placeholder="비밀번호" type="password" value="" style="text-align: center;" onkeyup="signup_check('user_pass')">
                  <span id="user_password"></span>
                  <svg viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;"> 
                  <path d="m21.53 18.07c.15.22.46.28.69.13a.47.47 0 0 0 .14-.66l-1.32-1.9c1.86-1.33 2.97-3.11 2.97-5.17a.49.49 0 0 0 -.5-.48.49.49 0 0 0 -.5.48c0 3.82-4.73 6.7-11 6.7s-11-2.87-11-6.7a.49.49 0 0 0 -.5-.48.49.49 0 0 0 -.5.48c0 2.05 1.11 3.84 2.97 5.17l-1.32 1.9a.47.47 0 0 0 .14.66c.23.15.54.09.69-.13l1.32-1.9c.94.55 2.03.99 3.23 1.32a.29.29 0 0 0 -.01.04l-.58 2.23a.48.48 0 0 0 .36.58.5.5 0 0 0 .61-.35l.58-2.23.01-.04c1.1.23 2.28.37 3.51.4v2.4a.49.49 0 0 0 .5.48.49.49 0 0 0 .5-.48v-2.4a19.39 19.39 0 0 0 3.51-.4l.01.04.58 2.23a.5.5 0 0 0 .61.35.48.48 0 0 0 .36-.58l-.58-2.23-.01-.04c1.2-.33 2.29-.77 3.23-1.32z" fill-rule="evenodd"></path></svg>
                    </div>
              </div>  
            </div>
    <
    
</body>
</html>