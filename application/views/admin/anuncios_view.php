<?php $this->load->view('general/header_view', array('title' => 'Anuncios', 'scripts' => array('/js/funciones_'))); ?>
<body>
<div class="contenedor_anuncio_detalle" id="contenedor_anuncio_detalle" style=" display:none;">
    <div class="contenedor_cerrar_anuncio">
        <img src="/images/cerrar_anuncio.png" onclick="oculta('contenedor_anuncio_detalle');"/>
    </div>
    <div class="validar_anuncio">
        <ul class="boton_azul">
            <li>Aprobar</li>
        </ul>
        <ul class="boton_azul">
            <li>Declinar</li>
        </ul>
    </div>
    <div class="leer_anuncio">
        <div class="contenedor_galeria">
            <div id="slideshow_publicar_anuncio" class="picse">
                <img src="/images/anuncios/02/1.png" width="294" height="200"/>
                <img src="/images/anuncios/02/2.png" width="294" height="200"/>
                <img src="/images/anuncios/02/3.png" width="294" height="200"/>
                <img src="/images/anuncios/02/1.png" width="294" height="200"/>
            </div>
        </div>
        <div class="datos_general">
            <div class="titulo_anuncio_publicado">
                VENDO BONITO PERRO VENDO
            </div>
            <br/>
            <strong>
                Precio: <span class="precio"></span>
            </strong>

            <br/>
            <font> Fecha de publicacion:<span class="f_pub">12-06-2014</span></font>
            <br/>
            <font>Sección: <span class="seccion">Venta</span></font>
            <br/>
            <font>Raza: <span class="raza">Cairn Terrier</span></font>
            <br/>
            <font>Género: <span class="genero">Macho</span></font>
            <br/>
            <font>Lugar: <span class="ubicacion">Queretaro (Queretaro)</span></font>
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
                    <img src="/images/favorito.png"/>Agregar a Favoritos
                </li>
            </ul>
        </div>
        <br/>
        <div class="contenedor_del_detalle">
            <div class="titulo_anuncio_publicado">
                MÁS DETALLES
            </div>
            <div class="descripcion_del_anuncio">
                ksdjfkjslfk fdglksj gkfdsjg jgfkdjgkfd gfdgkdf gfdskj fgsfkjg sdlkf gjkfdsg fdlkgjdfl glfdsjg dflkgj
                dfgj flkgjf gjfd gfdjg fdlg fdlg fjgfd gjdslf gkgj lgjfgk gjfdkg lkgjf gjjkgj s
            </div>
            <br/>
            <ul class="boton_naranja_dos">
                <li id="ver_video" onclick="muestra('video');">
                    Ver video
                </li>
            </ul>
            <div id="video" style="display:none;">
                <br/>
                <div class="titulo_anuncio_publicado">
                    VIDEO
                </div>
                <iframe class="youtube_video" src="http://www.youtube.com/embed/YlmidIPuZ58"></iframe>
            </div>
            <ul class="boton_rojo_dos">
                <li>
                    <img src="/images/alert.png"/>
                    Denunciar Anuncio
                </li>
            </ul>
            <div class="consejos_advertencias">
                - QuierounPerro.com te invita a que antes de comprar pienses en adoptar, ya que hoy en día hay millones
                de perros sin hogar que deben ser sacrificados.
                <br/>
                - Tener un perro conlleva una serie de responsabilidades, cuidados y atenciones que debes considerar
                antes de comprar uno.
                <br/>
                - Infórmate de los cuidados especiales que debes de tener con la raza específica que estás comprando.
                <br/>
                - NUNCA compres una nueva mascota sin verla físicamente antes.
                <br/>
                - NUNCA hagas depósitos o transferencias bancarias a través de medios donde tu dinero no pueda ser
                rastreado, como lo son Money Gram y Western Union.
                <br/>
                - NUNCA pagues por un perro con registro de pedigree AKC si no te muestran los certificados, ya que
                corres el riesgo de que sea una estafa y nunca te los entreguen. Exige ver los papeles y asegúrate de
                que el nombre del criador esté en el certificado.
                <br/>
                - Cuando vayas a ver al vendedor, nunca vayas solo y revisa los alrededores.
                <br/>
                - El vendedor también debe estar interesado en ti y en manos de quién dejará a su perro.
            </div>
        </div>
        <br/>
    </div>
