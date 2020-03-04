<?php
    if (isset($_GET["reservation_num"])){
       $reservation_num = $_GET["reservation_num"];
    }
    include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php";

    echo "reservation_num = ". $reservation_num;

$sql = "update reservation set cancel=1 where reservation_num='$reservation_num'";
    mysqli_query($con, $sql);
    echo mysqli_error($con);
    mysqli_close($con);
    echo "
        <script>
            location.href = location.href='../user/user_mypage_reserv.php';
        </script>
    ";

?>
