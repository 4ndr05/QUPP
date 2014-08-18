<div class="titulo_seccion_admin hidden">
<div class="perrito_perfil">
<img src="<?php echo base_url()?>images/perrito_perfil.png" />
</div>
<div class="admin_title"> Administrador de anuncios </div>
</div>
</br>
<ul class="menu_perfil_mini">
<li class="icono_seleccion_mini">
<p style=" margin-top:3px; margin-left:5px;"> Todos (4) </p>
</li>
<li>
<p style=" margin-top:3px; margin-left:5px;"> Activos (4) </p>
</li>
<li>
<p style=" margin-top:3px; margin-left:5px;" onclick="muestra('anunciosInAct');oculta('anuncios'); oculta('anunciosAct'); "> Expirados (<?php echo count($anunciosInAct)?>) </p>
</li>
</ul>
   </br>
  

 <div id="anuncios" style="display:block;">
<table class="tabla_perfil" width="795" >
  <tr>
  <th width="76"> Paquete </th>
  <th width="71"> Sección </th>
  <th width="191"> Titúlo </th>
  <th width="86"> Estatus </th>
  <th width="105"> Vencimiento </th>
  <th width="92"> Popularidad </th>
  <th width="142"> Renovar/</br>Cancelar </th>
  </tr>
  <?php if ($anuncios != Null) {?>
  <?php 
  foreach ($anuncios as $anuncio) { ?>
    <tr>
            <?php if ($anuncio->NombrePaquete =='Lite'){?>
                <td><img src="<?php echo base_url()?>images/ico_lite.png" width="34" height="34"/>
                    </br>
                <font class="lite"> Lite </font> </td>
            <?php } elseif ($anuncio->NombrePaquete == 'Regular') {?>
                <td><img src="<?php echo base_url()?>images/ico_regular.png" width="34" height="34"/>
                </br>
                <font class="lite"> Regular </font> </td>        
            <?php  } else { ?>
                <td><img src="<?php echo base_url()?>images/ico_premium.png" width="34" height="34"/>
                </br><font class="lite"> Premium </font> </td>        
            <?php } ?>
            
            <td> <?php echo $anuncio->seccionNombre ?> </td>
            <td> <?php echo $anuncio->titulo ?> </td>
            <td>
                <?php if ($anuncio->vigente == 1) {?>
                Activo
                <?php } else { ?>
                Inactivo
                <?php } ?>

            </td>
            <td> <?php echo $anuncio->fechaVencimiento ?> </td>
            <td> <?php echo $anuncio->numeroVisitas ?> </td>
            <td> <ul class="boton_gris_perfil_tabla"> <li> Renovar </li> </ul> </td>
    </tr>
  <?php } ?>

  <?php }?>
 </table>
</div>

<div id="anunciosAct" style="display:none;"> 
  <table class="tabla_perfil" width="795" >
  <tr>
  <th width="76"> Paquete </th>
  <th width="71"> Sección </th>
  <th width="191"> Titúlo </th>
  <th width="86"> Estatus </th>
  <th width="105"> Vencimiento </th>
  <th width="92"> Popularidad </th>
  <th width="142"> Renovar/</br>Cancelar </th>
  </tr>
<?php if ($anunciosAct != Null) {?>
  <?php 
  foreach ($anunciosAct as $anuncio) { ?>
    <tr>
            <?php if ($anuncio->NombrePaquete =='Lite'){?>
                <td><img src="<?php echo base_url()?>images/ico_lite.png" width="34" height="34"/>
                    </br>
                <font class="lite"> Lite </font> </td>
            <?php } elseif ($anuncio->NombrePaquete == 'Regular') {?>
                <td><img src="<?php echo base_url()?>images/ico_regular.png" width="34" height="34"/>
                </br>
                <font class="lite"> Regular </font> </td>        
            <?php  } else { ?>
                <td><img src="<?php echo base_url()?>images/ico_premium.png" width="34" height="34"/>
                </br><font class="lite"> Premium </font> </td>        
            <?php } ?>
            
            <td> <?php echo $anuncio->seccionNombre ?> </td>
            <td> <?php echo $anuncio->titulo ?> </td>
            <td>
                <?php if ($anuncio->vigente == 1) {?>
                Activo
                <?php } else { ?>
                Inactivo
                <?php } ?>

            </td>
            <td> <?php echo $anuncio->fechaVencimiento ?> </td>
            <td> <?php echo $anuncio->numeroVisitas ?> </td>
            <td> <ul class="boton_gris_perfil_tabla"> <li> Renovar </li> </ul> </td>
    </tr>
  <?php } ?>
  <?php }?>
 </table>
 </div>

<div id="anunciosInAct" style="display:none;">  

  <table class="tabla_perfil" width="795" >
  <tr>
  <th width="76"> Paquete </th>
  <th width="71"> Sección </th>
  <th width="191"> Titúlo </th>
  <th width="86"> Estatus </th>
  <th width="105"> Vencimiento </th>
  <th width="92"> Popularidad </th>
  <th width="142"> Renovar/</br>Cancelar </th>
  </tr>
<?php if ($anunciosInAct != Null) {?>
  <?php 
  foreach ($anunciosInAct as $anuncio) { ?>
  
    <tr>
            <?php if ($anuncio->NombrePaquete =='Lite'){?>
                <td><img src="<?php echo base_url()?>images/ico_lite.png" width="34" height="34"/>
                    </br>
                <font class="lite"> Lite </font> </td>
            <?php } elseif ($anuncio->NombrePaquete == 'Regular') {?>
                <td><img src="<?php echo base_url()?>images/ico_regular.png" width="34" height="34"/>
                </br>
                <font class="lite"> Regular </font> </td>        
            <?php  } else { ?>
                <td><img src="<?php echo base_url()?>images/ico_premium.png" width="34" height="34"/>
                </br><font class="lite"> Premium </font> </td>        
            <?php } ?>
            
            <td> <?php echo $anuncio->seccionNombre ?> </td>
            <td> <?php echo $anuncio->titulo ?> </td>
            <td>
                <?php if ($anuncio->vigente == 1) {?>
                Activo
                <?php } else { ?>
                Inactivo
                <?php } ?>

            </td>
            <td> <?php echo $anuncio->fechaVencimiento ?> </td>
            <td> <?php echo $anuncio->numeroVisitas ?> </td>
            <td> <ul class="boton_gris_perfil_tabla"> <li> Renovar </li> </ul> </td>
    </tr>
  <?php } ?>
  <?php } ?>

 </table>
 </div>
