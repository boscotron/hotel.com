<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/sub_header_short_2.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <h1 class = "jmy_web_div" data-page="contacto" id="contactnos" data-editor= " no ">
        <?php $this->pnt('contactnos','Contactanos'); ?></h1>

    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-4"></div>        
        <div class="col-md-4">
            <h4 class="jmy_web_div text-center display-4" data-page="contacto" id="BienvenidoH" data-editor= " no ">
                <?php $this->pnt('BienvenidoH','<em></em>Convertir número a Letra'); ?>
            </h4>
        </div>
        <div class="col-md-4"></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
           
                <div class="form-group">
                    <label >Ingesa tu Número</label>
                    <input type="text" id="numero" placeholder="Ingesa Número">
                </div>
                <button type="button" id="convertir" class="btn btn-primary">Enviar</button>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
       
        <div class="col-md-12 py-5" >
            <div id="respuesta" > </div>
            
        </div>
        
    </div>

</div>
	
 <!--  <form id="miId"><div id="mostrardatos"></div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="text"  name="habitacion" type="text" id="habitacion" placeholder="habitacion" >
                    </div>
                    <div class="col-md-6">
                        <input type="text"  name="personas" type="text" id="personas" placeholder="personas " required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <input type="text"  name="familia" type="text" id="familia" placeholder="familia">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <select id="inputState" class="form-control">
                                <option selected>Selecciona...</option>
                                <option value="uno" >uno</option>
                                <option value="dos" >dos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <input  type="button" id="enviar" value="Enviar" >
            </form> -->