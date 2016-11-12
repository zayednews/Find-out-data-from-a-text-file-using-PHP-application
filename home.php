<?php
session_start();
$signal="";
$un="";

$signal=$_SESSION["flag"];
$un=$_SESSION["fla"];
//$f=$_SESSION["file"];


if($signal=="ok"){
?>
<h1>Home Demo</h1>
<?php
//echo "Welcome home : ".$_SESSION['uname'];
echo "Welcome ".$_SESSION["fla"]."<br/>";

/*$myfile = fopen($locs, "r") or die("Unable to open file!");
// read all lines until end-of-file
while(!feof($myfile)) {
	$line=fgets($myfile);
	echo  $line. "<br>";
}
fclose($myfile);*/
?>
<br/>

<a href="edit.php">Add DATA<br/></a>
<a href="logout.php">Log Out<br/></a>
<?php
}
else{
	header("Location:index.html");
}
?>
