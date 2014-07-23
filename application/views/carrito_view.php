<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Venta-Quierounperro.com</title>
<link rel="shortcut icon" href="<?php echo base_url()?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/reset.css" media="screen"></link>
 <link rel="stylesheet" href="<?php echo base_url()?>css/jPages.css">
<script>
if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1){

  document.write('<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/general.css" media="screen"></link> <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/venta.css" media="screen"></link></link> ');
  }
  </script>
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.8.2.min.js"></script>
   <script src="<?php echo base_url()?>js/jquery-1.10.2.js"></script>
     <script src="<?php echo base_url()?>js/jPages.js"></script>
     <script src="<?php echo base_url()?>js/funciones_venta.js"></script>
     <script src="<?php echo base_url()?>js/funciones_tienda.js"></script>
   <script src="<?php echo base_url()?>js/jquery-ui.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>js/jquery.cycle.all.js"></script>
   <script src="<?php echo base_url()?>js/funciones_.js" type="text/javascript"></script>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/general.css" media="screen"></link>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/carrito.css" media="screen"></link>
<script>
 jQuery(document).ready(
        function(){

	 $(".cantidad").change(
               function(){
                    var rowID = '';
					var cartID = $(this).attr('data-rel');
                    var cantidad = $(this).val();
					console.log(cantidad,rowID);  
                   $.ajax({
                       url      : '<?php echo base_url()?>carrito/carritoUpdate',
                       type     : 'POST',
                       dataType : 'json',
                       data : 'rowID=' + rowID + '&qty=' + cantidad + '&cartID=' + cartID,
                       success  : function(data){
                           if(data.response=="true"){                               
                               location.reload();
                           }                           
                       } 
                   });   
				                  
        });
		
		$(".descuento").change(
               function(){
                    var descuento =  $(this).val();
					console.log(descuento);
					$.ajax({
                       url      : '<?php echo base_url()?>carrito/carritoUpdateTotal',
                       type     : 'POST',
                       dataType : 'json',
                       data : 'descuento=' + descuento,
                       success  : function(data){
                           if(data.response=="true"){   
						   console.log(data.response);                            
                               location.reload();
                           }                           
                       } 
                   }); 
					
                  
				                  
        });
		
		$(".deleteItem").click(
               function(){
                    var cartID =  $(this).attr('data-rel');
					console.log(cartID);
					$.ajax({
                       url      : '<?php echo base_url()?>carrito/deleteItem',
                       type     : 'POST',
                       dataType : 'json',
                       data : 'cartID=' + cartID,
                       success  : function(data){
                           if(data.response=="true"){   
						   console.log(data.response);                            
                               window.location.href="carrito";
                           }                           
                       } 
                   }); 
					
                  
				                  
        });

      
});
</script>

</head>

<body>

<div class="contenedor_de_detalle_compra" style="display:none">
<div class="contenedor_cerrar_comprar">
<img src="<?php echo base_url()?>images/cerrar_verde.png" />

 </div>

<div class="contenedor_interno_compra" >  
<table class="decripcion_producto_detalle">
<tr>
<td>
<img src="<?php echo base_url()?>images/productos/01.png" width="184" height="158"/>
</td>
<td>
<font> Shampoo </font>
</br>
<font> Cantidad: 1 </font>
</br>
<font> Precio Unidad: 1 </font>
</td>
</tr>
</table>
<div> <font>  </div>


</div>



</div>




<div id="mini_menu" >
<input type="hidden" id="efecto" value="corre"/>
<img style="float:left;" id="bajar_menu" src="<?php echo base_url()?>images/bajar_menu_dos.png" onclick="oculta('bajar_menu'); muestra('menu_oculto');"/>
<div id="menu_oculto" class="menu_principal" style=" display:none;">
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="<?php echo base_url()?>">
Inicio
</a>
</li>
<li>
Venta
</li>
<li>
Cruza
</li>
<li>
Adopción
</li>
<li>
Accesorios
</li>
<li>
Directorio
</li>
</ul>
</div>
</div>
</div>

<div id="iconos_ocultos" class="iconos_ocultos">


<ul class="iconos_estatus">
<li>

