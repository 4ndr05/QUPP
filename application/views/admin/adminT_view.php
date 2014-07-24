
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador-Quierounperro.com</title>
<link rel="shortcut icon" href="<?php echo base_url()?>images/ico.ico" />  
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/reset.css" media="screen"></link>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/administrador.css" media="screen"></link>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/general.css" media="screen"></link>
<link rel="stylesheet" href="<?php echo base_url()?>css/validator/validationEngine.jquery.css" type="text/css"/>
<script src="<?php echo base_url()?>js/funciones_.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/validator/languages/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/validator/jquery.validationEngine.js"></script>
 
<script>
jQuery(document).ready(function(){
	
	 
	 $(".addContent").click(function() {
		 	
             $("#addProduct")[0].reset();     
			 muestra('contenedor_modificaciones');
     });
	 
	 
	 
	 
	 $(".deleteContent").click(function() {
		 	
             var productoID = $(this).attr('data-rel');
			 $("#productoIDE").val(productoID);
			  muestra('contenedor_eliminar');
              console.log(productoID);
     });
	 
	  $("#addColor").click(function(e){
        e.preventDefault(); 
        $('#colorP').removeClass('validate[required]');
		var color = $('#colorP').val();
		$('#colorP').val('');
		var contador = 0; 

		$('<p id="colorS"><input name="color[]" type="text" size="8" value="'+color+'"  class="validate[required]"/> <a href="#" id="eliminar" class="eliminar" style="color:#fff; font-size:9px;">Eliminar</a><br /></p>').appendTo('#colors');

		contador++;
        
   	 });
	
	$("body").on("click",".eliminar", function(e){
            $(this).parent('p').remove(); 
        return false;
    });
	

	 
});

function ajaxValidationCallback(status, form, json, options){
  if (status === true) {
        
        var data = json;
        console.log(data.response);
        if(data.response == true){
                               
                              location.reload();                                                                            
          
        }                                                                          
  }
}

jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#addProduct").validationEngine({
				promptPosition           : "topRight",
				scroll                   : false,
				ajaxFormValidation       : false,
				ajaxFormValidationMethod : 'post'
			});

     
});

</script>

</head>
<body>


<div class="contenedor_modificaciones" id="contenedor_modificaciones" style="display:NONE"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_modificaciones');"/> </div>


<div class="modificaciones"> 
<form id="addProduct" method="post" action="<?=base_url()?>admin/tiendaAdmin/addProduct" enctype="multipart/form-data">
<div class="titulo_modificaciones"> 
AGREGAR PRODUCTO
</div>

<div class="contenido_intruciones">
<div class="texto_inputs">
<p> ID Producto: </p>
<p style="margin-top:15px;"> Nombre: </p>
<p style="margin-top:15px;"> Descripción: </p>
<p style="margin-top:15px;"> Costo: </p>
<p style="margin-top:15px;"> Talla: </p>
<p style="margin-top:60px;"> Color: </p>
<p style="margin-top:15px;"> Fotos: </p>
</div>

<div class="contendeor_inputs">
<p><input type="text" style="min-width:153px; height:20px;" name="sku" id="sku" class="validate[required,custom[onlyLetterNumber]]"/></p>
<p><input name="nombre" type="text" class="validate[required],maxSize[20]" style="min-width:153px; height:20px;margin-top:10px;" maxlength="20" /></p
><p><input type="text" style="min-width:153px; height:20px;  margin-top:10px;" name="descripcion" class="validate[required],maxSize[200]" maxlength="200"/></p> 
<p><input type="text" style="min-width:153px; height:20px;  margin-top:10px;" name="costo" class="validate[required,custom[number]"/></p>
<p>
<input type="hidden" name="talla[]" id="talla[]" value="0" />
      <input type="checkbox" name="talla[]" value="Chica" id="talla1" class="validate[required,groupRequired[tallas]]"/>
      <label>Chica</label><br />
      <input type="checkbox" name="talla[]" value="Mediana" id="talla2" class="validate[required,groupRequired[tallas]]" />
      <label>Mediana</label><br />
      <input type="checkbox" name="talla[]" value="Grande" id="talla3" class="validate[required,groupRequired[tallas]]"/>
      <label>Grande</label><br />
      <input type="checkbox" name="talla[]" value="Unitalla" id="talla4" class="validate[required,groupRequired[tallas]]"/>
      <label>Unitalla</label><br />
    </p>
<p id="colors"><input type="hidden" name="color[]" id="color[]" value="0" />
   <input name="color[]" type="text" size="8" id="colorP" style="margin-top:10px;" class="validate[required]"/> <a href="#" id="addColor" class="addColor" style="color:#fff; font-size:9px; margin-top:8px;">Agregar</a><br />
</p>
<p><input name="fotoproducto[]" type="file" id="fotoproducto" multiple="multiple" style="margin-top:13px;"/></p>
</div>

</div>

</br>
</br>

<ul class="morado_reg">
<li>
<input type="submit" value="Agregar" id="addButton"/>
</li>
</ul>
</form>
</div>


