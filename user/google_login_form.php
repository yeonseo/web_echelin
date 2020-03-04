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
        function onSignIn(googleUser) {
            var sns = "Google";
            var profile = googleUser.getBasicProfile();
            console.log('아이디' + profile.getId());
            console.log(' 이름' + profile.getName());
            console.log(' 이미지 경로:' + profile.getImageUrl());
            console.log(' 이메일' + profile.getEmail());

            document.getElementsByName('g-signin2').innerHTML =
                $(document).ready(function() {
                    $('#google_user_sns').val(sns);
                    $('#google_user_email').val(profile.getEmail());
                    $('#google_user_name').val(profile.getName());
                });

        }
        // document.singup.submit();

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {
                console.log("User signed out");
            });
            auth2.disconnect();
        }
    </script>
    <title>Document</title>
</head>

<body>

    <div id="google_login_btn">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </div>

    <a href="#" onclick="signOut();">로그아웃</a>

    <form name="google_form" action="user_join_insert.php" method="post">
        <input id="google_user_sns" type="hidden" name="user_sns">
        <input id="google_user_email" type="hidden" name="user_Email">
        <input id="google_user_name" type="hidden" name="user_name">
    </form>

</body>

</html>