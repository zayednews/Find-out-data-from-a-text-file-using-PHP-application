<h1>This are area which are near By this District</h1>
<?php

$d=$_POST['dis'];


$file = fopen("locs.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
	$line=fgets($file);
	
	$var=explode(":", $line);
	
	if(trim($d)==trim($var[1])){
	echo trim($var[0]);
		echo "<br>";
	
	
}

	}
fclose($file);

?>
