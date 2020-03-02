
<?php


  //세션에 있는 클라이언트 아이디
  $user_email="libero@natoquepenatibuset.co.uk";

  //
  $seller_num=get('seller_num');

  $selectMenuTitle=get('selectMenuTitle');
  $select_menu_title =explode(',' , $selectMenuTitle);
  $cnt = count($select_menu_title);
  $selectMenuCount=get('selectMenuCount');
  $select_menu_count =explode(',' , $selectMenuCount);

  $total_price=get('totalPrice');
  $date_result=get('date_result');
  $time_result=get('time_result');
  $person=get('person');
  $person_array=explode(',' , $person);



  function get($name){
    if (isset($_GET[$name])) {
        $get_result= $_GET[$name];
    } else {
        $get_result= '엥';
    }
    echo "get_result = ($get_result)<br>";
    return $get_result;
  }


 ?>
<div class="restaurants_content">

    <div class="restaurants_main_content_box">


        <div class="restaurants_center_content">
          <?php




                $sql = "select * from " . $dbname . ".seller where seller_num=" . $seller_num;
                $result = $con->query($sql);
                if ($result === FALSE) {
                    die('DB seller Connect Error: ' . mysqli_error($con));
                }

                $result_restaurant = mysqli_fetch_array($result);

                // 디비에서 상점 데이터를 가지고 와서 만들어줄것
                // 일단 임시값
                $upso_nm = $result_restaurant['store_name'];
                $upso_keyword = '이거슨 키워드';
                $upso_description = $result_restaurant['introduction'];
                $upso_facilities = explode(',', $result_restaurant['convenient_facilities']);

                $sql1 = "select * from " . $dbname . ".echelin_user where `user_Email`='" . $user_email. "'";
                $result1 = $con->query($sql1);
                if ($result1 === FALSE) {
                    die('DB seller Connect Error: ' . mysqli_error($con));
                }

                $result_echelin_user = mysqli_fetch_array($result1);

                // 디비에서 상점 데이터를 가지고 와서 만들어줄것
                // 일단 임시값
                $user_name = $result_echelin_user['user_name'];
                $user_phone = $result_echelin_user['user_phone'];


                echo "user_phone = ($user_phone)<br>";
                echo "user_name = ($user_name)<br>";



                // 다차원 배열 반복처리 (필요시 사용)
                ini_set('memory_limit', '-1');

                if (json_last_error() > 0) {
                    echo json_last_error_msg() . PHP_EOL;
                }

                //print_r($result_json);
                //print_r($sub_json_object_array); // 배열 요소를 출력해준다.


                echo "<div class=" . COMMON::$css_article_content_box . ">";

                echo "<div class=" . COMMON::$css_article_content_title . ">";
                echo "<h1>" . $upso_nm . "</h1>";
                echo "<p>" . $upso_description . "</p>";



                echo "<ul class=restaurant_keyword_list>";
                echo  "<li><i class=\"fas fa-hashtag\"></i><h2>예약자</h2></<i></li>";
                echo "</ul>";

                echo("<h4>예약자 이름</h4>".$user_name. "<br/><br/>");
                echo("<h4>예약자 E-Mail</h4>".$user_email. "<br/><br/>");
                echo("<h4>예약자 연락처</h4>".$user_phone. "<br/><br/>");





                echo "<ul class=restaurant_keyword_list>";
                echo  "<li><i class=\"fas fa-hashtag\"></i><h2>예약 정보 확인</h2></<i></li>";
                echo "</ul>";
                echo "</div>";

                echo("<h4>예약 날짜</h4>".$date_result. "<br/>");
                echo("<h4>예약 시간</h4>".substr($time_result,0,2). "시 정각<br/>");
                echo("<h4>예약 인원</h4>");
                echo("성인 : ".$person_array[0]. "명 , ");
                echo("어린이 : ".$person_array[1]. "명 , ");
                echo("유아 : ".$person_array[2]. "명<br>");

                echo("<h4>예약 메뉴</h4>");
                for($i = 0 ; $i < $cnt ; $i++){

                  echo($select_menu_title[$i]);
                  echo(" ".$select_menu_count[$i] . "개<br/>");

                }




                echo "<div class=" . COMMON::$css_card_menu_btn_disc . ">";
                echo "<h3>편의시설</h3>";
                echo "<ul class=restaurant_facilities_list>";
                for ($i = 0; $i < count($upso_facilities); $i++) {
                    echo  "<li><i class=\"fas fa-hashtag\"></i>" . $upso_facilities[$i] . "</<i></li>";
                } //end of for
                echo "<a href=\"#\">편의시설 모두보기</a>";
                echo "</ul>";

                echo "</br>무권아 코맨드 집어넣어죠오오오오ㅓㅏㅁㅊ핀엎 ㅗ민어푸니</br>";
                echo "</i> ";
                echo "</div>";
                echo "</div> <!-- end of css_article_content_box -->";
            ?>

        </div><!-- end of restaurants_center_content -->

    </div><!-- end of restaurants_main_content_box -->

</div><!-- end of restaurants_content -->
