//menu.php 에서 불러온 데이터
var menu_file_copied =document.getElementById('menu_file_copied').value;
var menu_name =document.getElementById('menu_name').value;
var menu_price =document.getElementById('menu_price').value;
var menu_explain =document.getElementById('menu_explain').value;
console.log("menu_file_copied = "+menu_file_copied);
console.log("menu_name = "+menu_name);
console.log("menu_price = "+menu_price);
console.log("menu_explain = "+menu_explain);

var menuImg = menu_file_copied.split(',');
var menuTotalCount = menuImg.length;
var menuTitle = menu_name.split(',');
var menuprice = menu_price.split(',');
var menuExplain = menu_explain.split(',');

for(let i=0 ; i <menuTotalCount; i++){
  menuImg[i]="../seller/menuimg/"+menuImg[i];
}

for(let i=0 ; i <menuTotalCount; i++){
  menuprice[i]=Number(menuprice[i]);
}

//
var divContent =[];
var imgContent =[];
var aTitleContent =[];
var pTitleContent =[];
var pPriceContent =[];
var spanExplainContent =[];
var divContentWrap = document.getElementById('divContentWrap');
var myCartWrap = document.getElementById('myCartWrap');
var spanMyCart = document.getElementById('spanMyCart');
var totalPrice =0;
var menuProductCountPrice=[];
var menuProductCount=[];
//
menuProductCountSetting();
showMene();
//


function menuProductCountSetting(){
  for(let i =0 ; i<menuTotalCount;i++){
    menuProductCountPrice[i]=0;
    menuProductCount[i]=0;
  }
}
function clickMenuContent(e){
  var index=Number(e.currentTarget.id.substr(10));
  totalPrice+=menuprice[index];

  console.log('select index = '+index);
  if(document.getElementById('divSelectContent'+index)){
    menuProductCountPrice[index]+=menuprice[index];
    menuProductCount[index]+=1;
    var divSelectContent = document.getElementById('divSelectContent'+index);
    var pAddPrice=document.getElementById('pAddPrice'+index);
    var btnX=document.getElementById('btnX'+index);

    divSelectContent.removeChild(pAddPrice);
    divSelectContent.removeChild(btnX);


    if(document.getElementById('pAddTitle'+index)){
      divSelectContent.removeChild(document.getElementById('pAddTitle'+index));
    }
    if(document.getElementById('btnMinas'+index)){
      divSelectContent.removeChild(document.getElementById('btnMinas'+index));
    }
    if(document.getElementById('btnPlus'+index)){
      divSelectContent.removeChild(document.getElementById('btnPlus'+index));
    }
    if(document.getElementById('pMenuProductCount'+index)){
      divSelectContent.removeChild(document.getElementById('pMenuProductCount'+index));
    }

    // pAddPrice.innerHTML=menuTitle[index]+"&nbsp₩"+menuProductCountPrice[index]+"&nbsp";
    console.log('if'+menuProductCountPrice[index]);
    // myCartWrap.removeChild(divSelectContent);

    var pAddPrice = document.createElement('p');
    pAddPrice.setAttribute('id', 'pAddPrice'+index);
    pAddPrice.setAttribute('class', 'p_add_price');
    pAddPrice.innerHTML="&nbsp₩"+menuProductCountPrice[index]+"&nbsp";

    var pAddTitle = document.createElement('p');
    pAddTitle.setAttribute('id', 'pAddTitle'+index);
    pAddTitle.setAttribute('class', 'p_add_price');
    pAddTitle.innerHTML=menuTitle[index]+"&nbsp";

    var pMenuProductCount = document.createElement('p');
    pMenuProductCount.setAttribute('id', 'pMenuProductCount'+index);
    pMenuProductCount.setAttribute('class', 'p_add_price');
    pMenuProductCount.innerHTML="&nbsp"+menuProductCount[index]+"&nbsp";

    var btnX = document.createElement('button');
    btnX.setAttribute('id', 'btnX'+index);
    btnX.setAttribute('class', 'button_menu');
    btnX.innerHTML='x';
    btnX.addEventListener('click',function(){
      totalPrice-=menuProductCountPrice[index];
      menuProductCountPrice[index]=0;
      menuProductCount[index]=0;
      console.log("menuProductCountPrice[" +index+ "]  =  "+menuProductCountPrice[index]);
      spanMyCart.innerHTML="장바구니 ₩"+totalPrice;
      myCartWrap.removeChild(document.getElementById('divSelectContent'+index));
    });

    var btnPlus = document.createElement('button');
    btnPlus.setAttribute('id', 'btnPlus'+index);
    btnPlus.setAttribute('class', 'button_menu');
    btnPlus.innerHTML='+';
    btnPlus.addEventListener('click',function(){
      menuProductCountPrice[index]+=menuprice[index];
      totalPrice+=menuprice[index];
      menuProductCount[index]+=1;
      pAddPrice.innerHTML="&nbsp₩"+menuProductCountPrice[index]+"&nbsp";
      spanMyCart.innerHTML="장바구니 ₩"+totalPrice;
      pMenuProductCount.innerHTML="&nbsp"+menuProductCount[index]+"&nbsp";
      console.log('plus menuProductCount[index]===0  menuProductCount[index]= '+menuProductCount[index]);
    });

    var btnMinas = document.createElement('button');
    btnMinas.setAttribute('id', 'btnMinas'+index);
    btnMinas.setAttribute('class', 'button_menu');
    btnMinas.innerHTML='-';
    btnMinas.addEventListener('click',function(){
      menuProductCountPrice[index]-=menuprice[index];
      console.log("menuProductCountPrice[" +index+ "]  =  "+menuProductCountPrice[index]);
      totalPrice-=menuprice[index];
      menuProductCount[index]-=1;
      spanMyCart.innerHTML="장바구니 ₩"+totalPrice;
      pAddPrice.innerHTML="&nbsp₩"+menuProductCountPrice[index]+"&nbsp";
      if(menuProductCount[index]===1){
        if(document.getElementById('btnMinas'+index)){
          divSelectContent.removeChild(document.getElementById('btnMinas'+index));
        }
        if(document.getElementById('btnPlus'+index)){
          divSelectContent.removeChild(document.getElementById('btnPlus'+index));
        }
        if(document.getElementById('pMenuProductCount'+index)){
          divSelectContent.removeChild(document.getElementById('pMenuProductCount'+index));
        }
      }else{
        pMenuProductCount.innerHTML="&nbsp"+menuProductCount[index]+"&nbsp";
        console.log('minas menuProductCount[index]===0 else menuProductCount[index]= '+menuProductCount[index]);
      }
    });
    divSelectContent.appendChild(pAddTitle);
    divSelectContent.appendChild(btnPlus);
    divSelectContent.appendChild(pMenuProductCount);
    divSelectContent.appendChild(btnMinas);
    divSelectContent.appendChild(pAddPrice);
    divSelectContent.appendChild(btnX);
  }else{
      menuProductCountPrice[index]+=menuprice[index];
      menuProductCount[index]+=1;
      var divSelectContent = document.createElement('div');
      divSelectContent.setAttribute('id', 'divSelectContent'+index);
      divSelectContent.setAttribute('class', 'div_hashtag_menu');
      var pAddPrice = document.createElement('p');
      pAddPrice.setAttribute('id', 'pAddPrice'+index);
      pAddPrice.setAttribute('class', 'p_add_price');
      pAddPrice.innerHTML=menuTitle[index]+"&nbsp₩"+menuprice[index]+"&nbsp";
      divSelectContent.appendChild(pAddPrice);

      var btnX = document.createElement('button');
      btnX.setAttribute('id', 'btnX'+index);
      btnX.setAttribute('class', 'button_menu');
      btnX.innerHTML='x';
      btnX.addEventListener('click',function(){
        totalPrice-=menuProductCountPrice[index];
        menuProductCountPrice[index]=0;
        menuProductCount[index]=0;
        console.log("menuProductCountPrice[" +index+ "]  =  "+menuProductCountPrice[index]);
        spanMyCart.innerHTML="장바구니 ₩"+totalPrice;
        myCartWrap.removeChild(document.getElementById('divSelectContent'+index));
      });
      divSelectContent.appendChild(btnX);
      console.log('else');
      myCartWrap.appendChild(divSelectContent);
  }


  spanMyCart.innerHTML="장바구니 ₩"+totalPrice;
  //
  // var trSelectContent = document.createElement('tr');
  // var tdSelectTitle = document.createElement('td');
  // var tdSelectPrice = document.createElement('td');
  // var tdSelectCount = document.createElement('td');
  //
  // trSelectContent.setAttribute('id', 'trSelectContent'+index);
  // trSelectContent.setAttribute('class', 'score_content_first');
  // tdSelectTitle.innerHTML=menuTitle[index];
  // tdSelectPrice.innerHTML=menuprice[index];
  // trSelectContent.appendChild(tdSelectTitle);
  // trSelectContent.appendChild(tdSelectPrice);
  // tableSelectMenu.appendChild(trSelectContent);
}


