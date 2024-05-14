<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faculdade</title>
</head>
<body>
    <div class="container" >

        <div class="content">      
            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                <form method="post" action="scriptProfessor.php"> 
                    <h1>Cadastrar Professor</h1> 

                    <p>
                        <input id="nome_dis" name="nome_prof" required="required" type="text" placeholder="Professor" />
                    </p>
        
                    <p> 
                        <input id="salario" name="salario" required="required" type="text" placeholder="Salario"/> 
                    </p>
                    <p id="se">
                        <select title="Selecione A Disciplina" name="disc">
                            <option value="" disabled selected hidden>Disciplina</option>
                            <?php
                                require_once "Disciplina.php";
                                require_once "DisciplinaDAO.php";
                                require_once "Conexao.php";
                                
                                $disciplinaDAO = new DisciplinaDAO();
                                $disciplinas = $disciplinaDAO->read();
                                foreach ($disciplinas as $disciplina) {
                                    echo "<option value='$disciplina->nome'>$disciplina->nome</option>";
                                }
                            ?>
                    </p>
                    <p> 
                        <input type="submit" value="Cadastrar"/> 
                    </p>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>