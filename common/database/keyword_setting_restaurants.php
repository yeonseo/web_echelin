<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/db_connector.php";

function keyword_setting($con, $dbname)
{
    //keyword 테이블이 없으면 만듬
    $sql = "show tables from " . $dbname . "seller_keyword";
    if (!($con->query($sql))) {
        $sql = "CREATE TABLE `seller_keyword` (
            `num` int unsigned NOT NULL AUTO_INCREMENT,
            `seller_num` varchar(100) NOT NULL,
            `upso_nm` varchar(100) NOT NULL,
            `snt_uptae_nm` varchar(100) NOT NULL,
            `tag_class` varchar(100) NOT NULL,
            PRIMARY KEY (`num`)
        ) DEFAULT CHARSET=utf8;
        ";
        $con->query($sql);
    }


    //이부분을 seller에서 값을 들고와서 셋팅하는 것으로 바꾸기, 우선은 seller_num에 증가값 넣음
    //restaurants 테이블에서 값들고옴
    $sql = "select * from restaurants";
    $result_restaurants = $con->query($sql);
    if ($result_restaurants === FALSE) {
        die('DB restaurants Connect Error: ' . mysqli_error($con));
    }

    //식당 레코드만큼 while문을 돌려서 seller에 넣음
    while ($restaurant_row = mysqli_fetch_array($result_restaurants)) {
        $sql = "INSERT INTO `seller` (`upso_nm`, `snt_uptae_nm`, `tag_class`) VALUES
                ('" . addslashes($restaurant_row['upso_nm']) . "', '" . $restaurant_row['snt_uptae_nm'] . "');
             ";
        $insert_result = $con->query($sql);
        if ($insert_result === FALSE) {
            die('DB Database Connect Error: ' . mysqli_error($con));
        }
    } //end of while






    $sql = "select * from restaurants";
    $result_seller = $con->query($sql);
    if ($result_seller === FALSE) {
        die('DB restaurants Connect Error: ' . mysqli_error($con));
    }

    //키워드 테이블에서 값을 들고와서 ","로 나눈 배열로 만듬
    $sql = "select `keywords` from " . $dbname . ".keyword_list where `keywords_type`='food_class'";
    $result_food_class = mysqli_fetch_array($con->query($sql));
    $keyword_food = explode(',', $result_food_class['keywords']);

    $sql = "select `keywords` from " . $dbname . ".keyword_list where `keywords_type`='tag_class'";
    $result_tag_class = mysqli_fetch_array($con->query($sql));
    $keyword_tag = explode(',', $result_tag_class['keywords']);

    print_r($keyword_tag);


    //식당 레코드만큼 while문을 돌려서 랜덤으로 키워드, 업태명(null인 경우) 넣음
    while ($restaurant_row = mysqli_fetch_array($result_seller)) {
        if ($restaurant_row['snt_uptae_nm'] === "" | $restaurant_row['snt_uptae_nm'] === null | !$keyword_food) {
            $restaurant_row['snt_uptae_nm'] = $keyword_food[array_rand($keyword_food)];
        }

        $shuffle_array = $keyword_tag;
        shuffle($shuffle_array);
        $insert_random_tag = implode(",", array_splice($shuffle_array, 1, rand(2, 5)));
        $sql = "INSERT INTO `seller_keyword` (`upso_nm`, `snt_uptae_nm`, `tag_class`) VALUES
                ('" . addslashes($restaurant_row['upso_nm']) . "', '" . $restaurant_row['snt_uptae_nm'] . "', '" . $insert_random_tag . "');
             ";
        $insert_result = $con->query($sql);
        if ($insert_result === FALSE) {
            die('DB Database Connect Error: ' . mysqli_error($con));
        }
    } //end of while

} //end of function

keyword_setting($con, $dbname);
