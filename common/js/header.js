$(document).ready(function(){
  var $keyword_btn=$("#keyword_btn");
  var $keyword_header=$("#keyword_header");

  $keyword_btn.click(function(){

    $keyword_header.slideDown(1000);
    $keyword_btn.val("&nbsp키워드▲");
  });

});
