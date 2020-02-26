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
                  `store_address` varchar(45) NOT NULL,
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
                         `seller_num` int unsigned NOT NULL,
                         `store_name` varchar(45) NOT NULL,
                         `store_file_name` varchar(45) NOT NULL,
                         `store_file_type` varchar(45) NOT NULL,
                         `store_file_copied` varchar(45) NOT NULL,
                          PRIMARY KEY (`num`)
                    ) DEFAULT CHARSET=utf8 ENGINE = InnoDB;
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
            $sql = "INSERT INTO `echelin_user` (`user_sns`,`user_Email`,`user_checkEmail`,`user_password`,`user_name`,`user_age`,`user_phone`,`user_regist_day`,`user_aboutme`)
            VALUES ('Kakao','ornare.In@Donec.ca','1','W03yzx416','Ori',38,'010-3246-0293','2019-08-31 08:58:15','ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec'),('Google','faucibus.orci.luctus@Nuncmaurissapien.net','0','F93dlf966','Cleo',63,'010-3611-9724','2020-12-30 02:25:15','ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere'),('Kakao','ullamcorper.magna.Sed@fringilla.ca','0','L91ioi092','Brandon',49,'010-4883-8793','2019-12-19 09:02:25','magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa'),('Google','dignissim@elitpellentesque.edu','0','O53zpj578','Pandora',38,'010-3924-0719','2021-01-02 00:05:50','Phasellus fermentum convallis ligula. Donec luctus'),('Facebook','dolor.sit.amet@ipsumnunc.edu','1','M94tdq703','Blythe',76,'010-6733-8696','2019-12-26 08:12:53','Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae,'),('Naver','ante.dictum.mi@felisorciadipiscing.edu','1','N53kfm689','Stacey',32,'010-4630-4526','2019-11-16 13:25:39','nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo'),('Kakao','amet@sitamet.co.uk','1','C88yvu590','Yardley',80,'010-2327-7034','2021-02-11 02:42:16','imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin'),
            ('Naver','enim.Etiam@amet.edu','0','A67ysx483','Chelsea',64,'010-8983-1250','2020-04-05 09:34:41','molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non,'),('Google','ultrices.Duis.volutpat@felisullamcorperviverra.ca','0','B50pbg780','Aimee',63,'010-9485-0223','2020-01-19 16:55:23','pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida'),('Naver','mollis.non.cursus@euismodurnaNullam.com','0','I42zaw722','Fiona',56,'010-1133-7679','2020-12-25 11:10:40','orci, adipiscing non, luctus sit amet, faucibus ut, nulla.'),('Google','lorem@idsapien.ca','1','T80epf359','Chaim',24,'010-7658-9186','2019-02-26 14:52:51','est. Mauris eu turpis. Nulla'),('Kakao','dui.nec.urna@pede.co.uk','0','V70jiy380','Derek',37,'010-4895-8075','2020-01-09 14:15:46','turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras'),('Google','ornare.sagittis@dolor.net','0','F46yvx354','Logan',53,'010-9487-6338','2020-11-07 02:50:04','magna. Duis dignissim tempor arcu. Vestibulum ut'),('Naver','non@mi.com','0','V73won373','Dolan',55,'010-7099-6002','2020-11-02 11:43:01','Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae,'),('Google','Etiam@magna.co.uk','0','W14nug396','Honorato',59,'010-6844-8349','2020-09-02 04:42:07','ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam'),
            ('Facebook','convallis.est.vitae@ut.ca','1','F33urq821','Leilani',50,'010-8795-0736','2019-05-11 10:33:39','turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae'),('Google','vulputate@malesuadafames.net','0','S45uqi762','Ferdinand',60,'010-6100-7713','2019-03-02 09:14:11','parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat.'),('Google','volutpat.Nulla.dignissim@facilisisSuspendissecommodo.edu','1','X49ppg371','Alexander',47,'010-4871-2420','2020-10-09 22:09:47','purus mauris a nunc. In at'),('Google','Nullam@euismod.org','1','V49jmd135','Kaitlin',30,'010-7592-5492','2021-01-01 06:10:55','molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui'),('Google','In.at.pede@magna.net','1','D71icv504','Rose',61,'010-9225-8115','2020-03-27 19:59:23','pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi.'),('Facebook','Class@ante.net','0','I75hpd050','Harding',15,'010-6012-1057','2019-08-01 06:02:50','magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec'),('Facebook','diam@afacilisisnon.edu','1','K85jxp966','Nora',28,'010-5414-3956','2019-11-23 00:59:33','ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec'),('Kakao','morbi.tristique.senectus@auctor.net','0','B42ctu924','Kylie',54,'010-4661-9392','2020-12-26 01:35:03','sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus'),
            ('Facebook','libero.dui@dolorsit.org','1','P77pje776','Claudia',31,'010-6652-3073','2019-05-10 17:46:48','Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut'),('Naver','egestas@orciconsectetuereuismod.net','0','G23pza096','Flavia',15,'010-1878-2363','2020-04-22 05:21:30','sollicitudin orci sem eget massa. Suspendisse eleifend.'),('Facebook','Aliquam.ultrices@quama.org','0','Y89efk055','David',48,'010-6424-2479','2020-01-13 03:00:57','orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at'),('Facebook','nunc.sed.pede@tristique.com','0','U81cnv021','Plato',48,'010-9102-6987','2020-05-11 23:01:39','sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie'),('Google','Fusce@Craseu.co.uk','0','O26qbe017','Cooper',74,'010-8961-1144','2020-04-06 15:40:11','vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus, accumsan'),('Google','nunc.interdum@eueleifendnec.ca','1','K59vrc574','Whilemina',72,'010-8526-3774','2020-09-20 12:40:15','ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc'),('Facebook','libero@natoquepenatibuset.co.uk','0','G07wgf171','Reed',16,'010-1071-0942','2019-05-06 13:54:49','magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.'),
            ('Facebook','Suspendisse.commodo@aarcuSed.edu','0','L93cqe524','Walter',25,'010-4774-8490','2021-01-19 00:24:34','molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti'),('Facebook','montes@PhasellusornareFusce.co.uk','0','M87tlc527','Jescie',36,'010-9634-7989','2020-10-01 17:57:56','tortor at risus. Nunc ac sem'),('Naver','dolor@odio.edu','0','Z58rth630','Alvin',18,'010-4891-2051','2020-05-27 01:33:40','parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia'),('Naver','in@adui.co.uk','1','I09wbv356','Neve',65,'010-6143-9721','2019-07-15 12:57:52','ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non,'),('Google','lobortis.tellus.justo@mifringillami.co.uk','0','Y11tgp960','Howard',26,'010-1990-6462','2020-03-13 05:26:53','lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris'),('Google','aliquet.odio@fermentumfermentum.edu','0','O36zut054','Jessamine',51,'010-1489-3757','2019-09-13 07:14:13','non leo. Vivamus nibh dolor,'),('Facebook','cubilia.Curae@et.edu','0','D51pdp160','Emerald',29,'010-6728-3328','2020-10-16 23:58:26','turpis vitae purus gravida sagittis. Duis gravida. Praesent'),('Facebook','ipsum.Suspendisse.sagittis@gravidaPraesent.net','1','I92yqd880','Kiona',35,'010-6393-9965','2019-03-07 04:23:22','odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing'),('Naver','mi.Aliquam@Seddiam.edu','1','A70ggi904','Brent',62,'010-3528-2617','2019-03-06 13:24:08','turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla'),
            ('Kakao','sapien.molestie@necleo.ca','1','X76slx140','India',58,'010-1751-6949','2020-10-31 06:08:27','magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus.'),('Naver','neque.Nullam.ut@estvitae.org','1','X68pmn127','Cassandra',73,'010-6077-4848','2019-07-18 20:38:35','vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies'),('Facebook','Aliquam.rutrum.lorem@scelerisque.edu','1','X66uxm703','Camille',14,'010-4958-7239','2020-11-19 09:38:11','Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum'),('Kakao','eu.dui.Cum@semperet.com','0','M62kkz907','Laurel',72,'010-7550-7067','2020-05-07 09:19:31','Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus'),('Facebook','nostra.per.inceptos@egestasAliquam.co.uk','1','G78nrx883','Raphael',34,'010-9516-7728','2021-01-23 14:32:14','egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed'),('Google','commodo.tincidunt@aliquetdiam.ca','1','E90dnq031','Imelda',65,'010-7422-7800','2019-03-22 03:09:41','ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum'),('Facebook','sem@cursus.co.uk','0','H80ask567','Yetta',69,'010-8600-8483','2019-08-18 06:47:25','pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate'),
            ('Google','quam.a.felis@semmagna.net','1','V15odl209','Odysseus',24,'010-8940-1496','2020-06-09 21:05:34','sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec,'),('Naver','Nullam@Etiamlaoreetlibero.net','0','A82rsj530','Xanthus',41,'010-6407-7234','2019-10-12 11:52:12','Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet,'),('Google','mi@interdum.com','1','R84pjw334','Leigh',31,'010-9239-2732','2021-01-18 03:59:51','mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo'),('Google','velit.dui.semper@aliquam.org','1','Y47kze866','Demetria',62,'010-6760-5720','2019-06-07 17:37:53','lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus'),('Facebook','nostra@nequeet.co.uk','1','T03krj305','Chelsea',29,'010-2986-7815','2020-01-09 21:42:46','tristique ac, eleifend vitae, erat. Vivamus nisi.'),('Naver','sagittis.lobortis.mauris@semeget.net','1','T76dhf899','Preston',39,'010-5213-3467','2019-03-28 00:03:39','egestas blandit. Nam nulla magna, malesuada vel, convallis in,'),('Kakao','Mauris.quis.turpis@commodotincidunt.net','1','Y73eaw687','Georgia',49,'010-7314-8702','2019-05-05 14:51:35','diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut'),('Naver','lectus.quis.massa@Vivamuseuismod.co.uk','1','E00tfe196','Avye',69,'010-8153-2940','2020-02-11 21:03:17','quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus'),
            ('Facebook','magnis.dis@ametante.org','1','Y75zlh452','Nora',44,'010-3985-8981','2020-10-29 07:29:46','non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis'),('Naver','porttitor.vulputate.posuere@Aenean.com','1','P94kuy492','Brendan',50,'010-3083-7897','2019-09-24 07:07:21','arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac'),('Google','mollis.nec.cursus@commodo.edu','1','I79kwe141','Avram',50,'010-5104-1175','2019-04-26 05:35:39','Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit'),('Facebook','posuere@ProinvelitSed.ca','0','Y44jzf265','Clayton',78,'010-7019-6263','2020-08-22 17:05:06','ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede'),('Google','Nunc.ut@diamnuncullamcorper.edu','1','S83hlc776','Fallon',39,'010-4176-7382','2019-09-17 07:28:31','molestie tellus. Aenean egestas hendrerit neque.'),('Naver','semper.pretium.neque@maurissit.ca','1','H22olp490','Mallory',63,'010-5952-8678','2020-07-14 00:52:52','in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.'),('Facebook','neque.et@etcommodoat.com','0','N78vsk337','Elton',69,'010-2623-9911','2020-11-01 07:01:36','amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus'),('Facebook','magnis@Aliquamornarelibero.edu','0','T33tav040','Hollee',29,'010-7097-2779','2020-01-03 01:37:51','elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec,'),
            ('Naver','pede.Cras.vulputate@lobortis.ca','0','Q83meq255','Quynn',26,'010-6690-7126','2021-01-10 08:46:19','nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu'),('Google','vel@dignissimMaecenasornare.edu','1','H28ehp515','Oren',16,'010-3879-1587','2020-11-14 22:16:09','Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce'),('Facebook','sit.amet@ipsum.net','1','A38pql569','Stephen',65,'010-6972-7722','2020-09-01 15:12:25','orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer'),('Google','eget@Nullaeget.ca','0','Y45tfy206','Shaine',71,'010-8006-8708','2020-01-22 07:41:30','Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non'),('Naver','ullamcorper.Duis.at@liberoatauctor.net','1','C81nki126','Flavia',39,'010-8852-1337','2019-10-11 09:48:43','ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo'),('Google','Vivamus.euismod@tempordiam.co.uk','1','P13nae851','Kellie',22,'010-6794-3612','2020-11-16 01:24:51','dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit'),('Google','porttitor@nuncinterdumfeugiat.edu','1','K01jsk964','Calvin',54,'010-8834-6153','2020-08-28 14:02:06','egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra'),
            ('Kakao','Quisque.imperdiet@eulacus.com','1','O43tun642','Zenaida',28,'010-5405-3479','2019-05-10 19:25:11','penatibus et magnis dis parturient montes, nascetur'),('Facebook','neque@Nullaeu.edu','0','X17qvf457','Rashad',70,'010-3690-0432','2020-10-11 15:23:37','luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.'),('Kakao','et@tinciduntvehicula.org','1','A82pda326','Whoopi',29,'010-6103-7630','2020-11-09 13:41:01','libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet'),('Kakao','et@elitpede.com','1','S49hwz088','Jescie',70,'010-2809-1230','2020-12-14 07:08:51','tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec'),('Kakao','in.aliquet.lobortis@posuereenim.com','0','W49wgn696','Nero',56,'010-5591-4757','2019-11-25 03:20:56','lobortis tellus justo sit amet nulla. Donec non justo. Proin'),('Google','Phasellus@egetodio.org','1','P71opa304','Emi',23,'010-2409-1952','2019-07-17 14:33:56','blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc'),('Kakao','nisi@Aliquam.com','1','B52xhq089','Veronica',36,'010-2683-9664','2020-04-12 04:04:02','elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum'),('Kakao','dui.nec@Maurisblandit.net','1','D20tmc577','Arsenio',42,'010-4880-7676','2020-12-19 23:55:33','Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in,'),
            ('Kakao','elit.dictum.eu@Maurisblandit.ca','1','Z31evz752','Lavinia',40,'010-3396-6271','2021-02-05 22:02:14','velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia'),('Kakao','rutrum@risusa.net','1','R61prh658','Alan',60,'010-1698-5174','2021-02-18 11:36:15','sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget'),('Facebook','id@orcitinciduntadipiscing.com','1','G61qnk056','Casey',65,'010-3521-4412','2019-08-09 10:57:48','Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec'),('Naver','eu.nibh.vulputate@tellusimperdietnon.ca','1','D30lnl095','Rebekah',16,'010-3644-2291','2020-06-18 14:33:28','cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum'),('Google','purus@erat.co.uk','0','S33rmc060','Ciara',38,'010-9919-6665','2019-04-21 22:55:17','ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh.'),('Naver','metus.Aenean.sed@ac.net','1','H54uhb805','Marny',54,'010-9745-1480','2019-06-26 04:24:04','Nullam scelerisque neque sed sem egestas blandit. Nam'),('Kakao','Cras@sagittisaugueeu.org','0','W85vjr708','Tad',60,'010-2176-6539','2019-08-31 22:58:39','elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo.'),
            ('Naver','dictum.mi.ac@tristique.com','0','Y84kmj892','Halee',72,'010-5455-4553','2019-04-27 00:52:41','Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede.'),('Google','Quisque.ac.libero@mipede.edu','1','I39qwr846','Dominique',59,'010-8134-4027','2019-12-24 22:51:55','Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris'),('Kakao','tristique.ac@estNunc.edu','1','J06jcp338','Aquila',40,'010-4627-7461','2020-12-11 12:17:32','nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed'),('Facebook','nec.mollis.vitae@Donecestmauris.edu','0','R51oog808','Clarke',29,'010-1820-0513','2020-12-15 04:10:45','convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam,'),('Facebook','faucibus.orci.luctus@dictumsapien.edu','0','U74iwy346','Macey',55,'010-6235-9724','2020-03-15 00:12:43','pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,'),('Facebook','bibendum@auctorMauris.org','1','J55zgh984','Lane',76,'010-4353-2736','2020-09-22 13:07:04','Phasellus vitae mauris sit amet lorem'),('Google','vitae.sodales@quis.ca','0','X08rtq895','Bruce',78,'010-9027-7229','2020-11-30 23:07:37','Cum sociis natoque penatibus et magnis dis'),('Facebook','erat.volutpat.Nulla@egestaslacinia.co.uk','0','L42waf038','Jarrod',58,'010-7963-0557','2019-12-31 17:19:10','magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam'),('Naver','vitae.erat@per.com','0','S99cwd599','Quinn',54,'010-3867-4474','2020-09-04 16:39:09','vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum.'),
            ('Naver','sed.sem.egestas@erosNamconsequat.ca','1','Q08elb268','Cassandra',58,'010-8853-4600','2020-06-04 20:19:00','Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas'),('Facebook','Mauris.vestibulum.neque@laciniaorci.ca','1','R39oei422','Deanna',18,'010-9507-4763','2019-03-31 03:38:14','tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis.'),('Naver','Vivamus@mattisIntegereu.co.uk','0','T73uki435','Phillip',14,'010-5397-8400','2020-03-07 06:43:39','ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at,'),('Facebook','pretium.aliquet.metus@facilisismagnatellus.net','1','A91htd308','Nolan',61,'010-3778-1073','2020-10-26 19:17:32','Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt,'),('Naver','Donec.fringilla@Integertincidunt.org','0','N16zxg446','Christian',36,'010-1921-7815','2019-08-15 21:04:38','sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est,'),('Facebook','convallis.convallis@arcuVestibulumante.co.uk','0','X11eiv584','Rhea',19,'010-8642-1606','2020-08-31 18:57:58','et netus et malesuada fames ac turpis'),('Kakao','Cum.sociis@laoreetlectusquis.co.uk','1','Q10yds264','Bruno',47,'010-8770-2583','2020-05-04 18:08:02','metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non');
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
              (null, 'infor15', '6618700621', '지수네', '한식', '경기 고양시 일산서구 후곡로 55', '10372','37.68226978304604', '126.76502696497245', '식당 내부 화장실,아기 의자', '엄마가 해준 밥이 먹고 싶다면 여기로 오세염', '15 : 00', '17 : 00', false, '2008-12-31', '09 : 00', '22 : 00', '010-2828-8705', null, 5, '3개월', '상');
          ";
            break;

        case 'keyword_list':
            $sql = "INSERT INTO `keyword_list` (`keywords_type`, `keywords`) VALUES
                  ('food_class', '한식,양식,아시아음식,일식,중식,분식,카페,뷔페,기타'),
                  ('tag_class', '조용한,편안한,시끌벅적한,푸짐한,캐쥬얼한,아이와함께,모임하기좋은,특별한날,코스요리,프로포즈,데이트,백종원의3대천왕,생활의달인,수요미식회,혼밥');
              ";
            break;

        case 'store_img':
            $sql = "INSERT INTO `store_img` (`num`, `seller_num`, `store_name`, `store_file_name`, `store_file_type`, `store_file_copied`) VALUES
                    (null, 1, '지수네', '20180914_163451', 'image/jpeg', '2020_02_25_15_29_07_8252.jpg'),
                    (null, 1, '지수네', '20180914_165049', 'image/jpeg', '2020_02_25_15_29_07_1890.jpg'),
                    (null, 1, '지수네', '20180914_165226', 'image/jpeg', '2020_02_25_15_29_07_9476.jpg'),
                    (null, 1, '지수네', '20180914_165855', 'image/jpeg', '2020_02_25_15_29_07_3682.jpg'),
                    (null, 1, '지수네', '20180915_164325', 'image/jpeg', '2020_02_25_15_29_07_3375.jpg');
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
