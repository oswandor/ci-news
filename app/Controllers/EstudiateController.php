<?php

namespace App\Controllers;

use App\Models\EstudianteModel;
use CodeIgniter\RESTful\ResourceController;

class EstudiateController extends ResourceController
{
    public function index()
    {   
        $modelestudiante = new EstudianteModel() ; 
        $allEstudiante =  $modelestudiante->findAll(); 
        return view('student/liststudent' , ['estudiantes' => $allEstudiante ] ); 
    }

    public function show($id = null)
    {
        //
    }


    public function new()
    {
        return view('student/newstudent');
    }

 
    public function create()
    {
       
        $rolModel = new EstudianteModel();

        $carnet = $_POST['Carnet'];
    
        // Verificar si el carnet ya existe
        $existingRecord = $rolModel->where('id_carnet', $carnet)->first();
    
        if ($existingRecord) {
            // El carnet ya existe en la base de datos
         
            return redirect()->back()->withInput()->with('error', 'El carnet ya existe en la base de datos.');
        }
    
        $data = [
            'id_carnet' => $carnet,
            'nombre_estudiante' => $_POST['Nombrestudent'],
            'apellido_estudiante' => $_POST['Apellidoestudent'],
            // Agrega el resto de los campos del formulario aquí
        ];
    
        $rolModel->insert($data);
    
        return redirect()->to('/student')->with('success', 'Rol creado exitosamente.');
    }

    
    public function edit($id = null)
    {
        //
    }

    
    public function update($id = null)
    {
        //
    }

  
    public function delete($id = null)
    {
        //
    }
}
