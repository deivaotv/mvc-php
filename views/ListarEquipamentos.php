<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "app/controller/ListarEquipamentoController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php new ListarEquipamentoController();  ?>
    </table>
</body>

</html>