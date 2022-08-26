<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpPersonaFisicaMediaFiliacionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'EXPPERSONAFISICAMEDIAFILIACION';
    protected $primaryKey       = 'EXPEDIENTEID';
    protected $allowedFields    = [
        'EXPEDIENTEID',
        'PERSONAFISICAID',
        'OCUPACIONID',
        'ESTATURA',
        'PESO',
        'SENASPARTICULARES',
        'PIELCOLORID',
        'FIGURAID',
        'CONTEXTURAID',
        'CARAFORMAID',
        'CARATAMANOID',
        'CARATEZID',
        'OREJALOBULOID',
        'OREJAFORMAID',
        'OREJATAMANOID',
        'CABELLOCOLORID',
        'CABELLOESTILOID',
        'CABELLOTAMANOID',
        'CABELLOPECULIARID',
        'CABELLODESCR',
        'FRENTEALTURAID',
        'FRENTEANCHURAID',
        'FRENTEFORMAID',
        'FRENTEPECULIARID',
        'CEJACOLOCACIONID',
        'CEJAFORMAID',
        'CEJATAMANOID',
        'CEJAGROSORID',
        'OJOCOLOCACIONID',
        'OJOFORMAID',
        'OJOTAMANOID',
        'OJOCOLORID',
        'OJOPECULIARID',
        'NARIZTIPOID',
        'NARIZTAMANOID',
        'NARIZBASEID',
        'NARIZPECULIARID',
        'NARIZDESCR',
        'BIGOTEFORMAID',
        'BIGOTETAMANOID',
        'BIGOTEGROSORID',
        'BIGOTEPECULIARID',
        'BIGOTEDESCR',
        'BOCATAMANOID',
        'BOCAPECULIARID',
        'LABIOGROSORID',
        'LABIOLONGITUDID',
        'LABIOPOSICIONID',
        'LABIOPECULIARID',
        'DIENTETAMANOID',
        'DIENTETIPOID',
        'DIENTEPECULIARID',
        'DIENTEDESCR',
        'BARBILLAFORMAID',
        'BARBILLATAMANOID',
        'BARBILLAINCLINACIONID',
        'BARBILLAPECULIARID',
        'BARBILLADESCR',
        'CUELLOTAMANOID',
        'CUELLOGROSORID',
        'CUELLOPECULIARID',
        'CUELLODESCR',
        'HOMBROPOSICIONID',
        'HOMBROLONGITUDID',
        'HOMBROGROSORID',
        'ESTOMAGOID',
        'PERSONAESCOLARIDADID',
        'PERSONAETNIAID',
        'ESTOMAGODESCR',
       

    ];

    
}
