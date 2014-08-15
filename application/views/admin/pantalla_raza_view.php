<?php $this -> load -> view('admin/menu_view.php') ?>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.8.2.min.js"></script>
<script>
jQuery(document).ready(function(){
	
	var zona = <?php if(isset($zonaT)){ echo $zonaT;} else {echo $zonaT = 9;}?>;
	var seccion = <?php if(isset($seccion)){ echo $seccion;} else {echo $seccion = 1;}?>;
	$(".row").hide();
	$(".zona"+zona+seccion).show();
if(seccion == 7 || seccion == 8 || seccion == 9 || seccion == 10) {
				$(".superior").fadeIn();
				 $(".medio").fadeOut();
				 $(".medioContenido").fadeIn();
				 $("#seleccionAticulo").fadeIn();
				 $("#seleccionApoyo").fadeOut();
				 $(".imagenApoyo").fadeIn();
				 $(".inferior").fadeIn();
			 } 
	
	 
	 $(".addContent").click(function() {
		 	
             var posicion = $(this).attr('data-rel');
			 $("#posicion").val(posicion);
             var uno = $("#posicion").val(posicion);
             
			 muestra('contenedor_modificaciones');
             //console.log(uno);
     });
	 
	 $(".addContentText").click(function() {
		 	
            var zonaN = $("#zonaIDR").val();
             var seccionN = $("#numeroSeccionR").val();
			  $("#zonaContentN").val(zonaN);
			  $("#seccionContentN").val(seccionN);
			  
             
			 muestra('contenedor_texto_apoyo');
             //console.log(uno);
     });
	 
	 $(".deleteContent").click(function() {
		 	
             var bannerIDel = $(this).attr('data-rel');
			 var posicionDel = $(this).attr('id');
             var zonaDel = $("#zonaIDR").val();
             var seccionDel = $("#numeroSeccionR").val();
			  $("#zonaContentDel").val(zonaDel);
			  $("#seccionContentDel").val(seccionDel);
			  $("#posicionContentDel").val(posicionDel);
			  $("#bannerIDContentDel").val(bannerIDel);
			  muestra('contenedor_delete');
              console.log(bannerIDel,zonaDel, seccionDel,posicionDel);
     });
	 
	 $(".deleteContentText").click(function() {
		 	
             var bannerIDT = $(this).attr('data-rel');
			 var posicionT = $(this).attr('id');
			 var tipo = $(this).attr('name');
			 
			 if(tipo == 1){
				 $('#deleteTextForm').attr('action', '<?=base_url()?>admin/principal/deleteBannerText');
		     } else {
				 $('#deleteTextForm').attr('action', '<?=base_url()?>admin/principal/deleteTextApoyo'); 
			 }
			 
             var zonaT = $("#zonaIDR").val();
             var seccionT = $("#numeroSeccionR").val();
			  $("#zonaContentT").val(zonaT);
			  $("#seccionContentT").val(seccionT);
			  $("#posicionContentT").val(posicionT);
			  $("#bannerIDContentT").val(bannerIDT);
			  muestra('contenedor_delete_text');
              console.log(bannerID,zonaT, seccionT,posicionT);
     });
	 
	  $(".updateText").click(function() {
		 	
             var bannerID = $(this).attr('data-rel');
			 var posicionD = $(this).attr('id');
             var zonaD = $("#zonaIDR").val();
             var seccionD = $("#numeroSeccionR").val();
			  $("#zonaContent").val(zonaD);
			  $("#seccionContent").val(seccionD);
			  $("#posicionContent").val(posicionD);
			  $("#bannerIDContent").val(bannerID);
			  muestra('contenedor_modificaciones_texto');
              console.log(bannerID,zonaD, seccionD,posicionD);
     });
	 

     $("#genero").change(
                function(){
					$("#personalizado").remove();
                    var thisValue = $(this).val();
                    var nombreZona = $('#genero option:selected').html();
                    //console.log(thisValue, nombreZona);
                    $("#nombreZona").detach();
             		$('<label id="nombreZona">'+nombreZona+'</label>').appendTo('#zonaNombre');
                    $("#zonaIDR").val(thisValue);
					numeroZona = thisValue;
					numeroSeccion = $("#numeroSeccionR").val();
					$(".row").hide();
					$(".zona"+numeroZona+numeroSeccion).show();
					console.log(".zona"+numeroZona+numeroSeccion);
    }); 
	
	
	
	
	 $("#saveBanner").click(function() {
              zona = $("#zonaIDR").val();
              uno = $("#numeroSeccionR").val();
             var dos = $("#nombreSeccionR").val();
                         

             //console.log(uno, dos, zona);
			 
			/* $.ajax({
                url:'<?=base_url()?>admin/principal/uploadBanner',
                type:'POST',
                dataType: 'json',
                data: $("#addBanner").serialize(),
                success: function(data){
                  
                }
    		});*/
     });  
	 
	$(".filtro").click(
	function(){
		$("#personalizado").remove();		
		goToSearch();		        
	});


	 
});

