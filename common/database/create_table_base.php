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
                    `user_Email` varchar(200) DEFAULT NULL,
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
                              `seller_num` int unsigned NOT NULL,
                              `store_name` varchar(45) NOT NULL,
                              `introduction` text DEFAULT NULL,
                              `user_id` varchar(20) NOT NULL,
                              `seller_id` varchar(20) NOT NULL,
                              `select_date` char(15) NOT NULL,
                              `select_time` char(8) NOT NULL,
                              `select_person` char(5) NOT NULL,
                              `select_menu` text NOT NULL,
                              `reservation_special` text DEFAULT NULL,
                              `intensity_of_reserv` char(2) NOT NULL,
                              `noshow` boolean DEFAULT NULL,
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
            $sql = "INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','eu@ultriciessemmagna.edu','0','IYS36SMT9WR','Guy',24,'010-6667-9221','18-04-05','ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat',1),('Kakao','vitae.diam@et.edu','0','AEY08ZNA7GN','Serina',16,'010-9785-8625','19-07-02','vehicula et, rutrum eu, ultrices sit amet,',1),('Echelin','metus.In@vellectusCum.co.uk','0','GLP76SGV5GI','Chase',58,'010-5627-5963','19-06-24','pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam',1),('Naver','eu.tempor.erat@justoPraesent.ca','0','ZCH56PVC5OF','Beverly',48,'010-2266-7707','16-11-17','posuere, enim nisl elementum purus, accumsan interdum libero dui',1),('Naver','ac.risus.Morbi@fringillamilacinia.org','1','DXF64YAT9XA','Inez',27,'010-9105-1851','18-01-11','Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis',1),('Echelin','vulputate@turpisIncondimentum.ca','0','GAR17DGW6TD','Martena',45,'010-3466-7869','17-06-20','adipiscing elit. Aliquam auctor, velit',1),('Echelin','Duis.at@gravida.net','0','UZJ06HJS9NG','Amber',42,'010-6329-7165','18-11-28','auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis',1),('Naver','Fusce.diam@bibendum.org','1','HPK30GEY3AC','Stella',19,'010-4138-3134','20-06-08','Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas',1),('Echelin','sem.egestas.blandit@Namporttitorscelerisque.edu','1','TBW56WXF0TM','Katelyn',38,'010-0868-7914','19-09-28','mi felis, adipiscing fringilla, porttitor vulputate,',1),('Echelin','Donec.felis.orci@luctus.net','1','IDA38JXD0KN','Leila',42,'010-3909-3060','20-07-08','quam dignissim pharetra. Nam ac nulla. In tincidunt',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Echelin','dignissim@ametlorem.com','0','PEE69ATV5MH','Fulton',31,'010-1241-8524','17-06-16','mus. Aenean eget magna. Suspendisse tristique',1),('Naver','tincidunt.adipiscing@ornareplaceratorci.org','1','JFL81GBV0RE','Jenette',41,'010-8162-7044','18-10-12','lectus pede, ultrices a, auctor non, feugiat nec,',1),('Kakao','in@metusVivamuseuismod.net','0','ZJN50AHK0IF','Hedy',36,'010-1087-0577','17-03-20','et pede. Nunc sed orci lobortis',1),('Facebook','lobortis@cursus.edu','1','AOI65LGU5NC','Kenneth',22,'010-8260-9595','17-01-21','fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum.',1),('Naver','ipsum@Quisque.org','1','HZE71YTE1ZB','Lilah',43,'010-5944-8337','18-12-22','nec ligula consectetuer rhoncus. Nullam velit dui, semper et,',1),('Echelin','Integer.id.magna@ProinmiAliquam.com','1','HRZ58DTI7TX','Porter',39,'010-1604-9815','17-01-20','porttitor tellus non magna. Nam',1),('Echelin','Proin.vel@Sed.net','1','MPP84BGS9ZI','Victoria',58,'010-5890-4160','19-02-24','facilisis facilisis, magna tellus faucibus leo, in lobortis',1),('Echelin','dictum.ultricies.ligula@necmetusfacilisis.com','0','HMY60CQI1BP','TaShya',47,'010-8535-6102','18-07-09','egestas, urna justo faucibus lectus, a sollicitudin orci sem eget',1),('Facebook','turpis.Aliquam.adipiscing@ametnullaDonec.org','0','BHE40ZDS4ZZ','Lucian',42,'010-6924-3186','16-11-06','Duis elementum, dui quis accumsan convallis, ante',1),('Facebook','lacus.Nulla.tincidunt@suscipit.net','1','ZRV19QDI8ML','Sebastian',44,'010-8153-5786','20-05-30','litora torquent per conubia nostra, per inceptos hymenaeos.',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','sit.amet.luctus@loremutaliquam.org','1','RJD17UPL8CR','Gemma',35,'010-0790-4490','16-12-02','semper egestas, urna justo faucibus lectus, a sollicitudin orci',1),('Facebook','ullamcorper.magna.Sed@venenatisa.co.uk','1','EHW19OWX2MB','Ramona',20,'010-0262-0463','19-10-13','elit. Aliquam auctor, velit eget laoreet',1),('Facebook','Fusce.aliquet.magna@sociisnatoquepenatibus.edu','0','VAF34XBQ1JV','Wade',45,'010-8178-9080','17-12-28','Mauris vel turpis. Aliquam adipiscing lobortis risus.',1),('Kakao','malesuada@dolorDonecfringilla.com','1','KZX55NFJ2PL','Marny',55,'010-7456-3766','17-10-16','vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu.',1),('Naver','sem.vitae.aliquam@orci.co.uk','1','YUH59LZQ4TX','Calista',50,'010-6152-1625','17-04-20','nulla. Donec non justo. Proin non massa non ante',1),('Naver','aliquet@Aeneansed.net','0','JYP71OVX2TQ','Caldwell',38,'010-4737-1992','17-07-12','vitae nibh. Donec est mauris,',1),('Kakao','a.purus.Duis@consectetuer.co.uk','0','FJC66FOE3NE','Eugenia',43,'010-6778-8759','19-05-04','a, enim. Suspendisse aliquet, sem',1),('Naver','lobortis.quis.pede@suscipitestac.net','1','PHB91NDS9XW','Scarlett',33,'010-5102-5177','18-01-08','id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut',1),('Echelin','tempus@urnasuscipitnonummy.co.uk','1','XYS32QBS5IW','Kendall',40,'010-0232-5226','19-05-27','aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam',1),('Naver','enim.diam@sed.co.uk','0','FPD17OIJ7YD','Wesley',21,'010-6308-3271','21-01-08','scelerisque neque sed sem egestas blandit. Nam',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Kakao','pede.Suspendisse.dui@rhoncusProin.com','1','ABL72BRL8NR','Bertha',46,'010-0892-0834','19-08-19','ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit',1),('Facebook','in.consequat.enim@infelisNulla.edu','1','THX69CUF3RR','Fulton',37,'010-2022-2366','18-03-04','eget laoreet posuere, enim nisl elementum purus,',1),('Naver','egestas@euismodurnaNullam.ca','0','HAC94HQJ0NQ','Roary',50,'010-1008-0716','20-11-21','lobortis quis, pede. Suspendisse dui. Fusce diam',1),('Naver','ridiculus@sed.co.uk','0','YQK63NSX9NZ','James',60,'010-6120-1380','20-11-26','dui. Cum sociis natoque penatibus et magnis',1),('Echelin','scelerisque@natoquepenatibuset.net','0','UFI15PFO7IP','Kasper',17,'010-6211-1829','17-10-12','Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat',1),('Echelin','cursus.vestibulum.Mauris@mi.edu','1','YOS24JXH2DW','Cody',44,'010-8516-0628','18-05-05','tortor at risus. Nunc ac sem ut dolor',1),('Naver','sapien.cursus.in@atvelit.net','1','LCY98TVS9SW','Addison',22,'010-4682-5760','20-03-19','arcu. Sed et libero. Proin',1),('Facebook','in.sodales.elit@eudui.net','0','FGL59QHX3LI','Emmanuel',26,'010-3449-9588','20-11-17','a, enim. Suspendisse aliquet, sem ut cursus',1),('Naver','Curae.Donec@non.ca','0','JBQ78CPD7XK','Nayda',27,'010-5898-3434','19-05-16','quis arcu vel quam dignissim pharetra. Nam ac nulla. In',1),('Echelin','in@liberomaurisaliquam.net','0','DRK43AQM1KN','Lani',41,'010-9759-2332','20-04-06','ultrices iaculis odio. Nam interdum',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Kakao','pellentesque@porttitor.org','1','GXG85HJN9XL','Evelyn',35,'010-6250-5973','18-01-12','velit. Sed malesuada augue ut',1),('Echelin','nec.euismod@ataugue.com','1','TVB68MII1SN','Montana',35,'010-4709-4029','19-08-13','orci. Donec nibh. Quisque nonummy ipsum non arcu.',1),('Facebook','Quisque.nonummy@penatibusetmagnis.com','1','VMK24CDL5AY','Daphne',38,'010-0378-4375','20-03-02','tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat.',1),('Echelin','sed.dolor@Aenean.net','0','RWJ55XKL2OX','Shannon',28,'010-1702-4300','17-09-03','urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat',1),('Naver','lacinia.at@semperrutrum.com','0','LUZ13ZPH8JA','Addison',48,'010-2230-7145','18-01-19','convallis dolor. Quisque tincidunt pede ac urna. Ut',1),('Facebook','Maecenas.mi.felis@eu.co.uk','1','SMY17VSX3QS','Frances',48,'010-7665-7791','18-07-22','mi tempor lorem, eget mollis lectus pede et risus. Quisque',1),('Kakao','lacus@vel.net','0','AHF27CMF8PH','Shea',37,'010-4279-2808','17-01-27','sed leo. Cras vehicula aliquet libero. Integer in',1),('Naver','vehicula.aliquet@elementumategestas.edu','1','MZA01JVZ1CB','Gary',29,'010-8018-7338','19-07-14','enim mi tempor lorem, eget',1),('Facebook','euismod@nonmagnaNam.org','1','KGB58SGW0RB','Gareth',53,'010-5509-3152','20-09-01','massa. Integer vitae nibh. Donec est',1),('Facebook','parturient.montes.nascetur@ut.net','0','VHV92UYR3BM','Finn',59,'010-4783-5763','20-12-31','ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Facebook','nisl.sem@dolorNullasemper.org','1','TUN66GOY3HN','Quynn',35,'010-7280-0252','17-09-08','Cum sociis natoque penatibus et magnis dis',1),('Echelin','tempor@iaculisnec.co.uk','1','BCM38MMH5GR','Sean',50,'010-8715-7871','20-08-12','dolor elit, pellentesque a, facilisis non,',1),('Kakao','tristique.neque.venenatis@pedesagittis.org','0','ROV67LAV4UG','Wallace',18,'010-3819-3712','19-10-15','arcu. Aliquam ultrices iaculis odio. Nam',1),('Facebook','lorem@euismodin.com','0','CDR84ZJT9VT','Mason',50,'010-9432-8137','17-12-01','lectus pede et risus. Quisque libero lacus, varius et, euismod',1),('Facebook','neque@sem.com','1','PGR16OXS8WI','Jonah',53,'010-3524-8539','18-07-05','id nunc interdum feugiat. Sed',1),('Facebook','nascetur.ridiculus@etipsum.edu','1','IWR22LQZ8WW','Hedy',26,'010-9099-6275','17-06-01','erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt',1),('Kakao','Quisque@Mauris.co.uk','0','EIJ24XLJ5XT','Rylee',46,'010-1293-0862','18-12-30','sociosqu ad litora torquent per conubia nostra,',1),('Echelin','Donec@consectetuermaurisid.ca','1','XRB15LAP8ZN','Zahir',60,'010-0752-4526','20-09-03','ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius.',1),('Echelin','Cras.dolor@lorem.org','1','YRV25NLQ6VN','Inga',19,'010-7339-8979','17-06-24','ultrices. Vivamus rhoncus. Donec est.',1),('Facebook','Nam.ligula@scelerisque.org','1','IHW85SAB0AS','Deanna',37,'010-7121-4054','18-04-01','ligula. Nullam enim. Sed nulla',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Kakao','ante.Maecenas.mi@enimSuspendissealiquet.org','0','CZP10QFW6PC','Randall',45,'010-8333-4368','19-05-12','cursus a, enim. Suspendisse aliquet,',1),('Kakao','cursus.luctus@ut.net','1','IHA26WYH0CQ','Shelley',27,'010-4028-7871','16-12-19','Pellentesque habitant morbi tristique senectus et netus et malesuada',1),('Facebook','nibh.enim.gravida@maurisrhoncusid.net','1','XSK95DEE2ZI','Sigourney',57,'010-8958-2332','18-08-03','libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus',1),('Naver','montes.nascetur@egestasblandit.co.uk','1','GMK15DEO2XO','Ethan',49,'010-3883-5108','20-12-28','mollis nec, cursus a, enim. Suspendisse aliquet,',1),('Echelin','consectetuer.adipiscing.elit@disparturientmontes.ca','1','XWT66TSD7BK','Dakota',34,'010-6571-2643','20-06-03','lectus justo eu arcu. Morbi',1),('Echelin','enim.consequat@lectusante.co.uk','0','MWC26LRT3TC','Brandon',23,'010-9242-4624','19-03-24','elit, a feugiat tellus lorem eu',1),('Echelin','erat.eget@quisarcuvel.com','1','BPA76KKP9US','Kasimir',27,'010-9581-4730','18-07-31','ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula.',1),('Kakao','volutpat.nunc.sit@dictum.co.uk','1','KDM93HGA8QR','Felix',25,'010-7839-8043','19-06-24','Quisque nonummy ipsum non arcu. Vivamus sit',1),('Naver','pellentesque@velitegetlaoreet.org','0','CQN77ABA9ZG','Yuli',49,'010-6562-0165','17-11-05','viverra. Maecenas iaculis aliquet diam. Sed',1),('Kakao','et.rutrum@estNunc.org','1','RFM89VYK8GY','Roanna',43,'010-3400-4001','18-01-28','magnis dis parturient montes, nascetur',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Facebook','eu@Fuscefeugiat.net','0','PJQ01LKZ9MW','Octavia',43,'010-0559-8704','18-05-18','justo. Proin non massa non ante',1),('Kakao','at.egestas.a@ac.edu','0','JNN77BHO0TQ','Brianna',59,'010-8783-9129','17-01-24','velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc',1),('Kakao','ipsum.Curabitur.consequat@malesuadafamesac.ca','0','WRJ84HVB3BZ','Ulysses',22,'010-6486-0257','17-11-23','risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt,',1),('Kakao','amet.orci@vitaesodalesat.co.uk','1','VGH27LKV0GB','Trevor',28,'010-3119-5626','17-09-20','feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum',1),('Facebook','dignissim.pharetra@et.com','0','EOZ29TDI5TP','Byron',60,'010-2743-7420','17-06-22','risus. In mi pede, nonummy ut, molestie in, tempus eu,',1),('Naver','egestas.Duis@nonegestasa.net','1','UIO40PYZ9RT','Chase',50,'010-8162-0184','18-08-10','lectus pede et risus. Quisque libero',1),('Echelin','molestie.sodales@amet.ca','0','GXM58TFU9WL','Oren',18,'010-4182-9007','19-10-02','fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh',1),('Facebook','dolor.dapibus@afelis.co.uk','0','WEH97JVJ1GH','Sybil',35,'010-1415-4756','17-06-21','vulputate dui, nec tempus mauris',1),('Echelin','iaculis@lorem.ca','0','QOT39SRQ1YF','Theodore',29,'010-2631-6078','20-07-02','pellentesque eget, dictum placerat, augue. Sed molestie. Sed',1),('Echelin','Duis.risus.odio@imperdietornare.edu','0','AHZ19OXO7AH','Nasim',50,'010-6675-0888','18-02-09','iaculis quis, pede. Praesent eu dui. Cum',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','per@Integersemelit.ca','0','ZQI33KMX3YT','Deacon',48,'010-7097-3852','17-10-24','consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem,',1),('Facebook','consectetuer@vitaealiquameros.co.uk','0','POJ87IUJ1JL','Duncan',42,'010-0046-1002','17-11-05','rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at,',1),('Echelin','Etiam@maurisblanditmattis.edu','1','CKS96XOA0UC','Kiayada',60,'010-7662-8896','17-03-10','Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus',1),('Naver','justo.faucibus@arcuVestibulumante.ca','0','EUR14HDJ9SX','Winter',60,'010-9258-9518','19-01-16','nibh vulputate mauris sagittis placerat. Cras dictum',1),('Naver','Donec.porttitor.tellus@QuisquevariusNam.co.uk','0','SKO15QOB7WM','Stacey',27,'010-1632-1645','17-10-30','consequat nec, mollis vitae, posuere at, velit. Cras',1),('Naver','Quisque@in.ca','0','GOC24HJV2TR','Adele',57,'010-4958-1075','17-10-19','et, euismod et, commodo at, libero. Morbi accumsan laoreet',1),('Facebook','non@pharetra.edu','0','VTU91SID2HK','Kyra',50,'010-7992-0502','17-02-19','ultricies ligula. Nullam enim. Sed',1),('Echelin','hymenaeos.Mauris.ut@Integerurna.com','0','ZIA79HRW2EB','Warren',35,'010-5753-5614','20-08-15','nisl elementum purus, accumsan interdum libero',1),('Naver','sit.amet.faucibus@acfermentumvel.com','1','SXF96AFN8XM','Finn',54,'010-1988-2092','17-10-21','id ante dictum cursus. Nunc',1),('Kakao','aliquam@facilisisfacilisis.co.uk','0','AGP95URY9TT','Bruce',16,'010-9461-7688','16-12-29','sed tortor. Integer aliquam adipiscing lacus.',1);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Echelin','Etiam.gravida.molestie@ametornarelectus.net','0','DNM64NRX4VW','Yetta',48,'010-5491-9029','19-04-14','penatibus et magnis dis parturient montes, nascetur',1),('Facebook','enim.diam@eratvolutpat.com','0','YTN09XTL1WS','Isabelle',27,'010-2509-7925','19-10-12','egestas a, scelerisque sed, sapien. Nunc pulvinar',1),('Echelin','massa@cursusaenim.net','0','NEA98OKB2KT','Salvador',45,'010-6951-2051','17-04-21','ullamcorper. Duis at lacus. Quisque purus sapien,',1),('Echelin','montes.nascetur.ridiculus@gravida.edu','1','GKR77RJH5LA','Nissim',19,'010-8562-8382','18-09-07','sed, hendrerit a, arcu. Sed et libero.',1),('Facebook','montes.nascetur@atvelit.co.uk','0','DZD71MSN6XJ','Tobias',47,'010-5924-2732','19-01-08','ac mi eleifend egestas. Sed pharetra, felis eget varius',1),('Naver','eget.tincidunt.dui@ligulaelit.edu','0','PWZ84TRS3NQ','Odysseus',56,'010-2332-0482','19-02-11','at augue id ante dictum cursus. Nunc mauris elit,',1),('Naver','ullamcorper.eu@Duis.ca','1','DRI71ENE2YA','Zephr',55,'010-2505-3637','19-02-14','imperdiet, erat nonummy ultricies ornare, elit',1),('Echelin','ultricies@pede.net','0','MSV91IPX1OE','Madeline',44,'010-2157-3273','19-01-27','a mi fringilla mi lacinia mattis.',1),('Naver','tempor.lorem@ante.ca','1','BJC17EVG7NQ','Alden',28,'010-6057-9743','19-03-09','et netus et malesuada fames ac',1),('Kakao','dictum@tinciduntadipiscing.net','0','KYX54EBF0SA','Clayton',39,'010-6032-2547','19-08-25','Ut tincidunt vehicula risus. Nulla eget',1);            
             ";
            $sql .= "INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','tincidunt.dui@Crasinterdum.org','1','QGQ93ADY7TT','Orli',18,'010-8441-0033','17-10-29','sem. Nulla interdum. Curabitur dictum. Phasellus in',10),('Echelin','a.enim.Suspendisse@eu.com','0','KII92EII4GC','Mari',23,'010-4003-5484','16-11-13','Nulla facilisi. Sed neque. Sed eget lacus. Mauris non',10),('Facebook','Morbi@id.com','0','AII93QQS8ZU','Moses',54,'010-9287-6300','17-05-22','dignissim pharetra. Nam ac nulla. In tincidunt congue turpis.',10),('Kakao','vestibulum.massa.rutrum@adipiscing.com','1','EYG95DJU9OQ','Dean',60,'010-8828-6086','19-01-28','amet, consectetuer adipiscing elit. Etiam',10),('Kakao','urna.suscipit.nonummy@natoquepenatibus.co.uk','0','EUO59GXC6XP','Benjamin',39,'010-0789-2818','20-03-15','ipsum leo elementum sem, vitae aliquam eros turpis non',10),('Facebook','luctus@sapien.org','1','JTN42OHN8NP','Mary',47,'010-6744-9641','18-10-31','ipsum primis in faucibus orci luctus et ultrices posuere cubilia',10),('Echelin','Donec.dignissim.magna@metus.net','1','FMJ19SPB2QL','Kasper',35,'010-9597-6713','20-09-02','iaculis quis, pede. Praesent eu dui. Cum',10),('Naver','varius@mauris.com','0','UAL36RGR2IT','Hayden',38,'010-0912-1709','20-01-08','egestas ligula. Nullam feugiat placerat velit. Quisque',10),('Echelin','interdum.feugiat@diameu.net','0','QIB79MJQ7CP','Ralph',57,'010-3215-2221','18-03-17','placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl.',10),('Facebook','nisl.sem@mattisIntegereu.co.uk','1','TCE37OTC2PT','Owen',36,'010-2564-4668','17-12-07','id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer,',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Echelin','mattis.ornare@risusat.com','1','FBR46UVJ9LJ','Lee',41,'010-7449-6237','17-09-19','vitae nibh. Donec est mauris, rhoncus id,',10),('Facebook','velit.eu@eunibhvulputate.co.uk','0','DFT06HZG3LM','Merritt',33,'010-2198-3143','18-03-27','at lacus. Quisque purus sapien, gravida non,',10),('Naver','sed@dolor.net','1','TAZ99UBW7CN','Elvis',47,'010-5637-9709','21-01-11','consequat enim diam vel arcu. Curabitur',10),('Echelin','felis.adipiscing@non.org','1','POS41IUW7MT','Haley',22,'010-1654-3262','17-08-21','sit amet nulla. Donec non',10),('Echelin','urna.suscipit@dignissim.org','0','SEG64GQV4MH','Kaden',33,'010-0840-6924','18-05-03','urna justo faucibus lectus, a',10),('Echelin','nonummy.ultricies@Donecvitaeerat.net','0','ERU65XMG5XG','Meredith',41,'010-9032-0307','18-11-07','venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien.',10),('Naver','blandit.at@utodiovel.net','0','GQX26SCT5DS','Nerea',55,'010-8863-2854','17-09-23','tristique senectus et netus et malesuada',10),('Facebook','dignissim.pharetra.Nam@nisi.org','0','TLS51WSQ9HO','Zenaida',29,'010-3544-6677','20-08-23','scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia.',10),('Echelin','risus@velitduisemper.org','0','IKJ84VTR9ED','Derek',49,'010-0260-6337','20-03-27','Morbi non sapien molestie orci tincidunt',10),('Echelin','Duis.sit@tincidunttempusrisus.net','1','KJK44PCL2XK','Jaime',21,'010-0371-3826','20-04-05','in lobortis tellus justo sit amet nulla. Donec',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','facilisis@ProinvelitSed.ca','1','WTQ88SAU3XL','Sade',50,'010-4537-6616','18-01-01','Cum sociis natoque penatibus et magnis',10),('Kakao','vestibulum.Mauris.magna@Aliquamnec.edu','0','WVR01MEL5NZ','Sawyer',37,'010-4819-5713','17-10-16','nascetur ridiculus mus. Donec dignissim magna',10),('Facebook','quis.accumsan@quamvelsapien.edu','1','BYH25FUT2DG','Ignacia',59,'010-8586-1759','17-01-24','Pellentesque habitant morbi tristique senectus et netus et malesuada',10),('Echelin','Duis@arcu.net','0','GJZ72BAO6PT','Renee',35,'010-5016-6441','19-12-18','Curabitur massa. Vestibulum accumsan neque',10),('Facebook','dolor.sit.amet@seddolor.com','1','TVA96EJD1GI','Abigail',52,'010-6245-2712','20-01-01','sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor',10),('Facebook','cursus@risus.ca','0','VFI11SPL0WX','Marshall',38,'010-6308-1557','20-01-06','nunc sit amet metus. Aliquam',10),('Naver','Nullam.velit.dui@Phasellus.edu','1','CAR99EFW6BV','Caryn',49,'010-3186-3648','17-07-13','ligula. Aenean gravida nunc sed pede. Cum sociis natoque',10),('Naver','luctus@metus.co.uk','1','EKH23MRR4QQ','Medge',18,'010-1781-3767','18-01-16','vitae purus gravida sagittis. Duis gravida.',10),('Facebook','velit@acurnaUt.com','1','XUB06XTL3HD','Roanna',23,'010-9313-5625','19-11-19','urna convallis erat, eget tincidunt',10),('Kakao','pede.et.risus@nonummyultricies.com','1','AHR91VPH9ES','Oleg',53,'010-2842-2510','18-02-05','nisl. Quisque fringilla euismod enim. Etiam gravida molestie',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Facebook','mollis.dui.in@bibendumDonec.net','1','KDT74LJM0WO','Natalie',46,'010-9142-9530','16-12-04','amet diam eu dolor egestas rhoncus. Proin nisl',10),('Naver','metus.In@auctor.edu','0','MNC26SFJ9ZT','Henry',18,'010-4622-3294','20-06-18','lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis',10),('Echelin','sociis.natoque@tellusAeneanegestas.co.uk','1','IRW65ENT9ZR','Adrian',58,'010-1635-0527','17-12-01','Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum.',10),('Naver','tempus@musProin.co.uk','0','SMR71GEQ2EU','Cheryl',38,'010-4901-4609','20-07-31','lobortis. Class aptent taciti sociosqu ad',10),('Facebook','erat@Sed.com','1','XTY04ISY2JV','Anthony',30,'010-0064-3185','20-12-14','risus. Donec nibh enim, gravida',10),('Echelin','risus@tempor.net','1','DRX06FAC9UO','Kaye',28,'010-8181-4672','19-08-24','mauris, rhoncus id, mollis nec,',10),('Echelin','nibh.vulputate.mauris@sociisnatoque.ca','0','JQS33OXE3TF','Carlos',16,'010-9513-2016','17-09-19','senectus et netus et malesuada fames ac turpis egestas. Fusce',10),('Echelin','euismod.et.commodo@consectetuereuismodest.ca','0','NRX00UMJ2EU','Mohammad',53,'010-4339-3652','19-02-26','ullamcorper magna. Sed eu eros. Nam consequat dolor vitae',10),('Kakao','Cras.vulputate@sodalesat.net','0','SZM48EDD8XL','Dylan',38,'010-2437-3008','18-05-22','dictum. Proin eget odio. Aliquam',10),('Kakao','dignissim.lacus.Aliquam@eros.edu','0','GQO25LLD0UA','Harrison',34,'010-5028-9737','19-09-01','nisl. Nulla eu neque pellentesque massa lobortis ultrices.',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Echelin','in.magna.Phasellus@fames.ca','0','NDB23XLS7BW','Lee',36,'010-0722-4702','18-07-17','et magnis dis parturient montes, nascetur ridiculus mus.',10),('Echelin','sed.tortor@maurisut.co.uk','1','PNV64WGB5UG','Chava',28,'010-3937-0783','21-01-17','risus quis diam luctus lobortis.',10),('Kakao','id.ante@Mauris.org','0','QSE40RBQ6KP','Blossom',53,'010-4466-6138','18-09-26','accumsan neque et nunc. Quisque ornare tortor at',10),('Facebook','orci.Phasellus@Proin.net','0','OYX34TLE9CB','Graiden',39,'010-2030-6642','20-05-27','lacinia vitae, sodales at, velit.',10),('Kakao','dictum.magna.Ut@dictumaugue.ca','0','TMQ70ALM3FL','April',57,'010-6196-0010','17-06-08','eu dui. Cum sociis natoque penatibus et',10),('Kakao','et@Proinnon.ca','1','DGZ24HDW7NL','Cruz',32,'010-4029-7709','21-01-08','Curabitur egestas nunc sed libero. Proin sed',10),('Naver','Curabitur.egestas.nunc@Praesenteudui.ca','1','DSC59OHT3YE','Quemby',29,'010-6105-7523','18-12-20','metus. In lorem. Donec elementum, lorem ut aliquam',10),('Naver','malesuada@placerateget.com','0','VWB02WEX9XG','Melinda',29,'010-0437-8364','17-06-14','tincidunt, nunc ac mattis ornare,',10),('Facebook','nonummy.ultricies.ornare@molestie.net','0','WMU54WFM8KO','Marcia',20,'010-9174-4241','17-04-23','molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis',10),('Kakao','eleifend@Integeraliquam.co.uk','1','HBP38HTC9VU','Emily',23,'010-8913-1627','20-12-08','erat. Sed nunc est, mollis non, cursus non,',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Kakao','feugiat@semperNamtempor.ca','1','RQS84LHX0TK','Hope',39,'010-1488-6596','20-12-04','pharetra. Quisque ac libero nec',10),('Kakao','eu@dapibusgravidaAliquam.net','0','XUM42COI5CX','Harding',55,'010-8612-3305','17-01-09','eu, eleifend nec, malesuada ut, sem. Nulla',10),('Echelin','Curabitur.dictum.Phasellus@accumsan.org','1','FVZ92FLR3JB','Audrey',16,'010-9617-4170','19-09-17','Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede,',10),('Kakao','laoreet.libero@nonsollicitudina.edu','0','JVC16SXV2YZ','Dieter',58,'010-1265-2193','19-11-10','tincidunt adipiscing. Mauris molestie pharetra',10),('Kakao','libero.at@rhoncus.net','1','RLC30RTW5RE','Burton',21,'010-4842-5875','20-01-20','auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris',10),('Echelin','ac@lorem.co.uk','1','BLK49ZKV4FI','Allen',42,'010-6936-8174','17-11-26','laoreet, libero et tristique pellentesque, tellus',10),('Facebook','mauris@purus.org','1','JMT25UIB4MU','Briar',54,'010-9920-5043','19-03-01','orci. Donec nibh. Quisque nonummy ipsum',10),('Kakao','quam@nonummy.co.uk','1','EFH96FBI4LT','Josiah',51,'010-3034-3900','17-10-29','orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero',10),('Naver','in.consectetuer@enimnonnisi.org','0','TDU77JLP9ES','Basil',37,'010-2237-9199','21-01-05','Suspendisse eleifend. Cras sed leo. Cras vehicula',10),('Facebook','nunc.ullamcorper@scelerisquelorem.org','1','IYA20GKL0ZR','Allistair',37,'010-2500-3398','19-09-06','odio a purus. Duis elementum, dui quis accumsan convallis, ante',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Echelin','eu.tempor@venenatisa.com','0','IJC60FWG8JH','Colby',46,'010-1713-9997','20-05-29','sit amet, consectetuer adipiscing elit. Curabitur',10),('Facebook','sed.consequat@Ut.com','0','CQJ88AYA0MX','Leandra',59,'010-0909-4540','16-11-30','aptent taciti sociosqu ad litora torquent per conubia nostra, per',10),('Naver','malesuada@nequenonquam.ca','0','PXC33PCL9KP','Fletcher',24,'010-1808-6672','17-05-15','quis urna. Nunc quis arcu vel quam',10),('Kakao','urna.justo@Donec.com','0','JUW17YMK8EJ','Keegan',43,'010-9281-9460','18-03-13','amet ante. Vivamus non lorem',10),('Facebook','quam.dignissim.pharetra@sapien.com','0','PQV05TIF2VO','Karyn',25,'010-5512-5363','20-06-26','nisi magna sed dui. Fusce aliquam, enim nec',10),('Kakao','eu.odio@primisinfaucibus.ca','1','HGJ45CDK6XC','Aaron',27,'010-9164-8355','20-04-29','dui, semper et, lacinia vitae,',10),('Kakao','semper.egestas@CrasinterdumNunc.edu','1','XSQ93LIR1DV','Allen',27,'010-6487-7339','20-02-13','nisi. Mauris nulla. Integer urna. Vivamus molestie',10),('Naver','fermentum.metus@semperduilectus.co.uk','1','STO61YUK8PV','Rahim',40,'010-2957-7639','19-02-13','rhoncus. Nullam velit dui, semper et, lacinia vitae,',10),('Naver','dolor.sit.amet@dolorDonecfringilla.ca','0','LLB80XFM5SC','India',47,'010-8805-3981','19-08-27','Quisque purus sapien, gravida non,',10),('Kakao','elementum@nec.net','1','XEM17QQI7GG','Idona',54,'010-5504-4622','19-10-06','ullamcorper. Duis cursus, diam at',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','mi@enimNunc.com','0','SIU97CRB5YS','Charles',46,'010-1920-2002','20-05-11','Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc',10),('Naver','In@posuere.com','0','KDC99MTM2WJ','Malcolm',37,'010-2427-3377','20-02-21','Mauris vel turpis. Aliquam adipiscing',10),('Facebook','Duis@tinciduntvehicula.org','1','TJZ84ABA7JM','Daria',53,'010-2197-0156','17-01-02','mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus',10),('Facebook','amet.massa.Quisque@ac.net','1','SAM75NRT8GN','Tate',49,'010-4180-7611','20-11-14','et risus. Quisque libero lacus,',10),('Echelin','cursus@eteuismodet.com','1','HQC45RCK5OH','Mallory',52,'010-9603-4202','19-08-12','Cras eu tellus eu augue porttitor interdum. Sed',10),('Facebook','vel.est@velarcu.org','1','NXM32OIY7HQ','Abraham',28,'010-6179-3556','20-07-12','habitant morbi tristique senectus et netus et malesuada fames',10),('Echelin','pede.nec.ante@dis.ca','1','VTS17STB6AW','Holmes',27,'010-5106-8008','20-01-14','neque pellentesque massa lobortis ultrices. Vivamus rhoncus.',10),('Facebook','bibendum.fermentum@turpisegestasAliquam.co.uk','1','TEK53RJI9FR','Shay',33,'010-4781-9065','19-02-13','cursus et, eros. Proin ultrices.',10),('Facebook','lorem.eu@arcu.org','1','ECN38GET8JB','Jared',35,'010-4060-5776','18-10-06','eu nulla at sem molestie sodales. Mauris blandit',10),('Naver','cursus.diam@libero.net','0','KDG57WZR8HQ','Florence',41,'010-6413-7588','17-08-03','eget massa. Suspendisse eleifend. Cras',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Facebook','tempor@blandit.ca','0','GPP48KHV5ES','Levi',20,'010-1731-4712','19-10-02','Vestibulum ut eros non enim commodo hendrerit. Donec',10),('Echelin','eget.ipsum.Donec@hymenaeosMauris.net','0','UXA71TJN9WR','Breanna',43,'010-8278-4700','18-10-21','Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est.',10),('Kakao','malesuada.malesuada.Integer@penatibusetmagnis.ca','0','OQU33JMK7UD','Stone',59,'010-8600-8535','19-08-28','Mauris eu turpis. Nulla aliquet.',10),('Naver','risus@eget.co.uk','1','UYZ86JFA1HZ','Iliana',59,'010-9973-3360','17-07-17','nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et',10),('Naver','ultricies.ornare.elit@elitpede.co.uk','1','KOJ44WSZ0NA','Kiona',18,'010-2880-2860','20-04-16','imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque',10),('Naver','sapien.Cras@risusNullaeget.co.uk','0','TQP77ZVZ4BC','James',30,'010-8499-3716','20-12-03','at, libero. Morbi accumsan laoreet ipsum. Curabitur',10),('Facebook','ac.orci.Ut@ametrisusDonec.edu','0','KWE11GKA7UD','Britanney',24,'010-7734-1714','19-06-19','dictum augue malesuada malesuada. Integer id magna',10),('Echelin','commodo.ipsum.Suspendisse@quam.com','0','ROQ69RWV1EH','Tasha',57,'010-9679-8016','19-03-30','Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer',10),('Naver','odio@massa.ca','0','WYC24MTV9RP','Isadora',55,'010-1619-6533','17-08-11','eu dui. Cum sociis natoque penatibus et magnis dis',10),('Naver','Nullam.suscipit@Maurisnon.co.uk','0','SGC17HPK9GP','Amena',35,'010-5695-7586','19-08-10','mauris blandit mattis. Cras eget nisi dictum augue malesuada',10);
             INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`) VALUES ('Naver','sagittis.lobortis.mauris@eget.org','1','GGB75MHU9RC','Chandler',45,'010-0586-3413','17-09-07','eu nulla at sem molestie sodales.',10),('Facebook','ornare.egestas@diam.co.uk','0','AON96LAI1BC','Ishmael',29,'010-8334-0837','17-10-13','nostra, per inceptos hymenaeos. Mauris ut quam vel',10),('Echelin','sagittis.placerat.Cras@Fusce.edu','1','AIH16RHA1DZ','Lila',25,'010-2111-0282','19-08-22','Phasellus nulla. Integer vulputate, risus a ultricies',10),('Echelin','convallis.ante@Pellentesqueutipsum.ca','0','ASA05NFK5SA','Rhiannon',22,'010-6576-8353','19-05-01','enim non nisi. Aenean eget metus.',10),('Naver','vestibulum.massa.rutrum@idmollisnec.co.uk','0','HVY42NLB5WC','Zachery',47,'010-1490-1687','20-09-30','lectus pede, ultrices a, auctor non, feugiat nec,',10),('Kakao','faucibus.lectus@Aliquamerat.co.uk','1','ZIB84JGL3AZ','Hadassah',51,'010-9164-2892','19-05-10','ipsum. Phasellus vitae mauris sit amet lorem semper',10),('Naver','lorem.sit@Proinmi.net','1','OVR42LTV7EG','Tana',43,'010-3656-5481','19-12-27','ligula. Aenean euismod mauris eu elit. Nulla facilisi.',10),('Echelin','a.aliquet@leo.co.uk','0','OFP89BKR1ZH','Scott',29,'010-8235-0594','19-10-20','odio sagittis semper. Nam tempor diam dictum sapien.',10),('Naver','lacinia.at@pedenec.ca','1','RYY32BUR7XV','Zephania',37,'010-9443-4437','19-08-28','convallis ligula. Donec luctus aliquet',10),('Echelin','Mauris.blandit@ametnulla.ca','0','KFH36IHP2MZ','Fiona',36,'010-7489-5813','17-05-20','ligula. Aliquam erat volutpat. Nulla',10);
             ";
            //  테스트용 사용자
            $sql .= "INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`,`user_Level`)
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
            $sql = "INSERT INTO `reservation` (`reservation_num`,`seller_num`, `store_name`, `introduction`,`user_id`, `seller_id`, `select_date`, `select_time`, `select_person`, `select_menu`, `reservation_special`, `intensity_of_reserv`, `noshow`) VALUES
                    (null,1, '지수네', '정발산 최고의 맛집', 'k@naver.com', '1', '2020년  3월 16일', '14 : 00', '1,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', '채식주의자 입니다', '상', null),
                    (null,2, '동운이네', '은평구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 17일', '14 : 00', '3,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', null, '중', null),
                    (null,3, '032네', '송파구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 18일', '14 : 00', '4,0,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', null, '하', null),
                    (null,4, '무권이네', '마포구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 19일', '14 : 00', '1,2,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', null, '상', null),
                    (null,5, '연서네', '구로구 최고의 맛집', 'k@naver.com', '1', '2020년  3월 20일', '14 : 00', '1,2,0', '치즈떡볶이,1,무뼈닭발,2,내사랑닭갈비,2,얼큰우동,2,곱창,1', null, '상', null);
                ";
            break;

        case 'review':
            $sql = "INSERT INTO `review` (`num`, `seller_num`, `user_Email`, `user_name`, `store_name`, `content`, `file_name`, `file_copied`, `file_type`, `star_access`, `star_service`, `star_flavor`, `star_avg`, `chu_up`, `chu_down`, `regist_day`) VALUES
            (1, 22, 'luctus.ipsum.leo@metussit.co.uk', 'Kelsie', '032네', 'ultrices posuere cubilia Curae Donec tincidunt. Donec', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 5, 3, 0.0, 0, 0, '19-08-16'),
            (2, 28, 'dictum.eleifend@leo.net', 'Daquan', '032네', 'Morbi quis urna. Nunc quis', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 1, 5, 0.0, 0, 0, '20-12-25'),
            (3, 6, 'nulla.Integer@erosnectellus.net', 'Lunea', '권쓰네', 'Donec elementum, lorem ut aliquam iaculis, lacus pede', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 1, 3, 0.0, 0, 0, '19-03-12'),
            (4, 5, 'at@lobortisultrices.com', 'Kenyon', '권쓰네', 'in, cursus et, eros. Proin ultrices. Duis volutpat', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 4, 5, 0.0, 0, 0, '20-12-02'),
            (5, 19, 'egestas@necmaurisblandit.edu', 'Xenos', '지수네', 'mauris. Suspendisse aliquet molestie tellus. Aenean egestas', 'pengsu2.jpg', NULL, 'image/jpeg', 1, 1, 3, 0.0, 0, 0, '18-09-12'),
            (6, 12, 'a.felis@eu.com', 'Hayley', '동운이네', 'sit amet, risus. Donec nibh', 'pengsu3.jpg', NULL, 'image/jpeg', 3, 4, 1, 0.0, 0, 0, '20-09-27'),
            (7, 4, 'arcu@utsemNulla.org', 'Stuart', '성만이네', 'lacus. Aliquam rutrum lorem ac risus.', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 2, 2, 0.0, 0, 0, '18-06-26'),
            (8, 4, 'blandit@sed.net', 'Benjamin', '권쓰네', 'blandit mattis. Cras eget nisi dictum augue', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 3, 3, 0.0, 0, 0, '21-01-28'),
            (9, 27, 'vitae.semper.egestas@necligula.net', 'Ariana', '지수네', 'ante lectus convallis est, vitae', 'pengsu3.jpg', NULL, 'image/jpeg', 4, 5, 5, 0.0, 0, 0, '18-09-22'),
            (10, 3, 'luctus@telluseu.net', 'Evangeline', '성만이네', 'et, rutrum non, hendrerit id, ante. Nunc', 'pengsu3.jpg', NULL, 'image/jpeg', 3, 3, 2, 0.0, 0, 0, '19-07-26'),
            (11, 30, 'Donec.est.Nunc@vestibulumneceuismod.ca', 'Cassady', '032네', 'vel lectus. Cum sociis natoque penatibus et', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 4, 4, 0.0, 0, 0, '19-08-11'),
            (12, 29, 'consequat@erateget.net', 'Colette', '동운이네', 'Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus.', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 3, 5, 0.0, 0, 0, '19-07-31'),
            (13, 25, 'adipiscing@necenim.net', 'Rebekah', '지수네', 'molestie orci tincidunt adipiscing. Mauris molestie', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 5, 2, 0.0, 0, 0, '21-02-04'),
            (14, 10, 'eleifend.Cras@facilisis.org', 'Haviva', '성만이네', 'Pellentesque ut ipsum ac mi eleifend egestas. Sed', 'pengsu2.jpg', NULL, 'image/jpeg', 4, 2, 2, 0.0, 0, 0, '20-09-10'),
            (15, 14, 'dui@vitae.edu', 'Porter', '성만이네', 'lacus vestibulum lorem, sit amet ultricies sem', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 2, 3, 0.0, 0, 0, '19-09-18'),
            (16, 29, 'accumsan.sed@pharetrafeliseget.co.uk', 'Fay', '동운이네', 'urna justo faucibus lectus,', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 5, 5, 0.0, 0, 0, '18-06-28'),
            (17, 13, 'Suspendisse@dis.org', 'Elijah', '권쓰네', 'velit. Cras lorem lorem, luctus ut,', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 4, 1, 0.0, 0, 0, '18-12-15'),
            (18, 29, 'tellus@dapibusgravidaAliquam.com', 'Carly', '032네', 'turpis egestas. Fusce aliquet magna a neque.', 'pengsu3.jpg', NULL, 'image/jpeg', 5, 3, 3, 0.0, 0, 0, '19-04-27'),
            (19, 10, 'est.ac@justoeu.edu', 'Dora', '권쓰네', 'Aenean eget magna. Suspendisse tristique neque venenatis lacus.', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 5, 4, 0.0, 0, 0, '21-02-02'),
            (20, 22, 'justo@Suspendissesagittis.edu', 'Kevyn', '지수네', 'egestas a, dui. Cras pellentesque.', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 2, 1, 0.0, 0, 0, '19-11-16'),
            (21, 19, 'sed@dapibus.ca', 'Rafael', '권쓰네', 'quam quis diam. Pellentesque', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 3, 3, 0.0, 0, 0, '21-02-06'),
            (22, 28, 'Vivamus.nibh@acrisusMorbi.co.uk', 'Hedwig', '동운이네', 'non massa non ante bibendum ullamcorper. Duis cursus,', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 3, 5, 0.0, 0, 0, '18-05-25'),
            (23, 28, 'aliquet.libero@variusNamporttitor.net', 'Sean', '동운이네', 'pede, malesuada vel, venenatis vel, faucibus', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 3, 5, 0.0, 0, 0, '20-04-26'),
            (24, 1, 'enim@feugiatplaceratvelit.org', 'Graiden', '032네', 'lacinia orci, consectetuer euismod est arcu', 'pengsu3.jpg', NULL, 'image/jpeg', 5, 3, 3, 0.0, 0, 0, '19-03-29'),
            (25, 13, 'Mauris.vel@aliquamiaculislacus.org', 'Scott', '032네', 'id ante dictum cursus. Nunc mauris elit, dictum', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 3, 3, 0.0, 0, 0, '20-09-30'),
            (26, 26, 'sed@ametdapibus.ca', 'Ocean', '동운이네', 'lacinia mattis. Integer eu', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 1, 1, 0.0, 0, 0, '20-07-14'),
            (27, 5, 'augue@cursusIntegermollis.net', 'Yasir', '032네', 'tellus. Aenean egestas hendrerit neque. In ornare sagittis', 'pengsu3.jpg', NULL, 'image/jpeg', 4, 3, 2, 0.0, 0, 0, '20-07-11'),
            (28, 30, 'urna.convallis@eueratsemper.co.uk', 'Gil', '캡틴네', 'diam nunc, ullamcorper eu,', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 1, 5, 0.0, 0, 0, '20-04-15'),
            (29, 6, 'adipiscing@lectuspede.edu', 'Tatiana', '성만이네', 'nec mauris blandit mattis.', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 1, 2, 0.0, 0, 0, '20-05-17'),
            (30, 29, 'elit.Aliquam@pellentesqueafacilisis.co.uk', 'Randall', '동운이네', 'Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 3, 4, 0.0, 0, 0, '21-01-28'),
            (31, 10, 'laoreet.lectus.quis@sollicitudina.co.uk', 'Hoyt', '성만이네', 'augue, eu tempor erat neque non', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 1, 5, 0.0, 0, 0, '20-09-28'),
            (32, 15, 'ultrices.Duis@non.ca', 'Pearl', '동운이네', 'quis massa. Mauris vestibulum, neque sed dictum', 'pengsu2.jpg', NULL, 'image/jpeg', 1, 5, 1, 0.0, 0, 0, '18-09-07'),
            (33, 23, 'egestas@eulacus.co.uk', 'Sasha', '동운이네', 'orci. Donec nibh. Quisque nonummy ipsum', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 3, 5, 0.0, 0, 0, '20-10-19'),
            (34, 24, 'pede@nisi.net', 'Medge', '권쓰네', 'neque venenatis lacus. Etiam bibendum fermentum', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 5, 5, 0.0, 0, 0, '20-11-02'),
            (35, 10, 'quam@arcuVestibulumut.org', 'Hector', '032네', 'commodo tincidunt nibh. Phasellus nulla. Integer', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 4, 2, 0.0, 0, 0, '20-05-07'),
            (36, 16, 'Cras@Intinciduntcongue.ca', 'Gwendolyn', '동운이네', 'Cras eget nisi dictum', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 1, 4, 0.0, 0, 0, '19-07-01'),
            (37, 6, 'Donec.felis.orci@tinciduntduiaugue.net', 'Keith', '지수네', 'lobortis ultrices. Vivamus rhoncus.', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 3, 3, 0.0, 0, 0, '19-12-26'),
            (38, 23, 'per.conubia@duinec.net', 'Mary', '권쓰네', 'mi pede, nonummy ut, molestie in, tempus', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 1, 3, 0.0, 0, 0, '18-11-28'),
            (39, 13, 'Sed.neque@vitaenibh.edu', 'Leroy', '032네', 'enim. Mauris quis turpis', 'pengsu2.jpg', NULL, 'image/jpeg', 4, 3, 4, 0.0, 0, 0, '19-11-28'),
            (40, 15, 'urna.convallis.erat@est.com', 'Bree', '지수네', 'nec, leo. Morbi neque tellus, imperdiet non,', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 2, 2, 0.0, 0, 0, '19-05-18'),
            (41, 5, 'ornare.libero@liberolacusvarius.co.uk', 'Drake', '동운이네', 'dolor. Quisque tincidunt pede ac urna.', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 4, 2, 0.0, 0, 0, '18-04-11'),
            (42, 30, 'eu.tellus@felisorci.org', 'Roanna', '032네', 'sed, hendrerit a, arcu. Sed et', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 3, 1, 0.0, 0, 0, '18-08-31'),
            (43, 17, 'senectus.et.netus@vitae.ca', 'Illana', '권쓰네', 'natoque penatibus et magnis dis', 'pengsu2.jpg', NULL, 'image/jpeg', 4, 4, 5, 0.0, 0, 0, '18-04-21'),
            (44, 21, 'enim.Suspendisse.aliquet@adipiscingMaurismolestie.edu', 'Rajah', '성만이네', 'quis, pede. Praesent eu dui. Cum', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 2, 2, 0.0, 0, 0, '18-03-22'),
            (45, 10, 'arcu.Vestibulum.ut@Nulla.org', 'Justine', '캡틴네', 'Maecenas mi felis, adipiscing fringilla, porttitor vulputate,', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 1, 4, 0.0, 0, 0, '20-12-09'),
            (46, 10, 'enim.non.nisi@mollis.net', 'Felix', '권쓰네', 'lectus rutrum urna, nec luctus felis', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 2, 5, 0.0, 0, 0, '19-10-13'),
            (47, 16, 'ipsum.nunc.id@Nulladignissim.net', 'Sybil', '032네', 'Lorem ipsum dolor sit amet,', 'pengsu3.jpg', NULL, 'image/jpeg', 2, 4, 1, 0.0, 0, 0, '18-07-19'),
            (48, 28, 'non.vestibulum.nec@nullavulputate.co.uk', 'Ferris', '권쓰네', 'sit amet massa. Quisque porttitor eros', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 3, 4, 0.0, 0, 0, '18-07-15'),
            (49, 26, 'sed.sapien@erosnectellus.org', 'Hedwig', '성만이네', 'aliquet odio. Etiam ligula tortor, dictum', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 4, 1, 0.0, 0, 0, '21-01-14'),
            (50, 11, 'Proin.sed.turpis@utsemNulla.com', 'Melanie', '캡틴네', 'dolor dolor, tempus non,', 'pengsu3.jpg', NULL, 'image/jpeg', 3, 2, 4, 0.0, 0, 0, '20-05-12'),
            (51, 5, 'ut.mi@metus.net', 'Knox', '권쓰네', 'lacus. Aliquam rutrum lorem ac risus. Morbi metus.', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 4, 5, 0.0, 0, 0, '18-07-23'),
            (52, 12, 'ultrices@metus.org', 'Jonah', '캡틴네', 'consequat, lectus sit amet luctus vulputate, nisi sem', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 3, 2, 0.0, 0, 0, '19-05-13'),
            (53, 7, 'risus.varius@aultriciesadipiscing.co.uk', 'Coby', '캡틴네', 'convallis ligula. Donec luctus aliquet odio. Etiam ligula', 'pengsu2.jpg', NULL, 'image/jpeg', 4, 3, 4, 0.0, 0, 0, '20-04-24'),
            (54, 18, 'quam@malesuadavelvenenatis.com', 'Steel', '지수네', 'Phasellus in felis. Nulla tempor augue ac ipsum.', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 2, 5, 0.0, 0, 0, '21-02-18'),
            (55, 19, 'ultrices@vitae.edu', 'Nyssa', '지수네', 'Sed auctor odio a purus. Duis elementum,', 'pengsu2.jpg', NULL, 'image/jpeg', 4, 2, 2, 0.0, 0, 0, '18-11-13'),
            (56, 30, 'pede.Cras@auctorodio.org', 'Jessica', '동운이네', 'Integer aliquam adipiscing lacus. Ut nec urna', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 2, 1, 0.0, 0, 0, '19-11-04'),
            (57, 20, 'vulputate@egetdictum.com', 'Talon', '성만이네', 'Donec est. Nunc ullamcorper, velit in aliquet lobortis,', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 2, 3, 0.0, 0, 0, '20-07-24'),
            (58, 10, 'tempus@gravida.org', 'Aspen', '캡틴네', 'eu metus. In lorem. Donec elementum,', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 2, 1, 0.0, 0, 0, '19-10-18'),
            (59, 5, 'facilisis.eget@nequetellusimperdiet.net', 'Judith', '032네', 'Nunc ullamcorper, velit in aliquet', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 4, 4, 0.0, 0, 0, '18-03-15'),
            (60, 8, 'eget.lacus@id.org', 'Shellie', '성만이네', 'non enim. Mauris quis turpis vitae', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 5, 5, 0.0, 0, 0, '18-05-11'),
            (61, 21, 'metus.In@natoque.org', 'Kyra', '032네', 'vel pede blandit congue. In scelerisque scelerisque', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 3, 5, 0.0, 0, 0, '20-12-19'),
            (62, 26, 'malesuada.vel@lorem.co.uk', 'Caldwell', '032네', 'sem mollis dui, in sodales elit', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 5, 4, 0.0, 0, 0, '19-07-10'),
            (63, 1, 'mollis.nec@Vestibulumanteipsum.co.uk', 'Charlotte', '캡틴네', 'nascetur ridiculus mus. Donec', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 2, 1, 0.0, 0, 0, '19-05-16'),
            (64, 6, 'non@purusgravidasagittis.edu', 'Cassidy', '성만이네', 'morbi tristique senectus et netus et malesuada fames', 'pengsu3.jpg', NULL, 'image/jpeg', 3, 5, 2, 0.0, 0, 0, '18-10-05'),
            (65, 16, 'Vivamus.nibh.dolor@enimmitempor.co.uk', 'Lila', '지수네', 'convallis in, cursus et, eros. Proin ultrices.', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 1, 4, 0.0, 0, 0, '19-01-10'),
            (66, 30, 'Vestibulum.ante@sem.co.uk', 'Josephine', '동운이네', 'fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 5, 4, 0.0, 0, 0, '19-08-21'),
            (67, 12, 'non.lorem@arcuimperdiet.edu', 'Gil', '권쓰네', 'enim, gravida sit amet, dapibus id, blandit', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 5, 1, 0.0, 0, 0, '20-05-18'),
            (68, 29, 'et.arcu.imperdiet@nisl.co.uk', 'Neil', '032네', 'eu turpis. Nulla aliquet. Proin velit.', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 4, 5, 0.0, 0, 0, '21-01-05'),
            (69, 7, 'arcu.Curabitur@Sed.org', 'Madaline', '성만이네', 'Duis volutpat nunc sit amet metus. Aliquam erat', 'pengsu3.jpg', NULL, 'image/jpeg', 2, 4, 2, 0.0, 0, 0, '20-11-18'),
            (70, 29, 'luctus.lobortis.Class@tempus.net', 'Christian', '지수네', 'Donec vitae erat vel pede', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 3, 5, 0.0, 0, 0, '19-08-30'),
            (71, 11, 'rutrum@cursusnonegestas.ca', 'Sean', '지수네', 'scelerisque, lorem ipsum sodales purus, in molestie', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 1, 1, 0.0, 0, 0, '20-02-02'),
            (72, 10, 'ante@felispurusac.org', 'Simon', '권쓰네', 'ut quam vel sapien imperdiet', 'pengsu2.jpg', NULL, 'image/jpeg', 1, 4, 5, 0.0, 0, 0, '20-04-16'),
            (73, 25, 'ipsum.sodales@sed.net', 'Phyllis', '동운이네', 'Phasellus libero mauris, aliquam eu, accumsan sed, facilisis', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 4, 3, 0.0, 0, 0, '20-04-27'),
            (74, 19, 'tristique.pellentesque@sapienmolestieorci.net', 'Brandon', '032네', 'commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus', 'pengsu3.jpg', NULL, 'image/jpeg', 3, 1, 1, 0.0, 0, 0, '19-06-30'),
            (75, 1, 'ridiculus@magnaPraesent.edu', 'Mason', '권쓰네', 'Sed nulla ante, iaculis nec, eleifend non,', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 3, 1, 0.0, 0, 0, '20-09-29'),
            (76, 22, 'mi@atnisi.com', 'Vielka', '캡틴네', 'Nunc lectus pede, ultrices a, auctor non,', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 2, 2, 0.0, 0, 0, '20-11-29'),
            (77, 7, 'ut.eros.non@interdumNuncsollicitudin.com', 'Christen', '권쓰네', 'commodo ipsum. Suspendisse non leo. Vivamus nibh', 'pengsu2.jpg', NULL, 'image/jpeg', 1, 3, 1, 0.0, 0, 0, '20-07-17'),
            (78, 11, 'Fusce.fermentum@Maecenasmalesuadafringilla.edu', 'Caldwell', '지수네', 'eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus.', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 3, 5, 0.0, 0, 0, '18-10-25'),
            (79, 19, 'facilisis.facilisis@adipiscing.ca', 'Nash', '성만이네', 'nunc. In at pede. Cras', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 3, 4, 0.0, 0, 0, '18-03-03'),
            (80, 3, 'est.congue.a@duiFuscealiquam.co.uk', 'Berk', '성만이네', 'vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 5, 5, 0.0, 0, 0, '20-03-02'),
            (81, 29, 'Mauris.nulla@fames.org', 'Lysandra', '032네', 'vulputate, risus a ultricies adipiscing, enim mi', 'pengsu3.jpg', NULL, 'image/jpeg', 4, 5, 3, 0.0, 0, 0, '20-06-02'),
            (82, 8, 'egestas@vitae.net', 'Flynn', '권쓰네', 'convallis in, cursus et, eros. Proin ultrices.', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 5, 2, 0.0, 0, 0, '18-03-10'),
            (83, 2, 'tortor@odio.ca', 'Francis', '032네', 'Lorem ipsum dolor sit', 'pengsu3.jpg', NULL, 'image/jpeg', 1, 4, 1, 0.0, 0, 0, '19-08-16'),
            (84, 17, 'magna.Sed.eu@magna.net', 'Rogan', '캡틴네', 'orci tincidunt adipiscing. Mauris', 'pengsu3.jpg', NULL, 'image/jpeg', 2, 1, 4, 0.0, 0, 0, '19-02-13'),
            (85, 26, 'Nunc.mauris@sagittissemperNam.ca', 'Brock', '동운이네', 'Nunc lectus pede, ultrices', 'pengsu1.jpg', NULL, 'image/jpeg', 5, 5, 5, 0.0, 0, 0, '20-11-01'),
            (86, 15, 'dapibus.ligula.Aliquam@ut.org', 'Sara', '동운이네', 'natoque penatibus et magnis dis', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 2, 4, 0.0, 0, 0, '19-07-11'),
            (87, 26, 'Sed.pharetra.felis@erat.com', 'Cooper', '032네', 'fermentum vel, mauris. Integer sem elit, pharetra', 'pengsu2.jpg', NULL, 'image/jpeg', 2, 2, 2, 0.0, 0, 0, '20-02-17'),
            (88, 30, 'eget.varius.ultrices@auctor.net', 'Candace', '권쓰네', 'metus. Aliquam erat volutpat. Nulla facilisis.', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 4, 3, 0.0, 0, 0, '20-06-08'),
            (89, 30, 'ut@nislNulla.net', 'Evangeline', '권쓰네', 'metus sit amet ante.', 'pengsu1.jpg', NULL, 'image/jpeg', 1, 1, 5, 0.0, 0, 0, '20-06-04'),
            (90, 12, 'sem.egestas.blandit@ut.org', 'Rose', '동운이네', 'ipsum. Suspendisse sagittis. Nullam', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 2, 3, 0.0, 0, 0, '19-09-15'),
            (91, 10, 'est@adipiscing.org', 'Wendy', '032네', 'feugiat non, lobortis quis, pede. Suspendisse', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 2, 5, 0.0, 0, 0, '18-12-01'),
            (92, 13, 'placerat.orci@quamafelis.com', 'Kamal', '032네', 'nisl. Maecenas malesuada fringilla est. Mauris', 'pengsu2.jpg', NULL, 'image/jpeg', 1, 2, 1, 0.0, 0, 0, '20-03-26'),
            (93, 22, 'nec@lobortis.edu', 'Gannon', '지수네', 'dolor. Quisque tincidunt pede ac urna. Ut tincidunt', 'pengsu1.jpg', NULL, 'image/jpeg', 4, 5, 4, 0.0, 0, 0, '19-01-23'),
            (94, 23, 'Suspendisse@egetipsum.com', 'Amaya', '성만이네', 'fames ac turpis egestas. Fusce aliquet magna a', 'pengsu2.jpg', NULL, 'image/jpeg', 3, 2, 5, 0.0, 0, 0, '21-01-08'),
            (95, 4, 'vitae.sodales@iaculis.edu', 'Axel', '캡틴네', 'nisl. Maecenas malesuada fringilla est. Mauris', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 1, 5, 0.0, 0, 0, '19-03-24'),
            (96, 7, 'nisi@nasceturridiculusmus.ca', 'Ryan', '동운이네', 'enim, gravida sit amet,', 'pengsu1.jpg', NULL, 'image/jpeg', 3, 4, 5, 0.0, 0, 0, '20-03-28'),
            (97, 13, 'eu.tellus.eu@Integer.org', 'Graiden', '지수네', 'risus varius orci, in consequat enim diam', 'pengsu1.jpg', NULL, 'image/jpeg', 2, 1, 2, 0.0, 0, 0, '20-09-22'),
            (98, 18, 'risus@tellusSuspendisse.edu', 'Daniel', '지수네', 'mi. Aliquam gravida mauris ut mi.', 'pengsu3.jpg', NULL, 'image/jpeg', 2, 1, 2, 0.0, 0, 0, '20-10-29'),
            (99, 16, 'orci@at.net', 'Yuli', '032네', 'nonummy ut, molestie in, tempus eu,', 'pengsu2.jpg', NULL, 'image/jpeg', 5, 2, 1, 0.0, 0, 0, '19-06-12'),
            (100, 2, 'scelerisque@Fuscedolorquam.org', 'Burke', '032네', 'dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc', 'pengsu3.jpg', NULL, 'image/jpeg', 5, 4, 5, 0.0, 0, 0, '19-09-23');
            ";

            $sql .= "INSERT INTO `review` (`num`, `seller_num`, `user_email`, `user_name`, `store_name`, `content`, `file_name`, `file_copied`, `file_type`, `star_access`, `star_service`, `star_flavor`, `regist_day`) VALUES
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
