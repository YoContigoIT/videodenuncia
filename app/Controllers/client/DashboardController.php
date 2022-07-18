<?php

namespace App\Controllers\client;

use App\Controllers\BaseController;

use App\Models\DenunciantesModel;
use App\Models\EstadosModel;
use App\Models\MunicipiosModel;
use App\Models\LocalidadesModel;
use App\Models\ColoniasModel;
use App\Models\HechoLugarModel;
use App\Models\VehiculoColorModel;
use App\Models\VehiculoTipoModel;
use App\Models\PaisesModel;
use App\Models\DelitosUsuariosModel;
use App\Models\PersonaIdiomaModel;

use App\Models\FolioPreguntasModel;
use App\Models\FolioModel;
use App\Models\FolioPersonaFisicaModel;
use App\Models\FolioPersonaFisicaDomicilioModel;
use App\Models\FolioPersonaFisicaDesaparecidaModel;
use App\Models\FolioVehiculoModel;

use App\Models\EscolaridadModel;
use App\Models\OcupacionModel;

class DashboardController extends BaseController
{
	function __construct()
	{
		//Models
		$this->_paisesModel = new PaisesModel();
		$this->_estadosModel = new EstadosModel();
		$this->_municipiosModel = new MunicipiosModel();
		$this->_localidadesModel = new LocalidadesModel();
		$this->_coloniasModel = new ColoniasModel();
		$this->_hechoLugarModel = new HechoLugarModel();
		$this->_coloresVehiculoModel = new VehiculoColorModel();
		$this->_tipoVehiculoModel = new VehiculoTipoModel();
		$this->_delitosUsuariosModel = new DelitosUsuariosModel();
		$this->_denunciantesModel = new DenunciantesModel();
		$this->_personaIdiomaModel = new PersonaIdiomaModel();

		$this->_folioModel = new FolioModel();
		$this->_folioPreguntasModel = new FolioPreguntasModel();
		$this->_folioPersonaFisicaModel = new FolioPersonaFisicaModel();
		$this->_folioPersonaFisicaDomicilioModel = new FolioPersonaFisicaDomicilioModel();
		$this->_folioPersonaFisicaDesaparecidaModel = new FolioPersonaFisicaDesaparecidaModel();
		$this->_folioVehiculoModel = new FolioVehiculoModel();

		$this->_escolaridadModel = new EscolaridadModel();
		$this->_ocupacionModel = new OcupacionModel();
	}

	public function index()
	{
		$data = (object)array();
		$data->paises = $this->_paisesModel->asObject()->findAll();
		$data->estados = $this->_estadosModel->asObject()->findAll();
		$data->municipios = $this->_municipiosModel->asObject()->where('ESTADOID', '2')->findAll();
		// $data->localidades = $this->_localidadesModel->asObject()->findAll();
		// $data->colonias = $this->_coloniasModel->asObject()->findAll();
		$data->lugares = $this->_hechoLugarModel->asObject()->findAll();
		$data->colorVehiculo = $this->_coloresVehiculoModel->asObject()->findAll();
		$data->tipoVehiculo = $this->_tipoVehiculoModel->asObject()->orderBy('VEHICULOTIPODESCR', 'ASC')->findAll();
		$data->delitosUsuarios = $this->_delitosUsuariosModel->asObject()->orderBy('DELITO', 'ASC')->findAll();
		$data->escolaridades = $this->_escolaridadModel->asObject()->findAll();
		$data->ocupaciones = $this->_ocupacionModel->asObject()->findAll();
		$this->_loadView('Dashboard', 'dashboard', '', $data, 'index');
	}

