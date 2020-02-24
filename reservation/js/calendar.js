
//테스트용 변수

timeList=["11 : 00","12 : 00","13 : 00","14 : 00"];


//달력 셋팅

var currentTitle = document.getElementById('current-year-month');
var calendarBody = document.getElementById('calendar-body');
var timeBody = document.getElementById('time-list');
var today = new Date();
var first = new Date(today.getFullYear(), today.getMonth(),1);
var dayList = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var monthList = ['January 1','February 2','March 3','April 4','May 5','June 6','July 7','August 8','September 9','October 10','November 11','December 12'];
var leapYear=[31,29,31,30,31,30,31,31,30,31,30,31];
var notLeapYear=[31,28,31,30,31,30,31,31,30,31,30,31];
var pageFirst = first;
var pageYear;
var tdGroup = [];
var timeDivGroup = [];
var clickedTime;


if(first.getFullYear() % 4 === 0){
    pageYear = leapYear;
}else{
    pageYear = notLeapYear;
}
showCalendar();
showMain();
showTimeList(timeList);



function showCalendar(){
    let monthCnt = 100;
    let cnt = 1;
    for(var i = 0; i < 6; i++){
        var $tr = document.createElement('tr');
        $tr.setAttribute('id', monthCnt);
        for(var j = 0; j < 7; j++){
            if((i === 0 && j < first.getDay()) || cnt > pageYear[first.getMonth()]){
                var $td = document.createElement('td');
                $tr.appendChild($td);
            }else{
                var $td = document.createElement('td');
                $td.textContent = cnt;
                $td.setAttribute('id', cnt);
                $tr.appendChild($td);
                cnt++;
            }
        }
        today = new Date(today.getFullYear(), today.getMonth(), today.getDate());
        currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();
        clickedDate1 = document.getElementById(today.getDate());

        monthCnt++;
        calendarBody.appendChild($tr);
    }

    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        tdGroup[i] = document.getElementById(i);
        tdGroup[i].addEventListener('click',changeToday);
    }
}



function removeCalendar(){
    let catchTr = 100;
    for(var i = 100; i< 106; i++){
        var $tr = document.getElementById(catchTr);
        $tr.remove();
        catchTr++;
    }
}





//타임 선택

function showTimeList(timeList){

  for(var i=0; i<timeList.length;i++){
    console.log(timeList[i]);
    var $timediv = document.createElement('div');
    $timediv.textContent = timeList[i];
    $timediv.setAttribute('id', 'div_time_inner'+i);
    $timediv.setAttribute('class', 'div_time_inner');
    timeBody.appendChild($timediv);
  }

  for(var i=0; i<timeList.length;i++){
    timeDivGroup[i] = document.getElementById('div_time_inner'+i);
    timeDivGroup[i].addEventListener('click',timeChangeToday);
  }

}

function timeClickStart(){
    for(var i=0; i<timeList.length;i++){
        timeDivGroup[i] = document.getElementById('div_time_inner'+i);
        timeDivGroup[i].addEventListener('click',timeChangeToday);
    }
}
function timeChangeToday(e){
    for(var i=0; i<timeList.length;i++){
        if(timeDivGroup[i].classList.contains('active2')){
            timeDivGroup[i].classList.remove('active2');
        }
    }
    clickedTime = e.currentTarget;
    console.log(clickedTime.textContent);
    clickedTime.classList.add('active2');
}





// 월간 이동

function prev(){
    inputBox.value = "";
    const $divs = document.querySelectorAll('#input-list > div');
    $divs.forEach(function(e){
      e.remove();
    });
    const $btns = document.querySelectorAll('#input-list > button');
    $btns.forEach(function(e1){
      e1.remove();
    });
    if(pageFirst.getMonth() === 1){
        pageFirst = new Date(first.getFullYear()-1, 12, 1);
        first = pageFirst;
        if(first.getFullYear() % 4 === 0){
            pageYear = leapYear;
        }else{
            pageYear = notLeapYear;
        }
    }else{
        pageFirst = new Date(first.getFullYear(), first.getMonth()-1, 1);
        first = pageFirst;
    }
    today = new Date(today.getFullYear(), today.getMonth()-1, today.getDate());
    currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();
    removeCalendar();
    showCalendar();
    showMain();
    clickedDate1 = document.getElementById(today.getDate());
    clickedDate1.classList.add('active');
    clickStart();
}

function next(){
    inputBox.value = "";
    const $divs = document.querySelectorAll('#input-list > div');
    $divs.forEach(function(e){
      e.remove();
    });
    const $btns = document.querySelectorAll('#input-list > button');
    $btns.forEach(function(e1){
      e1.remove();
    });
    if(pageFirst.getMonth() === 12){
        pageFirst = new Date(first.getFullYear()+1, 1, 1);
        first = pageFirst;
        if(first.getFullYear() % 4 === 0){
            pageYear = leapYear;
        }else{
            pageYear = notLeapYear;
        }
    }else{
        pageFirst = new Date(first.getFullYear(), first.getMonth()+1, 1);
        first = pageFirst;
    }
    today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
    currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();
    removeCalendar();
    showCalendar();
    showMain();
    clickedDate1 = document.getElementById(today.getDate());
    clickedDate1.classList.add('active');
    clickStart();
}


//클릭시 포인트, 이벤트

function showMain(){
  var mainTodayDay = document.getElementById('main-day');
  var mainTodayDate = document.getElementById('main-date');
    mainTodayDay.innerHTML = dayList[today.getDay()];
    mainTodayDate.innerHTML = today.getDate();
}
var clickedDate1 = document.getElementById(today.getDate());
clickedDate1.classList.add('active');
var prevBtn = document.getElementById('prev');
var nextBtn = document.getElementById('next');
prevBtn.addEventListener('click',prev);
nextBtn.addEventListener('click',next);
function clickStart(){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        tdGroup[i] = document.getElementById(i);
        tdGroup[i].addEventListener('click',changeToday);
    }
}
function changeToday(e){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        if(tdGroup[i].classList.contains('active')){
            tdGroup[i].classList.remove('active');
        }
    }
    clickedDate1 = e.currentTarget;
    clickedDate1.classList.add('active');
    today = new Date(today.getFullYear(), today.getMonth(), clickedDate1.id);
    showMain();
    keyValue = today.getFullYear() + '' + today.getMonth()+ '' + today.getDate();
}


function btnPlusClick(p){
  p.textContent=((Number(p.textContent))+1);
}
function btnMinusClick(p){
  if(Number(p.textContent)>0){
    p.textContent=((Number(p.textContent))-1);

  }
}