<img id="horizontal_compras_mini"  onmouseover="mostrar_icono('horizontal_compras'); ocultar_icono('horizontal_compras_mini');"class="iconos_flotantes" src="<?php echo base_url()?>images/compras_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_compras_mini'); ocultar_icono('horizontal_compras');"  id="horizontal_compras" src="<?php echo base_url()?>images/compras_horizontal.png" onclick="window.location='<?php echo base_url()?>carrito';"/>
</li>
<li>
<img id="horizontal_ingresar_mini" onmouseover="mostrar_icono('horizontal_ingresar'); ocultar_icono('horizontal_ingresar_mini');" class="iconos_flotantes" src="<?php echo base_url()?>images/ingresar_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_ingresar_mini'); ocultar_icono('horizontal_ingresar');" id="horizontal_ingresar" src="<?php echo base_url()?>images/ingresar_horizontal.png"/>
</li>

<li>
<img id="horizontal_registrate_mini" onmouseover="mostrar_icono('horizontal_registrate'); ocultar_icono('horizontal_registrate_mini');"class="iconos_flotantes" src="<?php echo base_url()?>images/registrate_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_registrate_mini'); ocultar_icono('horizontal_registrate');" id="horizontal_registrate" src="<?php echo base_url()?>images/registrate_horizontal.png"/>
</li>
</ul>
</div>
<div id="contenedor_central_superior" class="contenedor_central_superior">

<div id="banner_superior">
<img src="<?php echo base_url()?>images/logo_superior.png" width="348" height="93" class="contenido_superior"/>

<div class="slideshow">
<img src="<?php echo base_url()?>images/banner_superior/1.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_superior/2.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_superior/3.png" width="638" height="93"/>
	</div>



</div>
</div>


<div class="contenedor_contactar_previo" id="contenedor_contactar_previo"  style=" display:none;">
<div class="contenedor_cerrar_contactar">
<img src="<?php echo base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_contactar_previo');"/>
</div>
<div class="contactar_al_aunuciante">
<font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
</br>
</br>
<strong> Nombre de usuario:</strong> Juanito Perez
</br>
<strong> Estado: </strong> Hidalgo
</br>
<strong> Ciudad: </strong> Actopan
</br>
<strong> Teléfono: </strong> 372829102374746
</br>
</br>
<font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
</br>
</br>
<input type="text" class="formu_contacto" id="nombre_contacto" onfocus="clear_textbox('nombre_contacto','Nombre');" value="Nombre" size="44" />
<input type="text" class="formu_contacto" id="mail_contacto" onfocus="clear_textbox('mail_contacto','Tu-email')" value="Tu-email" size="44" />
<input type="text" class="formu_contacto" id="asunto_contacto" onfocus="clear_textbox('asunto_contacto','Asunto')" value="Asunto" size="44" />
<textarea cols="50" onfocus="clear_textbox('comentarios_contacto','Comentarios')" id="comentarios_contacto" class="formu_contacto" rows="5">Comentarios</textarea>
</br>
</br>
<ul class="boton_naranja_tres">
<li>
Enviar
</li>
</ul>


</div>
</div>





<div id="contenedor_publicar_anuncio" class="contenedor_publicar_anuncio" style=" display:none;">

<!-- Inicio contenedor pap publicar anuncio aunucio !--> 
<div id="publicar_anuncio" class="pubicar_anuncio">



<!-- Inicio Paso UNO -->
<div id="paso_uno">
<div class="numeros_publicar_anuncio">
<ul class="listado_numeros_anuncio">
<li class="numero_seccion">1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Selecciona la sección de publicación</div>
<div class="contenido_indicacion"> 
<img src="<?php echo base_url()?>images/pero_paso_uno.png" class="perro_paso_uno"/>

<form id="form1" name="form1" method="post" class="radios_secciones" action="">
<input type="radio" name="radiog_dark" id="radio4" class="css-checkbox" /><label for="radio4" class="css-label radGroup2"> Cruza</label>
</br>
<input type="radio" name="radiog_dark" id="radio5" class="css-checkbox" checked="checked"/>
<label for="radio5" class="css-label radGroup2">Venta</label>
</br>
<input type="radio" name="radiog_dark" id="radio6" class="css-checkbox" /><label for="radio6" class="css-label radGroup2">Adopción</label>
</br>
<input type="radio" name="radiog_dark" id="radio7" class="css-checkbox" /><label for="radio7" class="css-label radGroup2">Perros perdidos</label>
</form>

