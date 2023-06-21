<!doctype html>
<html lang="en">
  <head>
  	<title>Login de Clientes</title>
    <meta charset="utf-8">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/istyle.css">

	<!--Font-awesome-->
	<link href="fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container h-auto">
			<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
	<h2 class="heading-section">Mario's Pizzeria</h2>
</div>
			</div>
			<div class="row justify-content-center">
<div class="col-md-12 col-lg-10">
	<div class="wrap d-md-flex">
		<div id="contlog" class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
			<div  class="text w-100 ">
<h2>Bem-Vindo</h2>
<p id="ntc">Não tem conta?</p>
<button id="sing" class="btn btn-white btn-outline-white">Cadastrar-se</button>
			</div>
			      </div>
<div id="formul" class="login-wrap p-4 p-lg-5">
		<div class="d-flex">
			<div class="w-100">
<h3 class="mb-4" >Entrar na conta</h3>
			</div>
		</div>
			<div class="form-group mb-3">
				<label class="label" for="email">Email</label>
				<input type="email" id="email" class="form-control" placeholder="Email" required>
			</div>
		<div class="form-group mb-3">
			<label class="label" for="password">Senha</label>
		<input type="password" id="password" class="form-control" maxlength="50" placeholder="Senha" required>
		<button class="btn-mostr" id="mostra"><i class="fas fa-eye"></i></button>
		</div>
		<div class="form-group">
			<button id="entrar" class="form-control btn btn-primary">Entrar</button>
		</div>
		<div class="form-group ">
			<button id="fsenha" class="form-control btn btn-secondary" >Esqueceu senha?</button>
		</div>
		        </div>
		      </div>
</div>
			</div>
		</div>
	</section>

<!-- modal para senha-->

<div class="modal" id="ModalFsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar senha</h5>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="emailsenha" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="emailsenha" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="cpfsenha" class="col-form-label">CPF:</label>
            <input type="text" class="form-control" id="cpfsenha" placeholder="CPF">
          </div>
		  <div class="form-group" id="novSenha">

		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="fecharModal">Fechar</button>
        <button type="button" class="btn btn-success" id="redefinir">Continuar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal para senha-->


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  
<!--mask-->
<script src="mascaras/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="mascaras/jquery.inputmask.js" type="text/javascript"></script>
<script src="mascaras/jquery.inputmask.numeric.extensions.js" type="text/javascript"></script>
  
  <script>


	$("#mostra").click(function() {
        let t= $("#password").attr('type');
        if (t === "password") {
            $("#password").attr('type',"text");
        } else {
	  $("#password").attr('type',"password");
        }
    });
</script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    
    var urlAtual = window.location.href;
    var urlClass = new URL(urlAtual); 
    if(urlClass.searchParams.get("session")!=null){
		swal({
  			title: "Faça login para acessar!",
  			buttons: {
    			confirm: {
      				text: "OK",
      				value: true,
      				visible: true,
      				closeModal: true,
    			},
  			},
			icon: 'error',
		}).then((value) => {
  				if (value) {
					window.location.href = "logincli.php"
  				}
		});
    }
</script>

