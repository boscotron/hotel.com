<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, Cama y desayuno, alojamiento, viaje, motel">
    <meta name="description" content="Hotel Pozo Viejo">
    <meta name="author" content="Ansonika">
    <title>Hotel Pozo Viejo</title> 

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>css/base.css" rel="stylesheet">
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>css/DateTimePicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>css/blog.css">
    
    <!--[if lt IE 9]> <![endif]-->
      <script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/html5shiv.min.js"></script>
      <script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/respond.min.js"></script>
   

</head>

<body>

<div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>


    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    
    
     <!-- Header ================================================== -->
    <header>
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3 jmy_web_slider" data-page="header"  data-tabla="vistaweb" id="logo_topmarco" data-marco="logo_topmarco" <?php 
										  $va[] = [ "type"=>"imagen",
											"id"=>"logo_top_img",
											 "width"=>"205",
											 "height"=>"98",
											 "url"=>$this->url_templet(["return"=>true]).'img/2logo_pozo_inicio.png' ];  ?>  data-var='<?php echo json_encode($va); ?>'>
											 
											 <a href="<?php $this->url_inicio(); ?>"><img alt="" title="" id="logo_top_img" src="<?php $this->pnt('logo_top_img',$this->url_templet(['return'=>true]).'img/2logo_pozo_inicio.png',
										  ["secundario"=>"header"] ); ?>"/></a>

                
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu movil</span></a>
            <div class="main-menu">
                <div id="header_menu">
                     <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/logo_m.png" width="141" height="40" alt="" data-retina="true">
                </div><br><br> 
                <a href="<?php echo RUTA_ACTUAL; ?>" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li class="submenu">
						<a href="<?php echo RUTA_ACTUAL; ?>" class="show-submenu">Pozo Viejo</a>
                    </li>
					<li>
						<a href="<?php echo RUTA_ACTUAL; ?>serviciohotel">Servicios</a>
					</li>
					<?php /*
                     <li class="submenu">
						<a href="javascript:void(0);" class="show-submenu">Restaurante</a>                   
                    </li>
					<li>
						<a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#0">Sal&oacute;n Campestre</a>
					</li> */?>
                    <li>
						<a href="<?php echo RUTA_ACTUAL; ?>contacto">Contacto</a>
                    </li>
                    <li>
						<a href="<?php echo RUTA_ACTUAL; ?>temazcal">TEMAZCAL</a> 
					</li>
                </ul> 
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->