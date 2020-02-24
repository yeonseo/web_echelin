<?php

//테이블 양식에 맞춰서 적어 넣음

function create_table($con, $dbname, $table_name)
{
    $flag = "NO";
    $sql = "show tables from " . $dbname;
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('DB Database Connect Error: ' . mysqli_error($con));
    }

    while ($row = mysqli_fetch_row($result)) {
        if ($row[0] === "$table_name") {
            $flag = "OK";
            break;
        }
    } //end of while

    if ($flag === "NO") {
        switch ($table_name) {
                //멤버테이블
            case 'members':
                $sql = "CREATE TABLE `members` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `id` varchar(20) NOT NULL,
                    `pass` varchar(15) DEFAULT NULL,
                    `name` varchar(10) NOT NULL,
                    `email` varchar(80) DEFAULT NULL,
                    `regist_day` char(20)  DEFAULT NULL,
                    `level` int DEFAULT NULL,
                    `point` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`num`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;

                //메세지
            case 'message':
                $sql = "CREATE TABLE `message` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `send_id` varchar(20) NOT NULL,
                    `rv_id` varchar(20) NOT NULL,
                    `subject` varchar(200) NOT NULL,
                    `content` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    PRIMARY KEY (`num`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;

                //게시판
            case 'board':
                $sql = "CREATE TABLE `board` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `group_num` int unsigned NOT NULL,
                    `group_depth` int unsigned NOT NULL,
                    `group_order` int unsigned NOT NULL,
                    `id` varchar(20) NOT NULL,
                    `name` varchar(10) NOT NULL,
                    `subject` varchar(200) NOT NULL,
                    `content` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    `hit` int unsigned NOT NULL,
                    `file_name` varchar(45) DEFAULT NULL,
                    `file_copied` varchar(45) DEFAULT NULL,
                    `file_type` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8;
                    ";
                break;

            case 'restaurants':
                $sql = "CREATE TABLE `restaurants` (
                    `num` int unsigned NOT NULL AUTO_INCREMENT,
                    `trdp_area_dress_room` varchar(200), `trdp_area` varchar(200), `upso_site_telno` varchar(200), `upso_sno` varchar(200), `bdng_jisg_flr_num` varchar(200),
                    `upso_nm` varchar(200), `ntn` varchar(200), `bdng_jisg_flr_num2` varchar(200), `toil_etc_area_upso` varchar(200), `bup_nm` varchar(200),

                    `grade_facil_gbn` varchar(200), `area_wrk` varchar(200), `perm_nt_cn` varchar(200), `trdp_area_jorijang` varchar(200), `cn_perm_stdt` varchar(200),
                    `ordtm_ptsof_avg` varchar(200), `mng_gbn` varchar(200), `perm_nt_ymd` varchar(200), `cn_perm_enddt` varchar(200), `site_addr` varchar(200),

                    `ptsof_sort` varchar(200), `rfn_item` varchar(200), `snt_cob_code` varchar(200), `trdp_area_etc` varchar(200), `cn_perm_nt_sayu` varchar(200),
                    `snt_cob_nm` varchar(200), `bman_stdt` varchar(200), `yy` varchar(200), `one_ptsof_stf` varchar(200), `site_addr_rd` varchar(200),

                    `site_loc_gbn` varchar(200), `site_stdt` varchar(200), `eip_woman` varchar(200), `bdng_under_flr_num2` varchar(200), `trdp_area_guest_seat` varchar(200),
                    `trdp_disp_sil_ar` varchar(200), `bdng_tot_flr_num` varchar(200), `area_isp` varchar(200), `admdng_nm` varchar(200), `ed_fin_ymd` varchar(200),

                    `kor_frgnr_gbn` varchar(200), `cgg_code` varchar(200), `bdng_under_flr_num` varchar(200), `snt_uptae_nm` varchar(200), `eip_man` varchar(200),
                    `trdp_area_room` varchar(200), `trdp_area_dance` varchar(200), `dcb_gbn_nm` varchar(200), `trdp_ware_depo_ar` varchar(200), `toil_area_upso` varchar(200),

                    `dcb_why` varchar(200), `perm_nt_no` varchar(200), `ge_eh_yn` varchar(200), `ordtm_ptsof_max` varchar(200), `avg_food_amt` varchar(200),
                    `dcb_ymd` varchar(200), `upso_latitude` varchar(200), `upso_longitude` varchar(200),
                    PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8;
                    ";
                break;

<<<<<<< HEAD
            // 판매자테이블
            // case 'seller':
            //     $sql = "CREATE TABLE `seller` (
            //         `seller_num` int unsigned NOT NULL AUTO_INCREMENT,
            //         `store_name` varchar(45) NOT NULL,
            //         `business_license` int unsigned,
            //         `store_address` varchar(45) NOT NULL,
            //         `store_postcode` char(10) NOT NULL,
            //         `store_lat` double NOT NULL,
            //         `store_lon` double NOT NULL,
            //         `convenient_facilities` varchar(80) NOT NULL,
            //         `introduction` text DEFAULT NULL,
            //         `break_start` time DEFAULT NULL,
            //         `break_end` time DEFAULT NULL,
            //         `nokids` boolean NOT NULL,
            //         `opening_day` date NOT NULL,
            //         `opening_hours_start` time NOT NULL,
            //         `opening_hours_end` time NOT NULL,
            //         `store_tel` char(13) NOT NULL,
            //         `store_file_name` varchar(45) DEFAULT NULL,
            //         `store_file_copied` varchar(45) DEFAULT NULL,
            //         `store_file_type` varchar(45) DEFAULT NULL,
            //         `max_reserv_time_num_of_people` int unsigned NOT NULL,
            //         `max_reserv_month` char(10) NOT NULL,
            //         `intensity_of_reserv` char(10) NOT NULL,
            //         PRIMARY KEY (`seller_num`)
            //     ) DEFAULT CHARSET=utf8;
            //     ";
            //     break;
=======
                // 판매자테이블
            case 'seller':
                $sql = "CREATE TABLE `seller` (
                    `seller_num` int unsigned NOT NULL AUTO_INCREMENT,
                    `store_name` varchar(45) NOT NULL,
                    `business_license` int unsigned,
                    `store_address` varchar(45) NOT NULL,
                    `store_postcode` char(10) NOT NULL,
                    `store_lat` double NOT NULL,
                    `store_lon` double NOT NULL,
                    `convenient_facilities` varchar(80) NOT NULL,
                    `introduction` text DEFAULT NULL,
                    `break_start` time DEFAULT NULL,
                    `break_end` time DEFAULT NULL,
                    `nokids` boolean NOT NULL,
                    `opening_day` date NOT NULL,
                    `opening_hours_start` time NOT NULL,
                    `opening_hours_end` time NOT NULL,
                    `store_tel` char(13) NOT NULL,
                    `store_file_name` varchar(45) DEFAULT NULL,
                    `store_file_copied` varchar(45) DEFAULT NULL,
                    `store_file_type` varchar(45) DEFAULT NULL,
                    `max_reserv_time_num_of_people` int unsigned NOT NULL,
                    `max_reserv_month` char(10) NOT NULL,
                    `intensity_of_reserv` char(10) NOT NULL,
                    PRIMARY KEY (`seller_num`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;

            case 'keyword':
                $sql = "CREATE TABLE `keyword` (
                    `keywords_type` varchar(50) NOT NULL,
                    `keywords` varchar(500),
                    PRIMARY KEY (`keywords_type`)
                ) DEFAULT CHARSET=utf8;
                ";
                break;
>>>>>>> DB_test
        } //end of switch


        $result = $con->query($sql);
        if ($result === TRUE) {
            echo "<script>alert('$table_name 테이블이 생성되었습니다.');</script>";
        } else {
            die('DB Create Table Error: ' . mysqli_error($con));
        }

        insert_table($con, $table_name);
    } //end of if flag
} //end of function


