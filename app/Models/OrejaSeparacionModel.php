<?php

namespace App\Models;

use CodeIgniter\Model;

class OrejaSeparacionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'OREJASEPARACION';
    protected $primaryKey       = 'OREJASEPARACIONID';
    protected $allowedFields    = ['OREJASEPARACIONID','OREJASEPARACIONDESCR'];
}
