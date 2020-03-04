<?php
  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  function Console_log($data){
    echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
  }

?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 타이틀 변수를 부르기 위해 common_class_value.php를 부르고 선언함 -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c11a81c292903d8730cb3759c77d4983&libraries=services,clusterer,drawing"></script>

    <script src="./js/search.js"></script>
    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
    </script>

</head>

<body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
    <section>

      <!-- 키워드테이블에서가져와서뿌리기 -->
      <!-- 값가져와서 explode(",","자를값") 자르고 배열로만드면됨 -->


      <div id="keyword_header" style=" display:none; position:relative;">
        <ul class="keywords">
          <li id="food_type_btn">식당종류</li>
          <li id="keyword_search_btn">#키워드로검색</li>
          <li id="gps_btn">현재위치에서검색</li>
        </ul>
      </div>
      <!-- 식당종류 -->
      <div id="food_type_form">
        <ul>
          <li class="food_type_select" >한식</li>
          <li class="food_type_select" >까페</li>
          <li class="food_type_select" >호프</li>
          <li class="food_type_select" >통닭(치킨)</li>
          <li class="food_type_select" >일식</li>
          <li class="food_type_select" >중국식</li>
          <li class="food_type_select" >분식</li>
          <li class="food_type_select" >패스트푸드</li>
          <li class="food_type_select" >경양식</li>
          <li class="food_type_select" >뷔페</li>
          <li class="food_type_select" >소주방</li>
          <li class="food_type_select" >식육(숯불구이)</li>
          <li class="food_type_select" >회집</li>
          <li class="food_type_select" >이동조리</li>
          <li class="food_type_select" >외국음식전문점</li>
          <li class="food_type_select" >기타</li>
          <li id="food_type_select_delete">지우기</li>
        </ul>
      </div>
      <!-- 키워드 -->
      <div id="keyword_search_form">
        <ul>
          <?php
            $keywords_type = "tag_class";
            $sql="select keywords from keyword_list where keywords_type like '%$keywords_type%'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_row($result);
            $keywods=$row[0];
            $keywords = explode(",","$keywods");
            for($i=0;$i<count($keywords);$i++){
              $value=$keywords[$i];
           ?>
              <li class="keywords_select">#<?=$value?></li>
           <?php
            }


            ?>
            <li id="keywords_select_delete">지우기</li>
        </ul>
      </div>
      <!-- 많이검색된키워드db에서가져와서정렬 -->
      <div class="search_banner">

          <span class="search_title"> &nbsp;&nbsp;:::&nbsp;&nbsp; 주변식당을 추천 키워드로 찾아보세요!</span>

          <a href="#">
              <div class="banner_content_first"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>
          <a href="#">
              <div class="banner_content"></div>
          </a>

      </div>
      <?php
        //넘어오는키워드들저장할변수
        $keywodrs_array="";
        //레스토랑이름,식당종류,키워드,현재위치(지역구) 값이있는지없는지여부판단해서 sql 작성
        $ok=array(false,false,false,false);

        //레스토랑이름값
        if(empty($_POST["r_name"])){
          $r_name="";
          $ok[0]=false;
        }else{
          $r_name=$_POST["r_name"];
          Console_log($r_name);
          $ok[0]=true;
        }
        //식당종류값
        if(!empty($_POST["uptae"])){
          $uptae=$_POST["uptae"];
          Console_log($uptae);
          $ok[1]=true;
        }else{
          $ok[1]=false;
          $uptae="";
        }
        //넘어온키워드들 # 으로 짤라서 배열에 저장
        if(!empty($_POST["keywords"])){
          $keywords_selected=$_POST["keywords"];
          //ex)#키워드#키워드#키워드 이기 떄문에 맨앞#은 제거한다
          $result_keyword = substr($keywords_selected,1);
          $keywords_array = explode("#","$result_keyword");
          Console_log($keywords_array[0]);
          $ok[2]=true;
        }else{
          $ok[2]=false;
          $keywords_selected="";
        }
        //현제위치(지역구)
        if(!empty($_POST["gps_ad"])){
          $gps_ad=$_POST["gps_ad"];
          Console_log($gps_ad);
          $ok[3]=true;
        }else{
          $gps_ad="";
          $ok[3]=false;
        }


        //조건문걸어서 sql 확정 짓기 경우의수 12 개
        // 식당이름 = $r_name && 업태= $uptae && 키워드배열= $keywords_array && $gps_ad
        if($ok[0]==true&&$ok[1]==true&&$ok[2]==true&&$ok[3]==true){
          $sql = "select * from seller_keyword where seller_name like '%$r_name%'";
          $sql .= "and seller_uptae_nm like '%$uptae%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and tag_class like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
          $sql .= "and seller_address like '%$gps_ad%'";
          Console_log($sql);
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==true&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==false&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==false&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==false&0&$ok[2]==true&&$ok[3]==true){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==false&&$ok[3]==true){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==true&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==false&&$ok[3]==true){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==true&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==false&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==false&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==false&0&$ok[2]==true&&$ok[3]==true){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==false&&$ok[3]==true){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==true&&$ok[3]==false){
          $sql = "";
        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==false&&$ok[3]==true){
          $sql = "";
        }else{
          $sql = "select * from seller_keyword";
        }

      ?>
      <div class="search_all">

          <span class="search_title">&nbsp;&nbsp;:::&nbsp;&nbsp; "<?=$r_name?>","<?=$uptae?>","<?=$keywords_selected?>","<?=$gps_ad?>" 에 대한 모든 검색결과 입니다.</span>

          <div class="search_member">
              <?php

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_array($result)){
                  $num=$row["num"];
                  $seller_num=$row["seller_num"];
                  $seller_name = $row["seller_name"];
                  $seller_address=$row["seller_address"];
                  $seller_uptae_nm = $row["seller_uptae_nm"];
                  $tag_class = $row["tag_class"];

              ?>
              <div class="">
                <ul>

                    <li><?=$num?></li>
                    <li><?=$seller_num?></li>
                    <li><a href="../restaurants/restaurants_index.php?seller_num=<?=$seller_num?>"
                      ><?=$seller_name?></a></li>
                    <li><?=$seller_address?></li>
                    <li><?=$seller_uptae_nm?></li>
                    <li><?=$tag_class?></li>

                </ul>
              </div>

              <?php
                }
                mysqli_close($con);
               ?>
            </div><!-- end of search_member -->

      </div>

    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>
</body>

</html>
