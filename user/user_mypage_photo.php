<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_update_photo.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="file" action="#" method="post" enctype="multipart/form-data">
    <div class="photo_border">
    <div class="photo_form">
        <span class="photo_profile">프로필 사진</span>
    </div>
    <div class="photo_form2">
        <div>
        <img src="http://localhost/echelin/user/image/user.PNG" alt="">
        <span class="photo_text">얼굴이 나온 프로필 사진을 통해서 다른 호스트와 게스트에게 나를 알릴 수<br>
        있습니다. 모든 Echelin 호스트는 프로필 사진이 있어야 합니다.<br>
        Echelin은 게스트에게 프로필 사진을 요청하지 않지만 호스트는 요청할 수 <br>
        있습니다. 호스트가 게스트에게 사진을 요청하는 경우에도 예약이 확정된<br>
        후에만 사진을 볼수 있습니다.</span>
        <div class="filebox">
            <input type="file" id="text_change">
            <label for="text_change">파일 업로드 하기</label>
        </div>
        </div>
    </div>
    
    </div>
    </form>
</body>
</html>