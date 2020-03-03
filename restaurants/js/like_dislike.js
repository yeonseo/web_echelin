function update_like(gbn, num) {

  $.ajax({
    type: 'GET',
    url: "review_chu.php?gbn="+gbn+"&num="+num,
    success: function(html){

      alert("좋아요가 반영되었습니다.");
       $('.like_count'+num).html('<img src="../user/image/like.png"> &nbsp;'+html);

   }
  });

}

function update_dislike(gbn, num) {

  $.ajax({
    type: 'GET',
    url: "review_chu.php?gbn="+gbn+"&num="+num,
    success: function(html){
      alert("싫어요가 반영되었습니다.");
       $('.dislike_count'+num).html('<img src="..user/image/dislike.png"> &nbsp;'+html);
   }
  });

}
