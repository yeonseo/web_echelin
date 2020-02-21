<!-- <?

$returnCode = $_GET["code"];
// 서버로 부터 토큰을 받을수 있는 코드를 받아온다
$restAPIKey="29c57ccb4fd8b583b3058cd512a7d804";
// Rest API키
$callbacURI= urlencode("http://localhost/Final_project/main_test.html");
// call Back URL 입력

// API 요청 URL
$returnUrl = "https://kauth.kakao.com/oauth/token?grant_type=authorization_code&client_id=".$restAPIKey."&redirect_uri=".$callbacURI."&code=".$returnCode;
 
$isPost = false;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $returnUrl);
curl_setopt($ch, CURLOPT_POST, $isPost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array();
$loginResponse = curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);

var_dump($loginResponse); // Kakao API 서버로 부터 받아온 값
$accessToken= json_decode($loginResponse)->access_token; //Access Token만 따로 뺌
echo "<br><br> accessToken : ".$accessToken;



?> -->