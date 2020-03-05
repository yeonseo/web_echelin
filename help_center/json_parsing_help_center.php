<?php


//echo count($json_file_list) . '개 검색됨<br />';

// foreach ($json_file_list as $f) {
//     echo $f . '<br />';
//     $json_file_dir = $dir . "/" . $f;
//     $json_string = file_get_contents($json_file_dir);
//     $json_array = json_decode($json_string, true);
//     var_dump($json_array);
// }

function helpCenterMainButton()
{
    $dir = $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/json";
    $json_file_list = fileDir($dir, true);
    foreach ($json_file_list as $f) {
        $json_file_dir = $dir . "/" . $f;
        $json_string = file_get_contents($json_file_dir);
        $json_file_dir = $dir . "/" . $f;
        getJsonDataMakeButton($json_string, $f);
    }
}

function helpCenterArticlePage($article_file_name)
{
    $dir = $_SERVER['DOCUMENT_ROOT'] . "/echelin/help_center/json";
    $json_file_dir = $dir . "/" . $article_file_name . ".json";
    $json_string = file_get_contents($json_file_dir);
    getJsonDataMakeArticle($json_string);
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

function getJsonDataMakeButton($json_string, $f)
{
    // 다차원 배열 반복처리
    ini_set('memory_limit', '-1');
    $result_json = json_decode($json_string, true);
    $sub_json_object_array = json_decode(json_encode($result_json), true);

    $page_name = explode('.', $f);

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
    echo " type='button' onclick='location.href=\"http\://" . $_SERVER['HTTP_HOST'] . "/echelin/help_center/" . $page_name[0] . ".php\"'>
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
        if (is_array($result_json["DESCRIPTION"][$i]["content"])) {
            echo "array data";
        } else {
            print $result_json["DESCRIPTION"][$i]["content"];
        }
    } //end of for
    echo "</div>";

    echo "</button>
    </div> <!-- end of css_card_menu_row -->";
}


function getJsonDataMakeArticle($json_string)
{
    // 다차원 배열 반복처리 (필요시 사용)
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



    echo "<div class=" . COMMON::$css_article_content_box . ">";

    echo "<div class=" . COMMON::$css_article_content_title . ">";
    echo "<h1>" . $result_json["TITLE"] . "</h1>";
    for ($i = 0; $i < count($result_json["DESCRIPTION"]); $i++) {
        echo "<p>" . $result_json["DESCRIPTION"][$i]["content"] . "</p>";
    } //end of for
    echo "</div>";

    echo "<div class=" . COMMON::$css_article_content_sub_title . ">";
    for ($j = 0; $j < count($result_json["SUB_CONTENT"]); $j++) {
        echo "<h2>" . $result_json["SUB_CONTENT"][$j]["sub_title"] . "</h2>";
        for ($i = 0; $i < count($result_json["SUB_CONTENT"][$j]["sub_content"]); $i++) {
            if (is_array($result_json["SUB_CONTENT"][$j]["sub_content"][$i]["content"])) {
                echo "<ul>";
                for ($z = 0; $z < count($result_json["SUB_CONTENT"][$j]["sub_content"][$i]["content"]); $z++) {
                    echo "<li>" . $result_json["SUB_CONTENT"][$j]["sub_content"][$i]["content"][$z]["list"] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>" . $result_json["SUB_CONTENT"][$j]["sub_content"][$i]["content"] . "</p>";
            }
        } //end of $result_json["SUB_CONTENT"][$j]["sub_content"]
    } //end of for $result_json["SUB_CONTENT"]

    echo "</div>";

    echo "</div> <!-- end of css_article_content_box -->";
}
