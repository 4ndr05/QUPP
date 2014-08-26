<?php
$this->load->view('general/general_header_view', array('title' => 'Venta',
  'links'                                                      => array('venta'), 'scripts' => array('funciones_venta')))
  ?>

  <div id="iconos_ocultos" class="iconos_ocultos">


    <ul class="iconos_estatus">
        <li>

            <img id="horizontal_compras_mini" onmouseover="mostrar_icono('horizontal_compras');
            ocultar_icono('horizontal_compras_mini');" class="iconos_flotantes"
            src="<?php echo base_url()?>images/compras_horizontal_mini.png"/>

            <img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_compras_mini');
            ocultar_icono('horizontal_compras');" id="horizontal_compras"
            src="<?php echo base_url()?>images/compras_horizontal.png"/>

        </li>
        <li>
            <img id="horizontal_ingresar_mini" onmouseover="mostrar_icono('horizontal_ingresar');
            ocultar_icono('horizontal_ingresar_mini');" class="iconos_flotantes"
            src="<?php echo base_url()?>images/ingresar_horizontal_mini.png"/>

            <img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_ingresar_mini');
            ocultar_icono('horizontal_ingresar');" id="horizontal_ingresar"
            src="<?php echo base_url()?>images/ingresar_horizontal.png"/>
        </li>

        <li>
            <img id="horizontal_registrate_mini" onmouseover="mostrar_icono('horizontal_registrate');
            ocultar_icono('horizontal_registrate_mini');" class="iconos_flotantes"
            src="<?php echo base_url()?>images/registrate_horizontal_mini.png"/>

            <img class="iconos_flotantes2" onmouseout="mostrar_icono('horizontal_registrate_mini');
            ocultar_icono('horizontal_registrate');" id="horizontal_registrate"
            src="<?php echo base_url()?>images/registrate_horizontal.png"/>
        </li>
    </ul>
</div>

<?php $this->load->view('general/menu_view')?>

<div class="contenedor_contactar" id="contenedor_contactar" style=" display:none;">
    <div class="contenedor_cerrar_contactar">
        <img src="<?php echo base_url()?>images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_contactar');"/>
    </div>
    <div class="contactar_al_aunuciante">
        <font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
    </br>
</br>
<strong> Nombre de usuario:</strong> <?php echo $this->session->userdata('nombre').' '.$this->session->userdata('apellido');?>
</br>
<strong> Estado </strong> <?php echo $this->session->userdata('estado')?>
</br>
<strong> Ciudad </strong> <?php echo $this->session->userdata('ciudad')?>
</br>
<strong> Teléfono </strong> <?php echo $this->session->userdata('telefono')?>
</br>
</br>
<font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
</br>
</br>
<form id="contacto_form">
    <input type="text" class="formu_contacto" id="nombre_contacto"
    value="<?php echo $this->session->userdata('nombre')?>" size="44"/>
    <input type="text" class="formu_contacto" id="mail_contacto"
    value="<?php echo $this->session->userdata('correo')?>" size="44"/>
    <input type="text" class="formu_contacto" id="asunto_contacto"
    onfocus="clear_textbox('asunto_contacto', 'Asunto')" placeholder="Asunto" size="44"/>
    <textarea cols="50" onfocus="clear_textbox('comentarios_contacto', 'Comentarios')" id="comentarios_contacto"
    class="formu_contacto" rows="5">Comentarios</textarea>
</br>
</br>
<ul class="boton_naranja_tres">
    <li>
        <input type="submit" value="Enviar"/>
    </li>
</ul>
</form>

</div>


</div>

<div class="contenedor_contactar" id="contenedor_denunciar" style=" display:none;">
    <div class="contenedor_cerrar_contactar">
        <img src="<?php echo base_url()?>images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_denunciar');"/>
    </div>
    <div class="contactar_al_aunuciante">
        <font class="titulo_anuncio_publicado"> DENUNCIA DE CONTENIDO </font>
    </br>
</br>
<strong> Nombre de usuario:</strong> <?php echo $this->session->userdata('nombre').' '.$this->session->userdata('apellido');?>
</br>
<strong> Estado </strong> <?php echo $this->session->userdata('estado')?>
</br>
<strong> Ciudad </strong> <?php echo $this->session->userdata('ciudad')?>
</br>
<strong> Teléfono </strong> <?php echo $this->session->userdata('telefono')?>
</br>
</br>
<font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
</br>
</br>
<form id="denuncia_form">
    <input type="text" class="formu_contacto" name="nombre_denuncia" id="nombre_denuncia"
    value="<?php echo $this->session->userdata('nombre')?>" size="44"/>
    <input type="text" class="formu_contacto" name="mail_denuncia" id="mail_denuncia"
    value="<?php echo $this->session->userdata('correo')?>" size="44"/>
    <input type="text" class="formu_contacto" name="asunto_denuncia" id="asunto_denuncia"
    onfocus="clear_textbox('asunto_denuncia', 'Asunto')" value="Asunto" size="44"/>
    <textarea cols="50" onfocus="clear_textbox('comentarios_denuncia', 'Comentarios')" name="comentarios_denuncia" id="comentarios_denuncia"
    class="formu_contacto" rows="5">Comentarios</textarea>
