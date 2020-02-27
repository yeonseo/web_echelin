let confirmArray =[false,false,false,false,false];
function signup_check(id){
    var value1 = /^[a-zA-Z가-힣]{1}[a-zA-Z가-힣\x20]{1,20}$/;
    var value2 = /^[a-zA-Z가-힣]{1,10}$/;
    
    var value3 = /^[a-zA-Z0-9]{8,20}$/;
    var value4 = /^[A-Z]{1}[a-zA-Z0-9]{7,11}$/;
    var value5 = /^[\w]+@[a-z]+.[a-z]+$/;

    
    var check_case = document.getElementById(id).value;
    
    
    switch(id){
        case "signup_email":
            
            if(!value5.test(check_case)){
                confirmArray[0]=false;
                $(document).ready(function(){
                    $("#email_text").text("이메일을 입력하세요 !").css("color","red","visibility","visible");
                 
                });
            
            }else{
                confirmArray[0]=true;
                $(document).ready(function (){
                    $("#email_text").text("사용가능한 이메일 입니다 !").css("color","teal", "visibility","hidden");
                });
            }
            break;
            // user_name_test
        case "user_name" :
            if(!value1.test(check_case)){
                confirmArray[1]=false;
                $(document).ready(function(){
                    $("#user_name_test").text("숫자 또는 특수기호가 포함되었습니다. ").css("color","red","visibility","visible");
                });
            }else{
                confirmArray[1]=true;
                $(document).ready(function(){
                    $("#user_name_test").text("사용 가능합니다.").css("color","teal","visibility","hidden");
                });
            }
            break;
            case "user_sung" :
                if(!value2.test(check_case)){
                    confirmArray[2]=false;
                    $(document).ready(function(){
                        $("#user_sung_test").text("숫자 또는 특수기호가 포함되었습니다. ").css("color","red","visibility","visible");
                    });
                }else{
                    confirmArray[2]=true;
                    $(document).ready(function(){
                        $("#user_sung_test").text("사용 가능합니다.").css("color","teal","visibility","hidden");
                    });
                }
                break;
                case "user_pass" :
                    if(!value3.test(check_case)){
                        confirmArray[3]=false;
                        $(document).ready(function(){
                            $("#user_password").text("비밀번호는 특수기호를 제외한 8글자 이상 입력해주세요").css("color","red","visibility","visible");
                        });
                    }else{
                        confirmArray[3]=true;
                        $(document).ready(function(){
                            $("#user_password").text("사용 가능합니다.").css("color","teal","visibility","hidden");
                        });
                    }
                    break;
                    document.myForm.submit();
                    
    } // end of switch
   

    // var sns = "Echelin";
    // 수정중 2-25 / 1:22
    // document.getElementById('input_form25').innerHTML=
    // $(document).ready(function(){
    //     $('#user_sns').val(sns);
    // });
}
    function check_email(){
        window.open("user_login_check_email.php?user_Email="+document.myForm.check_case.value,
        "signup_email","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }

// var popupX=(document.body.offsetWidth/2)-(700/2);
// var popupY=(document.body.offsetHeight/2)-(600/2);
// // 만들 팝업창의 좌우 , 상하 크기의 1/2 만큼 보정값으로 뺀다
// var signup_window= window.open('user_signup_window.php','check_signup','width=700,height=600, left='+popupX +',top='+popupY);
// var input_check=document.signup;
// input_check='/echelin/user/user_join_signup.php';
// input_check='check_signup';
// input_check.method="post";
