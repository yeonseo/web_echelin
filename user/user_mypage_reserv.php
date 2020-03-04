
<?php
  // session_start();
  if (isset($_SESSION["user_Email"])){
     $user_email = $_SESSION["user_Email"];
  }
  else {
    // 없으면 테스트용!!!
    $user_email = "k@naver.com";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_mypage_reserv.css">

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/echelin/reservation/reserved_db.php";
    ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">

      function delete_reservation(reservation_num){

          location.href="../reservation/reserved_db_delete.php?reservation_num="+reservation_num;

        }

    </script>

  </head>
  <body>

    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>

    <section>

      <div class="my_info_content">

        <div class="left_menu">

            <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/user/user_side_left_menu.php"; ?>
        </div>

        <div class="right_content">

          <div class="container">

          <div class="my_comment_title">
            <span class="comment_title_sub">마이 페이지 &nbsp&nbsp > &nbsp&nbsp 예약 내역</span><br><br>
            <span class="comment_title_main">내 예약 현황</span>
          </div>

          <div class="div_section">


            <div class="show_main">

              <div class="show_basic">




                <?php
                  if ($rowcnt==0) {
                    ?>
                      <div class="show_no">
                        <span class="no_span">다녀오거나 예약한 가게가 없어요.</span>
                      </div>
                    <?php
                  }else{
                    for($i = 0 ; $i < $cnt ; $i++ ){
                      echo "<div class='show_element'>";

                            echo "<img src='../seller/storeImg/".$store_file_copied[$i]."'>";
                              echo "<div class='element_main'>";
                                echo "<span class='span_first'>가게 이름 ::: ".$store_name[$i]."</span>";
                                echo "<span class='span_second'>가게 소개 ::: ".$introduction[$i]."</span>";
                                echo "<span class='span_third'>예약 날짜 ::: ".$select_date[$i]."</span>";
                              echo "</div>";

                              echo "<div class='show_btn_div'>";
                                if($cancel[$i]==null){
                                  echo "<span> 예약 완료 ···</span>";
                                }else if($cancel[$i]==1){
                                  echo "<span class='orangered'> 예약 취소 ···</span>";
                                }else if($cancel[$i]==0){
                                  echo "<span class='darkorange'> 방문 완료 ···</span>";
                                }
                                echo "<label class='btn' for='open-pop".$i."'>상세 확인</label>";
                                if($cancel[$i]==null){
                                echo "<label class='btn' for='open-cancel".$i."'>예약 취소</label>";
                                }

                              echo "</div>";

                        echo "</div>";
                    }
                  }

                 ?>



              </div>
            </div>

             <!--<div class="show_element">
              <img src="./img/best_1.jpg">

              <div class="element_main">
                <span class="span_first">가게 이름 ::: 맛나곱창</span>
                <span class="span_second">가게 소개 ::: 왕십리 곱창 최고의 맛집</span>
                <span class="span_third">가게 주소 ::: 서울특별시 성동구 홍익동 130-1</span>
              </div>

              <div class="show_btn_div">
                <span>예약 현황란 ···</span>
                <button class='btn_reserv'>예약 정보</button>
                <button class='btn_review'>후기 남기기</button>
              </div>

            </div>-->


            </div> <!-- div_section -->
          </div><!-- container -->
        </div><!-- right_content -->
      </div><!-- my_info_content -->
      <?php
        $menu=[];

        for($i = 0 ; $i < $cnt ; $i++){

          $person_array=explode(',' ,$select_person[$i]);
          $person="성인 : ".$person_array[0]."명";
          $person.=" , 어린이 : ".$person_array[1]."명";
          $person.=" , 유아 : ".$person_array[2]."명";


          $menu_for_cnt=0;
          $menu_array=explode(',' ,$select_menu[$i]);

          for($j = 0 ; $j < count($menu_array) ; $j++){
            if($j%2==0){
              $menu[$menu_for_cnt]=$menu_array[$j];
            }else{
              $menu[$menu_for_cnt].=" &nbsp".$menu_array[$j]."개";
              $menu_for_cnt++;
            }
          }



           // 예약 상세 팝업

          echo "<input class='modal-state' id='open-pop".$i."' type='checkbox' />";
          echo "<div class='modal'>";
          echo "  <label class='modal_bg' for='open-pop".$i."'></label>";
          echo "  <div class='modal_inner'>";
          echo "    <label class='modal_close' for='open-pop".$i."'></label>";

          echo "<div class='reservation_info'>";
          echo "    <h2 class='pophead2'>".$store_name[$i]."</h2>";
          echo "</div>";
          echo "<h3 class='pophead3'>예약 날짜</h3>";
          echo "<p class='pinpo'>".$select_date[$i]."</p>";
          echo "<h3 class='pophead3'>예약 시간</h3>";
          echo "<p class='pinpo'>".$select_time[$i]."</p>";
          echo "<h3 class='pophead3'>예약 인원</h3>";
          echo "<p class='pinpo'>".$person."</p>";
          echo "<h3 class='pophead3'>예약 메뉴</h3>";
          for($l=0;$l<count($menu);$l++){
            echo "<p class='pinpo'>".$menu[$l]."</p>";
          }
          echo "</div>";
          echo "</div>";
          // 예약 상세 팝업
           // 예약 취소 팝업

          echo "<input class='modal-state' id='open-cancel".$i."' type='checkbox' />";
          echo "<div class='modal'>";
          echo "  <label class='modal_bg' for='open-cancel".$i."'></label>";
          echo "  <div class='modal_inner modal_cancel_inner'>";
          echo "    <label class='modal_close' for='open-cancel".$i."'></label>";
          echo "    <h2 class='pophead'>취소 하시겠습니까?</h2>";
          echo "    <label class='btn btn_cancel' onclick='delete_reservation(".$reservation_num[$i].")'>취소하겠습니다</label>";
          echo "  </div>";
          echo "</div>";
           // 예약 취소 팝업

        }







       ?>
    </section>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>

  </body>
</html>
