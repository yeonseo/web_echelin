var hash_tag = [
  '조용한',
	'편안한',
	'시끌벅적한',
	'푸짐한',
	'캐쥬얼한',
	'아이와함께',
	'특별한날',
  '모임하기좋은',
	'코스요리',
	'프로포즈',
	'데이트',
	'백종원의3대천왕',
	'생활의달인',
	'수요미식회',
	'혼밥',
  'JMT',
  '맛집',
  '가족들과함께',
  '상견례',
  '소개팅',
  '맞선',
  '동창회',
  '생일',
  '기념일',
  '결혼기념일',
  '분위기있는',
  '가정식',
  '집밥느낌',
  '엄마가해준밥',
  '남자친구랑',
  '여자친구랑',
  '아이들이좋아하는',
  '남녀노소'
  ];

// console.log(hash_tag.join(','));
var div_hash_tag = document.getElementById("div_hash_tag");
var div_select_hashtag = document.getElementById("div_select_hashtag");
var div_hash_content =[];
var span_hash_content = [];
var button_o = [];
showHashTag();

  function showHashTag() {
    for(let i = 0; i < hash_tag.length; i++){
      div_hash_content[i]=document.createElement('div');
      span_hash_content[i]=document.createElement('span');
      button_o[i]=document.createElement('button');

      div_hash_content[i].setAttribute('id', 'hashtag'+i);
      div_hash_content[i].setAttribute('class', 'div_hash_content');

      span_hash_content[i].setAttribute('id', 'span_hash_content'+i);
      span_hash_content[i].innerHTML='#'+hash_tag[i];

      button_o[i].setAttribute('class', 'button_x');
      button_o[i].innerHTML="+";

      div_hash_content[i].appendChild(span_hash_content[i]);
      div_hash_content[i].appendChild(button_o[i]);

      div_hash_tag.appendChild(div_hash_content[i]);
  }

  for(let i = 0; i < div_hash_content.length; i++){
      div_hash_content[i] = document.getElementById('hashtag'+i);
      div_hash_content[i].addEventListener('click',clickHashTag);
    }
}

  function clickHashTag(e) {
      var index=Number(e.currentTarget.id.substr(7));
      console.log('select index = '+index);
      var select_hash  = document.createElement('div');
      select_hash.setAttribute('id', 'select_hash'+index);
      select_hash.setAttribute('class', 'div_hash_content');

      var span_select_hash = document.createElement('span');
      span_select_hash.setAttribute('id', 'span_select_hash'+index);
      span_select_hash.innerHTML='#'+hash_tag[index];

      var btnX = document.createElement('button');
      btnX.setAttribute('id', 'btnX'+index);
      btnX.setAttribute('class', 'button_x');
      btnX.innerHTML='x';

      btnX.addEventListener('click',function(){
        div_select_hashtag.removeChild(document.getElementById('select_hash'+index));
        // xClickReAdd();
        var hashtag = document.createElement('div');
        hashtag.setAttribute('id', 'hashtag'+index);
        hashtag.setAttribute('class', 'div_hash_content');

        var span_hash_content = document.createElement('span');
        span_hash_content.setAttribute('id', 'span_hash_content'+index);
        span_hash_content.innerHTML='#'+hash_tag[index];

        var button_o = document.createElement('button');
        button_o.setAttribute('class', 'button_x');
        button_o.innerHTML="+";

        hashtag.appendChild(span_hash_content);
        hashtag.appendChild(button_o);
        div_hash_tag.appendChild(hashtag);
        // clickHashTag(e);
      });

      select_hash.appendChild(span_select_hash);
      select_hash.appendChild(btnX);
      div_select_hashtag.appendChild(select_hash);

      div_hash_tag.removeChild(document.getElementById('hashtag'+index));
  }

  function xClickReAdd() {
    div_select_hashtag.removeChild(document.getElementById('select_hash'+index));
    var hashtag = document.createElement('div');
    hashtag.setAttribute('id', 'hashtag'+index);
    hashtag.setAttribute('class', 'div_hash_content');

    var span_hash_content = document.createElement('span');
    span_hash_content.setAttribute('id', 'span_hash_content'+index);
    span_hash_content.innerHTML='#'+hash_tag[index];

    var button_o = document.createElement('button');
    button_o.setAttribute('class', 'button_x');
    button_o.innerHTML="+";

    hashtag.appendChild(span_hash_content);
    hashtag.appendChild(button_o);
    div_hash_tag.appendChild(hashtag);

    // clickHashTag();
  }
