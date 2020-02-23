<?php
$dir = $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/json";
$json_file_list = fileDir($dir, true);

//echo count($json_file_list) . '개 검색됨<br />';

// foreach ($json_file_list as $f) {
//     echo $f . '<br />';
//     $json_file_dir = $dir . "/" . $f;
//     $json_string = file_get_contents($json_file_dir);
//     $json_array = json_decode($json_string, true);
//     var_dump($json_array);
// }

foreach ($json_file_list as $f) {
    $json_file_dir = $dir . "/" . $f;
    $json_string = file_get_contents($json_file_dir);
    $json_file_dir = $dir . "/" . $f;
    getJsonData($json_string);
}

function fileDir($dir, $f = null)
{
    $raw = array();

    $dir = preg_replace(
        array("@[\.]+@", "@[/]+@"),
        array(".", "/"),
        trim($dir)
    );
    if (substr($dir, -1) === '/') {
        $dir = substr($dir, 0, -1);
    }

    if (is_dir($dir)) {
        clearstatcache();
        foreach (@scandir($dir) as $node) {
            if (($node !== ".") && ($node !== "..")) {
                if (is_file($dir . '/' . $node)) {
                    clearstatcache();
                    if ($f) {
                        $raw[] = rawurlencode($node);
                    }
                    continue;
                }
                $raw[rawurlencode($node) . '/'] =
                    fileDir($dir . '/' . $node, $f);
            }
        }
    }
    return $raw;
}

function checkJsonIsset($result_json, $value1, $i, $column_value)
{
    return (isset($result_json["DATA"][$i][$column_value]) ? ("'" . addslashes($result_json["DATA"][$i][$column_value]) . "'") : "''") . ", ";
}

function getJsonData($json_string)
{
    // 다차원 배열 반복처리
    ini_set('memory_limit', '-1');
    $result_json = json_decode($json_string, true);
    $sub_json_object_array = json_decode(json_encode($result_json), true);

    if (json_last_error() > 0) {
        echo json_last_error_msg() . PHP_EOL;
    }

    //print_r($result_json);
    //print_r($sub_json_object_array); // 배열 요소를 출력해준다.

    if (json_last_error() > 0) {
        echo json_last_error_msg() . PHP_EOL;
    }


    echo "<div class=";
    print COMMON::$css_card_menu_row;
    echo ">
      <button class=";
    print COMMON::$css_card_menu_btn;
    echo " type='button' onclick='location.href='http\://";
    $_SERVER['HTTP_HOST'];
    echo "/echelin/index.php''>
        <div class=";
    print COMMON::$css_card_menu_btn_icon;
    echo ">
          <i class='far fa-lightbulb'></i>
        </div>
        <div class=";
    print COMMON::$css_card_menu_btn_name;
    echo ">";
    print $result_json["TITLE"];
    echo "</div>";

    echo "<div class=";
    print COMMON::$css_card_menu_btn_disc;
    echo ">";
    for ($i = 0; $i < count($result_json["DESCRIPTION"]); $i++) {
        print $result_json["DESCRIPTION"][$i]["content"];
    } //end of for
    echo "</div>";

    echo "</button>
    </div> <!-- end of css_card_menu_row -->";
}
