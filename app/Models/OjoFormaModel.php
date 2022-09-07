<?php

namespace App\Models;

use CodeIgniter\Model;

class OjoFormaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'OJOFORMA';
    protected $primaryKey       = 'OJOFORMAID';
    protected $allowedFields    = ['OJOFORMAID','OJOFORMADESCR'];
}