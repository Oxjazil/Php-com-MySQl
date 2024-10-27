<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereço = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuários(nome, email, senha, telefone, genero, data_de_nascimento, cidade, estado, endereço) VALUES ('$nome', '$email', '$senha', '$telefone', '$genero', '$data_de_nascimento', '$cidade', '$estado', '$endereço')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        h3{
            margin-top: 5px;
            margin-bottom: 10px;
            color: black;
        }
        body {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 100vh; /* Altura da viewport */
            margin: 0; /* Remove margem padrão */
            background-color: #f0f0f0; /* Cor de fundo da página */
        }
        
        form {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco transparente */
            border-radius: 10px; /* Bordas arredondadas */
            height: 300; /* Espaçamento interno */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra */
            width: 300px; /* Largura do formulário */
            background-color: rgba(0, 0, 0, 0.7);
        }
input{
    border-radius: 5px;
    background-color: #333;
    color: white;
    width: 200px;
    margin-bottom: 2px;
    position: relative;
}
input::placeholder {
            color: white; /* Cor do texto de placeholder */
        }

        a {
            color: #ff5722; /* Cor dos links */
            text-decoration: none; /* Remove sublinhado */
            margin-top: 10px; /* Margem superior dos links */
            margin-right: 10px; /* Margem inferior dos links */
        }   

        button {
            background-color: #ff5722; /* Cor do botão */
            color: white; /* Cor do texto do botão */
            height: 40px; /* Altura do botão */
            cursor: pointer; /* Muda o cursor ao passar sobre o botão */
            border-radius: 10px;
        }
        button:hover{
            background-color: darkred;
        }

        .radio_input{
            width: 20px;
        }
    </style>
</head>
<body>
<form action="cadastro.php" method="post">
<h3>Cadastre-se</h3>
    <input name="nome" type="text" placeholder="Inserir nome:" id="nome" required>
    <input name="email" type="email" placeholder="Inserir email:" id="email" required>
    <input name="senha" type="password" placeholder="Inserir senha:" id="senha" required>
    <input name="repetirSenha" type="password" placeholder="Repetir senha:" id="repsenha" required>
    <input type="tel" name="telefone" placeholder="Telefone" required>
    <br>
    <input type="radio" name="genero"class="radio_input"  value="masculino"><label for="">Homem</label>
    <input type="radio" name="genero" class="radio_input" value="feminino"><label for="">Mulher</label>
    <br>
    <input type="date" name="data_de_nascimento" required>
    <br>
    <input name="cidade" type="text" placeholder="Cidade" required>
    <input name="estado" type="text" placeholder="Estado" required>
    <input name="endereco" type="text" placeholder="Endereço" required>
    <br>
    <button name="submit" type="submit">Cadastrar</button>
    <br>
    <a href="login.php">faça login</a><a href="home.php">Home</a>
</form>

</body>
</html>
