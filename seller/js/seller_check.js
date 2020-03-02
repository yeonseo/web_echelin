$(document).ready(function(){

  });// end of ready
function sellerInfoChk(count) {
  if(count < 1) {
    alert("가게 정보를 수정할 가게가 없습니다. 가게 등록 먼저 진행해주세요.");
  } else {
    location.href='../seller/shop_update.php';
  }

}

function sellerMenuChk(count_menu) {
  if(count_menu < 1) {
    location.href='../seller/common_seller_menu.php';
  } else {
    location.href='../seller/seller_menu_seller_num_chk.php';
  }
}

// location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_seller_menu.php'
