<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-419">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datos curiosos-Quierounperro.com</title>
<link rel="shortcut icon" href="<?php echo base_url() ?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/reset.css" media="screen"></link>
 <link rel="stylesheet" href="css/jPages.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/general.css" media="screen"></link>
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/venta.css" media="screen"></link>
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/directorio.css" media="screen"></link> 
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/curiosos.css" media="screen"></link>
   <script src="<?php echo base_url() ?>js/jquery-1.10.2.js"></script>
     <script src="<?php echo base_url() ?>js/jPages.js"></script>
   <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.cycle.all.js"></script>
   <script src="<?php echo base_url() ?>js/funciones_.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/funciones_curiosos.js" type="text/javascript"></script>

  
  


</head>

<body>



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
<?php $this->load->view('general/menu_view')?>

<div class="titulo_seccion">
DATOS CURIOSOS

</div>
<div class="contenedor_buscador">

</div>

<div id="contenedor_central">
<div id="espacio_izquierda" class="seccion_izquierda_secciones">
<ul class="iconos">
<li> <img src="<?php echo base_url() ?>images/compras.png"/></li>
<li><img src="<?php echo base_url() ?>images/sesion.png"/></li>
<li>
<img src="<?php echo base_url() ?>images/registrate.png"/>
</li>
</ul>
</div>

  
<div class="central_curiosos"> 

<?php if($contenidos != null){
	foreach($contenidos as $cv){
		if($cv->contenidoID == $ID){?>

<div id="main_content">
<div class="titulo_detalle"> <?=$cv->nombre?> </div>
<div class="texto_descripcion_detalle">
<div class="contenedor_imagen_detalle"> 
 <?php if($fotocontenido != null){
	 	foreach($fotocontenido as $p){
			if($p->contenidoID == $cv->contenidoID){?>
 <img src="<?php echo base_url()?>images/datos_curiosos/<?=$p->foto?>"/>
 <?php }
	}
}?>
 </div>
<?=$cv->texto?></div>
</div>
<?php }
	}
}?>

<div class="contenedor_curiosos_mini"> 
<div class="contenedor_datos_curiosos_mini"> 
<div class="franja_amarilla_mini"> </div>
<div class="contenedor_imagen_horizontal_mini">
 <?php if($fotocontenido != null){
	 	foreach($fotocontenido as $p){
			if($p->contenidoID == $contenidos[1]->contenidoID){?>
 <img src="<?php echo base_url()?>images/datos_curiosos/<?=$p->foto?>" width="181" heigt="57"/>
 <?php }
	}
 }?></div>
<div class="contenido_horizontal_mini"> <?=$contenidos[0]->nombre?> </div>
<div class="contenido_texto_horizal_mini"> <?=substr($contenidos[0]->texto,0,60)?> ... </div>
<div class="ver_mas_amarillo_mini" onclick="window.location.href = '<?=base_url()?>curiosos/detalle/<?=$contenidos[0]->contenidoID?>'"> Ver más... </div>
  </div>
  
  <div class="divisor_mini"> </div>
  
  
  <div class="contenedor_datos_curiosos_mini">
  
 <div class="titulo_horizontal_mini"> <?=$contenidos[1]->nombre?> </div>
 <div class="contenido_texto_horizal_mini"> <?=substr($contenidos[1]->texto,0,60)?> </div>
 <div class="ver_mas_naranja_mini" onclick="window.location.href = '<?=base_url()?>curiosos/detalle/<?=$contenidos[1]->contenidoID?>'"> Ver más... </div>
 <div class="contenedor_imagen_horizontal_naranja_mini">
  <?php if($fotocontenido != null){
	 	foreach($fotocontenido as $p){
			if($p->contenidoID == $contenidos[1]->contenidoID){?>
 <img src="<?php echo base_url()?>images/datos_curiosos/<?=$p->foto?>" width="181" heigt="57"/>
 <?php }
	}
  }?></div>
 <div class="franja_naranja_mini"> </div>
  
   </div>
   
     <div class="divisor_mini"> </div>
     <div class="contenedor_datos_curiosos_mini">
<div class="titulo_azul_mini"> <?=$contenidos[2]->nombre?> </div>
<div class="contendor_descripcion_curioso_azul_mini"> <?=substr($contenidos[2]->texto,0,60)?>...</div>
<div class="ver_mas_azul_mini" onclick="window.location.href = '<?=base_url()?>curiosos/detalle/<?=$contenidos[2]->contenidoID?>'"> Ver más.. </div>
<div class="contenedor_imagen_azul_mini"> <?php if($fotocontenido != null){
	 	foreach($fotocontenido as $p){
			if($p->contenidoID == $contenidos[2]->contenidoID){?>
 <img src="<?php echo base_url()?>images/datos_curiosos/<?=$p->foto?>" width="72" height="132"/>
 <?php }
	}
  }?>
 </div>
<div class="franja_azul_mini"> </div>
</div>

<div class="divisor_mini"> </div>

<div class="contenedor_datos_curiosos_mini">

<div class="franja_verde_mini">  </div>
<div class="contenedor_imagen_verde_mini"><?php if($fotocontenido != null){
	 	foreach($fotocontenido as $p){
			if($p->contenidoID == $contenidos[3]->contenidoID){?>
 <img src="<?php echo base_url()?>images/datos_curiosos/<?=$p->foto?>" width="72" height="132"/>
 <?php }
	}
  }?> </div>
<div class="titulo_verde_mini"> <?=$contenidos[3]->nombre?> </div>
<div class="contendor_descripcion_curioso_mini"> <?=substr($contenidos[3]->texto,0,60)?>...</div>
<div class="ver_mas_verde_mini" onclick="window.location.href = '<?=base_url()?>curiosos/detalle/<?=$contenidos[3]->contenidoID?>'"> Ver más.. </div>

 </div>
     
</div>

 </div>

<div id="slideshow_anuncio" class="contenedor_banner">
<?php $banner = $this->session->userdata('banner'); ?>
                <?php
                if (is_logged() && ($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3)) {
                    if ($banner != null) {

                        foreach ($banner as $contenido) {
                            if ($this->session->userdata('zonaID') == $contenido->zonaID && $contenido->posicion == 3 && $contenido->seccionID == $seccion) {
                                ?>
                                <img src="<?php echo base_url()?>images/<?php echo $contenido->imgbaner; ?>" width="200" height="476"/>
                            <?php
                            }
                        }
                    }
                } else {

                    if ($banner !== null && !empty($banner)) {
                        foreach ($banner as $contenido) {
                            if ($contenido->zonaID == 9 && $contenido->posicion == 3 && $contenido->seccionID == $seccion) {
                                ?>
                                <img src="<?php echo base_url()?>images/<?php echo $contenido->imgbaner; ?>" width="200" height="476"/>
                            <?php
                            }
                        }
                    }
                }
                ?> 

 </div>

 </div>     
</br>
</br>
</br>
</br>    
<div class="division_menu_inferior"></div>
<?php $this->load->view('general/footer_view');?>
</body>
</html>