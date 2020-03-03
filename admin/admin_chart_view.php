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

  <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/admin/css/admin_chart_view.css">

  <!-- 공통으로 사용하는 link & script -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/common_link_script.php"; ?>

</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/database/create_table.php"; ?>
  <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/header_small.php"; ?>
  </header>
  <section>

    <!-- google 차트 스크립트 -->
    <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {
        'packages': ['corechart']
      });

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawCurveChart);
      google.charts.setOnLoadCallback(drawSeriesChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

      function drawChart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['20대 이하', 34],
          ['20대', 45],
          ['30대', 203],
          ['40대', 65],
          ['50대', 23],
          ['60대 이상', 12]
        ]);

        // Set chart options
        var options = {
          'width': 370,
          'height': 370,
          legend: 'none',
          colors: ['#e2431e', '#d3362d', '#e7711b',
            '#e49307', '#e49307', '#b9c246'
          ]
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      function drawChart2() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['20대 이하', 58],
          ['20대', 234],
          ['30대', 655],
          ['40대', 120],
          ['50대', 46],
          ['60대 이상', 12]
        ]);

        // Set chart options
        var options = {
          'width': 370,
          'height': 370,
          legend: 'none',
          colors: ['#e2431e', '#d3362d', '#e7711b',
            '#e49307', '#e49307', '#b9c246'
          ]
        };


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }

      function drawSeriesChart() {

        var data = google.visualization.arrayToDataTable([
          ['ID', '식당 등록 수', 'Restaurant Num', 'Region', 'Population'],
          ['종로', 80.66, 1.67, 'North America', 33739900],
          ['중구', 79.84, 1.36, 'Europe', 81902307],
          ['용산', 78.6, 1.84, 'Europe', 5523095],
          ['성동', 72.73, 2.78, 'Middle East', 79716203],
          ['광진', 80.05, 2, 'Europe', 61801570],
          ['동대문', 72.49, 1.7, 'Middle East', 73137148],
          ['중랑', 68.09, 4.77, 'Middle East', 31090763],
          ['성북', 81.55, 2.96, 'Middle East', 7485600],
          ['강북', 68.6, 1.54, 'Europe', 141850000],
          ['도봉', 72.6, 2.54, 'Europe', 141850000],
          ['노원', 68.6, 1.54, 'Europe', 141850000],
          ['은평', 68.6, 1.54, 'Europe', 141850000],
          ['서대문', 68.6, 1.54, 'Europe', 141850000],
          ['마포', 72.6, 2.54, 'Europe', 141850000],
          ['양천', 68.6, 1.54, 'Europe', 141850000],
          ['강서', 85.6, 2.54, 'Europe', 141850000],
          ['구로', 68.6, 1.54, 'Europe', 141850000],
          ['금천', 72.6, 2.54, 'Europe', 141850000],
          ['영등포', 68.6, 1.54, 'Europe', 141850000],
          ['동작', 68.6, 3.54, 'Europe', 141850000],
          ['관악', 68.6, 1.54, 'Europe', 141850000],
          ['서초', 80.6, 4.54, 'Europe', 141850000],
          ['강남', 78.09, 2.05, 'North America', 307007000]
        ]);

        var options = {
          hAxis: {
            title: 'Life Expectancy'
          },
          vAxis: {
            title: 'Fertility Rate'
          },
          bubble: {
            textStyle: {
              fontSize: 11
            }
          },
          backgroundColor: 'none'
        };

        var chart = new google.visualization.BubbleChart(document.getElementById('chart_map'));
        chart.draw(data, options);
      }

      function drawCurveChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', '유저', '셀러'],
          ['2016', 230, 421],
          ['2017', 342, 460],
          ['2018', 807, 675],
          ['2019', 1843, 956]
        ]);

        var options = {
          'curveType': 'function',
          'width': 750,
          'height': 350,
          'legend': {
            position: 'bottom'
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>


    <div class="my_info_content">
      <div class="left_menu">
        <!-- 순서대로쭉쭉 -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/admin/admin_side_left_menu.php"; ?>
      </div>
      <div class="right_content">

        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-clipboard-list"></i><span> 나이대 별 가입자 현황</span>
            </div>
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-clipboard-list"></i><span> 나이대 별 후기 현황</span>
            </div>
            <!--Div that will hold the pie chart-->
            <div id="chart_div2"></div>
          </button>
        </div> <!-- end of css_card_menu_row -->

        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-clipboard-list"></i><span> 나이대 별 가입자 현황</span>
            </div>
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
          </button>

          <button class="<?= COMMON::$css_card_menu_btn; ?>" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="fas fa-clipboard-list"></i><span> 나이대 별 후기 현황</span>
            </div>
            <!--Div that will hold the pie chart-->
            <div id="chart_div2"></div>
          </button>
        </div> <!-- end of css_card_menu_row -->


        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="card_menu_wider2_btn" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-question-circle"></i><span> 연도별 사용자 증가 추이</span>
            </div>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
          </button>
        </div> <!-- end of css_card_menu_row -->



        <div class="<?= COMMON::$css_card_menu_row; ?>">
          <button class="card_menu_wider2_btn" type="button" onclick="location.href='http\://<?php echo $_SERVER['HTTP_HOST']; ?>/echelin/index.php'">
            <div class="<?= COMMON::$css_card_menu_btn_icon; ?>">
              <i class="far fa-question-circle"></i><span> 지역별 사용자 및 상점 수 </span>
            </div>
            <div id="chart_map" style="width: 800px; height: 300px;"></div>
          </button>
        </div> <!-- end of css_card_menu_row -->

      </div><!-- end of right_content -->
  </section>
  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/echelin/common/page_form/small_header/footer.php"; ?>
  </footer>
</body>

</html>