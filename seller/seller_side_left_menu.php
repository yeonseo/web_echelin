<!-- 왼쪽 사이드 메뉴 -->
<div class="my_info_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
</div>

<!-- 순서대로쭉쭉 -->
<ul>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_info_update.php">내 정보변경</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">가게 등록하기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/??.php">매출보기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_reservation_num_chk.php">예약관리</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_message.php">메세지</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_review.php">고객이 남긴 후기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/common_page.php">문의게시판</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/advertise_first.php">광고 신청</a> </li>
</ul>