</br>
<ul class="morado">
<li onclick="muestra('paso_dos'); oculta('paso_uno');">

Continuar
</li>
</ul> 


</div>

</div>

</div>
<!-- FIN anuncio UNO -->


<!-- Inicio paso DOS -->
<div id="paso_dos" style="display:none;">
<div  class="numeros_publicar_anuncio" >
<ul class="listado_numeros_anuncio">
<li >1</li>
<li class="numero_seccion">2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Indica tu tipo de anuncio</div>
<div class="contenido_indicacion"> 
<div id="contenedor_paquetes" class="contenedor_paquetes">



    
<div class="paquetes_izquierda">
 <label>
  <div class="title_paquetes">
<div class="lateral_lite"></div>
  <img src="<?php echo base_url()?>images/perrito_lite.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE LITE </font>
</div>
<div class="precio_paquete_lite"><div class="el_titulo_paquete_lite"> Gratis </div>  <div class="descripcion_precio_paquete_lite">al crear tu usuario</div> </div>
 <div class="descripcion_paquetes">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes">
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
 <div class="iconos_paquetes">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_lite"> 10 </div>
 <img src="<?php echo base_url()?>images/icono_camara.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite"> 10 </div>
 <img src="<?php echo base_url()?>images/icono_texto.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite"> 10 </div>
 <img src="<?php echo base_url()?>images/icono_calendario.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_of"> 0 </div>
 <img src="<?php echo base_url()?>images/icono_ticket_of.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_of"> 0 </div>
 <img src="<?php echo base_url()?>images/icono_video_of.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  
 <input type="radio" style="margin-left:100px;" name="RadioGroup1"  value="radio" id="RadioGroup1_0" />
 </label>
 
</div>




<div class="paquetes">
 <label>
<div class="title_paquetes">
<div class="lateral_regular"></div>
  <img src="<?php echo base_url()?>images/perrito_regular.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE REGULAR </font>

</div>
<div class="precio_paquete_regular"> $89.00 </div>

 <div class="descripcion_paquetes">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes">
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
 <div class="iconos_paquetes">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_regular"> 5 </div>
 <img src="<?php echo base_url()?>images/icono_camara_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 150 </div>
 <img src="<?php echo base_url()?>images/icono_texto_regular.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 30 </div>
 <img src="<?php echo base_url()?>images/icono_calendario_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 2 </div>
 <img src="<?php echo base_url()?>images/icono_ticket_regular.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_regular"> 1 </div>
 <img src="<?php echo base_url()?>images/icono_video_regular.png" width="34" height="26" />
 </li>
 </ul>
 </div>
 <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_1" />
</label>
</div>




<div class="paquetes_derecha">
<label>
<div class="title_paquetes">
<div class="lateral_premium"></div>
  <img src="<?php echo base_url()?>images/perrito_premium.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE PREMIUM </font>

</div>
 <div class="precio_paquete_premium"> $165.00 </div>

 <div class="descripcion_paquetes">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes">
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
 <div class="iconos_paquetes">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_premium"> 15 </div>
 <img src="<?php echo base_url()?>images/icono_camara_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> ∞ </div>
 <img src="<?php echo base_url()?>images/icono_texto_premium.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> 60 </div>
 <img src="<?php echo base_url()?>images/icono_calendario_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> 5 </div>
 <img src="<?php echo base_url()?>images/icono_ticket_premium.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_premium"> 2 </div>
 <img src="<?php echo base_url()?>images/icono_video_premium.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_2" />
 </label>
 </div>
 


 </div><!-- Contenedor de paquetes  -->
 
</br>
<ul class="morado">
<li onclick="muestra('paso_tres'); oculta('paso_dos');">Continuar
</li>
</ul> 


</div>



</div>

</div> 

<!-- FIN paso dos !-->

