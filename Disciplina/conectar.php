<?php

$con = mysqli_connect("localhost", "root", "");
if(!$con){
    die("Erro: ".mysqli_error($con));
}
echo "<script> console.log ('Conexão estabelecidao com sucesso !!');</script>";


$db = mysqli_select_db($con, "escola");
if(!$db){
    die("Deu um erro aqui olha: ".mysqli_error($con));
}
echo "<script>console.log('Banco selecionado com sucesso !!');</script>";

?>