<?php
/**
 * requiere el listado de los giros, estados, planes, 
 */
?>
<style>
    #paso_tres_negocio label{
        display: inline-block;
        width: auto;
        margin-right: 5px;
    }
    #body_form_partial label{
        width: 84px;
    }
    #paso_tres_negocio input, #paso_tres_negocio select{
        margin: 0 15px 0 0!important;
        padding: 0!important;
        width: 140px;
        height: 16px;
    }
    #paso_tres_negocio textarea{
        width: 90%;
    }
</style>
<div id="contenedor_publicar_anuncio_negocio" class="contenedor_publicar_anuncio" style=" display:none;">

    <!-- Inicio contenedor pap publicar anuncio anuncio !-->
    <div id="publicar_anuncio_negocio" class="pubicar_anuncio">

        <div class="numeros_publicar_anuncio">
            <ul class="listado_numeros_anuncio">
                <li data-titulo="Selecciona el giro de tu negocio" data-p="paso_uno_negocio" class="numero_seccion view_step">1</li>
                <li data-titulo="Planes" data-p="paso_dos_negocio" >2</li>
                <li data-titulo="Completa tu información" data-p="paso_tres_negocio">3</li>
                <li data-titulo="Vista previa de tu anuncio" data-p="paso_cuatro_negocio">4</li>
                <li data-titulo="Detalle de compra:" data-p="paso_cinco_negocio">5</li>
            </ul>
        </div>
        <div class="crerar_publicar_anuncio">
            <img src="images/cerrar.png" onclick="oculta('contenedor_publicar_anuncio_negocio');"/>

        </div>
        <br/>
        <form id="form_anuncio_negocio">
            <!-- Inicio Paso UNO -->
            <div id="paso_uno_negocio" class="paso view_step">

                <div class="descipcion_pasos">
                    <div class="titulo_de_pasos"> PUBLICAR EN DIRECTORIO </div>
                    <div class="instrucciones_pasos"> Selecciona el giro de tu negocio</div>
                    <div class="contenido_indicacion">
                        <img src="images/pero_paso_uno.png" class="perrito_uno"/>

                        <div class="contenedor_checkbox">
                            <?php foreach ($giros as $index => $giro): ?>
                                <?php if ($index % 2 !== 0): ?>
                                    <label style="display: inline-block; margin-bottom: 2px;">
                                        <input type="checkbox" name="giro_<?php echo ($index + 1); ?>_form" value="<?php $giro->giroID ?>" id="CheckboxGiro_0" />
                                        <?php echo $giro->nombreGiro; ?>
                                    </label>
                                    <br />
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="contenedor_checkbox">

                            <?php foreach ($giros as $index => $giro): ?>
                                <?php if ($index % 2 === 0): ?>
                                    <label style="display: inline-block; margin-bottom: 2px;">
                                        <input type="checkbox" name="giro_<?php echo ($index + 1); ?>_form" value="<?php $giro->giroID ?>" id="CheckboxGiro_0" />
                                        <?php echo $giro->nombreGiro; ?>
                                    </label>
                                    <br />
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <br/>                        
                        <div>
                            <ul class="morado_directorio">
                                <li class="sig_paso">
                                    Continuar
                                </li>
                            </ul>
                            <br/>
                            <br/>
                            <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- FIN anuncio UNO -->
            
            <!-- Inicio paso DOS -->
            <div id="paso_dos_negocio" class="paso" style="display:none;">
                <div class="descipcion_pasos">
                    <div class="titulo_de_pasos"> PUBLICAR EN DIRECTORIO </div>
                    <div class="instrucciones_pasos"> Planes</div>
                    <div class="contenido_indicacion">
                        <br/>
                        <table class="tabla_pago"  width="500" style=" margin-left:167px;">
                            <tr>
                                <th>
                                    Tiempo de exposición
                                </th>
                                <th> Descuento </th>
                                <th> Precio </th>
                            </tr>
                            <?php foreach ($planes as $plan): ?>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="radio" name="plan_form" value="<?php echo $plan->paqueteID ?>" id="RadioGroup2_0" />
                                            <?php echo intval($plan->vigencia / 30) ?>&nbsp;<?php echo ($plan->vigencia / 30 > 1) ? 'meses' : 'mes' ?></label>
                                    </td>
                                    <td><?php echo $plan->valor ?>% </td>
                                    <td> $<?php echo $plan->precio ?> </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>

                        <br/>
                        <br/>
                        <div>
                            <ul class="morado_directorio">
                                <li class="sig_paso">
                                    Continuar
                                </li>
                            </ul>
                            <br/>
                            <br/>
                            <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- FIN paso dos !-->
            <!-- INICIO paso TRES -->
            <div id="paso_tres_negocio" class="paso" style="display:none;" >
                <div class="descipcion_pasos_largo">
                    <div class="titulo_de_pasos"> PUBLICAR EN DIRECTORIO </div>
                    <div class="instrucciones_pasos"> Completa tu información</div>
                    <div class="sub_instrucciones_pasos"> Datos de contacto </div>
                    <div class="contenido_indicacion_formulario">
                        <p class="margen_15_left" >
                            <label>Nombre:</label><input name="nombre_negocio" type="text" class="background_morado_35" readonly="readonly" /> 
                            <label>Apellido:</label><input name="apellido_negocio" type="text" class="background_morado_35" readonly="readonly" />  
                            <label>Correo electrónico:</label><input name="email_negocio" type="text" class="background_morado" readonly="readonly" /> </p>
                        <br/>
                        <p class="margen_15_left"> 
                            <label>Teléfono:</label><input name="telefono_negocio" type="text" class="background_gris_35"/> 
                            <label>Mostrar teléfono en el anuncio:</label><select name="muestra_telefono_negocio" class="background_gris">
                                <option>--</option>
                                <option> Si </option>
                                <option> No </option>
                            </select>
                            
                        </p>
                        <br/>
                        <div class="sub_instrucciones_pasos"> Horarios atención </div>
                        <br/>
                        <p>
                            
                        </p>
                        <div class="sub_instrucciones_pasos"> Detalles del anuncio </div>
                        <br/>
                        <div id="body_form_partial">
                        <p class="margen_15_left">
                            <label>Estado:</label><select name="estado_negocio" class="background_gris_100">
                                <option value=""> --- </option>
                                <?php foreach ($estados as $edo) : ?>
                                    <option value="<?php echo $edo->estadoID ?>"> <?php echo $edo->nombreEstado ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <label>Municipio:</label><input name="ciudad_negocio" class="background_gris_100"/>
                            <label>Colonia:</label><input name="colonia_negocio" type="text" class="background_gris"/> </p>
                        <br/>

                        <p class="margen_15_left"> 
                            <label>Calle:</label><input name="calle_negocio" type="text" class="background_gris_55"  /> 
                            <label>Número:</label><input name="numero_negocio" type="text" class="background_gris" />
                            <label>Vencimiento:</label><input name="vencimiento_negocio" class="background_morado" type="text"/>
                        </p>
                        <br/>

                        <p class="margen_15_left"> 
                            <label>CP:</label><input name="cp_negocio" type="text" class="background_gris_55"/> 
                        <label>E-mail:</label><input name="email_negocio" type="text" class="background_gris"/>
                        <label>Pagina Web:</label><input name="pagina_web_negocio" class="background_gris" type="text"/>
                        </p>
                        </div>
                        <br/>
                        <p class="margen_15_left">
                            <label>Descripción:</label><textarea name="descripcion_negocio"  class="background_gris" cols="95" rows="3" > </textarea>
                        </p>
                        <br/>
                        <p class="margen_15_left">
                            <label>Ubicación:</label>
                        <div id="mapa_negocio"></div>
                        <input type="hidden" value="" name="latitud_negocio"/>
                        <input type="hidden" value="" name="longitud_negocio"/>
                        </p>

                        <br/>
                        <p class="margen_15_left">
                            <label>Logotipo:</label>
                            <input name="logo_negocio" type="file"/>
                        </p>

                        <div style="width:800px; height:150px;">
                            <p>
                            <h3>Notas</h3>
                            </p>                            
                        </div>

                        <div>
                            <ul class="morado_directorio">
                                <li class="sig_paso">
                                    Continuar
                                </li>
                            </ul>
                            <br/>
                            <br/>
                            <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN paso TRES -->

            <div id="paso_cuatro_negocio" class="paso" style="display:none;" > <!-- inicio del contendor paso 4 -->
                <div class="descipcion_pasos_mediano">
                    <div class="titulo_de_pasos"> PUBLICAR EN DIRECTORIO </div>
                    <div class="instrucciones_pasos"> Vista previa de tu anuncio</div>
                    <div class="contenedor_total_directorio_mini">
                        <div class="contenido_directorio_mini">
                            <div class="contenedor_logotipo_directorio_mini"> <img src="images/negocio_logo/marab.png" width="145" height="145" /></div>
                            <div class="contenedor_nombre_empresa_mini"> CENTRO DE ADIESTRAMIENTO
                                CANINO VON MARAB</div>
                        </div>

                        <div style=" margin-left:8px; margin-right:8px;" class="contenido_directorio_mini">
                            <div class="contenedor_titulo_informcacion_mini"> CONTACTANOS </div>
                            <div class="contenedor_informacion_mini">
                                <p>Querétaro, Servicio a Domicilio
                                    Querétaro Querétaro</p>

                                <p>Tel: 442 181 42 14</p>

                                <p>Contacto:  Luis Garay</p>

                                <p>Pagina Web: von_marab.com</p>
                                <br/>
                                <ul class="boton_morado_mini">
                                    <li> Enviar mail </li>
                                </ul>
                            </div>

                        </div>

                        <div class="contenido_directorio_mini">
                            <div class="contenedor_titulo_informcacion_mini"> SERVICIOS </div>
                            <div class="contenedor_informacion_mini">
                                <p> <img src="images/giros_negocio/adistramiento_canino.png" width="24" height="20"/> Adiestramiento Canino </p>

                                <p style="margin-top:7px;"> <img src="images/giros_negocio/criadero.png" width="24" height="20"/> Criadero de Perros </p>
                            </div>
                        </div>
                        <div class="contenedor_descripcion_detalle_mini">
                            Somos una empresa con el fin de ofrecerte todos los adiestrmientos que tu mascota necesita en un solo lugar, esto nos hace el único centro integral para tu mascota en la región.
                            A través de los años hemos conocido adiestradores, veterinarios e incluso estéticas caninas los cuales les dan un trato pésimo y con violencia a los animales... Nosotros no!...  para nosotros no son solo animales son nuestros amigos que nos acompañan durante algunas etapas de nuestra vida... porque ¿Que es lo que nos diferencia de los animales?.. solo la capacidad de ser humanos, pero a veces los animales son mas humanos que el hombre... ¡NOSOTROS SI CUIDAMOS A TU MEJOR AMIGO!
                        </div>
                        <div class="contenedor_del_mapa_mini"> el mapa</div>
                        <div class="contenedor_horarios_mini">
                            <div class="contenedor_titulo_informcacion_mini"> HORARIOS </div>
                            <br/>
                            <div class="contenedor_datos_horario_mini">
                                <p>Lunes a Vienes :  8:00 am a 5:00 p.m</p>
                                <br/>
                                <p>Sabados: 10:00 a.m a 2:00p.m</p>
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div id="contendedor_morado" class="contenedor_morado">
                        <ul class="morado_15_sinmargen" >
                            <li onclick="">
                                Editar
                            </li>
                        </ul>
                        <ul class="morado_15_sinmargen" >
                            <li class="sig_paso">
                                Continuar
                            </li>
                        </ul>
                        <br/>
                        <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
                    </div>
                </div>
            </div> <!-- final del contendor paso 4 -->
            <!-- Inicio paso 5 -->
            <div id="paso_cinco_negocio" class="paso" style="display:none;">
                <div class="descipcion_pasos_mediano">
                    <div class="titulo_de_pasos"> PUBLICAR EN DIRECTORIO </div>
                    <div class="instrucciones_pasos"> Detalle de compra: </div>
                    <br/>
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
                                Publicación en directorio por 6 meses
                            </td>
                            <td>
                                <p>* Datos de contacto </p>
                                <p>* Envio de correo de contacto</p>
                                <p>* Ubicación google maps</p>
                                <p>* Vigencia 6 meses</p>
                            </td>
                            <td>
                                <p class="totales">$435.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>SUBTOTAL:</p>
                            </td>
                            <td>
                                <p class="totales"> $435.00 </p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                TOTAL
                            </th>
                            <th>
                        <p class="totales" style="color: #FFF;">$435.00</p>
                        </th>
                        </tr>
                    </table>
                    <br/>
                    <div>
                        <ul class="morado_directorio">
                            <li class="sig_paso">
                                Continuar
                            </li>
                        </ul>
                        <br/>
                        <br/>
                        <div id="msj_paso" style="font-size: 10px;display: inline-block; vertical-align: bottom; height: 38px;"></div>
                    </div>                    
                </div>
            </div>
            <!-- Fin  paso 5 -->
        </form>
    </div>