	public function video_denuncia()
	{
		$data = (object)[
			'folio' => $this->request->getGet('folio'),
			'year' => $this->request->getGet('year'),
			'delito' => $this->request->getGet('delito'),
			'descripcion' => $this->request->getGet('descripcion'),
			'idioma' => $this->request->getGet('idioma'),
			'edad' => $this->request->getGet('edad'),
			'perfil' => $this->request->getGet('perfil'),
			'sexo' => $this->request->getGet('sexo'),
			'prioridad' => $this->request->getGet('prioridad'),
			'sexo_denunciante' => $this->request->getGet('sexo_denunciante') == 'F' ? 'FEMENINO' : 'MASCULINO',
		];

		$array = explode("-", $data->folio);

		$folio = $this->_folioModel->where('ANO', $data->year)->where('FOLIOID', $array[1])->where('STATUS', 'ABIERTO')->first();

		if ($folio) {
			$this->_loadView('Video denuncia', 'video-denuncia', '', $data, 'video_denuncia');
		} else {
			return redirect()->to(base_url('denuncia/dashboard'));
		}
	}

	public function denuncias()
	{
		$session = session();
		$data = (object)array();
		$data->folios = $this->_folioModel->asObject()->where('DENUNCIANTEID', $session->get('DENUNCIANTEID'))->findAll();
		$this->_loadView('Mis denuncias', 'denuncias', '', $data, 'lista_denuncias');
	}

