
<script type="text/javascript">
jQuery(document).ready(function(){
	

	
	$("#paso111").click(function() {
	var checked = verifiedRadio(3);
	if(checked == false){
       	$("#error").html('<label>Seleccione una opción</label>');         
        return false;     
    } else {
				muestra('paso_dos'); 
				oculta('paso_uno');
	}
			
     });
	 
	 $("#paso222").click(function() {
	var checked = verifiedRadio(4);
	if(checked == false){
       	$("#error2").html('<label>Seleccione una opción</label>');         
        return false;     
    } else {
				muestra('paso_tres'); 
				oculta('paso_dos');
	}
			
     });
	 
	  
 

});
function verifiedRadio(n){
	var ggg = $('input[type=radio]:checked').size();
	console.log(ggg);
		 	 if($('input[type=radio]:checked').size() < n){
       
				       
       			 return false;     
    		} 
}
</script>
<!-- Inicio Paso UNO -->
<div id="paso_uno">
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li class="numero_seccion_mini">1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Selecciona la sección de publicación</div>
<div class="contenido_indicacion_mini"> 
<img src="images/pero_paso_uno.png" class="perro_paso_uno_mini"/>

<form id="form1" name="form1" method="post" class="radios_secciones_mini" action="">
<p id="error"></p>
<input type="radio" name="radiog_dark" id="radio4" class="css-checkbox" /><label for="radio4" class="css-label radGroup2 seccion"> Cruza</label>
</br>
<input type="radio" name="radiog_dark" id="radio5" class="css-checkbox validate[required,groupRequired[seccion]]" />
<label for="radio5" class="css-label radGroup2 seccion">Venta</label>
</br>
<input type="radio" name="radiog_dark" id="radio6" class="css-checkbox" /><label for="radio6" class="css-label radGroup2 seccion">Adopción</label>
</br>
<input type="radio" name="radiog_dark" id="radio7" class="css-checkbox" /><label for="radio7" class="css-label radGroup2 seccion">Perros perdidos</label>
</form>

</br>

<ul class="morado_mini">
<li>

<a href="#" id="paso111">Continuar</a>
</li>
</ul> 


</div>

</div>

</div>
<!-- FIN anuncio UNO -->


<!-- Inicio paso DOS -->
<div id="paso_dos" style="display:none;">
<div  class="numeros_publicar_anuncio_mini" >
<ul class="listado_numeros_anuncio_mini">
<li >1</li>
<li class="numero_seccion_mini">2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Indica tu tipo de anuncio</div>
<p id="error2"></p>
<div class="contenido_indicacion_mini"> 
<div id="contenedor_paquetes" class="contenedor_paquetes_mini">



    
<div class="paquetes_izquierda_mini">
 <label>
  <div class="title_paquetes_mini">
<div class="lateral_lite_mini"></div>
  <img src="images/perrito_lite.png" class="margen_mini" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE LITE </font>
</div>
<div class="precio_paquete_lite_mini"><div class="el_titulo_paquete_lite_mini"> Gratis </div>  <div class="descripcion_precio_paquete_lite_mini">al crear tu usuario</div> </div>
 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
<li>
* 1 fotos
</li>

<li>
* Texto de 50 caracteres 
</li>
<li>
 * Vigencia de 30 días.
</li>
</ul>
 </div>
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_camara.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_texto.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_calendario.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_of_mini"> 0 </div>
 <img src="images/icono_ticket_of.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_of_mini"> 0 </div>
 <img src="images/icono_video_of.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  
 <input type="radio" style="margin-left:100px;" name="RadioGroup1"  value="radio" id="RadioGroup1_0" />
 </label>
 
</div>




<div class="paquetes_mini">
 <label>
<div class="title_paquetes_mini">
<div class="lateral_regular_mini"></div>
  <img src="images/perrito_regular.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE REGULAR </font>

</div>
<div class="precio_paquete_regular_mini"> $89.00 </div>

 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
<li>
* 5 fotos
</li>
<li>
* Texto de 150 caracteres 
</li>
<li>
* 1 video
</li>
<li>
 * 2 cupones
</li>
<li>
 * Vigencia de 30 días
</li>
</ul>
 </div>
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_regular_mini"> 5 </div>
 <img src="images/icono_camara_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 150 </div>
 <img src="images/icono_texto_regular.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 30 </div>
 <img src="images/icono_calendario_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 2 </div>
 <img src="images/icono_ticket_regular.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 1 </div>
 <img src="images/icono_video_regular.png" width="34" height="26" />
 </li>
 </ul>
 </div>
 <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_1" />
</label>
</div>




<div class="paquetes_derecha_mini">
<label>
<div class="title_paquetes_mini">
<div class="lateral_premium_mini"></div>
  <img src="images/perrito_premium.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE PREMIUM </font>

</div>
 <div class="precio_paquete_premium_mini"> $165.00 </div>

 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
<li>
* 15 fotos
</li>
<li>
* Caracteres ilimitados
</li>
<li>
* 2 video
</li>
<li>
 * 5 cupones
</li>
<li>
 * Vigencia de 60 días
</li>
</ul>
 </div>
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_premium_mini"> 15 </div>
 <img src="images/icono_camara_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> ∞ </div>
 <img src="images/icono_texto_premium.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 60 </div>
 <img src="images/icono_calendario_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 5 </div>
 <img src="images/icono_ticket_premium.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 2 </div>
 <img src="images/icono_video_premium.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_2" />
 </label>
 </div>
 


 </div><!-- Contenedor de paquetes  -->
 
</br>
<ul class="morado_mini">
<li><a href="#" id="paso222">Continuar</a>
</li>
</ul> 


</div>



</div>

</div> 

<!-- FIN paso dos !-->