function goToSearch(){
	
	$.ajax({
		url     : '<?=base_url()?>admin/principal/tablasDinamicas',
		type    : 'POST',
		data    : $('#addBanner').serialize(),
		success : function(data){	
			$(".personalizado").remove();		
			$('#tablasDinamicasA').html(data);
		}                                       
	});
}
</script>



<!-- ---------------------------------------------------- contenedor_modificaciones --------------- -->

<form id="addBanner" method="post" action="<?=base_url()?>admin/principal/uploadBanner" enctype="multipart/form-data">

<div class="contenedor_modificaciones" id="contenedor_modificaciones" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_modificaciones');"/> </div>
<input type="hidden" name="numeroSeccionR" id="numeroSeccionR" value="<?=$seccion?>" />
<input type="hidden" name="nombreSeccionR" id="nombreSeccionR" value=""/>
<input type="hidden" name="zonaIDR" id="zonaIDR" value="<?=$zonaT?>"/>
<input type="hidden" name="posicion" id="posicion" value=""/>

<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
AGREGAR IMAGEN
</div>

<div class="contenido_intruciones">
<p>Ingrese las imagenes para BP00001:</p>
</br>
<input type="file" name="banner" id="banner" />



</div>
<ul class="morado_reg">
<li>
<input type="submit" />
</li>
</ul>

</div>

</div> <!-- Fin contenedor negro imagenes -->
</form>
<!-- ---------------------------------------------------- contenedor_modificaciones --------------- -->


<!-- ---------------------------------------------------- contenedor_modificaciones_texto --------------- -->

<form action="<?=base_url()?>admin/principal/uploadArticulo" method="post" enctype="multipart/form-data">
<div class="contenedor_modificaciones" id="contenedor_texto_apoyo" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_texto_apoyo');"/> </div>
<input type="hidden" id="zonaContentN" name="zonaContentN" value="<?=$zonaT?>" />
<input type="hidden" id="seccionContentN" name="seccionContentN" value="<?=$seccion?>" />
<input type="hidden" id="posicionContentN" name="posicionContentN" value="2" />

<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
AGREGAR TEXTO
</div>
<div class="contenido_intruciones">
<p>Ingrese las imagenes para BP00001:</p>
</br>
<input type="file" name="imagenesArticulo[]" id="imagenesArticulo" multiple="multiple"/>

</div>
<div class="contenido_intruciones">
<p> Introduzca el texto para el articulo </p>
</brSS>
<textarea cols="65" rows="7" name="textoContentN" id="textoContentN"></textarea>

</div>
<ul class="morado_reg">
<li>
<input type="submit" value="Guardar" />
</li>
</ul>



</div>

</div> <!-- Fin contenedor negro imagenes -->
</form>
<!-- ---------------------------------------------------- contenedor_modificaciones_texto --------------- -->




<!-- ---------------------------------------------------- contenedor_modificaciones_texto --------------- -->

