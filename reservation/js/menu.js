//테스트용 변수

var menuImg = ['./img/cabbage.jpg','./img/fish.jpg','./img/omurice.jpg','./img/pasta.jpg','./img/pilaf.jpg','./img/pizza.jpg','./img/salad.jpg','./img/steak.jpg'];
var menuTitle = ['cabbage','fish','omurice','pasta','pilaf','pizza','salad','steak'];
var menuprice = [1000,2000,3000,4000,5000,6000,7000,8000];
var selectMenuNum=0;
//
var divContent =[];
var imgContent =[];
var aTitleContent =[];
var pTitleContent =[];
var pPriceContent =[];
var divContentWrap = document.getElementById('divContentWrap');
var tableSelectMenu = document.getElementById('table_select_menu');

//

showMene();
//
function clickMenuContent(index){
  console.log('clickMenuContent index = '+index);
  var trSelectContent = document.createElement('tr');
  var tdSelectTitle = document.createElement('td');
  var tdSelectPrice = document.createElement('td');
  var tdSelectCount = document.createElement('td');

  trSelectContent.setAttribute('id', 'trSelectContent'+index);
  trSelectContent.setAttribute('class', 'score_content_first');
  tdSelectTitle.innerHTML=menuTitle[index];
  tdSelectPrice.innerHTML=menuprice[index];


}


function showMene(){
    for(let i = 0; i < menuImg.length; i++){
        divContent[i] = document.createElement('div');
        imgContent[i] = document.createElement('img');
        aTitleContent[i] = document.createElement('a');
        pTitleContent[i] = document.createElement('p');
        pPriceContent[i] = document.createElement('p');

        divContent[i].setAttribute('id', divContent+i);
        divContent[i].setAttribute('class', 'score_content_first');

        aTitleContent[i].setAttribute('id', 'aTitleContent'+i);

        imgContent[i].setAttribute('id', 'divContent'+i);
        imgContent[i].setAttribute('src', menuImg[i]);

        pTitleContent[i].setAttribute('id', 'pTitleContent'+i);
        pTitleContent[i].innerHTML=menuTitle[i];

        pPriceContent[i].setAttribute('id', 'pPriceContent'+i);
        pPriceContent[i].innerHTML='&nbsp&nbsp'+menuprice[i]+'₩';

        aTitleContent[i].appendChild(imgContent[i]);
        aTitleContent[i].appendChild(pTitleContent[i]);
        aTitleContent[i].appendChild(pPriceContent[i]);
        console.log();
        divContent[i].appendChild(aTitleContent[i]);

        divContentWrap.appendChild(divContent[i]);
    }

    for(let i = 1; i < divContent.length; i++){
        divContent[i] = document.getElementById('divContent'+i);
        divContent[i].addEventListener('click',clickMenuContent(i));

          console.log('clickMenuContent');
    }
}