	public function create()
	{
		$session = session();
		$year = date('Y');

		$FOLIOID = $this->_folioId($year);

		$dataFolio = [
			'DENUNCIANTEID' => $session->get('DENUNCIANTEID'),
			'HECHOFECHA' => $this->request->getPost('fecha'),
			'HECHOHORA' => $this->request->getPost('hora'),
			'HECHOLUGARID' => $this->request->getPost('lugar'),
			'HECHOESTADOID' => 2,
			'HECHOMUNICIPIOID' => $this->request->getPost('municipio'),
			'HECHOCOLONIAID' => $this->request->getPost('colonia_select'),
			'HECHOCOLONIADESCR' => $this->request->getPost('colonia'),
			'HECHOCALLE' => $this->request->getPost('calle'),
			'HECHONUMEROCASA' => $this->request->getPost('exterior'),
			'HECHONUMEROCASAINT' => $this->request->getPost('interior'),
			'HECHONARRACION' => $this->request->getPost('descripcion_breve'),
			'HECHODELITO' => $this->request->getPost('delito')
		];

		$this->_folioUpdate($FOLIOID, $dataFolio);

		$dataPreguntas = array(
			'ES_MENOR' => $this->request->getPost('es_menor'),
			'ES_TERCERA_EDAD' => $this->request->getPost('es_tercera_edad'),
			'ES_OFENDIDO' => $this->request->getPost('es_ofendido'),
			'TIENE_DISCAPACIDAD' => $this->request->getPost('tiene_discapacidad'),
			'FUE_CON_ARMA' => $this->request->getPost('fue_con_arma'),
			'LESIONES' => $this->request->getPost('lesiones'),
			'LESIONES_VISIBLES' => $this->request->getPost('lesiones_visibles'),
			'ES_GRUPO_VULNERABLE' => $this->request->getPost('es_vulnerable'),
			'ES_GRUPO_VULNERABLE_DESCR' => $this->request->getPost('vulnerable_descripcion'),
			'ESTA_DESAPARECIDO' => $this->request->getPost('esta_desaparecido'),
		);
		$this->_folioPreguntasIniciales($dataPreguntas, $FOLIOID, $year);

		//DATOS DESAPARECIDO
		if ($this->request->getPost('esta_desaparecido')  == "SI") {

			$foto_des = $this->request->getFile('foto_des');
			$foto_data = $foto_des->getSize() > 0 ? $foto_des->getMimeType() . ';base64,' . base64_encode(file_get_contents($foto_des)) : NULL;

			$dataDesaparecido = array(
				'NOMBRE' => $this->request->getPost('nombre_des'),
				'PRIMERAPELLIDO' => $this->request->getPost('apellido_paterno_des'),
				'SEGUNDOAPELLIDO' => $this->request->getPost('apellido_materno_des'),
				'PAIS' => $this->request->getPost('pais_des'),
				'ESTADOORIGENID' => $this->request->getPost('estado_des'),
				'MUNICIPIOORIGENID' => $this->request->getPost('municipio_des'),
				'ESTATURA' => $this->request->getPost('estatura_des'),
				'FECHANACIMIENTO' => $this->request->getPost('fecha_nacimiento_des'),
				'EDADCANTIDAD' => $this->request->getPost('edad_des'),
				'PESO' => $this->request->getPost('peso_des'),
				'COMPLEXION' => $this->request->getPost('complexion_des'),
				'COLOR_TEZ' => $this->request->getPost('color_des'),
				'SEXO' => $this->request->getPost('sexo_des'),
				'SENAS' => $this->request->getPost('señas_des'),
				'IDENTIDAD' => $this->request->getPost('identidad_des'),
				'COLOR_CABELLO' => $this->request->getPost('color_cabello_des'),
				'TAM_CABELLO' => $this->request->getPost('tam_cabello_des'),
				'FORMA_CABELLO' => $this->request->getPost('form_cabello_des'),
				'COLOR_OJOS' => $this->request->getPost('color_ojos_des'),
				'FRENTE' => $this->request->getPost('frente_des'),
				'CEJA' => $this->request->getPost('ceja_des'),
				'DISCAPACIDAD' => $this->request->getPost('discapacidad_des'),
				'ORIGEN' => $this->request->getPost('origen_des'),
				'DIA_DESAPARICION' => $this->request->getPost('dia_des'),
				'LUGAR_DESAPARICION' => $this->request->getPost('lugar_des'),
				'VESTIMENTA' => $this->request->getPost('vestimenta_des'),
				'PARENTESCO' => $this->request->getPost('parentesco_des'),
				'FACEBOOK' => $this->request->getPost('facebook_des'),
				'INSTAGRAM' => $this->request->getPost('instagram_des'),
				'TWITTER' => $this->request->getPost('twitter_des'),
				'FOTOGRAFIA' => $foto_data,
				'AUTORIZA_FOTO' => $this->request->getPost('autorization_photo_des') == 'on' ? 'S' : 'N',
				'DESAPARECIDA' => 'S',
			);

			$dataDesaparecidoDomicilio = array(
				'PAIS' => $this->request->getPost('pais_des'),
				'ESTADOID' => $this->request->getPost('estado_des'),
				'MUNICIPIOID' => $this->request->getPost('municipio_des'),
				'COLONIAID' => $this->request->getPost('colonia_des_select'),
				'COLONIADESCR' => $this->request->getPost('colonia_des'),
				'CALLE' => $this->request->getPost('calle_des'),
				'NUMEROCASA' => $this->request->getPost('numero_ext_des'),
				'NUMEROINTERIOR' => $this->request->getPost('numero_int_des'),
				'CP' => $this->request->getPost('cp_des'),
			);

			$desaparecido = $this->_folioPersonaFisica($dataDesaparecido, $FOLIOID, 1, $year);
			$this->_folioPersonaFisicaDesaparecida($dataDesaparecido, $FOLIOID, $desaparecido, $year);
			$this->_folioPersonaFisicaDomicilio($dataDesaparecidoDomicilio, $FOLIOID, $desaparecido, $year);
		}

		//DATOS DEL MENOR DE EDAD
		if ($this->request->getPost('es_menor') === "SI" && $this->request->getPost('esta_desaparecido') === "NO") {

			$dataMenor = array(
				'NOMBRE' => $this->request->getPost('nombre_menor'),
				'PRIMERAPELLIDO' => $this->request->getPost('apellido_paterno_menor'),
				'SEGUNDOAPELLIDO' => $this->request->getPost('apellido_materno_menor'),
				'FECHA_NACIMIENTO' => $this->request->getPost('fecha_nacimiento_menor'),
				'EDADCANTIDAD' => $this->request->getPost('edad_menor'),
				'SEXO' => $this->request->getPost('sexo_menor'),
				'FACEBOOK' => $this->request->getPost('facebook_menor'),
				'INSTAGRAM' => $this->request->getPost('instagram_menor'),
				'TWITTER' => $this->request->getPost('twitter_menor'),
				'PAIS' => $this->request->getPost('pais_menor'),
			);

			$dataMenorDomicilio = array(
				'PAIS' => $this->request->getPost('pais_menor'),
				'ESTADOID' => $this->request->getPost('estado_menor'),
				'MUNICIPIOID' => $this->request->getPost('municipio_menor'),
				'COLONIAID' => $this->request->getPost('colonia_menor_select'),
				'COLONIADESCR' => $this->request->getPost('colonia_menor'),
				'CALLE' => $this->request->getPost('calle_menor'),
				'NUMEROCASA' => $this->request->getPost('numero_ext_menor'),
				'NUMEROINTERIOR' => $this->request->getPost('numero_int_menor'),
				'CP' => $this->request->getPost('cp_menor'),
			);

			$menor = $this->_folioPersonaFisica($dataMenor, $FOLIOID, 1, $year);
			$this->_folioPersonaFisicaDomicilio($dataMenorDomicilio, $FOLIOID, $menor, $year);
		}

		if ($this->request->getPost('es_menor') === "NO" && $this->request->getPost('es_ofendido') === "NO") {
			$dataOfendido = array(
				'NOMBRE' => 'QRO',
			);

			$ofendidoId = $this->_folioPersonaFisica($dataOfendido, $FOLIOID, 1, $year);
		}

		//DATOS DEL DENUNCIANTE
		$denunciante = $this->_denunciantesModel->asObject()->where('DENUNCIANTEID', $session->get('DENUNCIANTEID'))->first();

		$fecha = (object)[
			'day' => date('d', strtotime($denunciante->FECHANACIMIENTO)),
			'month' => date('m', strtotime($denunciante->FECHANACIMIENTO)),
			'year' => date('Y', strtotime($denunciante->FECHANACIMIENTO)),
		];

		$hoy = (object)[
			'day' => date('d'),
			'month' => date('m'),
			'year' => date('Y'),
		];

		$edad = $hoy->year - $fecha->year;
		$m = $hoy->month - $fecha->month;

		if ($m < 0) {
			$edad--;
		} else if ($m == 0) {
			if ($hoy->day < (int)$fecha->day) {
				$edad--;
			}
		}

		$dataDenunciante = array(
			'NOMBRE' => $denunciante->NOMBRE,
			'PRIMERAPELLIDO' => $denunciante->APELLIDO_PATERNO,
			'SEGUNDOAPELLIDO' => $denunciante->APELLIDO_MATERNO,
			'FECHANACIMIENTO' => $denunciante->FECHANACIMIENTO,
			'EDADCANTIDAD' => $edad,
			'SEXO' => $denunciante->SEXO,
			'TELEFONO' => $denunciante->TELEFONO,
			'TELEFONO2' => $denunciante->TELEFONO2,
			'CODIGOPAISTEL' => $denunciante->CODIGO_PAIS,
			'CODIGOPAISTEL2' => $denunciante->CODIGO_PAIS2,
			'CORREO' => $denunciante->CORREO,
			'TIPOIDENTIFICACIONID' => $denunciante->TIPOIDENTIFICACIONID,
			'NUMEROIDENTIFICACION' => $denunciante->NUMEROIDENTIFICACION,
			'NACIONALIDADID' => $denunciante->NACIONALIDADID,
			'PERSONAIDIOMAID' => $denunciante->IDIOMAID,
			'ESCOLARIDADID' => $denunciante->ESCOLARIDADID,
			'OCUPACIONID' => $denunciante->OCUPACIONID,
			'ESTADOCIVILID' => $denunciante->ESTADOCIVILID,
			'ESTADOORIGENID' => $denunciante->ESTADOID,
			'MUNICIPIOORIGENID' => $denunciante->MUNICIPIOID,
			'FOTO' => $denunciante->DOCUMENTO,
			'DENUNCIANTE' => 'S',
			'FACEBOOK' => $denunciante->FACEBOOK,
			'PAIS' => $denunciante->PAIS,
			'INSTAGRAM' => $denunciante->INSTAGRAM,
			'TWITTER' => $denunciante->TWITTER,
			'LEER' => $denunciante->LEER,
			'ESCRIBIR' => $denunciante->ESCRIBIR,
		);

		$dataDenuncianteDomicilio = array(
			'PAIS' => $denunciante->PAIS,
			'ESTADOID' => $denunciante->ESTADOID,
			'MUNICIPIOID' => $denunciante->MUNICIPIOID,
			'LOCALIDADID' => $denunciante->LOCALIDADID,
			'COLONIAID' => $denunciante->COLONIAID,
			'COLONIADESCR' => $denunciante->COLONIA,
			'CALLE' => $denunciante->CALLE,
			'NUMEROCASA' => $denunciante->NUM_EXT,
			'NUMEROINTERIOR' => $denunciante->NUM_INT,
			'CP' => $denunciante->CODIGOPOSTAL,
		);

		$denuncianteCalidad = $this->request->getPost('es_menor') == "SI" || $this->request->getPost('esta_desaparecido') == "SI" || $this->request->getPost('es_ofendido') === "NO" ? 3 : 1;
		$denuncinateIdPersona = $this->_folioPersonaFisica($dataDenunciante, $FOLIOID, $denuncianteCalidad, $year);
		$this->_folioPersonaFisicaDomicilio($dataDenuncianteDomicilio, $FOLIOID, $denuncinateIdPersona, $year);

		//DATOS DEL POSIBLE RESPONSABLE
		if (!empty($this->request->getPost('responsable')) && $this->request->getPost('responsable') == 'SI') {
			$dataImputado = array(
				'NOMBRE' => $this->request->getPost('nombre_imputado'),
				'PRIMERAPELLIDO' => $this->request->getPost('primer_apellido_imputado'),
				'SEGUNDOAPELLIDO' => $this->request->getPost('segundo_apellido_imputado'),
				'APODO' => $this->request->getPost('alias_imputado'),
				'MUNICIPIOORIGENID' => $this->request->getPost('municipio_imputado'),
				'TELEFONO' => $this->request->getPost('tel_imputado'),
				'FECHA_NACIMIENTO' => $this->request->getPost('fecha_nac_imputado'),
				'SEXO' => $this->request->getPost('sexo_imputado'),
				'ESCOLARIDADID' => $this->request->getPost('escolaridad_imputado'),
				'DESCRIPCION_FISICA' => $this->request->getPost('description_fisica_imputado'),
				'FACEBOOK' => $this->request->getPost('facebook_imputado'),
				'INSTAGRAM' => $this->request->getPost('instagram_imputado'),
				'TWITTER' => $this->request->getPost('twitter_imputado'),
			);

			$dataImputadoDomicilio = array(
				'CALLE' => $this->request->getPost('calle_imputado'),
				'NO_EXT' => $this->request->getPost('numero_ext_imputado'),
				'NO_INT' => $this->request->getPost('numero_int_imputado'),
			);

			$imputadoId = $this->_folioPersonaFisica($dataImputado, $FOLIOID, 2, $year);
			$this->_folioPersonaFisicaDomicilio($dataImputadoDomicilio, $FOLIOID, $imputadoId, $year);
		} else {
			$dataImputado = array(
				'NOMBRE' => 'QRR',
			);

			$imputadoId = $this->_folioPersonaFisica($dataImputado, $FOLIOID, 2, $year);
		}

		if ($this->request->getPost('delito') == "ROBO DE VEHÍCULO") {
			$img_file = $this->request->getFile('foto_vehiculo');
			$imgData = $img_file->getSize() > 0 ? 'data:' . $img_file->getMimeType() . ';base64,' . base64_encode(file_get_contents($img_file)) : NULL;
			$document_file = $this->request->getFile('documento_vehiculo');
			$docData = $document_file->getSize() > 0 ? 'data:' . $document_file->getMimeType() . ';base64,' . base64_encode(file_get_contents($document_file)) : NULL;

			$dataVehiculo = array(
				'TIPOID' => $this->request->getPost('tipo_vehiculo'),
				'PRIMERCOLORID' => $this->request->getPost('color_vehiculo'),
				'SENASPARTICULARES' => $this->request->getPost('description_vehiculo'),
				'FOTO' => $imgData,
				'DOCUMENTO' => $docData
			);

			$this->_folioVehiculo($dataVehiculo, $FOLIOID, $year);
		}

		$denunciante = $this->_denunciantesModel->asObject()->where('DENUNCIANTEID', $session->get('DENUNCIANTEID'))->first();
		$idioma = $this->_personaIdiomaModel->asObject()->where('PERSONAIDIOMAID', $denunciante->IDIOMAID)->first();
		$delito = $this->_delitosUsuariosModel->asObject()->where('DELITO', $this->request->getPost('delito'))->first();
		$prioridad = 1;

		if ($this->request->getPost('es_menor') == 'SI' || $this->request->getPost('es_tercera_edad') == 'SI' || $this->request->getPost('tiene_discapacidad') == 'SI' || $this->request->getPost('fue_con_arma') == 'SI' || $this->request->getPost('esta_desaparecido') == 'SI') {
			$prioridad = 3;
		} else {
			$prioridad = $delito->IMPORTANCIA;
		}

		$data = (object)[
			'delito' => $this->request->getPost('delito'),
			'descripcion' => $this->request->getPost('descripcion_breve'),
			'idioma' => $idioma->PERSONAIDIOMADESCR ? $idioma->PERSONAIDIOMADESCR : 'DESCONOCIDO',
			'edad' => $denunciante->SEXO,
			'perfil' => $this->request->getPost('delito') == 'VIOLENCIA FAMILIAR' ? 1 : 0,
			'sexo' => $this->request->getPost('delito') == 'VIOLENCIA FAMILIAR' ? 2 : 0,
		];
		$sexo_denunciante = $denunciante->SEXO == 'F' ? 'FEMENINO' : 'MASCULINO';
		$url = "/denuncia/dashboard/video-denuncia?folio=" . $year . '-' . $FOLIOID . "&year=" . $year . "&delito=" . $data->delito . "&descripcion=" . $data->descripcion . "&idioma=" . $data->idioma . "&edad=" . $data->edad . "&perfil=" . $data->perfil . "&sexo=" . $data->sexo . "&prioridad=" . $prioridad . "&sexo_denunciante=" . $sexo_denunciante;

		if ($this->_sendEmailFolio($session->get('CORREO'), $FOLIOID)) {
			return redirect()->to(base_url($url));
		} else {
			return redirect()->to(base_url($url));
		}
	}

