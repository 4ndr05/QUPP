<?php $this->load->view('general/general_header_view')?>

<script type="text/javascript">        
            jQuery(document).ready(function($) {                
                <?php if(isset($errorActivo) && isset($mensaje)): ?>
                        $('<label>Usuario Activado.</label>').appendTo('#specificError');
                        muestra('contenedor_error');
                        oculta('contenedor_registro');
                <?php endif; ?>
                <?php if(isset($errorActivo2) && isset($mensaje)): ?>
                        $('<label>Lamentablemente, el código de confirmación que intentas activar no existe.</label>').appendTo('#specificError');
                        muestra('contenedor_error');
                        oculta('contenedor_registro');
                <?php endif; ?>

                $( "input" ).on( "click", function() {
               var user =  $( "input:checked" ).val();
               console.log(user);
              if(user == 2){
       
                $('#map-canvas').show();
              }
              if (user == 3){
       
              $('#map-canvas').show();
              }
              });

       
            });
          </script>


<!--		CONTENEDOR LOGIN							-->
<!-- ------------------------------------------------------ -->
<form action="<?=base_url()?>sesion/login/principal/principal" id="login" method="post">
<div class="contenedor_login" id="contenedor_login" style="display:none;">
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_login');"/> </div>

<div class="registro_normal">
<div class="titulo_registro"> INGRESAR </div>
<div class="texto_inputs" >
<p> Usuario:</p>

<p style="margin-top:15px;">Contraseña:</p>

</div>

<div class="contendeor_inputs" >
<p><input type="text" name="correo"/> *</p>
<p><input type="password" name="contrasena"/> *</p>
</div>
</br>
<ul class="morado_reg">
<li>
<input type="submit" />
</li>
</ul>


<div class="subrayado" onclick="muestra('envio_con');">¿Olvidaste contraseña?</div>
<div id="envio_con" class="envio_con"> 
Se ha enviado contraseña al correo electronico indicado
</div>
<div class="subrayado" onclick="muestra('contenedor_registro');oculta('contenedor_login');"> Crear cuenta </div>
</br>

</div>

</div>
</form>
<!-- ------------------------------------------------------ -->
<!--		FIN    CONTENEDOR LOGIN							-->








<!--		CONTENEDOR REGISTRO							-->
<!-- ------------------------------------------------------ -->
<form action="<?php echo base_url()?>registro/registrar" id="registerNow" method="get" autocomplete="off" enctype="multipart/form-data">
<div class="contenedor_registro" id="contenedor_registro" style="display:none;"> <!-- Contenedor negro reistro-->
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_registro');"/> </div>


<div class="registro_normal"> <!-- Contenedor morado registro -->

<div class="titulo_registro"> REGISTRATE </div>

<div class="texto_inputs" >
<p> Nombre:</p>

<p style="margin-top:15px;">Apellido:</p>

<p style="margin-top:15px;">correo:</p>

<p style="margin-top:15px;">Telefono:</p>

<p style="margin-top:15px;">contrasena:</p>

<p>Confirmar contrasena:</p>

 </div>
<div class="contendeor_inputs" >
<p><input type="text" name="nombre" id="nombre" class="validate[required]"/> *</p>
<p><input type="text" name="apellido" id="apellido" class="validate[required]"/> *</p>

<p><input type="text" name="correo" class="validate[required,custom[email],ajax[isthereemail]]" /> *</p>

<p><input type="text" name="telefono" class="validate[custom[integer]]"/></p>

<p><input type="password" name="contrasena"  id="contrasena1" class="validate[required]"/> *</p>
</br>
<p><input type="password" name="confirmar"  id="contrasena2" class="validate[required,equals[contrasena1]]"/> *</p>


</div>

