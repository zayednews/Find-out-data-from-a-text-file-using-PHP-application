<h1>District Name</h1>
<?php

$d=$_POST['area'];
//echo $d;


$file = fopen("locs.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
	$line=fgets($file);
	//echo $line;
	$var=explode(":", $line);
	//echo $var[0];
	//echo $d;
	if(trim($var[0])==trim($d)){
	echo trim($var[1]);
	echo "<br>";
	//echo "zn";
	
	//header("Location:home.php");
	break;
}
/*else{
	echo "No Data found";
	//header("Location:index.html");
}*/
	}
fclose($file);

?>