<!-- INICIO paso TRES -->
<div id="paso_tres" style="display:none;" >
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li>1</li>
<li>2</li>
<li class="numero_seccion_mini">3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
 
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Completa tu información</div>
<div class="sub_instrucciones_pasos_mini"> Datos de contacto </div>
<div class="contenido_indicacion_formulario_mini"> 
<p class="margen_15_left_mini" >Nombre: <input type="text" class="background_morado_35_mini" readonly="readonly" /> Apellido: <input type="text" class="background_morado_35" readonly="readonly" />  Correo electrónico: <input type="text" class="background_morado" readonly="readonly" /> </p>
</br>
<p class="margen_15_left_mini"> Teléfono: <input type="text" class="background_gris_35_mini"/> Mostrar teléfono en el anuncio: <select class="background_gris_35_mini">
<option>--</option>
<option> Si </option>
<option> No </option>
</select>
</p>
</br>

<div class="sub_instrucciones_pasos_mini"> Detalles del aunucio </div>
</br>
<p class="margen_15_left_mini" >Sección: <input type="text" class="background_morado_55_mini" readonly="readonly" /> Paquete: <input type="text" class="background_morado_55_mini" readonly="readonly" />  Vencimiento: <input type="text" class="background_morado_mini" readonly="readonly" /> </p>
</br>
<p class="margen_15_left_mini"> Titúlo: &nbsp;&nbsp;&nbsp; <input type="text" class="background_gris_55_mini"/> Estado  &nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100_mini">
<option>--</option>
<option> Chihuahua </option>
<option> Quintana Roo </option>
</select>

Ciudad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris_mini" type="text"/>
</p>
</br>

<p class="margen_15_left_mini"> Genéro: <select type="text" class="background_gris_100_mini"/>
<option> --- </option>
<option> Hembra </option>
<option> Macho </option>

</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Raza  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100_mini">
<option>--</option>
<option> Labrador </option>
<option> Labrador</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris_mini" type="text"/>
</p>
</br>
<p class="margen_15_left_mini">
Descripción:<textarea  class="background_gris_mini" cols="95" rows="3" > </textarea>
</p>
</br>
<p class="margen_15_left_mini">
Link de video <input type="text" size="98"/><img src="images/logo_youtube.png"/>
</p>
<p class="margen_15_left_mini"> <a href="#"> Tutorial para subir video a <img src="images/logo_youtube.png" width="43" height="16"/> </a> </p>
</br>
<p class="margen_15_left_mini"> 

<!-- <iframe src="../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
 </p>
 
 <div style="width:800px; height:150px;"> 

 TEXTO
 </div>
 
<ul class="morado_15_mini" style="margin-left:-15px;" >

<li onclick="muestra('paso_cuatro'); oculta('paso_tres');">

Continuar

</li>

</ul> 

</div>
</div>
</div>
<!-- FIN paso TRES -->

<div id="paso_cuatro" style="display:none;" > <!-- inicio del contendor paso 4 -->
 
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li>1</li>
<li>2</li>
<li >3</li>
<li class="numero_seccion_mini">4</li>
<li>5</li>
</ul>
 </div>

<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Vista previa de tu anuncio</div>
<div class="leer_anuncio_mini">


<div class="contenedor_galeria_mini">
 <div id="slideshow_publicar_anuncio" class="picse_mini">
       <img src="images/anuncios/02/1.png" width="294" height="200"/>
       <img src="images/anuncios/02/2.png" width="294" height="200"/>
       <img src="images/anuncios/02/3.png" width="294" height="200"/>
       <img src="images/anuncios/02/1.png" width="294" height="200"/>
    </div>

</div>
<div class="datos_general_mini">

<div class="titulo_anuncio_publicado_mini">
VENDO BONITO PERRO
</br>
VENDO
</div>
</br>
<strong>
Precio:
</strong>

</br>
<font> Fecha de publicacion:12-06-2014</font>
</br>
<font>Sección: Venta</font>
</br>
<font>Raza: Cairn Terrier</font>
</br>
<font>Género: Macho</font>
</br>
<font>Lugar: Queretaro (Queretaro)</font>

</br>
</br>
<ul class="boton_naranja_mini">
<li onclick="muestra('contenedor_contactar_previo');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris_mini">
<li>
<img src="images/favorito.png"/>Agregar a Favoritos
</li>
</ul>

</div>
</br>

<div class="contenedor_del_detalle_mini">

<div class="titulo_anuncio_publicado_mini">
MÁS DETALLES
</div>

<div class="descripcion_del_anuncio_mini">

ksdjfkjslfk fdglksj gkfdsjg  jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
</div>
<script>
    $(function () {
        $('.paso').hide();
        $('#paso_uno').show().addClass('paso_show');

        $('#btn_sig .sig_paso').on('click', function () {
            var sig_paso = $('.paso_show').next('.paso');
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
            //$('#paso_tres [name=precio]').val(paquete_val.precio);
			$('#paso_tres [name=caracteresN]').val(paquete_val.caracteres);
            $('#contenedor_publicar_anuncio').fadeIn();
			<?php endif;?>
        });

		$('textarea').keyup(function(e) {
   			 var tval = $('#descripcion').val(),
        	 tlength = tval.length,	
			 set = $('#caracteresN').val(),
        	remain = parseInt(set - tlength);
			$('#meh').val(remain);
			console.log(tval);
    		console.log(tlength,remain,set);
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
			 /*var titulo = $('#titulo').val();
			 console.log(titulo);*/
			 alert('grrrr');
        });

        $('#paso_uno [name=seccion]').on('change', function() {
            $('#paso_tres [name=seccion_texto]').val($(this).next().text());
        });
		
		$("body").on("click",".del", function(e){
            $(this).parent('span').remove(); 
        return false;
    });

    });
	
</script>
