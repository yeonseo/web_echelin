<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_review_input.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

  <script>
    function check_input() {

        if (!document.review_form.content.value)
        {
            alert("내용을 입력하세요");
            document.review_form.content.focus();
            return;
        }

        document.review_form.submit();
     }
  </script>

</head>

<body>

  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
<?php

$curd = $_GET["curd"];
$store_name = $_GET["store_name"];
$num = $_GET['num'];

$con = mysqli_connect("localhost", "root", "123456", "echelin");
$sql = "select * from echelin_user where user_Email='$useremail'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$user_profile = $row['user_profile'];
$user_profile_copied = $row['user_profile_copied'];
$user_profile_type = $row['user_profile_type'];

if($curd === "insert"){

  $content = "";

}elseif($curd === "update"){

  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql = "select * from review where num='$num'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  $content = $row["content"];

}

?>

  <section>

    <div class="my_info_content">

      <div class="left_menu">

          <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
      </div>

      <div class="right_content">

        <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 후기 등록</span><br><br>
            <span class="comment_title_main">후기를 등록해주세요.</span>
          </div>

          <form  name="review_form" method="post" action="./user_mypage_review_curd.php?curd=<?=$curd?>&num=<?=$num?>&store_name=<?=$store_name?>" enctype="multipart/form-data">

          <div class="comment_user_form">

            <div class="comment_profile_img">
              <!--<a href="#"><img src="./image/<?php echo $user_profile_copied; ?>"></a>-->
              <a href="#"><img src="./image/2020_02_27_07_32_34.jpg"></a>
            </div>

            <div class="comment_user_name">
              <span><?php echo $username;?> ( <?php echo $useremail;?> )</span>
            </div>

            <div class="seller_res_name">
              <a href="#">#<?php echo $store_name;?></a>
            </div>

            <div class="border_line1"></div>

            <textarea class="textarea_form" name="content" rows="8" cols="80"><?php echo $content;?></textarea>

            <div class="border_line2"></div>

            <div class="comment_star_rating">

              <ul>
                <li>접근성 &nbsp&nbsp <span>★★★★☆</span></li>
                <li>서비스 &nbsp&nbsp <span>★★★☆☆</span></li>
                <li>맛평가 &nbsp&nbsp <span>★★★★★</span></li>
              </ul>

            </div>

            <div class="border_line3"></div>

            <!--<div class="comment_div_tag">

              <a href="#"><span>#맛집태그</span></a>&nbsp
              <a href="#"><span>#해시태그</span></a><br>
              <a href="#"><span>#추천맛집</span></a>

            </div>-->


            <div class="comment_div_button">

              <button type="button" onclick="check_input()">완료</button>
              <button type="button" onclick="location.href='./user_mypage_review.php'">목록</button>

            </div>

            </form>

          </div>
        </div><!-- container -->
      </div><!-- right_content -->
    </div><!-- my_info_content -->

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>
