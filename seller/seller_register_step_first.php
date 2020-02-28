
      <div class="div_step">
        <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="" onclick="location.href='../'">
        <span class="span_step_info">1단계 : 기본 사항을 입력해주세요.</span>
      </div>

      <progress value="16.6" max="100"></progress>

      <div class="div_outside">
      </div>
        <div class="div_register_shape">
          <div class="div_register_inner_shape">
            <span class="span_user_name">김지수</span>
            <span class="span_hello">님 안녕하세요!</span>
            <span class="span_register_info">가게 등록을 시작해볼까요?</span>
            <div class="div_form">
              <form class="" name="form_seller_register_step_first"action="./seller_register_step_second.php" method="post">
                <div class="div_except_button">
                  <ul>
                    <li>등록하시려는 식당 이름을 적어주세요.</li>
                      <input id="input_store_name" class="input_info" type="text" name="input_store_name" value="">
                    </br></br>

                    <li>사업자번호를 입력해주세요</li>
                      <input id="input_business_license" class="input_info" type="number" name="input_business_license" value="">
                      <button id="button_register" class="button_find_add_comp" type="button" name="button" onclick="businessLicense()">등록</button>
                      <!-- <input type="button" name="" value="등록" onclick="businessLicense()"> -->
                      <div id="div_state" class="div_state"></div>
                  </ul>
                </div> <!-- div_except_button -->
                <div class="div_prv_next_button">
                  <button class="button_next" id="button_next" type="button" name="button" onclick="stepCheck()">다음</button>
                </div>
              </form>
            </div>
          </div> <!-- div_register_inner_shape -->
      </div> <!--div_register_shape-->
