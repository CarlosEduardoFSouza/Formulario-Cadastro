<!doctype html>

<html>
  <head>
    <meta charset="utf-8">

    

    <link rel="stylesheet" type="text/css" href="BootStrap/css/bootstrap.min.css">

    <script type="text/javascript" src="js_jQuery/1.5.2.js"></script>
   	<script type="text/javascript" src="js_jQuery/jquery.maskedinput-1.3.min.js"></script>

     <link rel="stylesheet" type="text/css" href="Assets/style.css"/>
  
    
    <title>Cadastro de Clientes</title>
  </head>

  <body>
    <div id="campo">

        <h1>Cadastro</h1>
        <h2>Construsite Brasil</h2>
        <img class="csite" src=Imagem/csite.jpg alt="construsite"/><b>

        <form id="formulario" method="POST" action="inserir.php" onSubmit="return validar_form()">
      <div class="form-group">
        <label for="inputName">Seu nome</label>
        <input type="text" name="nome_cliente" class="form-control" id="inputName"  placeholder="Digite aqui o seu Nome">
      </div>

      <div class="form-group">
        <label for="inputEmail">Digite o seu E-mail</label>
        <input type="email" name="email_cliente" class="form-control" id="inputEmail"  aria-describedby="emailHelp" placeholder="Digite aqui o seu E-mail">
      </div>

      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone_cliente" class="form-control" id="inputTelefone" name="telefone" placeholder="Informe o seu Telefone">
      </div>

      <div class="form-group">
        <label for="inputPassword1">Senha</label>
        <input type="password" name="senha_cliente" class="form-control" id="inputSenha" placeholder="Digite aqui a Senha">
      </div>

      <div class="form-group">
        <label for="data_nasc_cliente">Data de Nascimento</label>
        <input type="text" name="data_nasc_cliente" class="form-control" id="inputDataNascimento" placeholder="Informe sua data de Nascimento">
      </div>

            
        <p>
          <input type="submit" name="submit" id="btnSubmit" value="Cadastrar">
        </p>
      </form>
    </div>
  </form>

  
    <script type="text/javascript" src="Assets/script.js"></script>
  </body>
</html>