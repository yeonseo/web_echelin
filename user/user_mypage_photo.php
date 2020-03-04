
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_update_photo.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(function(){
                    $(".imgView").on('change', function(){
                        readURL(this);
                    });
                });

                function readURL(input) {
                    if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                            $('#View').attr('src', e.target.result);
                        }

                    reader.readAsDataURL(input.files[0]);
                    }
                }
    </script>

        <?php
        session_start();
        if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
        else $useremail = ""; 
       

          $con = mysqli_connect("localhost","root","123456","echelin");
          $sql = "select * from echelin_user where `user_Email`='$useremail'";
          
          $result = $con->query($sql);
          if ($result === FALSE) {
              die('DB bookmark_num Connect Error: ' . mysqli_error($con));
          }
          $user_all_info =  mysqli_fetch_array($result);
          
          $useremail=$user_all_info["user_Email"];
          
          $profile=$user_all_info["user_profile"];

          $uploaded_file=$user_all_info["user_profile_type"];

          $profile_copied= $user_all_info["user_profile_copied"];
          mysqli_close($con);
        
        ?>
    <form id="file" action="user_mypage_photo_update.php" method="post" enctype="multipart/form-data">
    <div class="photo_border">
    <div class="photo_form">
        <span class="photo_profile">프로필 사진 </span>
    </div>
    <div class="photo_form2">
        <div class="photo_form3">
        <img id="View"    src="<?=$uploaded_file?>" alt="">
        
        </div>
         <!-- // 이메일 hidden 값 으로 받아오기 -->
       
        
        </div>
        <span class="photo_text">얼굴이 나온 프로필 사진을 통해서 다른 호스트와 게스트에게 나를 알릴 수<br>
        있습니다. 모든 Echelin 호스트는 프로필 사진이 있어야 합니다.<br>
        Echelin은 게스트에게 프로필 사진을 요청하지 않지만 호스트는 요청할 수 <br>
        있습니다. 호스트가 게스트에게 사진을 요청하는 경우에도 예약이 확정된<br>
        후에만 사진을 볼수 있습니다.</span>
       
    </div>
    <div class="filebox">
            <input type="file" id="text_change" class="imgView" name="upload">
            <label for="text_change">파일 업로드 하기</label>
            <input id="text_change" class="flie_upload_input" type="submit" value="확인">
        </div>

        <input type="hidden" class="view_pass" name="user_Email" value="<?=$useremail?>">
                                              <fieldset style="border: none"></fieldset>
    </form>
