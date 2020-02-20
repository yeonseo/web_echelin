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



});// end of ready
