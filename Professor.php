<?php

require_once "Pessoa.php";

class Professor extends Pessoa{
    protected int $id; 
    protected $salario;
    private $disciplinas;

    public function __construct($nome, $salario, $cargo, $turno) {
        parent::__construct($nome, $cargo, $turno);
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->turno = $turno;
        $this->disciplinas = [];
    }

    public function cadastrarDisciplina(Disciplina $disciplina) {
        array_push($this->disciplinas, $disciplina);
    
      }

    public function calculaSalario(){ //calcula salário
        return $this->salario*1.5;
    
      }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
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