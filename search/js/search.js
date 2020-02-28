$(document).ready(function(){
  var $keyword_btn=$("#keyword_btn");
  var $keyword_header=$("#keyword_header");
  var count=0;
  //음식종류버튼변수
  var $food_type_btn=$("#food_type_btn");
  var $food_type_form=$(".food_type_form");
  var f_count=0;
  // 필터버튼클릭시
  $keyword_btn.click(function(){
    if(count==0){
      $keyword_header.slideDown(1000);
      count++;
    }else{
      $keyword_header.slideUp(1000);
      count=0;
    }
  });//필터버튼
  //음식종류버튼클릭시
  $food_type_btn.click(function(){
    if(f_count=0){
      $food_type_form.show("slow");
      f_count++;
    }else{
      $food_type_form.hide("slow");
      f_count=0;
    }
  });

  

});
