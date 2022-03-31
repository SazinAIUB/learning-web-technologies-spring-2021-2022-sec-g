<?php
include 'login.php';
$e_uname = "employee";
$e_password = "employee";

if(isset($_POST['login'])){
    $uname = $_POST[' uname '];
    $password = $_POST['password'];
    if ($uname == $e_uname and $password == $e_password)
    {
        session_start();
        $_SESSION['uname'] = $uname;
        header ('location: dashboard.php');
        $remember = $_POST['remember'];
        if (isset(_POST['remember'])) 
        {
            setcookie('uname',$uname, time()+36000);
            setcookie('password',$password, time()+36000);
        }
;
    }
    else 
    {
    echo "Invalid Credentials...<br> try again <a href='login.php'> ";
    }
}

else{
    header('location: login.php');
}
?>