</div> <!-- Fin contenedor negro imagenes -->


<div class="contenedor_modificaciones" id="contenedor_eliminar" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_eliminar');"/> </div>

<form action="<?php echo base_url()?>admin/tiendaAdmin/deleteProduct" method="post" id="addProduct">
<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
ELIMINAR PRODUCTO
</div>
<div class="contenido_intruciones">
<p> ¿Esta seguro de eliminar el producto?

<input type="hidden" name="productoIDE" id="productoIDE" value="" />
</div>
<ul class="morado_reg">
<li>
<input type="submit" value="Eliminar" />
</li>
</ul>



</div>
</p>
</form>

</div> <!-- Fin contenedor negro imagenes -->





<div class="encabezado">
<img  src="<?php echo base_url()?>images/logo_admin.png" width="258" height="88"  />

<div class="menu_admin">
<ul class="el_menu">
<li>
<a href="<?php echo base_url()?>admin/principal/getAdminP" style= "color:#FFF;text-decoration:none;"> Pantallas </a>

</li>
<li>
Usuarios
<ul>
<li>
<a href="#"> <img src="<?php echo base_url()?>images/ciculo.png" /> Altas</a>
</li>
<li>
<a href="#"> <img src="<?php echo base_url()?>images/ciculo.png" /> Bajas</a>
</li>
<li>
<a href="#"> <img src="<?php echo base_url()?>images/ciculo.png" /> Consultas</a>
</li>
</ul>
</li>
<li>
Mensajes
<ul>
<li>
<a href="#"> <img src="<?php echo base_url()?>images/ciculo.png" /> Redactar mensaje</a>
</li>
<li>
<a href="#"> <img src="<?php echo base_url()?>images/ciculo.png" /> Enviar mensajes</a>
</li>
</ul>
</li>
<li>
Anuncios
</li>
<li>
<a href="<?php echo base_url()?>admin/tiendaAdmin" style="color:#FFF;text-decoration:none;">Tienda</a></li>
</ul>
</div>

</div> <!-- fin wncabezado -->

<div class="contenedor_central">
<div class="titulo_seccion">
PRODUCTOS-TIENDA
</div>
</br>
<table class="tabla_carrito" width="990">
<tr>
<th width="77">
ID del Producto
</th>
<th width="67">
Nombre
</th>
<th width="135">
Descripción
</th>
<th width="86">
Costo
</th>
<th width="66">
Talla
</th>
<th width="94">
Color
</th>
<th width="357">
Fotos
</th>
<th width="72">

</th>
</tr>
<tr>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">
<img src="<?php echo base_url()?>images/agregar.png" class="addContent"/>
</td>

</tr>

<tr >
<td>
000001
</td>
<td>
Ejemplo - Shampoo
</td>
<td>
Shampoo para perros delicados
</td>
<td>
$20
</td>
<td>
Chica
</td>
<td>
---
</td>
<td>
<img src="<?php echo base_url()?>images/productos/01/01.png" width="70" height="70"/>
<img src="<?php echo base_url()?>images/productos/01/01.png" width="70" height="70"/>
<img src="<?php echo base_url()?>images/productos/01/01.png" width="70" height="70"/>
<img src="<?php echo base_url()?>images/productos/01/01.png" width="70" height="70"/>
</td>
<td>
<img src="<?php echo base_url()?>images/baja_contenido.png" onclick="muestra('contenedor_eliminar');"/>
</td>

</tr>

<?php if($catalogoProductos != null):
      foreach($catalogoProductos as $producto):
	 	$productoID = $producto->productoID; ?>

<!--CATALOGO DE PRODUCTOS EN LA TIENDA-->
</tr>

<tr >
<td>
<?php echo $producto->sku;?>
</td>
<td>
<?php echo $producto->nombre;?>
</td>
<td>
<?php echo $producto->descripcion;?>
</td>
<td>
<?php echo '$ '.$producto->precio;?>
</td>
<td>
<?php if($detalleProducto != null){
	  foreach($detalleProducto as $detalle){
	  if($detalle->productoID == $producto->productoID && $detalle->detalle == 'talla'){ ?>
<?php echo $detalle->valor.'<br>';?>
<?php }
}
}?>

</td>
<td>
<?php if($detalleProducto != null){
	  foreach($detalleProducto as $detalle){
	  if($detalle->productoID == $producto->productoID && $detalle->detalle == 'color'){ ?>
<?php echo $detalle->valor.'<br>';?>
<?php }
	  }
}?>

</td>
<td>
<?php if($fotostienda != null){
	  foreach($fotostienda as $foto){
	  if($foto->productoID == $producto->productoID){ ?>
<img src="<?php echo base_url()?>images/productos/<?=$foto->foto?>" width="70" height="70"/>
<?php }
	  }
}?>
</td>
<td>
<img src="<?php echo base_url()?>images/baja_contenido.png" class="deleteContent" data-rel="<?=$productoID?>" />
</td>

</tr>


<!-- FIN PRODUCTOS EN LA TIENDA-->
<?php endforeach; 
	  endif;?>


</table>

</div>

</body>