	private function _folioUpdate($id, $data)
	{
		$this->_folioModel->set($data)->where('FOLIOID', $id)->update();
	}

	private function _folioId($year)
	{
		$folio = $this->_folioModel->asObject()->where('ANO', $year)->orderBy('FOLIOID', 'desc')->first();
		if ($folio) {
			$data = [
				'ANO' => (int)$year,
				'FOLIOID' => (int)$folio->FOLIOID + 1
			];
			$this->_folioModel->insert($data);
			return $data['FOLIOID'];
		} else {
			$data = [
				'ANO' => (int)$year,
				'FOLIOID' => 1
			];
			$this->_folioModel->insert($data);
			return $data['FOLIOID'];
		}
	}

	private function _folioPreguntasIniciales($data, $folio, $year)
	{
		$data = (object)$data;
		$datos = [
			'FOLIOID' => $folio,
			'ANO' => $year,
			'ES_MENOR' => $data->ES_MENOR,
			'ES_TERCERA_EDAD' => $data->ES_TERCERA_EDAD,
			'ES_OFENDIDO' => $data->ES_OFENDIDO,
			'TIENE_DISCAPACIDAD' => $data->TIENE_DISCAPACIDAD,
			'FUE_CON_ARMA' => $data->FUE_CON_ARMA,
			'LESIONES' => $data->LESIONES,
			'LESIONES_VISIBLES' => $data->LESIONES_VISIBLES,
			'ES_GRUPO_VULNERABLE' => $data->ES_GRUPO_VULNERABLE,
			'ES_GRUPO_VULNERABLE_DESCR' => $data->ES_GRUPO_VULNERABLE_DESCR,
			'ESTA_DESAPARECIDO' => $data->ESTA_DESAPARECIDO,
		];
		$this->_folioPreguntasModel->insert($datos);
	}

