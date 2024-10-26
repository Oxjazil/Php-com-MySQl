<?php
session_start();
include_once('config.php');
// Verifica se o usuário está logado
if ((!isset($_SESSION['email']) == true) || (!isset($_SESSION['senha']) == true)) {
    // Se não estiver logado, redireciona para a página de login
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email']; // Armazena o email do usuário logado
if(!empty($_GET['search'])){
    $data=$_GET['search'];
    $sql="SELECT * FROM usuários WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
}
else{
    $sql = "SELECT * FROM usuários ORDER BY id DESC";
}



$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div>
        <input type="search" placeholder="Pesquisar:" name="pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
    </svg>
</button>

    </div>
    
    <h1>Bem-vindo ao sistema.php</h1>
    <div class="borda">
        <table class="table">
            <style>
                .table {
                    font-size: 12px;
                    text-size-adjust: 50px;
                    border-collapse: collapse;
                    /* Garante que as bordas estejam colapsadas */
                    border-spacing: 0;
                    /* Remove o espaçamento entre as células */
                }

                .table th,
                .table td {
                    border: 1px solid black;
                    /* Borda interna das células */
                    margin: 0;
                    /* Garante que não haja margens adicionais */

                }
            </style>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">telefone</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['senha'] . "</td>";
                    echo "<td>" . $user_data['telefone'] . "</td>";
                    echo "<td>" . $user_data['genero'] . "</td>";
                    echo "<td>" . $user_data['data_de_nascimento'] . "</td>";
                    echo "<td>" . $user_data['cidade'] . "</td>";
                    echo "<td>" . $user_data['estado'] . "</td>";
                    echo "<td>" . $user_data['endereço'] . "</td>";
                    echo "<td>
      <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5l2.293 2.293 1.293-1.293-2.293-2.293zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
    </svg>
</a>

<a class='btn btn-sm btn-primary' href='deletar.php?id=$user_data[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg>
</a>
            </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="sair.php">Sair</a>
</body>
<script>

    var search=document.getElementById('pesquisar');
    
                search.addEventListener("keydown",function(event){
                    searchData();
                });

    function searchData(){
        window.location='sistema.php?search='+search.value;
    }


    
</script>
</html>