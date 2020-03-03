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
    <li id="li_menu">메뉴 추가하기</li>
    <button id="button_add" class="button_circle_add" type="button">+</button>
    <br>
    <br>
    <table class="table_seller_menu" border="1">
      <tbody>
        <tr>
          <th class="th_menu">메뉴</th>
          <th class="th_menu">가격</th>
          <th class="th_menu">사진</th>
          <th class="th_menu">설명</th>
          <th class="th_menu_del"></th>
        </tr>

        <tr class="tr_menu" name="tr_menu">
          <td class="td_menu"><input type="text" name="input_menu[]" placeholder="메뉴이름" value="치즈떡볶이"></td>
          <td class="td_menu"><input type="number" name="input_price[]" placeholder="가격" value="4000"></td>
          <td class="td_menu"><input type="file" name="input_menu_img[]" value="" multiple></td>
          <td class="td_menu"><input type="text" name="input_menu_explain[]" placeholder="메뉴 설명"></td>
          <td class="td_button_del"><input type="text" name=""></td>
        </tr>
      </tbody>
    </table>
<<<<<<< HEAD
    </br>
    <button class="button_complete" type="button" name="button" onclick="register_menu()">완료</button>
  </div> <!-- end of right_content -->
</form>
=======
  </br>
   <button class="button_complete" type="button" name="button" onclick="register_menu()">완료</button>
 </div> <!-- end of right_content -->
 </form>
 </div> <!-- end of my_info_content -->
>>>>>>> j222su
