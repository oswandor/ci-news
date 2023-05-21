<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de session</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>


body{
    background-color: #212529;
}

.box {

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
    border-color: #212529;
} 

button {
    margin: 20px;
} 

</style>
</head>
<body>
    



<div class="box">

<form action="<?= site_url('login') ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text"  name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>


</div>

</body>
</html>