</div>
<script>
    $(function() {
        var form_negocio = $('#form_anuncio_negocio');

        $('.paso', form_negocio).hide();
        $('#paso_uno_negocio', form_negocio).show().addClass('paso_show');

        $('.sig_paso', form_negocio).on('click', function() {
            var sig_paso = $('.paso_show', form_negocio).next('.paso');
            //if (revision_step($('.paso_show'))) {
            $('.paso_show', form_negocio).removeClass('paso_show').hide();
            sig_paso.show().addClass('paso_show');
            $('.listado_numeros_anuncio li.numero_seccion').removeClass('numero_seccion');
            var sel_paso = $('.listado_numeros_anuncio').find('[data-p="' + sig_paso.prop('id') + '"]');
            sel_paso.addClass('numero_seccion view_step');
            $('.instrucciones_pasos', form_negocio).text(sel_paso.data('titulo'));
            $('#msj_paso').text("");
            add_step_move();
            //}
        });

        function add_step_move() {
            $('.listado_numeros_anuncio li.view_step').on('click', function() {
                $('.listado_numeros_anuncio li.numero_seccion').removeClass('numero_seccion');
                $(this).addClass('numero_seccion');
                var paso = $(this).data('p');
                var titulo_paso = $(this).data('titulo');

                $('.instrucciones_pasos').text(titulo_paso);

                $('.paso').removeClass('paso_show').hide();
                $('#msj_paso').text('');
                $('#' + paso, form_negocio).show().addClass('paso_show');
                $('.instrucciones_pasos').text(titulo_paso);
            });
        }

        function revision_step(element) {
            if (element.prop('id') === 'paso_uno_negocio') {
                $('#msj_paso').text("Debe seleccionar una sección");
                return $('input[name=seccion]:checked', form_negocio).val() === undefined ? false : true;
            }

            if (element.prop('id') === 'paso_dos_negocio') {
                $('#msj_paso').text("Debe seleccionar un paquete");
                return $('input[name=paquete]:checked', form_negocio).val() === undefined ? false : true;
            }

            if (element.prop('id') === 'paso_tres_negocio') {
                $('#msj_paso').text("Debe completar todos los campos requeridos");
                var obj = $('#paso_tres_negocio [name]:required', form_negocio).serialize().split('&');

                for (var i = 0; i < obj.length; i++) {
                    var field = obj[i].split('=');
                    if (field[1] === '') {
                        return false;
                    }
                }
                return true;
            }
            return true;
        }

        add_step_move();
    });
</script>