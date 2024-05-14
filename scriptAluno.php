<?php

require_once "Aluno.php";
require_once "AlunoDAO.php";
require_once "Conexao.php";

$alunoDAO = new AlunoDAO();
$aluno = new Aluno($_POST['nome'], $_POST['mat'], 'Aluno', $_POST['mens']);
$alunoDAO->create($aluno);

$alunos = $alunoDAO->read();

echo "
<table style='border:1px solid black; width:50%'>
    <tr>
        <th style='border:1px solid black'>Aluno</th>
        <th style='border:1px solid black'>Matricula</th>
        <th style='border:1px solid black'>Cargo</th>
        <th style='border:1px solid black'>Mensalidade</th>
    </tr>";
foreach ($alunos as $aluno) {
    echo "
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>$aluno->nome</td>
            <td style='border:1px solid black'>$aluno->matricula</td>
            <td style='border:1px solid black'>$aluno->cargo</td>
            <td style='border:1px solid black'>R$$aluno->mensalidade</td>
        </tr>";
}
echo "</table>";