</br>
</br>
<ul class="boton_naranja_tres">
    <li>
        <input type="submit" value="Enviar"/>
    </li>
</ul>
<span class="info"></span>
</form>

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
<span id="info_fav"></span>
</div>
</br>
<div class="contenedor_del_detalle">
    <div class="titulo_anuncio_publicado">
        MÁS DETALLES
    </div>

    <div class="descripcion_del_anuncio">

        ksdjfkjslfk fdglksj gkfdsjg jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj
        dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
    </div>
</br>
<ul class="boton_naranja_dos">
    <li id="ver_video" onclick="muestra('video');">
        Ver video
    </li>
</ul>

<div id="video" class="desplegar_detalles" style="display:none;">
</br>
<div class="titulo_anuncio_publicado">
    VIDEO
</div>

<iframe class="youtube_video" src="<?php echo base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>


<ul class="boton_rojo_dos">
    <li class="btn_den">
        <img src="<?php echo base_url()?>images/alert.png"/>
        Denunciar Anuncio
    </li>
</ul>

<div class="consejos_advertencias">

    - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay millones
    de perros sin hogar que deben ser sacrificados.
</br>
- Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar
antes de comprar uno.
</br>
- Infórmate de los cuidados especiales que debes de tener con la raza específica que estás comprando.
</br>
- NUNCA compres una nueva mascota sin verla físicamente antes.
</br>
- NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser
rastreado, como lo son Money Gram y Western Union.
</br>
- NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que
corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate de
que el nombre del criador esté en el certificado.
</br>
- Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
</br>
- El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
</div>


</div>

</br>

</div>

</div>

<div class="contenedor_contactar_previo" id="contenedor_contactar_previo" style=" display:none;">
    <div class="contenedor_cerrar_contactar">
        <img src="<?php echo base_url()?>images/cerrar_anuncio.png" onclick="oculta('contenedor_contactar_previo');"/>
    </div>
    <div class="contactar_al_aunuciante">
        <font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
    </br>
</br>
<strong> Nombre de usuario:</strong> Juanito Perez
</br>
<strong> Estado: </strong> Hidalgo
</br>
<strong> Ciudad: </strong> Actopan
</br>
<strong> Teléfono: </strong> 372829102374746
</br>
</br>
<font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
</br>
</br>
<input type="text" class="formu_contacto" id="nombre_contacto"
onfocus="clear_textbox('nombre_contacto', 'Nombre');" value="Nombre" size="44"/>
<input type="text" class="formu_contacto" id="mail_contacto"
onfocus="clear_textbox('mail_contacto', 'Tu-email')" value="Tu-email" size="44"/>
<input type="text" class="formu_contacto" id="asunto_contacto"
onfocus="clear_textbox('asunto_contacto', 'Asunto')" value="Asunto" size="44"/>
<textarea cols="50" onfocus="clear_textbox('comentarios_contacto', 'Comentarios')" id="comentarios_contacto"
class="formu_contacto" rows="5">Comentarios</textarea>
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
<span id="info_fav"></span>

</div>
</br>
<div class="contenedor_del_detalle">
    <div class="titulo_anuncio_publicado">
        MÁS DETALLES
    </div>

    <div class="descripcion_del_anuncio">

        ksdjfkjslfk fdglksj gkfdsjg jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj
        dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
    </div>
</br>
<ul class="boton_naranja_dos">
    <li id="ver_video" onclick="muestra('video');">
        Ver video
    </li>
</ul>

<div id="video" class="desplegar_detalles" style="display:none;">
</br>
<div class="titulo_anuncio_publicado">
    VIDEO
</div>

<iframe class="youtube_video" src="<?php echo base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>


<ul class="boton_rojo_dos">
    <li class="btn_den">
        <img src="<?php echo base_url()?>images/alert.png"/>
        Denunciar Anuncio
    </li>
</ul>

<div class="consejos_advertencias">

    - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay millones
    de perros sin hogar que deben ser sacrificados.
</br>
- Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar
antes de comprar uno.
</br>
- Infórmate de los cuidados especiales que debes de tener con la raza específica que estás comprando.
</br>
- NUNCA compres una nueva mascota sin verla físicamente antes.
</br>
- NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser
rastreado, como lo son Money Gram y Western Union.
</br>
- NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que
corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate de
que el nombre del criador esté en el certificado.
</br>
- Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
</br>
- El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
</div>


</div>

</br>

</div>

</div>

