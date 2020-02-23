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
  '#맛집'
  ];

// console.log(hash_tag.join(','));
var div_hash_tag = document.getElementById("div_hash_tag");
var div_hash_content =[];
var span_hash_content = [];
showHashTag();

  function showHashTag() {
    for(let i = 0; i < hash_tag.length; i++){
      div_hash_content[i]=document.createElement('div');
      span_hash_content[i]=document.createElement('span');

      div_hash_content[i].setAttribute('id', 'hashtag'+i);
      div_hash_content[i].setAttribute('class', 'div_hash_content');

      span_hash_content[i].setAttribute('id', 'span_hash_content'+i);
      span_hash_content[i].innerHTML=hash_tag[i];

      div_hash_content[i].appendChild(span_hash_content[i]);

      div_hash_tag.appendChild(div_hash_content[i]);

  }

  for(let i = 0; i < div_hash_content.length; i++){
      div_hash_content[i] = document.getElementById('div_hash_content'+i);
      div_hash_content[i].addEventListener('click',clickHashTag);
      console.log('clickHashTag');
    }
}

  function clickHashTag(e) {

  }
