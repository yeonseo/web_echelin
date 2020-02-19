<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_class_value.php"; ?>
    <title> <?= COMMON::$title; ?> </title>

    <!-- CSS, JS 파일 링크 시, -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/common.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/css/search.css">

    <!-- 공통으로 사용하는 link & script -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
    </header>
    <section>
        <div class="my_info_content">
            <div class="left_menu">
                <!-- 왼쪽 사이드 프로필 -->
                <div class="my_info_profile">
                    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/my_info/index_my_info.php"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/image/pengsu1.jpg"></a>
                </div>
                <!-- 왼쪽 사이드 메뉴 -->
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/test_page/main_side_left_menu.php"; ?>
            </div>
            <div class="right_content">
                <div class="<?= COMMON::$css_common_table_width; ?>">
                    <div class="<?= COMMON::$css_common_table_head; ?>">
                        사용자 목록
                    </div>
                    <?php
                    echo "<div class=" . COMMON::$css_common_table_main . "> ";
                    echo "<table>";

                    echo "<thead><tr>";
                    $colum_length = 10;
                    for ($i = 0; $i < $colum_length; $i++) {
                        echo "<th>th $i</th>";
                    }
                    echo "<th>수정</th>";
                    echo "</tr></thead>"; //end of table head

                    echo "<tbody>";

                    $row_length = 5;
                    for ($j = 0; $j < $row_length; $j++) {
                        echo "<tr>";
                        $colum_length = 10;
                        for ($i = 0; $i < $colum_length; $i++) {
                            echo "<th>body $i</th>";
                        }
                        echo "<th><button></button></th>";
                        echo "</tr>"; //end of table tr
                    }

                    echo "</tbody>"; //end of table body


                    echo "</table>"; //end of table
                    echo "</div>"; //end of div common_table_main
                    ?>

                </div> <!-- end of css_card_menu_row -->
            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>
</body>

</html>