<div id="contenedor_publicar_anuncio" class="contenedor_publicar_anuncio" style=" display:none;">

    <!-- Inicio contenedor pap publicar anuncio aunucio !-->
    <div id="publicar_anuncio" class="pubicar_anuncio">


        <!-- Inicio Paso UNO -->
        <div id="paso_uno">
            <div class="numeros_publicar_anuncio">
                <ul class="listado_numeros_anuncio">
                    <li class="numero_seccion">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>
            <div class="crerar_publicar_anuncio">
                <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

            </div>
        </br>
        <div class="descipcion_pasos">
            <div class="titulo_de_pasos"> PUBLICAR ANUNCIO</div>
            <div class="instrucciones_pasos"> Selecciona la sección de publicación</div>
            <div class="contenido_indicacion">
                <img src="<?php echo base_url()?>images/pero_paso_uno.png" class="perro_paso_uno"/>

                <form id="form1" name="form1" method="post" class="radios_secciones" action="">
                    <input type="radio" name="radiog_dark" id="radio4" class="css-checkbox"/><label for="radio4"
                    class="css-label radGroup2">
                    Cruza</label>
                </br>
                <input type="radio" name="radiog_dark" id="radio5" class="css-checkbox" checked="checked"/>
                <label for="radio5" class="css-label radGroup2">Venta</label>
            </br>
            <input type="radio" name="radiog_dark" id="radio6" class="css-checkbox"/><label for="radio6"
            class="css-label radGroup2">Adopción</label>
        </br>
        <input type="radio" name="radiog_dark" id="radio7" class="css-checkbox"/><label for="radio7"
        class="css-label radGroup2">Perros
        perdidos</label>
    </form>

</br>
<ul class="morado">
    <li onclick="muestra('paso_dos');
    oculta('paso_uno');">

    Continuar
</li>
</ul>


</div>

</div>

</div>
<!-- FIN anuncio UNO -->


<!-- Inicio paso DOS -->
<div id="paso_dos" style="display:none;">
    <div class="numeros_publicar_anuncio">
        <ul class="listado_numeros_anuncio">
            <li>1</li>
            <li class="numero_seccion">2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
    <div class="crerar_publicar_anuncio">
        <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

    </div>
</br>
<div class="descipcion_pasos">
    <div class="titulo_de_pasos"> PUBLICAR ANUNCIO</div>
    <div class="instrucciones_pasos"> Indica tu tipo de anuncio</div>
    <div class="contenido_indicacion">
        <div id="contenedor_paquetes" class="contenedor_paquetes">


            <div class="paquetes_izquierda">
                <label>
                    <div class="title_paquetes">
                        <div class="lateral_lite"></div>
                        <img src="<?php echo base_url()?>images/perrito_lite.png" class="margen" width="29" height="29"/>
                        <font class="title_paquetes_titilos"> PAQUETE LITE </font>
                    </div>
                    <div class="precio_paquete_lite">
                        <div class="el_titulo_paquete_lite"> Gratis</div>
                        <div class="descripcion_precio_paquete_lite">al crear tu usuario</div>
                    </div>
                    <div class="descripcion_paquetes">
                        <strong>Incluye:</strong>
                        <ul class="contenido_paquetes">
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
                    <div class="iconos_paquetes">
                        <ul>
                            <li>
                                <div class="cantidades_detalle_paquete_lite"> 10</div>
                                <img src="<?php echo base_url()?>images/icono_camara.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_lite"> 10</div>
                                <img src="<?php echo base_url()?>images/icono_texto.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_lite"> 10</div>
                                <img src="<?php echo base_url()?>images/icono_calendario.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_of"> 0</div>
                                <img src="<?php echo base_url()?>images/icono_ticket_of.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_of"> 0</div>
                                <img src="<?php echo base_url()?>images/icono_video_of.png" width="34" height="26"/>
                            </li>
                        </ul>
                    </div>

                    <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_0"/>
                </label>

            </div>


            <div class="paquetes">
                <label>
                    <div class="title_paquetes">
                        <div class="lateral_regular"></div>
                        <img src="<?php echo base_url()?>images/perrito_regular.png" class="margen" width="29" height="29"/>
                        <font class="title_paquetes_titilos"> PAQUETE REGULAR </font>

                    </div>
                    <div class="precio_paquete_regular"> $89.00</div>

                    <div class="descripcion_paquetes">
                        <strong>Incluye:</strong>
                        <ul class="contenido_paquetes">
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
                    <div class="iconos_paquetes">
                        <ul>
                            <li>
                                <div class="cantidades_detalle_paquete_regular"> 5</div>
                                <img src="<?php echo base_url()?>images/icono_camara_regular.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_regular"> 150</div>
                                <img src="<?php echo base_url()?>images/icono_texto_regular.png" width="34" height="26">
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_regular"> 30</div>
                                <img src="<?php echo base_url()?>images/icono_calendario_regular.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_regular"> 2</div>
                                <img src="<?php echo base_url()?>images/icono_ticket_regular.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_regular"> 1</div>
                                <img src="<?php echo base_url()?>images/icono_video_regular.png" width="34" height="26"/>
                            </li>
                        </ul>
                    </div>
                    <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_1"/>
                </label>
            </div>


            <div class="paquetes_derecha">
                <label>
                    <div class="title_paquetes">
                        <div class="lateral_premium"></div>
                        <img src="<?php echo base_url()?>images/perrito_premium.png" class="margen" width="29" height="29"/>
                        <font class="title_paquetes_titilos"> PAQUETE PREMIUM </font>

                    </div>
                    <div class="precio_paquete_premium"> $165.00</div>

                    <div class="descripcion_paquetes">
                        <strong>Incluye:</strong>
                        <ul class="contenido_paquetes">
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
                    <div class="iconos_paquetes">
                        <ul>
                            <li>
                                <div class="cantidades_detalle_paquete_premium"> 15</div>
                                <img src="<?php echo base_url()?>images/icono_camara_premium.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_premium"> ∞</div>
                                <img src="<?php echo base_url()?>images/icono_texto_premium.png" width="34" height="26">
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_premium"> 60</div>
                                <img src="<?php echo base_url()?>images/icono_calendario_premium.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_premium"> 5</div>
                                <img src="<?php echo base_url()?>images/icono_ticket_premium.png" width="34" height="26"/>
                            </li>
                            <li>
                                <div class="cantidades_detalle_paquete_premium"> 2</div>
                                <img src="<?php echo base_url()?>images/icono_video_premium.png" width="34" height="26"/>
                            </li>
                        </ul>
                    </div>
                    <input type="radio" style="margin-left:100px;" name="RadioGroup1" value="radio" id="RadioGroup1_2"/>
                </label>
            </div>


        </div>
        <!-- Contenedor de paquetes  -->

    </br>
    <ul class="morado">
        <li onclick="muestra('paso_tres');
        oculta('paso_dos');">Continuar
    </li>
