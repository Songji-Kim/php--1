<?php

session_start();
$sid = session_id();
echo $sid;

if(
    !isset($_SESSION["chk_ssid"])||
    $_SESSION["chk_ssid"] != session_id()
){
    echo "LOGIN ERROR";
    exit();
}

?>