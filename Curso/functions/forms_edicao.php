<?php
include_once "conectar.php";
include_once "function_listar.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    //echo ("O ID $id existe ");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Curso</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/forms_edicao.css">
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Editar Aluno
            </div>
        </nav>
        <form action="function_atualizar.php?id=<?php echo $id ?>" method="post">
            <?php
                $sql = mysqli_query($con,"SELECT * FROM tbcurso WHERE CoCurso =$id");

                while($resultado = mysqli_fetch_assoc($sql)){
                    $id = $resultado['CoCurso'];
                    $nome = $resultado['NoCurso'];
                    $cargaHoraria = $resultado['QtCargaHoraria'];
            ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome: </label>
                        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo utf8_decode($nome) ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id"> ID: </label>
                        <input class="form-control" type="number" name="id" value="<?php echo($id) ?>">
                    </div>
                    <div class="col">
                        <label for="tempo">Carga Horária</label>
                        <input class="form-control" type="number" name="cargaHoraria" id="tempo" value="<?php echo ($cargaHoraria) ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a href="../Atualizar_curso.php" class="btn btn-warning">Voltar</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </form>
    </body>
</html>