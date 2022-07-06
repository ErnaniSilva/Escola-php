<?php
include_once "conectar.php";
include_once "functions/function_listar.php";
?>
<html>
    <head>
        <title>Atualizar Disciplina</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Atualizar_disciplina.css">
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Lista de Disciplinas
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
                    <td class="table-light">Nome</td>
                    <td class="table-light">Carga Horária</td>
                    <td class="table-light">Obrigatoriedade</td>
                    <td class="table-light">Turno</td>
                    <td class="table-light">Editar</td>
                </tr>
            </thead>
            <?php while($d->valid()){?>
                <tbody>
                    <tr>
                        <td><?php echo $d->current()->CoDisciplina?></td>
                        <td><?php echo $d->current()->NoDisciplina?></td>
                        <td><?php echo $d->current()->QtCargaHoraria?></td>
                        <td><?php echo $d->current()->InObrigatoria?></td>
                        <td><?php echo $d->current()->Turno?></td>
                        <td><a class="btn btn-secondary" href="functions/forms_edicao.php?id=<?php echo $d->current()->CoDisciplina;?>">Editar</a></td>
                    </tr>
                    <?php $d->next(); } ?>
                </tbody>
        </table>
        <a href="Menu_disciplina.html" class="btn btn-warning">Voltar</a>
    </body>
</html>