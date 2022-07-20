
<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta=mysqli_query( $ligar , " SELECT FROM tb_usuarios WHERE id = '$id' "  );

$resultados=mysqli_fetch_array($sql_consulta);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição dos dados</title>
</head>
<body>
    <center>
    <h1>EDIÇÃO DE DADOS</h1>
<form method="POST" action="atualizar.php">

<input type="hidden" name="codigo"   >
USUÁRIO: <BR>
<input type="text" name="txt_usuario"> <br>
SENHA <br>
<input type="password" name="txt_senha"> <br>
EMAIL: <br>
<input type="email" name="txt_email"> <br>
TELEFONE:
<input type="telefone" name="txt_telefone"> <br>
NÍVEL <br>
<select name="txt_nivel">
    <option value="Admin"> Administrador</option>
    <option value="Aluno"> Aluno</option>
</select>
<br> 
<br>
<input type="submit" value="ATUALIZAR"> <br>
<br> <br>
<a href="index.html"> logar</a> <br>
</center>


</form>
</body>
</html>