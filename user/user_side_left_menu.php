<!-- 왼쪽 사이드 메뉴 -->
<div class="my_info_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
</div>

<!-- 순서대로쭉쭉 -->
<ul>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_info_update.php">유저 정보변경(업뎃예정)</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_reserv.php">예약내역 보기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_message.php">메세지</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_bookmark.php">찜목록</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_review.php">내가 남긴 후기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/seller_page_review.php">판매자 후기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/advertise_first.php">광고 신청</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/user_mypage_question.php">문의게시판(관리자랑)</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">더 필요한 리스트를 넣어요~</a> </li>
</ul>
