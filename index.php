<?php

require_once "Conexao.php";
require_once "Professor.php";
require_once "ProfessorDAO.php";
require_once "Aluno.php";
require_once "AlunoDAO.php";

//$professor = new Professor("Cicero Tadeu", 200000, "Professor", "Noite");
// $professor->setId(3);

// $professorDAO = new ProfessorDAO();

// $professorDAO->create($professor);
// $professorDAO->delete($professor);


$aluno = new Aluno("Kallew", 2015313428, "Aluno", "Noite", 385.90);
// $aluno->setId(2);
$alunoDAO = new AlunoDAO();
$alunoDAO->create($aluno);


// $alunoDAO->delete($aluno);

echo "Cadastrado! </br>";