function insert_table($con, $table_name)
{
    switch ($table_name) {
            //멤버테이블
        case 'members':
            $sql = "INSERT INTO `members` (`num`, `id`, `pass`, `name`, `email`, `regist_day`, `level`, `point`) VALUES
                (1, 'dustjnara', '123', '남연서', 'ys@d.c', '2020-01-31 (07:09)', 1, '1000'),
                (2, 'aaaaaa', 'A1231231234', 'yeonseo', 'ys@d.c', '2020-01-31 (07:16)', 1, '1500'),
                (3, 'sungmin', 'Sungmin1', '김성민', 'aa@aa.aa@', '2020-02-01 (04:08)', 2, '600'),
                (4, 'kimjisoo', 'Jisoo111', '김지수', 'aa@aa.aa@', '2020-02-01 (04:09)', 9, '500'),
                (5, 'dongun', 'Dongun11', '하동운', 'aa@aa.aa@', '2020-02-01 (04:10)', 9, '500'),
                (6, 'mooguan', 'Mooguan1', '이무권', 'aa@aa.aa@', '2020-02-01 (04:10)', 9, '600'),
                (7, 'yungsam', 'Yungsam1', '유영삼', 'aa@aa.aa@', '2020-02-01 (04:12)', 9, '500'),
                (9, 'aaaaaa1', 'A123123123', '남연서', 'ys@d.c@', '2020-02-04 (02:41)', 9, '0');
             ";
            break;

        case 'message':
            $sql = "INSERT INTO `message` (`num`, `send_id`, `rv_id`, `subject`, `content`, `regist_day`) VALUES
                (1, 'aaaaaa', 'aaaaaa1', '일기예보 보고도 우산안챙겨따...', 'ㅜㅜㅜㅜㅜㅜㅜㅜㅜ', '2020-02-10 (20:55)'),
                (2, 'aaaaaa', 'aaaaaa1', 'bbbbbb', 'bbbbbbbbbb', '2020-02-10 (21:28)'),
                (3, 'mooguan', 'dustjnara', '지금 DB테이블 확인해주세요~', '수정사항 적용해서 다시 만들어 보았습니다.', '2020-02-11 (16:34)'),
                (4, 'mooguan', 'dongun', '사용자가 로그인시 보여야할 사항이있을까요?', '지금 메인화면을 구현하고 있습니다. \r\n참고사항 알려주시면 적용해서 메인페이지 만들겠습니다. :-)', '2020-02-11 (16:35)');
            ";
            break;

        case 'board':
            $sql = "INSERT INTO `board` (`num`, `group_num`, `group_depth`, `group_order`, `id`, `name`, `subject`, `content`, `regist_day`, `hit`, `file_name`, `file_copied`, `file_type`) VALUES
                (31, 31, 0, 0, 'aaaaaa', 'yeonseo', '첫 게시물 입니다.', '첫 게시글 내용입니다.', '2020-02-11 (07:29)', 0, '', '', ''),
                (32, 32, 0, 0, 'aaaaaa', 'yeonseo', '파일을 첨부한 예시입니다.', '파일을 첨부합니다.', '2020-02-11 (07:30)', 0, 'cat0006.jpeg', '2020_02_11_07_30_04_cat0006.jpeg', 'image/jpeg'),
                (33, 33, 0, 0, 'aaaaaa', 'yeonseo', '요즘 날씨가 따뜻해졌네요!', '그치만 밤으로는 추우니 따뜻하게 입으세요 :-)', '2020-02-11 (07:30)', 1, '', '', ''),
                (34, 34, 0, 0, 'sungmin', '김성민', '안녕하세요 반갑습니다.', '잘 부탁드립니다.', '2020-02-11 (07:31)', 0, '37224268-cats-images.jpg', '2020_02_11_07_31_51_37224268-cats-images.jpg', 'image/jpeg'),
                (35, 33, 1, 1, 'sungmin', '김성민', 'Re : 요즘 날씨가 따뜻해졌네요!', ' 맞아요. 어제 저녁에 많이 춥더라구요! 감기 조심하세요\r\n-------------------------------------------------------------------- \r\n Re ( 33 ): 그치만 밤으로는 추우니 따뜻하게 입으세요 :-)', '2020-02-11 (07:32)', 0, '', '', ''),
                (36, 36, 0, 0, 'mooguan', '이무권', '프로젝트는 잘 진행되고 있습니다.', '메인화면 뷰를 만들고 있습니다.\r\n아마 내일이면 완료될 것 같아요.', '2020-02-11 (07:33)', 0, '', '', '');
            ";
            break;
        case 'restaurants':
            $sql = "INSERT INTO `restaurants` (`trdp_area_dress_room`, `trdp_area`, `upso_site_telno`, `upso_sno`, `bdng_jisg_flr_num`,
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
                            VALUES ('영업장탈의실면적', '영업장면적(m)', '소재지전화번호', '업소일련번호', '지상_부터',
                                    '업소명', '국적', '지상_까지', '타업소공동화장실면적', '법인명',

                                    '급수시설', '작업장면적', '신고조건', '영업장조리장면적', '조건부허가시작일',
                                    '평균급식인원수', '운영형태', '허가신고일', '조건부허가종료일', '소재지지번',

                                    '급식소종류', '참고사항', '업종코드', '영업장기타면적', '조건부허가신고사유',
                                    '업종명', '영업자시작일', '년도', '1일급식인원수', '소재지도로명',

                                    '업소위치', '소재지시작일', '종업원여', '지하_까지', '영업장객석면적',
                                    '진열(판매)대면적', '총층수', '검사실면적', '행정동명', '교육수료일자',

                                    '내외국인구분', '시군구코드', '지하_부터', '업태명', '종업원남',
                                    '영업장객실면적', '영업장무도장면적', '폐업구분', '창고(보관소)면적', '업소내화장실면적',

                                    '폐업사유', '허가(신고)번호', '모범음식점여부', '최대급식인원수', '일인당평균급식비',
                                    '폐업일자', '업소 위도', '위도 경도');
                                    ";
            break;

        case 'keyword':
            $sql = "INSERT INTO `keyword` (`keywords_type`, `keywords`) VALUES
                (`tag_class`, '	조용한,편안한,시끌벅적한,푸짐한,캐쥬얼한,아이와함께,모임하기좋은,특별한날,코스요리,프로포즈,데이트,백종원의3대천왕,생활의달인,수요미식회,혼밥'),
                (`food_class`, '	한식,양식,아시아음식,일식,중식,분식,카페,뷔페,기타');
             ";
            break;
    } //end of switch

    $result = $con->query($sql);
    if ($result === TRUE) {
        echo "<script>alert('$table_name 테이블에 데이터베이스가 추가되었습니다.');</script>";
    } else {
        die('DB Create Table Error: ' . mysqli_error($con));
    }
}//end of function
