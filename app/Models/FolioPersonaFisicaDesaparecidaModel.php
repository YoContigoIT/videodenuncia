<?php

namespace App\Models;

use CodeIgniter\Model;

class FolioPersonaFisicaDesaparecidaModel extends Model
{
	protected $DBGroup          = 'default';
	protected $table            = 'FOLIOPERSONAFISICADESAPARECIDA';
	protected $primaryKey       = 'ID_PERSONA_DESAPARECIDA';
	protected $allowedFields    = [
		'ID_PERSONA_DESAPARECIDA',
		'FOLIOID',
		'PERSONAFISICAID',
		'ESTATURA',
		'PESO',
		'COMPLEXION',
		'COLOR_TEZ',
		'SENAS',
		'IDENTIDAD',
		'COLOR_CABELLO',
		'TAM_CABELLO',
		'FORMA_CABELLO',
		'COLOR_OJOS',
		'FRENTE',
		'CEJA',
		'DISCAPACIDAD',
		'ORIGEN',
		'DIA_DESAPARICION',
		'LUGAR_DESAPARICION',
		'VESTIMENTA',
		'PARENTESCO',
		'FOTOGRAFIA',
		'AUTORIZA_FOTO',
	];
}