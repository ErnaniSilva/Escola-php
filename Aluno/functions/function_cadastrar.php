<!DOCTYPE html>
<?php
include_once "conectar.php";


$id = $_POST['id'];
$nome = utf8_decode($_POST['Nome']);
$curso = $_POST['NumeroCurso'];

    $sql = "INSERT INTO tbaluno (NuMatricula, NoAluno, CoCurso) VALUES ('$id', '$nome', '$curso')";
    $query = mysqli_query($con,$sql);

    if($query){
        echo "<script>alert('Registro salvo com sucesso')</script>";
    }else{
        echo "<script>alert('Erro ao salvar o registro')</script>";
    } 
?>