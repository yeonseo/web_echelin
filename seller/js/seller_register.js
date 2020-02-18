$(document).ready(function(){

  var $button_add=$("#button_add"),//식당 메뉴 + 버튼 변수
  $div_add_input=$("#div_add_input"),  //input을 div_add_input 안에 넣기 위한 변수
  $table_menu=$("#table_menu"),  //테이블 변수
  $div_radio=$("#div_radio") //브레이크타임 존재 시 보이는 input_time을 담는 div
  ;

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
        '        <button class="" name="button_del">삭제</button>'
        '    </td>'+
        '</tr>';


        var tr_menu = $( "tr[name=tr_menu]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

        tr_menu.after(addStaffText); //마지막 trStaff명 뒤에 붙인다.
  });

  //삭제 버튼

  $(document).on("click","button[name=button_del]",function(){

      $(this).parent().parent().remove();

  });

});// end of ready
