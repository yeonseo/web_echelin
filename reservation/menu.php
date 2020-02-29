<?php

    if (isset($_GET['seller_num'])) {
        $seller_num = $_GET['seller_num'];
    } else {
        // echo "console.log('레스토랑 주소가 이상한데에~')";
    }

    $seller_num = 1;
    function setMenuImg($con, $dbname, $seller_num)
    {

        //menu_img 테이블에서 값들고옴
        $seller_num = 1;

        $sql = "select * from " . $dbname . ".menu_img where seller_num=" . $seller_num;
        $result = $con->query($sql);
        if ($result === FALSE) {
            die('DB seller Connect Error: ' . mysqli_error($con));
        }
        $menu_file_copied="";
        $menu_name="";
        $menu_price="";
        $menu_explain="";
        $cnt=0;
        while ($row = mysqli_fetch_array($result))
        {
           if($cnt==0){
             $menu_file_copied=$row['menu_file_copied'];
             $menu_name=$row["menu_name"];
             $menu_price=$row["menu_price"];
             $menu_explain=$row["menu_explain"];
           }else{
             $menu_file_copied.= ",".$row['menu_file_copied'];
             $menu_name.= ",".$row["menu_name"];
             $menu_price.= ",".$row["menu_price"];
             $menu_explain.= ",".$row["menu_explain"];
           }
           $cnt++;
        }
      echo "<input id='menu_file_copied'type='text' value='$menu_file_copied' hidden>";
      echo "<input id='menu_name'type='text' value='$menu_name' hidden>";
      echo "<input id='menu_price'type='text' value='$menu_price' hidden>";
      echo "<input id='menu_explain'type='text' value='$menu_explain' hidden>";
      }
    setMenuImg($con, $dbname, $seller_num);
 ?>
  <div class="div_menu_content">
    <div class="best_score_content" id="divContentWrap">

      </div>
  </div>

<div id="myCartWrap" class="my_cart_wrap">
    <span class="span_hashtag">#</span>
    <span id="spanMyCart"class="span_hashtag_intro">장바구니</span>
</div>
