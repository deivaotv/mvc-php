<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "app/model/Equipamento.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "init.php";


class CadastrarEquipamentoController
{
    protected $mysqli;
    private $cadastro;

    public function __construct()
    {
        $this->conexao();
        $this->cadastro = new Equipamento;
        $this->incluir();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }


    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTipo($_POST['tipo']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "Registro incluído com sucesso!";
        }else{
            echo "Erro ao gravar registro!";
        }
    }
}
new CadastrarEquipamentoController();