	private function _folioPersonaFisica($data, $folio, $calidadJuridica, $year)
	{
		$data = $data;
		$data['FOLIOID'] = $folio;
		$data['ANO'] = $year;
		$data['CALIDADJURIDICAID'] = $calidadJuridica;

		$personaFisica = $this->_folioPersonaFisicaModel->asObject()->where('FOLIOID', $folio)->orderBy('PERSONAFISICAID', 'desc')->first();

		if ($personaFisica) {
			$data['PERSONAFISICAID'] = ((int)$personaFisica->PERSONAFISICAID) + 1;
			$personaFisica = $this->_folioPersonaFisicaModel->insert($data);
			return $data['PERSONAFISICAID'];
		} else {
			$data['PERSONAFISICAID'] = 1;
			$personaFisica = $this->_folioPersonaFisicaModel->insert($data);
			return $data['PERSONAFISICAID'];
		}
	}

	private function _folioPersonaFisicaDomicilio($data, $folio, $personaFisicaID, $year)
	{
		$data = $data;
		$data['FOLIOID'] = $folio;
		$data['ANO'] = $year;
		$data['PERSONAFISICAID'] = $personaFisicaID;

		$personaDomicilio = $this->_folioPersonaFisicaDomicilioModel->asObject()->where('FOLIOID', $folio)->where('PERSONAFISICAID', $personaFisicaID)->orderBy('DOMICILIOID', 'desc')->first();

		if ($personaDomicilio) {
			$data['DOMICILIOID'] = ((int)$personaDomicilio->DOMICILIOID) + 1;
			$this->_folioPersonaFisicaDomicilioModel->insert($data);
			return $data['DOMICILIOID'];
		} else {
			$data['DOMICILIOID'] = 1;
			$this->_folioPersonaFisicaDomicilioModel->insert($data);
			return $data['DOMICILIOID'];
		}
	}

