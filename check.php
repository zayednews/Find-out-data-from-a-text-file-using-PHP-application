<h1>It's server's area</h1>
<?php
session_start();


$fl=0;

$u=$_POST['uname'];
$p=$_POST['pass'];
//echo $u." ".$p;

$file = fopen("id.txt", "r") or die("Unable to open file!");

while(!feof($file)) {
	$line=fgets($file);
	//echo  $line. "<br>";
	$var=explode(" ", $line);
	
	
	if($u==trim($var[0]) && $p==trim($var[1])){
	echo "Welcome ".$u;
	$_SESSION["flag"]="ok";
	$_SESSION["fla"]=$u;
	$fl=1;
	header("Location:home.php");
	break;
}
else{
	echo "I can't recognize you";
	header("Location:index.html");
}
	}
fclose($file);

?>