$(document).ready(function(){

var $button_add=$("#button_add");


$button_add.click(function(){
  alert("버튼 추가 버튼");
  var addStaffText =     '<tr name="tr_menu">'+
      '    <td class="td_menu">'+
      '        <input type="text" name="input_menu[]">'+
      '    </td>'+
      '    <td class="td_menu">'+
      '        <input type="number" name="input_price[]">'+
      '    </td>'+
      '    <td class="td_menu">'+
      ' <div class="filebox bs3-primary preview-image">'+
      ' <input class="upload-name" value="파일선택" disabled="disabled" style="width: 200px;">'+
      ' <label for="input_file">업로드</label>'+
      '<input id="input_file" class="upload-hidden" type="file" name="input_menu_img[]" value="" multiple>'+
      '</div>'+
      '    </td>'+
      '    <td class="td_menu">'+
      '        <input type="text" name="input_menu_explain[]">'+
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
    alert("버튼 삭제 버튼");

    $(this).parent().parent().remove();

});
});// end of ready

function register_menu() {
    var input_menu = document.getElementsByName("input_menu[]");
    var input_price = document.getElementsByName("input_price[]");
    var input_menu_img = document.getElementsByName("input_menu_img[]");
    var input_menu_explain = document.getElementsByName("input_menu_explain[]");
    var menu_count = document.getElementsByTagName( 'tbody' )[0].childElementCount-1;

    for(var i=0; i<menu_count; i++) {
      if(input_menu[i].value=="") {
        alert("메뉴 이름을 입력해주세요.");
      } else if (input_price[i].value === "") {
        alert("메뉴 가격을 입력해주세요.");
      } else if (input_menu_img[i].value === "") {
        alert("메뉴 사진을 업로드해주세요.");
      } else {
          document.form_menu_register.submit();
          alert("메뉴 업로드 페이지로 전송완료");
        }

  }// end of for
} //endn of register_menu();


function update_menu() {
  var input_menu = document.getElementsByName("input_menu[]");
  var input_price = document.getElementsByName("input_price[]");
  var input_menu_img = document.getElementsByName("input_menu_img[]");
  var input_menu_explain = document.getElementsByName("input_menu_explain[]");
  var menu_count = document.getElementsByTagName( 'tbody' )[0].childElementCount-1;

  for(var i=0; i<menu_count; i++) {
    if(input_menu[i].value=="") {
      alert("메뉴 이름을 입력해주세요.");
    } else if (input_price[i].value === "") {
      alert("메뉴 가격을 입력해주세요.");
    } else if (input_menu_img[i].value === "") {
      alert("메뉴 사진을 업로드해주세요.");
    } else {
        document.form_menu_update.submit();
        alert("메뉴 업로드 페이지로 전송완료");
      }
}
