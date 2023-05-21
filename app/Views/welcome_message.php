<!-- roles/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>

.table {
  
  position: relative;
  top: 100px;
  margin: auto;
  height: 50%;
  width: 60%;
  border-radius: 10px;
}
.bnt-lef {

   position: relative;
   left: 250px;
   top: 150px;

}



    </style>
</head>

<body>


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Roles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Roles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Users</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Button Editar y Eliminar</th>
    
    </tr>
  </thead>
  <tbody>


  <?php  foreach ($roles as $rol): ?>
    <tr>
    
    <th scope="row"><?php echo $rol['id_rol']; ?></th>
            <td><?php echo $rol['nombre_rol']; ?></td>

    <td>
                    <!-- Agrega enlaces para editar y eliminar -->
                    <a   type="button" class="btn btn-outline-success" href="<?php echo base_url('roles/edit/' . $rol['id_rol']); ?>">Editar</a>
                    <a type="button" class="btn btn-outline-danger" href="<?php echo base_url('roles/delete/' . $rol['id_rol']); ?>">Eliminar</a>
                </td>
    <?php endforeach; ?>
    </tr>
  </tbody>
</table>




<a  type="button" class="btn btn-primary btn-lg bnt-lef" href="<?php echo base_url('roles/new'); ?>" >crear</a>



</body>
</html>
