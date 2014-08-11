
<script type="text/javascript">
jQuery(document).ready(function(){
	

	
	$("#paso111").click(function() {
	var checked = verifiedRadio(3);
	if(checked == false){
       	$("#error").html('<label>Seleccione una opción</label>');         
        return false;     
    } else {
				muestra('paso_dos'); 
				oculta('paso_uno');
	}
			
     });
	 
	 $("#paso222").click(function() {
	var checked = verifiedRadio(4);
	if(checked == false){
       	$("#error2").html('<label>Seleccione una opción</label>');         
        return false;     
    } else {
				muestra('paso_tres'); 
				oculta('paso_dos');
	}
			
     });
	 
	  
 

});
function verifiedRadio(n){
	var ggg = $('input[type=radio]:checked').size();
	console.log(ggg);
		 	 if($('input[type=radio]:checked').size() < n){
       
				       
       			 return false;     
    		} 
}
</script>
<!-- Inicio Paso UNO -->
<div id="paso_uno">
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li class="numero_seccion_mini">1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Selecciona la sección de publicación</div>
<div class="contenido_indicacion_mini"> 
<img src="images/pero_paso_uno.png" class="perro_paso_uno_mini"/>

<form id="form1" name="form1" method="post" class="radios_secciones_mini" action="">
<p id="error"></p>
<input type="radio" name="radiog_dark" id="radio4" class="css-checkbox" /><label for="radio4" class="css-label radGroup2 seccion"> Cruza</label>
</br>
<input type="radio" name="radiog_dark" id="radio5" class="css-checkbox validate[required,groupRequired[seccion]]" />
<label for="radio5" class="css-label radGroup2 seccion">Venta</label>
</br>
<input type="radio" name="radiog_dark" id="radio6" class="css-checkbox" /><label for="radio6" class="css-label radGroup2 seccion">Adopción</label>
</br>
<input type="radio" name="radiog_dark" id="radio7" class="css-checkbox" /><label for="radio7" class="css-label radGroup2 seccion">Perros perdidos</label>
</form>

</br>

<ul class="morado_mini">
<li>

<a href="#" id="paso111">Continuar</a>
</li>
</ul> 


</div>

</div>

</div>
<!-- FIN anuncio UNO -->


<!-- Inicio paso DOS -->
<div id="paso_dos" style="display:none;">
<div  class="numeros_publicar_anuncio_mini" >
<ul class="listado_numeros_anuncio_mini">
<li >1</li>
<li class="numero_seccion_mini">2</li>
<li>3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Indica tu tipo de anuncio</div>
<p id="error2"></p>
<div class="contenido_indicacion_mini"> 
<div id="contenedor_paquetes" class="contenedor_paquetes_mini">



    
<div class="paquetes_izquierda_mini">
 <label>
  <div class="title_paquetes_mini">
<div class="lateral_lite_mini"></div>
  <img src="images/perrito_lite.png" class="margen_mini" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE LITE </font>
</div>
<div class="precio_paquete_lite_mini"><div class="el_titulo_paquete_lite_mini"> Gratis </div>  <div class="descripcion_precio_paquete_lite_mini">al crear tu usuario</div> </div>
 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
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
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_camara.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_texto.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_lite_mini"> 10 </div>
 <img src="images/icono_calendario.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_of_mini"> 0 </div>
 <img src="images/icono_ticket_of.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_of_mini"> 0 </div>
 <img src="images/icono_video_of.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  
 <input type="radio" style="margin-left:100px;" name="RadioGroup1"  value="radio" id="RadioGroup1_0" />
 </label>
 
</div>




<div class="paquetes_mini">
 <label>
<div class="title_paquetes_mini">
<div class="lateral_regular_mini"></div>
  <img src="images/perrito_regular.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE REGULAR </font>

</div>
<div class="precio_paquete_regular_mini"> $89.00 </div>

 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
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
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_regular_mini"> 5 </div>
 <img src="images/icono_camara_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 150 </div>
 <img src="images/icono_texto_regular.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 30 </div>
 <img src="images/icono_calendario_regular.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 2 </div>
 <img src="images/icono_ticket_regular.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_regular_mini"> 1 </div>
 <img src="images/icono_video_regular.png" width="34" height="26" />
 </li>
 </ul>
 </div>
 <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_1" />
</label>
</div>




<div class="paquetes_derecha_mini">
<label>
<div class="title_paquetes_mini">
<div class="lateral_premium_mini"></div>
  <img src="images/perrito_premium.png" class="margen" width="29" height="29"/> <font class="title_paquetes_titilos_mini"> PAQUETE PREMIUM </font>

</div>
 <div class="precio_paquete_premium_mini"> $165.00 </div>

 <div class="descripcion_paquetes_mini">
 <strong>Incluye:</strong>
