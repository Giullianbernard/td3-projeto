<?php

abstract class Pessoa{
  public $nome;
  public $cargo;
  public $turno;

  public function __construct($nome, $cargo, $turno){
    $this->nome = $nome;
    $this->cargo = $cargo;
    $this->turno = $turno;
  }

  public function setCargo($cargo){
    $this->cargo = $cargo;
  }

  public function getCargo(){
    return $this->cargo;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }
  
  public function getNome() {
    return $this->nome;
  }

  public function getTurno() {
    return $this->turno;
  }

  public function setTurno($turno) {
    $this->turno = $turno;
  }
}