<!-- INICIO paso TRES -->
<div id="paso_tres" style="display:none;" >
<div class="numeros_publicar_anuncio">
<ul class="listado_numeros_anuncio">
<li>1</li>
<li>2</li>
<li class="numero_seccion">3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
 
<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Completa tu información</div>
<div class="sub_instrucciones_pasos"> Datos de contacto </div>
<div class="contenido_indicacion_formulario"> 
<p class="margen_15_left" >Nombre: <input type="text" class="background_morado_35" readonly="readonly" /> Apellido: <input type="text" class="background_morado_35" readonly="readonly" />  Correo electrónico: <input type="text" class="background_morado" readonly="readonly" /> </p>
</br>
<p class="margen_15_left"> Teléfono: <input type="text" class="background_gris_35"/> Mostrar teléfono en el anuncio: <select class="background_gris_35">
<option>--</option>
<option> Si </option>
<option> No </option>
</select>
</p>
</br>

<div class="sub_instrucciones_pasos"> Detalles del aunucio </div>
</br>
<p class="margen_15_left" >Sección: <input type="text" class="background_morado_55" readonly="readonly" /> Paquete: <input type="text" class="background_morado_55" readonly="readonly" />  Vencimiento: <input type="text" class="background_morado" readonly="readonly" /> </p>
</br>
<p class="margen_15_left"> Titúlo: &nbsp;&nbsp;&nbsp; <input type="text" class="background_gris_55"/> Estado  &nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100">
<option>--</option>
<option> Chihuahua </option>
<option> Quintana Roo </option>
</select>

Ciudad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris" type="text"/>
</p>
</br>

<p class="margen_15_left"> Genéro: <select type="text" class="background_gris_100"/>
<option> --- </option>
<option> Hembra </option>
<option> Macho </option>

</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Raza  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100">
<option>--</option>
<option> Labrador </option>
<option> Labrador</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris" type="text"/>
</p>
</br>
<p class="margen_15_left">
Descripción:<textarea  class="background_gris" cols="95" rows="3" > </textarea>
</p>
</br>
<p class="margen_15_left">
Link de video <input type="text" size="98"/><img src="<?php echo base_url()?>images/logo_youtube.png"/>
</p>
<p class="margen_15_left"> <a href="<?php echo base_url()?>#"> Tutorial para subir video a <img src="<?php echo base_url()?>images/logo_youtube.png" width="43" height="16"/> </a> </p>
</br>
<p class="margen_15_left"> 

<!-- <iframe src="<?php echo base_url()?>../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
 </p>
 
 <div style="width:800px; height:150px;"> 

 TEXTO
 </div>
 
<ul class="morado_15" style="margin-left:-15px;" >

<li onclick="muestra('paso_cuatro'); oculta('paso_tres');">

Continuar

</li>

</ul> 

</div>
</div>
</div>
<!-- FIN paso TRES -->

<div id="paso_cuatro" style="display:none;" > <!-- inicio del contendor paso 4 -->
 
<div class="numeros_publicar_anuncio">
<ul class="listado_numeros_anuncio">
<li>1</li>
<li>2</li>
<li >3</li>
<li class="numero_seccion">4</li>
<li>5</li>
</ul>
 </div>

<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Vista previa de tu anuncio</div>
<div class="leer_anuncio">


<div class="contenedor_galeria">
 <div id="slideshow_publicar_anuncio" class="picse">
       <img src="<?php echo base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/2.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/3.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
    </div>

</div>
<div class="datos_general">

<div class="titulo_anuncio_publicado">
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
<ul class="boton_naranja">
<li onclick="muestra('contenedor_contactar_previo');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris">
<li>
<img src="<?php echo base_url()?>images/favorito.png"/>Agregar a Favoritos
</li>
</ul>

</div>
</br>

<div class="contenedor_del_detalle">

<div class="titulo_anuncio_publicado">
MÁS DETALLES
</div>

<div class="descripcion_del_anuncio">

ksdjfkjslfk fdglksj gkfdsjg  jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
</div>
</br>
<ul class="boton_naranja_dos">
<li id="ver_video" onclick="muestra('video_previo');">
Ver video
</li>
</ul>

<div id="video_previo" class="desplegar_detalles" style="display:none;" >
</br>
<div class="titulo_anuncio_publicado">
VIDEO
</div>

