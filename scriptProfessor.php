<?php

require_once "Professor.php";
require_once "ProfessorDAO.php";
require_once "Disciplina.php";
require_once "DisciplinaDAO.php";
require_once "Conexao.php";

$professorDAO = new ProfessorDAO();
$professor = new Professor($_POST['nome_prof'], $_POST['salario'], 'Professor');
$professorDAO->create($professor);

$professores = $professorDAO->read();

if (isset($_POST['disc'])) {
    $disciplinaDAO = new DisciplinaDAO();
    $disciplina = new Disciplina('', '', '');
    $disciplina->setId_professor(end($professores)->id);

    $sql = "UPDATE disciplina SET id_professor = ? WHERE nome = ?";
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $disciplina->getId_professor());
    $stmt->bindValue(2, $_POST['disc']);
    $stmt->execute();
}

echo "
<table style='border:1px solid black; width:50%'>
    <tr>
        <th style='border:1px solid black'>Professor</th>
        <th style='border:1px solid black'>Salario</th>
        <th style='border:1px solid black'>Cargo</th>
    </tr>";
foreach ($professores as $professor) {
    echo "
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>$professor->nome</td>
            <td style='border:1px solid black'>$professor->salario</td>
            <td style='border:1px solid black'>$professor->cargo</td>
        </tr>";
}
echo "</table>";