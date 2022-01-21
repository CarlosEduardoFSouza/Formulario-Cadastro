<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Editar Cadastro</title>
    </head>

    <body>
      <h1>Cadastro Editado !</h1>
      <p><a href="index.php"> Cadastrar Cliente </a> | <a href="inventario.php"> Ver Registros </a></p>
    </body>
  </html>


<?php

include_once('conexao.php');

$id_cliente = filter_input(INPUT_POST,'id_cliente', FILTER_SANITIZE_NUMBER_INT);
$nome_cliente = filter_input(INPUT_POST, 'nome_cliente' ,FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_POST, 'email_cliente' ,FILTER_SANITIZE_EMAIL);
$telefone_cliente = filter_input(INPUT_POST, 'telefone_cliente' ,FILTER_SANITIZE_STRING);
$senha_cliente = filter_input(INPUT_POST, 'senha_cliente' ,FILTER_SANITIZE_STRING);

// Criando uma nova varial e atribuindo a data de nascimento pois DATE nao aceita filtro /
$dataNascimento = $_POST['data_nasc_cliente'];

// Editar Cadastro do cliente
$editarCadastro="UPDATE clientes set nome_cliente='$nome_cliente', email_cliente='$email_cliente', telefone_cliente='$telefone_cliente', senha_cliente='$senha_cliente', data_nasc_cliente = str_to_date('$dataNascimento " . "', '%d/%m/%Y %H:%i:%s') where id_cliente='$id_cliente'";    

 // Verificação em caso de operação nao for realizada corretamente
$conectaBanco=mysqli_query($link,$editarCadastro); 

if(!$conectaBanco)
  {echo("Erro:".mysqli_error());}
else{echo("Operaçao realizada com sucesso");}

?>



