<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
<?= $this->extend('/student/baseview') ?>

<?= $this->section('content') ?>
    
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Carnet</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Button Editar y Eliminar</th>
    </tr>
  </thead>
  <tbody>


  <?php  foreach ($estudiantes as $estudiante): ?>
    <tr>
    
    <th scope="row"><?php echo $estudiante['id_carnet']; ?></th>
            <td><?php echo $estudiante['nombre_estudiante']; ?></td>
            <td><?php echo $estudiante['apellido_estudiante']; ?></td>
    <td>
                    <!-- Agrega enlaces para editar y eliminar -->
                    <a   type="button" class="btn btn-outline-success" href="<?php echo base_url('roles/edit/' . $estudiante['id_carnet']); ?>">Editar</a>
                    <a type="button" class="btn btn-outline-danger" href="<?php echo base_url('roles/delete/' . $estudiante['id_carnet']); ?>">Eliminar</a>
                </td>
    <?php endforeach; ?>
    </tr>
  </tbody>
</table>



<a  type="button" class="btn btn-primary btn-lg bnt-lef" href="<?php echo base_url('student/new'); ?>" >crear</a>




<?= $this->endSection() ?>

</body>


</html>