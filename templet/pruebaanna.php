
    
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/sub_header_short_2.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <h1 class = "jmy_web_div" data-page="contacto" id="contactnos" data-editor= " no ">
            <?php $this->pnt('contactnos','Contactanos'); ?></h1>

		</div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
	
        
    <div class="container_styled_1">
        <div class="container margin_60">

    <h2 class="jmy_web_div" data-page="contacto" id="BienvenidoH" data-editor= " no ">
		<?php $this->pnt('BienvenidoH','<em></em>Bienvenido a Hotel-Restaurante'); ?>
	</h2>
    	<div class="row add_top_20">        
        <div class="col-md-4">
            	<div class="box_style_1">
                <div class="box_contact">
                    <i class="icon_set_1_icon-41"></i>
                    <h4>Dirección</h4>
                    <p>Federal Zaragoza Zacapoaxtla Km 5 s/n<br>Zacapoaxtla, Puebla, Mexico<br>
					Route de Sablet 1023, Marseille</p>
                    </div>
                    <div class="box_contact">
            	<i class="icon_set_1_icon-37"></i>
                <h4>Obtener Ruta</h4>
                <form action="https://www.google.com/maps/place/Hotel+Restaurant+Pozo+Viejo/@19.8437763,-97.5818189,19.13z/data=!4m21!1m15!4m14!1m6!1m2!1s0x85ce01b096693d3f:0x44d87c2a59fadae2!2sCalzada+del+Hueso+151,+El+Vergel+de+Coyoac%C3%A1n+(+Infonavit+El+Hueso),+INFONAVIT+el+Hueso,+04859+Ciudad+de+M%C3%A9xico,+D.F.,+M%C3%A9xico!2m2!1d-99.1354331!2d19.3077598!1m6!1m2!1s0x85da970f1e3180a7:0xa62b0c68427a16ac!2sHotel+Restaurant+Pozo+Viejo,+3+de+Mayo,+Calcahualco,+Puebla!2m2!1d-97.5815555!2d19.8438013!3m4!1s0x85da970f1e3180a7:0xa62b0c68427a16ac!8m2!3d19.8438013!4d-97.5815555" method="get" target="_blank">
                	<div class="form-group">
					<input type="text" name="saddr" placeholder="Ingresa tu punto de partida" class="form-control" />
					<input type="hidden" name="daddr" value="Hotel Restaurant Pozo Viejo, Carretera Estatal Zaragoza-Zacapoaxtla Km. 5, 3 de Mayo, Calcahualco, Pue."/><!-- Write here your end point -->
                    </div>
                    <div class="form-group">
					<button class="btn_1" type="submit" value="Get directions">Ver Ruta</button>
                    </div>
			</form>
            </div>
            </div>
            </div>   
            
        	<div class="col-md-7 col-md-offset-1">
            
            <div id="message-contact"></div>
            <!-- <form action="<?php echo RUTA_ACTUAL ?>app/controlador/correo-comsis.php" method="post"> -->
            
			
            <form method ="post" id="formulario">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text"  name="nombre" type="text" id="nombre" placeholder="Nombre" >
                        </div>
                        <div class="col-md-6">
                            <input type="text"  name="email" type="text" id="email" placeholder="Email " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text"  name="telefono" type="text" id="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                    <textarea data-delay="500"  name="mensaje" type="text" id="mensaje" placeholder="Mensaje"></textarea>

                    <input  type="button" id="enviar" value="Buscar" >
                    <!-- <div id="mostrardatos">

                    </div> -->
                </form>

                <div id="respuesta">
</div>

            </div><!-- End col-md-8 -->    
            
             
        </div><!-- End row -->
    </div><!-- End Container --> </div><!-- End Container -->
	<hr>
    <div class="container">
        <div class="container margin_60"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3752.9090468327117!2d-97.58155500000001!3d19.843801000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa62b0c68427a16ac!2sHotel+Restaurant+Pozo+Viejo!5e0!3m2!1ses!2smx!4v1513290772496" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	  </div></div>

	<div id="toTop"></div><!-- Back to top button -->	
	<div id="dtBox"></div><!-- End datepicker -->
	
	