<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Venta-Quierounperro.com</title>
<link rel="shortcut icon" href="<?=base_url()?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/reset.css" media="screen"></link>
<link rel="stylesheet" href="<?=base_url()?>css/jPages.css">
<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/general.css" media="screen"></link> <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/venta.css" media="screen"></link>
   <script src="<?=base_url()?>js/jquery-1.10.2.js"></script>
     <script src="<?=base_url()?>js/jPages.js"></script>
     <script src="<?=base_url()?>js/funciones_venta.js"></script>
   <script src="<?=base_url()?>js/jquery-ui.js"></script>
   <script type="text/javascript" src="<?=base_url()?>js/jquery.cycle.all.js"></script>
   <script src="<?=base_url()?>js/funciones_.js" type="text/javascript"></script>
  <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/general.css" media="screen"></link>
  
  


</head>

<body>

<div id="mini_menu" >
<input type="hidden" id="efecto" value="corre"/>
<img style="float:left;" id="bajar_menu" src="<?=base_url()?>images/bajar_menu_dos.png" onclick="oculta('bajar_menu'); muestra('menu_oculto');"/>
<div id="menu_oculto" class="menu_principal" style=" display:none;">
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="<?=base_url()?>index.html">
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

<img id="horizontal_compras_mini"  onmouseover="mostrar_icono('horizontal_compras'); ocultar_icono('horizontal_compras_mini');"class="iconos_flotantes" src="<?=base_url()?>images/compras_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_compras_mini'); ocultar_icono('horizontal_compras');"  id="horizontal_compras" src="<?=base_url()?>images/compras_horizontal.png"/>

</li>
<li>
<img id="horizontal_ingresar_mini" onmouseover="mostrar_icono('horizontal_ingresar'); ocultar_icono('horizontal_ingresar_mini');" class="iconos_flotantes" src="<?=base_url()?>images/ingresar_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_ingresar_mini'); ocultar_icono('horizontal_ingresar');" id="horizontal_ingresar" src="<?=base_url()?>images/ingresar_horizontal.png"/>
</li>

<li>
<img id="horizontal_registrate_mini" onmouseover="mostrar_icono('horizontal_registrate'); ocultar_icono('horizontal_registrate_mini');"class="iconos_flotantes" src="<?=base_url()?>images/registrate_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_registrate_mini'); ocultar_icono('horizontal_registrate');" id="horizontal_registrate" src="<?=base_url()?>images/registrate_horizontal.png"/>
</li>
</ul>
</div>
<div id="contenedor_central_superior" class="contenedor_central_superior">

<div id="banner_superior">
<img src="<?=base_url()?>images/logo_superior.png" width="348" height="93" class="contenido_superior"/>

<div class="slideshow">
<img src="<?=base_url()?>images/banner_superior/1.png" width="638" height="93"/>
<img src="<?=base_url()?>images/banner_superior/2.png" width="638" height="93"/>
<img src="<?=base_url()?>images/banner_superior/3.png" width="638" height="93"/>
  </div>



</div>
</div>

<div class="contenedor_contactar" id="contenedor_contactar" style=" display:none;">
<div class="contenedor_cerrar_contactar">
<img src="<?=base_url()?>images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_contactar');"/>
</div>
<div class="contactar_al_aunuciante">
<font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
</br>
</br>
<strong> Nombre de usuario:</strong> Juanito Perez
</br>
<strong> Estado </strong> Hidalgo
</br>
<strong> Ciudad </strong> Actopan
</br>
<strong> Teléfono </strong> 372829102374746
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

<div class="contenedor_anuncio_detalle" id="contenedor_anuncio_detalle" style=" display:none;">
<div class="contenedor_cerrar_anuncio">
<img src="<?=base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_anuncio_detalle');"/>
</div>
<div class="leer_anuncio">


