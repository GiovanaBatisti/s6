<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_eliminar=mysqli_query($ligar , " DELETE FROM tb_usuarios WHERE id='$id' ");

if($sql_eliminar==true){

    echo " <script>
    
    alert('Usuário foi Excluido com Sucesso ');
    window.location.href='listarusuario.php';
    </script>";
} else{

    echo " <script>
    
    alert('Falha ao Excluir Usuário ');
    window.location.href='listarusuario.php';
    </script>";

}

?>