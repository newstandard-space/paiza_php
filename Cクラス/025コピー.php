<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C025</title>
<style>

</style>
</head>
<body>

<h1>C025:ファックスの用紙回収</h1>

<?php

$n = 5;
$m = 11;
$f_1 = "1 10 1";
$f_2 = "1 20 1";
$f_3 = "1 30 1";
$f_4 = "1 40 1";
$f_5 = "1 50 1";
$f_6 = "2 10 1";
$f_7 = "2 20 2";
$f_8 = "2 30 3";
$f_9 = "2 40 4";
$f_10 = "2 50 5";
$f_11 = "3 50 5";

//ファックスが時間ごとに何回届いたか
$str;
for($i = 1; $i <= $m; $i++){
  $str .= substr(${'f_'.$i}, 0,1);
}
echo $str;


//ファックスが届いた時間の数
$hour = array();
for($i = 1; $i <= $m; $i++){
  array_push($hour, substr(${'f_'.$i}, 0,1));
}
$uniqueHour = array_unique($hour);
var_dump($uniqueHour);
$numHour = count($uniqueHour);
//



?>

</body>
</html>