<?php

class Disciplina {
    private $id;
    private $nome;
    private $curso;
    private $id_aluno;
    private $id_professor;
    private $turno;

    public function __construct($nome, $curso, $turno) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->turno = $turno;
        $this->id_professor = "Sem Professor";
    }

    public function cadastrarAluno($id_aluno) {

    }

    public function cadastrarProfessor($id_professor) {
        
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getTurno() {
        return $this->turno;
    }

    public function setTurno($turno) {
        $this->turno = $turno;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of id_aluno
     */ 
    public function getId_aluno()
    {
        return $this->id_aluno;
    }

    /**
     * Set the value of id_aluno
     *
     * @return  self
     */ 
    public function setId_aluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;

        return $this;
    }

    /**
     * Get the value of id_professor
     */ 
    public function getId_professor()
    {
        return $this->id_professor;
    }

    /**
     * Set the value of id_professor
     *
     * @return  self
     */ 
    public function setId_professor($id_professor)
    {
        $this->id_professor = $id_professor;

        return $this;
    }
}