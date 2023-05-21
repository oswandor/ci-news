<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Estudiantes</title>

</head>

<style>

form  .sizeform{
position: relative;
width: 100px;
height: 100px;
background-color: blue;
} 

</style>

<body>


<h1>Crear Estudiante</h1>

<?= $this->extend('/student/baseview') ?>

<?= $this->section('content') ?>


<?php if (session()->has('error')) : ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<form class="sizeform" action="http://localhost:8080/student/create" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Carnet</label>
    <input name="Carnet" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input name="Nombrestudent" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input name="Apellidoestudent" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>



  <button type="submit" class="btn btn-primary">Crear</button>

</form>

<?= $this->endSection() ?>

</body>

</html>