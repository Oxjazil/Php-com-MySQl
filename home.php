<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de perfil</title>
    <style>
        body{
        font-family:Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(20,147,220),rgb(17,54,71));
        text-align: center;
        color: white;
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0,0,0,0.6);
        padding: 30px;
        border-radius: 15px;
    }
    a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        padding: 5px;
        
    }
    a:hover{
        background-color: dodgerblue;
        transition: 0.300ms;
    }
        </style>

</head>
<body>
    
<div class="box">
<a href="cadastro.php">Cadastre-se</a>
<a href="login.php">Faça Login</a>
</div>


</body>
</html>