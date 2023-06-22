<?php

namespace App\Controllers\litigantes;

use App\Controllers\BaseController;
use App\Models\DenunciantesModel;
use App\Models\SesionesDenunciantesModel;

use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;
use MailerSend\Exceptions\MailerSendValidationException;
use MailerSend\Exceptions\MailerSendRateLimitException;
use GuzzleHttp\Client;

class DenunciaLitigantesController extends BaseController
{
	private $db_read;
	private $db;
	private $_denunciantesModel;
	private $_denunciantesModelRead;
	private $_sesionesDenunciantesModel;
	private $_sesionesDenunciantesModelRead;

	
	private $_nacionalidadModelRead;
	private $_estadosCivilesModelRead;
	private $_personaIdiomaModelRead;
	private $_estadosModelRead;
	private $_municipiosModelRead;
	private $_localidadesModelRead;
	private $_coloniasModelRead;
	private $_tipoIdentificacionModelRead;
	private $_paisesModelRead;
	private $_clasificacionLugarModelRead;
	private $_folioModel;
	private $_folioModelRead;
	private $_escolaridadModelRead;

	private $_ocupacionModelRead;
	private $urlApi;


	function __construct()
	{
		$this->db_read = ENVIRONMENT == 'production' ? db_connect('default_read') : db_connect('development_read');

		$this->_denunciantesModel = new DenunciantesModel();
		$this->_sesionesDenunciantesModel = new SesionesDenunciantesModel();
		$this->_sesionesDenunciantesModelRead = model('SesionesDenunciantesModel', true, $this->db_read);
		$this->_denunciantesModelRead = model('DenunciantesModel', true, $this->db_read);

		
		//Models
		$this->_nacionalidadModelRead = model('PersonaNacionalidadModel', true, $this->db_read);
		$this->_estadosCivilesModelRead = model('PersonaEstadoCivilModel', true, $this->db_read);
		$this->_personaIdiomaModelRead = model('PersonaIdiomaModel', true, $this->db_read);
		$this->_estadosModelRead = model('EstadosModel', true, $this->db_read);
		$this->_municipiosModelRead = model('MunicipiosModel', true, $this->db_read);
		$this->_localidadesModelRead = model('LocalidadesModel', true, $this->db_read);
		$this->_coloniasModelRead = model('ColoniasModel', true, $this->db_read);
		$this->_denunciantesModel = new DenunciantesModel();
		$this->_tipoIdentificacionModelRead = model('PersonaTipoIdentificacionModel', true, $this->db_read);
		$this->_paisesModelRead = model('PaisesModel', true, $this->db_read);
		$this->_clasificacionLugarModelRead = model('HechoClasificacionLugarModel', true, $this->db_read);
		$this->_denunciantesModelRead = model('DenunciantesModel', true, $this->db_read);
		$this->_escolaridadModelRead = model('EscolaridadModel', true, $this->db_read);
		$this->_ocupacionModelRead = model('OcupacionModel', true, $this->db_read);
		$this->_folioModelRead = model('FolioModel', true, $this->db_read);
		$this->db = \Config\Database::connect();
	}
	/**
	 * Vista de Login-Denuncia litigantes
	 * Autentica que no tenga sesion iniciada, y si tiene sesion lo redirige al dashboard de denuncia litigantes
	 *
	 */
	public function index()
	{
		if ($this->_isAuth()) {
			return redirect()->to(base_url('/denuncia_litigantes/dashboard'));
		} else {
			session()->destroy;
			$this->_loadView('Login', [], 'index');
		}
	}
	/**
	 * Vista para generar un nuevo solicitante de litigante
	 *
	 */
	public function register()
	{
		$data = (object) array();
		$data->nacionalidades = $this->_nacionalidadModelRead->asObject()->findAll();
		$data->edoCiviles = $this->_estadosCivilesModelRead->asObject()->findAll();
		$data->idiomas = $this->_personaIdiomaModelRead->asObject()->findAll();
		$data->paises = $this->_paisesModelRead->asObject()->findAll();
		$data->estados = $this->_estadosModelRead->asObject()->findAll();
		$data->tiposIdentificaciones = $this->_tipoIdentificacionModelRead->asObject()->where('PERSONATIPOIDENTIFICACIONID',4)->findAll();
		$data->escolaridades = $this->_escolaridadModelRead->asObject()->findAll();
		$data->ocupaciones = $this->_ocupacionModelRead->asObject()->findAll();
		$this->_loadView('Nueva solicitud', $data, 'register');
	}
	
