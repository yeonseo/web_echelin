let confirmArray =[false,false,false,false,false];
function signup_check(id){
    var value1 = /^[a-zA-Z가-힣]{1}[a-zA-Z가-힣\x20]{1,20}$/;
    var value2 = /^[a-zA-Z가-힣]{1,10}$/;
    
    var value3 = /^[a-zA-Z0-9]{6,12}$/;
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


    }

    // document.myForm.submit();

}
