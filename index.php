<?php
include 'testasessao.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mario's Cardápio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	<!--Font-awesome-->
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate">Mario's</h1>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/logo.png);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<?php
							if(!isset($_GET['index'])){
							echo"<div class='fh5co-menu-1 col-3'>
								<a href='#' id='login'>login</a>
								</div>
								<div class='fh5co-logo'>
									<a href='#'>Mario's Pizzeria</a>
								</div>
								<div class='fh5co-menu-2'>
							</div>";
					    }else{
							echo "<div class='fh5co-menu-1'>
							<a href='#' id='carrinho'><i class='fas fa-shopping-cart'></i> Compras
							</a>
							</div>
							<div class='fh5co-logo'>
								<a href='#'>Mario's Pizzeria</a>
							</div>
							<div class='fh5co-menu-2'>
							<a href='#' id='perfil'><i class='fas fa-user'></i> Perfil</a>
							<a href='#' id='sair'><i class='fas fa-sign-out-alt'></i>
							Sair</a>
							</div>";
						}
						
					?>
				</div>
			</div>
		</div>

		

		<div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-1">Bebidas</h3>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-2">Pizzas</h3>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-3">Saladas</h3>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-4">Pizzas Doces</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded" id='cardapioV'>
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Cardápio</h2>
					</div>
				</div>

                    <?php
					include 'banco/banco.php';
					$sqlb = "select * from tbproduto where tipo='bebidas'";
					$consultab = $conexao->query($sqlb);
					$sqlp = "select * from tbproduto where tipo='pizzas'";
					$consultap = $conexao->query($sqlp);

				if($consultab->num_rows<$consultap->num_rows){//B  P
					echo '<div class="col-md-6" id="bebidas2">
						<div class="fh5co-food-menu to-animate-2">
						<div class="titul">
							<h2 class="fh5co-bebida">Bebidas</h2>
						</div>
							<div id="bebidas">';
							
							include 'banco/banco.php';
							$sql = "select * from tbproduto where tipo='bebidas'";
							$consulta = $conexao->query($sql);
							if($consulta){
							  if ($consulta->num_rows > 0){
								while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								echo "<ul>
								<li>
									<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
										<figure>
											<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
										</figure>
										<div>
											<h3>".$linha['nome']."</h3>
											<p>".$linha['descricao']."</p>
										</div>
									</div>
									<div class='fh5co-food-pricing'>R$ 
									".$linha['preco']."
									</div>
								</li>
							</ul>";
								}//fim while bebidas
							  }
							}
							
							echo '</div></div></div>';



					echo "<div class='col-md-6' id='pizzas2'>
						<div class='fh5co-food-menu to-animate-2'>
						<div class='titul'>
							<h2 class='fh5co-pizza'>Pizzas</h2>
						</div>
							<div  id='pizzas'>";

							include 'banco/banco.php';
							$sql = "select * from tbproduto where tipo='pizzas'";
							$consulta = $conexao->query($sql);
							if($consulta){
							  if ($consulta->num_rows > 0){
								while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								echo "<ul>
								<li>
									<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
										<figure>
											<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
										</figure>
										<div>
											<h3>".$linha['nome']."</h3>
											<p>".$linha['descricao']."</p>
										</div>
									</div>
									<div class='fh5co-food-pricing'>R$ 
									".$linha['preco']."
									</div>
								</li>
							</ul>";
								}//fim while pizzas
							  }
							}

							echo '</div></div></div>';


						}else{//fim if B  P        começo else P   B
							
					echo "<div class='col-md-6' id='pizzas2'>
					<div class='fh5co-food-menu to-animate-2'>
					<div class='titul'>
						<h2 class='fh5co-pizza'>Pizzas</h2>
					</div>
						<div  id='pizzas'>";

						include 'banco/banco.php';
						$sql = "select * from tbproduto where tipo='pizzas'";
						$consulta = $conexao->query($sql);
						if($consulta){
						  if ($consulta->num_rows > 0){
							while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
							echo "<ul>
							<li>
								<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
									<figure>
										<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
									</figure>
									<div>
										<h3>".$linha['nome']."</h3>
										<p>".$linha['descricao']."</p>
									</div>
								</div>
								<div class='fh5co-food-pricing'>R$ 
								".$linha['preco']."
								</div>
							</li>
						</ul>";
							}//fim while pizzas
						  }
						}

						echo '</div></div></div>';


						echo '<div class="col-md-6" id="bebidas2">
						<div class="fh5co-food-menu to-animate-2">
						<div class="titul">
							<h2 class="fh5co-bebida">Bebidas</h2>
						</div>
							<div id="bebidas">';
							
							include 'banco/banco.php';
							$sql = "select * from tbproduto where tipo='bebidas'";
							$consulta = $conexao->query($sql);
							if($consulta){
							  if ($consulta->num_rows > 0){
								while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								echo "<ul>
								<li>
									<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
										<figure>
											<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
										</figure>
										<div>
											<h3>".$linha['nome']."</h3>
											<p>".$linha['descricao']."</p>
										</div>
									</div>
									<div class='fh5co-food-pricing'>R$ 
									".$linha['preco']."
									</div>
								</li>
							</ul>";
								}//fim while bebidas
							  }
							}
							
							echo '</div></div></div>';

						}//fim else P B

							?>

					<div class="col-md-6" id='saladas2'>
						<div class="fh5co-food-menu to-animate-2">
						<div class="titul">
						<h2 class="fh5co-salada">Saladas</h2>
						</div>
							<div id='saladas'>
							<?php
							include 'banco/banco.php';
							$sql = "select * from tbproduto where tipo='saladas'";
							$consulta = $conexao->query($sql);
							if($consulta){
							  if ($consulta->num_rows > 0){
								while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								echo "<ul>
								<li>
									<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
										<figure>
											<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
										</figure>
										<div>
											<h3>".$linha['nome']."</h3>
											<p>".$linha['descricao']."</p>
										</div>
									</div>
									<div class='fh5co-food-pricing'>R$ 
									".$linha['preco']."
									</div>
								</li>
							</ul>";
								}//fim while saladas
							  }
							}
							?>
							</div>
						</div>
					</div>

					


					<div class="col-md-6" id='pizzas_doces2'>
						<div class="fh5co-food-menu to-animate-2">
							<div class="titul">
							<h2 class="fh5co-doces">Pizzas Doces</h2>
							</div>
							<div id='pizzas_doces'>
							<?php
							include 'banco/banco.php';
							$sql = "select * from tbproduto where tipo='pizzas doces'";
							$consulta = $conexao->query($sql);
							if($consulta){
							  if ($consulta->num_rows > 0){
								while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								echo "<ul>
								<li>
									<div class='fh5co-food-desc pro' id='".$linha['id_pro']."'>
										<figure>
											<img src='images/".$linha['id_pro'].".jpg' class='img-responsive'>
										</figure>
										<div>
											<h3>".$linha['nome']."</h3>
											<p>".$linha['descricao']."</p>
										</div>
									</div>
									<div class='fh5co-food-pricing'>R$ 
									".$linha['preco']."
									</div>
								</li>
							</ul> ";
								}//fim while doces
							  }
							}
							?>
							</div>
						</div>
					</div>
						</div>
							

				</div><!--fim da div cardapio-->
			</div>

		
	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2016 Foodee Free HTML5 Template. <br> Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a> <br> Tasty Icons Free <a href="http://handdrawngoods.com/store/tasty-icons-free-food-icons/" target="_blank">handdrawngoods</a>
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
			</div>
		</div>
	</div>


	


	<!--modal de perfil-->
							
