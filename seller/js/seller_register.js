$(document).ready(function(){

  var $button_add=$("#button_add"),//식당 메뉴 + 버튼 변수
  $div_add_input=$("#div_add_input"),  //input을 div_add_input 안에 넣기 위한 변수
  $table_menu=$("#table_menu"),  //테이블 변수
  $div_radio=$("#div_radio") //브레이크타임 존재 시 보이는 input_time을 담는 div
  ;

  //메뉴 추가 버튼 클릭 시 테이블 행도 같이 추가 된다.
  $button_add.click(function(){
    $div_add_input.append ('<input class="input_info" id="input_add_menu" type="text" name="" value=""> <button class="button_circle_del" type="button" name="button">-</button> </br>');
    $table_menu.append('<tr ><td>갈릭페뇨파스타 </td><td>' + "22,000" + '</td><td>' + '<input type="file" name="" value="">' + '</td></tr>');

    $('.button_circle_del').click(function() {
      //메뉴 입력칸 삭제
      $(this).prev().remove();
      $(this).next().remove();
      $(this).remove();

      //메뉴 테이블(메뉴이름, 가격, 사진)
      $("tr:last").remove();
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
