<?php
  $num = $_GET["num"];
  $pass = $_POST["pass"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $level = $_POST["level"];
  $point = $_POST["point"];

  $con = mysqli_connect("localhost","root","123456","echelin");
  $sql = "update members set pass=$pass where num=$num";
  $sql = "update members set name=$name where num=$num";
  $sql = "update members set email=$email where num=$num";
  $sql = "update members set level=$level where num=$num";
  $sql = "update members set point=$point where num=$num";
  mysqli_query($con,$sql);
  mysqli_close($con);




  echo "<script>
          alert('num=$num , pass=$pass , name=$name , email=$email ,level=$level ,point=$point');
          location.href='edit_user.php';
        </script>";
?>