</ul>


</div>


</div>

</div>

<!-- FIN paso dos !-->

<!-- INICIO paso TRES -->
<div id="paso_tres" style="display:none;">
    <div class="numeros_publicar_anuncio">
        <ul class="listado_numeros_anuncio">
            <li>1</li>
            <li>2</li>
            <li class="numero_seccion">3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>

    <div class="crerar_publicar_anuncio">
        <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

    </div>
</br>
<div class="descipcion_pasos_largo">
    <div class="titulo_de_pasos"> PUBLICAR ANUNCIO</div>
    <div class="instrucciones_pasos"> Completa tu información</div>
    <div class="sub_instrucciones_pasos"> Datos de contacto</div>
    <div class="contenido_indicacion_formulario">
        <p class="margen_15_left">Nombre: <input type="text" class="background_morado_35" readonly="readonly"/>
            Apellido: <input type="text" class="background_morado_35" readonly="readonly"/> Correo electrónico:
            <input type="text" class="background_morado" readonly="readonly"/></p>
        </br>
        <p class="margen_15_left"> Teléfono: <input type="text" class="background_gris_35"/> Mostrar teléfono en el
            anuncio: <select class="background_gris_35">
            <option>--</option>
            <option> Si</option>
            <option> No</option>
        </select>
    </p>
</br>

<div class="sub_instrucciones_pasos"> Detalles del aunucio</div>
</br>
<p class="margen_15_left">Sección: <input type="text" class="background_morado_55" readonly="readonly"/>
    Paquete: <input type="text" class="background_morado_55" readonly="readonly"/> Vencimiento: <input
    type="text" class="background_morado" readonly="readonly"/></p>
</br>
<p class="margen_15_left"> Titúlo: &nbsp;
    &nbsp;
    &nbsp;
    <input type="text" class="background_gris_55"/> Estado
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <select class="background_gris_100">
        <option>--</option>
        <option> Chihuahua</option>
        <option> Quintana Roo</option>
    </select>

    Ciudad: &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <input class="background_gris" type="text"/>
</p>
</br>

<p class="margen_15_left"> Genéro: <select type="text" class="background_gris_100"/>
    <option> ---</option>
    <option> Hembra</option>
    <option> Macho</option>

</select>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
Raza &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<select class="background_gris_100">
    <option>--</option>
    <option> Labrador</option>
    <option> Labrador</option>
</select>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
Precio: &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<input class="background_gris" type="text"/>
</p>
</br>
<p class="margen_15_left">
    Descripción:<textarea class="background_gris" cols="95" rows="3"> </textarea>
</p>
</br>
<p class="margen_15_left">
    Link de video <input type="text" size="98"/><img src="<?php echo base_url()?>images/logo_youtube.png"/>
</p>

<p class="margen_15_left"><a href="<?php echo base_url()?>#"> Tutorial para subir video a <img
    src="<?php echo base_url()?>images/logo_youtube.png" width="43" height="16"/> </a></p>
</br>
<p class="margen_15_left">

    <!-- <iframe src="<?php echo base_url()?>../subir_archivos/index.html" style="overflow:none;" scrolling="no" width="800" height="100"> </iframe> -->