<ul class="contenido_paquetes_mini">
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
 <div class="iconos_paquetes_mini">
 <ul>
 <li>
 <div class="cantidades_detalle_paquete_premium_mini"> 15 </div>
 <img src="images/icono_camara_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> ∞ </div>
 <img src="images/icono_texto_premium.png" width="34" height="26" >
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 60 </div>
 <img src="images/icono_calendario_premium.png" width="34" height="26"/>
 </li>
  <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 5 </div>
 <img src="images/icono_ticket_premium.png" width="34" height="26" />
 </li>
   <li>
   <div class="cantidades_detalle_paquete_premium_mini"> 2 </div>
 <img src="images/icono_video_premium.png" width="34" height="26" />
 </li>
 </ul>
 </div>
  <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_2" />
 </label>
 </div>
 


 </div><!-- Contenedor de paquetes  -->
 
</br>
<ul class="morado_mini">
<li><a href="#" id="paso222">Continuar</a>
</li>
</ul> 


</div>



</div>

</div> 

<!-- FIN paso dos !-->

<!-- INICIO paso TRES -->
<div id="paso_tres" style="display:none;" >
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li>1</li>
<li>2</li>
<li class="numero_seccion_mini">3</li>
<li>4</li>
<li>5</li>
</ul>
 </div>
 
<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Completa tu información</div>
<div class="sub_instrucciones_pasos_mini"> Datos de contacto </div>
<div class="contenido_indicacion_formulario_mini"> 
<p class="margen_15_left_mini" >Nombre: <input type="text" class="background_morado_35_mini" readonly="readonly" /> Apellido: <input type="text" class="background_morado_35" readonly="readonly" />  Correo electrónico: <input type="text" class="background_morado" readonly="readonly" /> </p>
</br>
<p class="margen_15_left_mini"> Teléfono: <input type="text" class="background_gris_35_mini"/> Mostrar teléfono en el anuncio: <select class="background_gris_35_mini">
<option>--</option>
<option> Si </option>
<option> No </option>
</select>
</p>
</br>

<div class="sub_instrucciones_pasos_mini"> Detalles del aunucio </div>
</br>
<p class="margen_15_left_mini" >Sección: <input type="text" class="background_morado_55_mini" readonly="readonly" /> Paquete: <input type="text" class="background_morado_55_mini" readonly="readonly" />  Vencimiento: <input type="text" class="background_morado_mini" readonly="readonly" /> </p>
</br>
<p class="margen_15_left_mini"> Titúlo: &nbsp;&nbsp;&nbsp; <input type="text" class="background_gris_55_mini"/> Estado  &nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100_mini">
<option>--</option>
<option> Chihuahua </option>
<option> Quintana Roo </option>
</select>

Ciudad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris_mini" type="text"/>
</p>
</br>

<p class="margen_15_left_mini"> Genéro: <select type="text" class="background_gris_100_mini"/>
<option> --- </option>
<option> Hembra </option>
<option> Macho </option>

</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Raza  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="background_gris_100_mini">
<option>--</option>
<option> Labrador </option>
<option> Labrador</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="background_gris_mini" type="text"/>
</p>
</br>
<p class="margen_15_left_mini">
Descripción:<textarea  class="background_gris_mini" cols="95" rows="3" > </textarea>
</p>
</br>
<p class="margen_15_left_mini">
Link de video <input type="text" size="98"/><img src="images/logo_youtube.png"/>
</p>
<p class="margen_15_left_mini"> <a href="#"> Tutorial para subir video a <img src="images/logo_youtube.png" width="43" height="16"/> </a> </p>
</br>
<p class="margen_15_left_mini"> 

<!-- <iframe src="../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
 </p>
 
 <div style="width:800px; height:150px;"> 

 TEXTO
 </div>
 
<ul class="morado_15_mini" style="margin-left:-15px;" >

<li onclick="muestra('paso_cuatro'); oculta('paso_tres');">

Continuar

</li>

</ul> 

</div>
</div>
</div>
<!-- FIN paso TRES -->

<div id="paso_cuatro" style="display:none;" > <!-- inicio del contendor paso 4 -->
 
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li>1</li>
<li>2</li>
<li >3</li>
<li class="numero_seccion_mini">4</li>
<li>5</li>
</ul>
 </div>

<div class="crerar_publicar_anuncio_mini">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>
 </br>
<div class="descipcion_pasos_largo_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Vista previa de tu anuncio</div>
<div class="leer_anuncio_mini">


<div class="contenedor_galeria_mini">
 <div id="slideshow_publicar_anuncio" class="picse_mini">
       <img src="images/anuncios/02/1.png" width="294" height="200"/>
       <img src="images/anuncios/02/2.png" width="294" height="200"/>
       <img src="images/anuncios/02/3.png" width="294" height="200"/>
       <img src="images/anuncios/02/1.png" width="294" height="200"/>
    </div>

