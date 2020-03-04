<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/user_seller.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/css/seller_register_step.css">

    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
  </head>
  <body>
    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <div class="my_info_content">
      <div class="left_menu">
          <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/seller/seller_side_left_menu.php"; ?>
      </div> <!-- end of left_menu -->

<?php $seller_num = $_GET["seller_num"]; ?>
  <form class="" name="form_store_pic" action="./store_pic_upload.php" method="post" enctype="multipart/form-data">
    <div class="right_content">
      가게 외/내부 사진
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
</div> <!-- end of my_info_content -->
<footer>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
</footer>

</body>
</html>