<iframe class="youtube_video" src="<?php echo base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos">
<li>
<img src="<?php echo base_url()?>images/alert.png"/>
Denunciar Anuncio
</li>
</ul>

<div class="consejos_advertencias">

- QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay millones de perros sin hogar que deben ser sacrificados.
</br>
- Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar antes de comprar uno.
</br>
- Infórmate de los cuidados especiales que debes de tener con la raza específica que estás comprando.
</br>
- NUNCA compres una nueva mascota sin verla físicamente antes.
</br>
- NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser rastreado, como lo son Money Gram y Western Union.
</br>
- NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate de que el nombre del criador esté en el certificado.
</br>
- Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
</br>
- El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
</div>



</div>

</br>

</div>

<div id="contendedor_morado" class="contenedor_morado">
<ul class="morado_15_sinmargen" >

<li onclick="">

Editar

</li>
</ul> 

<ul class="morado_15_sinmargen" >

<li onclick="muestra('paso_cinco'); oculta('paso_cuatro');">

Continuar

</li>

</ul> 
</div>

</div>

</div> <!-- final del contendor paso 4 -->


<!-- Inicio paso 5 -->
<div id="paso_cinco" style="display:none;"> 
<div class="numeros_publicar_anuncio">
<ul class="listado_numeros_anuncio">
<li>1</li>
<li>2</li>
<li >3</li>
<li >4</li>
<li class="numero_seccion">5</li>
</ul>
 </div>
  </br>
<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>

<div class="descipcion_pasos_mediano">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Detalle de compra: </div>
</br>
<div class="tipo_paquete_pago">
<img src="<?php echo base_url()?>images/pago_lite.png"/>
</div>
<div class="divisor_morado"> </div>

<div class="descripcion_paquete_pago" > 
<div class="titulo_descripcion_paquete"> INCLUYE </div>
<div style="padding:15px;">
<p> * 1 foto </p>
<p>* Texto de 50 caracteres </p>
<p>* Vigencia de 30 días. </p>
</div>
</div>
<div class="divisor_morado"> </div>
<div class="tipo_paquete_pago">
<div class="titulo_descripcion_paquete"> TOTAL </div>
<div class="total_compra"> <p> $ 89.00 <font class="moneda"> MX </font></p>
</div>

</div>

</br>
</br>
<div style="margin-top:150px;">
<div class="sub_instrucciones_pasos"> <img style=" margin-left:15px;" src="<?php echo base_url()?>images/mini_cupon.png"/> Cupones disponibles <font> 2 </font> </div>
<div style="padding:15px;">
<p>Si lo deseas pudes usar alguno de tus cupones</p>
<form  class="radios_cupones" action="">
<input type="radio" name="radiog_dark" id="radio_pago1" class="css-checkbox" /><label for="radio_pago1" class="css-label radGroup2"> 10% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago2" class="css-checkbox" checked="checked"/>
<label for="radio_pago2" class="css-label radGroup2">5% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago3" class="css-checkbox" /><label for="radio_pago3" class="css-label radGroup2"> 20% de descuento</label>
</br>
</form>
</div>
</div>
<ul class="morado_15" >

<li onclick="">
Pagar
</li>

</ul> 
</div>

</div> 
<!-- Fin  paso 5 -->


</div>
</div>

<!-- Fin del contenedor publicar anucio fondo negro -->




<div class="menu_principal" id="menu_principal" >
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="<?php echo base_url()?>">
Inicio
</a>
</li>
<li>
<a href="<?php echo base_url()?>"> Venta </a>
</li>
<li>
Cruza
</li>
<li>
Adopción
</li>
<li><a href="<?php echo base_url()?>principal/tienda" style="color:#FFF;text-decoration:none;">Tienda</a></li>
<li>
Directorio
</li>
</ul>
</div>
</div>

<div class="titulo_seccion">
MI CARRITO
</div>
<div class="contenedor_buscado">


</div>