<div class=" informacion_adicional_registro">
<input type="radio" name="radiog_dark" id="radio1" class="css-checkbox" checked="checked"  value="1"/><label for="radio1" class="css-label radGroup2" onclick="obtener_usuario('datos_faltantes_usuario'); oculta('datos_faltantes_negocio');oculta('datos_faltantes_asociacion');oculta('ocultar_info_adicional');muestra('llenar_info_adicional');"> Usuario</label>
&nbsp;&nbsp;
<input type="radio" name="radiog_dark" id="radio2" class="css-checkbox" value="2"/>
<label for="radio2" class="css-label radGroup2" onclick="obtener_usuario('datos_faltantes_negocio');oculta('datos_faltantes_usuario');oculta('datos_faltantes_asociacion');oculta('ocultar_info_adicional');oculta('ocultar_info_adicional');muestra('llenar_info_adicional');"> Negocio </label>
&nbsp;&nbsp;
<input type="radio" name="radiog_dark" id="radio3" class="css-checkbox" value="3"/><label for="radio3" class="css-label radGroup2"  onclick="obtener_usuario('datos_faltantes_asociacion'); oculta('datos_faltantes_usuario');oculta('datos_faltantes_negocio');oculta('ocultar_info_adicional');oculta('ocultar_info_adicional');muestra('llenar_info_adicional');"> Asociación </label>
</br>
<p><input name="recibirCorreo" type="checkbox" value="1" /> <label> Quiero recibir información acerca de promociones </label></p>


<p><input name="terminosCondiciones" type="checkbox" value="1" class="validate[required]"/> <label> He leído y acepto los <a href="<?php echo base_url()?>#" class="link_blanco">Términos y Condiciones</a> y <a href="<?php echo base_url()?>#" class="link_blanco">la Política de Privacidad</a> </label></p>


<font class="asterisco">Los datos marcados con un astrisco (*) son obligatorios </font>
 </div>
 </br>
<div class="llenar_info_adicional" id="llenar_info_adicional" onclick="mostrar_formulario(); muestra('ocultar_info_adicional'); oculta('llenar_info_adicional');showMap();">
<input type="hidden" id="elegir_usuario" value="datos_faltantes_usuario"/>
 <img src="<?php echo base_url()?>images/flecha_blanca.png"/> Llenar información adicional </div>
 
<div class="llenar_info_adicional" id="ocultar_info_adicional" onclick="oculta('datos_faltantes_usuario');oculta('datos_faltantes_negocio');oculta('datos_faltantes_asociacion');oculta('ocultar_info_adicional'); muestra('llenar_info_adicional');hideMap();" style="display:none;">
 <img src="<?php echo base_url()?>images/flecha_blanca.png"/> Despues llenar información </div>

<div id="datos_faltantes_usuario" class="datos_faltantes_usuario" style="display:none;">
</br>
<div class="datos_fiscales"> Datos fiscales </div>


<div class="texto_inputs" >
<p> Razón Social:</p>

<p style="margin-top:15px;">RFC:</p>

<p style="margin-top:15px;">Calle:</p>

<p style="margin-top:15px;">No. Exterior:</p>

<p style="margin-top:15px;">CP:</p>

<p style="margin-top:15px;">Municipio:</p>

<p style="margin-top:15px;">Estado:</p>

<p style="margin-top:15px;">País:</p>


 </div>

<div class="contendeor_inputs" >
<p><input type="text" name="razon"/> </p>
<p><input type="text" name="RFC"/> </p>

<p><input type="text" name="calle"/> </p>

<p><input type="text" name="no_exterior"/></p>

<p><input type="text" name="cp"/> </p>

<p><input type="text" name="municipio"/> </p>
<p><select name="estado" id="estado">
     <option> --- </option>
  <?php 
  
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>"><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
   </select></p>
<p><select name="pais"> 
      <option value="147">México</option>
  <?php 
    if($paises != null):
      foreach ($paises as $pais):
  ?>
      <option value="<?php echo $pais->paisID?>"><?php echo $pais->nombrePais ?></option>
    
    <?php endforeach;
    endif; ?>
   </select> </p>


</div>



</div>



<div id="datos_faltantes_negocio" class="datos_faltantes_negocio" style="display:none;"> <!--- Inicio datos negocio -->


<div class="datos_fiscales"> Datos fiscales </div>

<div class="texto_inputs" >
<p> Razón Social:</p>

<p style="margin-top:15px;">RFC:</p>

<p style="margin-top:15px;">Calle:</p>

<p style="margin-top:15px;">No. Exterior:</p>

<p style="margin-top:15px;">CP:</p>

<p style="margin-top:15px;">Municipio:</p>

<p style="margin-top:15px;">Estado:</p>

<p style="margin-top:15px;">País:</p>


 </div>

<div class="contendeor_inputs" >
<p><input type="text" name="razonN"/> </p>
<p><input type="text" name="RFCN"/> </p>

<p><input type="text" name="calleN"/> </p>

<p><input type="text" name="no_exteriorN"/></p>

<p><input type="text" name="cpN"/> </p>

