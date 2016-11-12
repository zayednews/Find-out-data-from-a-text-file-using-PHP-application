<?php
session_start();
$_SESSION['flag']="";
session_destroy();
// it will erase all data save for this session
header("Location:index.html");
?>
