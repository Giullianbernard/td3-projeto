Tde3 BackEnd

CREATE TABLE disciplina (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
curso VARCHAR(50),
turno VARCHAR(50),
id_professor INT,
id_aluno INT
);

CREATE TABLE faculdade2.aluno (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
matricula VARCHAR(100) NOT NULL,
cargo VARCHAR(50),
mensalidade FLOAT
);

CREATE TABLE faculdade2.professor (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
cargo VARCHAR(50) NOT NULL,
salario FLOAT
);

ALTER TABLE disciplina ADD FOREIGN KEY (id_professor) REFERENCES professor(id);

AlTER TABLE disciplina
ADD FOREIGN KEY (id_aluno) REFERENCES aluno(id);