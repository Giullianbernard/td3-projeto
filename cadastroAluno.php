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
                <form method="post" action="scriptAluno.php"> 
                    <h1>Cadastrar Aluno</h1> 

                    <p>
                        <input id="nome" name="nome" required="required" type="text" placeholder="Aluno" />
                    </p>
        
                    <p> 
                        <input id="mat" name="mat" required="required" type="text" placeholder="Matricula"/> 
                    </p>

                    <p> 
                        <input id="mens" name="mens" required="required" type="text" placeholder="Mensalidade"/> 
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