<?php
function dbconnect(){
    $dbconnect=mysqli_connect("ftpidnk.dothome.co.kr","ftpidnk","ftppwdnk!1","ftpidnk");
    if(!$dbconnect) die ("DB connection failed : ".mysqli_connect_errno().", ".mysqli_connect_error());
    return $dbconnect;
}
$dbconnect=dbconnect();
?>