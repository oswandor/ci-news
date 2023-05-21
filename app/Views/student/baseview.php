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


form  .sizeform{
position: relative;
width: 100px;
height: 100px;
background-color: blue;
} 

</style>


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
          <a class="nav-link" href="/roles">Roles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Users</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">Estudiantes</a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>

  

<?= $this->renderSection('content') ?>

</html> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>