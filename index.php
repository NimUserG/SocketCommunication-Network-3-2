<?php
session_start(); //���� �ҷ�����

if(!isset($_SESSION['user_account'])) {
    header("Location:http://ftpidnk.dothome.co.kr/login.php")
}else{
    header("Location:http://ftpidnk.dothome.co.kr/main.php")
}
?>