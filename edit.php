<?php

    if(!empty($_GET['id'])){

   include_once('config.php');

    $id=$_GET['id'];
    $sqlSelect="SELECT * FROM usuários WHERE id='$id'";
    $result = $conexao->query($sqlSelect);

if($result->num_rows>0){
    while($user_data=mysqli_fetch_assoc($result)){
    $nome=$user_data['nome'];
    $email=$user_data['email'];
    $senha=$user_data['senha'];
    $telefone=$user_data['telefone'];
    $genero=$user_data['genero'];
    $data_de_nascimento=$user_data['data_de_nascimento'];
    $cidade=$user_data['cidade'];
    $estado=$user_data['estado'];
    $endereco=$user_data['endereço'];
    }
    print_r($nome);
}
else{
    header('sistema.php');
}

    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        
    </style>
</head>
<body>

<form action="salvarEdit.php" method="post">

    <input name="nome" type="text" placeholder="Inserir nome:" value="<?php echo $nome?>" id="nome" required>
    <input name="email" type="email" placeholder="Inserir email:" value="<?php echo $email ?>" id="email" required>
    <input name="senha" type="password" placeholder="Inserir senha:" value="<?php echo $senha ?>" id="senha" required>
    <input type="tel" name="telefone" placeholder="Telefone" value="<?php echo $telefone ?>" required>    
    <br>
    <input type="radio" name="genero" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : '';?> required>
    <label for="masculino">Homem</label>
    <input type="radio" name="genero" value="feminino" <?php echo ($genero=='feminino') ? 'checked' : ''?>required>
    <label for="feminino">Mulher</label>
    <input type="date" name="data_de_nascimento" value="<?php echo $data_de_nascimento ?>"  required>
    <input name="cidade" type="text" placeholder="Cidade" value="<?php echo $cidade ?>" required>
    <input name="estado" type="text" placeholder="Estado" value="<?php echo $estado ?>" required>
    <input name="endereco" type="text" placeholder="Endereço" value="<?php echo $endereco ?>" required>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button name="update" id="update" type="submit">Atualizar</button>
    <a href="edit.php">Voltar</a>
</form>

</body>
</html>