<form action="<?=base_url()?>admin/principal/updateBannerText" method="post">
<div class="contenedor_modificaciones" id="contenedor_modificaciones_texto" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_modificaciones_texto');"/> </div>
<input type="hidden" id="zonaContent" name="zonaContent" value="<?=$zonaT?>" />
<input type="hidden" id="seccionContent" name="seccionContent" value="<?=$seccion?>" />
<input type="hidden" id="posicionContent" name="posicionContent" value="" />
<input type="hidden" id="bannerIDContent" name="bannerIDContent" value="" />

<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
AGREGAR TEXTO
</div>
<div class="contenido_intruciones">
<p> Introduzca el texto para BC0001-0000001 </p>
</brSS>
<textarea cols="65" rows="7" name="texto" id="texto"></textarea>

</div>
<ul class="morado_reg">
<li>
<input type="submit" value="Guardar" />
</li>
</ul>



</div>

</div> <!-- Fin contenedor negro imagenes -->
</form>
<!-- ---------------------------------------------------- contenedor_modificaciones_texto --------------- -->



<!-- ---------------------------------------------------- contenedor_delete --------------- -->
<form action="<?=base_url()?>admin/principal/deleteContent" method="post">

<div class="contenedor_modificaciones" id="contenedor_delete" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_delete');"/> </div>


<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
ELIMINAR CONTENIDO</div>
<div class="contenido_intruciones">
<p>El contenido seleccionado será borrado </p>
</brSS>

<input type="hidden" id="zonaContentDel" name="zonaContent" value="<?=$zonaT?>" />
<input type="hidden" id="seccionContentDel" name="seccionContent" value="<?=$seccion?>" />
<input type="hidden" id="posicionContentDel" name="posicionContent" value="" />
<input type="hidden" id="bannerIDContentDel" name="bannerIDContent" value="" />

</div>
<ul class="morado_reg">
<li>
<input type="submit" value="Borrar" />
</li>
</ul>



</div>

</div> <!-- Fin contenedor negro imagenes -->
</form>
<!-- ---------------------------------------------------- contenedor_delete--------------- -->


<!-- ---------------------------------------------------- contenedor_delete_text --------------- -->
<form action="<?=base_url()?>admin/principal/deleteBannerText" method="post" id="deleteTextForm">

<div class="contenedor_modificaciones" id="contenedor_delete_text" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_delete_text');"/> </div>


<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
ELIMINAR TEXTO</div>
<div class="contenido_intruciones">
<p>El contenido seleccionado será borrado </p>
</brSS>

<input type="hidden" id="zonaContentT" name="zonaContentT" value="<?=$zonaT?>" />
<input type="hidden" id="seccionContentT" name="seccionContentT" value="<?=$seccion?>" />
<input type="hidden" id="posicionContentT" name="posicionContentT" value="" />
<input type="hidden" id="bannerIDContentT" name="bannerIDContentT" value="" />
<input type="hidden" id="textoT" name="textoT" value=""/>

</div>
<ul class="morado_reg">
<li>
<input type="submit" value="Borrar" />
</li>
</ul>



</div>

</div> <!-- Fin contenedor negro imagenes -->
</form>
<!-- ---------------------------------------------------- contenedor_delete_text--------------- -->


<!-- ---------------------------------------------------- encabezado --------------- -->





<div class="contenedor_central">
<div class="titulo_seccion">
PANTALLAS- <label id="nombreSeccion"><label id="seccion"><?=$seccionNombre->seccionNombre?></label></label> 
</div>
<div class="contenedor_buscador">
<div class="fondo_select">
<select class="estilo_select filtro" id="genero" name="genero">
 <option style="background-color: #999;" value = "">Seleccione la zona
 </option>
 <?php if ($zonageografica != Null):
 	foreach ($zonageografica as $zona) {?>
<option style="background-color: #999;" value = "<?php echo $zona -> zonaID; ?>" title="<?php echo $zona -> zona;?>"<?=($zonaT == $zona -> zonaID) ? 'selected="selected"' : ''?>?> <?php echo $zona -> zona;?>
 </option>
 <?php } endif;?>

</select>
</div>
</div>

