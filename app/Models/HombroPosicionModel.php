<?php

namespace App\Models;

use CodeIgniter\Model;

class HombroPosicionModel extends Model
{

    protected $table            = 'HOMBROPOSICION';
    protected $primaryKey       = 'HOMBROPOSICIONID';
    protected $allowedFields    = ['HOMBROPOSICIONID', 'HOMBROPOSICIONDESCR'];
}
