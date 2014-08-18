<div class="contenedor_bienvenido hidden">
<div class="contenedor_icono_bienvenido">
<img src="<?php echo base_url()?>images/icono_perfil.png"/>
</div>
<p class="bienvenido"> ¡Bienvenido! </p>
</br>
</br>
</br>
<p class="usuario_bienvenido"><?=$myInfo->nombre.' '.$myInfo->apellido;?></p>
</div>
</br>
<div class="contenedor_formulario">
<p>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="nombre" type="text" class="background_morado" id="nombre" value="<?=$myInfo->nombre;?>" readonly="readonly"/> </p>
</br>
<p>E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="correo" type="text" class="background_morado" id="correo" value="<?=$this->session->userdata('correo');?>" readonly="readonly"/> </p>
</br>
<p></p>
</div>
<div class="margen_div">
</div>
<div class="contenedor_formulario">
<p>Apellido: <input name="apellido" type="text" class="background_morado" id="apellido" value="<?=$myInfo->apellido;?>"/> </p>
</br>
<p>Teléfono: <input name="telefono" type="text" class="gris_input" id="telefono" value="<?=$myInfo->telefono;?>"/> </p>
</br>
<p>Estado: &nbsp;&nbsp;&nbsp;
  <select name="estadoID" class="gris_input" id="estadoID"> 		  
  <option value="">Seleccione</option>
           <?php

                if ($estados != null):
                    foreach ($estados as $edo):
                        ?>
                        <option value="<?php echo $edo->estadoID ?>" <?=($info->estadoID == $edo->estadoID) ? 'selected="selected"' : ''?>><?php echo $edo->nombreEstado ?></option>

                    <?php endforeach;
                endif; ?>
  </select> 
  </p>
</div>
<div class="cambiar_contraseña">
<p> Cambiar contraseña <font class="aqui_cambiar" onclick="muestra('contenedor_cambiar_contrasena');">aqui</font></p>
</div>
<div class="contenedor_boton"> 
<ul class="boton_gris_perfil">
<li>
Editar
</li>
</ul>
</div>

<div class="contenedor_fiscales">
<font class="espacios"> Datos fiscales</font>

<div id="ver_el_detalle" class="detalle_fiscales" onclick="muestra('guardar_fiscales'); muestra('datos_fiscales_AC'); muestra('ocultar_el_detalle');oculta('ver_el_detalle');">
<p > &nbsp;Ver detalle <img src="<?php echo base_url()?>images/flecha_blanca.png"/></p>
</div>

<div id="ocultar_el_detalle" class="detalle_fiscales" onclick="oculta('guardar_fiscales'); oculta('datos_fiscales_AC'); muestra('ver_el_detalle'); oculta('ocultar_el_detalle');" style="display:none;">
<p > &nbsp; Ocultar detalle <img src="<?php echo base_url()?>images/flecha_blanca_revez.png"/></p>
</div>

</div>


 
<div id="datos_fiscales_AC" style="display:none;">
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
<p><input type="text" name="razon" class="gris_input" value ="<?php echo $fiscData->razonSocial ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="RFC" class="gris_input" value ="<?php echo $fiscData->rfc ?>" > </p>

<p style="margin-top:14px;"><input type="text" name="calle" class="gris_input" value ="<?php echo $fiscData->calle ?>"> </p>

<p style="margin-top:14px;"><input type="text" name="no_exterior" class="gris_input" value ="<?php echo $fiscData->noExterior ?>"></p>

<p style="margin-top:14px;"><input type="text" name="cp" class="gris_input" value ="<?php echo $fiscData->cp ?>"> </p>

<p style="margin-top:14px;"><input type="text" name="municipio" class="gris_input" value ="<?php echo $fiscData->municipio ?>"> </p>

