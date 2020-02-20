<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/db_connector.php";

$dir = $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/json";
$json_file_list = fileDir($dir, true);

echo count($json_file_list) . '개 검색됨<br />';
// foreach ($json_file_list as $f) {
//     echo $f . '<br />';
// }

foreach ($json_file_list as $f) {
    echo $f . ' 시작 ... ';
    $json_file_dir = $dir . "/" . $f;
    // $json_file_dir = $dir . "/" . "Dobong.json";
    $json_string = file_get_contents($json_file_dir);
    getJsonInsertDB($con, $json_string);
    echo ' 완료 ... ';
    checkDoubleDataDel($con);
    echo ' 중복데이터 제거 ... <br />';
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

function checkJsonIsset($result_json, $i, $column_value)
{
    return (isset($result_json["DATA"][$i][$column_value]) ? ("'" . addslashes($result_json["DATA"][$i][$column_value]) . "'") : "''") . ", ";
}
function checkDoubleDataDel($con)
{
    //A_TABLE 테이블에서 tel과 name값이 같은것이 1개 초과인것을 "c"라는 임시필드로 출력하기

    $cnt_query = "SELECT `perm_nt_no`, COUNT( * ) AS c FROM `restaurants` GROUP BY  `perm_nt_no` HAVING c >1";

    $cnt_result = $con->query($cnt_query);

    $cnt = $cnt_result->fetch_array();

    //"c"라는 임시필드 갯수만큼 루프돌리기

    for ($i = 1; $i < $cnt['c']; $i++) {

        //중복된 필드들을 삭제

        $del_query = "delete from `restaurants` where `num` 
            NOT IN (SELECT * from (SELECT MIN(`num`) FROM `restaurants` GROUP BY `perm_nt_no`) 
            AS tempTable);";

        $del_result = $con->query($del_query);
        if ($del_result === TRUE) {
            echo "<script>console.log('restaurants 테이블에 중복 데이터가 삭제 되었습니다.');</script>";
        } else {
            die('DB Delete data Error: ' . mysqli_error($con));
        }
    }
}

function getJsonInsertDB($con, $json_string)
{
    // 다차원 배열 반복처리
    ini_set('memory_limit', '-1');
    $result_json = json_decode($json_string, true);
    $sub_json_object_array = json_decode(json_encode($result_json), true);

    if (json_last_error() > 0) {
        echo json_last_error_msg() . PHP_EOL;
    }

    // print_r($result_json); // 배열 요소를 출력해준다.
    // var_dump($result_json);

    if (json_last_error() > 0) {
        echo json_last_error_msg() . PHP_EOL;
    }

    for ($i = 0; $i < count($result_json["DATA"]); $i++) {
        if ($result_json["DATA"][$i]["dcb_gbn_nm"] === null) {
            $sql = "INSERT INTO `restaurants` (
            `trdp_area_dress_room`, `trdp_area`, `upso_site_telno`, `upso_sno`, `bdng_jisg_flr_num`, 
            `upso_nm`, `ntn`, `bdng_jisg_flr_num2`, `toil_etc_area_upso`, `bup_nm`,
            
            `grade_facil_gbn`, `area_wrk`, `perm_nt_cn`, `trdp_area_jorijang`, `cn_perm_stdt`,
            `ordtm_ptsof_avg`, `mng_gbn`, `perm_nt_ymd`, `cn_perm_enddt`, `site_addr`,
            
            `ptsof_sort`, `rfn_item`, `snt_cob_code`, `trdp_area_etc`, `cn_perm_nt_sayu`,
            `snt_cob_nm`, `bman_stdt`, `yy`, `one_ptsof_stf`, `site_addr_rd`,
            
            `site_loc_gbn`, `site_stdt`, `eip_woman`, `bdng_under_flr_num2`, `trdp_area_guest_seat`,
            `trdp_disp_sil_ar`, `bdng_tot_flr_num`, `area_isp`, `admdng_nm`, `ed_fin_ymd`,
            
            `kor_frgnr_gbn`, `cgg_code`, `bdng_under_flr_num`, `snt_uptae_nm`, `eip_man`,
            `trdp_area_room`, `trdp_area_dance`, `dcb_gbn_nm`, `trdp_ware_depo_ar`, `toil_area_upso`,
            
            `dcb_why`, `perm_nt_no`, `ge_eh_yn`, `ordtm_ptsof_max`, `avg_food_amt`,
            `dcb_ymd`, `upso_latitude`, `upso_longitude`) 
        VALUES (";

            $sql .= checkJsonIsset($result_json, $i, "trdp_area_dress_room");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area");
            $sql .= checkJsonIsset($result_json, $i, "upso_site_telno");
            $sql .= checkJsonIsset($result_json, $i, "upso_sno");
            $sql .= checkJsonIsset($result_json, $i, "bdng_jisg_flr_num");
            $sql .= checkJsonIsset($result_json, $i, "upso_nm");
            $sql .= checkJsonIsset($result_json, $i, "ntn");
            $sql .= checkJsonIsset($result_json, $i, "bdng_jisg_flr_num2");
            $sql .= checkJsonIsset($result_json, $i, "toil_etc_area_upso");
            $sql .= checkJsonIsset($result_json, $i, "bup_nm");

            $sql .= checkJsonIsset($result_json, $i, "grade_facil_gbn");
            $sql .= checkJsonIsset($result_json, $i, "area_wrk");
            $sql .= checkJsonIsset($result_json, $i, "perm_nt_cn");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area_jorijang");
            $sql .= checkJsonIsset($result_json, $i, "cn_perm_stdt");
            $sql .= checkJsonIsset($result_json, $i, "ordtm_ptsof_avg");
            $sql .= checkJsonIsset($result_json, $i, "mng_gbn");
            $sql .= checkJsonIsset($result_json, $i, "perm_nt_ymd");
            $sql .= checkJsonIsset($result_json, $i, "cn_perm_enddt");
            $sql .= checkJsonIsset($result_json, $i, "site_addr");

            $sql .= checkJsonIsset($result_json, $i, "ptsof_sort");
            $sql .= checkJsonIsset($result_json, $i, "rfn_item");
            $sql .= checkJsonIsset($result_json, $i, "snt_cob_code");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area_etc");
            $sql .= checkJsonIsset($result_json, $i, "cn_perm_nt_sayu");
            $sql .= checkJsonIsset($result_json, $i, "snt_cob_nm");
            $sql .= checkJsonIsset($result_json, $i, "bman_stdt");
            $sql .= checkJsonIsset($result_json, $i, "yy");
            $sql .= checkJsonIsset($result_json, $i, "one_ptsof_stf");
            $sql .= checkJsonIsset($result_json, $i, "site_addr_rd");

            $sql .= checkJsonIsset($result_json, $i, "site_loc_gbn");
            $sql .= checkJsonIsset($result_json, $i, "site_stdt");
            $sql .= checkJsonIsset($result_json, $i, "eip_woman");
            $sql .= checkJsonIsset($result_json, $i, "bdng_under_flr_num2");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area_guest_seat");
            $sql .= checkJsonIsset($result_json, $i, "trdp_disp_sil_ar");
            $sql .= checkJsonIsset($result_json, $i, "bdng_tot_flr_num");
            $sql .= checkJsonIsset($result_json, $i, "area_isp");
            $sql .= checkJsonIsset($result_json, $i, "admdng_nm");
            $sql .= checkJsonIsset($result_json, $i, "ed_fin_ymd");

            $sql .= checkJsonIsset($result_json, $i, "kor_frgnr_gbn");
            $sql .= checkJsonIsset($result_json, $i, "cgg_code");
            $sql .= checkJsonIsset($result_json, $i, "bdng_under_flr_num");
            $sql .= checkJsonIsset($result_json, $i, "snt_uptae_nm");
            $sql .= checkJsonIsset($result_json, $i, "eip_man");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area_room");
            $sql .= checkJsonIsset($result_json, $i, "trdp_area_dance");
            $sql .= checkJsonIsset($result_json, $i, "dcb_gbn_nm");
            $sql .= checkJsonIsset($result_json, $i, "trdp_ware_depo_ar");
            $sql .= checkJsonIsset($result_json, $i, "toil_area_upso");

            $sql .= checkJsonIsset($result_json, $i, "dcb_why");
            $sql .= checkJsonIsset($result_json, $i, "perm_nt_no");
            $sql .= checkJsonIsset($result_json, $i, "ge_eh_yn");
            $sql .= checkJsonIsset($result_json, $i, "ordtm_ptsof_max");
            $sql .= checkJsonIsset($result_json, $i, "avg_food_amt");

            $sql .= checkJsonIsset($result_json, $i, "dcb_ymd");

            $sql .= "null,null); ";

            $result = $con->query($sql);
            if ($result === TRUE) {
                echo "<script>console.log('restaurants 테이블에 데이터가 추가되었습니다.');</script>";
            } else {
                die('DB Create Table Error: ' . mysqli_error($con));
            }
        } //end of if ($result_json["DATA"][$i]["dcb_gbn_nm"] === null)
    } //end of for
}
