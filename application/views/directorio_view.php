<?php
$this->load->view('general/general_header_view', array('title' => 'Directorio',
    'scripts' => array('funciones_venta', 'funciones_'), 'links' => array('venta',
        'directorio')))
?>
<?php $this->load->view('general/menu_view') ?>

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
            <img src="images/click.png" width="60" height="60"/>
        </div>
    </div>
</div>
<div class="contenedor_buscador">
    <form id="filtro_directorio">
        <div class="fondo_select_directorio" style=" margin-left:5px;">
            <?php if (isset($giros)): ?>
                <select name="giro" class="estilo_select_directorio" id="giro">
                    <option value=""> Selecciona un Giro </option>
                    <?php foreach ($giros as $g): ?>            
                        <option value="<?php echo $g->giroID ?>" style="background-color: #BCBEC0;"><?php echo $g->nombreGiro ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
        </div>

        <div class="fondo_select_directorio">
            <?php if (isset($estados)): ?>
                <select name="estado"  class="estilo_select_directorio" id="estado">
                    <option value="" > Selecciona un Estado </option>
                    <?php foreach ($estados as $edo): ?>
                        <option value="<?php echo $edo->estadoID ?>" ><?php echo $edo->nombreEstado; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
        </div>

        <div class="contenedor_buscar_directorio">
            <input type="text" class="buscar_directorio" name="palabra_clave" size="4" placeholder="Palabras clave" />
            <input type="button" height="40" value="" placeholder="Palabras clave" class="boton_palabras_clave" />
        </div>
    </form>
</div>
<div id="contenedor_central">
    <div id="espacio_izquierda" class="seccion_izquierda_secciones">
        <ul class="iconos">
            <li> <img src="images/compras.png"/></li>
            <li><img src="images/sesion.png"/></li>
            <li>
                <img src="images/registrate.png"/>
            </li>
        </ul>
    </div>


    <div class="contenedor_central" style="margin-bottom:45px;">
        <br/>
        <!-- item container -->
        <ul id="itemContainer_negocio" style="min-height:100px;">
            <!-- Inicio FILA --> 
            <?php $fila = 1; ?>
            <?php $data = $directorios['data'] ?>
            <?php foreach ($data as $directorio): ?>
                <!-- INICIO contenedor anuncio  -->

                <div class="contenedor_negocio" data-object='<?php echo json_encode($directorio) ?>'>
                    <div class="contenedor_imagen_negocio">
                        <img src="images/giros_negocio/adistramiento_canino.png"/>
                    </div>
                    <div class="contenedor_nombre_negocio">
                        <strong>
                            <?php echo $directorio->nombreNegocio; ?>
                        </strong>
                    </div>

                    <div class="contenedor_descripcion_negocio">
                        <?php echo $directorio->nombreGiro ?><br/>
                        <?php echo $directorio->telefono ?>
                    </div>

                    <ul class="ver_mas_negocio">
                        <li onclick="muestra('contenedor_anuncio_negocio');">
                            Ver más...
                        </li>
                    </ul>
                </div>

                <!-- Fin contenedor annuncio -->

                <?php if (3 > $fila++): ?>
                    <!-- Inicio margen falso -->
                    <div class="margen_derecho_20">

                    </div>
                <?php else: ?>
                    <?php $fila = 1; ?>
                <?php endif; ?>

                <!-- FIN margen falso -->
            <?php endforeach; ?>
            <!-- Fin contenedor annuncio -->
            <!-- FIN FILA ---->
        </ul>
        <br/>
        <br/>
        <div style="margin: 0px auto; width:778px; padding:10px; text-align:center; position: relative; margin-top:0px; height:40px;">
            <!-- navigation holder -->
            <div class="holder">  </div>
        </div>
    </div>


    <div class="seccion_derecha_paquetes">
        <ul class="aqui_crear_anuncio">
            <li onclick="muestra('contenedor_publicar_anuncio');">

            </li>
        </ul>
    </div>

</div>