</p>

<div style="width:800px; height:150px;">

    TEXTO
</div>

<ul class="morado_15" style="margin-left:-15px;">

    <li onclick="muestra('paso_cuatro');
    oculta('paso_tres');">

    Continuar

</li>

</ul>

</div>
</div>
</div>
<!-- FIN paso TRES -->

<div id="paso_cuatro" style="display:none;"> <!-- inicio del contendor paso 4 -->

    <div class="numeros_publicar_anuncio">
        <ul class="listado_numeros_anuncio">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li class="numero_seccion">4</li>
            <li>5</li>
        </ul>
    </div>

    <div class="crerar_publicar_anuncio">
        <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

    </div>
</br>
<div class="descipcion_pasos_largo">
    <div class="titulo_de_pasos"> PUBLICAR ANUNCIO</div>
    <div class="instrucciones_pasos"> Vista previa de tu anuncio</div>
    <div class="leer_anuncio">


        <div class="contenedor_galeria">
            <div id="slideshow_publicar_anuncio" class="picse">
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
    <li onclick="muestra('contenedor_contactar_previo');">
        Contactar al anunciante
    </li>
</ul>
</br>
<ul class="boton_gris">
    <li class="btn_fvt">
        <img src="<?php echo base_url()?>images/favorito.png"/>Agregar a Favoritos
    </li>
</ul>
<span id="info_fav"></span>
</div>
</br>

<div class="contenedor_del_detalle">

    <div class="titulo_anuncio_publicado">
        MÁS DETALLES
    </div>

    <div class="descripcion_del_anuncio">

        ksdjfkjslfk fdglksj gkfdsjg jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj
        dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
    </div>
</br>
<ul class="boton_naranja_dos">
    <li id="ver_video" onclick="muestra('video_previo');">
        Ver video
    </li>
</ul>

<div id="video_previo" class="desplegar_detalles" style="display:none;">
</br>
<div class="titulo_anuncio_publicado">
    VIDEO
</div>

<iframe class="youtube_video"
src="<?php echo base_url()?>http://www.youtube.com/embed/YlmidIPuZ58"></iframe>


</div>


<ul class="boton_rojo_dos">
    <li>
        <img src="<?php echo base_url()?>images/alert.png"/>
        Denunciar Anuncio
    </li>
</ul>

<div class="consejos_advertencias">

    - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay
    millones de perros sin hogar que deben ser sacrificados.
</br>
- Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar
antes de comprar uno.
</br>
- Infórmate de los cuidados especiales que debes de tener con la raza específica que estás
comprando.
</br>
- NUNCA compres una nueva mascota sin verla físicamente antes.
</br>
- NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser
rastreado, como lo son Money Gram y Western Union.
</br>
- NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que
corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate
de que el nombre del criador esté en el certificado.
</br>
- Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
</br>
- El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
</div>


</div>

</br>

</div>

<div id="contendedor_morado" class="contenedor_morado">
    <ul class="morado_15_sinmargen">

        <li onclick="">

            Editar

        </li>
    </ul>

    <ul class="morado_15_sinmargen">

        <li onclick="muestra('paso_cinco');
        oculta('paso_cuatro');">

        Continuar

    </li>

</ul>
</div>

</div>

</div>
<!-- final del contendor paso 4 -->


<!-- Inicio paso 5 -->
<div id="paso_cinco" style="display:none;">
    <div class="numeros_publicar_anuncio">
        <ul class="listado_numeros_anuncio">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li class="numero_seccion">5</li>
        </ul>
    </div>
</br>
<div class="crerar_publicar_anuncio" style="margin-top:0px;">
    <img src="<?php echo base_url()?>images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio');"/>

</div>

<div class="descipcion_pasos_mediano">
    <div class="titulo_de_pasos"> PUBLICAR ANUNCIO</div>
    <div class="instrucciones_pasos"> Detalle de compra:</div>
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
            <img src="<?php echo base_url()?>images/pago_regular.png" width="156" height="79"/>
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
            <img style="" src="<?php echo base_url()?>images/mini_cupon.png"/> <font class="texto_de_cupon">Cupones de
            descuento: </font> </br> <font id="ver_cupones" class="ver_cupones" onclick="muestra('los_cupones_disponibles');
            muestra('no_ver_cupones');
            oculta('ver_cupones');"> Ver cupones </font>
            <font style="display:none;" id="no_ver_cupones" class="ver_cupones" onclick="oculta('los_cupones_disponibles');
            oculta('no_ver_cupones');
            muestra('ver_cupones');"> Ocultar cupones </font>

            <div id="los_cupones_disponibles" style="padding:15px; display:none;">
                <form class="radios_cupones_mini" action="">
                    <input type="radio" name="radiog_dark" id="radio_pago1" class="css-checkbox"/><label
                    for="radio_pago1" class="css-label radGroup2"> 10% de descuento</label>
                </br>
                <input type="radio" name="radiog_dark" id="radio_pago2" class="css-checkbox"
                checked="checked"/>
                <label for="radio_pago2" class="css-label radGroup2">5% de descuento</label>
            </br>
            <input type="radio" name="radiog_dark" id="radio_pago3" class="css-checkbox"/><label
            for="radio_pago3" class="css-label radGroup2"> 20% de descuento</label>
        </br>
        <input type="radio" name="radiog_dark" id="radio_pago4" class="css-checkbox" /
        checked="checked"><label for="radio_pago4" class="css-label radGroup2"> No usar
        cupones</label>
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
<ul class="morado_15">

    <li onclick="">
        Pagar
    </li>