<div id="contenedor_central" >
<div id="espacio_izquierda" class="seccion_izquierda_secciones">
<ul class="iconos">
<li> <img src="<?php echo base_url()?>images/compras.png"/></li>
<li><img src="<?php echo base_url()?>images/sesion.png"/></li>
<li>
<img src="<?php echo base_url()?>images/registrate.png"/>
</li>
</ul>
</div>


<div class="contenedor_central">
<font class="subti_info_tienda"> Articulos incluidos en el carrito: </font>
</br>
</br>
     <table width="795" class="tabla_carrito">
     <tr>
     <th width="102">
  Articulo
     </th>
     <th width="267">
     Descripción
     </th>
     <th width="142">
     Precio MX
     </th>
     <th width="142">
  Cantidad
     </th>
     <th width="118">
Eliminar
     </th>
     </tr>
     
     <?php if($carrito != null):
	 		foreach($carrito as $product):
			/*foreach ($this->cart->contents() as $cartP): ?>
            
<?php echo form_hidden($cartP['rowid']);*/ ?>

          
             <tr>
     <td>
     <img src="<?php echo base_url()?>images/productos/<?php echo ($product->foto != null) ? $product->foto : 'default.png'?>" width="47" height="41" /></td>
     <td>
     <?php echo $product->nombre?><br />
     Talla: <?php echo $product->talla?><br />
     Color: <?php echo $product->color?>
     </td>
     <td>
     <input type="hidden" name="precio" id="precio" value="<?php echo $product->precio?>"  />
     $<?php echo $product->precio?>
     </td>
     <td>
     <input type="hidden" name="cantidadV" id="cantidadV" value="<?php echo $product->cantidad?>" class="cantidadValor"/>
     <input type="number" class="cantidad" value="<?php echo $product->cantidad?>" name="cantidad" id="" data-rel="<?php echo $product->cartID?>">
     </td>
     <td>
<img src="<?php echo base_url()?>images/eliminar.png" class="deleteItem" data-rel="<?php echo $product->cartID?>"/>
     </td>
     </tr>
     <?php /*endforeach;*/
	 endforeach;
	 endif;?>
     
     
 
       
      </table>
      </br>
   <div class="contenedor_cupones_productos">
   <div class="cupones_productos">
    Cupones disponibles
   </div>
     </br>
     <p>
       <label>
         <input type="radio" name="descuento" value="10" id="cupon1" class="descuento" data-rel="<?php echo $carritototal->carritoTotalID;?>" <?php echo ($carritototal->descuento == 10) ? 'checked=checked' : ''?>/>
         10% de descuento</label>
       <br />
       <label>
         <input type="radio" name="descuento" value="20" id="cupon2" class="descuento"data-rel="<?php echo $carritototal->carritoTotalID;?>" <?php echo ($carritototal->descuento == 20) ? 'checked=checked' : ''?>/>
         20% de descuento</label>
       <br />
     </p>

   </div>
   </br>
  <div class="total_productos">
     <div class="contenedor_total_productos" > Subtotal $<input type="text"  name="subtotal" class="total_solo_productos" value="<?php echo $carritototal->subtotal; ?>"/></div>
      <div class="contenedor_total_productos" > Total <input type="text"  name="total" id="total" class="total_solo_productos" value="<?php echo $carritototal->totalPrecio; ?>"/></div>
      </div>
      </br>
      </br>
      
      
<div class="cupones_productos">
   <a> Datos de envio </a> Datos de envio guardados <select> <option> ---</option> <option> 1 </option></select>
</div>
</br><br />
Nombre: <input name="nombre" type="text" value="<?php echo $datosPersonales->nombre?>"/> &nbsp;&nbsp;&nbsp; Apellidos: <input name="apellidos" type="text" value="<?php echo $datosPersonales->apellido?>" />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.P: <input  name="cp" type="text" style="margin-left:32px;" value="<?php echo $datosPersonales->cp?>"/> 
</br> 
</br>
 Calle: <input name="calle" type="text" style=" margin-left:22px;" value="<?php echo $datosPersonales->calle?>"/> &nbsp;&nbsp;&nbsp; Número: <input name="noExterior" type="text" style="margin-left:10px;" value="<?php echo $datosPersonales->noExterior?>"/>
 &nbsp;&nbsp;&nbsp;&nbsp; Colonia: <input type="text" value="<?php echo $datosPersonales->colonia?>"/> 
 </br>
 </br>
 Ciudad: <input type="text" style=" margin-left:5px;" name="ciudad"/>
