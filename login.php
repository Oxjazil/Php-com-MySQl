<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{
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

        div {
            text-align: center; /* Centraliza o texto dentro do div */
        }

        form {
            background-color: rgba(0, 0, 0, 0.7); /* Fundo preto com transparência */
            border-radius: 10px; /* Bordas arredondadas */
            padding: 20px; /* Espaçamento interno */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra */
            width: 300px; /* Largura do formulário */
        }

        input {
            border-radius: 5px;
            background-color: #333;
            color: white;
            width: 100%; /* Largura total do input */
            margin-bottom: 10px; /* Margem inferior para espaçamento */
            height: 20px;
        }

        input::placeholder {
            color: white; /* Cor do texto de placeholder */
        }

        a {
            color: #ff5722; /* Cor dos links */
            text-decoration: none; /* Remove sublinhado */
            display: block; /* Faz com que o link ocupe toda a largura */
            margin-top: 10px; /* Margem superior dos links */
        }   

        button {
            background-color: #ff5722; /* Cor do botão */
            color: white; /* Cor do texto do botão */
            height: 40px; /* Altura do botão */
            cursor: pointer; /* Muda o cursor ao passar sobre o botão */
            border-radius: 10px;
            width: 100%; /* Largura total do botão */
            border: none; /* Remove a borda padrão */
            margin-top: 10px; /* Margem superior do botão */
        }

        button:hover {
            background-color: darkred; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>

<div>
    <h1>Login</h1>
    <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Insira nome:" required>
        <input type="password" name="senha" placeholder="Insira senha:" required>
        <button type="submit" name="submit">Enviar</button>
        <a href="cadastro.php">Cadastre-se</a>
    </form>
</div>

</body>
</html>
