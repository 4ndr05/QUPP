
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-419">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi Perfil-Quierounperro.com</title>
<link rel="shortcut icon" href="<?php echo base_url()?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/reset.css" media="screen"/>
 <link rel="stylesheet" href="<?php echo base_url()?>css/jPages.css">
<script>
if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1){

  document.write('<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/general.css" media="screen"></link> <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/venta.css" media="screen"></link><link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/mi_perfil.css" media="screen"></link>');
  }
  </script>
<!--   <script src="<?php echo base_url()?>js/jquery-1.10.2.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.8.2.min.js"></script>
     <script src="<?php echo base_url()?>js/jPages.js"></script>
     <script src="<?php echo base_url()?>js/funciones_venta.js"></script>
     <script src="<?php echo base_url()?>js/funciones_negocio.js"></script>
   <script src="<?php echo base_url()?>js/jquery-ui.js"></script>
   <script src="<?php echo base_url()?>js/funciones_index.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>js/jquery.cycle.all.js"></script>
   <script src="<?php echo base_url()?>js/funciones_.js" type="text/javascript"></script>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/general.css" media="screen"></link>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/mi_perfil.css" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/validator/validationEngine.jquery.css" type="text/css"/>


    <script type="text/javascript"
            src="<?php echo base_url() ?>js/validator/languages/jquery.validationEngine-es.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/validator/jquery.validationEngine.js"></script> 
  


</head>

<body>
<?php
  $contrasena = $this->session->userdata('recuperarusuario');
  ?> 
<script type="text/javascript">
var busy = false;
$(document).ready(function() { 
<?php if($contrasena): ?>
        $('#contrasenaActual').removeClass('validate[required]');
        $('#contrasenaActual').attr('disabled', 'disabled');
        muestra('contenedor_cambiar_contrasena');
  <?php endif; ?>


getView('<?=base_url()?>usuario/cuenta/miPerfil/');
 /****************************************/ 
                   $(".ajaxLink").live(
                       'click',
                        function(e){                            
                            e.preventDefault();
                             var clase = $(this).attr('id');
                             $(".icono_seleccion").removeClass("icono_seleccion");
                                $('.'+clase).addClass("icono_seleccion");                       
                                var gotoURL = $(this).attr('href');
                                $("#appSectionContainer").html();
                                getView(gotoURL);                                                             
                        }
                    );  
  


$('#editarContrasena').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url : "<?=base_url()?>usuario/cuenta/editar_contrasena",
        type : 'POST',
        dataType : 'json',
        data : $(this).serialize(),
        success : function(data) {
          console.log(data.response);
          if(data.response==true){
            oculta('contenedor_cambiar_contrasena');
            muestra('contenedor_cambiar_contrasena_correcto');
          }
          else{
            oculta('contenedor_cambiar_contrasena');
            muestra('contenedor_cambiar_contrasena_error');
          }
        }
      })
    });
});
jQuery(document).ready(function(){
  
      // binds form submission and fields to the validation engine
      jQuery("#editarContrasena").validationEngine({
        promptPosition           : "topRight",
        scroll                   : false,
        ajaxFormValidation       : false,
        ajaxFormValidationMethod : 'post'
      });

     
});
function getView(viewURL){
                busy = true;
                $("#appSectionContainer").children().remove();
                $("#appSectionContainer").load(viewURL, function(){                    
                    $(".hidden").stop().fadeIn('fast', function(){
                        busy = false;
                        // $('#TIbody').css('cursor', 'default');
                    });       
                });
            }
  
</script>
<div id="contenedor_cambiar_contrasena" class="contenedor_anuncio_detalle" style="display:none;">
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_cambiar_contrasena');"/> </div>
<form action="#" method="post" id="editarContrasena">
<div class="contenedor_contrasena">
<div class="contenedor_titulo">
<p> CAMBIAR CONTRASEÑA </p>
</div>
<div class="contenido_contrasena">
<p id="contrasenaActualP"> Contraseña actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  class="background_morado validate[required]" name="contrasenaActual" id="contrasenaActual" /> </p>

<p> Nueva contraseña:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="background_morado validate[required],maxSize[8]" name="contrasena1" id="contrasena1"/> </p>

<p> Confirmar contraseña: <input type="password" class="background_morado validate[required,equals[contrasena1]],maxSize[8]" name="contrasena2"/> </p>


</div>

</br>
</br>
<ul class="morado_boton">
<li>
<input type="submit" value="Editar" class="el_submit"/>
</li>
</ul> 
</div>
</form>
</div>


