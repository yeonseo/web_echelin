$(document).ready(function(){

  var $button_add=$("#button_add"),//식당 메뉴 + 버튼 변수
  $div_add_input=$("#div_add_input"),  //input을 div_add_input 안에 넣기 위한 변수
  $table_menu=$("#table_menu"),  //테이블 변수
  $div_radio=$("#div_radio"), //브레이크타임 존재 시 보이는 input_time을 담는 div
  $button_hashtag_add=$("#button_hashtag_add");

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


  // $(function () {
  //   function camelCaseIt(str) {
  //     return str.replace(/(?:^\w|[A-Z]|\b\w|\s+)/g, function(match, index) {
  //       if (+match === 0) return ""; // or if (/\s+/.test(match)) for white spaces
  //       return index == 0 ? match.toLowerCase() : match.toUpperCase();
  //     });
  //   }

// 기존
    // $('form').on('submit', function ( e ) {
    //   e.preventDefault();
    //   var text = $('#write_hashtag').val();
    //   $('#output').empty().append( '#'+camelCaseIt( text ) );
    // });

  //   $button_hashtag_add.click(function(e){
  //       e.preventDefault();
  //       var text = $('#write_hashtag').val();
  //       $('#hashtag_output').append( '<div class="div_hashtag">'+'#'+camelCaseIt( text )+'&nbsp&nbsp'+'<button class="button_x">'+'<span class="span_x">x<span>'+'</button>'+'</div>');
  //   });
  // });


  $("#button_business_state").click(function() {
    $("form").attr("action", "../seller_business_license.php");
  });











});// end of ready


// function test() {
//   // var input_business_license=document.getElementById("input_business_license").value;
//   var str = $("input[name=input_business_license]").serialize();
//   $.ajax({
//       type: 'POSt',
//       url: 'test.php',
//       data : str,
//       success: function (response) {
//         alert(response);
//       },
//   });
//
// }

//사업자 등록번호 등록
function businessLicense() {
  var input_business_license = document.getElementById("input_business_license").value;
  var business_number = $("input[name=input_business_license]").serialize();
  var div_state=document.getElementById("div_state");
  if(input_business_license === "") {
     div_state.innerHTML="사업자번호를 입력해주세요.";
  } else {
    $.ajax({
      type: 'POST',
      url: 'seller_business_license.php',
      data : business_number,
      success: function (response) {
        // alert(response);
        switch(response) {
          case 'normal' : div_state.innerHTML="현재상태 : 사업중"; break;
          case 'down' : div_state.innerHTML="현재상태 : 휴업"; break;
          case 'close' : div_state.innerHTML="현재상태 : 폐업"; break;
          case 'unregistered' : div_state.innerHTML="현재상태 : 미등록"; break;
          default : div_state.innerHTML="현재상태 : "+response; break;
        }
      },
    });

  }
}

function stepCheck() {
  var input_store_name=document.getElementById("input_store_name");
  var input_business_license=document.getElementById("input_business_license");
  var button_register=document.getElementById("button_register");

  if(input_store_name.value==="") {
    alert("식당 이름을 입력해주세요");
    input_store_name.focus();
  } else if (input_business_license.value==="") {
    alert("사업자번호를 입력해주세요");
    input_business_license.focus();
  }
  // else if (button_register.value !="businessLicense"){
  //   alert("사업자번호 등록을 진행해주세요.");
  //   button_register.focus();
  // }
   else {
     alert("완료");
     document.form_seller_register_step_first.submit();
  }
}
