<?php

namespace App\Models;

use CodeIgniter\Model;

class FolioPersonaFisicaModel extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'FOLIOPERSONAFISICA';
	protected $primaryKey       = 'ID';
	protected $allowedFields    = [
		'FOLIOID',
		'PERSONAFISICAID',
		'CALIDADJURIDICAID',
		'RESERVARIDENTIDAD',
		'DENUNCIANTE',
		'VIVA',
		'TIPOIDENTIFICACIONID',
		'NUMEROIDENTIFICACION',
		'APODO',
		'NOMBRE',
		'PRIMERAPELLIDO',
		'SEGUNDOAPELLIDO',
		'NUMEROIDENTIDAD',
		'ESTADOORIGENID',
		'MUNICIPIOORIGENID',
		'FECHANACIMIENTO',
		'EDAD',
		'SEXO',
		'TELEFONO',
		'CORREO',
		'EDADCANTIDAD',
		'EDADTIEMPO',
		'NACIONALIDADID',
		'ESTADOCIVILID',
		'FOTO',
		'ESTADOJURIDICOIMPUTADOID',
		'DESAPARECIDA',
		'PERSONATIPOMUERTEID',
		'PERSONARELIGIONID',
		'TIPOVIVIENDAID',
		'LUGARFRECUENTA',
		'VESTUARIO',
		'AFECTOBEBIDA',
		'BEBIDAS',
		'AFECTODROGA',
		'DROGAS',
		'SOLICITANTEASESORIA',
		'INGRESOS',
		'PERSONAIDIOMAID',
		'TIEMPORESIDEANOS',
		'TIEMPORESIDEMESES',
		'TIEMPORESIDEDIAS',
		'ESCOLARIDAD',
		'DESCRIPCION_FISICA',
	];

	public function get_by_id($id)
	{
		$sql = 'select * from FOLIOPERSONAFISICA where PERSONAFISICAID =' . $id;
		$query =  $this->db->query($sql);

		return $query->getRow();
	}
}
