<h1>District Name</h1>
<?php

$d=$_POST['area'];


$file = fopen("locs.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
	$line=fgets($file);
	
	$var=explode(":", $line);
	
	if(trim($var[0])==trim($d)){
	echo trim($var[1]);
	echo "<br>";
	//echo "zn";
	
	
	break;
}

	}
fclose($file);

?>
