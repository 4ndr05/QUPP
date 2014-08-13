<?php
/*
 * Recibe como parametros de vista 
 * los paquetes $paquetes = array({},{},{});
 * los estados $estados = array();
 * las razas $razas = array();
 * 
 */


?>

<div>
<div class="numeros_publicar_anuncio_mini">
    <ul class="listado_numeros_anuncio_mini">
        <li data-titulo="Selecciona la sección de publicación" data-p="paso_uno" class="numero_seccion_mini view_step">
            1
        </li>
        <li data-titulo="Indica tu tipo de anuncio" data-p="paso_dos">2</li>
        <li data-titulo="Completa tu información" data-p="paso_tres">3</li>
        <li data-titulo="Vista previa de tu anuncio" data-p="paso_cuatro">4</li>
        <li data-titulo="Detalle de compra:" data-p="paso_cinco">5</li>
    </ul>
</div>
<div class="crerar_publicar_anuncio_mini">
    <img src="<?php echo base_url() ?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>
</div>
<br/>

<div class="descipcion_pasos_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR ANUNCIO</div>
<div class="instrucciones_pasos_mini">Selecciona la sección de publicación</div>
<div class="contenido_indicacion_mini">
<form id="p_form" name="p_form" method="post" action="<?=base_url()?>venta/anuncio" enctype="multipart/form-data">
<!--pasos-->
<!--paso uno-->
<div id="paso_uno" class="paso view_step" style="height: 190px;">
    <div style="position: relative;">
        <img src="<?php echo base_url() ?>images/pero_paso_uno.png" class="perro_paso_uno_mini"/>

        <div class="radios_secciones_mini">
            <input type="radio" id="radio4" name="seccion" value="3" class="css-checkbox"/>
            <label for="radio4" class="css-label radGroup2">Cruza</label>
            <br/>
            <input type="radio" id="radio5" name="seccion" value="2" class="css-checkbox"/>
            <label for="radio5" class="css-label radGroup2">Venta</label>
            <br/>
            <input type="radio" id="radio6" name="seccion" value="6" class="css-checkbox"/>
            <label for="radio6" class="css-label radGroup2">Adopción</label>
            <br/>
            <input type="radio" id="radio7" name="seccion" value="7" class="css-checkbox"/>
            <label for="radio7" class="css-label radGroup2">Perros perdidos</label>
        </div>
    </div>
