<div class="my_info_content">
  <div class="left_menu">
      <div class="my_info_profile">
          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
      </div>

      <!-- 순서대로쭉쭉 -->
      <ul>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex유저정보관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex업주정보관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">ex문의게시판관리</a> </li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">김성민</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">김지수</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">하동운</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="#">유영삼</a></li>
          <li class="<?= COMMON::$css_sub_menu; ?>"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/test_page/index_my_info.php">테스트 페이지</a></li>
      </ul>
  </div> <!-- end of left_menu -->

  <form name="form_menu" class="" action="./menu_upload.php" method="post" enctype="multipart/form-data">
  <div class="right_content">
    메뉴를 등록할 내 가게를 선택해주세요.
   </div> <!-- end of right_content -->
   </form>
   </div> <!-- end of my_info_content -->
