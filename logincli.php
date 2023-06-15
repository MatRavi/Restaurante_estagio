<!doctype html>
<html lang="en">
  <head>
  	<title>Login de Clientes</title>
    <meta charset="utf-8">
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
<label class="label" for="name">Nome</label>
<input type="text" class="form-control" placeholder="Nome" required>
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

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
	$("#mostra").click(function() {
        let t= $("#password").attr('type');
        if (t === "password") {
            $("#password").attr('type',"text");
        } else {
	  $("#password").attr('type',"password");
        }
    });


	$('#sing').click(function(){
		$('#ntc').html('<div  class="d-flex m-4 align-items-center"><div class="col-4"></div><div class="custom-loader-min"></div></div>')
		window.setTimeout(formu,1000)
		function formu(){
if ($('#sing').text() != "Entrar") {

$('#ntc').text('Já tem conta?')
$('#sing').text('Entrar')
$('#contlog').attr('class','text-wrap2 p-4 p-lg-5 text-center d-flex align-items-center order-md-last')
$('#formul').html('<div class="d-flex"><div class="w-100">			<h3 class="mb-4" >Cadastrar nova conta</h3></div></div><div class="form-group mb-3">			<label class="label" for="name">Nome</label><input type="text" class="form-control" placeholder="Nome" required></div><div class="form-group mb-3"><label class="label" for="password">Senha</label><input type="password" id="password" class="form-control" maxlength="50" placeholder="Senha" required>	<button class="btn-mostrinfo" id="mostra"><i class="fas fa-eye"></i></button>	<label class="label" for="CEP">CEP</label><input type="text" id="cep" class="form-control" placeholder="cep" required></div><div class="form-group mb-3">	'+
  '<label class="label" for="Estado">Estado</label> <select class="form-control" id="estados-list"></select>'+
  '<label class="label" for="Cidade">Cidade</label> <select class="form-control" id="cidade-list"></select>'+
  '<label class="label" for="name">Nome</label><input type="text" class="form-control" placeholder="" required></div><div class="form-group mb-3">'+
  '<label class="label" for="password">Senha</label><input type="password" id="password" class="form-control" maxlength="50" placeholder="Senha" required>	'+
'</div>		<div class="form-group"><button id="entrar" class="form-control btn btn-info">cadastrar-se</button></div>')
			


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
            var listItem = $("<option>").text(cidade.nome);
           
            cidadeList.append(listItem);
            }
          });
        },
        error: function(error) {
          console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
        }
      });
      });

//busca cep
$('#cep').change(function(event) {
	event.preventDefault();
	var cep = $('#cep').val().replace(/\D/g, '');
	
	if (cep.length !== 8) {
	alert('O CEP deve conter 8 dígitos!');
	return;
	}
	
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
			var listItem = $("<option>").text(estado.nome+"|"+estado.sigla);
			estadosList.append(listItem);
			if (estado.sigla === data.uf) {
				listItem.attr("selected", "selected");
			}
		});
		},
		error: function(error) {
		console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
		}
	});
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
	var listItem = $("<option>").text(cidade.nome);

	cidadeList.append(listItem);
	if (cidade.nome === data.localidade) {
		listItem.attr("selected", "selected");
	}
});

},
error: function(error) {
console.log("Ocorreu um erro ao acessar a API do IBGE: " + error);
}
});

$('#')


		} else {
		alert('Endereço não encontrado!');
		}
	},
	error: function() {
		alert('Ocorreu um erro ao consultar o endereço!');
	}
	});
}); 
	$("#mostra").click(function() {
        let t= $("#password").attr('type');
        if (t === "password") {
            $("#password").attr('type',"text");
        } else {
	  $("#password").attr('type',"password");
        }
    });


}else{


$('#ntc').text('Não tem conta?')
$('#sing').text('Cadastra-se')
$('#contlog').attr('class','text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last')
$('#formul').html('<div class="d-flex"><div class="w-100"><h3 class="mb-4" >Entrar na conta</h3></div></div><div class="form-group mb-3"><label class="label" for="name">Nome</label><input type="text" class="form-control" placeholder="Nome" required></div><div class="form-group mb-3"><label class="label" for="password">Senha</label><input type="password" id="password" class="form-control" maxlength="50" placeholder="Senha" required><button class="btn-mostr" id="mostra"><i class="fas fa-eye"></i></button></div><div class="form-group"><button id="entrar" class="form-control btn btn-primary">Entrar</button></div><div class="form-group "><button id="fsenha" class="form-control btn btn-secondary" >Esqueceu senha?</button></div>')

$("#mostra").click(function() {
	let t= $("#password").attr('type');
	if (t === "password") {
		$("#password").attr('type',"text");
	} else {
$("#password").attr('type',"password");
	}
});
}
		}
	})

	$('#entrar').click(function(){
		$('#contlog').html('<div class="col-4"></div><div class="custom-loader"></div>')
		window.setTimeout('location.reload()',3000)
	})
	/*
ALTER TABLE tbitem_venda ADD CONSTRAINT fkitem_venda FOREIGN KEY ( id_venda ) REFERENCES tbvenda ( id_venda ) ;
ALTER TABLE tbitem_venda ADD CONSTRAINT fkitem_pro FOREIGN KEY ( id_pro ) REFERENCES tbproduto ( id_pro ) ;
ALTER TABLE tbvenda ADD CONSTRAINT fkvenda_cli FOREIGN KEY ( codcli ) REFERENCES tbcliente ( codcodcli ) ; */
  </script>
	</body>
</html>

