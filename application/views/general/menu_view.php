<?php
$keyUser = $this->session->userdata('tipoUsuario');

if ($keyUser != 0 || is_null($keyUser)):
    ?>
    <div id="mini_menu">
        <input type="hidden" id="efecto" value="corre"/>
        <img src="<?php echo base_url() ?>images/bajar_menu_dos.png" id="bajar_menu" style="float:left; margin-left:10px;"
             onclick="oculta('bajar_menu');
                         muestra('menu_oculto');"/>

        <div id="menu_oculto" class="menu_principal" style=" display:none;">
            <div id="contenedor_menu_principal" class="contenedor_menu_principal">
                <ul class="principal">
                    <li>
                        <a href="<?php echo base_url() ?>"> Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>venta.html"> Venta </a>
                    </li>
                    <li>
                        Cruza
                    </li>
                    <li>
                        Adopción
                    </li>
                    <li>
                        Tienda
                    </li>
                    <li>
                        Directorio
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="encabezado">
        <img src="/images/logo_admin.png" width="258" height="88"/>
        <div class="menu_admin">
            <ul class="el_menu">
                <li>
                    Pantallas
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>"> <img src="/images/ciculo.png"/> Inicio</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Venta</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Cruza</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Directorio</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Prefil de usuario</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Adopción</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Perros Perdidos</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> La raza del mes</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Evento del mes</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Datos curiosos</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Asociaciones Protectoras</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> ¿Quiénes somos?</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Tutorial</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Publicidad</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Preguntas frecuentes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Usuarios
                    <ul>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Altas</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Bajas</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Consultas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Mensajes
                    <ul>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Redactar mensaje</a>
                        </li>
                        <li>
                            <a href="#"> <img src="/images/ciculo.png"/> Enviar mensajes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/principal/anuncios') ?>">Anuncios</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/tiendaAdmin') ?>">Tienda</a>
                </li>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php if (!is_null($keyUser)): ?>
    <div class="close_sesion" style="text-align: right; padding-right: 5px;"><a href="<?php echo base_url('sesion/logout') ?>">cerrar sesi&oacute;n</a></div>
<?php endif; ?>