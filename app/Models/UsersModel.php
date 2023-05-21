<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_users';
    protected $allowedFields = ['nombre_users', 'apellido_users', 'edad_users', 'id_rol'  , 'contrasena'];

    public function getUsuariosWithRol()
    {
        $this->join('rols', 'usuarios.id_rol = rols.id_rol');
        return $this->findAll();
    }
}
