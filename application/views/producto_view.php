 <script src="<?=base_url()?>js/funciones_tienda.js"></script> 

   
<div id="contenedor_detalle_anuncio" class="contenedor_detalle_anuncio" style="display:">

<form action="<?=base_url()?>carrito/addProducto" method="post" id="productoForm">
<div class="crerar_detalle_anuncio">
<input type="hidden" name="productoID" id="productoID" value="<?=$productoID?>"/>
<input type="hidden" name="precio" id="precio" value="<?=$detalleAnuncio->precio?>"/>
<input type="hidden" name="nombre" id="nombre" value="<?=$detalleAnuncio->nombre?>"/>
<img src="<?=base_url()?>images/cerrar_verde.png" onclick="oculta('contenedor_detalle_anuncio');"/> </div>
<div class="contenido_producto">
<div class="contenedor_galeria_producto">

 <div id="slideshow_producto" class="picse">
        <?php if($fotos != null){
        	foreach ($fotos as $foto) {?>
        		<img src="<?=base_url()?>images/productos/<?=$foto->foto?>" width="279" height="279"/>
        	<?php }
        	
        } else {?>
        	<img src="<?=base_url()?>images/productos/default.png" width="279" height="279"/>
        <?php }?>
    </div>

</div>
</br>
<div class="titulo_producto">
<?=$detalleAnuncio->nombre?>
</div>
<div class="decripcion_producto">
<?=$detalleAnuncio->descripcion?>

</div>
<div class="costo_producto">
<font style=" padding-left:10px;">  $<?=$detalleAnuncio->precio?></font>
<font style=" padding-left:10px;">  <input name="cantidad" type="text" value="1" size="3" maxlength="3" class="validate[required]">cantidad</font>
<font style="float:right; padding-right:10px;"> MX </font>
</div>
<div class="contenedor_select_producto">
<select class="select_producto validate[required]" name="talla" >
<option style="color: #CCC" value> Seleccione la talla </option>
<?php if($opciones != null){
			foreach ($opciones as $opcion ) {
				if($opcion->detalle == 'talla'){ ?>
				<option value="<?=$opcion->valor?>"><?=$opcion->valor?></option>';
				<?php }
			}
		}?>
</select>

<select class="select_producto" name="color">
<option style="color: #CCC" value> Selecciona el color </option>
<?php if($opciones != null){
			foreach ($opciones as $opcion ) {
				if($opcion->detalle == 'color'){ ?>
				<option value="<?=$opcion->valor?>"><?=$opcion->valor?></option>';
				<?php }
			}
		}?>
</select>
</div>
<ul class="boton_verde">
<li>
<input type="submit" value="Agregar al carrito">
</li>
</ul>


 </div>
</form>

</div>
