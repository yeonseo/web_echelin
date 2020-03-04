<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 타이틀 변수를 부르기 위해 common_class_value.php를 부르고 선언함 -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main_test.css">

    <!-- 메인 슬라이드 -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/normalize.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/main.css">

    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/js/slide/modernizr.custom.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/js/slide/jquery-1.10.2.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/js/slide/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/js/slide/main.js"></script>

    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
    <header>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/header.php"; ?>
    </header>
    <section>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/main.php"; ?>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
    </footer>
</body>

</html>
