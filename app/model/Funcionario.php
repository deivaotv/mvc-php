<?php

Class Funcionario {
    private $id; 
    private $nome; 
    private $CPF; 
    private $salários;


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
     * Get the value of CPF
     */ 
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Set the value of CPF
     *
     * @return  self
     */ 
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    /**
     * Get the value of salários
     */ 
    public function getSalários()
    {
        return $this->salários;
    }

    /**
     * Set the value of salários
     *
     * @return  self
     */ 
    public function setSalários($salários)
    {
        $this->salários = $salários;

        return $this;
    }
}