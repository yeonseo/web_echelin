<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>


  <!-- CSS, JS 파일 링크 시, -->
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/css/admin_page.css">

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small_not_fillter.php"; ?>
  </header>
  <section>
    <div class="my_info_content">
      <div class="left_menu">
        <!-- 순서대로쭉쭉 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/admin/admin_side_left_menu.php"; ?>
      </div>
      <div class="right_content">
        <h3>후기내역수정
          <form class="" action="admin_edit_review.php?mode=search" method="post">

            <select name="find">
              <option value="user_Email">이메일</option>
              <option value="user_name">작성자이름</option>
              <option value="seller_num">식당번호</option>
              <option value="store_name">식당이름</option>
              <option value="chu_up">추천</option>
              <option value="chu_down">비추천</option>
            </select>


            <input type="text" name="search" value="">


            <input type="image" src="./img/search_icon.png">

          </form>
        </h3>
        <ul id="member_list">
          <li>
            <span class="col1">주문번호</span>
            <span class="col2">가게명</span>
            <span class="col3">아이디</span>
            <span class="col4">날짜</span>
            <span class="col5">시간</span>
            <span class="col6">메뉴</span>
            <span class="col7">수정</span>
            <span class="col8">삭제</span>
          </li>
          <?php
          $find = $search = $member_search = "";

          $con = mysqli_connect("localhost", "root", "123456", "echelin");
          if (isset($_GET["mode"]) && $_GET["mode"] == "search") {
            $find = test_input($_POST["find"]);
            $search = test_input($_POST["search"]);
            $member_search = mysqli_real_escape_string($con, $search);
            // if ($find === 'chu_up' | $find === 'chu_down') {
            //   $sql = "select * from review order by $find desc";
            // } else {
            //   $sql = "select * from review where $find like '%$member_search%' order by num desc";
            // }
            $int = 1;
          } else {
            $sql = "select * from reservation where cancel = 1";
          }

          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result)) {
            $num = $row["reservation_num"];
            $store_name = $row["store_name"];
            $user_id = $row["user_id"];
            $select_date = $row["select_date"];
            $select_time = $row["select_time"];
            $select_menu = $row["select_menu"];
          ?>
            <li>
              <form class="" action="update_user.php" method="post">
                <span class="col1"><input type="text" name="num" value="<?= $num ?>"></span>
                <span class="col2"><input type="text" name="store_name" value="<?= $store_name ?>"></span>
                <span class="col3"><input type="text" name="user_name" value="<?= $user_id ?>"></span>
                <span class="col4"><input type="text" name="star_access" value="<?= $select_date ?>"></span>
                <span class="col5"><input type="text" name="star_service" value="<?= $select_time ?>"></span>
                <span class="col6"><input type="text" name="star_flavor" value="<?= $select_menu ?>"></span>
                <span class="col7"><button type="submit">수정</button></span>
                <span class="col8"><button type="button" onclick="location.href='delete_user.php?num=<?= $num ?>'">삭제</button></span>
              </form>
            </li>
          <?php

          }
          mysqli_close($con);
          ?>

      </div><!-- end of right_content -->

  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
  </footer>
</body>

</html>
