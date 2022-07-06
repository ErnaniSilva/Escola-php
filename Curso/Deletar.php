<?php
include_once "conectar.php";
include_once "functions/function_deletar.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    deletar($id);
}
mysqli_close($con);
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='Listar_cursos.php';
    </script>