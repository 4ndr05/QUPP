<?php
$this->load->view('general/general_header_view', array('title' => 'Detalles Directorio',
    'scripts' => array('funciones_venta', 'funciones_'), 'links' => array('venta',
        'directorio', 'directorio_detalle')));
?>
<?php $this->load->view('general/menu_view') ?>
<?= var_dump($detalles); ?>
<div class="contenedor_contactar" id="contenedor_contactar" style="display: none;">
    <div class="contenedor_cerrar_contactar_negocio">
        <img src="<?php echo base_url() ?>images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_contactar');">
    </div>
    <div class="contactar_al_aunuciante_negocio">
        <font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
        <br>
        <br>
        <strong> Nombre del negocio:</strong> Mundo de las mascotas
        <br>
        <strong> Estado: </strong> Hidalgo
        <br>
        <strong> Ciudad: </strong> Actopan
        <br>
        <strong> Teléfono: </strong> 372829102374746
        <br>
        <br>
        <font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
        <br>
        <br>
        <input type="text" class="formu_contacto" id="nombre_contacto" onfocus="clear_textbox('nombre_contacto', 'Nombre');" value="Nombre" size="44">
        <input type="text" class="formu_contacto" id="mail_contacto" onfocus="clear_textbox('mail_contacto', 'Tu-email')" value="Tu-email" size="44">
        <input type="text" class="formu_contacto" id="asunto_contacto" onfocus="clear_textbox('asunto_contacto', 'Asunto')" value="Asunto" size="44">
        <textarea cols="50" onfocus="clear_textbox('comentarios_contacto', 'Comentarios')" id="comentarios_contacto" class="formu_contacto" rows="5">Comentarios</textarea>
        <br>
        <br>
        <ul class="boton_naranja_tres">
            <li>
                Enviar
            </li>
        </ul>


    </div>
</div>

<div class="titulo_seccion">
    DIRECTORIO


    <div class="contenedor_anunciar_negocio" onclick="muestra('contenedor_publicar_anuncio_negocio');">
        <div class="titulo_anunciate">
            ANUNCIATE
        </div>
        <div class="descripcion_anunciar_negocio">
            en nuestro Directorio
        </div>
        <div class="el_click">
            <img src="<?php echo base_url() ?>images/click.png" width="60" height="60">
        </div>
    </div>
</div>

<div id="contenedor_central">
    <div class="contenido_directorio"> 
        <div class="contenedor_logotipo_directorio"> <img src="<?php echo base_url() ?>images/negocio_logo/marab.png"></div>
        <div class="contenedor_nombre_empresa"> <?php echo $detalles->razonSocial ?>
            CANINO VON MARAB</div>
    </div>

    <div style=" margin-left:8px; margin-right:8px;" class="contenido_directorio"> 
        <div class="contenedor_titulo_informcacion"> CONTACTANOS </div>
        <div class="contenedor_informacion">
            <p>Querétaro, Servicio a Domicilio
                Querétaro Querétaro</p>	
            <p class="margin_top_10">Tel: 442 181 42 14</p>
            <p class="margin_top_10">Contacto:  Luis Garay</p>
            <p class="margin_top_10">Pagina Web: von_marab.com</p>
            <ul class="boton_morado"><li onclick="muestra('contenedor_contactar');"> Enviar mail </li> </ul>
        </div>

    </div>

    <div class="contenido_directorio"> 
        <div class="contenedor_titulo_informcacion"> SERVICIOS </div>
        <div class="contenedor_informacion">
            <p> <img src="<?php echo base_url() ?>images/giros_negocio/adistramiento_canino.png" width="36" height="30"> Adiestramiento Canino </p>

            <p style="margin-top:7px;"> <img src="<?php echo base_url() ?>images/giros_negocio/criadero.png" width="36" height="30"> Criadero de Perros </p>
        </div>
    </div>
    <div class="contenedor_descripcion_detalle">
        Somos una empresa con el fin de ofrecerte todos los adiestrmientos que tu mascota necesita en un solo lugar, esto nos hace el único centro integral para tu mascota en la región.
        A través de los años hemos conocido adiestradores, veterinarios e incluso estéticas caninas los cuales les dan un trato pésimo y con violencia a los animales... Nosotros no!...  para nosotros no son solo animales son nuestros amigos que nos acompañan durante algunas etapas de nuestra vida... porque ¿Que es lo que nos diferencia de los animales?.. solo la capacidad de ser humanos, pero a veces los animales son mas humanos que el hombre... ¡NOSOTROS SI CUIDAMOS A TU MEJOR AMIGO!
    </div>
    <div class="contenedor_del_mapa"> el mapa</div>
    <div class="contenedor_horarios">
        <div class="contenedor_titulo_informcacion"> HORARIOS </div>
        <br>
        <div class="contenedor_datos_horario"> 
            <p>Lunes a Vienes :  8:00 am a 5:00 p.m</p>
            <br>
            <p>Sabados: 10:00 a.m a 2:00p.m</p>
        </div>
    </div>

</div>
<br/>
<?php $this->load->view('admin/footer_view'); ?>
