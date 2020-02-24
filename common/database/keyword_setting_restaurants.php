<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/db_connector.php";

function keyword_setting($con, $dbname)
{

    //keyword_restaurant 테이블이 없으면 만듬
    $sql = $sql = "show tables from " . $dbname . "keyword_restaurant";
    if (!($con->query($sql))) {
        $sql = "CREATE TABLE `keyword_restaurant` (
            `num` int unsigned NOT NULL,
            `upso_nm` varchar(100) NOT NULL,
            `snt_uptae_nm` varchar(100) NOT NULL,
            `tag_class` varchar(100) NOT NULL,
            PRIMARY KEY (`num`)
        ) DEFAULT CHARSET=utf8;
        ";
        $con->query($sql);
    }

    //restaurants 테이블에서 값들고옴
    $sql = "select num, upso_nm, snt_uptae_nm from" . $dbname . ".restaurants";
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB Database Connect Error: ' . mysqli_error($con));
    }

    //키워드 테이블에서 값을 들고와서 ","로 나눈 배열로 만듬
    $sql = "select food_class from" . $dbname . ".keyword";
    $keyword_food = explode(',', $con->query($sql));
    $sql = "select tag_class from" . $dbname . ".keyword";
    $keyword_tag = explode(',', $con->query($sql));

    //식당 레코드만큼 while문을 돌려서 랜덤으로 키워드, 업태명(null인 경우) 넣음
    while ($restaurant_row = mysqli_fetch_row($result)) {
        if ($result['snt_uptae_nm'] === "" | $result['snt_uptae_nm'] === null) {
            $result['snt_uptae_nm'] = array_rand($keyword_tag, 1);
        }
        $insert_random_tag = implode(",", array_rand($keyword_tag, rand(1, 4)));
        $sql = "INSERT INTO `keyword_restaurant` (`num`, `upso_nm`, `snt_uptae_nm`, `tag_class`) VALUES
                ('" . $result['num'] . "', '" . $result['upso_nm'] . "', '" . $result['snt_uptae_nm'] . "', '" . $insert_random_tag . "');
             ";
    } //end of while

} //end of function