function showMene(){
    for(let i = 0; i < menuTotalCount; i++){
        divContent[i] = document.createElement('div');
        imgContent[i] = document.createElement('img');
        aTitleContent[i] = document.createElement('a');
        pTitleContent[i] = document.createElement('p');
        pPriceContent[i] = document.createElement('p');
        spanExplainContent[i] = document.createElement('span');

        divContent[i].setAttribute('id', divContent+i);
        divContent[i].setAttribute('class', 'score_content_first');

        aTitleContent[i].setAttribute('id', 'aTitleContent'+i);

        imgContent[i].setAttribute('id', 'divContent'+i);
        imgContent[i].setAttribute('src', menuImg[i]);

        pTitleContent[i].setAttribute('id', 'pTitleContent'+i);
        pTitleContent[i].innerHTML=menuTitle[i];

        pPriceContent[i].setAttribute('id', 'pPriceContent'+i);
        pPriceContent[i].innerHTML='&nbsp&nbsp'+menuprice[i]+'₩';

        spanExplainContent[i].setAttribute('id', 'span_explain_content'+i);
        spanExplainContent[i].setAttribute('class', 'span_explain_content');
        spanExplainContent[i].innerHTML='&nbsp'+menuExplain[i];

        aTitleContent[i].appendChild(imgContent[i]);
        aTitleContent[i].appendChild(pTitleContent[i]);
        aTitleContent[i].appendChild(pPriceContent[i]);
        console.log();
        divContent[i].appendChild(aTitleContent[i]);
        divContent[i].appendChild(spanExplainContent[i]);

        divContentWrap.appendChild(divContent[i]);
    }

    for(let i = 0; i < divContent.length; i++){
        divContent[i] = document.getElementById('divContent'+i);
        divContent[i].addEventListener('click',clickMenuContent);

        console.log('clickMenuContent');
    }
}
