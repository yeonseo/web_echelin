$(document).ready(function(){

  });// end of ready
function sellerInfoChk(count) {
  if(count < 1) {
    alert("가게 정보를 수정할 가게가 없습니다. 가게 등록 먼저 진행해주세요.");
  } else {
    location.href='../seller/seller_info_update_num_chk.php';
  }

}

function sellerMenuChk(count) {
  if(count < 1) {
    alert("메뉴를 추가할 가게가 없습니다. 가게 등록 먼저 진행해주세요.");
  } else {
    location.href='../seller/seller_menu_seller_num_chk.php';
  }
}


function sellerPicChk(count) {
  if(count < 1) {
    alert("가게 사진을 등록할 가게가 없습니다. 가게 등록 먼저 진행해주세요.");
  } else {
    location.href='../seller/seller_store_pic_num_chk.php';
  }
}
s
// location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_seller_menu.php'
