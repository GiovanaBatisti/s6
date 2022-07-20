<?php
require_once('conexao.php');

$id= $_POST['codigo'];

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$telefone = $_POST['txt_telefone'];
$nivel = $_POST['txt_nivel'];

$sql_atualizar=mysqli_query($ligar, "UPDATE tb_usuarios SET usuario='$usuario',senha='$senha' , email='$email',telefone='$telefone' , nivel='$nivel' WHERE id='$id'"   );

if($sql_cadastro==true){

    echo " <script>

    alert('Dados do Usuários Atualizados com sucesso');
    window.location.href='listarusuario.php';
    </script>";

}else{

    echo " <script>

    alert(' Falha ao Atualizar Dados do usuário');
    window.location.href='editar.php';
    </script>";

}


?>