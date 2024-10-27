<?php
   
   $dbHost = 'Localhost'; //127.0.0.1 se precisar
    $dbUsername = 'root';
    $dbPassword = 'Guarana22.'; // Substitua pela sua senha correta
    $dbName = 'banco_de_dados'; //banco_de_dados_formulário

    // Estabelecer a conexão com o banco de dados
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>
