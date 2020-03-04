<?php

$seller_num=get('seller_num');
$date_result=get('date_result');
$time_result=get('time_result');
$person=get('person');
if (isset($_SESSION["user_Email"])){
   $user_email = $_SESSION["user_Email"];
}
else {
  echo("<script>
  alert('로그인 후에 이용할 수 있습니다.');
  location.href='../restaurants/restaurants_index.php?seller_num=$seller_num';
  </script>");
}

function get($name){
  if (isset($_GET[$name])) {
      $get_result= $_GET[$name];
  } else {
      $get_result= '어?';
  }
  return $get_result;
}



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
      echo "<input id='date_result'type='text' value='$date_result' hidden>";
      echo "<input id='time_result'type='text' value='$time_result' hidden>";
      echo "<input id='person'type='text' value='$person' hidden>";

 ?>
  <div class="div_menu_content">
    <div class="best_score_content" id="divContentWrap">

      </div>
  </div>

<div id="myCartWrap" class="my_cart_wrap">
    <span class="span_hashtag">#</span>
    <span id="spanMyCart"class="span_hashtag_intro">장바구니</span>
</div>

<br><br><br><br><br><br>
<div class="div_prv_next_button">
  <button class="button_next" type="button" name="button" onclick="getSelectMenu('http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_third.php','?seller_num=<?= $seller_num ?>')">다음</button>
  <button class="button_prev" type="button" name="button" onclick="prevPage('http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_first.php','?seller_num=<?= $seller_num ?>')">이전</button>
</div>
