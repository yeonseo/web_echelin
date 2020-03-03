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
            case 'echelin_user':
                $sql = "CREATE TABLE `echelin_user` (
                    `user_num` int(20) NOT NULL AUTO_INCREMENT,
                    `user_sns` varchar(20) DEFAULT NULL,
                    `user_Email` varchar(100) DEFAULT NULL,
                    `user_checkEmail` varchar(20) DEFAULT NULL,
                    `user_password` varchar(20) DEFAULT NULL,
                    `user_name` varchar(20) DEFAULT NULL,
                    `user_age` varchar(20) DEFAULT NULL,
                    `user_phone` varchar(20) DEFAULT NULL,
                    `user_regist_day` varchar(20) DEFAULT NULL,
                    `user_profile` varchar(80) DEFAULT NULL,
                    `user_profile_copied` varchar(80) DEFAULT NULL,
                    `user_profile_type` varchar(80) DEFAULT NULL,
                    `user_aboutme` varchar(300) DEFAULT NULL,
                    `user_Level` varchar(20) DEFAULT 1,
                    PRIMARY KEY (`user_num`)
                    )DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                ";
                break;

                //메세지
            case 'message':
                $sql = "CREATE TABLE `message` (
                    `message_num` int unsigned NOT NULL AUTO_INCREMENT,
                    `group_num` int unsigned NOT NULL,
                    `group_order` int unsigned NOT NULL,
                    `send_id` varchar(20) NOT NULL,
                    `rv_id` varchar(20) NOT NULL,
                    `subject` varchar(200) NOT NULL,
                    `content` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    `file_name` varchar(45) DEFAULT NULL,
                    `file_copied` varchar(45) DEFAULT NULL,
                    `file_type` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`message_num`)
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

                // 판매자테이블
            case 'seller':
                $sql = "CREATE TABLE `seller` (
                  `seller_num` int unsigned NOT NULL AUTO_INCREMENT,
                  `user_id` varchar(20) NOT NULL,
                  `business_license` char(10) NOT NULL,
                  `store_name` varchar(45) NOT NULL,
                  `store_type` varchar(45) NOT NULL,
                  `store_address` varchar(400) NOT NULL,
                  `store_postcode` char(10) NOT NULL,
                  `store_lat` double NOT NULL,
                  `store_lon` double NOT NULL,
                  `convenient_facilities` varchar(80) NOT NULL,
                  `introduction` text DEFAULT NULL,
                  `break_start` char(10) DEFAULT NULL,
                  `break_end` char(10) DEFAULT NULL,
                  `nokids` boolean NOT NULL,
                  `opening_day` date NOT NULL,
                  `opening_hours_start` char(10) NOT NULL,
                  `opening_hours_end` char(10) NOT NULL,
                  `store_tel` char(13) NOT NULL,
                  `special_note` text DEFAULT NULL,
                  `max_reserv_time_num_of_people` int unsigned NOT NULL,
                  `max_reserv_month` char(10) NOT NULL,
                  `intensity_of_reserv` char(10) NOT NULL,
                  PRIMARY KEY (`seller_num`)
                ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
              ";
                break;

                //유저 가게 찜목록 테이블
            case 'seller':
                $sql = "CREATE TABLE `user_mylist` (
                    `mylist_num` int unsigned NOT NULL AUTO_INCREMENT,
                    `user_num` int NOT NULL,
                    `seller_num` int NOT NULL,
                    `store_name` varchar(80) NOT NULL,
                    `pic_file` varchar(80) DEFAULT NULL,
                    `regist_day` varchar(45) NOT NULL,
                    PRIMARY KEY (`mylist_num`)
                    ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
              ";
                break;

                //키워드 모음 테이블
            case 'keyword_list':
                $sql = "CREATE TABLE `keyword_list` (
                        `keyword_num` int unsigned NOT NULL AUTO_INCREMENT,
                        `keywords_type` varchar(80) NOT NULL,
                        `keywords` varchar(80) DEFAULT NULL,
                        PRIMARY KEY (`keyword_num`)
                        ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                  ";
                break;

                // 식당 외/내부 사진 테이블
            case 'store_img':
                $sql = "CREATE TABLE `store_img` (
                        `num` int unsigned NOT NULL AUTO_INCREMENT,
                        `user_id` varchar(20) NOT NULL,
                        `seller_num` int unsigned NOT NULL,
                        `store_name` varchar(45) NOT NULL,
                        `store_file_name` varchar(45) NOT NULL,
                        `store_file_type` varchar(45) NOT NULL,
                        `store_file_copied` varchar(45) NOT NULL,
                        PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                  ";
                break;

            case 'menu_img':
                $sql = "CREATE TABLE `menu_img` (
                      `num` int unsigned NOT NULL AUTO_INCREMENT,
                      `user_id` varchar(20) NOT NULL,
                      `seller_num` int unsigned NOT NULL,
                    	`store_name` varchar(45) NOT NULL,
                      `menu_name` varchar(45) NOT NULL,
                      `menu_price` int unsigned NOT NULL,
                    	`menu_file_name` varchar(45) NOT NULL,
                    	`menu_file_type` varchar(45) NOT NULL,
                    	`menu_file_copied` varchar(45) NOT NULL,
                    	`menu_explain` text DEFAULT NULL,
                      PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                  ";
                break;
            case 'bookmark':
                $sql = "CREATE TABLE `bookmark` (
                    `bookmark_num` int unsigned NOT NULL AUTO_INCREMENT,
                    `user_id` varchar(20) NOT NULL,
                    `bookmark_subject` varchar(200) NOT NULL,
                    `group_num` int unsigned NOT NULL,
                    `seller_num` text NOT NULL,
                    `regist_day` varchar(20) NOT NULL,
                    `file_name` varchar(45) DEFAULT NULL,
                    `file_copied` varchar(45) DEFAULT NULL,
                    `file_type` varchar(45) DEFAULT NULL,
                    PRIMARY KEY (`bookmark_num`)
                    ) DEFAULT CHARSET=utf8;
                  ";
                break;
            case 'reservation':
                $sql = "CREATE TABLE `reservation` (
                              `reservation_num` int unsigned NOT NULL AUTO_INCREMENT,
                              `store_name` varchar(45) NOT NULL,
                              `introduction` text DEFAULT NULL,
                              `user_id` varchar(20) NOT NULL,
                              `seller_id` varchar(20) NOT NULL,
                              `select_date` char(15) NOT NULL,
                              `select_time` char(8) NOT NULL,
                              `select_person` char(5) NOT NULL,
                              `select_menu` text NOT NULL,
                              `reservation_special` text DEFAULT NULL,
                              `reservation_status` int unsigned NOT NULL,
                              PRIMARY KEY (`reservation_num`)
                            ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                          ";
                break;
                // 리뷰 테이블
            case 'review':
                $sql = "CREATE TABLE `review` (
                  `num` int unsigned NOT NULL AUTO_INCREMENT,
                  `seller_num` int NOT NULL,
                  `user_Email` varchar(100) DEFAULT NULL,
                  `user_name` varchar(20) DEFAULT NULL,
                  `store_name` varchar(45) NOT NULL,
                  `content` text DEFAULT NULL,
                  `file_name` varchar(45) DEFAULT NULL,
                  `file_copied` varchar(45) DEFAULT NULL,
                  `file_type` varchar(45) DEFAULT NULL,
                  `star_access` int default '0',
                  `star_service` int default '0',
                  `star_flavor` int default '0',
                  `star_avg` float(2,1) default '0',
                  `chu_up` int(11) default '0',
                  `chu_down` int(11) default '0',
                  `regist_day` varchar(20) NOT NULL,
                  PRIMARY KEY (`num`)
                ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                ";
                break;
                // 광고 테이블
            case 'advertise':
                $sql = "CREATE TABLE `advertise`(
                	`num` int unsigned NOT NULL AUTO_INCREMENT,
                	`seller_num` int unsigned NOT NULL,
                  `file_name` varchar(45) NOT NULL,
                	`file_type` varchar(45) NOT NULL,
                	`file_copied` varchar(45) NOT NULL,
                  `store_name` varchar(45) NOT NULL,
                  `introduction` text DEFAULT NULL,
                  `regist_day` varchar(20) NOT NULL,
                  `noshow` boolean not null,
                  PRIMARY KEY (`num`)
                )DEFAULT CHARSET=utf8 ENGINE = InnoDB;
                ";
                break;
            case 'seller_keyword':
                $sql = "CREATE TABLE `seller_keyword` (
                    `num` int(10) UNSIGNED NOT NULL,
                    `seller_num` varchar(100) NOT NULL,
                    `seller_name` varchar(100) NOT NULL,
                    `seller_address` varchar(300) NOT NULL,
                    `seller_uptae_nm` varchar(100) NOT NULL,
                    `tag_class` varchar(100) NOT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                ";
                break;
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
        case 'echelin_user':
            $sql = "INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`)
            VALUES ('','k@naver.com','1','1','유저1',NULL,NULL,NULL,NULL,'1'),
            ('','s@naver.com','1','1','판매자1',NULL,NULL,NULL,NULL,'10'),
            ('','m@naver.com','1','1','관리자1',NULL,NULL,NULL,NULL,'100');
             ";
            break;

        case 'message':
            $sql = "INSERT INTO `message` (`message_num`, `send_id`, `rv_id`, `group_num`, `group_order`, `subject`, `content`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
                (1, 'aaaaaa', 'aaaaaa1', 0,0, '일기예보 보고도 우산안챙겨따...', 'ㅜㅜㅜㅜㅜㅜㅜㅜㅜ', '2020-02-10 (20:55)','','',''),
                (2, 'aaaaaa', 'aaaaaa1', 0,0, 'bbbbbb', 'bbbbbbbbbb', '2020-02-10 (21:28)','','',''),
                (3, 'mooguan', 'dustjnara', 0,0, '지금 DB테이블 확인해주세요~', '수정사항 적용해서 다시 만들어 보았습니다.', '2020-02-11 (16:34)','','',''),
                (4, 'mooguan', 'dongun',  0,0,'사용자가 로그인시 보여야할 사항이있을까요?', '지금 메인화면을 구현하고 있습니다. \r\n참고사항 알려주시면 적용해서 메인페이지 만들겠습니다. :-)', '2020-02-11 (16:35)','','',''),
                (5, 'aaaaaa', 'aaaaaa1', 1,0, '일기예보 보고도 우산안챙겨따...', 'ㅜㅜㅜㅜㅜㅜㅜㅜㅜ', '2020-02-10 (20:55)','','',''),
                (6, 'aaaaaa', 'aaaaaa1', 1,0, 'bbbbbb', 'bbbbbbbbbb', '2020-02-10 (21:28)','','',''),
                (7, 'mooguan', 'dustjnara', 1,0, '지금 DB테이블 확인해주세요~', '수정사항 적용해서 다시 만들어 보았습니다.', '2020-02-11 (16:34)','','',''),
                (8, 'mooguan', 'dongun',  1,0,'사용자가 로그인시 보여야할 사항이있을까요?', '지금 메인화면을 구현하고 있습니다. \r\n참고사항 알려주시면 적용해서 메인페이지 만들겠습니다. :-)', '2020-02-11 (16:35)','','','');
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

        case 'seller':
            $sql = "INSERT INTO `seller` (`seller_num`, `user_id`, `business_license`, `store_name`, `store_type`, `store_address`, `store_postcode`, `store_lat`, `store_lon`, `convenient_facilities`, `introduction`, `break_start`, `break_end`, `nokids`, `opening_day`, `opening_hours_start`, `opening_hours_end`, `store_tel`, `special_note`, `max_reserv_time_num_of_people`, `max_reserv_month`, `intensity_of_reserv`) VALUES
              (null, 'infor15', '6618700621', '지수네', '한식', '경기 고양시 일산서구 후곡로 55,(일산동, 후곡마을2단지아파트)', '10372','37.68226978304604', '126.76502696497245', '식당 내부 화장실,아기 의자', '엄마가 해준 밥이 먹고 싶다면 여기로 오세염', '15 : 00', '17 : 00', false, '2008-12-31', '09 : 00', '22 : 00', '010-2828-8705', null, 5, '3개월', '상');
          ";
            break;

        case 'keyword_list':
            $sql = "INSERT INTO `keyword_list` (`keywords_type`, `keywords`) VALUES
                  ('food_class', '한식,까페,호프,통닭(치킨),일식,중국식,분식
                  ,패스트푸드,경양식,뷔페,정종/대포집/소주방,식육(숯불구이),
                  회집,이동조리,외국음식전문점,기타'),
                  ('tag_class', '조용한,편안한,시끌벅적한,푸짐한,캐쥬얼한,아이와함께,모임하기좋은,특별한날,코스요리,프로포즈,데이트,백종원의3대천왕,생활의달인,수요미식회,혼밥');
              ";
            break;

        case 'store_img':
            $sql = "INSERT INTO `store_img` (`num`, `user_id`, `seller_num`, `store_name`, `store_file_name`, `store_file_type`, `store_file_copied`) VALUES
                    (null, 'infor15', 1, '지수네', '20180914_163451', 'image/jpeg', '2020_02_25_15_29_07_8252.jpg'),
                    (null, 'infor15', 1, '지수네', '20180914_165049', 'image/jpeg', '2020_02_25_15_29_07_1890.jpg'),
                    (null, 'infor15', 1, '지수네', '20180914_165226', 'image/jpeg', '2020_02_25_15_29_07_9476.jpg'),
                    (null, 'infor15', 1, '지수네', '20180914_165855', 'image/jpeg', '2020_02_25_15_29_07_3682.jpg'),
                    (null, 'infor15', 1, '지수네', '20180915_164325', 'image/jpeg', '2020_02_25_15_29_07_3375.jpg');
                ";
            break;

        case 'menu_img':
            $sql = "INSERT INTO `menu_img` (`num`, `user_id`, `seller_num`, `store_name`, `menu_name`, `menu_price`, `menu_file_name`, `menu_file_type`, `menu_file_copied`, `menu_explain`) VALUES
                    (null, 'infor15', 1, '지수네', '치즈떡볶이', 4000, '치즈떡볶이', 'image/jpeg', '2020_02_28_11_24_28_7362.jpg', '치즈가 쭈욱'),
                    (null, 'infor15', 1, '지수네', '무뼈닭발', 13000, '치즈떡볶이', 'image/jpeg', '2020_02_28_11_24_28_5232.jpg', '한입에 쏘오옥'),
                    (null, 'infor15', 1, '지수네', '내사랑닭갈비', 12000, '치즈떡볶이', 'image/jpeg', '2020_02_28_11_24_28_5727.jpg', '진짜 존맛탱'),
                    (null, 'infor15', 1, '지수네', '얼큰우동', 8000, '치즈떡볶이', 'image/jpeg', '2020_02_28_11_24_28_9603.jpg', '해장에 따악'),
                    (null, 'infor15', 1, '지수네', '곱창', 18000, '치즈떡볶이', 'image/jpeg', '2020_02_28_11_24_29_9893.jpg', '떡이랑 함께 드세염');
                ";
            break;
        case 'bookmark':
            $sql = "INSERT INTO `bookmark` (`bookmark_num`, `user_id`, `bookmark_subject`, `group_num`, `seller_num`, `regist_day`, `file_name`, `file_copied`, `file_type`) VALUES
            (1, 'aaaaaa', '즐겨찾기 테스트', 1, 1,'2020-02-10 (20:55)','','',''),
            (2, 'aaaaaa', '즐겨찾기 테스트', 1, 2,'2020-02-10 (20:55)','','',''),
            (3, 'aaaaaa', '즐겨찾기 테스트', 1, 3,'2020-02-10 (20:55)','','',''),
            (4, 'aaaaaa', '즐겨찾기 테스트2', 2, 2,'2020-02-10 (20:55)','','',''),
            (5, 'aaaaaa', '즐겨찾기 테스트3', 3, 1,'2020-02-10 (20:55)','','',''),
            (6, 'aaaaaa', '즐겨찾기 테스트2', 2, 2,'2020-02-10 (20:55)','','','');
                ";
            break;

        case 'reservation':
            $sql = "INSERT INTO `reservation` (`reservation_num`, `store_name`, `introduction`,`user_id`, `seller_id`, `select_date`, `select_time`, `select_person`, `select_menu`, `reservation_special`, `reservation_status`) VALUES
                    (null, '지수네', '정발산 최고의 맛집', 'k@naver.com', '1', '2020년  3월 16일', '14 : 00', '1,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '채식주의자 입니다', '0'),
                    (null, '동운이네', '은평구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 17일', '14 : 00', '3,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '', '0'),
                    (null, '032네', '송파구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 18일', '14 : 00', '4,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '', '0'),
                    (null, '무권이네', '마포구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 19일', '14 : 00', '1,2,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '', '0'),
                    (null, '연서네', '구로구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 20일', '14 : 00', '1,2,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '', '0'),
                    (null, '성민이네', '강남구 최고의 맛집', 'k@naver.com','sm', '1', '2020년  3월 21일', '14 : 00', '5,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '', '0');
                ";
            break;

        case 'review':
            $sql = "INSERT INTO `review` (`num`, `seller_num`, `user_email`, `user_name`, `store_name`, `content`, `file_name`, `file_copied`, `file_type`, `star_access`, `star_service`, `star_flavor`, `regist_day`) VALUES
                  (null, '1', 'k@naver.com', '이무권', '지수네', '안녕', 'pengsu1.jpg', '2020_02_27_07_28_13.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)'),
                  (null, '2', 'k@naver.com', '이무권', '동운이네', '반가워', 'pengsu2.jpg', '2020_02_27_07_28_29.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)'),
                  (null, '3', 'k@naver.com', '이무권', '032네', '여긴 어디', 'pengsu3.jpg', '2020_02_27_07_32_34.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)'),
                  (null, '4', 'k@naver.com', '이무권', '무권이네', 'JMT', 'pengsu1.jpg', '2020_02_27_07_28_13.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)'),
                  (null, '5', 'k@naver.com', '이무권', '연서네', '졸려..', 'pengsu2.jpg', '2020_02_27_07_28_29.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)'),
                  (null, '6', 'k@naver.com', '이무권', '성민이네', '휴가점여', 'pengsu3.jpg', '2020_02_27_07_32_34.jpg', 'image/jpeg',0, 0, 0, '2020-03-03 (01:11)');
                ";
            break;

        case 'advertise':
            $sql = "INSERT INTO `advertise` (`num`, `seller_num`, `file_name`, `file_type`, `file_copied`, `store_name`, `introduction`, `regist_day`, `noshow`) VALUES
                  (null, '1', 'pengsu1.jpg', 'image/jpeg', '2020_02_27_07_28_13.jpg', '지수네', '정발산 최고의 맛집','2020-03-03 (01:11)', false),
                  (null, '2', 'pengsu2.jpg', 'image/jpeg', '2020_02_27_07_28_29.jpg', '동운이네', '은평구 최고의 맛집','2020-03-03 (01:11)', false),
                  (null, '3', 'pengsu3.jpg', 'image/jpeg', '2020_02_27_07_32_34.jpg', '032네', '송파구 최고의 맛집','2020-03-03 (01:11)', false),
                  (null, '4', 'pengsu1.jpg', 'image/jpeg', '2020_02_27_07_28_13.jpg', '무권이네', '마포구 최고의 맛집','2020-03-03 (01:11)', false),
                  (null, '5', 'pengsu2.jpg', 'image/jpeg', '2020_02_27_07_28_29.jpg', '연서네', '구로구 최고의 맛집','2020-03-03 (01:11)', false),
                  (null, '6', 'pengsu3.jpg', 'image/jpeg', '2020_02_27_07_32_34.jpg', '성민이네', '강남구 최고의 맛집','2020-03-03 (01:11)', false);
                ";
            break;
        case 'seller_keyword':
            $sql = "INSERT INTO `seller_keyword` (`num`, `seller_num`, `seller_name`, `seller_address`, `seller_uptae_nm`, `tag_class`) VALUES
            (1, '186277', '프라자 손칼국수', '서울특별시 송파구 가락동  199번지  지상1층 109,110호 일부', '분식', '시끌벅적한,생활의달인,특별한날,백종원의3대천왕'),
            (2, '189227', '우물정', '서울특별시 송파구 삼전동  6번지 1호  ', '기타', '시끌벅적한,모임하기좋은,혼밥,수요미식회'),
            (3, '181956', '몽중헌 방이', '서울특별시 송파구 방이동  44번지 5호  지상 17,18층', '기타', '특별한날,백종원의3대천왕'),
            (4, '152028', '앤(N)스타일', '서울특별시 서초구 서초동  1317번지 31호  8층', '경양식', '데이트,혼밥,생활의달인,특별한날'),
            (5, '163781', '문학다방봄봄', '서울특별시 서대문구 대현동  34번지 38호  ', '까페', '아이와함께,편안한,모임하기좋은'),
            (6, '85185', '한방전주콩나물국밥', '서울특별시 관악구 신림동  1568번지 8호  ', '한식', '푸짐한,모임하기좋은,백종원의3대천왕,데이트,프로포즈'),
            (7, '105469', '에무시네마앤 카페', '서울특별시 종로구 신문로2가  1번지 181호  지하1층', '기타', '아이와함께,특별한날,데이트,조용한'),
            (8, '135659', '미아논나(mia nonna)', '서울특별시 마포구 망원동  399번지 9호  화이트빌 1층 101호', '기타', '데이트,혼밥'),
            (9, '123359', '바우네나주곰탕(묵동점)', '서울특별시 중랑구 묵동  305번지 3호  ', '한식', '편안한,아이와함께,시끌벅적한,모임하기좋은'),
            (10, '89868', '미카엘', '서울특별시 관악구 봉천동  1621번지 1호  ', '외국음식전문점(인도,태국등)', '아이와함께,코스요리,혼밥'),
            (11, '18812', '토속 사랑', '서울특별시 은평구 불광동  603번지 2호  1층', '한식', '편안한,데이트,코스요리,생활의달인,특별한날'),
            (12, '162845', '나무향기', '서울특별시 서대문구 홍은동  48번지 63호  1층', '기타', '코스요리,캐쥬얼한'),
            (13, '3937', '응급실국물떡볶이 서울쌍문역점', '서울특별시 도봉구 쌍문동  103번지 52호  1층', '한식', '모임하기좋은,푸짐한'),
            (14, '113076', '백암왕순대', '서울특별시 중구 남대문로5가  63번지 22호  (1층)', '한식', '프로포즈,푸짐한,편안한,모임하기좋은'),
            (15, '147964', '서울농장정육식당', '서울특별시 노원구 월계동  380번지 1호  삼능스페이스향-112', '한식', '아이와함께,편안한,생활의달인,조용한,푸짐한'),
            (16, '112180', '황해도 빈대떡', '서울특별시 중구 인현동2가  193번지  지상1층', '한식', '조용한,수요미식회,백종원의3대천왕'),
            (17, '17265', '정원', '서울특별시 은평구 응암동  124번지 18호  ', '한식', '조용한,모임하기좋은'),
            (18, '149184', '본죽', '서울특별시 서초구 방배동  836번지 1호  보성아파트상가 1층6호', '한식', '아이와함께,데이트'),
            (19, '189531', 'Bali(발리)', '서울특별시 송파구 잠실동  201번지 17호  ', '호프/통닭', '조용한,푸짐한,캐쥬얼한'),
            (20, '32380', '영희네쌈밥', '서울특별시 강북구 수유동  279번지 181호  박영희빌딩', '한식', '아이와함께,혼밥,캐쥬얼한'),
            (21, '58292', '역전우동 0410 강남역태극당점', '서울특별시 강남구 역삼동  826번지 37호  지하1층-107', '분식', '데이트,아이와함께,혼밥'),
            (22, '148463', '바우네 나주곰탕', '서울특별시 서초구 양재동  327번지 10호  (1층)', '경양식', '시끌벅적한,프로포즈,수요미식회,아이와함께'),
            (23, '85597', '스시락', '서울특별시 관악구 신림동  1424번지 11호  ', '한식', '조용한,혼밥,아이와함께,생활의달인,데이트'),
            (24, '105308', '양캠퍼 하우스', '서울특별시 종로구 권농동  171번지 6호  ', '까페', '모임하기좋은,편안한,프로포즈,푸짐한'),
            (25, '208937', '백만석활선어', '서울특별시 용산구 원효로1가  39번지 1호  (지상1층)', '일식', '조용한,코스요리,시끌벅적한'),
            (26, '8731', '홍릉기사식당', '서울특별시 동대문구 청량리동  199번지 172호  ', '한식', '백종원의3대천왕,혼밥'),
            (27, '177651', '청춘키친 성동점', '서울특별시 성동구 옥수동  285번지 8호  ', '일식', '혼밥,백종원의3대천왕,데이트,조용한,특별한날'),
            (28, '84772', '원주골돌솥추어탕', '서울특별시 관악구 신림동  1445번지 14호  ', '한식', '캐쥬얼한,모임하기좋은,혼밥,특별한날,편안한'),
            (29, '153987', '치킨영토', '서울특별시 서초구 양재동  11번지 56호  창대빌딩 1층', '호프/통닭', '캐쥬얼한,푸짐한,수요미식회'),
            (30, '62965', '궁중추어탕', '서울특별시 강서구 방화동  621번지 24호  (지상 1층)', '한식', '혼밥,코스요리,아이와함께,특별한날,생활의달인'),
            (31, '77956', '동경우동', '서울특별시 구로구 고척동  75번지 1호  일이삼전자타운 1동 지하39호', '분식', '프로포즈,데이트'),
            (32, '80755', '김밥천국', '서울특별시 구로구 신도림동  337번지  대우푸르지오상가-110', '분식', '데이트,아이와함께,푸짐한,수요미식회'),
            (33, '173274', '참이맛감자탕', '서울특별시 성동구 용답동  99번지 2호  (지상1층)', '한식', '프로포즈,시끌벅적한,푸짐한'),
            (34, '190323', '목동해밀', '서울특별시 양천구 목동  905번지 22호  목동트윈빌 1층-110', '분식', '백종원의3대천왕,모임하기좋은,프로포즈'),
            (35, '79350', '가향', '서울특별시 구로구 고척동  52번지 223호  ', '한식', '프로포즈,시끌벅적한'),
            (36, '102841', '한과채밥집', '서울특별시 종로구 관훈동  30번지 9호  청하빌딩지하1층', '한식', '아이와함께,수요미식회,푸짐한,백종원의3대천왕,프로포즈'),
            (37, '130672', '고향집', '서울특별시 마포구 신공덕동  2번지 130호  1층일부', '한식', '코스요리,프로포즈'),
            (38, '8202', '바른치킨전농점', '서울특별시 동대문구 전농동  647번지 65호  ', '호프/통닭', '혼밥,특별한날'),
            (39, '196550', '영신식당', '서울특별시 영등포구 영등포동4가  113번지 9호  ', '한식', '편안한,데이트'),
            (40, '145444', '아구명문대', '서울특별시 노원구 공릉동  389번지 11호  ', '한식', '캐쥬얼한,푸짐한,조용한,특별한날,편안한'),
            (41, '177839', '세이버(Savour)', '서울특별시 성동구 성수동2가  273번지 13호  태광산업', '기타', '데이트,모임하기좋은'),
            (42, '101775', '태월식당', '서울특별시 종로구 명륜2가  216번지 1호  지하1층', '분식', '푸짐한,데이트'),
            (43, '22874', '시연과 봉수의 소곱창', '서울특별시 은평구 대조동  187번지 37호  1층', '한식', '모임하기좋은,조용한,편안한'),
            (44, '70194', '우장회관', '서울특별시 강서구 내발산동  722번지 1호  1층-1호 2', '한식', '코스요리,혼밥,데이트'),
            (45, '138775', '연어롭다', '서울특별시 마포구 연남동  382번지 19호  지하1층', '일식', '코스요리,혼밥,푸짐한,아이와함께,수요미식회'),
            (46, '146503', '바다정원', '서울특별시 노원구 상계동  96번지 7호  ', '한식', '생활의달인,데이트,혼밥,특별한날'),
            (47, '156527', '(주)동원홈푸드 크레신 식당', '서울특별시 서초구 잠원동  8번지 22호  1층', '한식', '캐쥬얼한,모임하기좋은,특별한날'),
            (48, '53314', '황금복국', '서울특별시 강남구 삼성동  158번지 26호  지상1,2,3층', '일식', '아이와함께,캐쥬얼한'),
            (49, '30404', '한국통닭', '서울특별시 강북구 미아동  62번지 3호  ', '호프/통닭', '특별한날,조용한'),
            (50, '24073', '우주애가', '서울특별시 강북구 미아동  837번지 907호  (거북바위길 12)(지상1층)', '한식', '데이트,백종원의3대천왕'),
            (51, '208844', '교동짬뽕', '서울특별시 용산구 동자동  12번지  게이트웨이타워 1층 103(B)', '한식', '모임하기좋은,프로포즈'),
            (52, '181165', '스콜', '서울특별시 송파구 장지동  895번지  ', '기타', '시끌벅적한,생활의달인,조용한,캐쥬얼한'),
            (53, '78068', '나살던고향', '서울특별시 구로구 구로동  1124번지 36호  ', '한식', '백종원의3대천왕,생활의달인,수요미식회'),
            (54, '144691', '깐부치킨', '서울특별시 노원구 상계동  616번지 1호  1층', '호프/통닭', '모임하기좋은,특별한날,생활의달인,데이트,시끌벅적한'),
            (55, '88361', '무안수산', '서울특별시 관악구 봉천동  1638번지 10호  ', '회집', '혼밥,특별한날'),
            (56, '155175', '세가프레도 서래마을점', '서울특별시 서초구 반포동  94번지 3호  1층', '기타', '데이트,시끌벅적한,프로포즈,혼밥,아이와함께'),
            (57, '167588', '김대감순대국', '서울특별시 성북구 종암동  83번지 4호  ', '탕류(보신용)', '시끌벅적한,코스요리,혼밥,데이트'),
            (58, '164364', '마린파스타', '서울특별시 서대문구 대현동  37번지 38호  지상3층', '외국음식전문점(인도,태국등)', '프로포즈,수요미식회,조용한,아이와함께,특별한날'),
            (59, '85933', '계림원 신림점', '서울특별시 관악구 신림동  1455번지 2호  ', '호프/통닭', '시끌벅적한,수요미식회,푸짐한,캐쥬얼한'),
            (60, '138904', '아크스테이션', '서울특별시 마포구 상수동  90번지 9호  ', '기타', '푸짐한,모임하기좋은,시끌벅적한'),
            (61, '186388', '이디야 커피', '서울특별시 송파구 방이동  225번지  한양아파트상가 102,103호', '기타', '캐쥬얼한,특별한날'),
            (62, '197536', '서울무교동낙지', '서울특별시 영등포구 여의도동  21번지 3호  서울상가 207호', '한식', '생활의달인,데이트,캐쥬얼한'),
            (63, '160300', '이차돌(신촌점)', '서울특별시 서대문구 창천동  52번지 139호  ', '한식', '푸짐한,백종원의3대천왕,프로포즈'),
            (64, '105659', '계경 순대국 동묘역점', '서울특별시 종로구 숭인동  313번지 14호  ', '호프/통닭', '아이와함께,혼밥'),
            (65, '131850', '백암왕순대국', '서울특별시 마포구 공덕동  252번지 5호  태영빌딩 지1동2호', '한식', '백종원의3대천왕,시끌벅적한,푸짐한,편안한'),
            (66, '49178', '주식회사 라혜파티', '서울특별시 강남구 청담동  134번지 20호  ', '뷔페식', '프로포즈,생활의달인'),
            (67, '82634', '철판집', '서울특별시 구로구 오류동  64번지 28호  오류동행복주택 상가동 1층 115호', '한식', '모임하기좋은,생활의달인,수요미식회,캐쥬얼한,아이와함께'),
            (68, '154602', '매니아 스트리트 미니바', '서울특별시 서초구 반포동  739번지  1층 1호', '감성주점', '캐쥬얼한,프로포즈'),
            (69, '79101', '파트너호프', '서울특별시 구로구 가리봉동  107번지 30호  -45,52', '호프/통닭', '수요미식회,코스요리,모임하기좋은,생활의달인,시끌벅적한'),
            (70, '144371', '카페 베니스상인', '서울특별시 노원구 월계동  943번지  세양청마루아파트상가 102호', '까페', '편안한,프로포즈'),
            (71, '142273', '카페테라(Cafe Terra)', '서울특별시 노원구 중계동  366번지 11호  노블씨티빌딩-107', '기타', '데이트,코스요리'),
            (72, '158883', '맛골', '서울특별시 서초구 서초동  1573번지 10호  로이어즈타워 지하1층-비11', '한식', '생활의달인,조용한,수요미식회,프로포즈'),
            (73, '202370', '자꾸땡겨', '서울특별시 영등포구 양평동1가  9번지 17호  금산플레이버1층101호', '한식', '아이와함께,코스요리,수요미식회,프로포즈,편안한'),
            (74, '118803', '홍춘천닭갈비', '서울특별시 중구 을지로6가  18번지 93호  2층', '한식', '특별한날,코스요리,수요미식회,편안한'),
            (75, '190373', '굽네치킨', '서울특별시 양천구 신월동  500번지 11호  ', '통닭(치킨)', '코스요리,푸짐한,프로포즈,모임하기좋은,조용한'),
            (76, '81798', '아지트호프', '서울특별시 구로구 구로동  97번지 17호  -제2', '호프/통닭', '아이와함께,백종원의3대천왕'),
            (77, '122987', '참맛깔곱창', '서울특별시 중랑구 면목동  467번지 12호  ', '정종/대포집/소주방', '혼밥,편안한,코스요리,모임하기좋은'),
            (78, '170774', '이태리총각', '서울특별시 성북구 삼선동5가  398번지  ', '한식', '백종원의3대천왕,프로포즈,데이트,편안한'),
            (79, '143132', '신마니', '서울특별시 노원구 월계동  285번지 13호  -107', '호프/통닭', '수요미식회,생활의달인,코스요리,아이와함께'),
            (80, '133428', '위대한치킨동무앤호프', '서울특별시 마포구 중동  39번지 9호  외2필지,104호', '호프/통닭', '프로포즈,캐쥬얼한'),
            (81, '10108', '양지함박왕돈까스', '서울특별시 동대문구 장안동  313번지 6호  ', '경양식', '시끌벅적한,모임하기좋은,백종원의3대천왕,생활의달인,아이와함께'),
            (82, '25763', '최고닭', '서울특별시 강북구 미아동  160번지 42호  ', '통닭(치킨)', '생활의달인,백종원의3대천왕,아이와함께'),
            (83, '113351', '비어큐', '서울특별시 중구 만리동1가  35번지 10호  (1층)', '호프/통닭', '모임하기좋은,캐쥬얼한,편안한'),
            (84, '97930', '만만요리연구소', '서울특별시 광진구 화양동  5번지 61호  ', '호프/통닭', '특별한날,모임하기좋은'),
            (85, '154195', '현정이네', '서울특별시 서초구 방배동  456번지 4호  1층-4', '한식', '편안한,아이와함께,백종원의3대천왕,캐쥬얼한,조용한'),
            (86, '41651', '스시마이우키친 포스코점', '서울특별시 강남구 대치동  892번지  포스코센터', '일식', '생활의달인,프로포즈,특별한날'),
            (87, '192470', '명태어장', '서울특별시 양천구 신정동  761번지 21호 A 1층', '한식', '아이와함께,데이트,수요미식회,혼밥'),
            (88, '10535', '명가옛날통닭', '서울특별시 동대문구 장안동  295번지 7호  ', '호프/통닭', '수요미식회,데이트'),
            (89, '110115', '인사동해물아구찜', '서울특별시 종로구 인사동  79번지  ', '한식', '푸짐한,코스요리,백종원의3대천왕,생활의달인,특별한날'),
            (90, '12879', '안드레아쿠치나', '서울특별시 동작구 상도동  347번지 4호  1층', '경양식', '조용한,모임하기좋은,혼밥,생활의달인,캐쥬얼한'),
            (91, '143748', '이층집', '서울특별시 노원구 월계동  496번지 14호  ', '한식', '데이트,아이와함께'),
            (92, '53824', '달링키친', '서울특별시 강남구 논현동  247번지 9호  ', '기타', '수요미식회,푸짐한,백종원의3대천왕,혼밥,모임하기좋은'),
            (93, '190199', '까리노', '서울특별시 양천구 목동  917번지 9호  현대41타워 지하1층-B05-1,B05', '호프/통닭', '백종원의3대천왕,편안한,프로포즈,데이트'),
            (94, '56444', '교촌치킨 논현1호점', '서울특별시 강남구 논현동  164번지 16호  지상1층', '한식', '편안한,푸짐한'),
            (95, '170404', '목마', '서울특별시 성북구 하월곡동  90번지 215호  ', '기타', '백종원의3대천왕,혼밥,편안한,모임하기좋은'),
            (96, '171285', 'OVE 오브이이', '서울특별시 성북구 동선동1가  2번지 4호  ', '기타', '코스요리,시끌벅적한,생활의달인,푸짐한,조용한'),
            (97, '3274', '한우투뿔스테이크하우스', '서울특별시 도봉구 창동  731번지 13호  지하1층', '경양식', '캐쥬얼한,데이트,편안한,프로포즈,생활의달인'),
            (98, '136552', '가장맛있는족발마포아현점', '서울특별시 마포구 아현동  618번지 6호  1층', '한식', '푸짐한,모임하기좋은,수요미식회,시끌벅적한,백종원의3대천왕'),
            (99, '211873', '모또(motto)', '서울특별시 용산구 한남동  31번지 13호  1층 102호', '기타', '백종원의3대천왕,시끌벅적한,혼밥,캐쥬얼한'),
            (100, '190729', '횡성생고기', '서울특별시 양천구 신월동  517번지 4호  청담파우제 지상1층 105호,106호', '한식', '생활의달인,아이와함께'),
            (101, '167195', '불타는생고기', '서울특별시 성북구 장위동  230번지 174호  ', '한식', '조용한,생활의달인,프로포즈'),
            (102, '90025', '돌체(DOLCE)', '서울특별시 관악구 신림동  464번지 14호  ', '호프/통닭', '모임하기좋은,백종원의3대천왕,수요미식회,푸짐한,캐쥬얼한'),
            (103, '178094', '생각나는포차', '서울특별시 성동구 성수동1가  14번지 58호  ', '한식', '수요미식회,프로포즈,코스요리'),
            (104, '17393', 'Cafe 올리브 180', '서울특별시 은평구 응암동  93번지 4호  1층', '한식', '조용한,시끌벅적한,모임하기좋은,편안한,아이와함께'),
            (105, '34052', '나그네 그늘집', '서울특별시 강동구 성내동  551번지  ', '한식', '캐쥬얼한,편안한,특별한날,프로포즈,코스요리'),
            (106, '188199', '크래프트 한스 위례점', '서울특별시 송파구 장지동  883번지  ', '호프/통닭', '백종원의3대천왕,프로포즈,특별한날'),
            (107, '66234', '포크클럽', '서울특별시 강서구 가양동  449번지 4호 A 한화비즈메트로1차 (지상 1층)-104', '한식', '캐쥬얼한,시끌벅적한,코스요리'),
            (108, '179221', '문향래', '서울특별시 송파구 풍납동  130번지 9호  ', '기타', '특별한날,모임하기좋은,아이와함께'),
            (109, '120131', '토야', '서울특별시 중구 인현동2가  197번지  1층', '기타', '모임하기좋은,프로포즈,데이트,캐쥬얼한,편안한'),
            (110, '13314', '뉴욕야시장노량진점', '서울특별시 동작구 노량진동  119번지 196호  1,2 층', '뷔페식', '프로포즈,아이와함께'),
            (111, '114232', '포마토김밥', '서울특별시 중구 회현동1가  94번지 4호  ', '한식', '프로포즈,푸짐한,조용한'),
            (112, '15245', '보데가(Bodega)', '서울특별시 동작구 노량진동  330번지  삼익주상복합아파트', '호프/통닭', '편안한,시끌벅적한,특별한날'),
            (113, '95557', '건대장수수제왕돈까스(전문)', '서울특별시 광진구 화양동  3번지 20호  ', '중국식', '시끌벅적한,조용한,생활의달인'),
            (114, '119346', '완백부대찌개 명동점', '서울특별시 중구 저동1가  48번지  대신파이낸스센터 지하1층', '한식', '캐쥬얼한,푸짐한'),
            (115, '110530', '둥지포차', '서울특별시 종로구 종로6가  33번지 2호  코리아빌딩', '한식', '모임하기좋은,수요미식회,코스요리,조용한'),
            (116, '103384', '에코밥상', '서울특별시 종로구 적선동  94번지  ', '한식', '아이와함께,편안한,백종원의3대천왕,혼밥,특별한날'),
            (117, '19661', '참숯 왕대박 갈비 전문점', '서울특별시 은평구 대조동  55번지 10호  1층', '뷔페', '모임하기좋은,백종원의3대천왕'),
            (118, '184336', '바다왕자 해산물포차', '서울특별시 송파구 가락동  50번지 16호  지상1층', '한식', '모임하기좋은,수요미식회'),
            (119, '95843', '김밥천국', '서울특별시 광진구 구의동  220번지 218호  ', '한식', '푸짐한,프로포즈,혼밥,특별한날,생활의달인'),
            (120, '158582', '소소한 식당', '서울특별시 서초구 우면동  66번지 2호  우면종합상가 1층-112', '일식', '모임하기좋은,푸짐한,프로포즈,코스요리'),
            (121, '23278', '피카', '서울특별시 강북구 수유동  191번지 45호  ', '까페', '데이트,캐쥬얼한'),
            (122, '53843', '오미 닭강정', '서울특별시 강남구 대치동  316번지  ', '통닭(치킨)', '생활의달인,아이와함께'),
            (123, '201101', '산하대식당', '서울특별시 영등포구 대림동  1082번지 1호  지상2층', '중국식', '캐쥬얼한,모임하기좋은'),
            (124, '119087', '충무로 파주옥', '서울특별시 중구 초동  53번지 2호  1층', '한식', '수요미식회,시끌벅적한'),
            (125, '5622', '모모호프', '서울특별시 동대문구 제기동  438번지 6호  1층', '한식', '백종원의3대천왕,특별한날'),
            (126, '75838', '아름다운기업정현웨딩홀', '서울특별시 구로구 구로동  120번지  정현빌딩', '뷔페식', '캐쥬얼한,푸짐한,백종원의3대천왕'),
            (127, '53171', '정지', '서울특별시 강남구 청담동  124번지 12호  ', '한식', '편안한,혼밥,수요미식회,시끌벅적한,생활의달인'),
            (128, '71450', '초원', '서울특별시 금천구 시흥동  852번지 33호  지상1층', '한식', '코스요리,캐쥬얼한'),
            (129, '107379', '펀치 쥬스', '서울특별시 종로구 인의동  48번지 1호  1층', '분식', '아이와함께,편안한'),
            (130, '50353', '취화선', '서울특별시 강남구 대치동  974번지 1호  ', '중국식', '코스요리,캐쥬얼한,혼밥,모임하기좋은'),
            (131, '206277', '간이즉석우동', '서울특별시 용산구 서계동  223번지 48호  외3필지(지상1층 101호)', '분식', '푸짐한,생활의달인'),
            (132, '66956', '마곡김가네중앙점', '서울특별시 강서구 마곡동  796번지 3호  외 1필지 마곡사이언스타워 (지상 1층)-116', '분식', '아이와함께,편안한,생활의달인,혼밥,특별한날'),
            (133, '32573', '생생풍천장어', '서울특별시 강동구 상일동  251번지  ', '한식', '조용한,데이트,시끌벅적한'),
            (134, '187207', '데일리마크', '서울특별시 송파구 오금동  63번지 9호  ', '출장조리', '조용한,생활의달인,혼밥,데이트,프로포즈'),
            (135, '11971', '사부작', '서울특별시 동작구 상도동  328번지 10호  ', '기타', '캐쥬얼한,데이트,조용한,특별한날,혼밥'),
            (136, '149255', '(주)교대곱창', '서울특별시 서초구 서초동  1578번지 3호  ', '한식', '특별한날,프로포즈,생활의달인'),
            (137, '190076', '연희스넥', '서울특별시 양천구 목동  923번지 14호  현대드림타워 지하 110호', '분식', '아이와함께,수요미식회,혼밥'),
            (138, '102615', '이찌', '서울특별시 종로구 돈의동  43번지 4호  한일빌딩 201호', '한식', '특별한날,아이와함께,캐쥬얼한,편안한,혼밥'),
            (139, '82558', '금두꺼비', '서울특별시 구로구 가리봉동  126번지 44호  ', '한식', '백종원의3대천왕,데이트,모임하기좋은'),
            (140, '2737', '마차이나', '서울특별시 도봉구 창동  134번지 36호  외 6필지 우림빌딩 2층', '한식', '시끌벅적한,편안한,혼밥,특별한날,모임하기좋은'),
            (141, '5145', '원조명동찌개마을', '서울특별시 동대문구 장안동  366번지 6호  1층', '한식', '백종원의3대천왕,수요미식회,캐쥬얼한,특별한날,편안한'),
            (142, '37946', '향원', '서울특별시 강동구 고덕동  258번지 6호  ', '한식', '모임하기좋은,조용한,코스요리,혼밥'),
            (143, '193713', '대청도자연산식당', '서울특별시 양천구 신월동  982번지 6호  서경빌딩 1층-102', '한식', '조용한,모임하기좋은,혼밥,생활의달인,캐쥬얼한'),
            (144, '16785', '신사참숯불갈비', '서울특별시 은평구 신사동  342번지 47호  1층', '한식', '조용한,수요미식회'),
            (145, '103259', '백제곱창', '서울특별시 종로구 종로5가  38번지 1호  ', '한식', '백종원의3대천왕,편안한,모임하기좋은,생활의달인'),
            (146, '179699', '닭한마리', '서울특별시 송파구 풍납동  156번지 14호  지상1층', '한식', '캐쥬얼한,조용한,아이와함께,데이트,혼밥'),
            (147, '35218', '신용정육점로스구이', '서울특별시 강동구 천호동  361번지 11호  ', '한식', '모임하기좋은,프로포즈,생활의달인,편안한,수요미식회'),
            (148, '29616', '우리들 맛집', '서울특별시 강북구 수유동  119번지 12호  (우이동길4)(지상1층)', '한식', '데이트,혼밥,모임하기좋은,특별한날'),
            (149, '188469', '쌀어묵공방', '서울특별시 송파구 잠실동  22번지 6호  리센츠', '분식', '프로포즈,조용한,편안한,푸짐한'),
            (150, '132014', '굿타임', '서울특별시 마포구 성산동  200번지 53호  ', '분식', '수요미식회,생활의달인,조용한,모임하기좋은'),
            (151, '184344', '스시 준', '서울특별시 송파구 신천동  7번지 26호  지하1층', '한식', '수요미식회,모임하기좋은'),
            (152, '75650', '소메랑', '서울특별시 구로구 구로동  811번지  코오롱싸이언스밸리2차 지하1층 137호', '한식', '푸짐한,시끌벅적한'),
            (153, '162668', '꼬망이', '서울특별시 서대문구 북아현동  3번지 129호  지층', '분식', '특별한날,푸짐한,데이트,혼밥,수요미식회'),
            (154, '179543', '미르엠알', '서울특별시 송파구 잠실동  40번지 1호  롯데백화점지하1층스넥코너', '한식', '캐쥬얼한,편안한,아이와함께'),
            (155, '12685', '윤가네돈돼지', '서울특별시 동작구 사당동  1047번지 33호  ', '식육(숯불구이)', '조용한,백종원의3대천왕,생활의달인'),
            (156, '104019', '커피투어', '서울특별시 종로구 필운동  278번지 6호  ', '까페', '코스요리,아이와함께,특별한날'),
            (157, '70353', '조여사네집', '서울특별시 금천구 독산동  1001번지 14호  1층', '한식', '아이와함께,생활의달인,조용한'),
            (158, '19595', '주식회사 서부감자국', '서울특별시 은평구 녹번동  181번지  ', '한식', '푸짐한,특별한날,캐쥬얼한,데이트'),
            (159, '74539', '설레임', '서울특별시 금천구 독산동  961번지 29호  지상1층', '기타', '백종원의3대천왕,수요미식회,캐쥬얼한,혼밥'),
            (160, '112101', '번지없는주점', '서울특별시 중구 남대문로3가  30번지 11호  (1층)', '분식', '혼밥,시끌벅적한'),
            (161, '27768', '커피 가능성', '서울특별시 강북구 수유동  229번지 50호  우암센스뷰 1층 105호', '기타', '푸짐한,데이트,편안한,시끌벅적한,프로포즈'),
            (162, '32530', '라성', '서울특별시 강동구 둔촌동  87번지 7호  (1층)', '한식', '모임하기좋은,조용한,데이트,코스요리,시끌벅적한'),
            (163, '123602', '커피 마마', '서울특별시 중랑구 망우동  531번지 39호  지상1층', '까페', '백종원의3대천왕,푸짐한'),
            (164, '99700', '사동집', '서울특별시 종로구 관훈동  29번지 25호  ', '한식', '모임하기좋은,아이와함께,특별한날,수요미식회,백종원의3대천왕'),
            (165, '173591', '수향식당', '서울특별시 성동구 행당동  292번지 34호  ', '한식', '조용한,생활의달인,아이와함께,푸짐한'),
            (166, '206057', '카페아이엠티여의도케이비금융타워점', '서울특별시 영등포구 여의도동  23번지 9호  KB금융타워', '기타', '혼밥,생활의달인'),
            (167, '4920', '서울식당', '서울특별시 동대문구 답십리동  4번지 250호  1층', '분식', '모임하기좋은,혼밥,특별한날,조용한'),
            (168, '83877', '상운참치', '서울특별시 관악구 신림동  1655번지 8호  외1필지', '회집', '편안한,생활의달인,혼밥'),
            (169, '64663', '다래정', '서울특별시 강서구 가양동  131번지 5호  (지상 1층)', '한식', '프로포즈,푸짐한,코스요리,편안한'),
            (170, '12065', '나루터칼국수 전문점', '서울특별시 동작구 노량진동  58번지 27호  (1층)', '한식', '시끌벅적한,모임하기좋은,캐쥬얼한,생활의달인,혼밥'),
            (171, '127796', '오클리', '서울특별시 마포구 동교동  161번지 4호  외1필지 2층', '까페', '캐쥬얼한,수요미식회,아이와함께,프로포즈'),
            (172, '127173', '욜로와카페', '서울특별시 중랑구 상봉동  104번지 101호  ', '호프/통닭', '수요미식회,특별한날,코스요리,모임하기좋은,시끌벅적한'),
            (173, '82303', '미쓰족발 구로디지털단지역점', '서울특별시 구로구 구로동  1124번지 84호  ', '한식', '생활의달인,편안한,특별한날'),
            (174, '2462', '천수한방삼계탕', '서울특별시 도봉구 방학동  665번지 31호  ', '김밥(도시락)', '프로포즈,조용한'),
            (175, '46264', '카페싸이공', '서울특별시 강남구 삼성동  69번지 14호  ', '기타', '백종원의3대천왕,아이와함께'),
            (176, '51252', '육사팔바', '서울특별시 강남구 역삼동  648번지 7호  ', '기타', '편안한,데이트,푸짐한,캐쥬얼한,시끌벅적한'),
            (177, '108199', '홉스치킨', '서울특별시 종로구 통인동  46번지 41호  1층', '호프/통닭', '생활의달인,프로포즈,수요미식회'),
            (178, '45811', '토담', '서울특별시 강남구 역삼동  662번지 7호  ', '한식', '생활의달인,백종원의3대천왕,캐쥬얼한'),
            (179, '73930', '도쿄짬뽕', '서울특별시 금천구 독산동  291번지 7호  삼성홈플러스(금천점) 지상1층', '중국식', '데이트,시끌벅적한,아이와함께,생활의달인,특별한날'),
            (180, '30484', 'bhc 미아사거리점', '서울특별시 강북구 미아동  54번지 88호  2층', '기타', '데이트,캐쥬얼한'),
            (181, '107221', '라움', '서울특별시 종로구 인의동  48번지 26호  라마다호텔', '경양식', '생활의달인,혼밥'),
            (182, '145719', '금광산', '서울특별시 노원구 상계동  649번지 2호 지하 고려빌딩-4호', '한식', '아이와함께,시끌벅적한'),
            (183, '203676', '대초원샤브샤브', '서울특별시 영등포구 대림동  1017번지 3호  1층', '중국식', '백종원의3대천왕,아이와함께,생활의달인'),
            (184, '27953', '낙지마을', '서울특별시 강북구 미아동  323번지 56호  ', '한식', '생활의달인,특별한날,프로포즈'),
            (185, '127734', '모이세해장국', '서울특별시 마포구 용강동  122번지 6호  ', '한식', '시끌벅적한,백종원의3대천왕'),
            (186, '200507', '더함한우골', '서울특별시 영등포구 당산동3가  457번지  1, 2층', '한식', '생활의달인,시끌벅적한,프로포즈,조용한'),
            (187, '151569', '반가', '서울특별시 서초구 반포동  19번지 3호  센트럴시티 1층-122', '경양식', '편안한,수요미식회'),
            (188, '53099', '아우라지왕순대', '서울특별시 강남구 역삼동  696번지 41호  지상1층', '한식', '아이와함께,데이트,편안한'),
            (189, '109177', '돈돈정 그랑서울점', '서울특별시 종로구 청진동  70번지  그랑서울', '일식', '편안한,혼밥,조용한,캐쥬얼한'),
            (190, '170320', '족발마심', '서울특별시 성북구 삼선동2가  211번지 5호  ', '경양식', '특별한날,시끌벅적한,혼밥,프로포즈'),
            (191, '179778', '(유)동화매점', '서울특별시 송파구 가락동  600번지 0호  동화청과시장', '한식', '생활의달인,모임하기좋은'),
            (192, '176441', '뚝도리 보신탕', '서울특별시 성동구 성수동2가  566번지 36호  (지상1층)', '한식', '푸짐한,데이트,코스요리,조용한,캐쥬얼한'),
            (193, '26020', '서원초밥', '서울특별시 강북구 미아동  90번지 34호  ', '분식', '아이와함께,모임하기좋은,편안한'),
            (194, '135355', '플래닛61(PLANET61)', '서울특별시 마포구 서교동  396번지 61호  ', '기타', '데이트,프로포즈,특별한날,수요미식회'),
            (195, '47647', '생김치오겹살', '서울특별시 강남구 논현동  95번지 18호  ', '경양식', '푸짐한,캐쥬얼한'),
            (196, '62774', '구찌', '서울특별시 강서구 염창동  273번지 15호  (지하1층)', '경양식', '아이와함께,프로포즈,편안한,수요미식회,백종원의3대천왕'),
            (197, '12823', '더코네(The kone)', '서울특별시 동작구 상도동  502번지 2호  ', '한식', '아이와함께,특별한날'),
            (198, '191173', '송송식당', '서울특별시 양천구 목동  917번지 9호  현대41타워 지하1층B12호', '한식', '코스요리,캐쥬얼한,수요미식회,혼밥'),
            (199, '79717', '동서네낙지', '서울특별시 구로구 신도림동  396번지 227호  ', '한식', '푸짐한,모임하기좋은,특별한날'),
            (200, '196393', '벨기에와플', '서울특별시 영등포구 여의도동  53번지 11호  ', '분식', '데이트,편안한');
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
