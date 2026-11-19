<?php
include "conexao.php";
$nome = "pedro";
$tel = "(21) 99487-7864";
$email = "pedro@gmail.com";

$sql = "insert into contatos (nome, tel, email) values('$nome','$tel','$email')";

$resultado=mysqli_query($conexao,$sql);
if($resultado){
  echo "cadastrado com sucesso";
}else{
  echo "erro ao cadastrar contato";
}
mysqli_close( $conexao);




?>