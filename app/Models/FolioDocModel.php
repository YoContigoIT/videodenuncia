<?php

namespace App\Models;

use CodeIgniter\Model;

class FolioDocModel extends Model
{

	protected $table = 'FOLIODOC';

	protected $allowedFields    = [
		'FOLIODOCID',
		'FOLIOID',
		'ANO',
		'VICTIMAID',
		'IMPUTADOID',
		'PLANTILLAID',
		'ESTADOID',
		'MUNICIPIOID',
		'NUMEROEXPEDIENTE',
		'TIPODOC',
		'PLACEHOLDER',
		'OFICINAID',
		'AGENTEID',
		'OFICINAID',
		'CLASIFICACIONDOCTOID',
		'NUMEROIDENTIFICADOR',
		'RAZONSOCIALFIRMA',
		'RFCFIRMA',
		'NCERTIFICADOFIRMA',
		'FECHAFIRMA',
		'HORAFIRMA',
		'LUGARFIRMA',
		'CADENAFIRMADA',
		'FIRMAELECTRONICA',
		'PDF',
		'XML',
		'STATUS',
		'STATUSENVIO',
		'ENVIADO',
		'AGENTE_REGISTRO',
		'AGENTE_ASIGNADO',
		'ENCARGADO_ASIGNADO'
	];
	public function get_by_folio($folio, $year)
	{
		$builder = $this->db->table($this->table);
		$builder->select([
			'FOLIOID', 'FOLIODOCID', 'ANO', 'TIPODOC', 'STATUS', 'PLACEHOLDER', 'STATUSENVIO', 'ENVIADO', 'AGENTE_REGISTRO.NOMBRE AS AGENTER_NOMBRE', 'AGENTE_REGISTRO.APELLIDO_PATERNO AS AGENTER_AP', 'AGENTE_REGISTRO.APELLIDO_MATERNO AS AGENTER_AM',
			'AGENTE_ASIGNADO.NOMBRE AS AGENTE_NOMBRE', 'AGENTE_ASIGNADO.APELLIDO_PATERNO AS AP_AGENTE', 'AGENTE_ASIGNADO.APELLIDO_MATERNO AS AM_AGENTE',
			'ENCARGADO_ASIGNADO.NOMBRE AS ENCARGADO_NOMBRE', 'ENCARGADO_ASIGNADO.APELLIDO_PATERNO AS AP_ENCARGADO', 'ENCARGADO_ASIGNADO.APELLIDO_MATERNO AS AM_ENCARGADO'
		]);
		$builder->join('USUARIOS AS AGENTE_REGISTRO', 'FOLIODOC.AGENTE_REGISTRO = AGENTE_REGISTRO.ID');
		$builder->join('USUARIOS AS AGENTE_ASIGNADO', 'FOLIODOC.AGENTE_ASIGNADO = AGENTE_ASIGNADO.ID', 'LEFT');
		$builder->join('USUARIOS AS ENCARGADO_ASIGNADO', 'FOLIODOC.ENCARGADO_ASIGNADO = ENCARGADO_ASIGNADO.ID', 'LEFT');

		$builder->where('FOLIOID', $folio);
		$builder->where('ANO', $year);
		$builder->orderBy('FOLIODOCID ASC');
		$query = $builder->get();
		return $query->getResult('array');
	}

