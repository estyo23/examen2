<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container bg-primary">
        <h2>INGRESO DE DATOS DE MASCOTAS</h2>
    
        </div>
    <form action="" method="post">

        <p>
            <label for="NOMBRE DE MASCOTAS">Nombre de Mascotas</label> Nombre de Mascotas
            <input type="text" name="apellidos">
        </p>

        <p>
            <input type="submit" value="Guardar Registro" name="btnGuardar">
        </p>

    </form>

    <hr>
    <h3>LISTADO DE MASCOTAS</h3>
    <hr>
   
    <table border="1">
        <th>idMascota</th>
        <th>Mascota</th>
        <th>Acciones</th>
        <img src="icono" width="500" height="10">
        <img src="icono2"  height="10">
        
    <?php
        include_once "MascotaModel.php";
        $mascotas = new mascotas();
        $ListarMascota = $mascotas->ListarMascota();
        while($mascota = mysqli_fetch_assoc($ListarMascota))
        {?>
          <tr>
                <td>  <?php echo $mascota['$IdMascota'] ?> </td>
                <td>  <?php echo $mascota[' Mascotas'] ?> </td>
                
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>