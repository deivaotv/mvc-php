<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <Title>Controle de Ordenha</Title>
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body class="app">
    <div class="form">
        <form>
            <h2>Controle de Ordenha</h2>
            <hr/>
            <p for="animal"> Cód.Animal:</p>
            <input type="text" name=nome id="animal">

            <p>Profissional que fez a ordenha:</p>
            <select class="Profissional" id="Profissional">
                <option selected>Profissional...</option>
                <option value="1">Carlos</option>
                <option value="2">Antonio</option>
                <option value="3">José</option>
            </select>

            <p>Horário:</p>
            <input type="datetime-local" name="funcionário">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
    

</body>