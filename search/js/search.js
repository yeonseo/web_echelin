$(document).ready(function(){
  var $keyword_btn=$("#keyword_btn");
  var $keyword_header=$("#keyword_header");
  var count=0;
  //식당종류버튼변수
  var $food_type_btn=$("#food_type_btn");
  var $food_type_form=$("#food_type_form");
  var f_count=0;
  var $food_type_select=$(".food_type_select");
  var selected_res=false;
  var select_restaurant="";
  var select_restaurant_name="";
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
  //식당 종류버튼클릭시
  $food_type_btn.click(function(){
    if(f_count==0){
      $food_type_form.css("display","block");
      f_count++;
    }else{
      $food_type_form.css("display","none");
      f_count=0;
    }
  });
  //식당선텍시
  $food_type_select.click(function(){
    if(selected_res==false){
      $(this).css("color","red");
      selected_res=true;
      //검색하는순간넘겨줄식당종류변수
      select_restaurant=$(this).attr('id');
      select_restaurant_name=$(this).text();
      $food_type_btn.text(select_restaurant_name);
    }else{

    }
  });


});//ready
