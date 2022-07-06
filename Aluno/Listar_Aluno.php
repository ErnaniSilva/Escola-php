<!DOCTYPE html>
<?php
include_once "conection.php";
include_once "functions/function_listar.php";
include_once "functions/function_deletar.php";
?>
<html>
  <head>
    <title>listar</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Lista Alunos
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
          <td class="table-light">Número do Curso</td>
          <td class="table-light">Editar</td>
          <td class="table-light">Deletar</td>
        </tr>
      </thead>

      <?php while($d->valid()){?>
        <tbody>
          <tr>
            <td><?php echo $d->current()->NuMatricula ?></td>
            <td><?php echo utf8_decode($d->current()->NoAluno) ?></td>
            <td><?php echo $d->current()->CoCurso ?></td>
            <td><a href="functions/forms_edicao?id=<?php echo $d->current()->NuMatricula;?>" class=" btn btn-secondary">Editar</a></td>
            <td><a href="Deletar.php?id=<?php echo $d->current()->NuMatricula; ?>" class="btn btn-danger">X</a></td>
          </tr>
          <?php $d -> next();}?> 
        </tbody>
    </table>
    <a href="Menu_aluno.html" class="btn btn-warning"> Voltar</a>
  </body>
</html>