	/**
	 * Función para crear un nuevo litigante
	 * Recibe con metodo POST los datos del formulario
	 *
	 */
	public function create()
	{
		try {
			//Genera contraseña para el usuario
			$password = $this->_generatePassword(6);

			//Lista la foto de identificacion
			$documento = $this->request->getPost('documento_text');
			if ($documento) {
				list($type, $documento) = explode(';', $documento);
				list(, $extension) = explode('/', $type);
				list(, $documento) = explode(',', $documento);
				$documento = base64_decode($documento);
			} else {
				$documento = NULL;
			}
			//Lista la firma que ingresó

			$firma = $this->request->getPost('firma_url');
			if ($firma) {
				list($type, $firma) = explode(';', $firma);
				list(, $extension) = explode('/', $type);
				list(, $firma) = explode(',', $firma);
				$firma = base64_decode($firma);
			} else {
				$firma = NULL;
			}


			$interior = $this->request->getPost('interior');
			if ($interior == '') {
				$interior = NULL;
			}

			//Datos del litigante
			$data = [
				'NOMBRE' => $this->request->getPost('nombre'),
				'APELLIDO_PATERNO' => $this->request->getPost('apellido_paterno'),
				'APELLIDO_MATERNO' => $this->request->getPost('apellido_materno'),
				'CORREO' => $this->request->getPost('correo'),
				'PASSWORD' => hashPassword($password),
				'FECHANACIMIENTO' => $this->request->getPost('fecha_nacimiento'),
				'SEXO' => $this->request->getPost('sexo'),
				'CODIGOPOSTAL' => $this->request->getPost('cp'),
				'PAIS' => $this->request->getPost('pais_select'),
				'ESTADOID' => (int)$this->request->getPost('estado_select'),
				'ESTADOORIGENID' => (int)$this->request->getPost('estado_select_origen'),
				'MUNICIPIOID' => (int)$this->request->getPost('municipio_select'),
				'MUNICIPIOORIGENID' => (int)$this->request->getPost('municipio_select_origen'),
				'LOCALIDADID' => (int)$this->request->getPost('localidad_select'),
				'CALLE' => $this->request->getPost('calle'),
				'NUM_EXT' =>  $this->request->getPost('checkML') == 'on' ?  'M.' . $this->request->getPost('exterior') : $this->request->getPost('exterior'),
				'NUM_INT' =>  $this->request->getPost('checkML') == 'on' && $interior ?  'L.' . $this->request->getPost('interior') : $interior,
				'TELEFONO' => $this->request->getPost('telefono'),
				'TELEFONO2' => $this->request->getPost('telefono2'),
				'CODIGO_PAIS' => $this->request->getPost('codigo_pais'),
				'CODIGO_PAIS2' => $this->request->getPost('codigo_pais_2'),
				'TIPOIDENTIFICACIONID' => $this->request->getPost('identificacion'),
				'NUMEROIDENTIFICACION' => $this->request->getPost('numero_cedula'),
				'ESTADOCIVILID' => $this->request->getPost('e_civil'),
				'OCUPACIONID' => $this->request->getPost('ocupacion'),
				'OCUPACIONDESCR' => $this->request->getPost('ocupacion_descr'),
				'IDENTIDADGENERO' => $this->request->getPost('iden_genero'),
				'DISCAPACIDAD' => $this->request->getPost('discapacidad'),
				'NACIONALIDADID' => (int)$this->request->getPost('nacionalidad'),
				'ESCOLARIDADID' => $this->request->getPost('escolaridad'),
				'FACEBOOK' => $this->request->getPost('facebook'),
				'INSTAGRAM' => $this->request->getPost('instagram'),
				'TWITTER' => $this->request->getPost('twitter'),
				'IDIOMAID' => (int)$this->request->getPost('idioma'),
				'NOTIFICACIONES' => $this->request->getPost('notificaciones_check') == 'on' ? 'S' : 'N',
				'DOCUMENTO' => $documento,
				'FIRMA' => $firma,
				'TIPO' => 3,
			];

			if ((int)$this->request->getPost('colonia_select') == 0) {
				$data['COLONIAID'] = NULL;
				$data['COLONIA'] = $this->request->getPost('colonia');
			} else {
				$data['COLONIAID'] = (int)$this->request->getPost('colonia_select');
				$data['COLONIA'] = NULL;
			}
			if ((int)$this->request->getPost('ocupacion') == 999) {
				$data['OCUPACIONID'] = NULL;
				$data['OCUPACIONDESCR'] = $this->request->getPost('ocupacion_descr');
			} else {
				$data['OCUPACIONID'] = (int)$this->request->getPost('ocupacion');
				$data['OCUPACIONDESCR'] = NULL;
			}

			//Verifica que el correo sea unico
			if ($this->validate(['correo' => 'required|is_unique[DENUNCIANTES.CORREO]'])) {
					//Insercion de datos
					$insertLitigante = $this->_denunciantesModel->insert($data);
					if ($insertLitigante) {
						//Envio de contraseña
					$this->_sendEmailPassword($data['CORREO'], $data['TELEFONO'],$password);
					session()->setFlashdata('message', 'Inicia sesión con tu correo y la contraseña que llegará a tu correo electrónico y/o mensajes SMS.');
					return redirect()->to(base_url('/denuncia_litigantes'))->with('message_success', 'Inicia sesión con la contraseña que llegará a tu correo electrónico y/o mensajes SMS y comienza tu denuncia.');
					}
					
				
			} else {
				// return redirect()->back()->with('message', 'Hubo un error en los datos o puede que ya exista un registro con el mismo correo');
				return redirect()->to(base_url('/denuncia_litigantes/register'))->with('message', 'Hubo un error en los datos o puede que ya exista un registro con el mismo correo.');

			}
		} catch (\Throwable $th) {
			var_dump($th);exit;
			return redirect()->to(base_url('/denuncia_litigantes/register'))->with('message', 'Hubo un error, no fue posible crear tu registro.');
		}
	}
	/**
	 * Función para autenticar el ingreso a la plataforma desde los litigantes
	 * Recibe por metodo POST el correo y contraseña
	 *
	 */
	public function login_auth()
	{
		$session = session();
		$email = $this->request->getPost('correo');
		$password = $this->request->getPost('password');
		$email = trim($email);
		$password = trim($password);
		$data = $this->_denunciantesModelRead->where('CORREO', $email)->first();
		if ($data) {
			// Valida la contraseña ingresada con la de su usuario

			if (validatePassword($password, $data['PASSWORD'])) {
				// Verifica que no tenga sesiones activas

				$control_session = $this->_sesionesDenunciantesModelRead->asObject()->where('ID_DENUNCIANTE', $data['DENUNCIANTEID'])->where('ACTIVO', 1)->first();
				if ($control_session) {
					return redirect()->to(base_url('/denuncia_litigantes'))->with('message_session', 'Ya tienes sesiones activas, cierralas para continuar.')->with('id',  $data['DENUNCIANTEID']);
				}
				$data['logged_in'] = TRUE;
				$data['type'] = 'user_litigantes';
				$data['uuid'] = uniqid();

				//Datos de la sesion
				$session->set($data);
				$agent = $this->request->getUserAgent();

				$sesion_data = [
					'ID' => $data['uuid'],
					'ID_DENUNCIANTE' => $data['DENUNCIANTEID'],
					'IP_DENUNCIANTE' => $this->_get_client_ip(),
					'IP_PUBLICA' => $this->_get_public_ip(),
					'DENUNCIANTE_HTTP' => $agent->getBrowser(),
					'DENUNCIANTE_SO' => $agent->getPlatform(),
					'DENUNCIANTE_MOBILE' => $agent->isMobile() ? 1 : 0,
					'ACTIVO' => 1,
				];

				$this->_sesionesDenunciantesModel->insert($sesion_data);
				return redirect()->to(base_url('/denuncia_litigantes/dashboard'));
			} else {
				$session->setFlashdata('message', 'La contraseña es incorrecta, intentalo de nuevo o da clic en olvide mi contraseña.');
				return redirect()->back();
			}
		} else {
			$session->setFlashdata('message', 'El correo no está registrado, registrate para continuar.');
			return redirect()->back();
		}
	}
	private function _get_client_ip()
	{
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');

		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');

		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');

		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');

		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');

		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		if (strpos($ipaddress, ",") !== false) :
			$ipaddress = strtok($ipaddress, ",");
		endif;
		return $ipaddress;
	}
	/**
	 * Función para devolver la ip publica del cliente que está haciendo la petición HTTP
	 *
	 */
	private function _get_public_ip()
	{
		try {
			$externalContent = file_get_contents('http://checkip.dyndns.com/');
			preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
			$externalIp = $m[1];
		} catch (\Exception $e) {
			$externalIp = '127.0.0.1';
		}
		return $externalIp;
	}
	/**
	 * Funcion para generar contraseña, de acuerdo al tamaño indicado
	 *
	 * @param  mixed $length
	 */
	private function _generatePassword($length)
	{
		$password = "";
		$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
		$max = strlen($pattern) - 1;
		for ($i = 0; $i < $length; $i++) {
			$password .= substr($pattern, mt_rand(0, $max), 1);
		}
		return $password;
	}
/**
	 * Función para enviar un correo con la contraseña generada al litigante
	 *
	 * @param  mixed $to
	 * @param  mixed $password
	 */
	private function _sendEmailPassword($to, $telefono, $password)
	{
		$body = view('email_template/password_email_template.php', ['email' => $to, 'password' => $password]);
		$mailersend = new MailerSend(['api_key' => EMAIL_TOKEN]);
		$recipients = [
			new Recipient($to, 'Your Client'),
		];

		$emailParams = (new EmailParams()) //check envio
			->setFrom('notificacionfgebc@fgebc.gob.mx')
			->setFromName('FGEBC')
			->setRecipients($recipients)
			->setSubject('Te estamos atendiendo')
			->setHtml($body)
			->setText('Usted ha generado un nuevo registro en el Centro de Denuncia Tecnológica. Para acceder debes ingresar los siguientes datos. USUARIO: ' . $to . 'CONTRASEÑA' . $password)
			->setReplyTo('notificacionfgebc@fgebc.gob.mx')
			->setReplyToName('FGEBC');
		$sendSMS = $this->sendSMS("Te estamos atendiendo", $telefono, 'Notificaciones FGEBC/Estimado usuario, tu contraseña es: ' . $password);

		try {
			$result = $mailersend->email->send($emailParams);
		} catch (MailerSendValidationException $e) {
			$result = false;
		} catch (MailerSendRateLimitException $e) {
			$result = false;
		}
		if ($result) {
			return true;
		} else {
			if ($sendSMS == "") {
				return true;
			} else {
				return false;
			}
		}
	}
/**
	 * Función para enviar mensajes SMS
	 *
	 * @param  mixed $tipo
	 * @param  mixed $celular
	 * @param  mixed $mensaje
	 */
	public function sendSMS($tipo, $celular, $mensaje)
	{

		$endpoint = "http://enviosms.ddns.net/API/";
		$data = array();
		$data['UsuarioID'] = 1;
		$data['Nombre'] = $tipo;
		$lstMensajes = array();
		$obj = array("Celular" =>  $celular, "Mensaje" => $mensaje);
		$lstMensajes[] = $obj;
		$data['lstMensajes'] = $lstMensajes;

		$httpClient = new Client([
			'base_uri' => $endpoint
		]);

		$response = $httpClient->post('campañas/enviarSMS', [
			'json' => $data
		]);

		$respuestaServ = $response->getBody()->getContents();

		return json_decode($respuestaServ);
	}
	private function _isAuth()
	{
		if (session('logged_in') && session('type') == 'user_litigantes') {
			return true;
		};
	}
	private function _loadView($title, $data, $view)
	{
		$data = [
			'header_data' => (object)['title' => $title],
			'body_data' => $data
		];
		echo view("denuncia_litigantes/register/$view", $data);
	}
	
}
