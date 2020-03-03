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
  var $keyword_count=$("#keyword_count");
  //현재위치변수
  var $gps_btn=$("#gps_btn");
  var latitude=0;
  var longitude=0;
  var coord="";
  var gps_btn_count=0;
  var address;
  var $gps_ad=$("#gps_ad");
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
    //식당종류넘기기
    if($food_type_btn.text() == "식당종류"){
      $search_uptae.val("");
    }else{
      $search_uptae.val($food_type_btn.text());
    }
    //선택된키워드넘기기
    if($keyword_search_btn.text() =="#키워드로검색"){
      $search_keywords.val("");
    }else{
      $search_keywords.val($keyword_search_btn.text());
    }
    //현재위도경도를 주소로바꾸고 넘기기
    if($gps_btn.text() == "현재위치에서검색"){
      $gps_ad.val("");
    }else{
      $gps_ad.val($gps_btn.text());
    }

  });//검색클릭이벤트

  $gps_btn.click(function(){
    // Geolocation API에 액세스할 수 있는지를 확인
    if (navigator.geolocation) {
      //위치 정보를 얻기
      navigator.geolocation.getCurrentPosition (function(pos) {
        latitude=pos.coords.latitude;     // 위도
        longitude=pos.coords.longitude; // 경도
      });
    } else {
      alert("이 브라우저에서는 Geolocation이 지원되지 않습니다.")
    }
    //위도경도로 주소가져오기
    var geocoder = new kakao.maps.services.Geocoder();
    coord = new kakao.maps.LatLng(latitude, longitude);
    var callback = function(result, status) {
      if (status === kakao.maps.services.Status.OK) {
        console.log('그런 너를 마주칠까 ' + result[0].address.region_2depth_name + '을 못가');
        address=result[0].address.region_2depth_name;
      }
    };
    geocoder.coord2Address(coord.getLng(), coord.getLat(), callback);

    if(gps_btn_count==0){
      $gps_btn.text(address);
      gps_btn_count++;
    }else{
      $gps_btn.text("현재위치에서검색");
      gps_btn_count=0;
    }

  });//현재위치버튼

});//ready
