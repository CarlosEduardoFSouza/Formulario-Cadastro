<?php

include_once('conexao.php');
 $id= filter_input(INPUT_GET,'id_cliente',FILTER_SANITIZE_NUMBER_INT);
 $pegarCadastro="SELECT * from clientes where id_cliente='$id'";     
 $conectaBanco=mysqli_query($link,$pegarCadastro); 
 $editarCadastro= mysqli_fetch_assoc($conectaBanco); 

?>

<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">

      <script type="text/javascript" src="js_jQuery/1.5.2.js"></script>
   	<script type="text/javascript" src="js_jQuery/jquery.maskedinput-1.3.min.js"></script>

     
   	

      <title>Gerenciamento de Cadastro</title>
    </head>

    <body>
      <h1>Editar Cadastro</h1>

        <p><a href="index.php"> Cadastrar Cliente </a> | <a href="inventario.php"> Ver Registros </a></p>

        <form id="Cadastro de Cliente" name="Cadastro de Cliente" method="post" action="editar.php">
      
          <input name="id_cliente" type="hidden" required="required" id="livro" autocomplete="on" value="<?php echo ($editarCadastro['id_cliente']); ?>">

            <p>
              <label for="inputName">Seu nome:</label>
              <input type="text" name="nome_cliente" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Digite aqui o seu Nome" value="<?php echo ($editarCadastro['nome_cliente']); ?>">
            </p>

          <p>
            <label for="inputEmail">Digite o seu E-mail:</label>
            <input type="email" name="email_cliente" class="form-control" id="inputEmail" placeholder="Digite aqui o seu E-mail" value="<?php echo ($editarCadastro['email_cliente']); ?>">
          </p>

          <p>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone_cliente" class="form-control" id="inputTelefone" name="telefone" placeholder="Informe o seu Telefone" value="<?php echo ($editarCadastro['telefone_cliente']); ?>">
          </p>

          <p>
            <label for="inputPassword1">Senha:</label>
            <input type="password" name="senha_cliente" class="form-control" id="inputSenha" placeholder="Digite aqui a Senha" value="<?php echo ($editarCadastro['senha_cliente']); ?>">
          <p>

          <p>
            <label for="data_nasc_cliente">Data de Nascimento:</label>
            <input type="text" name="data_nasc_cliente" class="form-control" id="inputDataNascimento" placeholder="00/00/0000" value="<?php echo ($editarCadastro['data_nasc_cliente']); ?>">
          </p>
            
          <p>
            <input type="submit" name="submit" id="btnSubmit" value="Editar">
          </p>
        </form>

        <script type="text/javascript" src="Assets/script.js"></script>
      </body>
    </html>










