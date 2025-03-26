<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $login=$_POST['email'];
    $password=$_POST['password'];

    header('Location:../../public/home.html');
}
?>