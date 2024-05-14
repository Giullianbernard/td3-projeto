<?php
    require_once "Conexao.php" ;
    require_once "Disciplina.php" ;

class DisciplinaDAO {

    public function create(Disciplina $disciplina) {
        $sql = "INSERT INTO disciplina (nome, curso, turno) VALUES (?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $disciplina->getNome());
        $stmt->bindValue(2, $disciplina->getCurso());
        $stmt->bindValue(3, $disciplina->getTurno());
        $stmt->execute();
    }

    public function read(){
        $sql = "SELECT * FROM disciplina";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(Professor $professor) {
        $sql = "UPDATE professor SET nome = ?, salario = ?, cargo = ? WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $professor->getNome());
        $stmt->bindValue(2, $professor->getSalario());
        $stmt->bindValue(3, $professor->getCargo());

        $stmt->execute();
    }

    public function delete(Professor $professor) {
        $sql = "DELETE FROM professor WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $professor->getId());
        $stmt->execute();
    }

}