<?php

namespace App\Models;

use CodeIgniter\Model;

class CuelloTamanoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'CUELLOTAMANO';
    protected $primaryKey       = 'CUELLOTAMANOID';
    protected $allowedFields    = ['CUELLOTAMANOID','CUELLOTAMANODESCR'];
}