<script>

	$('#sing').click(function(){
		$('#ntc').html('<div  class="d-flex m-4 align-items-center"><div class="col-4"></div><div class="custom-loader-min"></div></div>')
		window.setTimeout(formu,1000)
		function formu(){
			//teste para o cadastro
if ($('#sing').text() != "Entrar") {

$('#ntc').text('Já tem conta?')
$('#sing').text('Entrar')
$('#contlog').attr('class','text-wrap2 p-4 p-lg-5 text-center d-flex align-items-center order-md-last')

	//alert($('body').width())==768 fica no lado
//cria form de cadastro
$('#formul').html('<div class="d-flex"><div class="w-100">			<h3 class="mb-4" >Cadastrar nova conta</h3></div></div><div class="form-group mb-3">'+			
'<label class="label" for="name">Nome Completo*</label><input type="text" id="nome" class="form-control" placeholder="Nome Completo" required>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="CPF">CPF*</label><input type="text" id="cpf" class="form-control" placeholder="CPF" required>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="fone">Telefone*</label><input type="text" id="fone" class="form-control" placeholder="Telefone" required>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="nasc">Data de Nascimento*</label><input type="date" id="nasc" class="form-control" required>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="email">Email*</label><input type="email" id="email" class="form-control" placeholder="Email" required>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="password">Senha*</label><input type="password" id="password" class="form-control" maxlength="50" placeholder="Senha" required><button class="btn-mostrinfo" id="mostra"><i class="fas fa-eye"></i></button>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="password2">Repetir Senha*</label><input type="password" id="password2" class="form-control" maxlength="50" placeholder="Senha" required><button class="btn-mostrinfo" id="mostra2"><i class="fas fa-eye"></i></button>'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="CEP">CEP*</label><input type="text" id="cep" class="form-control" placeholder="cep" required>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="Estado">Estado*</label> <select class="form-control" id="estados-list"></select>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="Cidade">Cidade*</label> <select class="form-control" id="cidade-list"></select>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="bairro">Bairro*</label><input type="text" id="bairro" class="form-control" placeholder="bairro" required>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="Rua">Rua*</label><input type="text" id="rua" class="form-control" placeholder="Rua" required>	'+
'</div><div class="form-group mb-3">'+

'<label class="label" for="Número">Número</label><input type="number" id="numero" class="form-control" placeholder="Número" required>'+
'</div><div class="form-group mb-3">'+

  '<label class="label" for="Complemento">Complemento</label><input type="text" id="complemento" class="form-control" placeholder="Complemento" required>'+
'</div><div class="form-group mb-3">'+

'</div>	<div class="form-group"><button id="cadastrar" class="form-control btn btn-info">cadastrar-se</button></div>')
			
//enviar dados para cadastrar
$('#cadastrar').click(function(){
	let nome = $('#nome').val();
	let cpf = $('#cpf').val();
	let fone = $('#fone').val();
	let nasc = $('#nasc').val();
	let email = $('#email').val();
	let senha = $('#password').val();
	let senha2 = $('#password2').val();
	let cep = $('#cep').val();
	let estado = $('#estados-list').val();
	let cidade = $('#cidade-list').val();
	let bairro = $('#bairro').val();
	let rua = $('#rua').val();
	let numero = $('#numero').val();
	let complemento = $('#complemento').val();
	
  //verificando se dados não são vazios
    if(nome!='' && cpf!='' && fone!='' && nasc!='' && email!='' && senha!='' && senha2!='' && cep!='' && estado!='' && cidade!='' && bairro!='' && rua!=''){
		let vcpf= $('#cpf').attr('class');
		let vcep= $('#cep').attr('class');
        if(senha==senha2 && vcpf!='form-control is-invalid' && vcep!='form-control is-invalid'){
         $.post("crud_cli/salvacli.php",{nome:nome,cpf:cpf,fone:fone,nasc:nasc,email:email,senha:senha,cep:cep,estado:estado,cidade:cidade,bairro:bairro,rua:rua,numero:numero,complemento:complemento},function(retornocli){
            if(retornocli=='ok'){
		            swal("Dados Registrados!", {  icon: "success",	});
		            window.setTimeout('location.reload()',1000);
		    }else if(retornocli=='vazio'){
		            swal("ERRO INTERNO!", {  icon: "error",	});
		    }else{
					swal("CPF já está cadastrado em outra conta!", {  icon: "warning",	});
			}
		})//fim do post de salvacli

        }else if(senha!=senha2){
            swal("As Senhas Estão Diferentes", {  icon: "warning",	});
        }else if(vcpf=='form-control is-invalid'){
		swal("CPF Invalido!", {  icon: "error",	});
		}else{
		swal("CEP Invalido!", {  icon: "error",	});
		}
		//fim if de verificar valores
    }else{
       swal("1 ou mais campos obrigatórios não preenchidos!", {  icon: "warning",	});
    }
});//fim do cadastar cliente



//mascaras de input
$("#cpf").inputmask("999.999.999-99");
$("#cep").inputmask("99999-999");
$("#fone").inputmask("(99)99999-9999");

//verificador de cpf
function validaCPF(cpf) {
  cpf = cpf.replace(/[^\d]+/g, ''); // Remove todos os caracteres não numéricos do CPF
  if (cpf == '') { // Verifica se o CPF está vazio
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Elimina CPFs inválidos conhecidos
  if (
    cpf.length != 11 || // Verifica se o CPF possui 11 dígitos
    cpf == "00000000000" || 
    cpf == "11111111111" || 
    cpf == "22222222222" || 
    cpf == "33333333333" || 
    cpf == "44444444444" ||
    cpf == "55555555555" || 
    cpf == "66666666666" || 
    cpf == "77777777777" || 
    cpf == "88888888888" || 
    cpf == "99999999999"
  ) {
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Valida o 1º dígito verificador
  var add = 0;
  for (var i = 0; i < 9; i++) { // Percorre os primeiros 9 dígitos do CPF
    add += parseInt(cpf.charAt(i)) * (10 - i); // Soma a multiplicação do dígito pelo seu peso
  }
  var rest = 11 - (add % 11); // Calcula o dígito verificador
  if (rest == 10 || rest == 11) {
    rest = 0;
  }
  if (rest != parseInt(cpf.charAt(9))) { // Verifica se o dígito verificador é igual ao esperado
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Valida o 2º dígito verificador
  add = 0;
  for (var i = 0; i < 10; i++) { // Percorre os primeiros 10 dígitos do CPF
    add += parseInt(cpf.charAt(i)) * (11 - i); // Soma a multiplicação do dígito pelo seu peso
  }
  rest = 11 - (add % 11); // Calcula o dígito verificador
  if (rest == 10 || rest == 11) {
    rest = 0;
  }
  if (rest != parseInt(cpf.charAt(10))) { // Verifica se o dígito verificador é igual ao esperado
    return false; // Retorna falso, indicando um CPF inválido
  }
  return true; // Retorna verdadeiro, indicando um CPF válido
}

// Função para exibir mensagem de CPF inválido
function cpfinvalido() {
  $("#cpf").addClass("is-invalid"); // Adiciona a classe "is-invalid" ao campo de CPF para destacar o erro
  $("#cpf-feedback").html("CPF inválido"); // Define o texto de feedback para indicar que o CPF é inválido
}

// Evento de validação do CPF ao perder o foco do campo
$("#cpf").on("blur", function() {
  var cpf = $(this).val(); // Obtém o valor digitado no campo de CPF
  if (!validaCPF(cpf)) { // Verifica se o CPF é inválido
    cpfinvalido(); // Chama a função para exibir a mensagem de CPF inválido
  } else {
    $("#cpf").removeClass("is-invalid"); // Remove a classe "is-invalid" do campo de CPF
    $("#cpf-feedback").html(""); // Remove o texto de feedback
  }
});

//caso o cliente queira mudar a cidade e o estado
$('#estados-list').change(function(){
        var esta=$(this).val().split("|")
        var estado=esta[0]
        var sigla=esta[1]
      $.ajax({
        url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados/"+sigla+"/municipios?orderBy=nome",
        method: "GET",
        success: function(response) {
          // Manipular os dados retornados
          var cidade = response;
          $('#cidade-list').html('')
          var cidadeList = $("#cidade-list");
          
          cidade.forEach(function(cidade) {
            // Criar um item de lista para cada estado
            var Uf=cidade.microrregiao.mesorregiao.UF.nome;
            if(estado==Uf){
            var listItem = $("<option>").text(cidade.nome).val(cidade.nome);
           
            cidadeList.append(listItem);
            }
          });
        },
        error: function(error) {
          console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
        }
      });
      });//fim estado change sem o cep

//busca cep
$('#cep').change(function(event) {
	event.preventDefault();
	var cep = $('#cep').val().replace(/\D/g, '');
	
	if (cep.length !== 8) {
	$('#cep').addClass('is-invalid');
	swal('O CEP deve conter 8 dígitos!', {icon:'warning',});
	return;
		
	}
	
	$('#cep').removeClass('is-invalid');

	$.ajax({
	url: 'https://viacep.com.br/ws/' + cep + '/json/',
	type: 'GET',
	dataType: 'json',
	success: function(data) {
		if (!data.erro) {
			//busca estado
	$.ajax({
		url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome",
		method: "GET",
		success: function(response) {
		// usar dados retornados
		var estados = response;
		var estadosList = $("#estados-list");

		estados.forEach(function(estado) {
			// Criar um item de lista para cada estado
			var listItem = $("<option>").text(estado.nome+"|"+estado.sigla).val(estado.nome + "|" + estado.sigla);
			estadosList.append(listItem);
			if (estado.sigla === data.uf) {
				listItem.attr("selected", "selected");
			}
		});
		},
		error: function(error) {
		console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
		}
	});//fim estado change com o cep
	//procura com data
	$.ajax({
url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados/"+data.uf+"/municipios?orderBy=nome",
method: "GET",
success: function(response) {
// Usar dados retornados
var cidade = response;

$('#cidade-list').html('')
var cidadeList = $("#cidade-list");

cidade.forEach(function(cidade) {
	// Criar um item de lista para cada estado
	var listItem = $("<option>").text(cidade.nome).val(cidade.nome);

	cidadeList.append(listItem);
	if (cidade.nome === data.localidade) {
		listItem.attr("selected", "selected");
	}
});

},
error: function(error) {
console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
}
});//fim cidade change com o cep
				//informações finais
              $('#bairro').val(data.bairro);
			  $('#rua').val(data.logradouro);
              $('#complemento').val(data.complemento);


		} else {
		swal('Endereço não encontrado!', {icon:'warning',});
		$('#cep').addClass('is-invalid');
		}
	},
	error: function() {
		alert('Ocorreu um erro ao consultar o endereço!');
	}
	});
}); //fim busca endereço

	$("#mostra").click(function() {
        let t= $("#password").attr('type');
        if (t === "password") {
            $("#password").attr('type',"text");
        } else {
	  $("#password").attr('type',"password");
        }
    });
	
	$("#mostra2").click(function() {
        let t= $("#password2").attr('type');
        if (t === "password") {
            $("#password2").attr('type',"text");
        } else {
	  $("#password2").attr('type',"password");
        }
    });


//fim do cadastro e começo do voltar pro entrar
}else{
window.setTimeout('location.reload()')
}
		}//fim da função formu
	})
</script>

<script>
	//fazer login
$('#entrar').click(function(){
	let email = $('#email').val()
	let senha = $('#password').val()
    $.post('crud_cli/login.php', {email:email,senha:senha} ,function(retornologin){
		if(retornologin!='loginerror'){
	$('#contlog').html('<div class="col-4"></div><div class="custom-loader"></div>')
			window.setTimeout(function() {
				window.location.href = "index.php?index="+retornologin;
			}, 2000);
		}else{
			swal('Email ou Senha estão Incorretos!', {icon:'warning'})
		}
	})
})
	/*
ALTER TABLE tbitem_venda ADD CONSTRAINT fkitem_venda FOREIGN KEY ( id_venda ) REFERENCES tbvenda ( id_venda ) ;
ALTER TABLE tbitem_venda ADD CONSTRAINT fkitem_pro FOREIGN KEY ( id_pro ) REFERENCES tbproduto ( id_pro ) ;
ALTER TABLE tbvenda ADD CONSTRAINT fkvenda_cli FOREIGN KEY ( codcli ) REFERENCES tbcliente ( codcodcli ) ; */
  </script>

  <script>
	//modal esqueceu senha
	$('#fsenha').click(function(){
		$('#ModalFsenha').show();
		$("#cpfsenha").inputmask("999.999.999-99");
		$('#fecharModal').click(function(){
				let email = $('#emailsenha').val('');
				let cpf = $('#cpfsenha').val('');
				$('#emailsenha').attr('readonly',false);
				$('#cpfsenha').attr('readonly',false);
				$('#redefinir').text('Continuar');
			$('#novSenha').html('');
			$('#ModalFsenha').hide();
		});//fecha modal

		$('#redefinir').click(function(){
			if($(this).text()=='Continuar'){
				let email = $('#emailsenha').val();
				let cpf = $('#cpfsenha').val();
				if(email!='' && cpf!=''){
					//verifica se existe uma conta com os dados informados
				    $.post('crud_cli/buscaPRS.php',{email:email,cpf:cpf},function(resultadoB){
						if(resultadoB=='vazio'){
							swal('Usuário não foi encontrado!','Verifique os dados e tente novamente.',{icon:'error'})
						}else{//continua o processo de recuperar senha
							$('#emailsenha').attr('readonly','readonly');
							$('#cpfsenha').attr('readonly','readonly');
							$('#novSenha').html(
'<label class="label" for="senha1">Nova Senha</label><input type="password" id="senha1" class="form-control" maxlength="50" placeholder="Nova Senha" required>'+

'<label class="label" for="senha2">Repetir Nova Senha</label><input type="password" id="senha2" class="form-control" maxlength="50" placeholder="Repetir Nova Senha" required>'+
'<button class="btn-mostr" id="mostraR2"><i class="fas fa-eye"></i></button>');//pede as novas senhas
							$('#redefinir').text('Redefinir');
								
								$("#mostraR2").click(function() {
									let t= $("#senha2").attr('type');
									if (t === "password") {
										$("#senha1").attr('type',"text");
										$("#senha2").attr('type',"text");
									} else {
										$("#senha1").attr('type',"password");
										$("#senha2").attr('type',"password");
									}
								});
						}
					})
				}else{
					swal('Preencha os campos para proseguir', {icon : 'warning'});
				}
			}else{//botão tem valor = Redefinir
				let email = $('#emailsenha').val();
				let cpf = $('#cpfsenha').val();
				let senha1 = $('#senha1').val();
				let senha2 = $('#senha2').val();
				if(senha1==senha2){
					$.post('crud_cli/redefineS.php',{email:email,cpf:cpf,senha:senha1},function(resultSenha){
						if(resultSenha!='vazio'){
							swal('Senha alterada com SUCESSO!',{icon:'success'});
						}else{
							swal('Erro Interno!',{icon:'error'})
						}
					})
				}else{
					swal('As senhas estão diferentes!', {icon: 'warning'})
				}
			}
		})
	})
  </script>
<!-- Sweetalert -->    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>

