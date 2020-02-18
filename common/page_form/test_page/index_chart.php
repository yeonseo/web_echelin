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

  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <script src="./js/vendor/modernizr.custom.min.js"></script>
  <script src="./js/vendor/jquery-1.10.2.min.js"></script>
  <script src="./js/vendor/jquery-ui-1.10.3.custom.min.js"></script>

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_haeder/header_small.php"; ?>
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
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            <!-- 구글 차트 -->
            <!--Load the AJAX API-->
            <script type="text/javascript">
              // Load the Visualization API and the corechart package.
              google.charts.load('current', {
                'packages': ['corechart']
              });

              // Set a callback to run when the Google Visualization API is loaded.
              google.charts.setOnLoadCallback(drawChart);

              // Callback that creates and populates a data table,
              // instantiates the pie chart, passes in the data and
              // draws it.
              function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                  ['Mushrooms', 3],
                  ['Onions', 1],
                  ['Olives', 1],
                  ['Zucchini', 1],
                  ['Pepperoni', 2]
                ]);

                // Set chart options
                var options = {
                  'title': 'How Much Pizza I Ate Last Night',
                  'width': 400,
                  'height': 300
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
            </script>

            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-question-circle"></i>
            </div>
            <div class="<?= COMMON::$css_card_menu_btn_name; ?>">ICON NAME</div>
            <div class="<?= COMMON::$css_card_menu_btn_disc; ?>">설명충 설명중.. 설명충충충추...웅...</div>
            <!-- 구글 차트 -->
            <!--Load the AJAX API-->
            <script type="text/javascript">
              // Load the Visualization API and the corechart package.
              google.charts.load('current', {
                'packages': ['corechart']
              });

              // Set a callback to run when the Google Visualization API is loaded.
              google.charts.setOnLoadCallback(drawChart);

              // Callback that creates and populates a data table,
              // instantiates the pie chart, passes in the data and
              // draws it.
              function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                  ['Mushrooms', 3],
                  ['Onions', 1],
                  ['Olives', 5],
                  ['Zucchini', 4],
                  ['Pepperoni', 2]
                ]);

                // Set chart options
                var options = {
                  'title': 'How Much Pizza I Ate Last Night',
                  'width': 400,
                  'height': 300
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                chart.draw(data, options);
              }
            </script>

            <!--Div that will hold the pie chart-->
            <div id="chart_div2"></div>
          </button>

        </div> <!-- end of css_card_menu_row -->

      </div><!-- end of right_content -->
      </script>
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/large_header/footer.php"; ?>
  </footer>
</body>

</html>