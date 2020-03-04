<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Echelin 유저 후기 폼</title>

  </head>
  <body>

    <main>

      <div class="user_comment_title">
          <span>게스트 후기</span>

          <p class="star_rating">
              <a href="#" class="on">★</a>
              <a href="#" class="on">★</a>
              <a href="#" class="on">★</a>
              <a href="#">★</a>
              <a href="#">★</a>
          </p>
      </div>

      <div class="user_comment">

<?php
  define('SCALE', 10);

  $user_name = "이무권";

	if (isset($_GET["page"])) // 넘어온 get방식에 키값 page가 세팅되어있느냐. 없으면 post. 굳이 이렇게 쓰는것은 어디선가 get방식으로 보내겠다는 뜻.
		$page = $_GET["page"];
	else
		$page = 1;

    if (isset($_GET["nowpagelist"])){
      $now_page_list = $_GET["nowpagelist"];
      $first_num=$now_page_list-9;
    }else{
      $now_page_list=10;
      $first_num=1;
    }

	$con = mysqli_connect("localhost", "root", "123456", "echelin");
	$sql = "select * from test_board order by num asc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수 // 레코드셋 개수체크함수

	$scale = 5;

	// 전체 페이지 수($total_page) 계산
	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	// 표시할 페이지($page)에 따라 $start 계산
	$start = ($page - 1) * $scale;

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){

      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
      $num = $row["num"];
  	  $name = $row["name"];
      $regist_day = $row["regist_day"];
      $content = $row["content"];
      $chu_up = $row["chu_up"];
      $chu_down = $row["chu_down"];

?>
    <div class="user_comment_content">

      <div class="comment_profile_img">
          <img src="./image/2020_02_27_07_32_34.jpg">
      </div>

      <div class="comment_profile_name">
          <a href="#"><span><strong><?=$name?></strong> · &nbsp;<?=$regist_day?></span></a>
          <p class="star_rating_content">
              <a href="#" class="on">★</a>
              <a href="#" class="on">★</a>
              <a href="#" class="on">★</a>
              <a href="#">★</a>
              <a href="#">★</a>
          </p>
      </div>

      <div class="comment_line">
          <span><?=$content?></span>
      </div>

      <div class="div_chu_box">

        <div class="div_chu">
          <!-- <img src="./img/like.png" onclick="update_chu('up','<?=$num?>')"> &nbsp; <?=$chu_up?> &nbsp;
          <img src="./img/dislike.png" onclick="update_chu('down','<?=$num?>')"> &nbsp; <?=$chu_down?> &nbsp; -->
          <div id="like_count" class="like_count<?php echo $num;?>" onclick="update_like('up','<?=$num?>', <?=$user_name?>)"><img src="./image/like.png"> &nbsp;<?=$chu_up?></div>
          <div id="dislike_count" class="dislike_count<?php echo $num;?>" onclick="update_dislike('down','<?=$num?>')"><img src="./image/dislike.png"> &nbsp;<?=$chu_down?></div>

        </div>

      </div>

<?php
   	   $number--;
   }
   mysqli_close($con);

?>

      <div class="page_line">

        <ul class="page_num">


        <?php
        $now_page_list_add=$now_page_list;
          if ($total_page>=2 && $page >= 2)
          {
            $new_page = $page-1;

            if($page>10){
                $now_page_list_minas=$now_page_list-10;
                $next_new_page=$now_page_list_minas-1;
                echo "<li><a href='user_review.php?page=$next_new_page&nowpagelist=$now_page_list_minas'>◀◀&nbsp;</a> </li>";
            }
            if(($new_page)==($now_page_list_add-10)){

                $new_page=$now_page_list_add-11;
                $now_page_list_add-=10;
              echo "<li><a href='user_review.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;◀&nbsp;</a> </li>";
            }else{
              echo "<li><a href='user_review.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;◀&nbsp;</a> </li>";
            }
          }
          else
            echo "<li>&nbsp;</li>";

            // 게시판 목록 하단에 페이지 링크 번호 출력
            for ($i=$first_num;$i<$now_page_list; $i++)
            {
            if ($page == $i)     // 현재 페이지 번호 링크 안함
            {
              echo "<li><b>&nbsp;$i&nbsp;</b></li>";
            }
            else
            {
              echo "<li><a href='user_review.php?page=$i&nowpagelist=$now_page_list'>&nbsp;$i&nbsp;</a><li>";
            }
            }
            if ($total_page>=2 && $page != $total_page)
            {
            $new_page = $page+1;




            if (($now_page_list_add-1)==$page) {
              $new_page=$now_page_list_add+1;
              $now_page_list_add+=10;
              echo "<li><a href='user_review.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;▶</a> </li>";
            }else{
              echo "<li><a href='user_review.php?page=$new_page&nowpagelist=$now_page_list_add'>&nbsp;▶</a> </li>";
            }


            // echo "<li> <a href='comment_list.php?page=$new_page&nowpagelist=$now_page_list'>▶&nbsp;</a> </li>";

            if($now_page_list+10<floor($total_record/SCALE)){
              $now_page_list_add=$now_page_list+10;
              $next_new_page=$now_page_list+1;
              echo "<li> <a href='user_review.php?page=$next_new_page&nowpagelist=$now_page_list_add'>&nbsp;▶▶</a> </li>";
            }
          }
          else
            echo "<li>&nbsp;</li>";
        ?>
        </ul> <!-- page num -->

    </div> <!-- end of user_comment -->

    </main>

  </body>
</html>
