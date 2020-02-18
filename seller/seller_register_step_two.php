<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./js/seller_register.js"></script>
    <link rel="stylesheet" href="../common/css/seller_register_step.css">
    <link rel="stylesheet" href="../common/css/user_seller.css?ver=2">
  </head>
  <body class="body_margin">
    <section>
      <script type="text/javascript">
      function previewImage(targetObj, View_area) {
var preview = document.getElementById(View_area); //div id
var ua = window.navigator.userAgent;

//ie일때(IE8 이하에서만 작동)
if (ua.indexOf("MSIE") > -1) {
  targetObj.select();
  try {
    var src = document.selection.createRange().text; // get file full path(IE9, IE10에서 사용 불가)
    var ie_preview_error = document.getElementById("ie_preview_error_" + View_area);


    if (ie_preview_error) {
      preview.removeChild(ie_preview_error); //error가 있으면 delete
    }

    var img = document.getElementById(View_area); //이미지가 뿌려질 곳

    //이미지 로딩, sizingMethod는 div에 맞춰서 사이즈를 자동조절 하는 역할
    img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')";
  } catch (e) {
    if (!document.getElementById("ie_preview_error_" + View_area)) {
      var info = document.createElement("<p>");
      info.id = "ie_preview_error_" + View_area;
      info.innerHTML = e.name;
      preview.insertBefore(info, null);
    }
  }
//ie가 아닐때(크롬, 사파리, FF)
} else {
  var files = targetObj.files;
  for ( var i = 0; i < files.length; i++) {
    var file = files[i];
    var imageType = /image.*/; //이미지 파일일경우만.. 뿌려준다.
    if (!file.type.match(imageType))
      continue;
    var prevImg = document.getElementById("prev_" + View_area); //이전에 미리보기가 있다면 삭제
    if (prevImg) {
      preview.removeChild(prevImg);
    }
    var img = document.createElement("img");
    img.id = "prev_" + View_area;
    img.classList.add("obj");
    img.file = file;
    img.style.width = '100px';
    img.style.height = '100px';
    preview.appendChild(img);
    if (window.FileReader) { // FireFox, Chrome, Opera 확인.
      var reader = new FileReader();
      reader.onloadend = (function(aImg) {
        return function(e) {
          aImg.src = e.target.result;
        };
      })(img);
      reader.readAsDataURL(file);
    } else { // safari is not supported FileReader
      //alert('not supported FileReader');
      if (!document.getElementById("sfr_preview_error_"
          + View_area)) {
        var info = document.createElement("p");
        info.id = "sfr_preview_error_" + View_area;
        info.innerHTML = "not supported FileReader";
        preview.insertBefore(info, null);
      }
    }
  }
}
}
      </script>
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="">
        <span class="span_step_info">2단계 : 상세 정보를 입력해주세요</span>
      </div>

      <progress value="75" max="100">0%</progress>
      <div id='View_area' style='position:relative; width: 100px; height: 100px; color: black; border: 0px solid black; dispaly: inline; '>

      </div>
      <div class="div_register_shape">
        <div class="div_register_inner_shape">
          <div class="div_form">
            <form class="" name="" action="" method="post">
              <div class="div_except_button">
                <ul>
                  <li>식당소개글</li>
                  <textarea name="name" rows="8" cols="74"></textarea>
                  </br></br>

                  <li>식당 메뉴</li>
                  <div id="div_add_input">
                    <input input class="input_info" type="text" name="menu" value="">
                    <button id="button_add" class="button_circle_add" type="button" name="button">+</button>
                  </div>
                  </br></br>


                  <table id="table_menu" class="table_seller_menu">
                    <tr>
                      <th>메뉴</th>
                      <th>가격</th>
                      <th>사진</th>
                    </tr>

                    <tr>
                      <td></td>
                      <td><input type="number" name="" value=""></td>
                      <td><input type="file" name="profile_pt" id="profile_pt" onchange="previewImage(this,'View_area')"></td>
                    </tr>

                    <tbody></tbody>
                  </table>
                 </br></br>


                  <li>브레이크타임 정보</li>
                    <input type="radio" name="break_time" value="true">있음
                    <input type="radio" name="break_time" value="false">없음
                    <div id="div_radio" hidden>
                      <input id="ccc"type="time" name="" value="">&nbsp-
                      <input type="time" name="" value="">
                    </div>

                    </br></br>

                  <li>식당 편의시설</li>
                    <input type="checkbox" name="" value="">식당 내부 화장실
                    <input type="checkbox" name="" value="">건물 화장실 이용</br>
                    <input type="checkbox" name="" value="">자전거 거치대
                    <input type="checkbox" name="" value="">아기 의자
                    <input type="checkbox" name="checkbox_etc" value="">기타
                    <input id="input_etc" type="text" name="" value="기타 클릭 시 input 활성화" disabled>
                    </br></br>

                  <li>식당 사진</li>
                    <input type="file" name="" value="">
                    </br></br>

                  <li>특이사항</li>
                    <textarea name="name" rows="8" cols="74"></textarea>
                </ul>
              </div> <!-- div_except_button -->
              <div class="div_prv_next_button">
                <button class="button_next" type="button" name="button" onclick="location.href='./seller_register_step_third.php'">다음</button>
                <button class="button_prev" type="button" name="button" onclick="location.href='./seller_register_step_first2.php'">이전</button>
              </div>
            </form>
          </div>
        </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
    </section>
  </body>
</html>
