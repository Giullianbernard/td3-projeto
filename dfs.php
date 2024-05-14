<?php
require_once "Aluno.php";
require_once "AlunoDAO.php";
require_once "Conexao.php";


$aluno = new Aluno('teste', '123', 'aluno', 258);
$alunoDAO = new AlunoDAO();
$alunoDAO->create($aluno);