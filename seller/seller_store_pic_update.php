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

    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/js/preview.js"></script>

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

<?php $seller_num = $_GET["seller_num"];?>
<?php
$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from store_img where seller_num='$seller_num' limit 1";
$result=mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$store_file_copied = $row['store_file_copied'];
$store_file_num = $row['num'];

?>

  <form class="" name="form_store_pic_update" action="./store_pic_update.php?pic_num=<?=$store_file_num?>" method="post" enctype="multipart/form-data">
    <div class="right_content">
      가게 외/내부 사진

         <div class="store_pic">

           <div class="store_inner_pic1">
             <label for="store_image1">업로드</label>
             <input type="file" name="file[]" id="store_image1" multiple>

             <div class="image_preview1">
                <img class="store_img" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?= $store_file_copied?>">
             </div>
           </div>

           <?php
           $con = mysqli_connect("localhost", "root", "123456", "echelin");
           $sql = "select * from store_img where seller_num='$seller_num' limit 1,4";
           $result = mysqli_query($con, $sql);


           for( $i = 2 ; $i < 6 ; $i++){
             $row = mysqli_fetch_array($result);
             $store_file_copied = $row['store_file_copied'];
            ?>

            <div class="store_inner_pic">
            <label for="store_image<?=$i?>">업로드</label>
              <input type="file" name="file[]" id="store_image<?=$i?>" multiple>


              <div class="image_preview<?=$i?>">
                  <img class="store_img" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$store_file_copied?>">
              </div>
            </div>

          <?php
          }
           ?>




           <!-- <div class="store_inner_pic">
             <label for="store_image3">업로드</label>
             <input type="file" name="file[]" id="store_image3" multiple>

             <div class="image_preview3">
                 <img class="store_img" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$row[2]?>">
             </div>
           </div>

           <div class="store_inner_pic">
             <label for="store_image4">업로드</label>
             <input type="file" name="file[]" id="store_image4" multiple>

             <div class="image_preview4">
               <img class="store_img" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$row[3]?>">
             </div>
           </div>

           <div class="store_inner_pic">
               <label for="store_image5">업로드</label>
             <input type="file" name="file[]" id="store_image5" multiple>

             <div class="image_preview5">
                 <img class="store_img" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$row[4]?>">
             </div>
           </div> -->
</div>
<?php
mysqli_close($con);

 ?>
         <div class="div_clear_both">
         </div> <!-- end of store_pic -->
         </br></br>
   <button class="button_complete" type="button" name="button" onclick="update_store_pic()">완료</button>
    </div> <!-- end of right_content -->
  </form>
</div> <!-- end of my_info_content -->
<footer>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
</footer>

</body>
</html>
