<?php

include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php";
// $seller_num=get('seller_num');
// $date_result=get('date_result');
// $time_result=get('time_result');
// $person=get('person');
//
//
// function get($name){
//   if (isset($_GET[$name])) {
//       $get_result= $_GET[$name];
//   } else {
//       $get_result= '엥';
//   }
//   return $get_result;
// }



        $sql = "select * from " . $dbname . ".reservation where user_id=" . "'".$user_email."'ORDER BY reservation_num DESC";
        $result = $con->query($sql);
        if ($result === FALSE) {
            die('DB seller Connect Error: ' . mysqli_error($con));
        }

        $rowcnt = mysqli_num_rows($result);

        $reservation_num=[];
        $seller_num=[];
        $store_name=[];
        $seller_id=[];
        $introduction=[];
        $select_date=[];
        $select_time=[];
        $select_person=[];
        $select_menu=[];
        $reservation_special=[];
        $intensity_of_reserv=[];
        $noshow=[];
        $cancel=[];
        $cnt=0;
        while ($row = mysqli_fetch_array($result))
        {

             $reservation_num[$cnt] =$row['reservation_num'];
             $seller_num[$cnt] =$row['seller_num'];
             $store_name[$cnt] =$row['store_name'];
             $introduction[$cnt] =$row['introduction'];
             $seller_id[$cnt] =$row['seller_id'];
             $select_date[$cnt] =$row['select_date'];
             $select_time[$cnt] =$row['select_time'];
             $select_person[$cnt] =$row['select_person'];
             $select_menu[$cnt] =$row['select_menu'];
             $reservation_special[$cnt] =$row['reservation_special'];
             $intensity_of_reserv[$cnt] =$row['intensity_of_reserv'];
             $noshow[$cnt] =$row['noshow'];
             $cancel[$cnt] =$row['cancel'];
           $cnt++;
        }



        $result_file=[];
        $store_file_copied=[];
        for($i = 0 ; $i < $cnt ; $i ++){


          $sql = "select * from " . $dbname . ".store_img where seller_num=" . "'".$seller_num[$i]."'";
          $result_file[$i] = $con->query($sql);
          if ($result_file[$i] === FALSE) {
              die('DB seller Connect Error: ' . mysqli_error($con));
          }
          $numrow = mysqli_num_rows($result_file[$i]);

          if($numrow!=0){
          $row = mysqli_fetch_array($result_file[$i]);
          $store_file_copied[$i] =$row['store_file_copied'];
          }

        }



      // echo "<input id='menu_file_copied'type='text' value='$menu_file_copied' hidden>";
      // echo "<input id='menu_name'type='text' value='$menu_name' hidden>";
      // echo "<input id='menu_price'type='text' value='$menu_price' hidden>";
      // echo "<input id='menu_explain'type='text' value='$menu_explain' hidden>";
      // echo "<input id='date_result'type='text' value='$date_result' hidden>";
      // echo "<input id='time_result'type='text' value='$time_result' hidden>";
      // echo "<input id='person'type='text' value='$person' hidden>";

?>
