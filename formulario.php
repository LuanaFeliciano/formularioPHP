<?php
include_once("bd.php");

    if(isset($_POST["submit"]))
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["sexo"];
        $data_nasc = $_POST["data_nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        mysqli_query($conexao,"INSERT INTO cliente(nome,email,telefone,sexo,nascimento,cidade,estado,endereco) 
        VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <div>
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div>
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Nome completo</label>
                </div>
                <br><br>
                <div>
                    <input type="text" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <br><br>
                <div>
                    <input type="tel" name="telefone" id="telefone" required>
                    <label for="telefone">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div>
                    <input type="text" name="cidade" id="cidade" required>
                    <label for="cidade">Cidade</label>
                </div>
                <br><br>
                <div>
                    <input type="text" name="estado" id="estado" required>
                    <label for="estado">Estado</label>
                </div>
                <br><br>
                <div>
                    <input type="text" name="endereco" id="endereco" required>
                    <label for="endereco">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>