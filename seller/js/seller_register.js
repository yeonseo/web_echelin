$(document).ready(function(){

  var $div_radio=$("#div_radio"), //브레이크타임 존재 시 보이는 input_time을 담는 div
  $button_hashtag_add=$("#button_hashtag_add"),
  $input_business_license=$("#input_business_license"),
  $break_time_true=$("#break_time_true"),
  $break_time_false=$("#break_time_false");

  //브레이크 타임 있음 클릭 시 시간 선택 보이기
  $break_time_true.click(function() {
    $div_radio.css('display', ($(this).val() === 'true') ? 'block' : 'none');
  });

  //브레이크 타임 없음 클릭 시 시간 선택 div hidden처리
  $break_time_false.click(function() {
    $div_radio.css('display', 'none');
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
function state() {
  var input_business_license = document.getElementById("input_business_license").value;
  var business_number = $("input[name=input_business_license]").serialize();
  var div_state=document.getElementById("div_state");
  if(input_business_license ==="") {
    alert("사업자번호를 먼저 입력한 후 진행해주세요.");
  } else {
    $.ajax({
      type: 'POST',
      // url: 'seller_business_license.php',
      url: 'business_license.php',
      data : business_number,
      success: function (response) {
        // alert(response);
        switch(response) {
          case 'normal' : div_state.innerHTML="현재상태 : 사업중"; break;
          case 'down' : div_state.innerHTML="현재상태 : 휴업"; break;
          case 'close' : div_state.innerHTML="현재상태 : 폐업"; break;
          case 'unregistered' : div_state.innerHTML="현재상태 : 미등록"; break;
          default : div_state.innerHTML="현재상태 : 알 수 없음"+response; break;
        }
      },
    });
  }
}

function businessLicense() {
  var input_business_license = document.getElementById("input_business_license").value;
  var business_number = $("input[name=input_business_license]").serialize();
  var business_chk=document.getElementById("business_chk");
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
          business_chk.innerHTML="중복된 사업자번호입니다.";
        } else if (data==="0") {
          business_chk.innerHTML="등록가능한 사업자번호입니다.";
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
  }
}

function sliceBusinessNumber(obj) {
    if(obj.value.length >10) {
    obj.value=obj.value.slice(0, 10);
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
  }
  else {
    document.form_seller_register_step_first.submit();
  }
}

function stepCheck2() {
  var button_find_postcode=document.getElementById("button_find_postcode");
  var input_postcode=document.getElementById("input_postcode");
  var input_address=document.getElementById("input_address");
  var input_extraAddress=document.getElementById("input_extraAddress");
  var input_detailAddress=document.getElementById("input_detailAddress");
  var step2_form = $("form[name=form_seller_register_step_second]").serialize();

  if(input_postcode.value==="") {
    alert("우편번호 찾기로 주소를 입력해주세요.");
    button_find_postcode.focus();
    return false;
  } else {
    document.form_seller_register_step_second.submit();
    // $.ajax({
    //   url : './seller_register_step_third.php',
    //   type :'POST',
    //   data: step2_form,
    //   success : function(data){
    //     alert("등록3단계로 전송완료");
    //   }
    // })
    // .done(function(){
    //   console.log("판매자 등록 2단계");
    // })
    // .fail(function(e){
    //   console.log("error");
    // })
    // .always(function(){
    //   console.log("complete");
    // });
  }
}

function checkbox_disable() {
  var input_checkbox_etc = document.getElementById("input_checkbox_etc");
  var input_checkbox_etc_text = document.getElementById("input_checkbox_etc_text");
  if(input_checkbox_etc.checked === true) {
    input_checkbox_etc_text.disabled=false;
  } else {
    input_checkbox_etc_text.disabled=true;
  }
}

function stepCheck3() {

  var store_type = document.getElementsByName("store_type");
  var input_store_type_etc = document.getElementById("input_store_type_etc");
  // var input_menu = document.getElementsByName("input_menu[]");
  // var input_price = document.getElementsByName("input_price");
  // var input_menu_img = document.getElementsByName("input_menu_img");
  var input_date_time1 = document.getElementById("input_date_time1");
  var input_date_time2 = document.getElementById("input_date_time2");
  var break_time = document.getElementsByName("break_time");
  var input_break_time1 = document.getElementById("input_break_time1");
  var input_break_time2 = document.getElementById("input_break_time2");
  var nokids = document.getElementsByName("nokids");
  var chkbox = document.getElementsByName("chkbox[]");
  var store_image1 = document.getElementById("store_image1");
  var store_image2 = document.getElementById("store_image2");
  var store_image3 = document.getElementById("store_image3");
  var store_image4 = document.getElementById("store_image4");
  var store_image5 = document.getElementById("store_image5");
  var input_opening_day = document.getElementById("input_opening_day");

  var check_store_stype=0;
  for( var i=0; i<store_type.length; i++) {
    if(store_type[i].checked===true) {
      check_store_stype++;
    }
  }

  var check_break_time=0;
  for( var i=0; i<break_time.length; i++) {
    if(break_time[i].checked===true) {
      check_break_time++;
    }
  }

  var check_nokids=0;
  for( var i=0; i<nokids.length; i++) {
    if(nokids[i].checked===true) {
      check_nokids++;
    }
  }

  var check_fac=0;
  for( var i=0; i<chkbox.length; i++) {
    if(chkbox[i].checked===true) {
      check_fac++;
    }
  }

  if(check_store_stype<1) {
    alert("식당 종류를 체크해주세요.");
  } else if(store_type[8].checked===true && input_store_type_etc.value=="") {
      alert("식당 종류를 체크 및 기타란에 내용을 입력해주세요.");
  } else if(input_date_time1.value==="") {
    alert("영업시간을 입력해주세요.");
    input_date_time1.focus();
  } else if (input_date_time2.value==="") {
    alert("영업시간을 입력해주세요.");
    input_date_time2.focus();
  } else if(check_break_time<1) {
    alert("브레이크 타임 정보에 체크해주세요.");
  } else if(break_time[0].checked===true && (input_break_time1.value==="" || input_break_time2.value==="")) {
    alert("브레이크 타임 시간을 입력해주세요.");
  } else if (check_nokids<1) {
    alert("노키즈존 여부에 체크해주세요.");
  } else if(check_fac<1) {
    alert("식당 편의시설을 1개 이상 체크해주세요.");
  } else if(chkbox[7].checked===true && input_checkbox_etc_text.value==="") {
    alert("식당 편의시설 기타란에 내용을 입력해주세요.");
  } else if(input_phone2.value==="") {
    alert("번호를 입력해주세요");
    input_phone2.focus();
  } else if (input_phone3.value==="") {
    alert("번호를 입력해주세요");
    input_phone3.focus();
  } else if(input_opening_day.value==="") {
    alert("개업일을 입력해주세요.");
    input_opening_day.focus();
  } else {
    document.form_seller_register_step_third.submit();
    // var step3_form = $("form[name=form_seller_register_step_third]").serialize();
    //
    //   $.ajax({
    //     url : './seller_register_step_fourth.php',
    //     type :'POST',
    //     data: step3_form,
    //     success : function(data){
    //       // document.form_first_show.submit();
    //       alert("등록4단계로 전송완료");
    //     }
    //   })
    //   .done(function(){
    //     console.log("판매자 등록 3단계");
    //   })
    //   .fail(function(e){
    //     console.log("error");
    //   })
    //   .always(function(){
    //     console.log("complete");
    //   });

  }

} //end of stepCheck3();

function chkPhone(obj) {
    if(obj.value.length >4) {
    obj.value=obj.value.slice(0, 4);
  }
}

function stepCheck4() {
  var input_people =  document.getElementById("input_people");
  var max_month = document.getElementsByName("max_month");
  var reserve_intensity = document.getElementsByName("reserve_intensity");

  var check_max_month=0;
  var check_max_intensity=0;
  for( var i=0; i<max_month.length; i++) {
    if(max_month[i].checked===true) {
      check_max_month++;
    }
  }

  for( var i=0; i<reserve_intensity.length; i++) {
    if(reserve_intensity[i].checked===true) {
      check_max_intensity++;
    }
  }

  if(input_people.value==="") {
    alert("시간 당 최대 예약 가능 인원을 적어주세요.");
  } else if(check_max_month<1) {
    alert("최대 개월수에 체크해주세요.");
  } else if(check_max_intensity<1) {
    alert("예약 규정 강도에 체크해주세요.")
  } else {
    document.form_seller_register_step_fourth.submit();
    // var step4_form = $("form[name=form_seller_register_step_fourth]").serialize();
    //
    //   $.ajax({
    //     url : './seller_register_complete.php',
    //     type :'POST',
    //     data: step4_form,
    //     success : function(data){
    //       // document.form_first_show.submit();
    //       alert("완료단계로 전송완료");
    //     }
    //   })
    //   .done(function(){
    //     console.log("판매자 등록 4단계");
    //   })
    //   .fail(function(e){
    //     console.log("error");
    //   })
    //   .always(function(){
    //     console.log("complete");
    //   });
  }

}
