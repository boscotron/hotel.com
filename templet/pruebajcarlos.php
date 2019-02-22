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
            <h2 class="jmy_web_div text-center" data-page="contacto" id="BienvenidoH" data-editor= " no ">
                <?php $this->pnt('BienvenidoH','<em></em>Bienvenido a Hotel-Restaurante'); ?>
            </h2>
        </div>
        <div class="col-md-4"></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Email</label>
                         <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label >Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label >Direccion</label>
                    <input type="text" class="form-control" id="direccion" placeholder="1234 Main St">
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Ciudad</label>
                        <input type="text" class="form-control" id="ciudad">
                    </div>
                    <div class="form-group col-md-6">
                        <label class=" py-2">Estado</label>
                        <select id="selecciono" class="form-control">
                            <option selected>Selecciona..</option>
                            <option value="uno">Uno</option>
                            <option value="dos">dos</option>
                        </select>
                    </div>
                    
                </div>
                <button type="button" id="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3" >
            
        </div>
        <div class="col-md-6" >
            <div id="respuesta" > </div>
            <div id="mostrardatos"></div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
	
 <!--  <form id="miId">
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