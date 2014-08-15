
<div class="contenedor_contactar" id="contenedor_contactar" style=" display:none;">
<div class="contenedor_cerrar_contactar">
<img src="<?php echo base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_contactar');"/>
</div>
<div class="contactar_al_aunuciante">
<font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
</br>
</br>
<strong> Nombre de usuario:</strong> Juanito Perez
</br>
<strong> Estado </strong> Hidalgo
</br>
<strong> Ciudad </strong> Actopan
</br>
<strong> Teléfono </strong> 372829102374746
</br>
</br>
<font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
</br>
</br>
<input type="text" class="formu_contacto" id="nombre_contacto" onfocus="clear_textbox('nombre_contacto','Nombre');" value="Nombre" size="44" />
<input type="text" class="formu_contacto" id="mail_contacto" onfocus="clear_textbox('mail_contacto','Tu-email')" value="Tu-email" size="44" />
<input type="text" class="formu_contacto" id="asunto_contacto" onfocus="clear_textbox('asunto_contacto','Asunto')" value="Asunto" size="44" />
<textarea cols="50" onfocus="clear_textbox('comentarios_contacto','Comentarios')" id="comentarios_contacto" class="formu_contacto" rows="5">Comentarios</textarea>
</br>
</br>
<ul class="boton_naranja_tres">
<li>
Enviar
</li>
</ul>


</div>


</div>







<div class="contenedor_anuncio_detalle" id="contenedor_anuncio_detalle" style=" display:none;">
<div class="contenedor_cerrar_anuncio">
<img src="<?php echo base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_anuncio_detalle');"/>
</div>
<div class="leer_anuncio">


<div class="contenedor_galeria">
 <div id="slideshow_publicar_anuncio_previo" class="picse">
       <img src="<?php echo base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/2.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/3.png" width="294" height="200"/>
       <img src="<?php echo base_url()?>images/anuncios/02/1.png" width="294" height="200"/>
    </div>

</div>
<div class="datos_general">

<div class="titulo_anuncio_publicado">
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
<ul class="boton_naranja">
<li onclick="muestra('contenedor_contactar');">
Contactar al anunciante
</li>
</ul>
</br>
<ul class="boton_gris">
<li>
<img src="<?php echo base_url()?>images/favorito.png"/>Agregar a Favoritos
</li>
</ul>

</div>
</br>
<div class="contenedor_del_detalle">
<div class="titulo_anuncio_publicado">
MÁS DETALLES
</div>

<div class="descripcion_del_anuncio">

ksdjfkjslfk fdglksj gkfdsjg  jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
</div>
</br>
<ul class="boton_naranja_dos">
<li id="ver_video" onclick="muestra('video');">
Ver video
</li>
</ul>

<div id="video" class="desplegar_detalles" style="display:none;" >
</br>
<div class="titulo_anuncio_publicado">
VIDEO
</div>

<iframe class="youtube_video" src="http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>



<ul class="boton_rojo_dos">
<li>
<img src="<?php echo base_url()?>images/alert.png"/>
Denunciar Anuncio
</li>
</ul>

<div class="consejos_advertencias">

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
 
</div>


<div class="titulo_seccion_admin">
<div class="perrito_perfil">
<img src="<?php echo base_url()?>images/favoritos_perfil.png" />
</div>
<div class="admin_title"> Favoritos </div>
</div>
</br>
  <ul id="itemContainer">
   <!-- INICIO contenedor anuncio  -->
<div class="contenedor_anuncio">
<div class="titulo_anuncio">
Firulais
</div>
<div class="descripcion_anuncio">
<font> Precio: </font>
<br/>
<font> Raza: </font>
<br/>
<font> Género: </font>
<br/>
<font> Ciudad: </font>
</div>
<div class="contenedor_foto_anuncio">
<img src="<?php echo base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80" />
</div>
<ul class="ver_detalle_anuncio">
<li onclick="muestra('contenedor_anuncio_detalle');" >
Ver detalle
</li>
</ul>

 </div> <!-- Fin contenedor annuncio -->
 
 
  <!-- Inicio margen falso -->
 <div class="margen_derecho_20">

</div>
  <!-- FIN margen falso -->
  
  
  <!-- INICIO contenedor anuncio  -->
<div class="contenedor_anuncio">
<div class="titulo_anuncio">
Firulais
</div>
<div class="descripcion_anuncio">
<font> Precio: </font>
<br/>
<font> Raza: </font>
<br/>
<font> Género: </font>
<br/>
<font> Ciudad: </font>
</div>
<div class="contenedor_foto_anuncio">
<img src="<?php echo base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80" />
</div>
<ul class="ver_detalle_anuncio">
<li  >
Ver detalle
</li>
</ul>

 </div> <!-- Fin contenedor annuncio -->
 
 
  <!-- Inicio margen falso -->
 <div class="margen_derecho_20">

</div>
  <!-- FIN margen falso -->
  
  
  <!-- INICIO contenedor anuncio  -->
<div class="contenedor_anuncio">
<div class="titulo_anuncio">
Firulais
</div>
<div class="descripcion_anuncio">
<font> Precio: </font>
<br/>
<font> Raza: </font>
<br/>
<font> Género: </font>
<br/>
<font> Ciudad: </font>
</div>
<div class="contenedor_foto_anuncio">
<img src="<?php echo base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80" />
</div>
<ul class="ver_detalle_anuncio">
<li  >
Ver detalle
</li>
</ul>

 </div> <!-- Fin contenedor annuncio -->
 
 
  <!-- Inicio margen falso -->
 <div class="margen_derecho_20">

</div>
  <!-- FIN margen falso -->
   <!-- INICIO contenedor anuncio  -->
<div class="contenedor_anuncio">
<div class="titulo_anuncio">
Firulais
</div>
<div class="descripcion_anuncio">
<font> Precio: </font>
<br/>
<font> Raza: </font>
<br/>
<font> Género: </font>
<br/>
<font> Ciudad: </font>
</div>
<div class="contenedor_foto_anuncio">
<img src="<?php echo base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80" />
</div>
<ul class="ver_detalle_anuncio">
<li  >
Ver detalle 
</li>
</ul>

 </div> <!-- Fin contenedor annuncio -->
 
  </ul>
      
      <div style=" margin: 0px auto; padding:10px; text-align:center;">
       <!-- navigation holder -->
      <div class="holder">  </div>
      </div>

    
    
    
      </div>