	public function get_by_folio_doc($folio, $year, $foliodoc)
	{
		$builder = $this->db->table($this->table);
		$builder->select(['FOLIOID', 'FOLIODOCID', 'ANO', 'TIPODOC', 'STATUS', 'PLACEHOLDER', 'STATUSENVIO', 'ENVIADO', 'PDF', 'XML']);
		$builder->where('FOLIOID', $folio);
		$builder->where('ANO', $year);
		$builder->where('FOLIODOCID', $foliodoc);
		$builder->orderBy('FOLIODOCID ASC');
		$query = $builder->get();
		return $query->getResult('array');
	}
	public function get_by_expediente($folio, $year)
	{
		$builder = $this->db->table($this->table);
		$builder->select(['FOLIOID', 'FOLIODOCID', 'ANO', 'TIPODOC', 'STATUS', 'PLACEHOLDER', 'NUMEROEXPEDIENTE', 'RAZONSOCIALFIRMA']);
		$builder->where('NUMEROEXPEDIENTE', $folio);
		$builder->where('ANO', $year);
		$builder->orderBy('FOLIODOCID ASC');
		$query = $builder->get();
		return $query->getResult('array');
	}
	public function filterDatesDocumentos($obj)
	{
		$strQuery = 'SELECT FOLIODOC.FOLIOID, FOLIODOC.ANO, FOLIODOC.NUMEROEXPEDIENTE, FOLIODOC.FECHAREGISTRO, FOLIO.FECHAREGISTRO, FOLIO.FECHASALIDA,FOLIO.STATUS
			FROM FOLIODOC
			INNER JOIN FOLIO ON FOLIO.FOLIOID = FOLIODOC.FOLIOID AND FOLIO.ANO = FOLIODOC.ANO';
		$count = 0;
		foreach ($obj as $clave => $valor) {
			if ($clave != 'fechaInicio' && $clave != 'fechaFin' && $clave != 'horaInicio' && $clave != 'horaFin') {
				if ($count == 0) {
					$strQuery = $strQuery . ' WHERE ';
					$strQuery = $strQuery . ' FOLIODOC.' . $clave . ' = ' . '"' . $valor . '"';
				} else {
					$strQuery = $strQuery . ' AND ';
					$strQuery = $strQuery . ' FOLIODOC.' . $clave . ' = ' . '"' . $valor . '"';
				}
				$count++;
			}
		}

		if ($count == 0) {
			$strQuery =
				$strQuery .
				'WHERE FOLIO.FECHASALIDA BETWEEN CAST("' .
				(isset($obj['fechaInicio']) ? date("Y-m-d", strtotime($obj['fechaInicio'])) : date("Y-m-d")) . ' ' .
				(isset($obj['horaInicio']) ? (date('H:i:s', strtotime($obj['horaInicio']))) : '00:00:00') . '" AS DATETIME)' . ' AND ' . 'CAST("' .
				(isset($obj['fechaFin']) ? (isset($obj['horaFin']) ? date("Y-m-d", strtotime($obj['fechaFin'])) : date("Y-m-d", strtotime(date("Y-m-d", strtotime($obj['fechaFin']))))) : date("Y-m-d")) . ' ' .
				(isset($obj['horaFin']) ? (date('H:i:s', strtotime($obj['horaFin']))) : '23:59:59') . '" AS DATETIME)';
		}
		$strQuery =
			$strQuery .
			'AND FOLIO.FECHASALIDA BETWEEN CAST("' .
			(isset($obj['fechaInicio']) ? date("Y-m-d", strtotime($obj['fechaInicio'])) : date("Y-m-d")) . ' ' .
			(isset($obj['horaInicio']) ? (date('H:i:s', strtotime($obj['horaInicio']))) : '00:00:00') . '" AS DATETIME)' . ' AND ' . 'CAST("' .
			(isset($obj['fechaFin']) ? (isset($obj['horaFin']) ? date("Y-m-d", strtotime($obj['fechaFin'])) : date("Y-m-d", strtotime(date("Y-m-d", strtotime($obj['fechaFin']))))) : date("Y-m-d")) . ' ' .
			(isset($obj['horaFin']) ? (date('H:i:s', strtotime($obj['horaFin']))) : '23:59:59') . '" AS DATETIME)';
		$strQuery = $strQuery . ' GROUP BY FOLIODOC.FOLIOID, FOLIODOC.ANO';
		$result = $this->db->query($strQuery)->getResult();

		$dataView = (object)array();
		$dataView->result = $result;

		return $dataView;
	}
	// public function get_folio_abierto()
	// {
	// 	$builder = $this->db->table($this->table);
	// 	$builder->select(['FOLIOID', 'NUMEROEXPEDIENTE', 'FECHAREGISTRO', 'STATUS', 'ANO']);
	// 	$builder->where('STATUS', 'ABIERTO');
	// 	$builder->orderBy('NUMEROEXPEDIENTE ASC');
	// 	$builder->groupBy('NUMEROEXPEDIENTE');
	// 	$query = $builder->get();
	// 	return $query->getResult('array');
	// }
	// public function get_folio_firmado()
	// {
	// 	$builder = $this->db->table($this->table);
	// 	$builder->select(['FOLIOID', 'NUMEROEXPEDIENTE', 'FECHAREGISTRO', 'STATUS', 'ANO']);
	// 	$builder->where('STATUS', 'FIRMADO');
	// 	$builder->orderBy('NUMEROEXPEDIENTE ASC');
	// 	$builder->groupBy('NUMEROEXPEDIENTE');
	// 	$query = $builder->get();
	// 	return $query->getResult('array');
	// }
	public function get_folio_by_first($folio, $year, $docid)
	{
		$builder = $this->db->table($this->table);
		$builder->select(['FOLIOID', 'NUMEROEXPEDIENTE', 'FECHAREGISTRO', 'STATUS', 'ANO', 'PLACEHOLDER']);
		$builder->where('FOLIOID', $folio);
		$builder->where('ANO', $year);
		$builder->where('FOLIODOCID', $docid);
		$query = $builder->get();
		foreach ($query->getResult() as $row) {
			$result = $row->PLACEHOLDER;
		}
		return $result;
	}
	public function countFoliosAsignados($agente)
	{
		if (session('ROLID') == 6) {
			$strQuery = "SELECT COUNT(DISTINCT FOLIOID) as count_folios FROM FOLIODOC WHERE STATUS = 'ABIERTO' AND ENCARGADO_ASIGNADO =" . $agente;
		} else {
			$strQuery = "SELECT COUNT(DISTINCT FOLIOID) as count_folios FROM FOLIODOC WHERE STATUS = 'ABIERTO' AND AGENTE_ASIGNADO =" . $agente;
		}
		$result = $this->db->query($strQuery)->getResult();
		return $result[0]->count_folios;
	}

