<?php

namespace App\Models;

use CodeIgniter\Model;

class RolsModel extends Model
{

    protected $table = 'rols';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['nombre_rol'];

    
}