<div id="contenedor_anuncio_negocio" class="contenedor_publicar_anuncio" style=" display:none;">
    <div class="contenedor_cerrar_anuncio_negocio">
        <img src="images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_anuncio_negocio');"/>
    </div>
    <div class="leer_anuncio_directorio">


        <div class="contenedor_galeria">
            <img src="images/negocio_logo/mundo_mascotas.png"/>
        </div>
        <div class="datos_general">

            <div class="titulo_anuncio_publicado">
                EL MUNDO DE LAS MASCOTAS
            </div>
            <br/>
            <strong>
                ACCESORIOS PARA MASCOTAS
            </strong>

            <br/>
            <font> Fecha de publicacion:12-06-2014</font>
            <br/>
            <font>Lugar: Queretaro (Queretaro)</font>
            <br/>
            <font>Municipio: Queretaro (Queretaro)</font>
            <br/>
            <font>Colonia: Queretaro (Queretaro)</font>
            <br/>
            <font>Calle:</font>
            <br/>
            <font>Número:</font>
            <br/>
            <font>Página Web:</font>
            <br/>
            <br/>
            <ul class="boton_naranja">
                <li onclick="muestra('contenedor_contactar');">
                    Contactar al anunciante
                </li>
            </ul>
            <br/>
            <ul class="boton_gris">
                <li>
                    <img src="images/favorito.png"/>Agregar a Favoritos
                </li>
            </ul>

        </div>
        <br/>

        <div class="contenedor_del_detalle">

            <div class="titulo_anuncio_publicado">
                MÁS DETALLES
            </div>

            <div class="descripcion_del_anuncio">

                ksdjfkjslfk fdglksj gkfdsjg  jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
            </div>
            <br/>
            <ul class="boton_naranja_dos">
                <li id="ver_ubicación" onclick="muestra('ubicacion_negocio');">
                    Ver Ubicación
                </li>
            </ul>

            <div id="ubicacion_negocio" style="display:none;">
                <br/>
                <div class="mapa_negocio">
                    MAPA
                </div>
                <br/>
            </div>


            <ul class="boton_rojo_dos">
                <li>
                    <img src="images/alert.png"/>
                    Denunciar Anuncio
                </li>
            </ul>

            <div class="consejos_advertencias">

                - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay millones de perros sin hogar que deben ser sacrificados.
                <br/>
                - Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar antes de comprar uno.
                <br/>
                - Infórmate de los cuidados especiales que debes de tener con la raza específica que estás comprando.
                <br/>
                - NUNCA compres una nueva mascota sin verla físicamente antes.
                <br/>
                - NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser rastreado, como lo son Money Gram y Western Union.
                <br/>
                - NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate de que el nombre del criador esté en el certificado.
                <br/>
                - Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
                <br/>
                - El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
            </div>
            <br/>
        </div>
    </div>
</div>

<div class="contenedor_contactar" id="contenedor_contactar"  style=" display:none;">
    <div class="contenedor_cerrar_contactar_negocio">
        <img src="images/cerrar_anuncio_gris.png" onclick="oculta('contenedor_contactar');"/>
    </div>
    <div class="contactar_al_aunuciante_negocio">
        <font class="titulo_anuncio_publicado"> CONTACTA AL ANUNCIANTE </font>
        <br/>
        <br/>
        <strong> Nombre del negocio:</strong> Mundo de las mascotas
        <br/>
        <strong> Estado: </strong> Hidalgo
        <br/>
        <strong> Ciudad: </strong> Actopan
        <br/>
        <strong> Teléfono: </strong> 372829102374746
        <br/>
        <br/>
        <font class="titulo_anuncio_publicado"> PROPORCIONA TU INFORMACIÓN </font>
        <br/>
        <br/>
        <input type="text" class="formu_contacto" id="nombre_contacto" onfocus="clear_textbox('nombre_contacto', 'Nombre');" value="Nombre" size="44" />
        <input type="text" class="formu_contacto" id="mail_contacto" onfocus="clear_textbox('mail_contacto', 'Tu-email')" value="Tu-email" size="44" />
        <input type="text" class="formu_contacto" id="asunto_contacto" onfocus="clear_textbox('asunto_contacto', 'Asunto')" value="Asunto" size="44" />
        <textarea cols="50" onfocus="clear_textbox('comentarios_contacto', 'Comentarios')" id="comentarios_contacto" class="formu_contacto" rows="5">Comentarios</textarea>
        <br/>
        <br/>
        <ul class="boton_naranja_tres">
            <li>
                Enviar
            </li>
        </ul>


    </div>
</div>
<div class="slideshow_tres" >
    <img src="images/banner_inferior/1.png" width="638" height="93"/>
    <img src="images/banner_inferior/2.png" width="638" height="93"/>
    <img src="images/banner_inferior/3.png" width="638" height="93"/>
