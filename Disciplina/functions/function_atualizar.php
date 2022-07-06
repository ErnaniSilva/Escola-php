<?php
include_once "conectar.php";

$id = $_GET['id'];
$nome = utf8_decode($_POST['nome']);
$cargaHoraria = $_POST['cargaHoraria'];
$obrigatoriedade = $_POST['obrigatoriedade'];
$turno = $_POST['turno'];

echo ("Id = $id");
$sql = "UPDATE tddisciplina SET NoDisciplina = '$nome', QtCargaHoraria = '$cargaHoraria', InObrigatoria = '$obrigatoriedade', Turno = '$turno' WHERE CoDisciplina = '$id'; ";

$query = mysqli_query($con,$sql);

if($query){
    echo "<script>alert('Registro atualizado com sucesso !!')</script>";
}else{
    echo "<script>alert('Erro ao atualizar registro')</script>";
}
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='../Atualizar_disciplina.php';
    </script>