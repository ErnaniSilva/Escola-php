<meta charset="utf-8"/>
<?php
function listar(){

    $servidor="localhost";
    $username="root";
    $password="";
    $banco="escola";

    $login = utf8_decode($_POST['user']);
    $senha = utf8_decode($_POST['senha']);

    $con = mysqli_connect($servidor, $username, $password, $banco);
    $query = mysqli_query($con, "SELECT * FROM tbusuario WHERE TxLogin = $login");


    if($query){
        echo "<script>alert('Login Correto!!')</script>";
    }else{
        echo "<script>alert('Erro no Login')</script>";
    }
}
?>

<script src="../../js/jquery-1.8.3.min.js"></script>
    <script>
            document.location='../../Menu_geral.html';
    </script>