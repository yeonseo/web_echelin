$(document).ready(function(){

  });// end of ready
function sellerInfoChk(count) {
  if(count < 1) {
    alert("가게 정보를 수정할 가게가 없습니다. 가게 등록 먼저 진행해주세요.");
  } else {
    location.href='../seller/seller_info_page.php'
  }

}