<div class="contenedor_galeria">
 <div id="slideshow_publicar_anuncio_previo" class="picse">
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/2.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/3.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
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
<li onclick="muestra('contenedor_contactar');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris">
<li>
<img src="<?=base_url()?>images/favorito.png"/>Agregar a Favoritos
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
<li id="ver_video" onclick="muestra('video');">
Ver video
</li>
</ul>

<div id="video" class="desplegar_detalles" style="display:none;" >
</br>
<div class="titulo_anuncio_publicado">
VIDEO
</div>

<iframe class="youtube_video" src="<?=base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos">
<li>
<img src="<?=base_url()?>images/alert.png"/>
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
 
</div>

<div class="contenedor_contactar_previo" id="contenedor_contactar_previo" style=" display:none;">
<div class="contenedor_cerrar_contactar">
<img src="<?=base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_contactar_previo');"/>
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




<div class="contenedor_anuncio_detalle" id="contenedor_anuncio_detalle" style=" display:none;">
<div class="contenedor_cerrar_anuncio">
<img src="<?=base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_anuncio_detalle');"/>
</div>
<div class="leer_anuncio">


<div class="contenedor_galeria">
 <div id="slideshow_publicar_anuncio_previo" class="picse">
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/2.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/3.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
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
<li onclick="muestra('contenedor_contactar');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris">
<li>
<img src="<?=base_url()?>images/favorito.png"/>Agregar a Favoritos
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
<li id="ver_video" onclick="muestra('video');">
Ver video
</li>
</ul>

<div id="video" class="desplegar_detalles" style="display:none;" >
</br>
<div class="titulo_anuncio_publicado">
VIDEO
</div>

<iframe class="youtube_video" src="<?=base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos">
<li>
<img src="<?=base_url()?>images/alert.png"/>
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
<img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Selecciona la sección de publicación</div>
<div class="contenido_indicacion"> 
<img src="<?=base_url()?>images/pero_paso_uno.png" class="perro_paso_uno"/>

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
<img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

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
  <img src="<?=base_url()?>images/perrito_lite.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE LITE </font>
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
 <img src="<?=base_url()?>images/icono_camara.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite"> 10 </div>
 <img src="<?=base_url()?>images/icono_texto.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite"> 10 </div>
 <img src="<?=base_url()?>images/icono_calendario.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_of"> 0 </div>
 <img src="<?=base_url()?>images/icono_ticket_of.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_of"> 0 </div>
 <img src="<?=base_url()?>images/icono_video_of.png" width="34" height="26" />
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
  <img src="<?=base_url()?>images/perrito_regular.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE REGULAR </font>

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
 <img src="<?=base_url()?>images/icono_camara_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 150 </div>
 <img src="<?=base_url()?>images/icono_texto_regular.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 30 </div>
 <img src="<?=base_url()?>images/icono_calendario_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular"> 2 </div>
 <img src="<?=base_url()?>images/icono_ticket_regular.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_regular"> 1 </div>
 <img src="<?=base_url()?>images/icono_video_regular.png" width="34" height="26" />
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
  <img src="<?=base_url()?>images/perrito_premium.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos"> PAQUETE PREMIUM </font>

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
 <img src="<?=base_url()?>images/icono_camara_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> ∞ </div>
 <img src="<?=base_url()?>images/icono_texto_premium.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> 60 </div>
 <img src="<?=base_url()?>images/icono_calendario_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium"> 5 </div>
 <img src="<?=base_url()?>images/icono_ticket_premium.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_premium"> 2 </div>
 <img src="<?=base_url()?>images/icono_video_premium.png" width="34" height="26" />
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
<img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

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
Link de video <input type="text" size="98"/><img src="<?=base_url()?>images/logo_youtube.png"/>
</p>
<p class="margen_15_left"> <a href="<?=base_url()?>#"> Tutorial para subir video a <img src="<?=base_url()?>images/logo_youtube.png" width="43" height="16"/> </a> </p>
</br>
<p class="margen_15_left"> 

