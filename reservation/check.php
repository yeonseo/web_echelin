
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

  $insert_menu = $selectMenuTitle.",".$selectMenuCount;

  function get($name){
    if (isset($_GET[$name])) {
        $get_result= $_GET[$name];
    } else {
        $get_result= '엥';
    }
    return $get_result;
  }


 ?>
 <form action="reservation_db_insert.php" name="dbinput" method="post">


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
                $upso_description = $result_restaurant['introduction'];
                $upso_intensity_of_reserv = $result_restaurant['intensity_of_reserv'];
                $upso_seller_user_id = $result_restaurant['user_id'];












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
                echo  "<li><i class=\"fas fa-hashtag\"></i><h2>예약자 정보 확인</h2></<i></li>";
                echo "</ul>";

                echo("<h4>예약자 이름</h4>".$user_name. "<br/><br/>");
                echo("<h4>예약자 E-Mail</h4>".$user_email. "<br/><br/>");
                echo("<h4>예약자 연락처</h4>".$user_phone. "<br/><br/>");

                echo("<input type='text' name='seller_num' value=".$seller_num ." hidden>");
                echo("<input type='text' name='upso_nm' value='".$upso_nm ."' hidden>");
                echo("<input type='text' name='upso_description' value='".$upso_description ."' hidden>");
                echo("<input type='text' name='user_email' value='".$user_email ."' hidden>");
                echo("<input type='text' name='upso_seller_user_id' value='".$upso_seller_user_id ."' hidden>");
                echo("<input type='text' name='date_result' value='".$date_result ."' hidden>");
                echo("<input type='text' name='time_result' value='".$time_result ."' hidden>");
                echo("<input type='text' name='person' value='".$person ."' hidden>");
                echo("<input type='text' name='insert_menu' value='".$insert_menu ."' hidden>");
                echo("<textarea name='text_spcial' class='validate[required,length[6,300]] feedback-input' id='comment' placeholder='점주에게 전달하고 싶은 말씀이 있으신가요?'></textarea>");
                echo("<input type='text' name='upso_intensity_of_reserv' value='".$upso_intensity_of_reserv."' hidden>");

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
                  echo(" ".$select_menu_count[$i] . "개<br/><br/>");

                }
                echo("총 금액 : ".$total_price. "원<br>");
                echo "<ul class=restaurant_keyword_list>";
                echo  "<li><i class=\"fas fa-hashtag\"></i><h2>결제</h2></<i></li>";
                echo "</ul>";

                //결제
                ?>
                <script>


                    var cntstr;
                    if(<?=$cnt?>==1){
                      cntstr = "";
                    }else{
                      cntstr = " 외 <?=$cnt?>개 품목 ";
                    }
                    function kakaopay(){
                        var IMP = window.IMP; // 생략가능
                        IMP.init('imp82173364'); // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
                        var msg;

                        IMP.request_pay({
                            pg : 'kakaopay',
                            pay_method : 'card',
                            merchant_uid : 'merchant_' + new Date().getTime(),
                            name : '<?=$select_menu_title[0]?>'+cntstr,
                            amount : '<?=$total_price?>',
                            buyer_email : '<?=$user_email?>',
                            buyer_name : '<?=$user_name?>',
                            buyer_tel : '<?=$user_phone?>',
                            //m_redirect_url : 'http://www.naver.com'
                        }, function(rsp) {
                            if ( rsp.success ) {
                                //[1] 서버단에서 결제정보 조회를 위해 jQuery ajax로 imp_uid 전달하기
                                jQuery.ajax({

                                }).done(function(data) {
                                    //[2] 서버에서 REST API로 결제정보확인 및 서비스루틴이 정상적인 경우
                                    if ( everythings_fine ) {
                                        msg = '결제가 완료되었습니다.';
                                        msg += '\n고유ID : ' + rsp.imp_uid;
                                        msg += '\n상점 거래ID : ' + rsp.merchant_uid;
                                        msg += '\결제 금액 : ' + rsp.paid_amount;
                                        msg += '카드 승인번호 : ' + rsp.apply_num;

                                        alert(msg);
                                    } else {
                                        //[3] 아직 제대로 결제가 되지 않았습니다.
                                        //[4] 결제된 금액이 요청한 금액과 달라 결제를 자동취소처리하였습니다.
                                    }
                                });
                                //성공시 이동할 페이지
                                reservation_submit();
                            } else {
                                msg = '결제에 실패하였습니다.';
                                msg += '에러내용 : ' + rsp.error_msg;
                                //실패시 이동할 페이지
                                alert(msg);
                            }
                        });

                    }
                    function reservation_submit(){
                      document.dbinput.submit();
                    }
                    function kginicis(){
                        var IMP = window.IMP; // 생략가능
                        IMP.init('imp01674742'); // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
                        IMP.request_pay({
                          pg : 'html5_inicis', // version 1.1.0부터 지원.
                          pay_method : 'card',
                          merchant_uid : 'merchant_' + new Date().getTime(),
                          name : '<?=$select_menu_title[0]?>'+cntstr,
                          amount : '<?=$total_price?>',
                          buyer_email : '<?=$user_email?>',
                          buyer_name : '<?=$user_name?>',
                          buyer_tel : '<?=$user_phone?>',
                          m_redirect_url : 'https://www.my-service.com/payments/complete/mobile'
                      }, function(rsp) {
                          if ( rsp.success ) {
                              var msg = '결제가 완료되었습니다.';
                              msg += '고유ID : ' + rsp.imp_uid;
                              msg += '상점 거래ID : ' + rsp.merchant_uid;
                              msg += '결제 금액 : ' + rsp.paid_amount;
                              msg += '카드 승인번호 : ' + rsp.apply_num;
                              location.href="./kakaopay.php";

                          } else {
                              var msg = '결제에 실패하였습니다.';
                              msg += '에러내용 : ' + rsp.error_msg;
                          }
                          alert(msg);
                          //성공시 이동할 페이지
                          reservation_submit();
                      });
                    }
                    </script>

                <?php
                echo "<button type='button' name='button' onclick='reservation_submit()'>KakaoPay 결제하기</button>";
                echo "<button type='button' name='button' onclick='kginicis()'>KG이니시스 결제하기</button>";
                //결제 끝

                echo "</div>";
                echo "</div> <!-- end of css_article_content_box -->";
            ?>

        </div><!-- end of restaurants_center_content -->

    </div><!-- end of restaurants_main_content_box -->

</div><!-- end of restaurants_content -->
 </form>
