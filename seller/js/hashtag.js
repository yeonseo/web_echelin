var hash_tag = [
  '#조용한',
	'#편안한',
	'#시끌벅적한',
	'#푸짐한',
	'#캐쥬얼한',
	'#아이와함께',
	'#특별한날',
  '#모임하기좋은',
	'#코스요리',
	'#프로포즈',
	'#데이트',
	'#백종원의3대천왕',
	'#생활의달인',
	'#수요미식회',
	'#혼밥',
  '#JMT',
  '#맛집',
  '#가족들과함께',
  '#상견례',
  '#소개팅',
  '#맞선',
  '#동창회',
  '#생일',
  '#기념일',
  '#결혼기념일',
  '#분위기있는',
  '#가정식',
  '#집밥느낌',
  '#엄마가해준밥',
  '#남자친구랑',
  '#여자친구랑',
  '#아이들이좋아하는',
  '#남녀노소'
  ];

// console.log(hash_tag.join(','));
var div_hash_tag = document.getElementById("div_hash_tag");
var div_except_button = document.getElementById("div_except_button");
var div_hash_content =[];
var span_hash_content = [];
var button_x = [];
showHashTag();

  function showHashTag() {
    for(let i = 0; i < hash_tag.length; i++){
      div_hash_content[i]=document.createElement('div');
      span_hash_content[i]=document.createElement('span');
      button_x[i]=document.createElement('button');

      div_hash_content[i].setAttribute('id', 'hashtag'+i);
      div_hash_content[i].setAttribute('class', 'div_hash_content');

      span_hash_content[i].setAttribute('id', 'span_hash_content'+i);
      span_hash_content[i].innerHTML=hash_tag[i];

      button_x[i].setAttribute('class', 'button_x');
      button_x[i].innerHTML="x";

      div_hash_content[i].appendChild(span_hash_content[i]);
      div_hash_content[i].appendChild(button_x[i]);

      div_hash_tag.appendChild(div_hash_content[i]);

  }

  for(let i = 0; i < div_hash_content.length; i++){
      div_hash_content[i] = document.getElementById('div_hash_content'+i);
      div_hash_content[i].addEventListener('click',clickHashTag);
      console.log('clickHashTag');
    }
}

  function clickHashTag(e) {
    var index=Number(e.currentTarget.id.substr(10));
    var select_hash  = document.createElement('div');
    select_hash.setAttribute('id', 'select_hash'+index);
    select_hash.setAttribute('class', 'div_hash_content');

    var btnX = document.createElement('button');
    btnX.setAttribute('id', 'btnX'+index);
    btnX.setAttribute('class', 'button_x');
    btnX.innerHTML='x';
    btnX.addEventListener('click',function(){
    div_except_button.removeChild(document.getElementById('select_hash'+index));
  });

    select_hash.appendChild(btnX);
    div_except_button.appendChild(select_hash);
  }
