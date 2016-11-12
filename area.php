<h1>Near By area</h1>
<?php

$d=$_POST['dis'];
//echo $d;


$file = fopen("locs.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
	$line=fgets($file);
	//echo $line;
	$var=explode(":", $line);
	//echo $var[0];
	if(trim($d)==trim($var[1])){
	echo trim($var[0]);
		echo "<br>";
	
	//header("Location:home.php");
	//break;
}
/*else{
	echo "No Data found";
	//header("Location:index.html");
}*/
	}
fclose($file);

?>