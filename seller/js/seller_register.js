$(document).ready(function(){

  var $button_add=$("#button_add"),//식당 메뉴 + 버튼 변수
  $div_add_input=$("#div_add_input"),  //input을 div_add_input 안에 넣기 위한 변수
  $table_menu=$("#table_menu"),  //테이블 변수
  $div_radio=$("#div_radio") //브레이크타임 존재 시 보이는 input_time을 담는 div
  ;

  //메뉴 추가 버튼 클릭 시 테이블 행도 같이 추가 된다.
  var count = 0;
  $button_add.click(function(){
    $div_add_input.append ('<input class="input_info" id="input_add_menu" type="text" name="menu" value=""> <button class="button_circle_del" type="button" name="button">-</button> </br>');
    $table_menu.append('<tr ><td>'+$('input[name=menu]').val()+'</td><td>' + '<input type="number" name="menu" value="">' + '</td><td>' + '<input type="file" name="profile_pt" id="profile_pt" onchange="previewImage(this,"View_area")">' + '</td></tr>');
    count++;

    $('.button_circle_del').click(function() {
      //메뉴 입력칸 삭제
      $(this).prev().remove(); //input text지우기
      $(this).next().remove(); //</br> 지우기
      $(this).remove(); //버튼 지우기


      $("tr:last").remove();
      // $('tbody>td>input[name:menu]').remove();
      // $("#table_menu > tbody:last > tr:last").remove();


      count--;


    }); // end of button_circle_del
  }); // end of button_add.click




  //브레이크 타임 있음 클릭 시 시간 선택 보이기
  $('input[name="break_time"]').click(function() {
    $div_radio.css('display', ($(this).val() === 'true') ? 'block' : 'none');
  });

  //기타 체크박스 클릭 시 기타란 활성화
  $('input[name="checkbox_etc"]').click(function(){
    $("#input_etc").removeAttr("disabled");
  });

});// end of ready
