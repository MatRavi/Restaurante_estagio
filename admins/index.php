<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login de Admin</title>
    <meta charset="utf-8">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/istyle.css">

	<!--Font-awesome-->
	<link href="../fontawesome/css/all.css" rel="stylesheet">
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
                <h2>Página somente para Administradores</h2>
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
		        </div>
		      </div>
</div>
			</div>
		</div>
	</section>


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

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
    $("#entrar").click(function(){
            let email = $('#email').val()
            let senha = $('#password').val()
        $.post('login.php',{email:email,senha:senha},function(retornologin){
                if(retornologin!='loginerror'){
                    $('#contlog').html('<div class="col-4"></div><div class="custom-loader"></div>')
                    window.setTimeout(function() {
                        window.location.href = "home.php";
                    }, 2000);
                }else{
                    swal('Email ou Senha estão Incorretos!', {icon:'warning'})
                }
            })
    })
    
    var urlAtual = window.location.href;
    var urlClass = new URL(urlAtual); 
    if(urlClass.searchParams.get("S")!=null){
        swal('Logout Realizado!',{icon: 'success'})
    }
    if(urlClass.searchParams.get("s")!=null){
        swal('Faça Login para continuar!',{icon: 'warning'})
    }
</script>
</body>
</html>