</ul>
</div>

</div>
<!-- Fin  paso 5 -->


</div>
</div>
</div>
<!-- Fin del contenedor publicar anucio fondo negro -->

<div class="titulo_seccion">
    VENTA
</div>
<div class="contenedor_buscador">
    <div class="buscador">
        <form id="filtro_venta">
            <input type="hidden" name="id_anuncio" id="id_anuncio" value=""/>

            <div class="fondo_select">
                <select class="styled" id="raza" name="raza">
                    <option value=""> Selecciona un raza</option>
                    <?php if ($razas != null):?>
                        <?php foreach ($razas as $raza):?>
                            ?>
                            <option style="background-color: #BCBEC0;"
                            value="<?php echo $raza->razaID?>"><?php echo $raza->raza?></option>
                        <?php endforeach;?>
                    <?php endif;?>
                    ?>
                </select>
            </div>

            <div class="fondo_select">
                <select class=" styled estilo_select" id="genero" name="genero">
                    <option value=""> Selecciona un género</option>
                    <option style="background-color: #BCBEC0;">Macho</option>
                    <option style="background-color: #BCBEC0;">Hembra</option>

                </select>
            </div>

            <div class="fondo_select">
                <select class="styled estilo_select" id="estado" name="estado">
                    <option value=""> Selecciona un Estado</option>
                    <?php
                    if ($estados != null):
                     foreach ($estados as $estado):
                         ?>
                     <option style="background-color: #BCBEC0;"
                     value="<?php echo $estado->estadoID?>"><?php echo $estado->nombreEstado?></option>
                     <?php
                     endforeach;
                     endif;
                     ?>

                 </select>
             </div>
             <div class="fondo_select">
                <select class="styled estilo_select" id="Precio" name="precio">
                    <option value=""> Ordenar por precio</option>
                    <option style="background-color: #BCBEC0;" value="asc"> De menor a mayor</option>
                    <option style="background-color: #BCBEC0;" value="desc"> De mayor a menor</option>

                </select>
            </div>
            <div class="contenedor_buscar">
                <input type="text" class="buscar" placeholder="palabras clave" size="4" name="palabra_clave"
                id="palabra_clave"/>
                <input type="button" height="40" value="  " class="boton_palabras_clave"/>
            </div>
        </form>
    </div>

</div>

<div id="contenedor_central">
    <div id="espacio_izquierda" class="seccion_izquierda_secciones">
        <ul class="iconos">
            <li><img src="<?php echo base_url()?>images/compras.png"/></li>
            <li><img src="<?php echo base_url()?>images/sesion.png"/></li>
            <li>
                <img src="<?php echo base_url()?>images/registrate.png"/>
            </li>
        </ul>
    </div>


    <div class="contenedor_central" style="margin-top:5px;">

        <!-- item container -->
        <ul id="itemContainer" style="display:inline-block;">
            <?php $fila = 1;?>

            <?php
            foreach ($publicaciones as $publicacion):
                ?>
            <!-- INICIO contenedor anuncio  -->
            <div class="contenedor_anuncio">
                <div class="titulo_anuncio">
                    <?php echo $publicacion->titulo?>
                </div>
                <div class="descripcion_anuncio">
                    <font> Precio: <?php echo $publicacion->precio?></font>
                    <br/>
                    <font> Raza: <?php echo $publicacion->raza?> </font>
                    <br/>
                    <font> Género: <?php echo $publicacion->genero?'Macho':'Hembra'?> </font>
                    <br/>
                    <font> Ciudad: <?php echo $publicacion->ciudad?></font>
                </div>
                <div class="contenedor_foto_anuncio">
                    <img src="<?php echo base_url()?>images/anuncios/01/perro.png" align="middle" width="128" height="80"/>
                </div>

                <ul class="ver_detalle_anuncio">
                    <?php if ($this->session->userdata('idUsuario') !== FALSE):?>
                        <li class="mas_anuncio" data-id="<?php echo $publicacion->publicacionID ?>" >
                            Ver detalle...
                        </li>
                    <?php else:?>
                        <li onclick="javascript:alert('Favor de iniciar sesión.')">
                            Ver detalle...
                        </li>
                    <?php endif;?>
                </ul>
            </div>

            <!-- Fin contenedor annuncio -->

            <?php if (4 > $fila++):?>
                <!-- Inicio margen falso -->
                <div class="margen_derecho_20">

                </div>
            <?php else:?>
                <?php $fila = 1;?>
            <?php endif;?>
            <!-- FIN margen falso -->
        <?php endforeach;?>

    </ul>

    <div style=" margin: 0px auto; padding:10px; text-align:center;">
        <!-- navigation holder -->
        <div class="holder"></div>
    </div>
