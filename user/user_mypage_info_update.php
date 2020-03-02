<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
        <title>
            <?= COMMON::$title; ?>
        </title>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- CSS, JS 파일 링크 시, -->
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_modify.css">
        <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/js/user_modify.js"></script>
        <!-- 공통으로 사용하는 link & script -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

        <?php

        if (isset($_SESSION["user_aboutme"])) $userabout = $_SESSION["user_aboutme"];
        else $userabout = ""; 

        if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
        else $username = "";
        
        if (isset($_SESSION["user_password"])) $userpass = $_SESSION["user_password"];
        else $userpass = "";

        if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
        else $useremail = ""; 

        if (isset($_SESSION["user_phone"])) $useremail = $_SESSION["user_phone"];
        else $userphone = ""; 

        if (isset($_SESSION["user_age"])) $useremail = $_SESSION["user_age"];
        else $userage = ""; 
        






        ?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
        </header>
        <section>
            <div class="my_info_content">
                <div
                    class="left_menu">
                    <!-- 사이드 메뉴 -->
                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
                </div>
                <?php
                    $con = mysqli_connect("localhost","root","123456","echelin");
                    $sql = "select * from echelin_user where `user_Email`='$useremail'";
                    
                    $result = $con->query($sql);
                    if ($result === FALSE) {
                        die('DB bookmark_num Connect Error: ' . mysqli_error($con));
                    }
                    $user_all_info =  mysqli_fetch_array($result);
                    
                    $username= $user_all_info["user_name"];
                    $userpass= $user_all_info["user_password"];
                    $useremail=$user_all_info["user_Email"];
                    $userphone=$user_all_info["user_phone"];
                    $userabout=$user_all_info["user_aboutme"];
                    $userage=$user_all_info["user_age"];

                    mysqli_close($con);
                    
                ?>
                <!-- // form 전송 방식 시작 -->
                <form name="user_modify" action="user_modify.php" method="post">
                    <div class="right_content">
                        <div class="about_me">
                            안녕하세요 저는
                            <?=$username?>
                            입니다.
                            <div class="modify_form">
                                <div style="margin-top:5px;">
                                    <img class="user_photo" src="http://localhost/echelin/user/image/user.PNG" width="" alt="">
                                    <div class="modify_user">
                                        <a class="photo_update" href="#">사진 업데이트 하기</a>
                                    </div>
                                </div>
                                <div class="user_in">
                                <legend class="legend_about">소개</legend>
                                        <fieldset style="border: none">
                                        <textarea class="my_about" readonly name="user_aboutme" id="myText" rows="5" COLS="32"  ><?=$userabout?> </textarea>
                                        </fieldset>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- end of modify_form -->
                            <div class="about_me2">
                                <div style="width: 82%;
                                                                        display: inline-block;
                                                                        float: left;
                                                                        border-top: 1px solid lightgray;">
                                    &nbsp; 회원가입:<?=$Regist = date("Y")?>
                                    <button type="button" id="profile_hide" class="button_background">프로필 수정하기</button>
                                </div>
                                <div class="about_me3">
                                    <div>
                                        <legend class="legend_text">자기소개</legend>
                                        <fieldset style="border: none">
                                        <textarea class="about_font" name="user_aboutme" id="myText" rows="6" COLS="60"  ><?=$userabout?> </textarea>
                                        <button class="about_button"  type="submit" id="myButton">작성</button>
                                        </fieldset>

                                    </div>
                                    <legend class="legend_text">실명</legend>
                                    <span class="text_move">
                                        <?=$username?></span>
                                    <button id="name_input" type="button" class="update_button">수정하기</button>
                                    <br>
                                    <div class="input_save_form">
                                        <input style="display:none" type="text" class="view_name" name="user_name" value="<?=$username?>">
                                        <button type="submit" style="display:none" class="hide_save_button">저장</button>
                                    </div>


                                    <legend class="legend_text">비밀번호</legend>
                                    <span class="text_move">
                                        <?=$userpass?></span>
                                    <button id="name_input" type="button" class="update_button_2">수정하기</button>
                                    <br>
                                    <div class="input_save_pass_form">
                                        <input style="display:none" type="text" class="view_pass" name="user_password" value="<?=$userpass?>">
                                        <button type="submit" style="display:none" class="hide_save_button_pass">저장</button>
                                    </div>

                                        <!-- // 이메일 hidden 값 으로 받아오기 -->
                                        <input style="display:none" type="hidden" class="view_pass" name="user_Email" value="<?=$useremail?>">
                                              <fieldset style="border: none"></fieldset>
                                        <!-- // hidden -->

                                    <legend class="legend_text">연락처</legend>
                                    <span class="text_move">
                                        <?=$userphone?></span>
                                    <button type="button" class="update_button_3">수정하기</button>
                                    <br>
                                    <div class="input_save_phone_form">
                                        <input style="display:none" type="text" class="view_phone" name="user_phone" value="<?=$userphone?>">
                                        <button type="submit" style="display:none" class="hide_save_button_phone">저장</button>
                                    </div>



                                    <fieldset style="border: none"></fieldset>
                                    <legend class="legend_text">생년월일</legend>
                                    <span class="text_move">
                                        <?=$username?></span>




                                    <button type="button" class="update_button">수정하기</button>
                                  
                                    <fieldset style="border: none"></fieldset>
                                    <legend class="legend_text">거주지</legend>
                                    <span class="text_move">
                                        <?=$username?></span>
                                        
                                    <button type="button" class="update_button">수정하기</button>
                                    <fieldset style="border: none"></fieldset>
                                </div>
                                <div style="width: 82%;
                                                                        display: inline-block;
                                                                        float: left;
                                                                        border-top: 1px solid lightgray;">
                                    <a class="my_hugi" href="#">내가 작성한 후기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of right_content -->
                </form>
            </section>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
            </footer>
        </body>
    </body>
</html>