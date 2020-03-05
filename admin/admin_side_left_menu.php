<!-- 왼쪽 사이드 메뉴 -->
<div class="my_info_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_myinfo_index.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/img/admin_profile.png"></a>
</div>
<ul>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_edit_user.php">유저정보관리</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_edit_seller.php">업주정보관리</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_edit_review.php">후기관리 페이지</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_cancel.php">예약취소 현황</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_chart_view.php">통계보기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_database_setting.php">식당 데이터 베이스</a> </li>
</ul>
