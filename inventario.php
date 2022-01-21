<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Inventário de Registros</title>
		</head>

		<body>	
			<h1>Cadastros Registrados</h1>
			<p><a href="index.php"> Cadastrar Clientes </a> | <a href="inventario.php"> Ver Registros </a></p>
		</body>
	</html>

<?php

include_once('conexao.php');

 
$listaUsuarios="SELECT * from clientes";

// Executando a query $result_usuarios e usando a variavel 
$resultadoUsuario = mysqli_query($link,$listaUsuarios);

// Atribundo os dados para variavel resultado

// mysqli_fetch_assoc le o resultado dessa variavel $resultado_usuarios

while($mostrarCliente = mysqli_fetch_array($resultadoUsuario)){
	echo("ID: ".$mostrarCliente["id_cliente"]."<br>");
	echo("Nome: ".$mostrarCliente["nome_cliente"]."<br>");
	echo("E-mail: ".$mostrarCliente["email_cliente"]."<br>");
	echo("Telefone: ".$mostrarCliente["telefone_cliente"]."<br>");
	echo("Senha: ".$mostrarCliente["senha_cliente"]."<br>");
	echo("Data de Nascimento: ".$mostrarCliente["data_nasc_cliente"]."<br>");
  
	echo("<a href='delete.php?id_cliente=".$mostrarCliente['id_cliente']."'> Apagar Cadastro </a><br>");
	echo("<a href='index_editar.php?id_cliente=".$mostrarCliente['id_cliente']."'>Alterar Cadastro </a><hr>");}
    
?>
