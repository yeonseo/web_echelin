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
          <?php
            $keywords_type ="food_class";
            $sql="select keywords from keyword_list where keywords_type like '%$keywords_type%'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_row($result);
            $keywods=$row[0];
            $keywords = explode(",","$keywods");
            for($i=0;$i<count($keywords);$i++){
              $value=$keywords[$i];
           ?>
            <li class="food_type_select" ><?=$value?></li>
           <?php
              }
            ?>
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

          <span class="search_title"> &nbsp;&nbsp;:::&nbsp;&nbsp;  추천 키워드로 찾아보세요!</span>

          <a href="index_search.php?keyword_banner=조용한">
              <div class="banner_content_first"><h3>#조용한</h2></div>
          </a>
          <a href="index_search.php?keyword_banner=혼밥">
              <div class="banner_content"><h3>#혼밥</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=편안한">
              <div class="banner_content"><h3>#편안한</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=데이트">
              <div class="banner_content"><h3>#데이트</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=아이와함께">
              <div class="banner_content"><h3>#아이와함께</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=푸짐한">
              <div class="banner_content"><h3>#푸짐한</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=코스요리">
              <div class="banner_content"><h3>#코스요리</h3></div>
          </a>
          <a href="index_search.php?keyword_banner=특별한날">
              <div class="banner_content"><h3>#특별한날</h3></div>
          </a>

      </div>
      <?php
        $result_search_title="";
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
          $result_search_title = "#".$r_name;
        }
        //식당종류값
        if(!empty($_POST["uptae"])){
          $uptae=$_POST["uptae"];
          Console_log($uptae);
          $ok[1]=true;
          $result_search_title .= "#".$uptae;
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
          $result_search_title .= $keywords_selected;
        }else{
          $ok[2]=false;
          $keywords_selected="";
        }
        //현제위치(지역구)
        if(!empty($_POST["gps_ad"])){
          $gps_ad=$_POST["gps_ad"];
          Console_log($gps_ad);
          $ok[3]=true;
          $result_search_title .= "#".$gps_ad;
        }else{
          $gps_ad="";
          $ok[3]=false;
        }


        //조건문걸어서 sql 확정 짓기 경우의수 12 개
        // 식당이름 = $r_name && 업태= $uptae && 키워드배열= $keywords_array && $gps_ad
        if($ok[0]==true&&$ok[1]==true&&$ok[2]==true&&$ok[3]==true){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql .= "and store_type like '%$uptae%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
          $sql .= "and store_address like '%$gps_ad%'";
          Console_log($sql);
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==true&&$ok[3]==false){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql .= "and store_type like '%$uptae%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
          Console_log($sql);
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==false&&$ok[3]==false){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql .= "and store_type like '%$uptae%'";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==false&&$ok[3]==false){
          $sql = "select * from seller where store_name like '%$r_name%'";
        }else if($ok[0]==true&&$ok[1]==false&0&$ok[2]==true&&$ok[3]==true){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
          $sql .= "and store_address like '%$gps_ad%'";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==false&&$ok[3]==true){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql .= "and store_address like '%$gps_ad%'";
        }else if($ok[0]==true&&$ok[1]==false&&$ok[2]==true&&$ok[3]==false){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
        }else if($ok[0]==true&&$ok[1]==true&&$ok[2]==false&&$ok[3]==true){
          $sql = "select * from seller where store_name like '%$r_name%'";
          $sql .= "and store_type like '%$uptae%'";
          $sql .= "and store_address like '%$gps_ad%'";

        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==true&&$ok[3]==false){
          $sql = "select * from seller where store_type like '%$uptae%'";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
          }
          $sql . $sql_keywords;
        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==false&&$ok[3]==false){
          $sql = "select * from seller where store_type like '%$uptae%'";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==false&&$ok[3]==false){
          $sql = "select * from seller";
        }else if($ok[0]==false&&$ok[1]==false&0&$ok[2]==true&&$ok[3]==true){
          $sql = "select * from seller";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            if($i == 0){
              $sql_keywords = "where keywords like '%$keywords_array[$i]%'";
            }else{
              $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
            }
          }
          $sql . $sql_keywords;
          $sql .= "and store_address like '%$gps_ad%'";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==false&&$ok[3]==true){
          $sql = "select * from seller where store_address like '%$gps_ad%'";
        }else if($ok[0]==false&&$ok[1]==false&&$ok[2]==true&&$ok[3]==false){
          $sql = "select * from seller";
          $sql_keywords="";
          for($i=0;$i < $key_count=count($keywords_array);$i++){
            if($i == 0){
              $sql_keywords = "where keywords like '%$keywords_array[$i]%'";
            }else{
              $sql_keywords .= "and keywords like '%$keywords_array[$i]%' ";
            }
          }
          $sql . $sql_keywords;
        }else if($ok[0]==false&&$ok[1]==true&&$ok[2]==false&&$ok[3]==true){
          $sql = "select * from seller where store_type like '%$uptae%'";
          $sql .= "and store_address like '%$gps_ad%'";
        }else{
          $sql = "select * from seller";
        }
        if(!empty($_GET["keyword_banner"])){
          $keyword_banner = $_GET["keyword_banner"];
          $sql = "select * from seller where keywords like '%$keyword_banner%'";
        }

        if(!$result_search_title){
          $result_search_title="모든식당";
        }
      ?>
      <div class="search_all">

          <span class="search_title">&nbsp;&nbsp;:::&nbsp;&nbsp; "<?=$result_search_title?>" 에 대한 모든 검색결과 입니다.</span>

          <div class="search_member">
              <?php

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_array($result)){

                  $seller_num=$row["seller_num"];
                  $store_name = $row["store_name"];
                  $store_address=$row["store_address"];
                  $store_type = $row["store_type"];
                  $tag_class = $row["keywords"];

              ?>
              <a class="search_member" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/restaurants_index.php?seller_num=<?=$seller_num?>">
                <div >
                  <h1 class="search_h1">
                  <p class="search_result_left">
                    <img src="./image/img.png" alt="">
                  </p>
                  <p class="search_result_right"><?=$store_name?></p>
                  </h1>
                  <ul>
                      <li><?=$store_type?></li>
                      <li><?=$tag_class?></li>
                      <li><?=$store_address?></li>
                  </ul>
                </div>
              </a>
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
