<meta charset="utf-8"/>
<?php
function listar(){

    $servidor="localhost";
    $username="root";
    $password="";
    $banco="escola";

    $con = mysqli_connect($servidor, $username, $password, $banco);
    $query = mysqli_query($con, "SELECT * FROM tbcurso ORDER BY CoCurso ASC");


    $nomes = array();
    if(mysqli_num_rows($query)>0){
        while($dados = mysqli_fetch_object($query)){
            $nomes[] = $dados;
        }
        return $nomes;
    }
}

?>