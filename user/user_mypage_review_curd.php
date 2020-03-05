<?php

  $curd = $_GET["curd"];
  $num = $_GET["num"];
  $store_name = $_GET["store_name"];

  $content = $_POST["content"];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");

  function review_insert($con, $content, $num, $curd, $store_name){
    $noshow = 1;

    @session_start();
    if (isset($_SESSION["user_Email"])) $useremail = $_SESSION["user_Email"];
    else $useremail = "";
    if (isset($_SESSION["user_name"])) $username = $_SESSION["user_name"];
    else $username = "";

    $sql = "select * from echelin_user where user_Email='$useremail'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $user_profile = $row['user_profile'];
    $user_profile_copied = $row['user_profile_copied'];
    $user_profile_type = $row['user_profile_type'];


    $content = htmlspecialchars($content, ENT_QUOTES);
    date_default_timezone_set('Asia/Seoul');
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $sql = "insert into review (seller_num, user_Email, user_name, store_name, content, file_name, file_copied
    , file_type, star_access, star_service, star_flavor, regist_day, noshow) ";
    $sql .= "values('$num','$useremail', '$username', '$store_name', '$content', '$user_profile', '$user_profile_copied', '$user_profile_type', ";
    $sql .= "0, 0, 0, '$regist_day', '$noshow')";
    mysqli_query($con, $sql);

    $sql = "update reservation set noshow='$noshow'";
    $sql .= " where reservation_num=$num";
    mysqli_query($con, $sql);

  };

  function review_update($con, $content, $num, $curd){

    $content = htmlspecialchars($content, ENT_QUOTES);
    date_default_timezone_set('Asia/Seoul');
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $sql = "update review set content='$content', star_access='0', star_service='0', star_flavor='0', regist_day='$regist_day'";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

  };

  switch ($curd) {

      case 'insert':

      review_insert($con, $content, $num, $curd, $store_name);
      echo "
         <script>
          alert('후기를 등록하셨습니다.');
          location.href = './user_mypage_review.php';
         </script>
      ";
      break;

      case 'update':

      review_update($con, $content , $num, $curd);
      echo "
        <script>
        alert('후기를 수정하셨습니다.');
            location.href = './user_mypage_review.php';
        </script>
      ";
      break;

    default:
      break;
  }

  mysqli_close($con);
