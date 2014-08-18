<div class="titulo_seccion_admin">
<div class="perrito_perfil">
<img src="<?php echo base_url()?>images/sobre_perfil.png" />
</div>
<div class="admin_title"> Tienes <?php echo count($mensajes);?> mensajes </div>
</div>
<?php if ($mensajes != Null) {?>
<?php   foreach ($mensajes as $mensaje) { ?>

<div class="cerrar_mensaje">
<img src="images/cerrar.png" onclick="oculta('contenedor_ver_mensaje');"/>
</div>
<div id="ver_mensaje" class="ver_mensaje">
<div class="contenedor_titulo_mensaje">
<font class="titulo_mensaje"> MENSAJE </font>
</div>
<div class="mensaje"> 
<strong> Tipo: Promoción </strong>
</br>
<strong>Asunto: Utiliza tus cupones</strong>
</br></br>
En nuestro directorio es posible la consulta de todos los datos de Purina Dog Chow y canjea tus cupones, adems visita su pagina web y conoce según sus ingredientes, además de poder ataviarse de productos en distribuidores autorizados y en empresas con servicio a domicilio.

</div>

</div>

</div>


<div class="titulo_seccion_admin">
<div class="perrito_perfil">
<img src="images/sobre_perfil.png" />
</div>
<div class="admin_title"> Tienes 2 mensajes </div>
</div>
</br>
  <table class="tabla_mensajes" width="795">
  <tr>
  <td width="221"> 
   <img src="images/sobre_perfil.png" width="43" height="34"/> Promoción 
  </td>
  <td width="311"> Utiliza tus cupones </td>
  <td width="247">
 <font class="ver_mas" onclick="muestra('contenedor_ver_mensaje');"> Ver más... </font>
  </td>
  </tr>
            
  <?php } ?><?php } ?>

  <tr>
  <td> 
   <img src="images/sobre_perfil.png" width="43" height="34"/> Promoción 
  </td>
  <td> Utiliza tus cupones </td>
  <td>
 <font class="ver_mas"> Ver más... </font>
  </td>
  </tr>
  </table>
    
    
    
      </div><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
</body>
</html>