<p><input type="text" name="municipioN"/> </p>
<p><select name="estadoN">
     <option> --- </option>
  <?php 
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>"><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
   </select></p>
<p><select name="paisN"> 
      <option value="147">México</option>
  <?php 
    if($paises != null):
      foreach ($paises as $pais):
  ?>
      <option value="<?php echo $pais->paisID?>"><?php echo $pais->nombrePais ?></option>
    
    <?php endforeach;
    endif; ?>
   </select> </p>


</div>

<div class="datos_fiscales"> Datos del negocio </div>

<div class="texto_inputs" >
Nombre:
</div>

<div class="contendeor_inputs" >
<p><input type="text" name="nombre_negocio"/> </p>
</div>
<div class="giro_negocio"> 

<div class="contenedor_giros">
    <label>
      <input type="hidden" name="CheckboxGroup1[]" id="CheckboxGroup1[]" value="0" />
      <input type="checkbox" name="CheckboxGroup1[]" value="1" id="CheckboxGroup1_0" />
      Accesorios para mascotas</label>
    </br>
    <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="2" id="CheckboxGroup1_1" />
      Veterinaria</label>
  </br>
  
     <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="3" id="CheckboxGroup1_2" />
      Estetica canina</label>
          <label>
          </br>
      <input type="checkbox" name="CheckboxGroup1[]" value="4" id="CheckboxGroup1_3" />
    Adiestramiento canino</label>
    
  
  
  </div>
  
  <div class="contenedor_giros">
    <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="5" id="CheckboxGroup1_4" />
     Centro de sociabilización</label>
    </br>

    <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="6" id="CheckboxGroup1_5" />
     Criadero de perros</label>
  </br>
  
     <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="7" id="CheckboxGroup1_6" />
      Hotel y pensión canina</label>
          <label>
          </br>
      <input type="checkbox" name="CheckboxGroup1[]" value="8" id="CheckboxGroup1_7" />
   Alimento y medicamento </label>
    
  
  
  </div>
   <div class="contenedor_giros">
    <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="9" id="CheckboxGroup1_8" />
      Guarderia de perros</label>
    </br>
    <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="10" id="CheckboxGroup1_9" />
      Tienda de mascotas</label>
  </br>
  
     <label>
      <input type="checkbox" name="CheckboxGroup1[]" value="11" id="CheckboxGroup1_10" />
      Servicios funerarios</label>
          <label>
          </br>
      <input type="checkbox" name="CheckboxGroup1[]" value="12" id="CheckboxGroup1_11" />
     Servico de paseo</label>
    
  
  
  </div>

</div>


<div class="texto_inputs" >
<p>Contacto:</p>

<p style="margin-top:15px;">Teléfono:</p>
<p style="margin-top:15px;">Calle:</p>
<p style="margin-top:15px;">Número:</p>
<p style="margin-top:15px;">Colonia:</p>
<p style="margin-top:15px;">Municipio:</p>
<p style="margin-top:15px;">Estado:</p>
<p style="margin-top:15px;">Código Postal:</p>
<p style="margin-top:15px;">correo:</p>
<p style="margin-top:15px;">Página web:</p>
<p style="margin-top:15px;">Logo:</p>
<p style="margin-top:15px;">Descripción:</p>
<p style="margin-top:35px;">Ubicación:</p>
</div>

<div class="contendeor_inputs" >
<p><input type="text" name="nombre_contactoN"/> </p>
<p><input style="margin-top:3px;" type="text" name="telefonoN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="calleN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="numN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="coloniaN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="municipioN1"/> </p>
<p><select name="estadoN1"/>
     <option> --- </option>
  <?php 
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>"><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
   </select> </p>
<p><input style="margin-top:3px;" type="text" name="cpN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="correoN1"/> </p>
<p><input style="margin-top:3px;" type="text" name="pagina_webN1"/> </p>
<p><input style="margin-top:3px;" type="file" name="logoN1" id="logoN1"/> </p>
<p><textarea rows="3" cols="40" style="margin-top:3px;" name="descripcionN1"> </textarea> </p>


 
    
   
    
</div>




</div><!-- fin datos negocio--->



<div id="datos_faltantes_asociacion" class="datos_faltantes_asociacion" style="display:none;"> <!--- Inicio datos Asociación -->


<div class="datos_fiscales"> Datos fiscales </div>

<div class="texto_inputs" >
<p> Razón Social:</p>

<p style="margin-top:15px;">RFC:</p>

