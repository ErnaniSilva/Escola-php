<?php
include_once "conectar.php";

$id = $_GET['id'];
$nome = utf8_decode($_POST['nome']);
$curso = $_POST['curso'];

echo ("Id = $id");
$sql = "UPDATE tbaluno SET NoAluno = '$nome', CoCurso = '$curso' WHERE NuMatricula = '$id'; ";

$query = mysqli_query($con,$sql);

/*if($query){
    echo "<script>alert('Registro atualizado com sucesso !!')</script>";
}else{
    echo "<script>alert('Erro ao atualizar registro')</script>";
}*/
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='../Atualizar.php';
    </script>