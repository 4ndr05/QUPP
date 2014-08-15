<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-419">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventos-Quierounperro.com</title>
<link rel="shortcut icon" href="<?php echo base_url() ?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/reset.css" media="screen"></link>
 <link rel="stylesheet" href="<?php echo base_url() ?>css/jPages.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/general.css" media="screen"></link> <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/venta.css" media="screen"></link><link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/directorio.css" media="screen"></link> <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/eventos.css" media="screen"></link>

   <script src="<?php echo base_url() ?>js/jquery-1.10.2.js"></script>
     <script src="<?php echo base_url() ?>js/jPages.js"></script>
     <script src="<?php echo base_url() ?>js/funciones_venta.js"></script>
     <script src="<?php echo base_url() ?>js/funciones_evento.js"></script>
   <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.cycle.all.js"></script>
   <script src="<?php echo base_url() ?>js/funciones_.js" type="text/javascript"></script>
       <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.customSelect.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>js/funcion_select.js"></script>
  


</head>

<body>

<div id="mini_menu" >
<input type="hidden" id="efecto" value="corre"/>
<img style="float:left;" id="bajar_menu" src="images/bajar_menu_dos.png" onclick="oculta('bajar_menu'); muestra('menu_oculto');"/>
<div id="menu_oculto" class="menu_principal" style=" display:none;">
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="index.html">
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

<img id="horizontal_compras_mini"  onmouseover="mostrar_icono('horizontal_compras'); ocultar_icono('horizontal_compras_mini');"class="iconos_flotantes" src="<?php echo base_url() ?>images/compras_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_compras_mini'); ocultar_icono('horizontal_compras');"  id="horizontal_compras" src="<?php echo base_url() ?>images/compras_horizontal.png"/>

</li>
<li>
<img id="horizontal_ingresar_mini" onmouseover="mostrar_icono('horizontal_ingresar'); ocultar_icono('horizontal_ingresar_mini');" class="iconos_flotantes" src="<?php echo base_url() ?>images/ingresar_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_ingresar_mini'); ocultar_icono('horizontal_ingresar');" id="horizontal_ingresar" src="<?php echo base_url() ?>images/ingresar_horizontal.png"/>
</li>

<li>
<img id="horizontal_registrate_mini" onmouseover="mostrar_icono('horizontal_registrate'); ocultar_icono('horizontal_registrate_mini');"class="iconos_flotantes" src="<?php echo base_url() ?>images/registrate_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_registrate_mini'); ocultar_icono('horizontal_registrate');" id="horizontal_registrate" src="<?php echo base_url() ?>images/registrate_horizontal.png"/>
</li>
</ul>
</div>
<div id="contenedor_central_superior" class="contenedor_central_superior">

<div id="banner_superior">
<img src="<?php echo base_url() ?>images/logo_superior.png" width="348" height="93" class="contenido_superior"/>

<div class="slideshow">
<img src="<?php echo base_url() ?>images/banner_superior/1.png" width="638" height="93"/>
<img src="<?php echo base_url() ?>images/banner_superior/2.png" width="638" height="93"/>
<img src="<?php echo base_url() ?>images/banner_superior/3.png" width="638" height="93"/>
	</div>



</div>
</div>






<div id="contenedor_publicar_anuncio" class="contenedor_publicar_anuncio" style=" display:none;">

<!-- Inicio contenedor pap publicar anuncio aunucio !--> 
<div id="publicar_anuncio" class="pubicar_anuncio">



<!-- Inicio Paso UNO -->
<div id="paso_uno">

<div class="crerar_publicar_anuncio">
<img src="<?php echo base_url() ?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos">
<div class="titulo_de_pasos"> PUBLICAR   EVENTO </div>
<div class="instrucciones_pasos"> ¿Quieres anunciar tu evento? ¡Contactanos! </div>
<div class="contenido_indicacion">
<table width="616" style="margin-left: 31px;
margin-top: 30px;">
<tr> 
<td width="260" rowspan="4">
<img src="<?php echo base_url() ?>images/pero_paso_uno.png" class="perro_paso_uno"/>
</td>
<td width="147">
<p>Nombre:</p> <br/> </td>  <td width="193"><input type="text"/> </td>
</tr>
<tr>
<td><p> E-mail:</p> <br/></td> <td> <input type="text"/> </td>
</tr>
<tr>
<td><p> Comentarios:</p> <br/></td> <td><textarea rows="10" cols="30"> </textarea> </td>
</tr>
</table>


</br>
<ul class="morado_directorio">
<li onclick="muestra('paso_dos'); oculta('paso_uno');">

Enviar
</li>
</ul> 