<div id="contenedor_cambiar_contrasena_correcto" class="contenedor_anuncio_detalle" style="display:none;">
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_cambiar_contrasena_correcto');"/> </div>
<div class="contenedor_contrasena">
<div class="contenedor_titulo">
<p> CAMBIAR CONTRASEÑA </p>
</div>
<div class="contenido_contrasena">
<div class="palomita">
<img src="<?php echo base_url()?>images/palimita_morada.png"/>
</div>
<div class="contenido_contrasena_notificacion">
Tu contraseña ha sido modificada con exito.
Se ha enviado una copia al email: <?=$this->session->userdata('correo');?>
</div>

</div>

</br>
</div>
</div>

<div id="contenedor_cambiar_contrasena_error" class="contenedor_anuncio_detalle" style="display:none;">
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_cambiar_contrasena_error');"/> </div>
<div class="contenedor_contrasena">
<div class="contenedor_titulo">
<p> CAMBIAR CONTRASEÑA </p>
</div>
<div class="contenido_contrasena">
<div class="palomita">
<img src="<?php echo base_url()?>images/tache_morada.png"/>
</div>
<div class="contenido_contrasena_notificacion">
<strong> Ha ocurrido un error. </strong>
<p> Intentelo nuevamente</p>
</div>

</div>

</br>
</div>
</div>


<?php $this->load->view('general/menu_view'); ?>








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
<p class="margen_15_left"> <a href="#"> Tutorial para subir video a <img src="<?php echo base_url()?>images/logo_youtube.png" width="43" height="16"/> </a> </p>
</br>
<p class="margen_15_left"> 

<!-- <iframe src="../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
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

<iframe class="youtube_video" src="http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


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
</div> 
<!-- Fin del contenedor publicar anucio fondo negro 

<div class="menu_principal" id="menu_principal" >
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="<?php echo base_url()?>"> Inicio </a>
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
<li>
<a href="<?=base_url()?>principal/tienda">Tienda</a>
</li>
<li>
Directorio
</li>
</ul>
</div>
</div> -->

<div class="titulo_seccion">
MI PERFIL
</div>
  <div class="info_user"><?php echo $this->session->flashdata('pago_directorio_exitoso'); ?></div>
<div class="contenedor_menu_perfil">
<ul class="menu_perfil">
<li class="icono_seleccion mi_perfil">
<p style="margin-top:13px; margin-left:10px;"><a id="mi_perfil" href="<?=base_url()?>usuario/cuenta/miPerfil/" style="text-decoration:none;color:white;" class="ajaxLink">Mi Perfil</a></p>
</li>
<li class="anuncios">
<p style="margin-top:5px; margin-left:10px;"><a id="anuncios" href="<?=base_url()?>usuario/cuenta/anuncios/" style="text-decoration:none;color:white;" class="ajaxLink"> Admin. Anuncios</a> </p>
</li>
<li class="mensajes">
<p style="margin-top:5px; margin-left:10px;"><a id="mensajes" href="<?=base_url()?>usuario/cuenta/mensajes/" style="text-decoration:none;color:white;" class="ajaxLink"> Mensajes</a> </p>
</li>
<li class="cupones">
<p style="margin-top:5px; margin-left:10px;"><a id="cupones" href="<?=base_url()?>usuario/cuenta/cupones/" style="text-decoration:none;color:white;" class="ajaxLink"> Cupones</a> </p>
</li>
<li class="favoritos">
<p style="margin-top:5px; margin-left:10px;"><a id="favoritos" href="<?=base_url()?>usuario/cuenta/favoritos/" style="text-decoration:none;color:white;" class="ajaxLink">Favoritos</a> </p>
</li>
<li class="soporte">
<p style="margin-top:5px; margin-left:10px;"><a id="soporte" href="<?=base_url()?>usuario/cuenta/soporte/" style="text-decoration:none;color:white;" class="ajaxLink">Soporte Tecnico</a> </p>
</li>
<li class="facturas">
<p style="margin-top:5px; margin-left:10px;"><a id="facturas" href="<?=base_url()?>usuario/cuenta/facturas/" style="text-decoration:none;color:white;" class="ajaxLink">Mis Facturas</a> </p>
</li>
</ul>


</div>



<div id="contenedor_central">
<div id="espacio_izquierda" class="seccion_izquierda_secciones">
<ul class="iconos">
<li> <img src="<?php echo base_url()?>images/compras.png"/></li>
<li><img src="<?php echo base_url()?>images/sesion.png"/></li>

</ul>
</div>


<div class="contenedor_central" style="margin-bottom:45px;">
<div id="appSectionContainer">
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
<?php $this->load->view('general/footer_view');?>

</html>
