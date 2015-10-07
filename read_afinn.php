<?php 

$file = file_get_contents('./AFINN-111.txt', true);

$array = explode("\n", $file);
$i = 0;
foreach ($array as $c) {
	echo $c; 
	
}
exit;	
?>