<p style="margin-top:15px;">Calle:</p>

<p style="margin-top:15px;">No. Exterior:</p>

<p style="margin-top:15px;">CP:</p>

<p style="margin-top:15px;">Municipio:</p>

<p style="margin-top:15px;">Estado:</p>

<p style="margin-top:15px;">País:</p>


 </div>

<div class="contendeor_inputs" >
<p><input type="text" name="razonAC"/> </p>
<p><input type="text" name="RFCAC"/> </p>

<p><input type="text" name="calleAC"/> </p>

<p><input type="text" name="no_exterioACr"/></p>

<p><input type="text" name="cpAC"/> </p>

<p><input type="text" name="municipioAC"/> </p>
<p><select name="estadoAC"/>
     <option> --- </option>
  <?php 
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>"><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
   </select></p>
<p><select name="paisAC"/> 
      <option value="147">México</option>
  <?php 
    if($paises != null):
      foreach ($paises as $pais):
  ?>
      <option value="<?php echo $pais->paisID?>"><?php echo $pais->nombrePais ?></option>
    
    <?php endforeach;
    endif; ?>
   </select> </p>


</div>

<div class="datos_fiscales"> Datos de la Asociación </div>




<div class="texto_inputs" >
<p> Nombre: </p>
<p style="margin-top:15px;">Contacto:</p>

<p style="margin-top:15px;">Teléfono:</p>
<p style="margin-top:15px;">Calle:</p>
<p style="margin-top:15px;">Número:</p>
<p style="margin-top:15px;">Colonia:</p>
<p style="margin-top:15px;">Municipio:</p>
<p style="margin-top:15px;">Estado:</p>
<p style="margin-top:15px;">Código Postal:</p>
<p style="margin-top:15px;">correo:</p>
<p style="margin-top:15px;">Página web:</p>
<p style="margin-top:15px;">Logo:</p>
<p style="margin-top:15px;">Descripción:</p>
<p style="margin-top:35px;">Ubicación:</p>
</div>

<div class="contendeor_inputs" >
<p><input type="text" name="nombre_ac"/> </p>
<p><input type="text" name="nombre_contactoAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="telefonoAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="calleAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="numAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="coloniaAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="municipioAC1"/> </p>
<p><select name="estadoAC1"/>
     <option> --- </option>
  <?php 
    if($estados != null):
      foreach ($estados as $edo):
  ?>
      <option value="<?php echo $edo->estadoID?>"><?php echo $edo->nombreEstado ?></option>
    
    <?php endforeach;
    endif; ?>
   </select> </p>
<p><input style="margin-top:3px;" type="text" name="cpAC1"/> </p>
<p><input style="margin-top:3px;" type="text" name="correoA1C"/> </p>
<p><input style="margin-top:3px;" type="text" name="pagina_webAC1"/> </p>
<p><input style="margin-top:3px;" type="file" name="logoAC1" id="logoAC1"/> </p>
<p><textarea rows="3" cols="40" style="margin-top:3px;" name="descripcionAC1"> </textarea> </p>

  
   
    
</div>




</div><!-- fin datos Asociacion -->

 <div id="map-canvas" style="display:none;">
 <?php $this->load->view($mapaSegundo);?>
 
 </div>  

<input type="hidden" name="newLat" id="newLat" value="" />
<input type="hidden" name="newLng" id="newLng" value="" />

</br>
<ul class="morado_reg">
<li><!--<a href="#" id="suscribir" style="text-decoration:none; color:#FFF;">Suscribirse</a>--><input type="submit" value="Suscribir" class="el_submit"/></li>
</ul>


</div><!-- fin contenedor morado registro -->

</div> <!-- Fin contenedor negro registro -->

</form>
<!--		FIN CONTENEDOR REGISTRO							-->
<!-- ------------------------------------------------------ -->




<!--		EXITO REGISTRO							-->
<!-- ------------------------------------------------------ -->
<div class="contenedor_registro" id="contenedor_correcto" style="display:none;"> <!-- Contenedor negro reistro-->
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_correcto');"/> </div>

<div class="registro_normal"> <!-- Contenedor morado registro -->

<div class="titulo_registro"> REGISTRATE </div>
</br>
<div class="imagen_confirmacion">
<img src="<?php echo base_url()?>images/palomita.png" />
</div>
<div class="contenido_confirmacion"> 
<strong> Correcto </strong>
</br></br>
<div> Bienvenido </div>
<div id="confirm">
</div>

 </div>