<!-- <iframe src="<?=base_url()?>../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
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
<img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Vista previa de tu anuncio</div>
<div class="leer_anuncio">


<div class="contenedor_galeria">
 <div id="slideshow_publicar_anuncio" class="picse">
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/2.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/3.png" width="294" height="200"/>
       <img src="<?=base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
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
<img src="<?=base_url()?>images/favorito.png"/>Agregar a Favoritos
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

<iframe class="youtube_video" src="<?=base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos">
<li>
<img src="<?=base_url()?>images/alert.png"/>
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
<div class="crerar_publicar_anuncio" style="margin-top:0px;">
<img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>

<div class="descipcion_pasos_mediano">
<div class="titulo_de_pasos"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos"> Detalle de compra: </div>
</br>
<table class="tabla_pago" style="margin-left:70px;" width="700">
<tr> 
<th width="158">
PRODUCTO
</th>
<th width="345">
DETALLE
</th>
<th width="181">
COSTO
</th>
</tr>
<tr>
<td>
<img src="<?=base_url()?>images/pago_regular.png" width="156" height="79"/>
</td>
<td>
<p>* 5 fotos</p>
<p>* Texto de 150 caracteres</p> 
<p>* Vigencia de 30 días</p>
<p>* 2 cupones</p>
<p>* 1 video</p>
</td>
<td>
<p class="totales">$89.00</p>
</td>
</tr>
<tr> 
<td colspan="2">
<p>SUBTOTAL:</p>
</td>
<td>
<p class="totales"> $89.00 </p>
</td>
</tr>
<tr>
<td colspan="2">
 <img style="" src="<?=base_url()?>images/mini_cupon.png"/> <font class="texto_de_cupon" >Cupones de descuento: </font> </br> <font id="ver_cupones" class="ver_cupones" onclick="muestra('los_cupones_disponibles');muestra('no_ver_cupones');
 oculta('ver_cupones');"> Ver cupones </font> 
  <font style="display:none;" id="no_ver_cupones" class="ver_cupones" onclick="oculta('los_cupones_disponibles');oculta('no_ver_cupones');muestra('ver_cupones');"> Ocultar cupones </font>
<div id="los_cupones_disponibles" style="padding:15px; display:none;">
<form  class="radios_cupones_mini" action="">
<input type="radio" name="radiog_dark" id="radio_pago1" class="css-checkbox" /><label for="radio_pago1" class="css-label radGroup2"> 10% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago2" class="css-checkbox" checked="checked"/>
<label for="radio_pago2" class="css-label radGroup2">5% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago3" class="css-checkbox" /><label for="radio_pago3" class="css-label radGroup2"> 20% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago4" class="css-checkbox" / checked="checked"><label for="radio_pago4" class="css-label radGroup2"> No usar cupones</label>
</br>
</form>
</div>


</td>
<td>
<p class="totales">- $0.00 </p>
</td>
</tr>
<tr>
<th colspan="2">
TOTAL
</th>
<th>
<p class="totales" style="color: #FFF;">$89.00</p>
</th>
</tr>
</table>

</br>
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
</div> 
<!-- Fin del contenedor publicar anucio fondo negro -->



<div class="menu_principal" id="menu_principal" >
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="<?=base_url()?>index.html">
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
<li>Tienda</li>
<li>
Directorio
</li>
</ul>
</div>
</div>

<div class="titulo_seccion">
VENTA
</div>
<div class="contenedor_buscador">
<div class="buscador">
 <form id="filtro_venta">
<div class="fondo_select">
<select   class="estilo_select" id="raza" name="raza">
<option value="" > Selecciona un raza </option>
<?php if($razas != null):
  foreach($razas as $raza):?>
<option style="background-color: #BCBEC0;" value="<?=$raza->razaID?>"><?=$raza->raza?></option>
<?php endforeach;
    endif;?>
