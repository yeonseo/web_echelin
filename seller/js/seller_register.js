$(document).ready(function(){
  var $button_add=$("#button_add"), $button_del=$("#button_del"),
  $div_add_input_table=$("#div_add_input_table"), $radio_checked=$("#radio_checked");

  //메뉴 추가 버튼 클릭 시 테이블 행도 같이 추가 된다.
  $button_add.click(function(){
    $div_add_input_table.append ('<input class="input_info" type="text" name="" value=""> <button id="button_del" class="button_circle" type="button" name="button">-</button> </br>');
    $('#table_menu > tbody:last').append('<tr ><td>갈릭페뇨파스타 </td><td>' + "22,000" + '</td><td>' + '<input type="file" name="" value="">' + '</td></tr>');

  }); // end of button_add.click


  $button_del.on('click', function() {
    // $(this).prev().remove();
    // $(this).next().remove();
    // $(this).remove();
    // $(this).parent().parent().remove();
    // $("#div_add_input_table :last").remove();
    $("#div_add_input_table br:last").remove();

    $('#table_menu > tbody:last > tr:last').remove();

  });

  // $radio_checked.click(function() {
  //   if($radio_checked.is(':checked')) {
  //     $("#div_radio").hide();
  //   } else {
  //     $("#div_radio").show();
  //   }
  // })


  function setDisplay(){
      if($('input:radio[id=radio_checked]').is(':checked')){
          $('#div_radio').hide();
      }else{
          $('#div_radio').show();
      }
  }

});// end of ready
