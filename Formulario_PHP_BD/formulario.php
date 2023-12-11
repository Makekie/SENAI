<?php

if (isset($_POST["submit"]))
{
    include_once("config.php");

    $nome = $_POST['nomecompleto'];
    $dNascimento = $_POST['datanascimento'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $empresa = $_POST['ultimaEmpresa'];
    $experiencia = $_POST['tempoExperiencia'];

    $dados = mysqli_query($conexao, "INSERT INTO pessoa(Nome,Data_de_nascimento,rg,cpf,email,telefone,uexperiencia,experiencia) VALUES('$nome', '$dNascimento', '$rg', '$cpf', '$email', '$telefone', '$empresa', '$experiencia')");
};

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleDois.css">
    <title>Cadastro forms</title>
</head>
<body>
    <main>
        <form action="formulario.php" method="post">
            <div class="container">
                <div class="grid-container">
                    <div class="grid-item">
                        <label for="pNome">Nome:</label>
                    </div>
                    <div class="grid-item">
                        <label for="dNasc">Data de Nascimento:</label>
                    </div>
                    <div class="grid-item">
                        <label for="registroGeral">RG:</label>
                    </div>
                    <div class="grid-item">
                        <label for="cpf">CPF:</label>
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="Nome completo" id="nome completo" name="nomecompleto">
                    </div>
                    <div class="grid-item">
                        <input type="date" placeholder="dd/mm/aaaa" id="data nascimento" name="datanascimento">
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="12345641" id="rg" name="rg" onkeypress="return event.charCode>=48 && event.charCode<=57">
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="12345678912" id="cpf" name="cpf" maxlength="11" onkeypress="return event.charCode>=48 && event.charCode<=57">
                    </div>
                    <div class="grid-item">
                        <label for="contatoEmail">Email:</label>
                    </div>
                    <div class="grid-item">
                        <label for="contatoTelefone">Telefone:</label>
                    </div>
                    <div class="grid-item">
                        <label for="empresa">Última experiência:</label>
                    </div>
                    <div class="grid-item">
                        <label for="duracaoExperiencia">Duração da experiência:</label>
                    </div>
                    <div class="grid-item">
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="(00)123456789" id="telefone" name="telefone" maxlength="11" onkeypress="return event.charCode>=48 && event.charCode<=57">
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="Nome da empresa" id="ultimaEmpresa" name="ultimaEmpresa">
                    </div>
                    <div class="grid-item">
                        <input type="text" placeholder="Anos na empresa" id="tempoExperiencia" name="tempoExperiencia" onkeypress="return event.charCode>=48 && event.charCode<=57">
                    </div>
                    <div class="centro"><input type="submit" value="CADASTRAR" id="enviobd" class="botao" name="submit"></div>
                </div>
            </div>
        </form>
</main>
</body>
</html