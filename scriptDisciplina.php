<?php

require_once "Disciplina.php";
require_once "DisciplinaDAO.php";
require_once "Conexao.php";

$disciplinaDAO = new DisciplinaDAO();
$disciplina = new Disciplina($_POST['nome_dis'], $_POST['curso'], $_POST['turno']);
$disciplinaDAO->create($disciplina);

$disciplinas = $disciplinaDAO->read();

echo "
<table style='border:1px solid black; width:50%'>
    <tr>
        <th style='border:1px solid black'>Disciplina</th>
        <th style='border:1px solid black'>Curso</th>
        <th style='border:1px solid black'>Turno</th>
    </tr>";
foreach ($disciplinas as $disciplina) {
    echo "
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>$disciplina->nome</td>
            <td style='border:1px solid black'>$disciplina->curso</td>
            <td style='border:1px solid black'>$disciplina->turno</td>
        </tr>";
}
echo "</table>";