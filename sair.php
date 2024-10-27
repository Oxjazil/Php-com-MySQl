<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');/* Esse código tira o usuário da sessão sistema.php */
?>