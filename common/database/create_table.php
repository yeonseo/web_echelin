<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/db_connector.php";
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table_base.php";

//자신이 사용할 테이블명을 적음
create_table($con, $dbname, 'echelin_user');
create_table($con, $dbname, 'message');
create_table($con, $dbname, 'board');
create_table($con, $dbname, 'restaurants');
create_table($con, $dbname, 'seller');
create_table($con, $dbname, 'keyword_list');
create_table($con, $dbname, 'store_img');
create_table($con, $dbname, 'menu_img');
