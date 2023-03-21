<?php include
"include/conexion.php";
"include/acciones01.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>
    <div class="Container m-o content_justify-center py-2">
        <div class="row text-center">
        <h1 class="text-success">Registro</h1>
    </div>
    <form id="Registro" action="?php echo $-SERVER['Php_SELT'];?>" Method='post'>
        <div class="row text-center">
            <div class="Col-sm-12 Clo-md-12 Col-lg-12">
                <input type="text" mame="Nombre" class="form-control" placeholder="Nombre" required>
           </div>
       </div>
    <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12"> 
            <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
   </div>
       </div>
    <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12">
            <textarea name="Direccion" class="form-control" placeholder="Direccion"></textarea>
       </div>
   </div>
    <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12"> 
            <input type="text" name="Telefono" class="form-control" placeholder="55-55-55-55-55" required>
       </div>
   </div>
    <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12"> 
            <input type="Date" name="Fecha" class="form-control" required>
       </div>
   </div>
    <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12"> 
            <input type="Email" name="Email" class="form-control" placeholder="Email" required>
       </div>
   </div>
   <div class="row text-center">
        <div class="Col-sm-12 Clo-md-12 Col-lg-12"> 
            <input type="submit"value="Registro" name="btn" class="btn btn-success">
       </div>
  </div>
    </form>
</body>
</html>