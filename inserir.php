<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Regitrar livros</title>
        </head>

        <body>
            <p><a href="index.php"> Cadastrar Cliente </a> | <a href="inventario.php"> Ver Registros </a></p>
        </body>
    </html>

<?php

session_start();

include_once('conexao.php');

$nome_cliente = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_STRING);

$email_cliente = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_EMAIL);
$telefone_cliente = filter_input(INPUT_POST, 'telefone_cliente', FILTER_SANITIZE_STRING);
$senha_cliente = filter_input(INPUT_POST, 'senha_cliente', FILTER_SANITIZE_STRING);
$data_nasc_cliente= filter_input(INPUT_POST, 'data_nasc_cliente');

// Teste para verificar se esta pegando os dados do formulario
/*
echo "Nome: $nome_cliente <br>";
echo "E-mail: $email_cliente <br>";
echo "Telefone: $telefone_cliente <br>";
echo "Senha: $senha_cliente <br>";
echo "Data de nascimento: $data_nasc_cliente <br>";

*/

// Inserir dados no banco de dados 
 $inserirCadastro = "INSERT into clientes (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente, created) values ('$nome_cliente', '$email_cliente', '$telefone_cliente', '$senha_cliente', str_to_date('$data_nasc_cliente " . "', '%d/%m/%Y '), NOW())";

 $conectaBanco = mysqli_query($link, $inserirCadastro);

 if(!$conectaBanco)
 {echo("Erro:".mysqli_error());}
  else{echo("Operaçao realizada com sucesso");}
  