</div>
</br>


</div>

<!--		FIN EXITO REGISTRO						-->
<!-- ------------------------------------------------------ -->


<!--		ERROR REGISTRO							-->
<!-- ------------------------------------------------------ -->

<div class="contenedor_registro" id="contenedor_error" style="display:none;"> <!-- Contenedor negro reistro-->
<div class="cerrar_registro"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_error');"/> </div>

<div class="registro_normal"> <!-- Contenedor morado registro -->

<div class="titulo_registro"> REGISTRATE </div>
</br>
<div class="imagen_confirmacion">
<img src="<?php echo base_url()?>images/tache.png" />
</div>
<div class="contenido_confirmacion"> 
<strong> Ha ocurrido un error </strong>
</br>
<div id="specificError">

</div>
 </div>
</div>
</br>

</div>

</div>

<!--		FIN ERROR REGISTRO							-->
<!-- ------------------------------------------------------ -->


<div id="contenedor_publicar_anuncio" class="contenedor_publicar" style=" display:none">

<!-- Inicio contenedor pap publicar anuncio aunucio !--> 
<div id="publicar_anuncio" class="pubicar_anuncio_mini">
    <?php $this->load->view('partial/_pasos_anuncio', array('paquetes' => $paquetes, 'estados' => $estados, 'razas' => $razas)); ?>

</div>
</div>




<div id="mini_menu" >
<input type="hidden" id="efecto" value="corre"/>
<img src="<?php echo base_url()?>images/bajar_menu_dos.png" id="bajar_menu" style="float:left; margin-left:10px;" onclick="oculta('bajar_menu'); muestra('menu_oculto');"/>
<div id="menu_oculto" class="menu_principal" style=" display:none;">
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
</div>
</div>

<div id="iconos_ocultos" class="iconos_ocultos">


<ul class="iconos_estatus">
<li>

<img id="horizontal_compras_mini"  onmouseover="mostrar_icono('horizontal_compras'); ocultar_icono('horizontal_compras_mini');"class="iconos_flotantes" src="<?php echo base_url()?>images/compras_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_compras_mini'); ocultar_icono('horizontal_compras');"  id="horizontal_compras" src="<?php echo base_url()?>images/compras_horizontal.png" onclick="window.location='<?=base_url()?>carrito';"/>

</li>
<li>
<img id="horizontal_ingresar_mini" onmouseover="mostrar_icono('horizontal_ingresar'); ocultar_icono('horizontal_ingresar_mini');" class="iconos_flotantes" src="<?php echo base_url()?>images/ingresar_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_ingresar_mini'); ocultar_icono('horizontal_ingresar');" onclick="muestra('contenedor_login');" id="horizontal_ingresar" src="<?php echo base_url()?>images/ingresar_horizontal.png" />
</li>

<li>
<img id="horizontal_registrate_mini" onmouseover="mostrar_icono('horizontal_registrate'); ocultar_icono('horizontal_registrate_mini');"class="iconos_flotantes" src="<?php echo base_url()?>images/registrate_horizontal_mini.png"/>

<img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_registrate_mini'); ocultar_icono('horizontal_registrate');" id="horizontal_registrate" src="<?php echo base_url()?>images/registrate_horizontal.png"/>
</li>
</ul>
</div>

<div class="">

<div class="contenedor_central_banner">

<div id="contenedor_central_superior" class="contenedor_central_superior">

<div id="banner_superior">
<img src="<?php echo base_url()?>images/logo.png" width="348" height="93" class="contenido_superior"/>

<div class="slideshow">
<img src="<?php echo base_url()?>images/banner_superior/1.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_superior/2.png" width="638" height="93"/>
<img src="<?php echo base_url()?>images/banner_superior/3.png" width="638" height="93"/>
	</div>

</br>

</div>
</div>

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
</div>

</div>

</div>

<center>
</br>
<div id="contenedor_central">
<div id="espacio_izquierda" class="seccion_izquierda">
<ul class="iconos" id="iconos_grandes">
<li onclick="window.location='<?=base_url()?>carrito';"> <img src="<?php echo base_url()?>images/compras.png"/></li>
<li onclick="muestra('contenedor_login');"><img src="<?php echo base_url()?>images/sesion.png"/></li>
<li onclick="muestra('contenedor_registro');">
<img src="<?php echo base_url()?>images/registrate.png"/>
</li>
</ul>
</div>

