<?php
    require_once "Conexao.php" ;
    require_once "Aluno.php" ;

class AlunoDAO {

    public function create(Aluno $aluno) {
        $sql = "INSERT INTO aluno (nome, matricula, cargo, turno, mensalidade) VALUES (?, ?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aluno->getNome());
        $stmt->bindValue(2, $aluno->getMatricula());
        $stmt->bindValue(3, $aluno->getCargo());
        $stmt->bindValue(4, $aluno->getTurno());
        $stmt->bindValue(5, $aluno->getMensalidade());
        $stmt->execute();
    }

    public function read(){
        $sql = "SELECT * FROM aluno";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(Aluno $aluno) {
        $sql = "UPDATE aluno SET nome = ?, matricula = ?, cargo = ?, turno = ?, mensalidade = ? WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aluno->getNome());
        $stmt->bindValue(2, $aluno->getMatricula());
        $stmt->bindValue(3, $aluno->getCargo());
        $stmt->bindValue(3, $aluno->getTurno());
        $stmt->bindValue(3, $aluno->getMensalidade());
        $stmt->bindValue(4, $aluno->getId());

        $stmt->execute();
    
    }

    public function delete(Aluno $aluno) {
        $sql = "DELETE FROM aluno WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aluno->getId());
        $stmt->execute();
    }

}