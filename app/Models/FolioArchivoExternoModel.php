<?php

namespace App\Models;

use CodeIgniter\Model;

class FolioArchivoExternoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'FOLIOARCHIVOEXTERNO';
    
    protected $allowedFields    = ['FOLIOID','ANO','EXPEDIENTEARCHIVOID','ARCHIVODESCR','ARCHIVO',
'EXTENSION','FECHAACTUALIZACION','AUTOR','OFICINAIDAUTOR','CLASIFICACIONDOCTOID','ESTADOACCESO','PUBLICADO','RUTAALMACENAMIENTOID','STATUSALMACENID','EXPORTAR'];

}