<p style="margin-top:14px;"><select name="estadoID" class="gris_input" id="estadoID">      
<option value="">Seleccione</option>
           <?php

                if ($estados != null):
                    foreach ($estados as $edo):
                        ?>
                        <option value="<?php echo $edo->estadoID ?>" <?=($fiscData->estadoID == $edo->estadoID) ? 'selected="selected"' : ''?>><?php echo $edo->nombreEstado ?></option>

                    <?php endforeach;
                endif; ?>
           </select> 
  </p>
<p style="margin-top:14px;">
<select name="paisID" class="gris_input"> 
<option value="">Seleccione</option>
            <?php
                if ($paises != null):
                    foreach ($paises as $pais):
                        ?>
                        <option value="<?php echo $pais->paisID ?>" <?=($fiscData->idPais == $pais->paisID)  ? 'selected="selected"' : ''?>><?php echo $pais->nombrePais ?></option>

                    <?php endforeach;
                endif; ?>
           </select> </p>


</div>

<div class="contenedor_fiscales"> Datos de la Asociación </div>




<div class="texto_inputs" >
<p > Nombre: </p>
<p style="margin-top:15px;">Contacto:</p>

<p style="margin-top:15px;">Teléfono:</p>
<p style="margin-top:15px;">Calle:</p>
<p style="margin-top:15px;">Número:</p>
<p style="margin-top:15px;">Colonia:</p>
<p style="margin-top:15px;">Municipio:</p>
<p style="margin-top:15px;">Estado:</p>
<p style="margin-top:15px;">Código Postal:</p>
<p style="margin-top:15px;">E-mail:</p>
<p style="margin-top:15px;">Página web:</p>
<p style="margin-top:15px;">Logo:</p>
<p style="margin-top:15px;">Descripción:</p>
<p style="margin-top:35px;">Ubicación:</p>
</div>

<div class="contendeor_inputs" >
  <p><input type="text" name="nombre_negocio" class="gris_input" value ="<?php echo $datConN->nombreNegocio ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="nombre_contacto" class="gris_input" value ="<?php echo $datConN->nombreContacto ?>"/> </p>

<p style="margin-top:14px;"><input type="text" name="telefono" class="gris_input" value ="<?php echo $datConN->telefono ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="calle" class="gris_input" value ="<?php echo $datConN->calle ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="num" class="gris_input" value ="<?php echo $datConN->numero ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="colonia" class="gris_input" value ="<?php echo $datConN->colonia ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="municipio" class="gris_input" value ="<?php echo $datConN->municipioC ?>"/> </p>
<p style="margin-top:14px;">  
  <select name="estadoID" class="gris_input" id="estadoID">       
  <option value="">Seleccione</option>
           <?php

                if ($estados != null):
                    foreach ($estados as $edo):
                        ?>
                        <option value="<?php echo $edo->estadoID ?>" <?=($datConN->idEstado == $edo->estadoID) ? 'selected="selected"' : ''?>><?php echo $edo->nombreEstado ?></option>

                    <?php endforeach;
                endif; ?>
  </select> 
  </p>
<p style="margin-top:14px;"><input type="text" name="cp" class="gris_input" value ="<?php echo $datConN->cp ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="e-mail" class="gris_input" value ="<?php echo $datConN->correo ?>"/> </p>
<p style="margin-top:14px;"><input type="text" name="pagina_web" class="gris_input" value ="<?php echo $datConN->paginaWeb ?>"/> </p>
<p style="margin-top:14px;"><input type="file" name="logo" class="gris_input" value ="<?php echo $datConN->Logo ?>"/> </p>
<p style="margin-top:14px;"><textarea rows="3" cols="40" name="descripcion" class="gris_input" > <?php echo $datConN->descripcion ?></textarea> </p>

<div id="map-canvas_dos"></div>
    
</div>

</div>

    
 

<div class="contenedor_boton" id="guardar_fiscales" style=" display:none;"> 
<ul class="boton_gris_perfil">
<li>
Guardar
</li>
</ul>
</div>
</br>