<div class="modal" tabindex="-1" id='modalItem' role="dialog" aria-labelledby="Modaldet" aria-hidden="true">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="Modaldet">Detalhes</h5>
			<button type="button" class="close" id='fecharItem'>
				<i class='fas fa-x'></i></div>
		<div class="modal-body" id='itemDetail'>
		</div>
    </div>
  </div>
</div>

	<!--modal de perfil-->
	<div class="modal" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="modal-title" id="ModalLabel">Perfil</h5>
          <button type="button" class="close" id='fecharperfil'>
            <i class='fas fa-x'></i>
          </button>
        </div>
        <div class="modal-perfil modal-body">
        </div>
      </div>
    </div>
  </div>


	<!--modal de carrinho-->
	<div class="modal" id="carrinhoModal" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Carrinho de Compras</h5>
        <button type="button" class="close" id='fecharcar'>
          <i class='fas fa-x'></i>
        </button>
      </div>
      <div class="modal-body">
        <div id="cart-items" style="max-height: 400px; overflow-y: auto;"></div>
        <div id="total">Total: R$ <span id="cart-total">0.00</span></div>
      </div>
      <div class="modal-footer" id="modal-footer"></div>
    </div>
  </div>
</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>

		$('#perfil').click(function(){
			//pega valor de index/codcli
  			var urlAtual = window.location.href;
			var urlClass = new URL(urlAtual); 
      		var cli = urlClass.searchParams.get("index");
			$.post('crud_card/BPerfil.php',{cli:cli},function(cliente){
				$('.modal-perfil').html(cliente);
			})
			$('#perfilModal').fadeIn();
		});
		$('#fecharperfil').click(function(){
			$('#perfilModal').fadeOut();
		})

        /*carrinho*/
		$('#carrinho').click(function(){
			$('#carrinhoModal').fadeIn();
		});
		$('#fecharcar').click(function(){
			$('#carrinhoModal').fadeOut();
		})
	</script>
	<script>
		
		$('#cardapioV').click(function(){
			$('.with-icon').removeClass('active');
			$.post('crud_card/listarIV.php',{tipo:'pizzas'},function(carda){
					$('#pizzas').html(carda);
					$('#pizzas2').removeClass('col-md-12');
					$('#pizzas2').addClass('col-md-6');
			$('.pro').click(clickDeItem);
			})//pizzas
			$.post('crud_card/listarIV.php',{tipo:'bebidas'},function(carda){
					$('#bebidas').html(carda);
					$('#bebidas2').removeClass('col-md-12');
					$('#bebidas2').addClass('col-md-6');
			$('.pro').click(clickDeItem);
			})//bebidas
			$.post('crud_card/listarIV.php',{tipo:'saladas'},function(carda){
					$('#saladas').html(carda);
					$('#saladas2').removeClass('col-md-12');
					$('#saladas2').addClass('col-md-6');
			$('.pro').click(clickDeItem);
			})//saladas
			$.post('crud_card/listarIV.php',{tipo:'pizzas doces'},function(carda){
					$('#pizzas_doces').html(carda);
					$('#pizzas_doces2').removeClass('col-md-12');
					$('#pizzas_doces2').addClass('col-md-6');
			$('.pro').click(clickDeItem);
			})//doces
			$('#pizzas2 .titul').html('<h2 class="fh5co-pizza">Pizzas</h2>');
			$('#bebidas2 .titul').html('<h2 class="fh5co-bebida">Bebidas</h2>');
			$('#saladas2 .titul').html('<h2 class="fh5co-salada">Saladas</h2>');
			$('#pizzas_doces2 .titul').html('<h2 class="fh5co-doces">Pizzas Doces</h2>');
		});

		$('.with-icon').click(function(){
			$('.with-icon').removeClass('active');
			$(this).addClass('active');

			let tipo = $(this).text().toLowerCase();

			if(tipo=='pizzas'){
				$.post('crud_card/listarI.php',{tipo:tipo},function(lista){
				 	$('.titul').html('');
			$('#pizzas2 .titul').html('<h2 class="fh5co-pizza">Pizzas</h2>');
					$('#pizzas').html(lista);
					$('#pizzas2').removeClass('col-md-6');
					$('#pizzas2').addClass('col-md-12');
					$('.pro').click(clickDeItem);
				})//fim post
				$('#bebidas').html('');
				$('#saladas').html('');
				$('#pizzas_doces').html('');
			}else if(tipo=='bebidas'){
				$.post('crud_card/listarI.php',{tipo:tipo},function(lista){
				 	$('.titul').html('');
			$('#bebidas2 .titul').html('<h2 class="fh5co-bebida">Bebidas</h2>');
					$('#bebidas').html(lista);
					$('#bebidas2').removeClass('col-md-6');
					$('#bebidas2').addClass('col-md-12');
					$('.pro').click(clickDeItem);
				})//fim post
				$('#pizzas').html('');
				$('#saladas').html('');
				$('#pizzas_doces').html('');
			} else if(tipo=='saladas'){
				$.post('crud_card/listarI.php',{tipo:tipo},function(lista){
				 	$('.titul').html('');
			$('#saladas2 .titul').html('<h2 class="fh5co-salada">Saladas</h2>');
					$('#saladas').html(lista);
					$('#saladas2').removeClass('col-md-6');
					$('#saladas2').addClass('col-md-12');
					$('.pro').click(clickDeItem);
				})//fim post
				$('#bebidas').html('');
				$('#pizzas').html('');
				$('#pizzas_doces').html('');
			}else if(tipo=='pizzas doces'){
				$.post('crud_card/listarI.php',{tipo:tipo},function(lista){
				 	$('.titul').html('');
			$('#pizzas_doces2 .titul').html('<h2 class="fh5co-doces">Pizzas Doces</h2>');
					$('#pizzas_doces').html(lista);
					$('#pizzas_doces2').removeClass('col-md-6');
					$('#pizzas_doces2').addClass('col-md-12');
					$('.pro').click(clickDeItem);
				})//fim post
				$('#bebidas').html('');
				$('#saladas').html('');
				$('#pizzas').html('');
			}
			//fim monta cardapio
		})
		/* começo var de car*/
		
				var carItems = [];
				var carQtd = [];
				var qtdTotal = 0;
				var carTotal = 0;
		/* fim var de car*/
			//começo do monta pg produto
			$('.pro').click(clickDeItem);
				function clickDeItem(){
				let id=$(this).attr('id');
				$.post('crud_card/BItem.php',{id:id},function(dadosI){
					let dados = dadosI.split('|')
					let nome =dados[0]; 
					let preco =dados[1]; 
				$('#itemDetail').html('<div class="row"><div class="col-lg-12"><div class="row"> <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"> <div><div class="fade active in" id="single-tab1"> <img src="images/'+id+'.jpg" alt="" /></div></div></div><div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">  <div class="single-product-details"> <h1>'+nome+'</h1>  <div class="single-pro-price">      <span class="single-regular">R$ '+preco+'</span>      </div>    <div class="d-flex">Quantidade: <span id="qtd"></span>  '
				+'<input type="range" min="0" max="10" value="0" class="form-control qtd" />  '
				+'<button type="button" class="btn btn-info ml-3 adicionaItem" id="'+id+'"><i class="fas fa-plus"></i> Adicionar</button></div></div> </div>  </div> </div></div>')
				$('#modalItem').fadeIn();
					$('.qtd').change(function(){
						$('#qtd').text($(this).val())

					})
				//começo add carrinho
				// Função para adicionar um item ao carrinho de compras
				function addToCart(id,qtd,price) {
					if (!carItems.includes(id)) {
    						carItems.push(id); // Adiciona o ID ao array
  					
					carQtd.push( qtd);
					qtdTotal = (qtdTotal*1)+(qtd*1) ;
					carTotal = (carTotal*1)+(price*qtd);
					$("#cart-items").append("<div class='fh5co-food-menu' id='item"+id+"'><div class='fh5co-food-desc1 '><figure><img src='images/"+id+".jpg' style='width:20%;height:100%;float:left;' class='img-responsive'></figure><div><h3>"+nome+"</h3><p>"+qtd+" Unidades | Preço p/U :R$ "+preco+"</p><button class='btn btn-danger delete-item' id='" + id + "|"+preco+"|"+qtd+"'><i class='fas fa-trash'></i> Excluir</button></div></div></div>");
					$("#cart-total").text(carTotal.toFixed(2));
					if(qtdTotal>0){
						$('#modal-footer').html('<button id="finalComprar" class="btn btn-info">Finalizar Compra</button>')
					}else{
						$('#modal-footer').html('')
					}
						swal('Item adicionado ao seu carrinho!',{icon:'success'});
						$('#modalItem').fadeOut();
					}else{
						swal('Item já está adicionado ao seu carrinho!',{icon:'warning'});
						$('#modalItem').fadeOut();
					}
				}

				//começo guardar venda
				$(document).on('click', '#finalComprar', function() {
					swal({
  title: 'Deseja confirmar a venda?',
  icon: 'warning',
  buttons: {
    nao: {
      text: 'Não',
      value: 'nao',
    },
    sim: {
      text: 'Sim',
      value: 'sim',
    },
  },
}).then((value) => {
  if (value === 'sim') {
    let urlAtual = window.location.href;
    let urlClass = new URL(urlAtual);
    let cli = urlClass.searchParams.get('index');
    $.post(
      'crud_card/inVenda.php',
      { cli: cli, id: carItems, cQtd: carQtd, qT: qtdTotal, pT: carTotal },
      function (dadoIn) {
        if (dadoIn !== 'Error') {
          if (dadoIn !== '1') {
            swal('Seu pedido chegará em breve!', { icon: 'success' });
            // reinicia valores do carrinho
			window.setTimeout('location.reload()',2000)
          } else {
            swal('Erro no servidor!', { icon: 'error' });
          }
        } else {
          swal(
            'Erro - Dados com problema',
            'Consulte o restaurante/técnico',
            { icon: 'error' }
          );
        }
      }
    );
  } else if (value === 'nao') {
    swal('Compra cancelada!', '', {icon:'info'});
  }
});

				})


				
				//começo deleta
				$(document).on('click', '.delete-item', function() {
				var itemArray = $(this).attr('id').split("|");
				var itemId = itemArray[0];
				var itempreco = itemArray[1];
				var itemQtd = itemArray[2];
				var itemIndex = -1;

				for (var i = 0; i < carItems.length; i++) {
					if (carItems[i] === itemId) {
					itemIndex = i;
					break;
					}
				}
				if (itemIndex !== -1) {
					carItems.splice(itemIndex, 1);
					$("#item" + itemId).remove();//tira o item
					qtdTotal = (qtdTotal*1)-(itemQtd*1) ;
					carTotal = (carTotal*1)-(itempreco*(itemQtd*1));
					$("#cart-total").text(carTotal.toFixed(2));
					carQtd.splice(itemIndex, 1);//tira a quantidade
					if(qtdTotal>0){
						$('#modal-footer').html('<button id="finalComprar" class="btn btn-info">Finalizar Compra</button>')
					}else{
						$('#modal-footer').html('')
					}
					// Atualize o total do carrinho e a quantidade total aqui
				}
				});//fim deleta do carrinho

				// Manipulador de evento para adicionar um item ao carrinho de compras
				$(".adicionaItem").click(function() {
					let id = $(this).attr('id');
					let qtd = $('#qtd').text();
					let price=preco;
					
					var urlAtual = window.location.href;
					var urlClass = new URL(urlAtual); 
					var cli = urlClass.searchParams.get("index");
					if(cli){
						if(qtd>0){
						addToCart(id,qtd,price)
						}
					}else{
						$('#modalItem').fadeOut();
						swal('Faça Login para continuar',{icon:'warning'});
					}
				});
				/*fim carrinho*/
			})
			}//fim da clickDeItem
			$('#fecharItem').click(function(){
				$('#modalItem').fadeOut();
			})
			//fim modal de Item
			$('#login').click(function(){
				window.location.href = "logincli.php";
			})
			$('#sair').click(function(){
				window.location.href = "sair.php";
			})
	</script>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
				var urlAtual = window.location.href;
    			var urlClass = new URL(urlAtual);
			if(urlClass.searchParams.get("loginS")!=null){
				swal({
					title: "Logout Concluído!",
					buttons: {
						confirm: {
							text: "OK",
							value: true,
							visible: true,
							closeModal: true,
						},
					},
					icon: 'success',
				}).then((value) => {
						if (value) {
							window.location.href = "index.php"
						}
				});
				swal('Logout Concluído!',{icon:'success'})
    		}
	</script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	<!-- Sweetalert -->    
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>