</div>
<div class="datos_general_mini">

<div class="titulo_anuncio_publicado_mini">
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
<ul class="boton_naranja_mini">
<li onclick="muestra('contenedor_contactar_previo');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris_mini">
<li>
<img src="images/favorito.png"/>Agregar a Favoritos
</li>
</ul>

</div>
</br>

<div class="contenedor_del_detalle_mini">

<div class="titulo_anuncio_publicado_mini">
MÁS DETALLES
</div>

<div class="descripcion_del_anuncio_mini">

ksdjfkjslfk fdglksj gkfdsjg  jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
</div>
</br>
<ul class="boton_naranja_dos_mini">
<li id="ver_video" onclick="muestra('video_previo');">
Ver video
</li>
</ul>

<div id="video_previo" class="desplegar_detalles_mini" style="display:none;" >
</br>
<div class="titulo_anuncio_publicado_mini">
VIDEO
</div>

<iframe class="youtube_video_mini" src="http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos_mini">
<li>
<img src="images/alert.png"/>
Denunciar Anuncio
</li>
</ul>

<div class="consejos_advertencias_mini">

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

<div id="contendedor_morado" class="contenedor_morado_mini">
<ul class="morado_15_sinmargen_mini" >

<li onclick="">

Editar

</li>
</ul> 

<ul class="morado_15_sinmargen_mini" >

<li onclick="muestra('paso_cinco'); oculta('paso_cuatro');">

Continuar

</li>

</ul> 
</div>

</div>

</div> <!-- final del contendor paso 4 -->


<!-- Inicio paso 5 -->
<div id="paso_cinco" style=" display:none;"> 
<div class="numeros_publicar_anuncio_mini">
<ul class="listado_numeros_anuncio_mini">
<li>1</li>
<li>2</li>
<li >3</li>
<li >4</li>
<li class="numero_seccion_mini">5</li>
</ul>
 </div>
  </br>
<div class="crerar_publicar_anuncio_mini" style="margin-top:0px;">
<img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

 </div>

<div class="descipcion_pasos_mediano_mini">
<div class="titulo_de_pasos_mini"> PUBLICAR   ANUNCIO </div>
<div class="instrucciones_pasos_mini"> Detalle de compra: </div>
</br>
<table class="tabla_pago" style="margin-left:70px;" width="700">
<tr> 
<th width="158">
PRODUCTO
</th>
<th width="345">
DETALLE
</th>
<th width="181">
COSTO
</th>
</tr>
<tr>
<td>
<img src="images/pago_regular.png" width="156" height="79"/>
</td>
<td>
<p>* 5 fotos</p>
<p>* Texto de 150 caracteres</p> 
<p>* Vigencia de 30 días</p>
<p>* 2 cupones</p>
<p>* 1 video</p>
</td>
<td>
<p class="totales">$89.00</p>
</td>
</tr>
<tr> 
<td colspan="2">
<p>SUBTOTAL:</p>
</td>
<td>
<p class="totales"> $89.00 </p>
</td>
</tr>
<tr>
<td colspan="2">
 <img style="" src="images/mini_cupon.png"/> <font class="texto_de_cupon" >Cupones de descuento: </font> </br> <font id="ver_cupones" class="ver_cupones" onclick="muestra('los_cupones_disponibles');muestra('no_ver_cupones');
 oculta('ver_cupones');"> Ver cupones </font> 
  <font style="display:none;" id="no_ver_cupones" class="ver_cupones" onclick="oculta('los_cupones_disponibles');oculta('no_ver_cupones');muestra('ver_cupones');"> Ocultar cupones </font>
<div id="los_cupones_disponibles" style="padding:15px; display:none;">
<form  class="radios_cupones_mini" action="">
<input type="radio" name="radiog_dark" id="radio_pago1" class="css-checkbox" /><label for="radio_pago1" class="css-label radGroup2"> 10% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago2" class="css-checkbox" checked="checked"/>
<label for="radio_pago2" class="css-label radGroup2">5% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago3" class="css-checkbox" /><label for="radio_pago3" class="css-label radGroup2"> 20% de descuento</label>
</br>
<input type="radio" name="radiog_dark" id="radio_pago4" class="css-checkbox" / checked="checked"><label for="radio_pago4" class="css-label radGroup2"> No usar cupones</label>
</br>
</form>
</div>


</td>
<td>
<p class="totales">- $0.00 </p>
</td>
</tr>
<tr>
<th colspan="2">
TOTAL
</th>
<th>
<p class="totales" style="color: #FFF;">$89.00</p>
</th>
</tr>
</table>

</br>

<ul class="morado_15_mini" >

<li onclick="">
Pagar
</li>

</ul>

</br>
</br>
 
</div> 
</div><!-- Fin  paso 5 -->
