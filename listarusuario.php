<?php

include_once('conexao.php');


?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>
<body>
    

<center><h1> Lista de usuários</h1>

 <div  class =" box-search " >
        <input  type =" search " list="nome" class =" form-control w-25 " placeholder =" Pesquisar " id="pesquisar" >
        <button  onclick="searchData() " class ="btn btn-primary" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
        </botão >
    </div >
    <classe div  =" m-5 " >
        
        <hr><br> 

<table rules="all">

<thead>

</thead>
<tr>
    <th>CÓDIGO</th>
    <th>USUÁRIOS</th>
    <th>SENHA</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
    <th>NIVEL</th>
</tr>
<tbody>

<?php

$sql_consulta=mysqli_query($ligar , "SELECT *FROM tb_usuarios");
$TOTAL =mysqli_num_rows($sql_consulta);

while($dados=mysqli_fetch_array($sql_consulta)){
    ?>
    <tr>
    <td> <?= $dados[0] ?></td>
    <td> <?= $dados[1] ?></td>
    <td> <?= $dados[2] ?></td>
    <td> <?= $dados[3] ?></td>
    <td> <?= $dados[4] ?></td>
    <td> <?= $dados[5] ?></td>
    <td> <a href="eliminar.php?codigo=<?= $dados[0] ?>    "> ELIMINAR </a></td>
    <td> <a href="editar.php?codigo=<?= $dados[0] ?> "> EDITAR </a></td>
</tr>


<?php } ?>

<tr> <td colspan="7"> TOTAL: <?=$TOTAL ?> </td>  </tr>

</tbody>




</table>

<hr>
<a href="index.html"> Voltar </a> 

</center>



</body>

 <?php
//$sql = "SELECT nome FROM usuario";
//$result = mysqli_query($conexao, $sql);
//$dados = mysqli_fetch_array($result);
//?>

 <datalist>
<?php 
foreach($result as $dados){
    echo  '<option value=' .$dados['nome'].'>'; 
}

?>

</datalist> 

</html>