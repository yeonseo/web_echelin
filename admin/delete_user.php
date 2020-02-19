<?php
  $num = $_GET["num"];
  $con = mysqli_connect("localhost","root","123456","echelin");
  $sql = "delete from members where num=$num";
  mysqli_query($con,$sql);
  mysqli_close($con);

    echo "
	     <script>
	         location.href = 'edit_user.php';
	     </script>
	   ";
?>