<div id="banner_central">
       <div class="container" id="carousel_container">
    <div class="row">
      <div class="span12">
        <div id="artCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#artCarousel" data-slide-to="1"></li>
            <li data-target="#artCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active"><img src="<?php echo base_url()?>images/900x500_1.jpg" alt="Model 1">
              <div class="carousel-caption">
                <p>En nuestra seccion de Cruza encuentra la pareja perfecta para tu perrito.</p>
              </div>
            </div>
            <div class="item"><a href="<?php echo base_url()?>#" target="_blank"><img src="<?php echo base_url()?>images/900x500_2.jpg" alt="Model 2"></a>
            
             <div class="carousel-caption">
               Adopta a un perrito, sera tu compañero perfecto.
              </div>
            
            </div>
           <div class="item"><a href="<?php echo base_url()?>#" target="_blank"><img src="<?php echo base_url()?>images/900x500_3.jpg" alt="Model 2"></a>
            
             <div class="carousel-caption">
               Vende con nosotros a tus perritos.
              </div>
            
            </div>
          </div>
          <a class="left carousel-control" href="<?php echo base_url()?>#artCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="<?php echo base_url()?>#artCarousel" data-slide="next">&rsaquo;</a> 
        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion_derecha" id="seccion_derecha">
<div id="contenido_fb" style="height:192px; margin-bottom:15px; ">
<!-- MyFavoritePetShop -->
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-like-box" data-href="<?php echo base_url()?>https://www.facebook.com/interKreativa" data-height="192" data-width="215" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
</div>

<div id="banner_publicidad_derecha" class="slideshow_dos" style="height:200px; margin-top:10px;">
<img src="<?php echo base_url()?>images/banner_lateral/1.png" width="215" height="192"/>

<img src="<?php echo base_url()?>images/banner_lateral/2.png" alt="">
<img src="<?php echo base_url()?>images/banner_lateral/3.png" alt="">
   
</div>

</div>
<div id="contenedor_paquetes" class="contenedor_paquetes">

