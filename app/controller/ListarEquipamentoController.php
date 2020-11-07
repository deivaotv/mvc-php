<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "app/model/Equipamento.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "init.php";


class ListarEquipamentoController
{
    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
        $this->listar();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    private function listar()
    {
        $result = $this->mysqli->query("SELECT * FROM equipamentos");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        foreach ($array as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td><button class='btn btn-warning' href='editar.php?id=".$value['nome']."'>Editar</button><button class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</button></td>";
            echo "</tr>";
        }
    }
}
