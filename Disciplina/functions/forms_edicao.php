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
        <title>Editar Disciplina</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/forms_edicao.css">
    </head>
    <body>
        <nav class="navbar" style="background-color:#2E8B57; color: white;">
            <div class="col fs-2 text-center">
                Editar Disciplina
            </div>
        </nav>
        <form action="function_atualizar.php?id=<?php echo $id ?>" method="post">
                <?php
                    $sql = mysqli_query($con,"SELECT * FROM tddisciplina WHERE CoDisciplina =$id");

                    while($resultado = mysqli_fetch_assoc($sql)){
                        $id = $resultado['CoDisciplina'];
                        $nome = $resultado['NoDisciplina'];
                        $cargaHoraria = $resultado['QtCargaHoraria'];
                        $obrigatoriedade = $resultado['InObrigatoria'];
                        $turno = $resultado['Turno'];
                ?>
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome: </label>
                        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo utf8_decode($nome) ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id"> ID: </label>
                        <input class="form-control" type="number" name="id" id="id" value="<?php echo($id) ?>">  
                    </div>
                    <div class="col">
                        <label for="cargaHoraria">Carga Horária</label>
                        <input class="form-control" type="number" name="cargaHoraria" ida="cargaHoraria" value="<?php echo ($cargaHoraria) ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="obrigatoriedade">Obrigatoriedade: </label>
                        <select class="form-select" name="obrigatoriedade" id="obrigatoriedade">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="turno">Turno: </label>
                        <select class="form-select" name="turno" id="turno">
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
                        <a class="btn btn-danger" href="../Atualizar_disciplina.php">Voltar</a>
                    </div>
                </div>
                    <?php } ?>
        </form>
    </body>
</html>