</div>

</div>

</div>
<!-- FIN anuncio UNO -->



</div>
</div>
</div> 
<!-- Fin del contenedor publicar anucio fondo negro -->

<div class="menu_principal" id="menu_principal" >
<div id="contenedor_menu_principal" class="contenedor_menu_principal"> 
<ul class="principal">
<li>
<a href="index.html">
Inicio
</a>
</li>
<li>
<a href="venta.html"> Venta </a>
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
<img src="<?php echo base_url() ?>images/calendario.png"/> EVENTOS DEL MES

</div>
<div class="contenedor_buscador">

<div class="fondo_select_directorio" style="margin-left:-319px;">
<select class="styled" id="estado">
<option > Selecciona un Estado </option>
<option style="background-color: #BCBEC0;">AGUASCALIENTES</option>
<option style="background-color: #BCBEC0;">COLIMA</option>

</select>
</div>

<div class="contenedor_buscar_directorio">
<input type="text" class="buscar_directorio" size="4" value="Palabras clave" />
<input type="button" height="40" value="   " class="boton_palabras_clave" />
</div>
</div>

<div id="contenedor_central">
<div id="espacio_izquierda" class="seccion_izquierda_secciones">
<ul class="iconos">
<li> <img src="<?php echo base_url();?>images/compras.png"/></li>
<li><img src="<?php echo base_url();?>images/sesion.png"/></li>
<li>
<img src="<?php echo base_url();?>images/registrate.png"/>
</li>
</ul>
</div>


<div class="contenedor_central" style="margin-bottom:45px;">
</br>
      <!-- item container -->
      <ul id="itemContainer_evento" style="min-height:100px;">
      <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url()?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
      
       </div>
        <ul class="ver_mas_evento"><li onclick="window.location.href = 'eventos_mes_detalle.html'"> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
            <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url()?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
          
       </div>
       <ul class="ver_mas_evento"><li> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
            <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url() ?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
         
       </div>
        <ul class="ver_mas_evento"><li> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
            <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url() ?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
         
       </div>
       <ul class="ver_mas_evento"><li> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
            <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url() ?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
         
       </div>
        <ul class="ver_mas_evento"><li> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
        <!-- Contenedor evento -->
      <div class="contenedor_evento" >
      <div class="contenedor_imagen_evento">
      <div class="contenedor_fecha_evento"> 
      <p class="dia">27</p>
      <p class="mes">Julio</p>
      </div>
      
      <img src="<?php echo base_url() ?>images/cale_event.png" />
       </div>
       <div class="contenido_evento">
       <p class="titulo_evento_mes">
       TALLER DE ADIESTRAMIENTO CANINO NIVEL 2 QUERÉTARO
       </p>
       
       </br>
       </br>
       
       <p><strong>FECHA:</strong> 9 DE AGOSTO AL 27 DE SEPTIEMBRE 2014  </p>
       <p> <strong>HORA</strong> 10:00 A 11:30 </p>
       <p> <strong>LUGAR</strong> INSTALACIONES DE PERROSENNES  SANTA ROSA JÁUREGUI, QUERÉTARO, QUERÉTARO, MÉXICO</p>
       
          
       </div>
       <ul class="ver_mas_evento"><li> Ver más... &nbsp;</li> </ul>
      </div>
      
      <!-- FIN contenedor evento -->
  
       </ul>
 
      </br>
      </br>
      <div style="text-align:center;">
       <!-- navigation holder -->
      <div class="holder">  </div>
      </div>
      </div>
	  
	  
	  <div class="seccion_derecha_paquetes">
<ul class="aqui_crear_anuncio_eventos">
<li onclick="muestra('contenedor_publicar_anuncio');">

</li>
</ul>
</div>
 
</div>

      

<div class="slideshow_tres" >
<img src="<?php echo base_url() ?>images/banner_inferior/1.png" width="638" height="93"/>
<img src="<?php echo base_url() ?>images/banner_inferior/2.png" width="638" height="93"/>
<img src="<?php echo base_url() ?>images/banner_inferior/3.png" width="638" height="93"/>
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
<img src="<?php echo base_url() ?>images/perro_final.png" width="46" height="42"/>
<a href="#" ><img  src="<?php echo base_url() ?>images/ico_fb.png" width="32" height="32" style="margin-top:10px;"/></a>
<a href="#" class="margen"><img src="<?php echo base_url() ?>images/ico_tw.png" width="32" height="32" style="margin-top:10px;"/></a>
</div>
<div class="division_final">

</div>
<div class="pie_pagina">
Copyright © 2014 QuieroUnPerro.com
</div>

</body>
</html>
