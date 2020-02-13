$(".btn").click(function () {

  $("#menu,.page_cover,html").addClass("open"); // 메뉴 버튼을 눌렀을때 메뉴, 커버, html에 open 클래스를 추가해서 효과를 준다.
  window.location.hash = "#open"; // 페이지가 이동한것 처럼 URL 뒤에 #를 추가해 준다.

});

window.onhashchange = function () {

  if (location.hash != "#open") {
  // URL에 #가 있을 경우 아래 명령을 실행한다.

  $("#menu,.page_cover,html").removeClass("open"); // open 클래스를 지워 원래대로 돌린다.
  } 
};
