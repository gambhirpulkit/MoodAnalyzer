<?php 

$file = file_get_contents('./AFINN-111.txt', true);

$array = explode("\n", $file);

$arr_len = count($array);

for($i=0; $i<$arr_len; $i++) {
	
	$str = preg_split('/[\t]/', $array[$i]);

	$word = $str[0];
	$rating = $str[1];
	print_r($str); 
}

?>