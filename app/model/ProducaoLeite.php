<?php
class ProducaoLeite {
    private $id; 
    private $especie; 
    private $ultimaOrdenha; 
    private $tempLeite; 
    private $produtividade; 
    private $inseminada; 
    private $dataEsperadaParto; 
    private $secagemEsperada; 
    private $ruminacaoDia;


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
     * Get the value of especie
     */ 
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     *
     * @return  self
     */ 
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get the value of ultimaOrdenha
     */ 
    public function getUltimaOrdenha()
    {
        return $this->ultimaOrdenha;
    }

    /**
     * Set the value of ultimaOrdenha
     *
     * @return  self
     */ 
    public function setUltimaOrdenha($ultimaOrdenha)
    {
        $this->ultimaOrdenha = $ultimaOrdenha;

        return $this;
    }

    /**
     * Get the value of tempLeite
     */ 
    public function getTempLeite()
    {
        return $this->tempLeite;
    }

    /**
     * Set the value of tempLeite
     *
     * @return  self
     */ 
    public function setTempLeite($tempLeite)
    {
        $this->tempLeite = $tempLeite;

        return $this;
    }

    /**
     * Get the value of produtividade
     */ 
    public function getProdutividade()
    {
        return $this->produtividade;
    }

    /**
     * Set the value of produtividade
     *
     * @return  self
     */ 
    public function setProdutividade($produtividade)
    {
        $this->produtividade = $produtividade;

        return $this;
    }

    /**
     * Get the value of inseminada
     */ 
    public function getInseminada()
    {
        return $this->inseminada;
    }

    /**
     * Set the value of inseminada
     *
     * @return  self
     */ 
    public function setInseminada($inseminada)
    {
        $this->inseminada = $inseminada;

        return $this;
    }

    /**
     * Get the value of dataEsperadaParto
     */ 
    public function getDataEsperadaParto()
    {
        return $this->dataEsperadaParto;
    }

    /**
     * Set the value of dataEsperadaParto
     *
     * @return  self
     */ 
    public function setDataEsperadaParto($dataEsperadaParto)
    {
        $this->dataEsperadaParto = $dataEsperadaParto;

        return $this;
    }

    /**
     * Get the value of secagemEsperada
     */ 
    public function getSecagemEsperada()
    {
        return $this->secagemEsperada;
    }

    /**
     * Set the value of secagemEsperada
     *
     * @return  self
     */ 
    public function setSecagemEsperada($secagemEsperada)
    {
        $this->secagemEsperada = $secagemEsperada;

        return $this;
    }

    /**
     * Get the value of ruminacaoDia
     */ 
    public function getRuminacaoDia()
    {
        return $this->ruminacaoDia;
    }

    /**
     * Set the value of ruminacaoDia
     *
     * @return  self
     */ 
    public function setRuminacaoDia($ruminacaoDia)
    {
        $this->ruminacaoDia = $ruminacaoDia;

        return $this;
    }
}

?>