</div>
<?php $this->load->view('general/menu_view'); ?>
<!-- fin wncabezado -->
<div class="contenedor_central">
    <div class="titulo_seccion">
        ANUNCIOS
    </div>
    <form action="#" method="post" id="filtro_anuncios">
        <div class="contenedor_buscador" style="text-align: left;">
            <!--Aqui se realiza la peticion-->
            <input data-label="Aprobación" type="radio" name="validacion_admin"  value="e_aprobacion" id="radio4" class="css-checkbox" checked="checked"/>
            <label for="radio4" class="css-label radGroup2">En espera de aprobación</label>
            &nbsp;&nbsp;
            <input type="radio" data-label="aprobados" name="validacion_admin"  value="aprobados" id="radio5" class="css-checkbox"/>
            <label for="radio5" class="css-label radGroup2">Aprobados</label>
            &nbsp;&nbsp;
            <input type="radio" data-label="rechazados" name="validacion_admin"  value="rechazados" id="radio6" class="css-checkbox"/>
            <label for="radio6" class="css-label radGroup2">Rechazados</label>
            &nbsp;&nbsp;
            <div class="fondo_select_dos">
                <!--            volcado de las zonas-->
                <select name="zonas" class="estilo_select" >
                    <option value=""> Seleccione zona</option>
                    <?php foreach ($zonageografica as $value): ?>
                        <option value="<?php echo $value->zonaID ?>"> <?php echo $value->zona; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="secciones">
            <input type="radio" data-label="venta" name="seccion" value="venta" id="venta" class="css-checkbox" checked="checked"/><label for="venta" class="css-label radGroup2">
                Venta: <font class="color_morado"> <?php echo $count_sale_pets ?> </font></label>
            &nbsp;&nbsp;
            <input type="radio" data-label="cruza" name="seccion" value="cruza" id="cruza" class="css-checkbox"/>
            <label for="cruza" class="css-label radGroup2"> Cruza: <font class="color_morado"> <?php echo $count_cross_pets ?> </font> </label>
            &nbsp;&nbsp;
            <input type="radio" data-label="adopción" name="seccion" value="adopcion" id="adopcion" class="css-checkbox"/><label for="adopcion"
                                                                                                                                 class="css-label radGroup2">
                Adopción: <font class="color_morado"> <?php echo $count_adoption_pets ?> </font></label>
            &nbsp;&nbsp;
            <input type="radio" data-label="perdidos" name="seccion" value="perdidos" id="perdidos" class="css-checkbox"/><label for="perdidos"
                                                                                                                                 class="css-label radGroup2">
                Perdidos:<font class="color_morado"> <?php echo $count_lost_pets ?></font></label>
            &nbsp;&nbsp;
            <input type="radio" data-label="directorio" name="seccion" value="directorio" id="directorio" class="css-checkbox"/><label for="directorio" class="css-label radGroup2">
                Directorio:<font class="color_morado"> <?php echo $count_directory ?> </font></label>
        </div>
    </form>
    <div id="subtitulo" class="subtitulo"></div>
    <br/>
    <table id="lista_anuncios" class="tabla_carrito" width="990">
        <thead>
        <tr>
            <th width="133">
                ID-Anuncio
            </th>
            <th width="139">
                ID-Usuario
            </th>
            <th width="169">
                Fecha creación
            </th>
            <th width="225">
                Paquete
            </th>
            <th width="147">
                Pago
            </th>
            <th width="149">
                Anuncio
            </th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script>
    $(function() {
        function load_data_filter() {
            var form_filter = $("#filtro_anuncios");
            $.ajax({
                url: 'anuncios_lista',
                data: form_filter.serialize(),
                type: 'POST',
                dataType: 'json',
                beforeSend: function() {
                    $('#lista_anuncios tbody').fadeOut().empty().append('<tr><td colspan=6><div class="spinner"></div></td></tr>').fadeIn();
                },
                success: function(response) {
                    //change subtitulo
                    //change table rows
                    var data_validation = $('input[name=validacion_admin]:checked').data('label');
                    var data_seccion = $('input[name=seccion]:checked').data('label');
                    var value_zona = $('select[name=zonas] option:selected').val();
                    var text_zona = $('select[name=zonas] option:selected').text();
                    if (value_zona === '') {
                        text_zona = " - ";
                    }
                    else {
                        text_zona = ' - ' + text_zona + ' - ';
                    }

                    $('#subtitulo').fadeOut().empty().text((data_validation + text_zona + data_seccion).toUpperCase()).fadeIn();
                    var table_data = $('#lista_anuncios tbody');
                    if (response.count > 0) {

                        table_data.slideUp().empty();
                        for (var i = 0; i < response.count; i++) {
                            var row = $('<tr></tr>');

                            row.data('titulo', response.data[i].titulo);
                            row.data('precio', response.data[i].precio);
                            row.data('fechaCreacion', response.data[i].fechaCreacion);
                            row.data('seccionNombre', response.data[i].seccionNombre);
                            row.data('raza', response.data[i].raza);
                            row.data('genero', response.data[i].genero);
                            row.data('descripcion', response.data[i].descripcion);
                            row.data('publicacion_id', response.data[i].publicacionID);
                            //falta lugar

                            row.append('<td>' + ('0000' + response.data[i].publicacionID).slice(-4) + '</td>');
                            row.append('<td>' + ('0000' + response.data[i].idUsuario).slice(-4) + '</td>');
                            row.append('<td>' + response.data[i].fechaCreacion + '</td>');
                            var image_paquete;
                            if (response.data[i].nombrePaquete === "Lite") {
                                image_paquete = '/images/pago_lite.png';
                            }
                            if (response.data[i].nombrePaquete === "Regular") {
                                image_paquete = '/images/pago_regular.png';
                            }
                            if (response.data[i].nombrePaquete === "Premium") {
                                image_paquete = '/images/pago_premium.png';
                            }

                            row.append('<td> <img width="99" heigth="50" src="' + image_paquete + '" alt=' + response.data[i].nombrePaquete + ' /></td>');
                            row.append('<td></td>');
                            row.append('<td><a class="ver_anuncio" href="#">ver anuncio</a></td>');
                            table_data.append(row).slideDown();
                            show_detalles_publicacion();

                        }

                    } else {
                        table_data.slideUp().empty().append('<tr><td colspan="6">No hay resultados</td></tr>').slideDown();
                    }
                },
                error: function() {
                    $('#lista_anuncios tbody').slideUp().empty().append('<tr><td colspan="6">No hay resultados</td></tr>').slideDown();
                }
            });
        }

        $('#filtro_anuncios *[name]').on('change', function() {
            load_data_filter();
        });
        load_data_filter();

        function show_detalles_publicacion() {
            $(".ver_anuncio").on('click', function() {

                var row_data = $(this).parents('tr');

                var anuncio_div = $('#contenedor_anuncio_detalle');
                $('.titulo_anuncio_publicado', anuncio_div).text(row_data.data('titulo'));
                $('.precio', anuncio_div).text(parseFloat(row_data.data('precio')).toFixed(2));
                $('.f_pub', anuncio_div).text(row_data.data('fechaCreacion'));
                $('.seccion', anuncio_div).text(row_data.data('seccionNombre'));
                $('.raza', anuncio_div).text(row_data.data('raza'));
                $('.genero', anuncio_div).text(row_data.data('genero')? "Macho" : "Hembra");
                $('.descripcion_del_anuncio', anuncio_div).text(row_data.data('descripcion'));
                //faltan imagenes y links

                $('#contenedor_anuncio_detalle').css('display', 'block');
            });
        }

    });
</script>
<?php $this->load->view('general/footer_view') ?>