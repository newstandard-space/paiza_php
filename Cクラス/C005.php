<?php



$_POST['count'] = 4;
$_POST['0'] = '192.168.0,12';
$_POST['1'] = '192.400.1.10.1000...';
$_POST['2'] = '0..33.444...';
$_POST['3'] = '1.2.3.4';

$count = $_POST['count'];

for( $i=0; $i<$count; $i++ ){
	$array[$i] = $_POST[$i];

}

foreach( $array as $key => $value ){
	$str_array = explode( '.', $value );
	$count = count( $str_array );
  $flg = 0;
  echo $count.'<br>';
  echo $str_array[0].'<br>';
  echo $str_array[1].'<br>';
  echo $str_array[2].'<br>';

	if( $count == 3 ){

		foreach( $str_array as $ky => $val ){

			if(  $val >= 0 && $val <= 255 ){

				$flg = 1;
			}else{
				$flg = 0;
			}

		}

	}else{

		$flg = 0;

	}

	if( $flg == 1 ){
		echo 'true';

	}elseif( $flg == 0 ){
		echo 'false';
	}
}




?>