</select>
</div>

<div class="fondo_select">
<select   class="estilo_select" id="genero" name="genero">
<option value="" > Selecciona un género </option>
<option style="background-color: #BCBEC0;">Macho </option>
<option style="background-color: #BCBEC0;">Hembra </option>

</select>
</div>

<div class="fondo_select">
<select   class="estilo_select" id="estado" name="estado">
<option value=""> Selecciona un Estado </option>
<?php if($estados != null):
  foreach($estados as $estado):?>
<option style="background-color: #BCBEC0;" value="<?=$estado->estadoID?>"><?=$estado->nombreEstado?></option>
<?php endforeach;
    endif;?>

</select>
</div>
<div class="fondo_select">
<select   class="estilo_select" id="Precio" name="precio">
<option value="" > Ordenar por precio </option>
<option style="background-color: #BCBEC0;" value="asc"> De menor a mayor </option>
<option style="background-color: #BCBEC0;" value="desc"> De mayor a menor </option>

</select>
</div>
<div class="contenedor_buscar">
<input  type="text" class="buscar" size="4" name="palabra_clave" id="palabra_clave"/>
<input type="button" height="40" value="  " class="boton_palabras_clave" />
</div>
</form>
</div>

</div>

<div id="contenedor_central"  >
<div id="espacio_izquierda" class="seccion_izquierda_secciones">
<ul class="iconos">
<li> <img src="<?=base_url()?>images/compras.png"/></li>
<li><img src="<?=base_url()?>images/sesion.png"/></li>
<li>
<img src="<?=base_url()?>images/registrate.png"/>
</li>
</ul>
</div>


<div class="contenedor_central" style="margin-top:5px;">

      <!-- item container -->
      <ul id="itemContainer" style="display:inline-block;">
      <?php $fila = 1; ?>
     
<?php
         
    foreach($publicaciones as $publicacion):
    ?>
   <!-- INICIO contenedor anuncio  -->
<div class="contenedor_anuncio">
<div class="titulo_anuncio">
<?=$publicacion->titulo?>
</div>
<div class="descripcion_anuncio">
<font> Precio: <?=$publicacion->precio?></font>
<br/>
<font> Raza: <?=$publicacion->genero?> </font>
<br/>
<font> Género: <?=$publicacion->genero?> </font>
<br/>
<font> Ciudad: <?=$publicacion->ciudad?></font>
</div>
<div class="contenedor_foto_anuncio">
<img src="<?=base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80" />
</div>
 
          <ul class="ver_detalle_anuncio">
                        <?php if ($this->session->userdata('idUsuario') !== FALSE): ?>
                            <li oonclick="muestra('contenedor_anuncio_detalle');">
                                Ver detalle...
                            </li>
                        <?php else: ?>
                            <li onclick="javascript:alert('Favor de iniciar sesión.')">
                                Ver detalle...
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Fin contenedor annuncio -->

                <?php if (4 > $fila++): ?>
                    <!-- Inicio margen falso -->
                    <div class="margen_derecho_20">

                    </div>
                <?php else: ?>
                    <?php $fila = 1; ?>
                <?php endif; ?>
                <!-- FIN margen falso -->
            <?php endforeach; ?>

      </ul>
      
      <div style=" margin: 0px auto; padding:10px; text-align:center;">
       <!-- navigation holder -->
      <div class="holder">  </div>
      </div>
      </div>
 



<div class="seccion_derecha_paquetes">
<ul class="aqui_crear_anuncio">
<li onclick="muestra('contenedor_publicar_anuncio');">

</li>
</ul>
</div>

