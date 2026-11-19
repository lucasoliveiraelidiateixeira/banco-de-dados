<?php
$conexao=mysqli_connect("localhost:3307","root","","INF261");
 
if(!$conexao){
  die("erro ao conectar com o banco de dados:"+mysqli_connect_error());
}else{
  echo"conectado <br>";
}





?>