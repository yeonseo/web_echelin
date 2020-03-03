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
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
  <section>
    <div class="my_info_content">
      <div class="left_menu">
        <!-- 순서대로쭉쭉 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/admin/admin_side_left_menu.php"; ?>
      </div>
      <div class="right_content">

        <h3>업주정보수정
          <form class="" action="admin_edit_user.php?mode=search" method="post">

            <select name="find">
              <option value="user_email">이메일</option>
              <option value="user_name">이름</option>
              <option value="user_num">번호</option>
            </select>


            <input type="text" name="search" value="">


            <input type="image" src="./img/search_icon.png">

          </form>
        </h3>
        <ul id="member_list">
          <li>
            <span class="col1">번호</span>
            <span class="col2">이메일</span>
            <span class="col3">비밀번호</span>
            <span class="col4">이름</span>
            <span class="col5">나이</span>
            <span class="col6">연락처</span>
            <span class="col7">가입일</span>
            <span class="col8">레벨</span>
            <span class="col9">프로필</span>
            <span class="col10">수정</span>
            <span class="col11">삭제</span>
          </li>
          <?php
          $find = $search = $member_search = "";

          $con = mysqli_connect("localhost", "root", "123456", "echelin");
          if (isset($_GET["mode"]) && $_GET["mode"] == "search") {
            $find = test_input($_POST["find"]);
            $search = test_input($_POST["search"]);
            $member_search = mysqli_real_escape_string($con, $search);
            $sql = "select * from echelin_user where `user_Level`='10' and $find like '%$member_search%' order by user_num desc";
          } else {
            $sql = "select * from echelin_user where `user_Level`='10' order by user_num desc";
          }

          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result);
          $number = $total_record;
          while ($row = mysqli_fetch_array($result)) {
            $user_num = $row["user_num"];
            $user_Email = $row["user_Email"];
            $user_password = $row["user_password"];
            $user_name = $row["user_name"];
            $user_age = $row["user_age"];
            $user_phone = $row["user_phone"];
            $user_regist_day = $row["user_regist_day"];
            $user_Level = $row["user_Level"];
            $user_profile = $row["user_profile"];
          ?>
            <li>
              <form class="" action="update_user.php" method="post">
                <span class="col1"><input type="text" name="user_num" value="<?= $user_num ?>"></span>
                <span class="col2"><input type="text" name="user_Email" value="<?= $user_Email ?>"></span>
                <span class="col3"><input type="text" name="user_password" value="<?= $user_password ?>"></span>
                <span class="col4"><input type="text" name="user_name" value="<?= $user_name ?>"></span>
                <span class="col5"><input type="text" name="user_age" value="<?= $user_age ?>"></span>
                <span class="col6"><input type="text" name="user_phone" value="<?= $user_phone ?>"></span>
                <span class="col7"><?= $user_regist_day ?></span>
                <span class="col8"><input type="text" name="user_Level" value="<?= $user_Level ?>"></span>
                <span class="col8"><input type="text" name="user_profile" value="<?= $user_profile ?>"></span>
                <span class="col9"><button type="submit">수정</button></span>
                <span class="col10"><button type="button" onclick="location.href='delete_user.php'">삭제</button></span>
              </form>
            </li>
          <?php
            $number--;
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