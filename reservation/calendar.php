
<?php

    if (isset($_GET['seller_num'])) {
        $seller_num = $_GET['seller_num'];
    } else {
        // echo "console.log('레스토랑 주소가 이상한데에~')";
    }

    //test용 변수
    $seller_num = 1;


 function getJsonDataMakeArticle($con, $dbname, $seller_num)
 {

     $sql = "select * from " . $dbname . ".seller where seller_num=" . $seller_num;
     $result = $con->query($sql);
     if ($result === FALSE) {
         die('DB seller Connect Error: ' . mysqli_error($con));
     }

     $result_restaurant = mysqli_fetch_array($result);

     // 디비에서 상점 데이터를 가지고 와서 만들어줄것
     // 일단 임시값
     $upso_nm = $result_restaurant['store_name'];
     $break_start = $result_restaurant['break_start'];
     $break_end = $result_restaurant['break_end'];
     $opening_hours_start = $result_restaurant['opening_hours_start'];
     $opening_hours_end = $result_restaurant['opening_hours_end'];
     $nokids = $result_restaurant['nokids'];

     $break_start_numval=(int)(substr($break_start,0,2));
     $break_end_numval=(int)(substr($break_end,0,2));
     $opening_hours_start_numval=(int)(substr($opening_hours_start,0,2));
     $opening_hours_end_numval=(int)(substr($opening_hours_end,0,2));
     $cnt=0;
     $opening_hours_val='';
     for ($i = 1 ; $i <=24 ;$i++){
       if($opening_hours_start_numval<=$i&&$opening_hours_end_numval>$i&&($break_start_numval>$i||$break_end_numval<=$i)){
         if($i<10){
           $opening_hours[$cnt]="0".$i." : 00";
           $opening_hours_val.=$opening_hours[$cnt].',';
           $cnt++;
         }else{
           $opening_hours[$cnt]=$i." : 00";
           $opening_hours_val.=$opening_hours[$cnt].',';
           $cnt++;
         }
       }
     }
     echo "<input id='opening_hours_val'type='text' value='$opening_hours_val' hidden>";
     echo "<input id='nokids'type='text' value='$nokids' hidden>";
}
 getJsonDataMakeArticle($con, $dbname, $seller_num);
 ?>
    <div class="content-wrap">
      <div class="content-left">
        <div class="main-wrap">
          <div id="main-day" class="main-day"></div>
          <div id="main-date" class="main-date"></div>
        </div>
        <div class="time-wrap time-wrap2" class="">
          <div id="time-list" class="time-list"><div class="time-list">예약 가능 시간</div></div>
        </div>
        <div class="time-wrap">
          <div class="input-wrap">
            <div class="div_hashtag div_hashtag1">
              <p id="pAdultText" class="p_add_price">성인</p>
              <button id="btnAdultPlus"class="button_x" onclick="btnPlusClick(document.getElementById('pAdultCount'))">+</button>
              <p id="pAdultCount"class="p_add_price p_add_price_right">0</p>
              <button id="btnAdultMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pAdultCount'))">-</button>
            </div>
            <div id="div_kids"class="div_hashtag">
              <p id="pChildrenText" class="p_add_price">어린이</p>
              <button id="btnChildrenPlus"class="button_x" onclick="btnPlusClick(document.getElementById('pChildrenCount'))">+</button>
              <p id="pChildrenCount"class="p_add_price p_add_price_right">0</p>
              <button id="btnChildrenMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pChildrenCount'))">-</button>
            </div>
            <div id="div_babys"class="div_hashtag">
              <p id="pBabyText" class="p_add_price">유아</p>
              <button id="btnBabyPlus" class="button_x" onclick="btnPlusClick(document.getElementById('pBabyCount'))">+</button>
              <p id="pBabyCount"class="p_add_price p_add_price_right">0</p>
              <button id="btnBabyMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pBabyCount'))">-</button>
            </div>
          </div>
        </div>
      </div>
      <div class="content-right">
        <table id="calendar" align="center">
          <thead>
            <tr class="btn-wrap clearfix">
              <td>
                <label id="prev">
                    &#60;
                </label>
              </td>
              <td align="center" id="current-year-month" colspan="5"></td>
              <td>
                <label id="next">
                    &#62;
                </label>
              </td>
            </tr>
            <tr>
                <td class = "sun" align="center">Sun</td>
                <td align="center">Mon</td>
                <td align="center">Tue</td>
                <td align="center">Wed</td>
                <td align="center">Thu</td>
                <td align="center">Fri</td>
                <td class= "sat" align="center">Sat</td>
              </tr>
          </thead>
          <tbody id="calendar-body" class="calendar-body"></tbody>
        </table>
             <button type="button" onclick="testbtn()" name="button">aaaaaaaaa</button>
      </div>
    </div>

    <div class="div_prv_next_button">
      <button class="button_next" type="button" name="button" onclick="nextPage('http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/reservation/reservation_second.php','?seller_num=<?= $seller_num ?>')">다음</button>
      <button class="button_prev" type="button" name="button" onclick="prevPage('http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/restaurants_index.php','?seller_num=<?= $seller_num ?>')">이전</button>
    </div>
