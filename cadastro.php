<?php

    if(isset($_POST['submit'])){

    /*  print_r('Nome: '.$_POST['nome']);
      print_r(('<br>'));
      print_r('Email :'.$_POST['email']);
      print_r(('<br>'));
      print_r('Senha: '.$_POST['senha']);
      print_r(('<br>'));
      print_r('Telefone: '.$_POST['telefone']);
      print_r(('<br>'));
      print_r('Gênero: '.$_POST['genero']);
      print_r(('<br>'));
      print_r('Data_nascimento: '.$_POST['data_de_nascimento']);
      print_r(('<br>'));
      print_r('Cidade: '.$_POST['cidade']);
      print_r(('<br>'));
      print_r('Estado: '.$_POST['estado']);
      print_r(('<br>'));
      print_r($_POST['endereco']);
*/
   include_once('config.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
    $genero=$_POST['genero'];
    $data_de_nascimento=$_POST['data_de_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereço=$_POST['endereco'];

    $result =mysqli_query($conexao,"INSERT INTO usuários(nome,email,senha,telefone,genero,data_de_nascimento,cidade,estado,endereço) VALUES ('$nome','$email','$senha','$telefone','$genero','$data_de_nascimento','$cidade','$estado','$endereço')");
 
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

<form action="cadastro.php" method="post">

    <input name="nome" type="text" placeholder="Inserir nome:" id="nome" required>
    <input name="email" type="email" placeholder="Inserir email:" id="email" required>
    <input name="senha" type="password" placeholder="Inserir senha:" id="senha" required>
    <input name="repetirSenha" type="password" placeholder="Repetir senha:" id="repsenha" required>
    <input type="tel" name="telefone" placeholder="Telefone" required>    
    <input type="radio" name="genero" value="masculino"><label for="">Homem</label>
    <input type="radio" name="genero" value="feminino"><label for="">Mulher</label>

    <input type="date" name="data_de_nascimento" required>
    <input name="cidade" type="text" placeholder="Cidade" required>
    <input name="estado" type="text" placeholder="Estado" required>
    <input name="endereco" type="text" placeholder="Endereço" required>

    <button name="submit" type="submit">Cadastrar</button>
    <a href="login.php">faça login</a>
</form>

</body>
</html>
