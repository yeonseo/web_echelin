//테스트용 변수

var menuImg = ['./img/cabbage.jpg','./img/fish.jpg','./img/omurice.jpg','./img/pasta.jpg','./img/pilaf.jpg','./img/pizza.jpg','./img/salad.jpg','./img/steak.jpg'];
var menuTitle = ['cabbage','fish','omurice','pasta','pilaf','pizza','salad','steak'];
var menuprice = [1000,2000,3000,4000,5000,6000,7000,8000];

//

var divContentWrap = document.getElementById('divContentWrap');

//

showMene();

//
function showMene(){
    for(let i = 0; i < menuImg.length; i++){
        var divContent = document.createElement('div');
        var imgContent = document.createElement('img');
        var aTitleContent = document.createElement('a');
        var pTitleContent = document.createElement('p');
        var pPriceContent = document.createElement('p');

        divContent.setAttribute('id', divContent+i);
        divContent.setAttribute('class', 'score_content_first');

        aTitleContent.setAttribute('id', aTitleContent+i);

        imgContent.setAttribute('id', divContent+i);
        imgContent.setAttribute('src', menuImg[i]);

        pTitleContent.setAttribute('id', pTitleContent+i);
        pTitleContent.innerHTML=menuTitle[i];

        pPriceContent.setAttribute('id', pPriceContent+i);
        pPriceContent.innerHTML='&nbsp&nbsp'+menuprice[i]+'₩';

        aTitleContent.appendChild(imgContent);
        aTitleContent.appendChild(pTitleContent);
        aTitleContent.appendChild(pPriceContent);
        console.log();
        divContent.appendChild(aTitleContent);
        divContentWrap.appendChild(divContent);
    }

    // for(let i = 1; i < menuImg.length; i++){
    //     tdGroup[i] = document.getElementById(i);
    //     tdGroup[i].addEventListener('click',changeToday);
    // }
}
