<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    img {
      width : 40px;
      height : 40px;
      position: relative;
    }

    header {
      border-bottom: 2px solid lightgray;
      margin-bottom: 20px;
    }

    #header_span {
      position: absolute;
      margin-top: 14px;
    }
  </style>
  <body>
    <header>
      <img src="./image/cheese.png" alt="">
      <span id="header_span">3단계 : 손님을 맞이할 준비를 해주세요. </span>
    </header>

    <main>
      <div class="">
        <form class="" action="index.html" method="post">

        <ul>
          <li>최대 예약 가능 인원을 적어주세요.
          </br>
            <input type="text" name="" value="">
          </li>

          <li>예약 가능한 시간을 설정해주세요.
          </br>
            <input type="time" name="" value="">&nbsp-
            <input type="time" name="" value="">
          </li>

          <li>예약 가능한 기간을 설정해주세요.
          </br>
            <input type="date" name="" value="">&nbsp-
            <input type="date" name="" value="">
          </li>
        </ul>

        <input type="button" name="" value="계속" onclick="location.href='./seller_register_complete.php'">
        </form>
      </div>
    </main>



  </body>
</html>
