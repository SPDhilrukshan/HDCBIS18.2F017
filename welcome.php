<?php
if(isset($_SESSION["userName"]) && time()-$_SESSION["lat"]<=10000)
{$_SESSION["lat"]=time();
session_start();
echo "Hello, ".$_SESSION["userName"]."<br />";
header("Location:Login.php");
}
?>