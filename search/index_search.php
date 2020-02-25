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
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/search/js/search.js">

    </script>

    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>
    </script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
    <section>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/search/main_search.php"; ?>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>
</body>

</html>
