<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf0-8">
        <title>Cadastrar Disciplina</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Cadastrar_disciplina.css">
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Cadastrar Aluno
            </div>
        </nav>
        <form action="functions/function_cadastrar.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome da Disciplina">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control" type="number" name="id" id="id" placeholder="ID">
                </div>
                <div class="col">
                    <input class="form-control" type="number" name="cargaHoraria" id="cargaHoraria" placeholder="Carga Horária do Curso">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-select" name="obrigatoriedade" id="obrigatoriedade">
                        <option selected>Obrigatoriedade</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="turno" id="turno">
                        <option selected>Turno</option>
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="btn btn-primary" type="submit" value="Salvar">
                    <input class="btn btn-warning" type="reset" value="Limpar">
                    <a class="btn btn-danger" href="Menu_disciplina.html">Voltar</a>
                </div>
            </div>
        </form>
    </body>
</html>