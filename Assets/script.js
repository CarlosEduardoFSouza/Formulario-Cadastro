//Mascara usando jQuery
jQuery(function ($) {
    $("#inputTelefone").mask("(99) 99999-9999");
    $("#inputDataNascimento").mask("99/99/9999");
});

/* Função Validar */
function validar_form() {
// pegando o valor do nome pelos names e verificando se o campo está vazio
  
    if(document.getElementById("inputName").value == ""){
      alert("Por favor, preencha o campo Nome !");
      document.getElementById("inputName").focus();
      return false;
    }

    if(document.getElementById("inputEmail").value == ""){
      alert("Por favor, preencha o campo E-mail !");
      document.getElementById("inputEmail").focus();
      return false;
    }

    if(document.getElementById("inputTelefone").value == ""){
      alert("Por favor, preencha o campo Telefone !");
      document.getElementById("inputTelefone").focus();
      return false;
    }

    if(document.getElementById("inputSenha").value == ""){
      alert("Por favor, preencha o campo Senha !");
      document.getElementById("inputSenha").focus();
      return false;
    }

    if(document.getElementById("inputDataNascimento").value == ""){
      alert("Por favor, preencha o campo Data de Nascimento !");
      document.getElementById("inputDataNascimento").focus();
      return false;
    }
    
  }

 

     