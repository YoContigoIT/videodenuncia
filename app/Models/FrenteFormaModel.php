<?php

namespace App\Models;

use CodeIgniter\Model;

class FrenteFormaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'FRENTEFORMA';
    protected $primaryKey       = 'FRENTEFORMAID';
    protected $allowedFields    = ['FRENTEFORMAID','FRENTEFORMADESCR'];
}
