<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sing.css">
    <link rel="stylesheet" href="./css/main_test.css?ver=3">
    <script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.0.js" charset="utf-8"></script>
    <title>Document</title>
</head>
<body>
<div id="naverIdLogin" img src="./img/naver.png">  
 </div> 

<script type="text/javascript">
  var naverLogin = new naver.LoginWithNaverId(
    {
        clientId: "su_Ne_hhopwrxRSLukTC",
        callbackUrl : "http://localhost/final_project/naver_call.php",
        isPopup: false,
        loginButton:{color:"green", type: 3, height : 60}
    }
  );
  naverLogin.init();
  naverLogin.getLoginStatus(function(status){
      if(status){
        // var uniqId = naverLogin.user.getId();
        // console.log(uniqId);
        var sns = "Naver";
        var email = naverLogin.user.getEmail();
	  	  var name = naverLogin.user.getName();
	  	  var profileImage = naverLogin.user.getProfileImage();
        var birthday = naverLogin.user.getBirthday();
        var age = naverLogin.user.getAge();
        console.log(email);
        console.log(name);
        console.log(profileImage);
        console.log(birthday);
        console.log(age);
      }else{
          consoe.log("AccessToken 이 올바르지 않습니다.");
      }
      document.getElementsByName('naverIdLogin').innerHTML=
      $(document).ready(function(){
        $('#user_sns').val(sns);
        $('#naver_email').val(email);
        $('#user_name').val(name);
      });

  });  
</script>
<form name="naver_form" action="user_join_insert.php" method="post">
    <input id="user_sns" type="hidden" name="user_sns">
    <input id="naver_email" type="hidden" name="user_Email">
    <input id="user_name" type="hidden" name="user_name">
</form>
</body>
</html>