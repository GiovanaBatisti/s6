<?php
require_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$telefone = $_POST['txt_telefone'];
$nivel = $_POST['txt_nivel'];

$sql_cadastro=mysqli_query($ligar, "INSERT INTO tb_usuarios(usuario, senha, email, telefone, nivel) values ('$usuario','$senha','$email','$telefone','$nivel')"   );

if($sql_cadastro==true){

    echo " <script>

    alert('usuário Cadastrado com sucesso');
window.location.href='index.html';
</script>";

}else{

    echo " <script>

    alert(' Falha ao Cadastrar usuário');
window.location.href='cadastrousuario.html';
</script>";

}


?>