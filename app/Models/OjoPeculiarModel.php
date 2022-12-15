<?php

namespace App\Models;

use CodeIgniter\Model;

class OjoPeculiarModel extends Model
{

    protected $table            = 'OJOPECULIAR';
    protected $primaryKey       = 'OJOPECULIARID';
    protected $allowedFields    = ['OJOPECULIARID', 'OJOPECULIARDESCR'];
}
