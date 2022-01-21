<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Apagar Cadastro</title>
    </head>

    <body>
      <h1>Cadastro Apagado !</h1>
      <p><a href="index.php"> Cadastrar Cliente </a> | <a href="inventario.php"> Ver Registros </a></p>
    </body>
  </html>


<?php

include_once( 'conexao.php' );

//Deletar Cliente do banco de dados
$id = filter_input(INPUT_GET,'id_cliente', FILTER_SANITIZE_NUMBER_INT);
$deletaUsuarios="DELETE from clientes where id_cliente='$id'"; 
$resultadoUsuario = mysqli_query($link, $deletaUsuarios);

if ( !$resultadoUsuario ) {
  echo( "Erro:" . mysql_erro() );
} else {
  echo( "Operaçao realizada com sucesso" );
}


?>