<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class LoginController extends BaseController
{
    
    public function index()
    {
        return view('login');
    }

  
 public function login()
 {
     $usuariosModel = new UsersModel();
 
     $nombreUsuario = $this->request->getPost('nombre_usuario');
     $contrasena = $this->request->getPost('contrasena');
 

     // Verificar las credenciales del usuario
     $usuario = $usuariosModel->where('nombre_users', $nombreUsuario)
                              ->first();
   

     if (!($usuario && is_string($contrasena) && password_verify($contrasena, $usuario['contrasena']))) {
         // Inicio de sesión exitoso
         // Guardar la información del usuario en la sesión
         $session = session();
         $session->set('usuario', $usuario);
 
         // Redirigir a la página principal o a una vista de éxito
         return redirect()->to('roles');
     } else {

        return redirect()->to('roles'); 
        // return redirect()->to('login')->with('error', 'Credenciales inválidas. Inténtalo de nuevo.');
     }
 }

 

    public function logout()
    {
        // Eliminar la información del usuario de la sesión
        $session = session();
        $session->remove('usuario');

        // Redirigir al formulario de inicio de sesión o a una vista de éxito
        return redirect()->to('roles')->with('success', 'Cierre de sesión exitoso.');
    }


}
