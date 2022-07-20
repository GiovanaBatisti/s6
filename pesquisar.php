<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisar</title>
</head>
<body>
    <center>
    <h1>pesquisar DE USUÁRIO</h1>
<form method="POST" action="">

Nome: <BR>
<input type="text" placeholder="Digite o nome" name="nome"> <br>

<br> 
<br>
<input  type="submit" value="Pesquisar"> <br>
<br>
 
</center>
</form>
<?php

if($SendPesqUser){

    
    $nome = filter_input(INPUT_POST, 'nome');
    $result_usuario = "SELECT  * FROM tb_usuarios WHERE nome LIKE '%$nome%'";
    $resultado_usuario=mysqli_query($conexao,$result_usuario);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo "ID: " .$row_usuario['id'] , "<br>";
        echo "Usuario: " .$row_usuario['usuario'] , "<br>";
        echo "E-mail: " .$row_usuario['email'] , "<br>";
   } 
}
?>


</body>
</html>