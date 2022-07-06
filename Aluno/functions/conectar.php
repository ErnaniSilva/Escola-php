<!DOCTYPE html>
<?php

    $servidor="localhost";
    $username="root";
    $password="";
    $banco="escola";

    
    $con = mysqli_connect($servidor, $username, $password, $banco);

   if (mysqli_connect_errno($con)) {
     
        echo "Não foi possível conectar ao banco de {$bdBanco}";
        die();
    }