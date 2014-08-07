<?php

if (!defined('BASEPATH')) {
	die();
}

class Directorio extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('defaultdata_model');
		$this->load->model('admin_model');
		$this->load->model('usuario_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('googlemaps');
		$this->load->library('cart');
		$this->load->helper('date');

		$CI = &get_instance();
		$CI->config->load("mercadopago", TRUE);
		$config = $CI->config->item('mercadopago');
		$this->load->library('Mercadopago', $config);
		$this->mercadopago->sandbox_mode(TRUE);

		$this->load->library('email');

		if (!is_authorized(array(1, 2, 3), 5, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
			$this->session->set_flashdata('error', 'userNotAutorized');
			redirect('principal');
		}
	}

	/**
	 * Se crea la tabla de giros de empresa.
	 */
	public function index() {
		$data['estados']     = $this->defaultdata_model->getEstados();
		$data['paises']      = $this->defaultdata_model->getPaises();
		$data['paquetes']    = $this->defaultdata_model->getPaquetes();
		$data['razas']       = $this->defaultdata_model->getRazas();
		$data['giros']       = $this->defaultdata_model->getGiros();
		$data['seccion']     = 4;
		$data['directorios'] = $this->usuario_model->getDirectorios();

		$this->load->view('directorio_view', $data);
	}

	public function lista() {

		$giro          = $this->input->post('giro') === ''?NULL:intval($this->input->post('giro'));
		$estado        = $this->input->post('estado') === ''?NULL:intval($this->input->post('estado'));
		$palabra_clave = $this->input->post('palabra_clave') === ''?NULL:$this->input->post('palabra_clave');

		echo json_encode($this->usuario_model->getDirectorios($giro, $estado, $palabra_clave));

	}

	public function detalles($id) {

		$data['detalles'] = $this->usuario_model->getDirectorios(null, null, null, intval($id));
		$data['giros']    = $this->usuario_model->getGirosUsuario(intval($id));

		$data['seccion'] = 4;
		$this->load->view('d_directorio_view', $data);

	}

	public function contactar($id) {
		$directorio = $this->usuario_model->getDirectorios(null, null, null, intval($id));

		$config = array(
			'mailtype'  => 'html',
			'priority'  => 2,
			'useragent' => 'qup',
			'wrapchars' => '300',
			'wordwrap'  => true,
			'protocol'  => 'sendmail',
		);

		$this->email->initialize($config);

		$this->email->from($this->session->userdata('correo'), $this->session->userdata('nombre').' '.$this->session->userdata('apellido'));
		$this->email->to($directorio->correo);

		$this->email->subject($this->input->post('asunto_contacto'));

		$msj = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Bienvenido-QuieroUnPerro.com</title>
            <link rel="stylesheet" href="http://quierounperro.com/quiero_un_perro/css/general.css" type="text/css" media="screen" />
        </head>

        <body>
            <table width="647" align="center">
                <tr>
                    <td width="231" rowspan="2">
                        <img src="http://quierounperro.com/quiero_un_perro/images/logo_mail.jpg"/>
                    </td>
                    <td height="48" colspan="6" style="font-family: \'titulos\'; font-size:50px; color:#72A937; margin:0px; padding:0px; margin-bottom:-10px;">
                        QUP Contacto
                    </td>
                </tr>
                <tr>
                    <td colspan="7" >
                        <p>&nbsp;  </p>
                        <font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: '.$directorio->razonSocial.'!! </font>
                    </br>
                </br>

                <font> El usuario '.$this->session->userdata('nombre').' '.$this->session->userdata('apellido').' quiere contactase contigo...</font>
            </br>
        </br>

        <font color="#000066"><strong> Asunto: '.$this->input->post('asunto_contacto').'</strong></font>
        <font color="#000066"><strong>Mensaje: </strong><br/>'.$this->input->post('comentario_contacto').'</font>
        <br/>
        <p> </p>
    </td>
</tr>

<tr bgcolor="#6A2C91" >
    <td colspan="7" >
        <font style=" font-size:14px; padding-left:15px; color:#FFFFFF;">Gracias por tu preferencia </font>
        <br/>
        <font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font>
    </td>
</tr>
</table>
</body>
</html>';

		$this->email->message($msj);

		if (!$this->email->send()) {
			echo "<div class='alert alert-warning'>No se ha logrado envíar el correo al dueño de este directorio. Vuelva a intentarlo o contacte al administrador del sitio.</div>";
		} else {
			echo '<div class="alert alert-success">Se ha enviado correctamente el correo electrónico.</div>';
		}

	}

}
