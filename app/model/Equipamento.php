<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . "fazenda/" . "init.php";

class Equipamento
{
    private $id;
    private $nome;
    private $tipo;
    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function setEquipamento($nome,$tipo){
        $stmt = $this->mysqli->prepare("INSERT INTO equipamentos (`nome`,`tipo`) VALUES (?,?)");
        $stmt->bind_param("ss",$nome,$tipo);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function incluir(){
        return $this->setEquipamento($this->getNome(),$this->getTipo());
    }
}