<script>
    $(function() {

        /* initiate the plugin */
        $("div.holder").jPages({
            containerID: "itemContainer",
            perPage: 25,
            startPage: 1,
            startRange: 1,
            midRange: 5,
            endRange: 1
        });

        $("#filtro_venta select[name]").on('change', function(e) {
            e.preventDefault();
            var form = $("#filtro_venta");
      
            search_data(form);
        });
        $("#filtro_venta [name]").keyup(function() {
            if ($(this).val().length > 2 || $(this).val().length === 0) {
                var form = $("#filtro_venta");
                search_data(form);
            }
        });

        function search_data(form) {
    
            $.ajax({
                url: '<?php echo base_url('venta/lista') ?>',
                data: form.serialize(),
                dataType: 'json',
                type: 'post',
                beforeSend: function() {
                    $("#itemContainer").empty().html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
                },
                success: function(result)
                {
                    $("#itemContainer").empty();
                    var data = result.data;
          
                    var separator = 1;

                    if (result.count < 1) {
                        $("#itemContainer").append('<div class="alert alert-warning">No hay resultados.</div>');
                    }

                    for (var i = 0; i < result.count; i++)
                    {
            if (data[i].genero==0)
            var el_genero="Hembra";
            else  var el_genero="Macho";
             
            
                        var cont_anun = $('<div class="contenedor_anuncio"></div>');
            var cont_titulo= $('<div class="titulo_anuncio"></div>');
            cont_titulo.append(data[i].titulo);
            cont_anun.append(cont_titulo);
            
          var cont_descripcion = $('<div class="descripcion_anuncio"></div>');
                        cont_descripcion.append('<font> Precio:' + data[i].precio + '</font> </br> <font> Raza: '+data[i].raza.substring(0, 15) +' </font></br> <font>Género:'+el_genero+'</font></br> <font>Ciudad:'+data[i].nombreEstado+'</font> ');
                        cont_anun.append(cont_descripcion);
                        
                        var cont_imagen = $('<div class="contenedor_foto_anuncio"></div>');
                        var logo = 'perro.png';
                        cont_imagen.append('<img src="images/anuncios/01/' + logo + '" alt="logo" width="128" height="80"/>');
                        cont_anun.append(cont_imagen);

<?php if ($this->session->userdata('idUsuario') !== FALSE): ?>
                            var ver_mas = $('<ul class="ver_detalle_anuncio"><li onclick="muestra(\'contenedr_anuncio_detalle\')">Ver detalle...</li></ul>');
<?php else: ?>
                            var ver_mas = $('<ul class="ver_mas_negocio"><li onclick="javascript:alert(\'Favor de iniciar sesión.\')">Ver detalle...</li></ul>');

<?php endif; ?>
                        cont_anun.append(ver_mas);

                        $("#itemContainer").append(cont_anun);
                        if (4 > separator++)
                        {
                            $("#itemContainer").append('<div class="margen_derecho_20"></div>');
                        }
                        else {
                            separator = 1;
                        }
                    }

                },
                complete: function() {
                    $("div.holder").jPages({
                        containerID: "itemContainer",
                        perPage: 28,
                        startPage: 1,
                        startRange: 1,
                        midRange: 5,
                        endRange: 1
                    });
                }
            });
        }

        function show_details(data) {


        }

    });
</script>
</div>


<div class="slideshow_tres" >
<img src="<?=base_url()?>images/banner_inferior/1.png" width="638" height="93"/>
<img src="<?=base_url()?>images/banner_inferior/2.png" width="638" height="93"/>
<img src="<?=base_url()?>images/banner_inferior/3.png" width="638" height="93"/>
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
<img src="<?=base_url()?>images/perro_final.png" width="46" height="42"/>
<a href="<?=base_url()?>#" ><img  src="<?=base_url()?>images/ico_fb.png" width="32" height="32" style="margin-top:10px;"/></a>
<a href="<?=base_url()?>#" class="margen"><img src="<?=base_url()?>images/ico_tw.png" width="32" height="32" style="margin-top:10px;"/></a>
</div>
<div class="division_final">

</div>
<div class="pie_pagina">
Copyright © 2014 QuieroUnPerro.com
</div>

</body>
</html>
