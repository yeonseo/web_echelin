<?php
      $count = $_GET["count"]; // 주의

      $con = mysqli_connect("localhost", "root", "123456", "echelin");
      $sql = 'SELECT * FROM seller ORDER BY seller_num ASC LIMIT ' . $count . ',' . 8;

      $result = mysqli_query($con, $sql);

      while($row = mysqli_fetch_array($result)){

        $seller_num = $row['seller_num'];
        $store_name = $row['store_name'];
        $introduction = $row['introduction'];

        $sql2    = "select * from store_img where seller_num='$seller_num' order by num asc limit 1";
        $result2 = mysqli_query($con, $sql2);

        while($row2 = mysqli_fetch_array($result2)){

          $store_file_copied = $row2['store_file_copied'];

        echo "<a href='/echelin/restaurants/restaurants_index.php'>
                <p class='summary_first'>
                  <img src='/echelin/seller/storeImg/$store_file_copied'>
                      <span class='summary_span_first'>#$store_name</span>
                      <span class='summary_span_second'>$introduction</span>
                </p>
              </a>";
        }
      }
      mysqli_close($con);
?>