&nbsp;&nbsp;&nbsp; Estado: <select style="margin-left:20px;" name="idExtado"> 
 <option> --- </option>
 <?php 
  
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>" <?php echo ($edo->estadoID == $datosPersonales->idEstado) ? 'selected="selected"' : ''?>><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
          </select>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Pais: <select style="margin-left:30px;" name="idPais">       
       <option> México </option>
       </select>  
       </br>
       </br>
   
      
      
      
      
      
</br>
<ul class="boton_verde">
<li>
<script type="text/javascript" src="http://mp-tools.mlstatic.com/buttons/render.js"></script>
<a href="<?php echo $preference['response']['sandbox_init_point']; ?>" name="MP-Checkout" class="lightblue-ar-s-ov" mp-mode="modal" onreturn="execute_my_onreturn">Pagar</a>


<script type="text/javascript">
function execute_my_onreturn (json) {
	console.log(json.back_url,json.collection_id,json.collection_status,json.external_reference,json.preference_id);
  if (json.collection_status=='approved'){
    alert ('Pago acreditado');
  } else if(json.collection_status=='pending'){
    alert ('El usuario no completó el pago');
  } else if(json.collection_status=='in_process'){    
    alert ('El pago está siendo revisado');    
  } else if(json.collection_status=='rejected'){
    alert ('El pago fué rechazado, el usuario puede intentar nuevamente el pago');
  } else if(json.collection_status==null){
    alert ('El usuario no completó el proceso de pago, no se ha generado ningún pago');
  }
  var status = json.collection_status;
  var noComprobante = json.collection_id; 
  $.ajax({
                       url      : '<?php echo base_url()?>carrito/factura',
                       type     : 'POST',
                       dataType : 'json',
                       data : 'status=' + status + '&noComprobante=' + noComprobante,
                       success  : function(data){
                           if(data.response=="true"){                               
                               
                           }                           
                       } 
                   });   
  
}
</script>
</li>
</ul>

</br>
</br>
<p>&nbsp; </p>

</br>
</br>
      </div>
      

    
      
</div>


<div class="seccion_derecha_paquetes">
<ul class="aqui_crear_anuncio">
<li onclick="muestra('contenedor_publicar_anuncio');">

</li>
</ul>
</div>
</div>


<div class="slideshow_tres" >
<img src="<?php echo base_url()?>images/banner_inferior/1.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_inferior/2.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_inferior/3.png" width="638" height="93"/>
	</div>
    
<div class="division_menu_inferior"> </div>
<div class="contenedor_menu_inferior" align="center"> 

<ul class="menu_inferior">
<li>
Acerca de Nosotros
<ul>
<li> - ¿Quiénes Somos? 
</li>
<li> - La comunidad QUP </li>
</ul>
</li>

</ul>


<ul class="menu_inferior">
<li>
Políticas
<ul>
<li> - Aviso de Privacidad </li>
<li>  - Política de Provacidad </li>
<li> - Términos y Condiciones </li>
</ul>
</li>

</ul>


<ul class="menu_inferior">
<li>
Contacto
<ul>
<li>- Tutorial</li>
<li>- Publicidad </li>
<li>- Soporte </li>
<li>- Preguntas Frecuentes </li>
</ul>
</li>

</ul>
</div>
    
    
<div class="footer">
<img src="<?php echo base_url()?>images/perro_final.png" width="46" height="42"/>
<a href="<?php echo base_url()?>#" ><img  src="<?php echo base_url()?>images/ico_fb.png" width="32" height="32" style="margin-top:10px;"/></a>
<a href="<?php echo base_url()?>#" class="margen"><img src="<?php echo base_url()?>images/ico_tw.png" width="32" height="32" style="margin-top:10px;"/></a>
</div>
<div class="division_final">

</div>
<div class="pie_pagina">
Copyright © 2014 QuieroUnPerro.com
</div>
<script type="text/javascript">
    (function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;
    s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";
    var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}
    window.$MPBR_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
</script>
</body>
</html>
