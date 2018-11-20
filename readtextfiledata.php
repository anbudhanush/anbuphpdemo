<?php 

$file = fopen("thisistextfile.txt", "r");

$raw_text = fread($file,filesize("thisistextfile.txt"));

//echo $raw_text	
//foreach ($raw_text as $item) {
//}

//print_r(htmlspecialchars($json));
//var_dump ($item);
$converted_file = fopen("thisistextnewfile.txt", "w");
fwrite($converted_file, $raw_text);

?>