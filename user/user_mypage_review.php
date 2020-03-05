<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_review.css">

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


</head>

<body>

  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>

  <section>

  <div class="my_info_content">

    <div class="left_menu">

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
    </div>

    <div class="right_content">

      <div class="container">

      <div class="my_comment_title">
        <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 내가 남긴 후기</span><br><br>
        <span class="comment_title_main">나의 작성 후기</span>
      </div>

        <div class="tab_container">

          <ul>
              <li>

            <div class="tab_content">

                      <div class="tab_content_first">
                        <div class="content_title"><span>작성해야 할 후기</span></div>



<?php
  $noshow = 0;
  //$user_email = "mu338666@naver.com";

  $con = mysqli_connect("localhost","root","123456", "echelin");
  $sql = "select EXISTS (select * from reservation) as success";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  if($row['success'] === 0){

?>
                        <div class="content_main2">
                          <div class="content_no2">
                            <span class="no_span">작성할 후기가 없어요.</span>
                          </div>
                        </div>

<?php
  }else{

    $sql = "select * from reservation where user_id='$useremail' AND noshow='$noshow'";
    $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_array($result)){
    $num = $row['reservation_num'];
    $store_name = $row['store_name'];
    $introduction = $row['introduction'];

?>
        <div class="content_main2">
          <div class='content_yes'>

          <div class='yes_top'>
            <span><a href='#'><?php echo $store_name;?></a> · <span class="top_intro"><?php echo $introduction?></span></span>
          <div><button class='btn_review_insert' onclick="location.href='user_review_input.php?store_name=<?=$store_name?>&num=<?=$num?>&curd=insert'">후기 남기기</button></div>
          </div>

          </div>

          <div class='yes_main'>
           후기를 등록해주세요.
          </div>

      </div>

<?php

    }
  }
  mysqli_close($con);

?>

  <!-- 작성 한 후기 시작 -->

                        </div>
                      </div>
                    </li>

                    <li>

                      <div class="tab_content_first">
                        <div class="content_title"><span>작성 한 후기</span></div>


<?php
  $con = mysqli_connect("localhost","root","123456", "echelin");
  $sql = "select EXISTS (select * from review) as success";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  if($row['success'] == 0){
?>
<div class="content_main">
  <div class="content_no">
    <span class="no_span">작성된 후기가 없어요.</span>
  </div>
</div>
<?php
  }else{

    $sql = "select * from review where user_Email='$useremail'";

    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($result)){

      $num = $row['num'];
      $store_name = $row['store_name'];
      $regist_day = $row['regist_day'];
      $chu_up = $row['chu_up'];
      $chu_down = $row['chu_down'];
      $content = $row['content'];

?>
<div class="content_main">
    <div class='content_yes2'>

      <div class='yes_top'>
        <span><a href='#'><?php echo $store_name;?></a> · <span class="top_intro"><?php echo $regist_day?></span></span>
      <div><button class='btn_init' onclick="location.href='user_review_input.php?store_name=<?=$store_name?>&num=<?=$num?>&curd=update'">수정</button>
           <button class='btn_delete' onclick="location.href='user_mypage_review_delete.php?num=<?=$num?>'">삭제</button></div>

      <div class='div_chu'>
        <div id='like_count'><img src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/image/like.png'> &nbsp; <?php echo $chu_up;?></div>
        <div id='dislike_count'><img src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/image/dislike.png'> &nbsp; <?php echo $chu_down;?></div>
      </div>

      </div>

      <div class='yes_main'>
        <?php echo $content; ?>
      </div>

    </div>
  </div>

<?php

    }
  }
  mysqli_close($con);

?>

                        </div>
                      </div>

                    </li>

                </ul>

            </div>
            <!-- .tab_content -->

          </div>
        <!-- .tab_container -->

      </div>
      <!-- #container -->
    </div>
  </div>

  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>

</body>

</html>
