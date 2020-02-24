function signup_check(){

    var pattern=/([^가-힣ㄱ-ㅎㅏ-ㅣ\x20])/i;
    var flag = pattern.test($("#test1").val());
    var pattern2=/([^가-힣ㄱ-ㅎㅏ-ㅣ\x10])/i;
    var flag2 = pattern2.test($("#test_sung").val());
    if(flag){
        $("#user_name_test").text("영문장 또는 특수기호 (이)가 포함되어 있는 문장이 있습니다").css("color","red");

    }else{
        $("#user_name_test").text("사용 가능합니다").css("color","teal");
    }
   
    if(flag2){
        $("#user_sung_test").text("영문장 또는 특수기호 (이)가 포함되어 있는 문장이 있습니다").css("color","red");
    }else{
        $("#user_sung_test").text("사용 가능").css("color","teal");
    }
      if (!document.myForm.user_Email.value) {
        //  alert("이메일 주소를 입력하세요!");    
          $("#email_text").text("이메일 주소를 입력하세요").css("color","red");
          document.member_form.user_Email.focus();
          return;
      }
      
      if (!document.myForm.user_name.value) {
          alert("이름을 입력하세요!");    
          document.myForm.user_name.focus();
          return;
      }
      
      if (!document.myForm.user_sung.value) {
          alert("성 을 입력하세요!");    
          document.myForm.user_sung.focus();
          return;
      }
      if (!document.myForm.user_password.value) {
          alert("비밀번호를 입력하세요!");    
          document.myForm.user_password.focus();
          return;
      }
      var popupX=(document.body.offsetWidth/2)-(700/2);
        var popupY=(document.body.offsetHeight/2)-(600/2);
        // 만들 팝업창의 좌우 , 상하 크기의 1/2 만큼 보정값으로 뺀다
        var signup_window= window.open('user_signup_window.php','check_signup','width=700,height=600, left='+popupX +',top='+popupY);
        var input_check=document.signup;
        input_check='/echelin/user/user_join_signup.php';
        input_check='check_signup';
        input_check.method="post";  
   }
