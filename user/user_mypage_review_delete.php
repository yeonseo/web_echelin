<?php
  echo "<script>
          if(confirm('정말 삭제하시겠습니까?')){
            alert('성공적으로 삭제되었습니다.');
          }else{
            alert('삭제를 취소합니다.');
            return false;
          }
        </script>";

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
