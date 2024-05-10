<?php
    require_once "Conexao.php" ;
    require_once "Professor.php" ;

class ProfessorDAO {

    public function create(Professor $professor) {
        $sql = "INSERT INTO professor (nome, salario, cargo, turno) VALUES (?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $professor->getNome());
        $stmt->bindValue(2, $professor->getSalario());
        $stmt->bindValue(3, $professor->getCargo());
        $stmt->bindValue(4, $professor->getTurno());
        $stmt->execute();
    }

    public function read(){
        $sql = "SELECT * FROM professor";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(Professor $professor) {
        $sql = "UPDATE professor SET nome = ?, salario = ?, cargo = ?, turno = ? WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $professor->getNome());
        $stmt->bindValue(2, $professor->getSalario());
        $stmt->bindValue(3, $professor->getCargo());
        $stmt->bindValue(4, $professor->getId());

        $stmt->execute();
    
    }

    public function delete(Professor $professor) {
        $sql = "DELETE FROM professor WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $professor->getId());
        $stmt->execute();
    }

}