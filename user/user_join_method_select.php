<div class="user_login_form">
  <div class="login_border">
    <form name="singup" action="user_join_insert.php" method="post">
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
      <div class="user_join_btn_box">
        <a class="echelin_email" href="user_join_signup.php" role="button" aria-busy="false">
          이메일로 회원가입
          <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height:34px;width:58px;display:inline-block;fill:currentColor; margin:-7px;">
            <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd">
            </path>
          </svg>
        </a>

      </div>
      <br>이미 echelin 계정이 있으신가요?<br>
      <div class="user_join_btn_box">
        <a href="user_login_select.php" aria-busy="false">로그인</a>
      </div>
    </div>
  </div><!-- end of div_sign_form  -->

</div>