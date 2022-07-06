<!DOCTYPE html>
<?php
include_once "conectar.php";

$login = utf8_decode($_POST['user']);
$senha = utf8_decode($_POST['senha']);

    $sql = "INSERT INTO tbusuario (TxLogin, TxSenha) VALUES ('$login', '$senha')";
    $query = mysqli_query($con,$sql);

    if($query){
        echo "<script>alert('Registro salvo com sucesso')</script>";
    }else{
        echo "<script>alert('Erro ao salvar o registro')</script>";
    } 
?>