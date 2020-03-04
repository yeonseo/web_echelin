<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.12.4.min.js" charset="utf-8"></script>
   
    
    <title>Document</title>

</head>
<body>
<script type="text/javascript">
  
   
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // 페이스북에 로그인 중이라면  testAPI()  실행 
      testAPI();
      
    } else {
     //페이스북에 로그인 중이 아니라면 다음을 실행
     //여기에서 로그인 버튼을 만들어서 화면에 붙인다.
     
   	var loginHtml ='<a href="javascript:fbLogin();"'+ 
   	'class="btn btn-block btn-social btn-facebook"> <i class="fb-login-button scope="public_profile,email" onlogin="checkLoginState();" data-width="270px" data-height="250px" data-size="large" data-button-type="login_with"></i>' +
   	' <p></p> ';

    //  +   
   	// '<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button> ' ;
    //  

    document.getElementById('status').innerHTML =loginHtml;     
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '589149001812893',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v6.0' // use graph api version 2.8
    
  });

	FB.getLoginStatus(function(response) {
	   statusChangeCallback(response);
	    	console.log(" 상태 정보 출력 :" + JSON.stringify(response));
	    
	});		
		 
  };

  // Load the SDK asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
   
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.10&appId=589149001812893";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
  	// 로그인이 성공시 다음 아래 코드에서 실행 하면 된다.
  var user_sns="FaceBook";
  	
  
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', { locale: 'ko_KR', fields: 'name, email' } ,function(response) {
     
     //여기서 부터 DB 정보 연결 코딩을 환경에 맞게 개발을 하면 된다.
     // DB 에서 id 또는 email 에서 저장된 동일한 email 있을 경우 저장된 정보 불러 오고 없으면 
     // 새롭게 등록한다.  
      // mysqli_close($con);
   
     
      console.log('Successful login for: ' + response);
      console.log(' 출력 :  ' + JSON.stringify(response));

      document.getElementsByTagName('status').innerHTML=
      $(document).ready(function(){
        $('#test').val(response.email);
          $('#test2').val(response.name);
          $('#test0').val(user_sns);
      });
      


      
      document.getElementById('status').innerHTML =
        // 'Thanks for logging in 유저 이름: , ' + response.name + '!'+
      
      
         '<p></p> <a href="javascript:facebookLogOut();" >로그아웃</a>';
          location.href = 'user_join_insert.php';
        alert("회원가입 INSERT !");
      // document.FB.submit();
        
        
    });
    
      
     
  }
  
function fbLogin(){
	FB.login(function(response){
  // Handle the response object, like in statusChangeCallback() in our demo
  // code.
	checkLoginState();
	}, {scope: 'public_profile , email, user_likes'});
	
} 


	//페이스북 로그 아웃 처리
function facebookLogOut(){
    FB.logout(function(response) {    
        //세션 로그 아웃처리           
    	location.href='auth/logout';   
    });
  
} 
 
</script>

<div class="container"> 
<div class="col-sm-12">
 

<div id="status">

 </div>
 

    </div>
</div>
 <form name="fb_form" action="user_join_insert.php" method="post">
    <input id="test0" type="hidden" name="user_sns">
    <input id="test" type="hidden" name="user_Email">
    <input id="test2" type="hidden" name="user_name">
    <input type="submit">
</form>   
</body>
</html>