<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clientes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Font-awesome-->
    <link href="../fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="left-custom-menu-adp-wrap comment-scrollbar"><strong>Admin</strong>
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    
                    <ul class="metismenu" id="menu1">

                                <li><a href="product-busca.php"><i class='fas fa-shopping-cart'></i><span class="mini-sub-pro"> Produtos</span></a></li>
                                <li><a href="cli-busca.php"><i class='fas fa-user'></i><span class="mini-sub-pro"> Clientes</span></a></li>
                                <li><a href="venda-busca.php"><i class='fas fa-money'></i><span class="mini-sub-pro"> Venda</span></a></li>
                                <li><a href='sair.php'><i class='fas fa-sign-out-alt'></i><span class="mini-sub-pro"> Sair</span></a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                    <li><a href="product-busca.php"><i class='fas fa-shopping-cart'></i><span class="mini-sub-pro"> Produtos</span></a></li>
                                <li><a href="cli-busca.php"><i class='fas fa-user'></i><span class="mini-sub-pro"> Clientes</span></a></li>
                                <li><a href="venda-busca.php"><i class='fas fa-money'></i><span class="mini-sub-pro"> Venda</span></a></li>
                                <li><a href='sair.php'><i class='fas fa-sign-out-alt'></i><span class="mini-sub-pro"> Sair</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="product-edit.html">Add Product</a>
                            </div>
                            <table id="example1">
                                <tr>
                                    <th>COD</th>
                                    <th>Nome</th>
                                    <th>Fone</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Opções</th>
                                </tr>
                                
                                <tbody id="tbcli">
                                <?php
                                    include '../banco/banco.php';
                                    $sql = "select * from tbcliente";
                                    $consulta = $conexao->query($sql);
                                    if($consulta){
                                        if ($consulta->num_rows > 0){
                                            while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                                            echo' <tr>
                                            <td>'.$linha['codcli'].'</td>
                                            <td>'.$linha['nome'].'</td>
                                            <td>'.$linha['fone'].'</td>
                                            <td>'.$linha['email'].'</td>
                                            <td>'.$linha['estado'].'|'.$linha['cidade'].'|'.$linha['bairro'].'|'.$linha['rua'].'|'.$linha['CEP'].'</td>
                                            <td>
                                            <a href="altclient.php?id='.$linha['codcli'].'" title="Alterar" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></a>
                                            <button data-toggle="tooltip" id="'.$linha['codcli'].'" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </td>
                                            </tr>';
                                        }
                                        
                                        }
                                    }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>COD</th>
                                    <th>Nome</th>
                                    <th>Fone</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Opções</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
    <script>
        
  $("#tbcli").on('click','button', function(){
                              let iddelete = $(this).attr("id");    
                              swal({
                                title: "DESEJA DELETAR?",
                                text: "procedimento para deletar dados!",
                                icon: "info",
                                buttons: ["Não", "Sim"],
                                dangerMode: true,
                              })//fim swal
                              .then((willDelete) => {
                                if (willDelete) {
                                  $.post('deletecli.php', {id:iddelete} ,function(retorndelete){
                                  if(retorndelete != 'vazio'){
                                    swal("dados deletados", {  icon: "success",	});
                                    window.setTimeout('location.reload()',1000);
                                      }else{
                                        swal("não deletou!", {  icon: "error",	});
                                      }
                                  });//fim do post do delete conceitos
                                } else {
                                swal("não deletou!", {  icon: "error",	});
                                }//fim do if
                              });//fim do then       
  });

    </script>
</body>

</html>