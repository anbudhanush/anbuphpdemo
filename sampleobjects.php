<?php 

$file = fopen("sampleobjects.txt", "r");

$raw_text = fread($file,filesize("sampleobjects.txt"));

	
foreach ($raw_text as $item) {
   $json =	json_encode($structure, true); 
}

print_r(htmlspecialchars($json));
var_dump ($json);
$converted_file = fopen("jsonconverted.txt", "w");
fwrite($converted_file, $json);

?>