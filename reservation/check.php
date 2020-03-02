
<?php
  $seller_num=get('seller_num');

  $selectMenuTitle=get('selectMenuTitle');
  $select_menu_title =explode(',' , $selectMenuTitle);
  $cnt = count($select_menu_title);
  $selectMenuCount=get('selectMenuCount');
  $select_menu_count =explode(',' , $selectMenuCount);

  $total_price=get('totalPrice');


  function get($name){
    if (isset($_GET[$name])) {
        $get_result= $_GET[$name];
    } else {
        $get_result= '엥';
    }
    echo "get_result = ($get_result);";
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

                echo "<ul class=restaurant_keyword_list>";
                for ($i = 0; $i < 4; $i++) {
                    echo  "<li><i>" . $upso_keyword . "</<i></li>";
                } //end of for
                echo "</ul>";
                echo "</div>";

                echo "<div class=" . COMMON::$css_article_content_sub_title . ">";
                echo "<p>" . $upso_description . "</p>";
                echo "<a href=\"#\">식당에 문의하기</a>";
                echo "</div>";
                for($i = 0 ; $i < $cnt ; $i++){

                  echo($select_menu_title[$i] . "<br/>");
                  echo($select_menu_count[$i] . "<br/>");

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
