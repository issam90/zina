<?php
$fp1=fopen("count","r");
if ($fp1){
	$count_old = fread($fp1, 1024);
	fclose($fp1);
}

$fp=fopen("count","w");
if ($fp){
	$count = $count_old + '1';
	fwrite($fp,$count);
	fclose($fp);
}

echo $count;
?>