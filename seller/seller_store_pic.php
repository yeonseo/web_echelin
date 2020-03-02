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

<form class="" name="form_store_pic" action="./store_pic_upload.php" method="post" enctype="multipart/form-data">
  <div class="right_content">
    <li>가게 외/내부 사진</li>
       <div class="store_pic">
         <div class="store_inner_pic1">
           <label for="store_image1">업로드</label>
           <input type="file" name="file[]" id="store_image1" multiple>

           <div class="image_preview1">
               <img class="store_img" src="./image/cheese.png">
           </div>
         </div>

         <div class="store_inner_pic">
         <label for="store_image2">업로드</label>
           <input type="file" name="file[]" id="store_image2" multiple>


           <div class="image_preview2">
               <img class="store_img" src="./image/cheese.png">
           </div>
         </div>

         <div class="store_inner_pic">
           <label for="store_image3">업로드</label>
           <input type="file" name="file[]" id="store_image3" multiple>

           <div class="image_preview3">
               <img class="store_img" src="./image/cheese.png">
           </div>
         </div>

         <div class="store_inner_pic">
           <label for="store_image4">업로드</label>
           <input type="file" name="file[]" id="store_image4" multiple>

           <div class="image_preview4">
             <img class="store_img" src="./image/cheese.png">
           </div>
         </div>

         <div class="store_inner_pic">
             <label for="store_image5">업로드</label>
           <input type="file" name="file[]" id="store_image5" multiple>

           <div class="image_preview5">
               <img class="store_img" src="./image/cheese.png">
           </div>
         </div>
       </div>
       <div class="div_clear_both">
       </div> <!-- end of store_pic -->
       </br></br>
 <button class="button_complete" type="button" name="button" onclick="register_store_pic()">완료</button>
  </div> <!-- end of right_content -->
</form>
