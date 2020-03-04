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

                  $file_name = $row['file_name'];
                  $file_type = $row['file_type'];
                  $file_copied = $row['file_copied'];

                  $store_name = $row['store_name'];
                  $introduction = $row['introduction'];
            ?>
                <a href="#">
                  <p class="summary_first">
                    <img src="../data/<?php echo $file_copied; ?>">
                      <span class="summary_span_first"><?php echo $store_name; ?></span>

                        <span class="summary_span_second"><?= $introduction?></span>

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

<!-- 테스트 ::: 오늘의 추천 키워드-->
<!-- <div class="main_banner">

    <span class="main_title" class="<?= COMMON::$css_sub_title; ?>">테스트 &nbsp;&nbsp;:::&nbsp;&nbsp; 오늘의 추천 키워드</span>

    <a href="#">
        <div class="banner_content_first">이미지 & 키워드1</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드2</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드3</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드4</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드5</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드6</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드7</div>
    </a>
    <a href="#">
        <div class="banner_content">이미지 & 키워드8</div>
    </a>

</div> -->

<!-- 테스트 ::: 모든 맛집-->
<div class="main_all">

    <span class="main_title" class="<?= COMMON::$css_sub_title; ?>">테스트 &nbsp;&nbsp;:::&nbsp;&nbsp; 모든 식당 : 무한스크롤 추가</span>

    <div class="all_member">
        <div class="all_content_first"></div>
        <div class="all_content"></div>
        <div class="all_content"></div>
        <div class="all_content"></div>
        <div class="all_content_second"></div>
        <div class="all_content"></div>
        <div class="all_content"></div>
        <div class="all_content"></div>

    </div>

</div>
