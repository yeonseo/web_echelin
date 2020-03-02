<?php


  $num   = $_GET["num"];

  $con = mysqli_connect("localhost", "root", "123456", "echelin");

  $sql = "delete from review where num='$num'";

  mysqli_query($con, $sql);

  echo "
     <script>
         location.href = './user_mypage_review.php';
     </script>
   ";

   mysqli_close($con);

?>
