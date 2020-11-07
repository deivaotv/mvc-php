<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <form method="post" action="../app/controller/CadastrarEquipamentoController.php" id="form" name="form"class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Equipamento" required autofocus>
                <input class="form-control" type="text" id="tipo" name="tipo" placeholder="Tipo do Equipamento" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>