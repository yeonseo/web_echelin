<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
<title>API Demo - Kakao JavaScript SDK</title>
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

</head>
<body>
<div id="kakao-login-btn"></div>



<script type='text/javascript'>
  //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('78c2b50320ef15d7f47800f505e7e96f');
    // 카카오 로그인 버튼을 생성합니다.
    Kakao.Auth.createLoginButton({
      container: '#kakao-login-btn',
      success: function(authObj) {
        // 로그인 성공시, API를 호출합니다.
        Kakao.API.request({
          url: '/v2/user/me',
          success: function(res) {
            var sns="KaKao";
           

          
            // alert(JSON.stringify(res));
            console.log(res.id);
            console.log(res.kakao_account.email);
            console.log(res.properties.nickname);

      document.getElementsByName('kakao-login-btn').innerHTML=
      $(document).ready(function(){
        $('#kakao_sns').val(sns);
        $('#kakao_email').val(res.kakao_account.email);
        $('#kakao_name').val(res.properties.nickname);
        document.kakao_form.submit();

      });

        // var email = naverLogin.user.getEmail();
	  	  // var name = naverLogin.user.getName();
	  	  // var profileImage = naverLogin.user.getProfileImage();
        // var birthday = naverLogin.user.getBirthday();
        // var age = naverLogin.user.getAge();

        
            
          },
          fail: function(error) {
            alert(JSON.stringify(error));
          }
          
        });
     
      },
      fail: function(err) {
        alert(JSON.stringify(err));
      }
      
      
    });
  
  
  //]]>
</script>
<form name="kakao_form" action="user_login_check.php" method="post">
    <input id="kakao_sns" type="hidden" name="user_sns">
    <input id="kakao_email" type="hidden" name="user_Email">
    <input id="kakao_passowrd" name="user_pass" type="hidden">
    <input id="kakao_name" type="hidden" name="user_name">
</form>


</body>
</html>

























