<?php

$n = "6";
$p1 = "tokyo 9";
$p2 = "beijing 8";
$p3 = "singapore 7";
$p4 = "london 0";
$p5 = "newyork -5";
$p6 = "osaka 9";
$qt = "beijing 23:38";

$qt = explode(" ", $qt);
$theCity = $qt[0];
$theTime = $qt[1];

$cities = array();
$timeDiffs = array();
for($i = 1; $i <= $n; $i++){//国と時差の配列作成
  $p = explode(" ", ${'p'.$i});
  array_push($cities, $p[0]);
  array_push($timeDiffs, $p[1]);
}

$result = array_search($theCity, $cities);
$timeDiff = $timeDiffs[$result];//対象国と世界標準時間との差

$theTime = explode(":", $theTime);
$theHour = $theTime[0];
$theMinute = $theTime[1];
$theWldH = $theHour - $timeDiff;
$theWldTime = $theWldH.":".$theMinute;//世界標準時間
// echo $theWldTime;

$citiesTime = array();
for($i = 0; $i < $n; $i++){//標準時間と基準とした各国の時間
  $eachCountriesHour = $theWldH + $timeDiffs[$i];//Hour
  if($eachCountriesHour < 0){
    $eachCountriesHour = 24 + $eachCountriesHour;
  }
  elseif($eachCountriesHour >24){
    $eachCountriesHour = $eachCountriesHour - 24;
  }elseif($eachCountriesHour == 24){
    $eachCountriesHour = 00;
  }
  $eachCountriesTime = $eachCountriesHour. ":" . $theMinute;//Hour & Minute
  array_push($citiesTime, $eachCountriesTime);
}
// print_r($citiesTime);

foreach($citiesTime as $key => $val){
  echo $val . "<br>";
}

?>
