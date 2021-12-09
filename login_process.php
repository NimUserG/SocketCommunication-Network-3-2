<?php
inclued "../lib/dbconnect.php"

function alert_fun($msg){
    echo("<script>
    alert('$msg');
    history.back();
    </script>
    exit;")
}

$useremail=$_POST["uemail"];
$password=$_POST["upwd"];

function validateUser($useremail, $password){
    $query="select * from user wehre userid='$useremail'";
    $resultmysql_query($dbconnect,$query) or die("$query error".mysqli_error($dbconnect));
    $rows=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);

    if(!$rows) return 1;
    if($row["upwd"] != $password) return 2;
    return 0;
}

$pass = validateUser($_POST['email'], $_POST['password']);

if($pass == 0){
    //로그인 성공
    session_start();
    $_SESSION['user_account'] = $pass;
}elseif($pass == 1){
    //계정 없음
    alert_fun("Account not found. Please check your email.");
}elseif($pass == 2){
    //패스워드 오류
    alert_fun("Password not correct. please check your Password.");
}
?>