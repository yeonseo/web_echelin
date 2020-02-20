<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/sing.css">
    <link rel="stylesheet" href="./css/main_test.css?ver=3">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="256794684325-94jg640b735e9ddrbqooeg7k5ojfbok4.apps.googleusercontent.com">
    <script>
        function onSignIn(googleUser){
            var profile = googleUser.getBasicProfile();
            console.log('아이디' + profile.getId());
            console.log(' 이름' + profile.getName());
            console.log(' 이미지 경로:'+ profile.getImageUrl());
            console.log(' 이메일'+ profile.getEmail());
             
        }
        // document.singup.submit();
        
        function signOut(){
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function (){
                console.log("User signed out");
            });
            auth2.disconnect();
        }
       
    </script>
    <title>Document</title>
</head>
<body>

<div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();" >로그아웃</a>
    
</body>
</html>