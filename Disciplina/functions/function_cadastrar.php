<!DOCTYPE html>
<?php
include_once "conectar.php";

$id = $_POST['id'];
$nome = utf8_decode($_POST['nome']);
$carga_horaria = $_POST['cargaHoraria'];
$obrigatorio = $_POST['obrigatoriedade'];
$turno = $_POST['turno'];


$sql = "INSERT INTO tddisciplina(CoDisciplina, NoDisciplina, QtCargaHoraria, InObrigatoria, Turno) VALUES('$id', '$nome', '$carga_horaria', '$obrigatorio', '$turno')";
$query = mysqli_query($con,$sql);

if($query){
    echo "<script>alert('Registro salvo com sucesso !!')</script>";
}else{
    echo "<script>alert('Erro ao salvar o registro')</script>";
}
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='../Cadastrar_disciplina.php';
    </script>