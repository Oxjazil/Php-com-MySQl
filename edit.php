<?php
if(!empty($_GET['id'])){
    include_once('config.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuários WHERE id='$id'";
    $result = $conexao->query($sqlSelect);

    // Verifique se a consulta teve sucesso e retornou resultados
    if($result && $result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero']; // Certifique-se de que essa variável existe
            $data_de_nascimento = $user_data['data_de_nascimento'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereço'];
        }
    } else {
        // Se não houver resultados ou erro na consulta, redirecione
        header('Location: sistema.php');
        exit();
    }
} else {
    // Se não houver ID na URL, redirecione
    header('Location: sistema.php');
    exit();
}

// Define valores padrão para evitar "undefined variable"
$nome = isset($nome) ? $nome : '';
$email = isset($email) ? $email : '';
$senha = isset($senha) ? $senha : '';
$telefone = isset($telefone) ? $telefone : '';
$genero = isset($genero) ? $genero : ''; // Garante que $genero tenha um valor
$data_de_nascimento = isset($data_de_nascimento) ? $data_de_nascimento : '';
$cidade = isset($cidade) ? $cidade : '';
$estado = isset($estado) ? $estado : '';
$endereco = isset($endereco) ? $endereco : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <style>
        h3 {
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
            padding: 20px; /* Espaçamento interno */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra */
            width: 300px; /* Largura do formulário */
            background-color: rgba(0, 0, 0, 0.7);
        }
        input {
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
        button:hover {
            background-color: darkred;
        }
        .radio_input {
            width: 20px;
        }
    </style>
</head>
<body>

<form action="salvarEdit.php" method="post">
    <h3>Atualizar</h3>
    <input name="nome" type="text" placeholder="Inserir nome:" value="<?php echo htmlspecialchars($nome); ?>" id="nome" required>
    <input name="email" type="email" placeholder="Inserir email:" value="<?php echo htmlspecialchars($email); ?>" id="email" required>
    <input name="senha" type="password" placeholder="Inserir senha:" value="<?php echo htmlspecialchars($senha); ?>" id="senha" required>
    <input type="tel" name="telefone" placeholder="Telefone" value="<?php echo htmlspecialchars($telefone); ?>" required>    
    <br>
    <input type="radio" name="genero" class="radio_input" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : ''; ?> required>
    <label for="masculino">Homem</label>
    <input type="radio" name="genero" class="radio_input" value="feminino" <?php echo ($genero == 'feminino') ? 'checked' : ''; ?> required>
    <label for="feminino">Mulher</label>
    <input type="date" name="data_de_nascimento" value="<?php echo htmlspecialchars($data_de_nascimento); ?>" required>
    <input name="cidade" type="text" placeholder="Cidade" value="<?php echo htmlspecialchars($cidade); ?>" required>
    <input name="estado" type="text" placeholder="Estado" value="<?php echo htmlspecialchars($estado); ?>" required>
    <input name="endereco" type="text" placeholder="Endereço" value="<?php echo htmlspecialchars($endereco); ?>" required>
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    <button name="update" id="update" type="submit">Atualizar</button>
    <a href="sistema.php">Voltar</a>   
</form>

</body>
</html>