	public function expedienteDocumentos($folio, $year)
	{
		$strQuery = "SELECT * FROM FOLIODOC 
		
		WHERE (FOLIODOC.TIPODOC LIKE '%SOLICITUD DE PERITAJE%' OR FOLIODOC.TIPODOC LIKE '%OFICIO DE COLABORACION PARA INGRESO A HOSPITAL%') 
		AND STATUS = 'FIRMADO' 
		AND FOLIODOC.FOLIOID = " . $folio . " AND FOLIODOC.ANO = " . $year;
		$result = (object)array();
		$result= $this->db->query($strQuery)->getResult();
		
		return $result;
		/* JOIN RELACIONFOLIODOCEXPDOC ON FOLIODOC.NUMEROEXPEDIENTE = RELACIONFOLIODOCEXPDOC.EXPEDIENTEID 
		 AND FOLIODOC.FOLIODOCID = RELACIONFOLIODOCEXPDOC.FOLIODOCID */
	}
	public function expedienteDocumentosJusticia($folio, $year)
	{
		$strQuery = "SELECT * FROM FOLIODOC 
		JOIN RELACIONFOLIODOCEXPDOC ON FOLIODOC.NUMEROEXPEDIENTE = RELACIONFOLIODOCEXPDOC.EXPEDIENTEID 
		 AND FOLIODOC.FOLIODOCID = RELACIONFOLIODOCEXPDOC.FOLIODOCID 
		WHERE (FOLIODOC.TIPODOC LIKE '%SOLICITUD DE PERITAJE%' OR FOLIODOC.TIPODOC LIKE '%OFICIO DE COLABORACION PARA INGRESO A HOSPITAL%') 
		AND STATUS = 'FIRMADO' 
		AND FOLIODOC.FOLIOID = " . $folio . " AND FOLIODOC.ANO = " . $year;
		$result = (object)array();
		$result= $this->db->query($strQuery)->getResult();
		
		return $result;
		
	}
}
