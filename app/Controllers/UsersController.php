<?php

namespace App\Controllers;

use App\Models\RolsModel;
use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $rolModel = new RolsModel();
        $roles = $rolModel->findAll();

        // Realizar operaciones con los roles...
        return view('welcome_message',['roles' => $roles] );
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('roles/create');

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rolModel = new RolsModel();

        $data = [
            'nombre_rol' => $this->request->getPost('nombre_rol')
            // Aquí debes agregar el resto de los campos del formulario
        ];

        $rolModel->insert($data);

        return redirect()->to('roles')->with('success', 'Rol creado exitosamente.');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $rolModel = new RolsModel();
        $rol = $rolModel->find($id);

        return view('roles/edit', ['rol' => $rol]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rolModel = new RolsModel();

        $data = [
            'nombre_rol' => $this->request->getPost('nombre_rol')
            // Aquí debes agregar el resto de los campos del formulario
        ];

        $rolModel->update($id, $data);

        return redirect()->to('roles')->with('success', 'Rol actualizado exitosamente.');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        
    $rolModel = new RolsModel();

    // Verificar si se proporcionó un ID válido
    if ($id !== null) {
        // Eliminar el rol con el ID proporcionado
        $rolModel->delete($id);

        // Redirigir a la página principal o a una vista de éxito
        return redirect()->to('/')->with('success', 'Rol eliminado exitosamente.');
    } else {
        // Si no se proporcionó un ID válido, redirigir con un mensaje de error
        return redirect()->to('/')->with('error', 'ID de rol inválido.');
    }
    }
}
