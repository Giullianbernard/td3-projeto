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
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">      
            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                <form method="post" action="scriptDisciplina.php"> 
                    <h1>Cadastrar Disciplina</h1> 

                    <h4>Selecione o Curso</h4>
                    <p id="se">
                        <select title="Selecione o Curso" name="curso" id="curso">
                            <option value="" disabled selected hidden>Curso</option>
                            <option required value="Análise de Sistemas e Sistemas da Informação">Análise de Sistemas e Sistemas da Informação</option>
                    </p>
                    <p>
                        <input id="nome_dis" name="nome_dis" required="required" type="text" placeholder="Disciplina" />
                    </p>
        
                    <p> 
                        <input id="turno" name="turno" required="required" type="text" placeholder="Turno"/> 
                    </p>

                    <p> 
                        <input type="submit" value="Cadastrar"/> 
                    </p>
                </form>

                <?php
                    // echo "<form action='../../backend/script.php' method='get'>
                    // <input hidden name='id' value='$disciplina->id'>
                    // </input> Discplina"
                    // ."<button id='delButton' name'del' type='submit'>Deletar</button></p>
                    // </form>";
                ?>
            </div>
        </div>
    </div> 
</body>
</html>