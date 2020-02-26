$(document).ready(function(){

  var $button_add=$("#button_add"),//식당 메뉴 + 버튼 변수
  $div_add_input=$("#div_add_input"),  //input을 div_add_input 안에 넣기 위한 변수
  $table_menu=$("#table_menu"),  //테이블 변수
  $div_radio=$("#div_radio"), //브레이크타임 존재 시 보이는 input_time을 담는 div
  $button_hashtag_add=$("#button_hashtag_add"),
  $input_business_license=$("#input_business_license");

  //브레이크 타임 있음 클릭 시 시간 선택 보이기
  $('input[name="break_time"]').click(function() {
    $div_radio.css('display', ($(this).val() === 'true') ? 'block' : 'none');
  });

  //기타 체크박스 클릭 시 기타란 활성화
  $('input[name="checkbox_etc"]').click(function(){
    $("#input_etc").removeAttr("disabled");
  });


  $button_add.click(function(){

    var addStaffText =     '<tr name="tr_menu">'+
        '    <td>'+
        '        <input type="text" name="" placeholder="메뉴이름">'+
        '    </td>'+
        '    <td>'+
        '        <input type="number" name="" placeholder="가격">'+
        '    </td>'+
        '    <td>'+
        '        <input type="file" name="" value="">'+
        '    </td>'+
        '    <td>'+
        '        <input type="text" name="" placeholder="메뉴 설명">'+
        '    </td>'+
        '    <td class="td_button_del">'+
        '        <button class="button_circle_del" name="button_del">-</button>'+
        '    </td>'+

        '</tr>';


        var tr_menu = $( "tr[name=tr_menu]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

        tr_menu.after(addStaffText); //마지막 trStaff명 뒤에 붙인다.
  });

  //삭제 버튼
  $(document).on("click","button[name=button_del]",function(){

      $(this).parent().parent().remove();

  });


  $(function () {
    function camelCaseIt(str) {
      return str.replace(/(?:^\w|[A-Z]|\b\w|\s+)/g, function(match, index) {
        if (+match === 0) return ""; // or if (/\s+/.test(match)) for white spaces
        return index == 0 ? match.toLowerCase() : match.toUpperCase();
      });
    }

// 기존
    // $('form').on('submit', function ( e ) {
    //   e.preventDefault();
    //   var text = $('#write_hashtag').val();
    //   $('#output').empty().append( '#'+camelCaseIt( text ) );
    // });

    $button_hashtag_add.click(function(e){
        e.preventDefault();
        var text = $('#write_hashtag').val();
        $('#hashtag_output').append( '<div class="div_hashtag">'+'#'+camelCaseIt( text )+'&nbsp&nbsp'+'<button class="button_x">'+'<span class="span_x">x<span>'+'</button>'+'</div>');
    });
  });


  $("#button_business_state").click(function() {
    $("form").attr("action", "../seller_business_license.php");
  });


$input_business_license.keyup(function(){
  var input_business_license=document.getElementById("input_business_license").value;
  var span_bisiness_license=document.getElementById("span_bisiness_license");

  // 넘어온 값의 정수만 추츨하여 문자열의 배열로 만들고 10자리 숫자인지 확인합니다.
	if ((input_business_license = (input_business_license+'').match(/\d{1}/g)).length != 10) {
    span_bisiness_license.innerHTML="사업자번호를 알맞게 입력해주세요. (10자리)";
    return false;
  }
	// 합 / 체크키
	var sum = 0, key = [1, 3, 7, 1, 3, 7, 1, 3, 5];

	// 0 ~ 8 까지 9개의 숫자를 체크키와 곱하여 합에더합니다.
	for (var i = 0 ; i < 9 ; i++) { sum += (key[i] * Number(input_business_license[i])); }

	// 각 8번배열의 값을 곱한 후 10으로 나누고 내림하여 기존 합에 더합니다.
	// 다시 10의 나머지를 구한후 그 값을 10에서 빼면 이것이 검증번호 이며 기존 검증번호와 비교하면됩니다.
  if((10 - ((sum + Math.floor(key[8] * Number(bisNo[8]) / 10)) % 10)) == Number(bisNo[9])) {
    span_bisiness_license.innerHTML="사업자번호를 등록해주세요.";
  }
	// return (10 - ((sum + Math.floor(key[8] * Number(input_business_license[8]) / 10)) % 10)) == Number(input_business_license[9]);
});




});// end of ready


//사업자 등록번호 등록
function businessLicense() {
  var input_business_license = document.getElementById("input_business_license").value;
  var business_number = $("input[name=input_business_license]").serialize();
  var div_state=document.getElementById("div_state");
  if(input_business_license ==="") {
    // input_business_license.innerHTML="번호를 입력해주세요.";
    alert("사업자번호를 먼저 입력한 후 진행해주세요.");
  } else {
    $.ajax({
      url : './check_business_license.php',
      type :'POST',
      data: business_number, //key값과 value값
      success : function(data){
        if(data==="1") {
          div_state.innerHTML="중복된 사업자번호입니다.";
        } else if (data==="0") {
           div_state.innerHTML="등록가능한 사업자번호입니다.";
        } else {
           alert(data+"error입니다.");
        }
      }
    })
    .done(function(){
      console.log("success");
    })
    .fail(function(e){
      console.log("error");
    })
    .always(function(){
      console.log("complete");
    });


    // 판매자페이지에서 자신의 사업장 상태를 확인 할 수 있는 필드를 만들 떄 사용!
    // $.ajax({
    //   type: 'POST',
    //   // url: 'seller_business_license.php',
    //   url: 'seller_business_license.php',
    //   data : business_number,
    //   success: function (response) {
    //     // alert(response);
    //     switch(response) {
    //       case 'normal' : div_state.innerHTML="현재상태 : 사업중"; break;
    //       case 'down' : div_state.innerHTML="현재상태 : 휴업"; break;
    //       case 'close' : div_state.innerHTML="현재상태 : 폐업"; break;
    //       case 'unregistered' : div_state.innerHTML="현재상태 : 미등록"; break;
    //       default : div_state.innerHTML="현재상태 : 알 수 없음"+response; break;
    //     }
    //   },
    // });
  }
}

function stepCheck() {
  var input_store_name=document.getElementById("input_store_name");
  var input_business_license=document.getElementById("input_business_license");
  var step1_form = $("form[name=form_seller_register_step_first]").serialize();

  if(input_store_name.value==="") {
    alert("식당 이름을 입력해주세요.");
    input_store_name.focus();
    return false;
  } else if (input_business_license.value==="") {
    alert("사업자번호를 입력해주세요.");
    input_business_license.forcus();
    return false;
  } else {
    // document.form_seller_register_step_first.submit();
    // return true;
    $.ajax({
      url : './seller_register_step_second.php',
      type :'POST',
      data: step1_form,  //key값과 value값
      success : function(data){
           alert("등록2단계로 전송완료");
           location.href="./seller_register_step_second.php";
      }
    })
    .done(function(){
      console.log("success");
    })
    .fail(function(e){
      console.log("error");
    })
    .always(function(){
      console.log("complete");
    });
  }
}
