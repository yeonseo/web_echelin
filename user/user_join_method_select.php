<!-- <img class="img_echelin_logo" src="../seller/image/cheese.png" alt="" onclick="location.href='../'">
       -->

<div class="singup_form">
  <div class="singup_web">
    <div style="margin-top :0; margin-bottom:0; margin-left:0; margin-right:0;">
      <div style="margin-top: 24px">
        <div class="singup_web4">
          <div style="margin-top: 24px; margin-bottom:24px;">
            <div>
              <div>
                <div>
                  <div style="margin-bottom: 20px;">
                    <form name="singup" action="echelin_insert2.php" method="post">
                      <!-- <div class="fb-login-button login_button"scope="public_profile,email" onlogin="checkLoginState();"  data-max-rows="5" data-size="large" data-button-type="continue_with" data-use-continue-as="true" data-auto-logout-link="true"></div> -->
                      <?php include "FB.php"; ?>
                      <?php include "naver_login.php"; ?>
                      <?php include "kakao.php"; ?>
                      <?php include "google_login.php"; ?>
                    </form>
                    <div style="margin-top: 16px; margin-bottom:16px">
                      <div class="email_form">
                        <span class="view_line">
                          <span class="view_or">또는</span>
                        </span>
                      </div>
                    </div>``
                    <div style="margin-top: 16px; margin-bottom:16px">
                      <a class="echelin_email" href="echelin_member_form.php" role="button" aria-busy="false">
                        이메일로 회원가입
                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height:34px;width:58px;display:inline-block;fill:currentColor; margin:-7px;">
                          <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd">
                          </path>
                        </svg>
                    </div>
                  </div>
                  </a>
                  <div style="margin-top:16px; margin-bottom:16px">
                    <div class="echelin_bottom">
                      이미 echelin 계정이 있으신가요?<br>
                      <a href="#" class="location_login" aria-busy="false">&nbsp;&nbsp; 로그인</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end of div_sign_form -->