	private function _folioPersonaFisicaDesaparecida($data, $folio, $personaFisicaID, $year)
	{
		$data = $data;
		$data['FOLIOID'] = $folio;
		$data['ANO'] = $year;
		$data['PERSONAFISICAID'] = $personaFisicaID;

		$this->_folioPersonaFisicaDesaparecidaModel->insert($data);
	}

	private function _folioVehiculo($data, $folio, $year)
	{
		$data = $data;
		$data['FOLIOID'] = $folio;
		$data['ANO'] = $year;

		$vehiculo = $this->_folioVehiculoModel->asObject()->where('FOLIOID', $folio)->orderBy('VEHICULOID', 'desc')->first();

		if ($vehiculo) {
			$data['VEHICULOID'] = ((int)$vehiculo->VEHICULOID) + 1;
			$this->_folioVehiculoModel->insert($data);
		} else {
			$data['VEHICULOID'] = 1;
			$this->_folioVehiculoModel->insert($data);
		}
	}

	private function _sendEmailFolio($to, $folio)
	{
		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setSubject('Nuevo folio generado.');
		$body = view('email_template/folio_email_template.php', ['folio' => $folio]);
		$email->setMessage($body);

		if ($email->send()) {
			return true;
		} else {
			return false;
		}
	}

	private function _loadView($title, $menu, $submenu, $data, $view)
	{
		$data2 = [
			'header_data' => (object)['title' => $title, 'menu' => $menu, 'submenu' => $submenu],
			'body_data' => $data
		];

		echo view("client/dashboard/$view", $data2);
	}

