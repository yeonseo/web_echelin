<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
  <title> <?= COMMON::$title; ?> </title>
  <!-- CSS, JS 파일 링크 시, -->
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/css/admin_page.css">
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <script src="./js/vendor/modernizr.custom.min.js"></script>
  <script src="./js/vendor/jquery-1.10.2.min.js"></script>
  <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
  <section>
    <div class="admin_content">

      <div class="left_menu">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/admin/left_menu.php" ?>
      </div>
      <div class="right_content">
        <h3>업주정보수정
          <form class="" action="edit_user.php?mode=search" method="post">

              <select name="find">
                <option value="id">아이디</option>
                <option value="id">이름</option>
                <option value="id">이메일</option>
              </select>


              <input type="text" name="search" value="">


              <input type="image" src="./img/search_icon.png">

          </form>
        </h3>
        <ul id="member_list">
          <li>
            <span class="col1">번호</span>
            <span class="col2">아이디</span>
            <span class="col3">비밀번호</span>
            <span class="col4">이름</span>
            <span class="col5">이메일</span>
            <span class="col6">가입일</span>
            <span class="col7">레벨</span>
            <span class="col8">포인트</span>
            <span class="col9">수정</span>
            <span class="col10">삭제</span>
          </li>
          <?php
          $find=$search=$member_search="";

          $con = mysqli_connect("localhost", "root", "123456", "echelin");
          if(isset($_GET["mode"])&&$_GET["mode"]=="search"){
            $find = test_input($_POST["find"]);
            $search = test_input($_POST["search"]);
            $member_search = mysqli_real_escape_string($con,$search);
            $sql = "select * from members where $find like '%$member_search%' order by num desc";
          }else{
            $sql = "select * from members order by num desc";
          }

          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result);
          $number = $total_record;
          while ($row = mysqli_fetch_array($result)) {
            $num = $row["num"];
            $id = $row["id"];
            $pass = $row["pass"];
            $name = $row["name"];
            $email = $row["email"];
            $regist_day = $row["regist_day"];
            $level = $row["level"];
            $point = $row["point"];
          ?>
            <li>
              <form class="" action="update_user.php?num=<?= $num ?>" method="post">
                <span class="col1"><?= $number ?></span>
                <span class="col2"><?= $id ?></span>
                <span class="col3"><input type="text" name="pass" value="<?= $pass ?>"></span>
                <span class="col4"><input type="text" name="name" value="<?= $name ?>"></span>
                <span class="col5"><input type="text" name="email" value="<?= $email ?>"></span>
                <span class="col6"><?= $regist_day ?></span>
                <span class="col7"><input type="text" name="level" value="<?= $level ?>"></span>
                <span class="col8"><input type="text" name="point" value="<?= $point ?>"></span>
                <span class="col9"><button type="submit">수정</button></span>
                <span class="col10"><button type="button" onclick="location.href='delete_user.php?num=<?= $num ?>'">삭제</button></span>
              </form>
            </li>
          <?php
            $number--;
          }
          mysqli_close($con);
          ?>

      </div>
    </div>
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
  </footer>
</body>

</html>
