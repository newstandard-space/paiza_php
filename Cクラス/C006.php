<?php


$_POST['n'] = 4;
$_POST['m'] = 10;
$_POST['k'] = 3;
$_POST['c_0'] = '1.5';
$_POST['c_1'] = '1.2';
$_POST['c_2'] = '2';
$_POST['c_3'] = '0.4';
$_POST['m_0'] = '208 200 3 99988';
$_POST['m_1'] = '255 150 50 65472';
$_POST['m_2'] = '103 748 39 48571';
$_POST['m_3'] = '159 403 32 89928';
$_POST['m_4'] = '254 300 67 78492';
$_POST['m_5'] = '249 298 47 45637';
$_POST['m_6'] = '253 382 89 37282';
$_POST['m_7'] = '250 350 78 76782';
$_POST['m_8'] = '251 371 69 67821';
$_POST['m_9'] = '256 312 89 54382';




$n = $_POST['n'];
$m = $_POST['m'];
$k = $_POST['k'];

for($i = 0; $i < $n; $i++){
  $c[$i] = $_POST['c_'.$i];
}

for($i = 0; $i < $m; $i++){
  $m_array[$i] = explode( ' ', $_POST['m_'.$i] );
}



for($i = 0; $i < $m; $i++){
  $sum = 0;
	
	for($j = 0; $j < $n; $j++){
		$score = $c[$j] * $m_array[$i][$j] ;
    $sum = $sum + $score;
	}
  $result[$i] = round($sum);
		
}

sort($result);


for($i = 0; $i < $k; $i++){
	echo $result[$i];
	echo '<br>';
}



?>