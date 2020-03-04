<div class="main_center">

    <!-- 테스트 ::: 직접 인증한 베스트 후기 -->
    <div class="main_comment">
        <span class="main_title" class="<?= COMMON::$css_sub_title; ?>">베스트 후기 &nbsp;&nbsp;:::&nbsp;&nbsp; 직접 인증한 베스트 후기</span>
        <div class="best_comment">
            <div class="best_comment_first">
                <a href="#">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_1.jpg">
                </a>

                <div class="comment_content">
                    <a href="#">
                        <span class="comment" class="<?= COMMON::$css_content; ?>">
                            <br>
                            Let it be forgotten as a flow'r is forgotten,
                            Forgotten as a fire that once was singing gold.
                        </span>
                    </a>
                </div>

                <div class="content_profile">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg">
                </div>

                <div class="content_profile_info">
                    <span class="<?= COMMON::$css_strong_content; ?>">이무권 (mu3386)</span>
                    <br>
                    <span class="<?= COMMON::$css_content; ?>">한국</span>
                </div>

            </div>

            <div class="best_comment_second">

                <a href="#">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_2.jpg">
                </a>

                <div class="comment_content">
                    <a href="#">
                        <span class="comment" class="<?= COMMON::$css_content; ?>">
                            <br>
                            Time is a kind friend, he will make us old.
                            If anyone should ask say it was forgotten,
                            Long and long ago.
                        </span>
                    </a>
                </div>

                <div class="content_profile">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu2.jpg" alt="">
                </div>

                <div class="content_profile_info">
                    <span>남연서 (#)</span><br>
                    한국
                </div>

            </div>
            <div class="best_comment_third">

                <a href="#">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/review_3.jpg">
                </a>

                <div class="comment_content">
                    <a href="#">
                        <span class="comment" class="<?= COMMON::$css_content; ?>">
                            <br>
                            Time is a kind friend, he will make us old.
                            If anyone should ask say it was forgotten,
                            Long and long ago.
                        </span>
                    </a>
                </div>

                <div class="content_profile">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu3.jpg" alt="">
                </div>

                <div class="content_profile_info">
                    <span>김지수 (#)</span><br>
                    한국
                </div>
            </div>
        </div> <!-- end of best_comment -->

    </div>

    <!-- 테스트 ::: 최고의 평가를 받은 맛집 -->
    <div class="main_best_score">
        <span class="main_title" class="<?= COMMON::$css_sub_title; ?>">테스트 &nbsp;&nbsp;:::&nbsp;&nbsp; 광고 배너</span>
        <span class="main_title_sub">최신으로 홍보된 식당들을 만나보세요.</span>

        <div class="slideshow">

          <div class="slideshow_slides">

            <?php
           	$con = mysqli_connect("localhost", "root", "123456", "echelin");
            $sql    = "select * from advertise order by num asc";
            $result = mysqli_query($con, $sql);

            for($i = 0 ; $i < 5 ; $i++){

        ?>

            <div class="center_summary">

            <?php

                for($j = 0 ; $j < 4 ; $j++){

                  $row = mysqli_fetch_array($result);

                  $seller_num = $row['seller_num'];
                  $file_copied = $row['file_copied'];
                  $store_name = $row['store_name'];
                  $introduction = $row['introduction'];
            ?>
                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/restaurants_index.php?seller_num=<?=$seller_num?>">
                  <p class="summary_first">
            <?php
              if($row === null){
            ?>
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/image/4.jpg">
                      <span class="slide_span_fourth">광고를 등록해주세요.</span>
                      <span class="slide_span_second"><?= $introduction?></span>
            <?php
              }else{
            ?>
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$file_copied?>">
                      <span class="slide_span_first">#<?= $store_name?></span>
                      <span class="slide_span_second"><?= $introduction?></span>

              <?php
              }
              ?>
                  </p>
                </a>
            <?php
                }
            ?>
            </div>

      <?php
          }
          mysqli_close($con);
      ?>

          </div>

          <div class="slideshow_nav">

            <a href="#" class="prev">prev</a>
            <a href="#" class="next">next</a>

          </div>

          <div class="slideshow_indicator">

            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>

          </div>

        </div>
    </div>

</div>


<!-- 테스트 ::: 모든 맛집-->

<div class="main_all">

    <span class="main_title" class="<?= COMMON::$css_sub_title; ?>">테스트 &nbsp;:::&nbsp; echelin의 모든 식당 내역입니다.</span>

<?php
  $con = mysqli_connect("localhost", "root", "123456", "echelin");
  $sql    = "select * from seller order by seller_num asc limit 8";
  $result = mysqli_query($con, $sql);

?>
  <div class="search_member">
<?php

  while($row = mysqli_fetch_array($result)){

    $seller_num = $row['seller_num'];
    $store_name = $row['store_name'];
    $introduction = $row['introduction'];

    $sql2    = "select * from store_img where seller_num='$seller_num' order by num asc limit 1";
    $result2 = mysqli_query($con, $sql2);

    while($row2 = mysqli_fetch_array($result2)){

      $store_file_copied = $row2['store_file_copied'];

  ?>
        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/restaurants/restaurants_index.php?seller_num=<?=$seller_num?>">
          <p class="summary_first">
            <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/seller/storeImg/<?=$store_file_copied?>">
              <span class="summary_span_first">#<?= $store_name ?></span>
              <span class="summary_span_second"><?= $introduction ?></span>
          </p>
        </a>
  <?php
      }
    }
      mysqli_close($con);
  ?>

    </div>
  </div>
