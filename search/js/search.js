$(document).ready(function(){
  var $keyword_btn=$("#keyword_btn");
  var $keyword_header=$("#keyword_header");
  var count=0;
  //식당종류버튼변수
  var $food_type_btn=$("#food_type_btn");
  var $food_type_form=$("#food_type_form");
  var f_count=0;
  var $food_type_select=$(".food_type_select");
  var select_restaurant="";
  var select_restaurant_name="";
  var $food_type_select_delete=$("#food_type_select_delete");
  //키워드버튼변수
  var $keyword_search_btn=$("#keyword_search_btn");
  var $keyword_search_form=$("#keyword_search_form");
  var k_count=0;
  var $keywords_select=$(".keywords_select");
  var $keywords_select_delete=$("#keywords_select_delete");
  var k_limit_count=0;
  //검색할떄 form 에있는변수들
  var $search_uptae=$("#search_uptae");
  var $search_keywords=$("#search_keywords");
  var $search=$("#search");

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
    $food_type_select.css("color","black");
    $(this).css("color","red");
     $food_type_btn.text($(this).text());
  });
  //식당지우기
  $food_type_select_delete.click(function(){
    $food_type_select.css("color","black");
    $food_type_btn.text("식당종류");
  });
  //******************************************************
  //#키워드로검색 버튼클릭시
  $keyword_search_btn.click(function(){
    if(k_count==0){
      $keyword_search_form.css("display","block");
      k_count++;
    }else{
      $keyword_search_form.css("display","none");
      k_count=0;
    }
  });
  //키워드들클릭시
  $keywords_select.click(function(){
    if(k_limit_count < 5){
      if(k_limit_count<1){
        $keyword_search_btn.text("");
      }
      $keywords_select.css("color","black");
      $(this).css("color","red");
      $keyword_search_btn.append($(this).text());
      k_limit_count++;
    }else{
      alert("키워드는5개까지만설정가능");
    }
  });
  //키워드지우기
  $keywords_select_delete.click(function(){
    $keywords_select.css("color","black");
    $keyword_search_btn.text("#키워드로검색");
    k_limit_count=0;
  });
  //검색할때 hidden 해놓은 인풋타입에값넣기
  $search.click(function(){

    if($food_type_btn.text() == "식당종류"){
      $search_uptae.val("");
    }else{
      $search_uptae.val($food_type_btn.text());
    }

    if($keyword_search_btn.text() =="#키워드로검색"){
      $search_keywords.val("");
    }else{
      $search_keywords.val($keyword_search_btn.text());
    }

  });

});//ready