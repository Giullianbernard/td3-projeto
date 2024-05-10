<?php

require_once "Pessoa.php";

class Aluno extends Pessoa {
    private int $id;
    private $matricula;
    private $notas;
    private $mensalidade;
    private $disciplina;


    public function __construct($nome, $matricula, $cargo, $turno, $mensalidade) {
        $this->nome = $nome; 
        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->turno = $turno;
        $this->mensalidade = $mensalidade;
        $this->notas = [];
        $this->disciplina = [];
    }

    public function adicionarNota($nota) {
        array_push($this->notas, $nota);
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
}