</div>
<div class="division_menu_inferior"> </div>
<div class="contenedor_menu_inferior" align="center"> 

    <ul class="menu_inferior">
        <li>
            Acerca de Nosotros
            <ul>
                <li> - ¿Quiénes Somos? 
                </li>
                <li> - La comunidad QUP </li>
            </ul>
        </li>

    </ul>


    <ul class="menu_inferior">
        <li>
            Políticas
            <ul>
                <li> - Aviso de Privacidad </li>
                <li>  - Política de Provacidad </li>
                <li> - Términos y Condiciones </li>
            </ul>
        </li>

    </ul>


    <ul class="menu_inferior">
        <li>
            Contacto
            <ul>
                <li>- Tutorial</li>
                <li>- Publicidad </li>
                <li>- Soporte </li>
                <li>- Preguntas Frecuentes </li>
            </ul>
        </li>

    </ul>
</div>

<?php
$this->load->view('partial/_pasos_anuncio', array('paquetes' => $paquetes,
    'estados' => $estados, 'razas' => $razas));
?>

<?php $this->load->view('partial/_pasos_anuncio_negocio'); ?>

<div class="footer">
    <img src="images/perro_final.png" width="46" height="42"/>
    <a href="#" ><img  src="images/ico_fb.png" width="32" height="32" style="margin-top:10px;"/></a>
    <a href="#" class="margen"><img src="images/ico_tw.png" width="32" height="32" style="margin-top:10px;"/></a>
</div>
<div class="division_final">

</div>
<div class="pie_pagina">
    Copyright © 2014 QuieroUnPerro.com
</div>
<script>
    $(function() {

        /* initiate the plugin */
        $("div.holder").jPages({
            containerID: "itemContainer_negocio",
            perPage: 25,
            startPage: 1,
            startRange: 1,
            midRange: 5,
            endRange: 1
        });

        $("#filtro_directorio select[name]").on('change', function(e) {
            e.preventDefault();
            var form = $("#filtro_directorio");
            search_data(form);
        });
        $("#filtro_directorio [name]").keyup(function() {
            if ($(this).val().length > 2 || $(this).val().length === 0) {
                var form = $("#filtro_directorio");
                search_data(form);
            }
        });

        function search_data(form) {
            $.ajax({
                url: '<?php echo base_url('directorio/lista') ?>',
                data: form.serialize(),
                dataType: 'json',
                type: 'post',
                beforeSend: function() {
                    $("#itemContainer_negocio").empty().html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
                },
                success: function(result)
                {
                    $("#itemContainer_negocio").empty();
                    var data = result.data;
                    var separator = 1;

                    if (result.count < 1) {
                        $("#itemContainer_negocio").append('<div class="alert alert-warning">No hay resultados.</div>');
                    }

                    for (var i = 0; i < result.count; i++)
                    {
                        var cont_neg = $('<div class="contenedor_negocio"></div>');
                        cont_neg.data('object', data[i]);

                        var cont_imagen = $('<div class="contenedor_imagen_negocio"></div>');                        
                        var logo = data[i].logo !== null ? data[i].logo : 'adistramiento_canino.png';
                        cont_imagen.append('<img src="images/giros_negocio/' + logo + '" alt="logo"/>');
                        cont_neg.append(cont_imagen);
                        
                        var cont_nombre = $('<div class="contenedor_nombre_negocio"></div>');
                        cont_nombre.append('<strong>' + data[i].nombreNegocio + '</strong>');
                        cont_neg.append(cont_nombre);
                        var cont_descrip = $('<div class="contenedor_descripcion_negocio"></div>');
                        cont_descrip.append(data[i].nombreGiro + '<br/>' + data[i].telefono);
                        cont_neg.append(cont_descrip);
                        var ver_mas = $('<ul class="ver_mas_negocio"><li onclick="muestra(\'contenedor_anuncio_negocio\')">Ver más...</li></ul>');
                        cont_neg.append(ver_mas);

                        $("#itemContainer_negocio").append(cont_neg);
                        if (3 > separator++)
                        {
                            $("#itemContainer_negocio").append('<div class="margen_derecho_20"></div>');
                        }
                        else {
                            separator = 1;
                        }
                    }

                },
                complete: function() {
                    $("div.holder").jPages({
                        containerID: "itemContainer_negocio",
                        perPage: 25,
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

    });
</script>
<?php $this->load->view('admin/footer_view'); ?>
