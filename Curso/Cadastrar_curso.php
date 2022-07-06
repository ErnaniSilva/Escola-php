<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Cadastrar_curso.css">
        <title>Cadastrar Curso</title>
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Cadastrar Aluno
            </div>
        </nav>
        <form  action="functions/function_cadastrar.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome do Curso" name="nome" id="nome">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <input type="numer" class="form-control" placeholder="ID" name="id">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="tempo" id="tempo" placeholder="Carga horária do Curso">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="reset" value="Limpar" class="btn btn-danger">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                        <a href="Menu_curso.html" class="btn btn-warning">Voltar</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>