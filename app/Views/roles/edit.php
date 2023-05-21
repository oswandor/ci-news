
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>

body{
    background-color: #212529;
}

.container {

    position: relative;
    top:150px;
    width:50%; 
    height:500px; 
    margin: auto; 
    background-color: white;
    padding: 50px;
    border-radius: 10px;
}


input {

margin: 20px;
color: #212529;
} 

button {
margin: 20px;
} 

.input-border-color {
    border-color: red; /* Cambia "red" al color deseado */
}

</style>


</head>
<body>
    



<div class="container">

<h1>Editar Rol</h1>

<?php if (session()->has('success')): ?>
    <div class="alert alert-success"><?= session('success') ?></div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <div class="alert alert-danger"><?= session('error') ?></div>
<?php endif; ?>

<form action="<?= site_url('roles/update/' . $rol['id_rol']) ?>" method="post">
    <div class="form-group">
        <label for="nombre_rol">Nombre del Rol</label>
        <input type="text" name="nombre_rol" id="nombre_rol" class="form-control input-border-color" value="<?= $rol['nombre_rol'] ?>" required>
    </div>
    <!-- Agrega aquí el resto de los campos del formulario -->

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>


</div>












</body>
</html>













