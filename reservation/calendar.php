<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="./css/calendar.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <script type="text/javascript" src="./js/calendar.js" defer>

  </script>
</head>
<body>
    <div class="content-wrap">
      <div class="content-left">
        <div class="main-wrap">
          <div id="main-day" class="main-day"></div>
          <div id="main-date" class="main-date"></div>
        </div>
        <div class="time-wrap time-wrap2" class="">
          <div id="time-list" class="time-list"><div class="time-list">예약 가능 시간</div></div>
        </div>
        <div class="time-wrap">
          <div class="input-wrap">
            <div class="div_hashtag div_hashtag1">
              <p class="p_add_price">&nbsp&nbsp성인&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
              <button id="btnAdultPlus"class="button_x" onclick="btnPlusClick(document.getElementById('pAdultCount'))">+</button>
              <p id="pAdultCount"class="p_add_price">0</p>
              <button id="btnAdultMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pAdultCount'))">-</button>
            </div>
            <div class="div_hashtag">
              <p class="p_add_price">&nbsp&nbsp어린이&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
              <button id="btnChildrenPlus"class="button_x" onclick="btnPlusClick(document.getElementById('pChildrenCount'))">+</button>
              <p id="pChildrenCount"class="p_add_price">0</p>
              <button id="btnChildrenMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pChildrenCount'))">-</button>
            </div>
            <div class="div_hashtag">
              <p class="p_add_price">&nbsp&nbsp유아&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
              <button id="btnBabyPlus" class="button_x" onclick="btnPlusClick(document.getElementById('pBabyCount'))">+</button>
              <p id="pBabyCount"class="p_add_price">0</p>
              <button id="btnBabyMinus"class="button_x" onclick="btnMinusClick(document.getElementById('pBabyCount'))">-</button>
            </div>
          </div>
        </div>
      </div>
      <div class="content-right">
        <table id="calendar" align="center">
          <thead>
            <tr class="btn-wrap clearfix">
              <td>
                <label id="prev">
                    &#60;
                </label>
              </td>
              <td align="center" id="current-year-month" colspan="5"></td>
              <td>
                <label id="next">
                    &#62;
                </label>
              </td>
            </tr>
            <tr>
                <td class = "sun" align="center">Sun</td>
                <td align="center">Mon</td>
                <td align="center">Tue</td>
                <td align="center">Wed</td>
                <td align="center">Thu</td>
                <td align="center">Fri</td>
                <td class= "sat" align="center">Sat</td>
              </tr>
          </thead>
          <tbody id="calendar-body" class="calendar-body"></tbody>
        </table>
      </div>
    </div>
</body>
</html>