<div class="subtitulo">
ZONA- <label id="zonaNombre"><label id="nombreZona"><?=$zonaNombre->zona?></label></label>
</div>
<!--la raza del mes-->
<div class="contenedor_modificaciones" id="contenedor_agregar_raza" style="display:none"> <!-- Contenedor negro imagenes-->
<div class="cerrar_modificaciones"> <img src="<?=base_url()?>images/cerrar.png" onclick="oculta('contenedor_agregar_raza');"/> </div>


<div class="modificaciones"> 
<div class="titulo_modificaciones"> 
AGREGAR RAZA
</div>

<div class="contenido_intruciones">
</br>

<table > 
<tr> 
<td width="105"> Nombre: </td>
<td width="317"> <input type="text"/> </td>
</tr>
<tr> 
<td> Mes: </td>
<td> <select> <option> --- </option> </select> </td>
</tr>
<tr> 
<td> Imagenes: </td> 
<td> <input type="file"/> </td>
</tr>
<tr> 
<td> Origenes: </td>
<td> <textarea> </textarea> </td>
</tr>
<tr> 
<td> Caracter: </td>
<td> <textarea> </textarea> </td>
</tr>
<tr> 
<td> Cualidades: </td>
<td> <textarea></textarea></td>
</tr>
<tr> 
<td> Colores: </td>
<td> <textarea></textarea> </td>
 </tr>
 <tr> 
 <td> Sobre la raza: </td>
 <td> <textarea> </textarea> </td>
 
 </tr>
</table>



</div>
<ul class="morado_reg">
<li>
Guardar
</li>
</ul>

</div>

</div> <!-- Fin contenedor negro imagenes -->
<!--la raza del mes-->
</br>

<!--       CONTENIDO SUPERIOR       -->
<table class="tabla_carrito superior" width="990" style="display:none">
<tr>
<th width="84">
Nivel 1
</th>
<th width="81">
Nivel 2
</th>
<th width="88">
Nivel 3
</th>
<th width="137">
Tipo
</th>
<th width="136">
Ubicación
</th>
<th width="310">
Contenido
</th>
<th width="122">
Ajustes
</th>
</tr>
<tr>
<td bgcolor="#E6E7E8" class="nivel">
BP00001
</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">
Banner Publicidad
</td>
<td bgcolor="#E6E7E8">
  Superior
</td>
<td bgcolor="#E6E7E8">

</td>

<td bgcolor="#E6E7E8">
<img src="<?php echo base_url()?>images/agregar.png" class="addContent" data-rel="1"/>
<img src="<?php echo base_url()?>images/baja_contenido.png" class="deleteContent" data-rel="0" id="1"/>
</td>

</tr>

<?php if($contenido != null):
	  $contador = 0;
	  foreach($contenido as $c):

	  if($c->posicion == 1):?>
<tr class="zona<?=$c->zonaID?><?=$c->seccionID?> row" style="display:none;">
<td>

</td>
<td>
<?=++$contador?>
</td>
<td>
<input type="hidden" id="bannerID" name="bannerID" value="<?=$c->bannerID?>"/>
</td>
<td>
Imagen
</td>




<td>

</td>
<td>
<img src="<?php echo base_url()?>images/<?php echo $c->imgbaner?>" width="290" height="40" />
</td>
<td>
<img src="<?php echo base_url()?>images/baja_contenido.png" class="deleteContent" data-rel="<?php echo $c->bannerID?>" id="1"/>
</td>

</tr>
	  <?php 
	  endif;
	  endforeach;
	  endif; ?>

</table>
<!--       CONTENIDO SUPERIOR       -->

<!--       CONTENIDO MEDIO ARTICULO       -->
<table width="992" height="537" align="center" class="tabla_carrito"> 
<tr> 
<th width="66"> Nombre </th>
<th width="66"> Mes </th>
<th width="131"> Imagen </th>
<th width="76"> Origenes </th>
<th width="174"> Caracter y Temperamento</th>
<th width="71"> Cualidades</th>
<th width="98"> Colores caracteristicos </th>
<th width="303"> Sobre la raza </th>
<th width="37"> </th>
</tr>
<tr> 
<td height="74" bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>
<td bgcolor="#E6E7E8"> </td>