</div>


<div class="seccion_derecha_paquetes">
    <ul class="aqui_crear_anuncio">
        <li onclick="muestra('contenedor_publicar_anuncio');">

        </li>
    </ul>
</div>

<script>

function obten_id(id) {
    muestra('contenedor_contactar');
    document.getElementById('enviando_id').value = id;

}

    $(function () {

        function enviar_mail(id) {
            id = document.getElementById('enviando_id').value


            $.ajax({
                url: '<?php echo base_url('venta/contactar/');?>/' + id,
                type: 'post',
                dataType: 'html',
                data: '',
                beforeSend: function () {
                    $(".infouser").empty().html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
                },
                success: function (data) {
                    $(".infouser").empty().append(data);

                }
            });
        }

        /* initiate the plugin */
        $("div.holder").jPages({
            containerID: "itemContainer",
            perPage: 25,
            startPage: 1,
            startRange: 1,
            midRange: 5,
            endRange: 1
        });

        $("#filtro_venta select[name]").on('change', function (e) {
            e.preventDefault();
            var form = $("#filtro_venta");

            search_data(form);
        });

        $("#filtro_venta [name]").keyup(function () {
            if ($(this).val().length > 2 || $(this).val().length === 0) {
                var form = $("#filtro_venta");
                search_data(form);
            }
        });

        function search_data(form) {

            $.ajax({
                url: '<?php echo base_url('venta/lista')?>',
                data: form.serialize(),
                dataType: 'json',
                type: 'post',
                beforeSend: function () {
                    $("#itemContainer").empty().html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
                },
                success: function (result) {
                    $("#itemContainer").empty();
                    var data = result.data;
                    var separator = 1;

                    if (result.count < 1) {
                        $("#itemContainer").append('<div class="alert alert-warning">No hay resultados.</div>');
                    }

                    for (var i = 0; i < result.count; i++) {
                        if (data[i].genero === '0'){
                            var el_genero = "Hembra";
                        }
                        else{
                            var el_genero = "Macho";
                        }

                        var cont_anun = $('<div class="contenedor_anuncio"></div>');
                        var cont_titulo = $('<div class="titulo_anuncio"></div>');
                        cont_titulo.append(data[i].titulo);
                        cont_anun.append(cont_titulo);

                        var cont_descripcion = $('<div class="descripcion_anuncio"></div>');
                        cont_descripcion.append('<font> Precio:' + data[i].precio + '</font> </br> <font> Raza: ' + data[i].raza.substring(0, 15) + ' </font></br> <font>Género:' + el_genero + '</font></br> <font>Ciudad:' + data[i].nombreEstado + '</font> ');
                        cont_anun.append(cont_descripcion);

                        var cont_imagen = $('<div class="contenedor_foto_anuncio"></div>');
                        var logo = 'perro.png';
                        cont_imagen.append('<img src="images/anuncios/01/' + logo + '" alt="logo" width="128" height="80"/>');
                        cont_anun.append(cont_imagen);

                        <?php if ($this->session->userdata('idUsuario') !== FALSE): ?>
                        var ver_mas = $('<ul class="ver_detalle_anuncio"><li onclick="muestra(\'contenedr_anuncio_detalle\')">Ver detalle...</li></ul>');
                    <?php else: ?>
                    var ver_mas = $('<ul class="ver_detalle_anuncio"><li onclick="javascript:alert(\'Favor de iniciar sesión.\')">Ver detalle...</li></ul>');
                <?php endif; ?>
                cont_anun.append(ver_mas);

                $("#itemContainer").append(cont_anun);
                if (4 > separator++) {
                    $("#itemContainer").append('<div class="margen_derecho_20"></div>');
                }
                else {
                    separator = 1;
                }
            }

        },
        complete: function () {
            $("div.holder").jPages({
                containerID: "itemContainer",
                perPage: 28,
                startPage: 1,
                startRange: 1,
                midRange: 5,
                endRange: 1
            });
        }
    });
}

function show_details(data) {


}

function buscar_detalles(id) {
    muestra('contenedor_anuncio_detalle');
    var id_anuncio = "raza=&genero=&estado=&precio=&palabra_clave=&id_anuncio=" + id;
    $.ajax({
        url: '<?php echo base_url('venta/lista')?>',
        data: id_anuncio,
        dataType: 'json',
        type: 'post',
        beforeSend: function () {
            $(".contenedor_galeria").empty().html('<div class="spinner" style="position:fixed;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            $(".datos_general").empty().html('<div class="spinner" style="position:fixed;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            $(".descripcion_del_anuncio").empty().html('<div class="spinner" style="position:fixed;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            $(".youtube_video").empty().html('<div class="spinner" style="position:fixed;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            $(".contenedor_galeria").empty().html('<div class="spinner" style="position:fixed;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
        },
        success: function (result) {

            buscar_imagenes(id);

            $(".contenedor_galeria").empty();
            $(".datos_general").empty();
            $(".descripcion_del_anuncio").empty();
            $(".youtube_video").empty();
            var data = result.data;

            if (result.count < 1) {
                $(".contendor_galeria").append('<div class="alert alert-warning">No hay resultados.</div>');
            }
            for (var i = 0; i < result.count; i++) {
                if (data[i].genero === '0')
                    var el_genero = "Hembra";
                else
                    var el_genero = "Macho";

                $(".contenedor_galeria").append('<img src="' + data[i].foto + '" width="294" height="200" style=" top: 0px; left: 0px; display: block; z-index: 5; opacity: 1;"/>');
                var cont_datos = $('.datos_general');
                var cont_info = $(' <div class="titulo_anuncio_publicado">' + data[i].titulo + '</div></br><strong>Precio:' + data[i].precio + '</strong></br><font> Fecha de publicación:' + data[i].fechaCreacion + '</font></br><font>Sección: Venta</font></br><font>Raza:' + data[i].raza + '</font></br><font>Género:' + (data[i].genero ? 'Macho' : 'Hembra') + '</font></br><font>Lugar: ' + data[i].nombreEstado + '</font></br></br>');
                cont_datos.append(cont_info);
                var botones = $('<ul class="boton_naranja"><li onclick="obten_id(\'' + data[i].publicacionID + '\')">Contactar al anunciante</li> </ul> </br> <ul class="boton_gris"><li data-pub="' + data[i].publicacionID + '" class="btn_fvt"><img src="images/favorito.png"/>Agregar a Favoritos</li></ul><span id="info_fav"></span>');
                cont_datos.append(botones);
                $('.descripcion_del_anuncio').append(data[i].descripcion);
                var video = $('.youtube_video');
                var direccion = $('<iframe src="' + data[i].link + '"></iframe>');
                video.append(direccion);

                $('.btn_den').data('pub', data[i].publicacionID);
            }

            add_favorite();
            denunciar_pub();
        }
    });
}

function buscar_imagenes(id){
             id_anuncio="id_anuncio="+id;

            $.ajax({
                url: '<?php echo base_url('venta/fotos') ?>',
                data: id_anuncio,
                dataType: 'json',
                type: 'post',
                 success: function(result)
                { 
                    $(".contenedor_galeria").empty().html('<div id="slideshow_publicar_anuncio_previo" class="picse"></div>');

                    var data = result.data;

                    if (result.count < 1) {
                    
                    }
                    for (var i = 0; i < result.count; i++)
                    {
                       
                        $("#slideshow_publicar_anuncio_previo").append('<img src="' + data[i].foto + '" width="294" height="200" style=" top: 0px; left: 0px; display: block; z-index: 5; opacity: 1;"/>');
                        
            }
            contener_images();
    }
    
});

}


function add_favorite() {
    $('.btn_fvt').on('click', function () {

        var pub = $(this).data("pub");

        $.ajax({
            url: '<?php echo base_url('venta/add_favorite')?>',
            data: 'pub=' + pub,
            dataType: 'html',
            type: 'post',
            before: function (data) {
                $('#info_fav').html('loading');
            },
            success: function (data) {
                $('#info_fav').html(data);
            },
            complete: function () {
                setTimeout(function(){
                    $('#info_fav').html('');
                }, 5000);
            }
        });
    });
}

function denunciar_pub() {

    $('.btn_den').on('click', function (){
        var pub = $(this).data("pub");
        $('.info', '#denuncia_form').html('');

        muestra('contenedor_denunciar');
        
        $('#contenedor_denunciar #denuncia_form').submit(function(e){
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: '<?php echo base_url('venta/denunciar')?>',
                data: form.serialize()+'&pub='+pub,
                dataType: 'html',
                type: 'post',
                before: function () {
                    $('.info',form).html('loading');
                },
                success: function (data) {
                    $('.info',form).html(data);
                }
            });
        });
    });
}

$('.mas_anuncio').on('click', function(){

    var id = $(this).data('id');

    buscar_detalles(id);
});

});

</script>
</div>


<div class="slideshow_tres">
    <img src="<?php echo base_url()?>images/banner_inferior/1.png" width="638" height="93"/>
    <img src="<?php echo base_url()?>images/banner_inferior/2.png" width="638" height="93"/>
    <img src="<?php echo base_url()?>images/banner_inferior/3.png" width="638" height="93"/>
</div>

<div class="division_menu_inferior"></div>
<?php $this->load->view('general/footer_view');?>
</body>
</html>
