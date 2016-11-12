<?php

// apend the new data here
$myString=$_POST['code'];

$file=fopen('locs.txt','a');

if(file_exists("locs.txt")){
	fwrite($file,$myString."\r\n");
	header("Location:home.php");
}
else{
	echo "File does not exist";
}

?>
