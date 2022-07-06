<?php
include_once "conection.php";
include_once "functions/function_deletar.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    deletar($id);
}

mysqli_close($con);
?>