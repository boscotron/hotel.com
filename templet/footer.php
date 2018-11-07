
     <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/2logo_pozo_inicio.png" width="150" height="75" alt="" id="logo_footer" data-retina="true">
					<ul id="contact_details_footer">
          				<li>Federal Zaragoza Zacapoaxtla Km 5 s/n
						<br>Zacapoaxtla, Puebla, Mexico</li>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>">01 233 317 2225</a> / <a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#0">info@hotelpozoviejo.com.mx</a></li>
                    </ul>  
                </div>
                <div class="col-md-2 col-sm-4">
                    <h3>Conocenos</h3>
                    <ul>
                        <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">Nosotros</a></li>
                        <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">Habitaciones</a></li>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>contacto">Contacto</a></li>
                    </ul>
                </div>                
                <div class="col-md-3 col-sm-4">
                    <h3>Pozo Viejo Acepta reservas</h3>
                   <ul>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>#">Ideal para grupos</a></li>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>#">Ideal para niños</a></li>
                        <li><a href="<?php echo RUTA_ACTUAL; ?>#">Terraza o mesas al aire libre</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4"  id="newsletter">
                    <h3>Siguenos</h3>
                    <p>Haz tus reservaciones para cualquier evento, nosotros estamos para llevar a cabo la idea que deseas cumplir.  </p>
					<div id="message-newsletter_2"></div>
						<form method="post" action="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="email" class="form-control">
                          </div>
                            <input type="submit" value="Suscribirme" class="btn_1 white" id="submit-newsletter_2">
                    	</form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/Hotel-Restaurante-Pozo-Viejo-182006218573484/">&nbsp;<i class="icon-facebook"></i></a>
							</li>
                            <?php /* <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-twitter"></i></a></li>
                             <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-google"></i></a></li>
                            <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-instagram"></i></a></li>
                            <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-pinterest"></i></a></li>
                            <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-vimeo"></i></a></li>
                            <li><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#">&nbsp;<i class="icon-youtube-play"></i></a></li>*/ ?>
                        </ul>
                        <p>© 2017 <a target="_blank" href="https://comsis.mx/e/">Comsis</a></p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
	
<!-- COMMON SCRIPTS -->
<script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/jquery-1.11.2.min.js"></script>
<script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/common_scripts_min.js"></script>
<script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>assets/validate.js"></script>
<script src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/functions.js"></script>

<script type="text/javascript" src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>js/DateTimePicker.js"></script>
<script type="text/javascript">$("#dtBox").DateTimePicker();</script>
<script>
  $('.carousel_in').owlCarousel({
    center: true,
    items:1,
    loop:true,
	 autoplay:true,
	 navText: [ '', '' ],
	addClassActive: true,
    margin:0,
    responsive:{
        600:{
            items:1
        },
		 1000:{
            items:2,
			nav:true,
        }
    }
});
</script>

<?php  $this->llamar_js(); ?> 
</body>
</html>
</html>