</div>
<!--paso dos-->
<div id="paso_dos" class="paso contenedor_paquetes_mini">
<div style="display: inline-block; margin-bottom: 30px;">
<div class="paquetes_izquierda_mini">
    <label>
        <div class="title_paquetes_mini">
            <div class="lateral_lite_mini"></div>
            <img src="<?php echo base_url() ?>images/perrito_lite.png" class="margen_mini" width="29"
                 height="29"/> <font class="title_paquetes_titilos_mini">
                PAQUETE <?php echo strtoupper($paquetes[0]->nombrePaquete) ?> </font>
        </div>
        <div class="precio_paquete_lite_mini">
            <?php if ($paquetes[0]->precio == 0): ?>
                <div class="el_titulo_paquete_lite_mini"> Gratis</div>
                <div class="descripcion_precio_paquete_lite_mini">al crear tu usuario</div>
            <?php else: ?>
                <div class="precio_paquete_regular_mini"> $<?php echo $paquetes[0]->precio ?></div>
            <?php endif; ?>
        </div>
        <div class="descripcion_paquetes_mini">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes_mini">
                <li>
                    * <?php echo $paquetes[0]->cantFotos ?> fotos
                </li>

                <li>
                    * Texto de <?php echo $paquetes[0]->caracteres ?> caracteres
                </li>
                <li>
                    * Vigencia de <?php echo $paquetes[0]->vigencia ?> días.
                </li>
            </ul>
        </div>
        <div class="iconos_paquetes_mini">
            <ul>
                <li>
                    <?php if ($paquetes[0]->cantFotos > 0): ?>
                        <div class="cantidades_detalle_paquete_lite_mini"> <?php echo $paquetes[0]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"> <?php echo $paquetes[0]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_lite_mini"> <?php echo $paquetes[0]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto.png" width="34" height="26"/>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_lite_mini"> <?php echo $paquetes[0]->vigencia ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario.png" width="34" height="26"/>
                </li>
                <li>

                    <?php if ($paquetes[0]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"> <?php echo $paquetes[0]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if ($paquetes[0]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_lite_mini"> <?php echo $paquetes[0]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_lite.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"> <?php echo $paquetes[0]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <input type="radio" style="margin-left:100px;" data-vigencia="<?php echo $paquetes[0]->vigencia ?>"
               data-np="<?php echo $paquetes[0]->nombrePaquete ?>" name="paquete"
               value="<?php echo $paquetes[0]->paqueteID ?>" data-precio="<?php echo $paquetes[0]->precio ?>" id="RadioGroup1_0"/>
    </label>
</div>
<div class="paquetes_mini">
    <label>
        <div class="title_paquetes_mini">
            <div class="lateral_regular_mini"></div>
            <img src="<?php echo base_url() ?>images/perrito_regular.png" class="margen" width="29"
                 height="29"/>
            <font class="title_paquetes_titilos_mini">
                PAQUETE <?php echo strtoupper($paquetes[1]->nombrePaquete) ?> </font>
        </div>
        <div class="precio_paquete_regular_mini"> $<?php echo $paquetes[1]->precio ?></div>

        <div class="descripcion_paquetes_mini">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes_mini">
                <li>
                    * <?php echo $paquetes[1]->cantFotos ?> fotos
                </li>
                <li>
                    * Texto de <?php echo $paquetes[1]->caracteres ?> caracteres
                </li>
                <li>
                    * <?php echo $paquetes[1]->videos ?> video
                </li>
                <li>
                    * <?php echo $paquetes[1]->cupones ?> cupones
                </li>
                <li>
                    * Vigencia de <?php echo $paquetes[1]->vigencia ?> días.
                </li>
            </ul>
        </div>
        <div class="iconos_paquetes_mini">
            <ul>
                <li>
                    <?php if ($paquetes[1]->cantFotos > 0): ?>
                        <div class="cantidades_detalle_paquete_regular_mini"><?php echo $paquetes[1]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_regular.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"><?php echo $paquetes[1]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_regular_mini"> <?php echo $paquetes[1]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto_regular.png" width="34" height="26"/>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_regular_mini"><?php echo $paquetes[1]->vigencia; ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario_regular.png" width="34" height="26"/>
                </li>
                <li>
                    <?php if ($paquetes[1]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_regular_mini"><?php echo $paquetes[1]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_regular.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"><?php echo $paquetes[1]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if ($paquetes[1]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_regular_mini"><?php echo $paquetes[1]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_regular.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"><?php echo $paquetes[1]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <input type="radio" style="margin-left:100px;" data-vigencia="<?php echo $paquetes[1]->vigencia ?>"
               data-np="<?php echo $paquetes[1]->nombrePaquete ?>" data-precio="<?php echo $paquetes[1]->precio ?>"
               name="paquete"
               value="<?php echo $paquetes[1]->paqueteID ?>" id="RadioGroup1_1"/>
    </label>
</div>

<div class="paquetes_derecha_mini">
    <label>
        <div class="title_paquetes_mini">
            <div class="lateral_premium_mini"></div>
            <img src="<?php echo base_url() ?>images/perrito_premium.png" class="margen" width="29"
                 height="29"/> <font class="title_paquetes_titilos_mini">
                PAQUETE <?php echo strtoupper($paquetes[2]->nombrePaquete) ?> </font>
        </div>
        <div class="precio_paquete_premium_mini"> $<?php echo $paquetes[2]->precio ?></div>

        <div class="descripcion_paquetes_mini">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes_mini">
                <li>
                    * <?php echo $paquetes[2]->cantFotos ?> fotos
                </li>
                <li>
                    * Texto de <?php echo $paquetes[2]->caracteres ?> caracteres
                </li>
                <li>
                    * <?php echo $paquetes[2]->videos ?> video
                </li>
                <li>
                    * <?php echo $paquetes[2]->cupones ?> cupones
                </li>
                <li>
                    * Vigencia de <?php echo $paquetes[2]->vigencia ?> días
                </li>
            </ul>
        </div>
        <div class="iconos_paquetes_mini">
            <ul>
                <li>
                    <div class="cantidades_detalle_paquete_premium_mini"> <?php echo $paquetes[2]->cantFotos ?></div>
                    <img src="<?php echo base_url() ?>images/icono_camara_premium.png" width="34" height="26"/>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_premium_mini"> <?php echo $paquetes[2]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto_premium.png" width="34" height="26"/>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_premium_mini"><?php echo $paquetes[2]->vigencia ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario_premium.png" width="34" height="26"/>
                </li>
                <li>
                    <?php if ($paquetes[2]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_premium_mini"><?php echo $paquetes[2]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_premium.png" width="34" height="26"/>

                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"><?php echo $paquetes[2]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if ($paquetes[2]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_premium_mini"><?php echo $paquetes[2]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_premium.png" width="34" height="26"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of_mini"><?php echo $paquetes[2]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png" width="34" height="26"/>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <input type="radio" style="margin-left:100px;" data-vigencia="<?php echo $paquetes[2]->vigencia ?>"
               data-np="<?php echo $paquetes[2]->nombrePaquete ?>" data-precio="<?php echo $paquetes[2]->precio ?>"
               name="paquete"
               value="<?php echo $paquetes[2]->paqueteID ?>" id="RadioGroup1_2"/>
    </label>
</div>
</div>
</div>

<!--paso tres descipcion_pasos_miniD -->
<div id="paso_tres" class="paso contenido_indicacion_formulario_mini">
    <input type="hidden" id="cantFotos" name="cantFotos" value=""/>
    <p class="margen_15_left_mini">Nombre: <input required="required" type="text" name="nombre"
                                                  class="background_morado_35_mini" readonly="readonly"
                                                  value="<?php echo $this->session->userdata('nombre'); ?>"/>
        Apellido:
        <input required="required" type="text" name="apellido" class="background_morado_55_mini" readonly="readonly"
               value="<?php echo $this->session->userdata('apellido') ?>"/>
        Correo electrónico: <input required="required" type="text" name="correo" class="background_morado_55_mini"
                                   readonly="readonly" value="<?php echo $this->session->userdata('correo') ?>"/></p>
    <br/>

    <p class="margen_15_left_mini"> Teléfono: <input name="telefono" type="text"
                                                     class="background_gris_35_mini preview" value="<?php echo $this->session->userdata('telefono');?> " required="required"/> Mostrar
        teléfono en el anuncio: <select required="required" name="mostrar_telefono" class="background_gris_35_mini preview">
            <option value="">--</option>
            <option value="1"> Si</option>
            <option value="0"> No</option>
        </select>
    </p>
    <br/>

    <div class="sub_instrucciones_pasos_mini"> Detalles del aunucio</div>
    <br/>

    <p class="margen_15_left_mini">Sección: <input required="required" type="text" name="seccion_texto" id="seccion" class="background_morado_55_mini" readonly="readonly"/> Paquete:
        <input required="required" type="text" name="paquete_texto" id="paquete_texto" class="background_morado_55_mini"
               readonly="readonly"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vencimiento: <input type="text" required="required" name="vigencia_texto" class="background_morado_mini" id="vigencia_texto"
                                                                                                    readonly="readonly"/></p>
    <br/>

    <p class="margen_15_left_mini"> Titúlo: &nbsp;&nbsp;&nbsp; <input required="required" type="text" name="titulo" id="titulo" class="background_gris_55_mini preview"/> Estado
        &nbsp;&nbsp;&nbsp;&nbsp;<select required="required" name="estado" class="background_gris_100_mini preview" id="estado">
            <option value="">--</option>
            <?php foreach ($estados as $edo): ?>
                <option value="<?php echo $edo->estadoID;?>"><?php echo $edo->nombreEstado;?></option>
            <?php endforeach; ?>
        </select>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ciudad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input required="required" class="background_gris_mini preview" name="ciudad" type="text" id="ciudad"/>
    </p>
    <br/>

    <p class="margen_15_left_mini"> Genéro:
        <select required="required" type="text" name="genero" class="background_gris_100_mini preview" id="generoP">
            <option value=""> ---</option>
            <option value="0"> Hembra</option>
            <option value="1"> Macho</option>
        </select>

        Raza &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select required="required" name="raza" class="background_gris_100_mini preview" id="razaP">
            <option value="">--</option>
            <?php foreach ($razas as $r): ?>
                <option value="<?php echo $r->razaID ?>"><?php echo $r->raza ?></option>
            <?php endforeach; ?>
        </select>
        Precio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input required="required" class="preview" name="precio" type="text" id="precio"/>
    </p>
    <br/>

    <p class="margen_15_left_mini">
        Descripción:<textarea required="required" class="background_gris_mini preview" name="descripcion" id="descripcion" cols="95" rows="3"></textarea><br />
    Caracteres:<input name="meh" type="text" id="meh" size="3" readonly="readonly" />
    <input name="caracteresN" type="text" id="caracteresN" size="3" readonly="readonly" />
    </p>
    <br/>
	
    <p class="margen_15_left_mini" id="videoY">
        Link de video <input type="text" name="url_video[]" id="url_video" size="98" class="preview"/><img
            src="<?php echo base_url() ?>images/logo_youtube.png"/><a href="#" id="addVid" class="addVid" style="font-size:9px; margin-top:8px;" data-rel="">Agregar</a><br />
    </p>

    <p class="margen_15_left_mini"><a href="<?php echo base_url() ?>#"> Tutorial para subir video a <img
                src="<?php echo base_url() ?>images/logo_youtube.png" width="43" height="16"/> </a></p>
    <br/>

    <p class="margen_15_left_mini">

        <!-- <iframe src="<?php echo base_url() ?>../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
    </p>
    
    <!--imagenes-->
    <script>
    jQuery(document).ready(function(){
    	$('#files').change(function() {
 			// $('#p_form').submit();     
   	 	});
    });
    </script>
 
     <input type="file" id="files" name="files[]" multiple />

<output id="list" class="preview"></output>

<script>
  function handleFileSelect(evt) {
     
    var files = evt.target.files; // FileList object
	var fotos = parseInt(document.getElementById('cantFotos').value);
	if(files > fotos){
		document.getElementById("msj_paso").innerHTML="Seleccionó más fotos de las permitidas"+"("+fotos+")";
	}
	console.log(files.length, fotos);
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '" width="50"/><a href="#" class="del">X</a>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
    
    //Preview
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.getElementById('slideshow_publicar_anuncio');
          span.innerHTML = ['<img src="', e.target.result,
                            '" title="', escape(theFile.name), '" width="294" height="200"/>'].join('');
          document.getElementById('slideshow_publicar_anuncio').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
<br />
    <!--imagenes-->
    
    
    <div style="width:800px; height:auto;">
       <?php  if ($banner !== null && !empty($banner)) {
                    foreach ($banner as $contenido) {
                        if ($contenido->zonaID == 9 && $contenido->posicion == 2 && $contenido->seccionID == $seccion) {
                            ?>    
                            <div>
                                <h3><?php echo $contenido->texto; ?></h3>
                            </div>
                            <?php }
                        }
                    } ?>
    </div>

</div>
<!--paso cuatro-->
<div id="paso_cuatro" class="paso contenido_indicacion_formulario_mini">
<div class="leer_anuncio_mini">
    <div class="contenedor_galeria_mini">
        <div id="slideshow_publicar_anuncio" class="picse_mini">
        
           <img src="<?php echo base_url() ?>images/anuncios/02/1.png" width="294" height="200"/>
            <img src="<?php echo base_url() ?>images/anuncios/02/2.png" width="294" height="200"/>
            <img src="<?php echo base_url() ?>images/anuncios/02/3.png" width="294" height="200"/>
            <!-- <img src="<?php echo base_url() ?>images/anuncios/02/1.png" width="294" height="200"/>-->
            
        </div>
    </div>
    <div class="datos_general_mini">
        <div class="titulo_anuncio_publicado_mini">
            <script>
            jQuery(document).ready(function(){
                
                
                $(".preview").change(function() {
                    console.log($(this).val(),$('#estado option:selected'));            
                $("#tituloPrev").html($("#titulo").val());
                $("#precioPrev").html($("#precio").val());
                $("#seccionPrev").html($("#seccion").val());
                var genero = $('#generoP option:selected').html();
                $("#generoPrev").html(genero);
                var raza = $('#razaP option:selected').html();
                $("#razaPrev").html(raza);
                var lugar = $('#estado').html();
                $("#lugarPrev").html(lugar+'('+$("#ciudad").val()+')');
                $("#descripcionPrev").html($("#descripcion").val());
                var src = $("#url_video").val();
                $("#videoPrev").html('<iframe class="youtube_video_mini" src="'+src+'"></iframe>');
                var img = $("#list").val();
                console.log(img);
                });
            });
            
            </script>
            
        
         <label><p id="tituloPrev"></p></label>
        </div>
        <br/>
        <strong>
            Precio: <label id="precioPrev"></label>
        </strong>
        <br/>
        <font> Fecha de publicacion:<label id="fechaPrev"><?=date('d-m-Y');?></label></font>
        <br/>
        <font>Sección: <label id="seccionPrev"></label></font>
        <br/>
        <font>Raza: <label id="razaPrev"></label></font>
        <br/>
        <font>Género: <label id="generoPrev"></label></font>
        <br/>
        <font>Lugar: <label id="lugarPrev"></label></font>
        <br/>
        <br/>
        <ul class="boton_naranja_mini">
            <li onclick="muestra('contenedor_contactar_previo');">
                Contactar al anunciante
            </li>
        </ul>
        <br/>
        <ul class="boton_gris_mini">
            <li>
                <img src="<?php echo base_url() ?>images/favorito.png"/>Agregar a Favoritos
            </li>
        </ul>
    </div>
    <br/>

    <div class="contenedor_del_detalle_mini">

        <div class="titulo_anuncio_publicado_mini">
            MÁS DETALLES
        </div>
        <div class="descripcion_del_anuncio_mini">
           <label id="descripcionPrev"></label>
        </div>
        <br/>
        <ul class="boton_naranja_dos_mini">
            <li id="ver_video" onclick="$('#video_previo').toggle();">
                Ver video
            </li>
        </ul>
        <div id="video_previo" class="desplegar_detalles_mini" style="display:none;">
            <br/>

            <div class="titulo_anuncio_publicado_mini">
                VIDEO
            </div>
            <div id="videoPrev">
            
            </div>
        </div>
        <ul class="boton_rojo_dos_mini">
            <li>
                <img src="<?php echo base_url() ?>images/alert.png"/>
                Denunciar Anuncio
            </li>
        </ul>
        <div class="consejos_advertencias_mini">
            - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay
            millones de perros sin hogar que deben ser sacrificados.
            <br/>
            - Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar
            antes de comprar uno.
            <br/>
            - Infórmate de los cuidados especiales que debes de tener con la raza específica que estás
            comprando.
            <br/>
            - NUNCA compres una nueva mascota sin verla físicamente antes.
            <br/>
            - NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser
            rastreado, como lo son Money Gram y Western Union.
            <br/>
            - NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que
            corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate
            de que el nombre del criador esté en el certificado.
            <br/>
            - Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
            <br/>
            - El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
        </div>
       
    </div>
    <br/>
</div>
</div>
<!--paso cinco-->
<div id="paso_cinco" class="paso">
    <div class="tipo_paquete_pago_mini">
    
        <div id="nimagenpaquete"></div>
    </div>
    <div class="divisor_morado_mini"></div>
    <div class="descripcion_paquete_pago_mini">
        <div class="titulo_descripcion_paquete_mini"> INCLUYE</div>
        <div style="padding:15px;">
            <p> * <label id="nfotos"></label> fotos </p>

            <p>* Texto de <label id="ncaracteres"></label> caracteres </p>

            <p>* Vigencia de <label id="nvigencia"></label> días. </p>
        </div>
    </div>
    <div class="divisor_morado_mini"></div>
    <div class="tipo_paquete_pago_mini">
        <div class="titulo_descripcion_paquete_mini"> TOTAL</div>
        <div class="total_compra_mini"><p> $ <label id="nprecio"></label> <font class="moneda_mini"> MX </font></p>
        </div>
    </div>
    <br/>
    <br/>

    <div style="margin-top:150px;">
        <div class="sub_instrucciones_pasos_mini"><img style=" margin-left:15px;"
                                                       src="<?php echo base_url() ?>images/mini_cupon.png"/>
            Cupones<font></font></div>
        <div style="padding:15px;">
            <p>Si lo deseas pudes usar alguno de tus cupones:</p>
            <!--<form class="radios_cupones_mini" action="">-->
            <?php if($cupones != null):
					foreach($cupones as $cupon):
					if($cupon->tipoCupon == 2):?>
            <input type="radio" name="descuento" value="<?=$cupon->valor;?>" id="radio_pago1" class="css-checkbox"/><label
                for="radio_pago1" class="css-label radGroup2"> <?=$cupon->valor;?>% de descuento</label>
            <br/>
           <!-- <input type="radio" name="descuento" value="5" id="radio_pago2" class="css-checkbox" checked="checked"/>
            <label for="radio_pago2" class="css-label radGroup2">5% de descuento</label>
            <br/>
            <input type="radio" name="descuento" value="20" id="radio_pago3" class="css-checkbox"/><label
                for="radio_pago3" class="css-label radGroup2"> 20% de descuento</label>
            <br/>-->
			<?php endif;
				endforeach;
			else:
			echo 'No hay cupones disponibles';
			endif;	?>
        </div>
    </div>
   
    <ul class="morado_15_mini">
        <li onclick="">
           <input type="submit" value="Pagar">
        </li>
    </ul>
</div>
</form>
<!--boton se siguiente paso-->
<br/>

<div id="btn_sig" style="display: block; text-align: right; padding-right: 10px;">
    <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
    <ul class="morado_mini" style="display: inline-block;margin-top:-200px;">
        <li class="sig_paso">Continuar</li>
    </ul>
</div>


</div>
</div>
</div>
<script>
    $(function () {
        $('.paso').hide();
        $('#paso_uno').show().addClass('paso_show');

        $('#btn_sig .sig_paso').on('click', function () {
            var sig_paso = $('.paso_show').next('.paso');
			console.log($('.paso_show').next('.paso').prop('id'));
			var num_paso = $('.paso_show').next('.paso').prop('id');
			if(num_paso == 'paso_cinco'){
				oculta('btn_sig');
			}
            if (revision_step($('.paso_show'))) {
                $('.paso_show').removeClass('paso_show').hide();
                sig_paso.show().addClass('paso_show');
                $('.listado_numeros_anuncio_mini li.numero_seccion_mini').removeClass('numero_seccion_mini');
                var sel_paso = $('.listado_numeros_anuncio_mini').find('[data-p="' + sig_paso.prop('id') + '"]');
                sel_paso.addClass('numero_seccion_mini view_step');
                $('.instrucciones_pasos_mini').text(sel_paso.data('titulo'));
                $('#msj_paso').text("");
                add_step_move();
            }
        });

        function add_step_move() {
            $('.listado_numeros_anuncio_mini li.view_step').on('click', function () {
                $('.listado_numeros_anuncio_mini li.numero_seccion_mini').removeClass('numero_seccion_mini');
                $(this).addClass('numero_seccion_mini');
                var paso = $(this).data('p');
                var titulo_paso = $(this).data('titulo');

                $('.instrucciones_pasos_mini').text(titulo_paso);

                $('.paso').removeClass('paso_show').hide();
                $('#msj_paso').text('');
                $('#' + paso).show().addClass('paso_show');
                $('.instrucciones_pasos_mini').text(titulo_paso);
            });
        }

        function revision_step(element) {
            if (element.prop('id') === 'paso_uno') {
                $('#msj_paso').text("Debe seleccionar una sección");
                return $('#p_form input[name=seccion]:checked').val() === undefined ? false : true;
            }

            if (element.prop('id') === 'paso_dos') {
                $('#msj_paso').text("Debe seleccionar un paquete");
                return $('#p_form input[name=paquete]:checked').val() === undefined ? false : true;
            }

           if (element.prop('id') === 'paso_tres') {
                $('#msj_paso').text("Debe completar todos los campos requeridos");
                var obj = $('#paso_tres [name]:required').serialize().split('&');

                for (var i = 0; i < obj.length; i++) {
                    var field = obj[i].split('=');
                    if (field[1] === '') {
                        return false;
                    }
                }
                return true;
            }
            return true;
        }

        add_step_move();

        $('.paquete_comprar').on('click', function () {
            <?php if (!is_logged()): ?>  
                muestra('contenedor_login');
                oculta('contenedor_publicar_anuncio');
            <?php else :?>               
           
            var paquete_val = $(this).data('paquete');

            $('#paso_dos [data-np="' + paquete_val.nombre + '"]').prop('checked', true);
            $('#paso_tres [name=paquete_texto]').val(paquete_val.nombre);
            $('#paso_tres [name=vigencia_texto]').val(paquete_val.vigencia);
            $('#paso_tres [name=cantFotos]').val(paquete_val.cantFotos);
            $('#paso_tres [name=caracteresN]').val(paquete_val.caracteres);
			
			if(paquete_val.id == 1){
				var imagen = '<img src="<?php echo base_url() ?>images/pago_lite.png"/>';			}
			
			if(paquete_val.id == 2){
				var imagen = '<img src="<?php echo base_url() ?>images/pago_regular.png"/>';			}
				
			if(paquete_val.id == 3){
				var imagen = '<img src="<?php echo base_url() ?>images/pago_premium.png"/>';			}
			
            $('#nimagenpaquete').html(imagen);
			$('#nvigencia').html(paquete_val.vigencia);
            $('#nfotos').html(paquete_val.cantFotos);
            $('#ncaracteres').html(paquete_val.caracteres);
			$('#nprecio').html(paquete_val.precio);
			//$('#nvideos').val(paquete_val.videos);
			var cantidadVideos = paquete_val.videos;
			var contador = 0; 
			$(".addVid").click(function(e){
        		e.preventDefault(); 
				
				console.log(contador,cantidadVideos);
				
		$('<p id="video"> Link de video <input type="text" name="url_video[]" id="url_video" class="url_video" size="98" class="preview"/><img src="<?php echo base_url() ?>images/logo_youtube.png"/> <a href="#" id="eliminar" class="eliminar" style="font-size:9px;">Eliminar</a><br /></p>').appendTo('#videoY');

		contador++;
        
   	 	});
		$("body").on("click",".eliminar", function(e){
            $(this).parent('p').remove(); 
        return false;
   		 });
			console.log(paquete_val.videos);
            $('#contenedor_publicar_anuncio').fadeIn();
            <?php endif;?>
        });

        $('textarea').keyup(function(e) {
             var tval = $('#descripcion').val(),
             tlength = tval.length, 
             set = $('#caracteresN').val(),
            remain = parseInt(set - tlength);
            $('#meh').val(remain);
            if (remain <= 0) {
                $('#descripcion').val((tval.substring(0,set)));
             }
        });

        
        $('#paso_dos [name=paquete]').on('change', function () {
            $('#paso_tres [name=paquete_texto]').val($(this).data('np'));
            $('#paso_tres [name=vigencia_texto]').val($(this).data('vigencia'));
            $('#paso_tres [name=precio]').val($(this).data('precio'));
        });
        
         $('#paso_tres [name=paquete]').on('change', function () {
            
        });

        $('#paso_uno [name=seccion]').on('change', function() {
            $('#paso_tres [name=seccion_texto]').val($(this).next().text());
        });
		
		$('#paso_cuatro [name=seccion]').on('change', function() {
           alert('paso 4');
        });
        
        $("body").on("click",".del", function(e){
            $(this).parent('span').remove(); 
        return false;
    });

    });


    
</script>