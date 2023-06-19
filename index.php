<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
    
    <form method="post">
    <div class="container">
        <div class="row">
        <div class="col"></div> 
        <div class="form-group col-md-4">
    <label for="fecha">fecha</label>
    <input type="date"name="fecha" class="form-control" id="fecha">
    </div>
    <div class="col"></div>
    </div>
    <div class="col"></div>
    

        <div class="row">
            <div class="col"></div>
            
        <div class="form-group col-md-4">
<label for="ne">N de Equipo</label>
<input type="number" name="ne" id="ne" class="form-control">
</div>
<div class="col"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col"></div>
    <div class="form-group col-md-4">
<label for="na">N de Aula</label>
<input type="text" id="na" name="na" class="form-control">

</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="form-group col-md-4">
<label for="ni">N de Inventario</label>
<input type="text" id="ni" name="ni" class="form-control">
</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="form-group col-md-4">
    <label for="problema">Descripcion Del Problema</label>
    <input type="text" id="problema" name="problema" class="form-control" rows="2"placeholder="ej: No Muesta Imagen">
</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="form-group col-md-4">
    <label for="docente">Docente</label>
    <input type="text" class="form-control" name="docente" id="docente" >
</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col">
<button type="submit" class="btn btn-primary btn-lg" name="enviar" id="enviar">enviar</button>
<button type="reset" class="btn btn-primary btn-lg"name="eliminar" >eliminar</button>
</div>
<div class="col"></div>
</div>    
</div>



</form>
<?php
include ('reparacion.php');
?>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>