<?php

namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model
{
   
    protected $table            = 'estudiantes';
    protected $primaryKey = 'id_carnet';
    protected $allowedFields = ['nombre_estudiante' , 'apellido_estudiante'];
    protected $useAutoIncrement = false;

}