	public function getLinkVideodenuncia()
	{
		$folioId = $this->request->getPost('folio');
		$denuncianteId = $this->request->getPost('id');
		$year = $this->request->getPost('year');
		$folio = $this->_folioModel->asObject()->where('FOLIOID', $folioId,)->first();

		if ($folioId && $folio && $denuncianteId && $year) {

			$preguntas = $this->_folioPreguntasModel->asObject()->where('FOLIOID', $folioId)->first();
			$denunciante = $this->_denunciantesModel->asObject()->where('DENUNCIANTEID', $denuncianteId)->first();
			$idioma = $this->_personaIdiomaModel->asObject()->where('PERSONAIDIOMAID', $denunciante->IDIOMAID)->first();
			$delito = $this->_delitosUsuariosModel->asObject()->where('DELITO', $folio->HECHODELITO)->first();
			$fecha = (object)[
				'day' => date('d', strtotime($denunciante->FECHANACIMIENTO)),
				'month' => date('m', strtotime($denunciante->FECHANACIMIENTO)),
				'year' => date('Y', strtotime($denunciante->FECHANACIMIENTO)),
			];
			$hoy = (object)[
				'day' => date('d'),
				'month' => date('m'),
				'year' => date('Y'),
			];
			$edad = $hoy->year - $fecha->year;
			$m = $hoy->month - $fecha->month;
			if ($m < 0) {
				$edad--;
			} else if ($m == 0) {
				if ($hoy->day < (int)$fecha->day) {
					$edad--;
				}
			}
			$sexoDenunciante = $denunciante->SEXO;
			$prioridad = 1;

			if ($preguntas->ES_MENOR == 'SI' || $preguntas->ES_TERCERA_EDAD == 'SI' || $preguntas->TIENE_DISCAPACIDAD == 'SI' || $preguntas->FUE_CON_ARMA == 'SI' || $preguntas->ESTA_DESAPARECIDO == 'SI') {
				$prioridad = 3;
			} else {
				$prioridad = $delito->IMPORTANCIA;
			}

			$data = (object)[
				'delito' => $folio->HECHODELITO,
				'descripcion' => $folio->HECHONARRACION,
				'idioma' => $idioma->PERSONAIDIOMADESCR ? $idioma->PERSONAIDIOMADESCR : 'DESCONOCIDO',
				'edad' => $edad,
				'perfil' => $folio->HECHODELITO == 'VIOLENCIA FAMILIAR' ? 1 : 0,
				'sexo' => $folio->HECHODELITO == 'VIOLENCIA FAMILIAR' ? 2 : 0,
				'sexo_denunciante' => $sexoDenunciante == 'F' ? 'FEMENINO' : 'MASCULINO',
			];

			$url = base_url() . "/denuncia/dashboard/video-denuncia?folio=" . $year . '-' . $folioId . "&year=" . $year . "&delito=" . $data->delito . "&descripcion=" . $data->descripcion . "&idioma=" . $data->idioma . "&edad=" . $data->edad . "&perfil=" . $data->perfil . "&sexo=" . $data->sexo . "&prioridad=" . $prioridad . "&sexo_denunciante=" . $data->sexo_denunciante;

			return json_encode((object)['status' => 1, 'url' => $url]);
		} else {
			return json_encode((object)['status' => 0, 'error' => 'No hay data disponible']);
		}
	}
}

/* End of file DashboardController.php */
/* Location: ./app/Controllers/client/DashboardController.php */
