<?php

class Aluno{
    private int $id;
    private $nome;
    private $cargo;
    private $matricula;
    private $mensalidade;


    public function __construct($nome, $matricula, $cargo, $mensalidade) {
        $this->nome = $nome; 
        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->mensalidade = $mensalidade;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setMensalidade($mensalidade) {
        $this->mensalidade = $mensalidade;
    }

    public function getMensalidade() {
        return $this->mensalidade;
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
     * Get the value of cargo
     */ 
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     *
     * @return  self
     */ 
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }
}