<?php 

$file = fopen("sampleobjects.txt", "r");

$raw_text = fread($file,filesize("sampleobjects.txt"));

//foreach( $array as $key => $value ){
//    echo $key."\t=>\t".$value."\n";
	
	
foreach ($raw_text as $item) {
   $json =	json_encode($structure, true); 
}

print_r(htmlspecialchars($json));
echo "<pre>";
$converted_file = fopen("jsonconverted.txt", "w");
fwrite($converted_file, $json);

?>