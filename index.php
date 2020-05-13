<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Excel to DB </title>


</head>

<body>


<?php
$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            $bigdata[$row][$c] = $data[$c];
        }
        $row++;
    }
    fclose($handle);
}

for ($i = 1; $i <= count($bigdata); $i++) {
    $a[$i] = explode(';', $bigdata[$i][0]);
}

//echo '<pre>';
//print_r($a[1]);exit();
//echo '</pre>';

?>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>№id</th>
            <th>ФИО</th>
            <th>Общее время работы в Ч:м</th>
        </tr>
        </thead>
        <tbody>
        <tr>

        </tr>

        </tbody>
    </table>
</div>
</body>
</html>
