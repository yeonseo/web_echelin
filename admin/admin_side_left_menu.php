<!-- 왼쪽 사이드 메뉴 -->
<div class="my_info_profile">
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
</div>
<ul>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_edit_user.php">유저정보관리</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_edit_seller.php">업주정보관리</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/??.php">후기관리 페이지</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/??.php">문의게시판(유저들의)</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_chart_view.php">통계보기</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/admin_database_setting.php">식당 데이터 베이스</a> </li>
    <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">리스트를 넣어요~</a> </li>
</ul>