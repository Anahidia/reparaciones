<?php
include('bd.php');


if (isset($_POST['enviar'])) {
    if (strlen($_POST['fecha'])>= 1 && 
    strlen($_POST['ne'])>= 1 && 
    strlen($_POST['na'])>= 1 && 
    strlen($_POST['ni'])>= 1
    && strlen($_POST['problema'])>= 1
    && strlen($_POST['docente'])>= 1 ) ;

    {
        $fecha=date ("dd/mm/aaaa") ;
        $ne=trim($_POST['ne']);
        $na=trim($_POST['na']);
        $ni=trim($_POST['ni']);
        $problema=trim($_POST['problema']);
        $docente=trim($_POST['docente']);

        $consulta= "INSERT INTO `reparaciones`( `ne`, `inv`, `na`, `docente`, `fecha`, `detalle`)
         VALUES ('$ne','$ni','$na','$docente','$fecha','$problema')";
         $resultado= mysqli_query($conex,$consulta);
    }
}
?>