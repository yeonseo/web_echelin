// 모든 문서가 로딩이 되면 자동으로 실행해주는 함수 => document.ready와 같음.
$(function () {

  // 변수 선언
  var slideshow = $('.slideshow'),
      slideshowSlides = slideshow.find('.slideshow_slides'), // 속도개선. 큰 객체안에 하위객체를 찾아오는 방법.
      slides = slideshowSlides.find('div'), // anchor 4개를 찾아옴. 배열로 들어온다.
      slidesCount = slides.length,
      nav = slideshow.find('.slideshow_nav'),
      prev = nav.find('.prev'),
      next = nav.find('.next'),
      currentIndex = 0, // 현재슬라이드를 첫번째 화면으로 세팅
      indicator = slideshow.find('.slideshow_indicator'),
      interval = 3000,
      timer = null,
      incrementValue = 1; // 자동슬라이드 변화시간

  // 이벤트 처리 1. 슬라이드 배치 ( 가로 ) => slide1 왼쪽 0%, slide2 100%, slide3 200%, slide4 300%
  slides.each(function(i){

    var newLeft = (i*100)+'%'; // style = "left: 0% 100% 200% 300%" 해야될것을 프로그램으로 처리하기
    $(this).css({left: newLeft});

  });

  prev.addClass('disabled');
  indicator.find('a').eq(0).addClass('active');

  // 슬라이드 화면이동하는 함수를 생성한다.
  function gotoSlide(index){

    slideshowSlides.animate({ left: (-100*index)+'%'}, 1000, 'easeInOutExpo');

    currentIndex = index;

    if(currentIndex === 0){
      prev.addClass('disabled');
    }else{
      prev.removeClass('disabled');
    }

    if(currentIndex === (slidesCount-1)){
      next.addClass('disabled');
    }else{
      next.removeClass('disabled');
    }

    indicator.find('a').removeClass('active');
    indicator.find('a').eq(currentIndex).addClass('active');

  }

  // 이벤트처리 네비게이션 진행
  prev.click(function(e){

    e.preventDefault(); // a 태그 기본기능 막기
    if(currentIndex !== 0){
      currentIndex -= 1;
    }

    gotoSlide(currentIndex);

  });

  next.click(function(e){

    e.preventDefault(); // a 태그 기본기능 막기
    if(currentIndex !== (slidesCount-1)){
      currentIndex += 1;
    }

    gotoSlide(currentIndex);

  });

  indicator.find('a').click(function(e){
    e.preventDefault();
    var point = $(this).index();
    gotoSlide(point);
  });

  // 자동슬라이드 함수
  // setInterval( 일을 하는 함수구현, 시간)
  function autoDisplayStart(){
    timer = setInterval(function(){
      // 0, 1, 2, 3 => 0, 1, 2, 3 => 0, 1, 2, 3

      if(currentIndex === 3 ){
        incrementValue = -1;
      }else if(currentIndex === 0 ){
        incrementValue = 1;
      }

      var nextIndex = (currentIndex + 1) % slidesCount;
      gotoSlide(nextIndex);
    }, interval);
  };

  function autoDisplayStop(){
    clearInterval(timer);
  };

  slideshow.mouseenter(function(e){
    autoDisplayStop();
  });

  slideshow.mouseleave(function(e){
    autoDisplayStart();
  });

  //gotoSlide(currentIndex);
  autoDisplayStart();

});
