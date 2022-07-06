<?php
include_once "conectar.php";

$id = $_GET['id'];
$nome = utf8_decode($_POST['nome']);
$cargaHoraria = $_POST['cargaHoraria'];

echo ("Id = $id");
$sql = "UPDATE tbcurso SET NoCurso = '$nome', QtCargaHoraria = '$cargaHoraria' WHERE CoCurso = '$id'; ";

$query = mysqli_query($con,$sql);

/*if($query){
    echo "<script>alert('Registro atualizado com sucesso !!')</script>";
}else{
    echo "<script>alert('Erro ao atualizar registro')</script>";
}*/
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='../Atualizar_curso.php';
    </script>