<?php
  $r_name=$_POST["r_name"];
  $keywords=$_POST["keywords"];
  $con = mysqli_connect("localhost", "root", "123456", "echelin");

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
    <script src="./js/search.js"></script>
    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
    </script>
    <script src="">

    </script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
    <section>

      <!-- 키워드테이블에서가져와서뿌리기 -->



      <div id="keyword_header" style=" display:none; position:relative;">
        <ul class="keywords">
          <li id="food_type_btn">식당종류</li>
          <li id="keyword_search_btn">#키워드로검색</li>
          <li id="gps_btn">현재위치에서검색</li>
        </ul>
      </div>
      <div id="food_type_form">
        <ul>
          <li class="food_type_select" id="korean_res">한식당</li>
          <li class="food_type_select" id="japaness_res">일식당</li>
          <li class="food_type_select" id="chiness_res">중식당</li>
          <li class="food_type_select" id="italy_res">이태리식당</li>
          <li class="food_type_select" id="meat_res">고깃집</li>
          <li class="food_type_select" id="fish_res">횟집</li>
          <li class="food_type_select" id="driver_res">기사식당</li>
          <li class="food_type_select" id="cafe">카페</li>
          <li class="food_type_select" id="buffet">뷔페</li>
          <li class="food_type_select" id="snack_shop">분식집</li>
          <li class="food_type_select" id="bakery">제과점</li>
          <li class="food_type_select" id="bar">술집</li>
          <li id="food_type_select_save">저장</li>
          <li id="food_type_select_delete">지우기</li>
        </ul>
      </div>
      <!-- 많이검색된키워드db에서가져와서정렬 -->
      <div class="search_banner">

          <span class="search_title">테스트 &nbsp;&nbsp;:::&nbsp;&nbsp; 이 키워드는 어떠세요?</span>

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

      <div class="search_all">

          <span class="search_title">테스트 &nbsp;&nbsp;:::&nbsp;&nbsp; "<?=$r_name?>" 에 대한 모든 검색결과 입니다. 무한 스크롤</span>

          <div class="search_member">
              <?php
                $sql = "select upso_nm, snt_uptae_nm, tag_class from keyword_restaurant where upso_nm like '%$r_name%'";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                  $upso_nm = $row["upso_nm"];
                  $snt_uptae_nm = $row["snt_uptae_nm"];
                  $tag_class = $row["tag_class"];

              ?>
              <div class="">
                <ul>
                  <li><?=$upso_nm?></li>
                  <li><?=$snt_uptae_nm?></li>
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
