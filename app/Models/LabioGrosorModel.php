<?php

namespace App\Models;

use CodeIgniter\Model;

class LabioGrosorModel extends Model
{

    protected $table            = 'LABIOGROSOR';
    protected $primaryKey       = 'LABIOGROSORID';
    protected $allowedFields    = ['LABIOGROSORID', 'LABIOGROSORDESCR'];
}