<a href="<?php echo base_url() ?>#" class="paquete_comprar reset" data-paquete='{"id":"<?php echo $paquetes[0]->paqueteID ?>","nombre":"<?php echo $paquetes[0]->nombrePaquete ?>","vigencia":"<?php echo $paquetes[0]->vigencia ?>","precio":"<?php echo $paquetes[0]->precio ?>"}'>
    <div class="paquetes_izquierda">
        <div class="title_paquetes">
            <div class="lateral_lite"></div>
            <img src="<?php echo base_url() ?>images/perrito_lite.png" class="margen"/> <font
                class="title_paquetes_titilos"> PAQUETE <?php echo strtoupper($paquetes[0]->nombrePaquete) ?> </font>
        </div>
        <div class="precio_paquete_lite">
            <?php if ($paquetes[0]->precio == 0): ?>
                <div class="el_titulo_paquete_lite"> Gratis</div>
                <div class="descripcion_precio_paquete_lite">al crear tu usuario</div>
            <?php else: ?>
                <div class="precio_paquete_regular"> $<?php echo $paquetes[0]->precio ?></div>
            <?php endif; ?>
        </div>
        <br/>

        <div class="descripcion_paquetes">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes">
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
        <div class="iconos_paquetes">
            <ul>
                <li>
                    <?php if ($paquetes[0]->cantFotos > 0): ?>
                        <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"> <?php echo $paquetes[0]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_of.png"/>
                    <?php endif; ?>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto.png">
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->vigencia ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario.png"/>
                </li>
                <li>
                    <?php if ($paquetes[0]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"> <?php echo $paquetes[0]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png"/>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if ($paquetes[0]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_lite"> <?php echo $paquetes[0]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_lite.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"> <?php echo $paquetes[0]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png"/>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</a>
<a href="<?php echo base_url() ?>#" class="paquete_comprar reset" data-paquete='{"id":"<?php echo $paquetes[1]->paqueteID ?>","nombre":"<?php echo $paquetes[1]->nombrePaquete ?>","vigencia":"<?php echo $paquetes[1]->vigencia ?>","precio":"<?php echo $paquetes[1]->precio ?>"}'>
    <div class="paquetes">
        <div class="title_paquetes">
            <div class="lateral_regular"></div>
            <img src="<?php echo base_url() ?>images/perrito_regular.png" class="margen"/>
            <font
                class="title_paquetes_titilos"> PAQUETE <?php echo strtoupper($paquetes[1]->nombrePaquete) ?> </font>

        </div>
        <div class="precio_paquete_regular"> $<?php echo $paquetes[1]->precio ?></div>
        <br/>

        <div class="descripcion_paquetes">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes">
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
        <div class="iconos_paquetes">
            <ul>
                <li>
                    <?php if ($paquetes[1]->cantFotos > 0): ?>
                        <div class="cantidades_detalle_paquete_regular"><?php echo $paquetes[1]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_regular.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"><?php echo $paquetes[1]->cantFotos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_camara_of.png"/>
                    <?php endif; ?>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_regular"> <?php echo $paquetes[1]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto_regular.png">
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_regular"><?php echo $paquetes[1]->vigencia; ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario_regular.png"/>
                </li>
                <li>
                    <?php if ($paquetes[1]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_regular"><?php echo $paquetes[1]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_regular.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"><?php echo $paquetes[1]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png"/>
                    <?php endif; ?>
                </li>

                <li>
                    <?php if ($paquetes[1]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_regular"><?php echo $paquetes[1]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_regular.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"><?php echo $paquetes[1]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png"/>
                    <?php endif; ?>
                </li>

            </ul>
        </div>

    </div>

</a>
<a href="<?php echo base_url() ?>#" class="paquete_comprar reset" data-paquete='{"id":"<?php echo $paquetes[2]->paqueteID ?>","nombre":"<?php echo $paquetes[2]->nombrePaquete ?>","vigencia":"<?php echo $paquetes[2]->vigencia ?>","precio":"<?php echo $paquetes[2]->precio ?>"}'>
    <div class="paquetes_derecha">
        <div class="title_paquetes">
            <div class="lateral_premium"></div>
            <img src="<?php echo base_url() ?>images/perrito_premium.png" class="margen"/> <font
                class="title_paquetes_titilos"> PAQUETE <?php echo strtoupper($paquetes[2]->nombrePaquete) ?> </font>

        </div>
        <div class="precio_paquete_premium"> $<?php echo $paquetes[2]->precio ?></div>
        <br/>

        <div class="descripcion_paquetes">
            <strong>Incluye:</strong>
            <ul class="contenido_paquetes">
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
        <div class="iconos_paquetes">
            <ul>
                <li>
                    <div class="cantidades_detalle_paquete_premium"><?php echo $paquetes[2]->cantFotos ?></div>
                    <img src="<?php echo base_url() ?>images/icono_camara_premium.png"/>
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_premium"> <?php echo $paquetes[2]->caracteres ?></div>
                    <img src="<?php echo base_url() ?>images/icono_texto_premium.png">
                </li>
                <li>
                    <div class="cantidades_detalle_paquete_premium"><?php echo $paquetes[2]->vigencia ?></div>
                    <img src="<?php echo base_url() ?>images/icono_calendario_premium.png"/>
                </li>
                <li>
                    <?php if ($paquetes[2]->cupones > 0): ?>
                        <div class="cantidades_detalle_paquete_premium"><?php echo $paquetes[2]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_premium.png"/>

                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"><?php echo $paquetes[2]->cupones ?></div>
                        <img src="<?php echo base_url() ?>images/icono_ticket_of.png"/>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if ($paquetes[2]->videos > 0): ?>
                        <div class="cantidades_detalle_paquete_premium"><?php echo $paquetes[2]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_premium.png"/>
                    <?php else: ?>
                        <div class="cantidades_detalle_paquete_of"><?php echo $paquetes[2]->videos ?></div>
                        <img src="<?php echo base_url() ?>images/icono_video_of.png"/>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</a>
 </div><!-- Contenedor de paquetes  -->
 
 
 <!-- Inician secciones de contenido -->
 <!-- perros perdidos -->
 <a href="<?php echo base_url()?>#"  style="text-decoration:none; color:#000;" onmouseover="Mostrar('ver_perdidos');Ocultar('ver_raza');Ocultar('ver_mes');Ocultar('ver_curiosos');" >
<div  id="perros_perdidos" class="seccion_inferior_izquierda" >

<div class="contenido_secciones">
<p class="titulo_segunda_seccion"> PERROS PERDIDOS </p>
<p> <strong> Nombre:</strong> Lazy
<strong>Raza:</strong> Akita
<strong>Caracteristicas:</strong> Akita de color blanco, con cafe...</p>

</div>
<div  class="sub_imagenes_dos" >

<img align="center" class="imagen_relleno" src="<?php echo base_url()?>images/perros_perdidos/perro1.png" />

<div id="ver_perdidos" class="ver_mas" style=" display:none;">  Ver más...  </div>

</div>
</div>
</div>
</a>
<!-- End perros perdidos -->
<!-- Raza del mes -->
<a href="<?php echo base_url()?>#" style="text-decoration:none; color:#000;" onmouseover="Mostrar('ver_raza'); Ocultar('ver_perdidos');Ocultar('ver_mes'); Ocultar('ver_curiosos')" >
<div id="la_raza_mes" class="seccion_inferior_izquierda">
<div class="contenido_secciones">
<p class="titulo_segunda_seccion"> LA RAZA DEL MES </p>
<p> 
 El perro de raza labrador es el prototipo del perro de familia, ya que sue... 
</p>

</div>
<div  class="sub_imagenes_dos" >

<img align="center" class="imagen_relleno" src="<?php echo base_url()?>images/raza_mes/la_raza.png" width="87" height="103" />


<div id="ver_raza" class="ver_mas" style=" display:none;">  Ver más...  </div>

</div>
</div>
</a>
<!-- End raza del mes -->

<!-- Eventos del mes -->
<a href="<?php echo base_url()?>#" style="text-decoration:none; color:#000;" onmouseover="Mostrar('ver_mes');Ocultar('ver_raza'); Ocultar('ver_perdidos');Ocultar('ver_curiosos');" >
<div id="eventos_mes" class="seccion_inferior">
<div class="contenido_secciones">
<p class="titulo_segunda_seccion"> EVENTOS DEL MES </p>

<p> Título: Expo Can México 2013.
Fecha del evento: Del 13 al 22 de...
</p>

</div>
<div  class="sub_imagenes_dos">
<img class="imagen_relleno" src="<?php echo base_url()?>images/eventos/eventos_mes.jpg" width="144" height="110" />
<div id="ver_mes" class="ver_mas" style=" display:none;">  Ver más...  </div>

</div>
</div>
</a>
<!-- End eventos del mes -->
<!-- Datos curiosos -->
<a href="<?php echo base_url()?>#" style="text-decoration:none; color:#000;" onmouseover="Mostrar('ver_curiosos');Ocultar('ver_raza'); Ocultar('ver_perdidos');Ocultar('ver_mes');" >
<div id="datos_curiosos" class="seccion_inferior_derecha">
<div class="contenido_secciones">
<p class="titulo_segunda_seccion"> DATOS CURIOSOS </p>

<p> 
La primera semana de vida del cachorro la pasa el 90% del tiempo dormido...
</p>

</div>
<div  class="sub_imagenes_dos">
<img class="imagen_relleno" src="<?php echo base_url()?>images/curiosos/curiosos1.png" width="63" height="119" />

<div id="ver_curiosos" class="ver_mas" style=" display:none;">  Ver más...  </div>

</div>

</div>
</a>
<!-- End datos curioso -->

</div><!-- Contenedor central -->


<div class="separacion_final" >

</div>

<div id="menu_inferior" align="center" >
<div id="acerca_nosotros" class="menu_inferiror">
<p class="title_final">Acerca de nosotros</p>
<div class="contenido_final">
<ul class="sub_menu_inferior">
<li>  - ¿Quiénes Somos? 
</li>
<li>- La comunidad QUP </li>
</ul>
</div>
</div>
<div id="politicas" class="menu_inferiror">
<p class="title_final">Políticas</p>
<div class="contenido_final">
<ul class="sub_menu_inferior">
<li> - Aviso de Privacidad </li>
<li>  - Política de Provacidad </li>
<li> - Términos y Condiciones </li>
</ul>
</div>
</div>
<div id="contacto" class="menu_inferiror">
<p class="title_final">Contacto</p>
<div class="contenido_final">
<ul class="sub_menu_inferior">
<li>- Tutorial</li>
<li>- Publicidad </li>
<li>- Soporte </li>
<li>- Preguntas Frecuentes </li>
</ul>
</div>
</div>
</div>
</br>
</br>
</br>
</br></br>
</br></br>
</br>
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
</center>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <script>
    $('#artCarousel').carousel({
      interval: 4000,
	  effect:'random',
      cycle: true
    });
  </script>
  
  
  

</body>
</html>
