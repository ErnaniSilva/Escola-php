<!DOCTYPE html>
<?php
include_once "conectar.php";
include_once "functions/function_listar.php";
?>
<html>
    <head>
        <meta charset="uft-8">
        <title>Listar Cursos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Lista de Cursos
            </div>
        </nav>
        <?php
        $dados = listar();
        $d = new ArrayIterator($dados);
        ?>

        <table class="table">
            <thead>
                <tr class="table-light">
                    <td class="table-light">ID</td>
                    <td class="table-light">Nome do Curso</td>
                    <td class="table-light">Carga Horária</td>
                    <td class="table-light">Deletar</td>
                    <td class="table-light">Editar</td>
                </tr>
            </thead>
            <?php while($d->valid()){ ?>
            <tbody>
                <tr>
                    <td><?php echo $d->current()->CoCurso?></td>
                    <td><?php echo $d->current()->NoCurso?></td>
                    <td><?php echo $d->current()->QtCargaHoraria?></td>
                    <td><a href="Deletar.php?id=<?php echo $d->current()->CoCurso;?>" class="btn btn-danger">X</a></td>
                    <td><a href="functions/forms_edicao.php?id=<?php echo $d->current()->CoCurso;?>" class="btn btn-secondary">Editar</a></td>
                </tr>
            <?php $d -> next();}?>
            </tbody>
        </table>
        <a href="Menu_curso.html" class="btn btn-warning"> Voltar</a>
    </body>
</html>