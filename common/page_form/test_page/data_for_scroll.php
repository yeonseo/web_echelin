<?php
$dataCount = $_GET["dataCount"];
$dataPage = $_GET["dataPage"];

echo "<div>$dataCount.' | '.$dataPage</div>";

if (isset($_GET['헤헷'])) {
    $sql = 'SELECT * FROM members ORDER BY num DESC LIMIT ' . $dataPage . ',' . $dataPage;
    $result = $con->query($sql);
    if ($result === FALSE) {
        die('Show Databases Error: ' . mysqli_error($con));
    }
    while ($row = mysqli_fetch_array($result)) {
        //여기에 <얖></얖>
?> 

<?php
    }
}
?> 