<td bgcolor="#E6E7E8"> <img src="<?=base_url()?>images/agregar.png" onclick="muestra('contenedor_agregar_raza');"/> </td>
</tr>

<tr> 
<td height="307">BOBTAIL  </td>
<td height="307">ENERO  </td>
<td> <img src="<?=base_url()?>images/raza_mes/1.png" width="124" height="151" />
<img src="<?=base_url()?>images/raza_mes/2.png" width="124" height="151" />
 </td>
<td>Es originario de Gran Bretaña donde fue utilizado como perro pastor.
</td>
<td> Es un perro muy fiel e inteligente al que le encanta pasar tiempo con su familia y participar de sus actividades. Tiene un fuerte instinto de pastoreo y hay que hacerle entender que no necesita pastorear a las personas; si no se le marcan bien las pautas que debe seguir puede volverse caprichoso, como ocurre con todas las razas. Son perros muy alegres, afectuosos, cariñosos con los niños que siguen comportándose como cachorros durante bastante tiempo. No es difícil de adiestrar y le encanta jugar. </td>
<td>   
Fidelidad y gusto por compartir con su familia.
</td>
<td> AZULADOGRIS</td>
<td>  El Bobtail o antiguo pastor inglés es un perro grande, macizo y de forma cuadrada. Tiene una doble capa de pelaje espeso que le protege del frío y la humedad durante las largas jornadas de pastoreo. La cabeza es grande con un stop pronunciado en el hocico, la nariz negra, las orejas medianas y pegadas a la cabeza, y los ojos marrones o azules (o en ocasiones uno de cada color). El nombre Bobtail viene del inglés y significa "sin cola", lo cual es una destacada característica de esta raza; normalmente nacen ya sin cola.</td>
<td> <img src="<?=base_url()?>images/editar.png" onclick="muestra('contenedor_agregar_raza');"/> </td>
</tr>
</table>
<!--       CONTENIDO MEDIO CONTENIDO       -->



<!--       CONTENIDO BANNER INFERIOR       -->
<table class="tabla_carrito inferior" width="990" style="display:none">
<tr>
<th width="84">
Nivel 1
</th>
<th width="81">
Nivel 2
</th>
<th width="88">
Nivel 3
</th>
<th width="137">
Tipo
</th>
<th width="136">
Ubicación
</th>
<th width="310">
Contenido
</th>
<th width="122">
Ajustes
</th>
</tr>
<tr>
<td bgcolor="#E6E7E8" class="nivel">
BP00003
</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">

</td>
<td bgcolor="#E6E7E8">
Banner Publicidad
</td>
<td bgcolor="#E6E7E8"> Inferior
</td>
<td bgcolor="#E6E7E8">

</td>

<td bgcolor="#E6E7E8">
<img src="<?php echo base_url()?>images/agregar.png" class="addContent" data-rel="3"/>
<img src="<?php echo base_url()?>images/baja_contenido.png" class="deleteContent" data-rel="0" id="3"/>
</td>

</tr>

<?php if($contenido != null):
	  $contador = 0;
	  foreach($contenido as $c):
	  
	  if($c->posicion == 3):?>
<tr class="zona<?=$c->zonaID?><?=$c->seccionID?> row" style="display:none;">
<td>

</td>
<td>
<?=++$contador?>
</td>
<td>
<input type="hidden" id="bannerID" name="bannerID" value="<?=$c->bannerID?>"/>
</td>
<td>
Imagen
</td>
<td>

</td>
<td>
<img src="<?php echo base_url()?>images/<?=$c->imgbaner?>" width="290" height="40" />
</td>
<td>
<img src="<?php echo base_url()?>images/baja_contenido.png" class="deleteContent" data-rel="<?php echo $c->bannerID?>" id="3"/>
</td>

</tr>
	  <?php 
	  endif;
	  endforeach;
	  endif; ?>
</table>
<!--       CONTENIDO BANNER INFERIOR       -->

</div>

<?php $this -> load -> view('admin/footer_view.php') ?>
