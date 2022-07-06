<?php
function deletar($id){

    $servidor="localhost";
    $username="root";
    $password="";
    $banco="escola";

    $con = $con = mysqli_connect($servidor, $username, $password, $banco);
    
    $sql = "DELETE FROM tbcurso WHERE CoCurso = '$id'";
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script> alert('Registro deletado com sucesso')</script>";
    }else{
        echo "<script> alert('Falha ao deletar o registro')</script>";
    }
}


?>