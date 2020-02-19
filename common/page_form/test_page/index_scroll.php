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

    <script type="text/javascript">
        let isDataEnd = false;
        const dataCount = 8;
        let dataPage = 0;

        $(document).ready(function() {
            $(window).scroll(function() {
                let $window = $(this);
                let scrollTop = $window.scrollTop();
                let windowHeight = $window.height();
                let documentHeight = $(document).height();

                //onsole.log("documentHeight:" + documentHeight + " | scrollTop:" + scrollTop + " | windowHeight: " + windowHeight + " | isDataEnd :" + isDataEnd);

                // scrollbar의 thumb가 바닥 전 30px까지 도달 하면 리스트를 가져온다.
                if (scrollTop + windowHeight + 30 > documentHeight) {
                    fetchList();
                    $('div#loadmoreajaxloader').show();
                }
            })
            fetchList();
        });

        let fetchList = function() {
            if (isDataEnd == true) {
                return;
            }
            console.log("fetchList func isDataEnd : " + isDataEnd);
            // 방명록 리스트를 가져올 때 시작 번호
            // renderList 함수에서 html 코드를 보면 <li> 태그에 data-no 속성이 있는 것을 알 수 있다.
            // ajax에서는 data- 속성의 값을 가져오기 위해 data() 함수를 제공.
            $.ajax({
                url: "http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/common/page_form/test_page/data_for_scroll.php?dataCount=" + dataCount + "&dataPage=" + dataPage,
                success: function(html) {
                    if (true) {
                        $("#list_guestbook").append(html);
                        $('div#loadmoreajaxloader').hide();
                        //console.log("fetchList success if : " + isDataEnd);
                    } else {
                        $('div#loadmoreajaxloader').html('<center>No more posts to show.</center>');
                        //console.log("fetchList success else : " + isDataEnd);
                    }
                }
            });
            dataPage += 1;
        }
    </script>
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
                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="far fa-id-card"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                </div> <!-- end of css_card_menu_row -->



                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="far fa-id-card"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                </div> <!-- end of css_card_menu_row -->



                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="far fa-question-circle"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                </div> <!-- end of css_card_menu_row -->



                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="far fa-question-circle"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                </div> <!-- end of css_card_menu_row -->



                <div class="<?= COMMON::$css_card_menu_row; ?>">
                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                    <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
                        <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
                            <i class="far fa-question-circle"></i>
                        </div>
                        <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
                        <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
                    </button>

                </div> <!-- end of css_card_menu_row -->




                <div id="list_guestbook"></div>
                <div id="loadmoreajaxloader">로딩중~~~~</div>
            </div><!-- end of right_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
    </footer>
</body>

</html>