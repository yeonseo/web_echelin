function openpop(){
    var popupX=(document.body.offsetWidth/2)-(700/2);
    var popupY=(document.body.offsetHeight/2)-(600/2);
    // 만들 팝업창의 좌우 , 상하 크기의 1/2 만큼 보정값으로 뺀다
    var signup_window= window.open('user_mypage_photo.php','openpop','width=894,height=454, left='+popupX +',top='+popupY);
    var input_check=document.user_modify;
    input_check='/echelin/user/user_mypage_photo.php';
    input_check='openpop';
    input_check.method="post";
}