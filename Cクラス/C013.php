<?php
//case1
$_POST['n'] = 4;
$_POST['m'] = 5;
$_POST['r_0'] = 101;
$_POST['r_1'] = 204;
$_POST['r_2'] = 301;
$_POST['r_3'] = 401;
$_POST['r_4'] = 501;



$n = $_POST['n'];
$m = $_POST['m'];

for( $i = 0; $i < $m; $i++ ){
	$r[$i] = $_POST['r_'.$i];

}

$res = array();

foreach( $r as $key => $value ){
	

	if( strpos( $value, strval($n) ) !== false  ){
		$res[] = $value;
	
	}

}

if( count( $res ) > 0 ){
	
	foreach( $res as $key => $value ){
		echo $value;
		echo '<br>';
		
	}
}else{
	echo 'none';
}



?>