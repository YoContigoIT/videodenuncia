<?php

namespace App\Models;

use CodeIgniter\Model;

class FolioModel extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'FOLIO';
	protected $allowedFields    = [
		'FOLIOID',
		'ANO',
		'EXPEDIENTEID',
		'DENUNCIANTEID',
		'AGENTEATENCIONID',
		'AGENTEFIRMAID',
		'STATUS',
		'NOTASAGENTE',
		'ESTADOID',
		'MUNICIPIOID',
		'HECHODELITO',
		'HECHOMEDIOCONOCIMIENTOID',
		'HECHOFECHA',
		'HECHOHORA',
		'HECHOLUGARID',
		'HECHOESTADOID',
		'HECHOMUNICIPIOID',
		'HECHOLOCALIDADID',
		'HECHODELEGACIONID',
		'HECHOZONA',
		'HECHOCOLONIAID',
		'HECHOCOLONIADESCR',
		'HECHOCALLE',
		'HECHONUMEROCASA',
		'HECHONUMEROCASAINT',
		'HECHOREFERENCIA',
		'HECHONARRACION',
		'TIPOEXPEDIENTEID',
		'HECHOCOORDENADAX',
		'HECHOCOORDENADAY',
		'LOCALIZACIONPERSONA',
		'DERECHOS',
		'FECHASALIDA'
	];

	public function filterDates($obj)
	{
		$strQuery = 'SELECT FOLIO.FOLIOID, FOLIO.ANO, FOLIO.EXPEDIENTEID, FOLIO.STATUS, FOLIO.FECHASALIDA,DENUNCIANTES.NOMBRE AS "N_DENUNCIANTE", DENUNCIANTES.APELLIDO_PATERNO AS "APP_DENUNCIANTE", DENUNCIANTES.APELLIDO_MATERNO AS "APM_DENUNCIANTE", USUARIOS.NOMBRE AS "N_AGENT", USUARIOS.APELLIDO_PATERNO AS "APP_AGENT", USUARIOS.APELLIDO_MATERNO AS "APM_AGENT", ESTADO.ESTADODESCR,MUNICIPIO.MUNICIPIODESCR FROM FOLIO INNER JOIN USUARIOS ON USUARIOS.ID = FOLIO.AGENTEATENCIONID
		INNER JOIN DENUNCIANTES ON DENUNCIANTES.DENUNCIANTEID = FOLIO.DENUNCIANTEID
		INNER JOIN ESTADO ON ESTADO.ESTADOID = FOLIO.ESTADOID
		INNER JOIN MUNICIPIO ON MUNICIPIO.MUNICIPIOID = FOLIO.MUNICIPIOID AND MUNICIPIO.ESTADOID = FOLIO.ESTADOID WHERE NOT FOLIO.STATUS = "ABIERTO" AND NOT FOLIO.STATUS = "EN PROCESO"';

		foreach ($obj as $clave => $valor) {
			if ($clave != 'fechaInicio' && $clave != 'fechaFin' && $clave != 'horaInicio' && $clave != 'horaFin') {
				$strQuery = $strQuery . ' AND ';
				$strQuery = $strQuery . 'FOLIO.' . $clave . ' = ' . '"' . $valor . '"';
			}
		}

		$strQuery =
			$strQuery . ' AND ' .
			'FOLIO.FECHASALIDA BETWEEN CAST("' .
			(isset($obj['fechaInicio']) ? date("Y-m-d", strtotime($obj['fechaInicio'])) : date("Y-m-d")) . ' ' .
			(isset($obj['horaInicio']) ? (date('H:i:s', strtotime($obj['horaInicio']))) : '00:00:00') . '" AS DATETIME)' . ' AND ' . 'CAST("' .
			(isset($obj['fechaFin']) ? (isset($obj['horaFin']) ? date("Y-m-d", strtotime($obj['fechaFin'])) : date("Y-m-d", strtotime(date("Y-m-d", strtotime($obj['fechaFin'])) . '+1 day'))) : date("Y-m-d", strtotime('+1 day'))) . ' ' .
			(isset($obj['horaFin']) ? (date('H:i:s', strtotime($obj['horaFin']))) : '00:00:00') . '" AS DATETIME)';

		$result = $this->db->query($strQuery)->getResult();
		$dataView = (object)array();
		$dataView->result = $result;
		// $dataView->strQuery = $strQuery;
		return $dataView;
	}
}
