<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./echelin/user/css/user_signup_form.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/user/css/user_signup_form.css">
    
    <head>  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>
    
</head>
<body>

<header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
</header>


    <div class="user_singup_form">
    <div style="margin-top: 24px">
    <div class="singup_border">
        <div style="margin-top:24px; margin-bottom:24px">
        <div>
         <div>
             <div class="form_center">
                 <div class="form_font">
                <a href="#">페이스북</a> &nbsp; 또는 <a href="#">구글</a>로 회원 가입하세요.
                 </div>
             </div>
         </div>   
        </div>
        <div style="margin-top: 16px; margin-bottom: 16px;">
        <div class="before_O">
            <span class="before_T">
                <span class="singup_form3">또는</span>
            </span>


            
        </div>
    <form action="" method="post">
        <div style="margin-bottom:16px">
              <div class="input_form">
                  <div class="input_form2">
                  <input autocomplete="user_email" class="_14fdu48d" id="email-signup-email" name="user[email]" placeholder="이메일 주소" type="email" value=""> 
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;">
                  <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd"></path></svg>


                  <input autocomplete="username" class="_14fdu48d" id="test1" name="user[name]" placeholder="이름(예:길동)" type="email" value="">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;">    
                  <path d="m14.76 11.38a6.01 6.01 0 0 0 3.28-5.36 6.02 6.02 0 0 0 -12.04 0 6.01 6.01 0 0 0 3.27 5.35c-4.81 1.22-9.27 5.31-9.27 8.7 0 1.56 6.8 3.93 12 3.93 5.23 0 12-2.34 12-3.93 0-3.39-4.45-7.47-9.24-8.7zm-7.76-5.36a5.02 5.02 0 0 1 10.04 0c0 2.69-2.12 4.87-4.78 5-.09 0-.18-.01-.26-.01s-.16.01-.24.01c-2.65-.14-4.76-2.32-4.76-5zm15.9 14.09a3.8 3.8 0 0 1 -.64.44c-.62.36-1.5.75-2.52 1.1-2.41.83-5.18 1.35-7.74 1.35-2.55 0-5.32-.52-7.74-1.37-1.01-.35-1.9-.74-2.52-1.1-.47-.27-.74-.51-.74-.46 0-3.35 5.55-7.85 10.64-8.05.13.01.25.02.38.02.12 0 .24-.01.36-.02 5.09.22 10.62 4.71 10.62 8.05 0-.07-.02-.04-.1.04z" fill-rule="evenodd"></path></svg>
                  
                  
                  <input autocomplete="username" class="_14fdu48d" id="test2" name="user[sung]" placeholder="성(예:홍)" type="email" value="">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;"> 
                  <path d="m14.76 11.38a6.01 6.01 0 0 0 3.28-5.36 6.02 6.02 0 0 0 -12.04 0 6.01 6.01 0 0 0 3.27 5.35c-4.81 1.22-9.27 5.31-9.27 8.7 0 1.56 6.8 3.93 12 3.93 5.23 0 12-2.34 12-3.93 0-3.39-4.45-7.47-9.24-8.7zm-7.76-5.36a5.02 5.02 0 0 1 10.04 0c0 2.69-2.12 4.87-4.78 5-.09 0-.18-.01-.26-.01s-.16.01-.24.01c-2.65-.14-4.76-2.32-4.76-5zm15.9 14.09a3.8 3.8 0 0 1 -.64.44c-.62.36-1.5.75-2.52 1.1-2.41.83-5.18 1.35-7.74 1.35-2.55 0-5.32-.52-7.74-1.37-1.01-.35-1.9-.74-2.52-1.1-.47-.27-.74-.51-.74-.46 0-3.35 5.55-7.85 10.64-8.05.13.01.25.02.38.02.12 0 .24-.01.36-.02 5.09.22 10.62 4.71 10.62 8.05 0-.07-.02-.04-.1.04z" fill-rule="evenodd">
                  </path></svg>
                  
                  <input autocomplete="off" class="_14fdu48d" id="test3" name="user[password]" placeholder="비밀번호 설정하기" type="password" autocapitalize="none" autocorrect="off" spellcheck="false" value="">
                  <svg viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" focusable="false" style="
                    margin-left: -16px;
                    height: 1em;
                    width: 1em;
                    display: block;
                    fill: currentcolor;
                    margin-top: -40px;"> 
                  <path d="m21.53 18.07c.15.22.46.28.69.13a.47.47 0 0 0 .14-.66l-1.32-1.9c1.86-1.33 2.97-3.11 2.97-5.17a.49.49 0 0 0 -.5-.48.49.49 0 0 0 -.5.48c0 3.82-4.73 6.7-11 6.7s-11-2.87-11-6.7a.49.49 0 0 0 -.5-.48.49.49 0 0 0 -.5.48c0 2.05 1.11 3.84 2.97 5.17l-1.32 1.9a.47.47 0 0 0 .14.66c.23.15.54.09.69-.13l1.32-1.9c.94.55 2.03.99 3.23 1.32a.29.29 0 0 0 -.01.04l-.58 2.23a.48.48 0 0 0 .36.58.5.5 0 0 0 .61-.35l.58-2.23.01-.04c1.1.23 2.28.37 3.51.4v2.4a.49.49 0 0 0 .5.48.49.49 0 0 0 .5-.48v-2.4a19.39 19.39 0 0 0 3.51-.4l.01.04.58 2.23a.5.5 0 0 0 .61.35.48.48 0 0 0 .36-.58l-.58-2.23-.01-.04c1.2-.33 2.29-.77 3.23-1.32z" fill-rule="evenodd"></path></svg>
                    </div>
              </div>  
            </div>
        
           <!-- // <div><div class="_e4x16a"><div class="_sesj4n"><div class="_hgs47m"><div class="_ni9axhe"><div style="margin-right: 8px;"><div role="img" aria-label="규칙이 통과되지 않았습니다" style="height: 14px; width: 14px;"><svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 14px; width: 14px; display: block; fill: currentcolor;"><path d="m23.25 24c-.19 0-.38-.07-.53-.22l-10.72-10.72-10.72 10.72c-.29.29-.77.29-1.06 0s-.29-.77 0-1.06l10.72-10.72-10.72-10.72c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l10.72 10.72 10.72-10.72c.29-.29.77-.29 1.06 0s .29.77 0 1.06l-10.72 10.72 10.72 10.72c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22" fill-rule="evenodd"></path></svg></div></div></div><div class="_10ejfg4u"><span class="_sesj4n">비밀번호 보안 수준: </span><span class="_sesj4n">약함</span></div></div></div></div><div class="_e4x16a"><div class="_sesj4n"><div class="_hgs47m"><div class="_ni9axhe"><div style="margin-right: 8px;"><div role="img" aria-label="규칙이 통과되지 않았습니다" style="height: 14px; width: 14px;"><svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 14px; width: 14px; display: block; fill: currentcolor;"><path d="m23.25 24c-.19 0-.38-.07-.53-.22l-10.72-10.72-10.72 10.72c-.29.29-.77.29-1.06 0s-.29-.77 0-1.06l10.72-10.72-10.72-10.72c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l10.72 10.72 10.72-10.72c.29-.29.77-.29 1.06 0s .29.77 0 1.06l-10.72 10.72 10.72 10.72c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22" fill-rule="evenodd"></path></svg></div></div></div><div class="_10ejfg4u">비밀번호에 본인 이름이나 이메일 주소를 포함할 수 없습니다.</div></div></div><div class="_sesj4n"><div class="_hgs47m"><div class="_ni9axhe"><div style="margin-right: 8px;"><div role="img" aria-label="규칙이 통과되지 않았습니다" style="height: 14px; width: 14px;"><svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 14px; width: 14px; display: block; fill: currentcolor;"><path d="m23.25 24c-.19 0-.38-.07-.53-.22l-10.72-10.72-10.72 10.72c-.29.29-.77.29-1.06 0s-.29-.77 0-1.06l10.72-10.72-10.72-10.72c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l10.72 10.72 10.72-10.72c.29-.29.77-.29 1.06 0s .29.77 0 1.06l-10.72 10.72 10.72 10.72c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22" fill-rule="evenodd"></path></svg></div></div></div><div class="_10ejfg4u">최소 8자</div></div></div><div class="_sesj4n"><div class="_hgs47m"><div class="_ni9axhe"><div style="margin-right: 8px;"><div role="img" aria-label="규칙이 통과되지 않았습니다" style="height: 14px; width: 14px;"><svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 14px; width: 14px; display: block; fill: currentcolor;"><path d="m23.25 24c-.19 0-.38-.07-.53-.22l-10.72-10.72-10.72 10.72c-.29.29-.77.29-1.06 0s-.29-.77 0-1.06l10.72-10.72-10.72-10.72c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l10.72 10.72 10.72-10.72c.29-.29.77-.29 1.06 0s .29.77 0 1.06l-10.72 10.72 10.72 10.72c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22" fill-rule="evenodd"></path></svg></div></div></div><div class="_10ejfg4u">숫자나 기호를 포함하세요</div></div></div></div></div> -->
    </div>
        </div>
        <div style="margin-bottom: 16px">
        <div>
            <div style="margin-bottom: 0px">
            <div class="birth_day">
                <strong>생일</strong>
            </div>
            <div class="birth_iuput" style="margin-top: 8px; margin-bottom:16px">
            <div class="birth_input2"> 만 18세 이상의 성인만 회원으로 가입할 수 있습니다
                생일은 다른 Echelin <br>이용자에게 공개되지 않습니다.
            </div>


            <div role="group">
            <div class="month_form">
                <div class="month_form2">
                    <div class="month_form3">
                        <div class="month_form4">
                            <div class="month_form5">
                                <select name="" id="" class="final_month_form">
                                <option value="">월</option>
                                <option value="1">1월</option>
                                <option value="2">2월</option>
                                <option value="3">3월</option>
                                <option value="4">4월</option>
                                <option value="5">5월</option>
                                <option value="6">6월</option>
                                <option value="7">7월</option>
                                <option value="8">8월</option>
                                <option value="9">9월</option>
                                <option value="10">10월</option>
                                <option value="11">11월</option>
                                <option value="12">12월</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- end of month_form -->

            <div class="day_form">
                <div class="day_form2">
                    <div class="day_form3">
                        <div class="day_form4">
                            <select name="" id="" class="day_final_form">
                            <option value="">일</option>
                                <option value="1">1일</option>
                                <option value="2">2일</option>
                                <option value="3">3일</option>
                                <option value="4">4일</option>
                                <option value="5">5일</option>
                                <option value="6">6일</option>
                                <option value="7">7일</option>
                                <option value="8">8일</option>
                                <option value="9">9일</option>
                                <option value="10">10일</option>
                                <option value="11">11일</option>
                                <option value="12">12일</option>
                                <option value="13">13일</option>
                                <option value="14">14일</option>
                                <option value="15">15일</option>
                                <option value="16">16일</option>
                                <option value="17">17일</option>
                                <option value="18">18일</option>
                                <option value="19">19일</option>
                                <option value="20">20일</option>
                                <option value="21">21일</option>
                                <option value="22">22일</option>
                                <option value="23">23일</option>
                                <option value="24">24일</option>
                                <option value="25">25일</option>
                                <option value="26">26일</option>
                                <option value="27">27일</option>
                                <option value="28">28일</option>
                                <option value="29">29일</option>
                                <option value="30">30일</option>
                                <option value="31">31일</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end of month form -->

            <div class="year_form">
                <div class="year_form2">
                    <div class="year_form3">
                        <div class="year_form4">
                            <select name="" id="" class="final_year_form">
                            <option value="">년</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>


                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>


                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>

                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>

                            
                            <option value="1989">1979</option>
                            <option value="1988">1978</option>
                            <option value="1987">1977</option>
                            <option value="1986">1976</option>
                            <option value="1985">1975</option>
                            <option value="1984">1974</option>
                            <option value="1983">1973</option>
                            <option value="1982">1972</option>
                            <option value="1981">1971</option>
                            <option value="1980">1970</option>

                            
                            <option value="1989">1969</option>
                            <option value="1988">1968</option>
                            <option value="1987">1967</option>
                            <option value="1986">1966</option>
                            <option value="1985">1965</option>
                            <option value="1984">1964</option>
                            <option value="1983">1963</option>
                            <option value="1982">1962</option>
                            <option value="1981">1961</option>
                            <option value="1980">1960</option>
                            
                            
                            <option value="1989">1959</option>
                            <option value="1988">1958</option>
                            <option value="1987">1957</option>
                            <option value="1986">1956</option>
                            <option value="1985">1955</option>
                            <option value="1984">1954</option>
                            <option value="1983">1953</option>
                            <option value="1982">1952</option>
                            <option value="1981">1951</option>
                            <option value="1980">1950</option>

                            
                            <option value="1989">1949</option>
                            <option value="1988">1948</option>
                            <option value="1987">1947</option>
                            <option value="1986">1946</option>
                            <option value="1985">1945</option>
                            <option value="1984">1944</option>
                            <option value="1983">1943</option>
                            <option value="1982">1942</option>
                            <option value="1981">1941</option>
                            <option value="1980">1940</option>

                            
                            <option value="1989">1939</option>
                            <option value="1988">1938</option>
                            <option value="1987">1937</option>
                            <option value="1986">1936</option>
                            <option value="1985">1935</option>
                            <option value="1984">1934</option>
                            <option value="1983">1933</option>
                            <option value="1982">1932</option>
                            <option value="1981">1931</option>
                            <option value="1980">1930</option>

                            
                            <option value="1989">1929</option>
                            <option value="1988">1928</option>
                            <option value="1987">1927</option>
                            <option value="1986">1926</option>
                            <option value="1985">1925</option>
                            <option value="1984">1924</option>
                            <option value="1983">1923</option>
                            <option value="1982">1922</option>
                            <option value="1981">1921</option>
                            <option value="1980">1920</option>

                            
                            <option value="1989">1919</option>
                            <option value="1988">1918</option>
                            <option value="1987">1917</option>
                            <option value="1986">1916</option>
                            <option value="1985">1915</option>
                            <option value="1984">1914</option>
                            <option value="1983">1913</option>
                            <option value="1982">1912</option>
                            <option value="1981">1911</option>
                            <option value="1980">1910</option>

                            
                            <option value="1989">1909</option>
                            <option value="1988">1908</option>
                            <option value="1987">1907</option>
                            <option value="1986">1906</option>
                            <option value="1985">1905</option>
                            <option value="1984">1904</option>
                            <option value="1983">1903</option>
                            <option value="1982">1902</option>
                            <option value="1981">1901</option>
                            <option value="1980">1900</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end of year_form -->

            <div class="bottom_form">
                <br>
                <br>
                <br>
                Echelin 의 회원 전용 할인 , 추천 맛집 정보 , 프로모션 및 정책 변경사항을 이메일로 보내드립니다. 계정 관리의 환경설정
                또는 프로모션 알림에서 언제든지 메시지 수신을 거부할 수 있습니다.
            </div><!-- end of bottom_form -->

            <div class="check_box_form">
            <div class="check_box_form2">
                <input id="check" type="checkbox">
                <label for="check">
                    
                <span>
                    
                <svg viewBox="0 0 52 52" fill="currentColor" fill-opacity="0" stroke="currentColor" stroke-width="8" focusable="false" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 1.5em;  color:white; width: 1.39em; display: block; overflow: visible;">
                <path d="m19.1 25.2 4.7 6.2 12.1-11.2">
                    
                    
                </path>
                
            </svg>
            </span>
            
        </label>        
            </div>
            </div><!--end of check_box_form  -->

            <div class="checkbox_text">
             &nbsp;Echelin 에서 보내는 마케팅 메시지를 받고 싶지 않습니다. 
            </div><!-- end of checkbox_text -->

           
            <button type="submit" class="data_button">
                <span>가입하기</span>
            </button>
            <div style="margin-top:16px; margin-bottom:16px">
                    <div class="echelin_bottom_form">
                      이미 echelin 계정이 있으신가요?
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
    
    </form>
</body>
</html>

