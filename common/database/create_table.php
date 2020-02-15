<?php
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/db_connector.php";
include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table_base.php";

//자신이 사용할 테이블명을 적음
create_table($con, $dbname, 'members');
create_table($con, $dbname, 'message');
create_table($con, $dbname, 'board');
