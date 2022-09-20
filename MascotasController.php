<?php
include "MoscotaModel.php";

$nuevomascota = new mascotas();

if(isset($_POST['btnGuardar']))
{
    $nuevomascota->Guardarmascotas($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
    header('Location: VistaMascota.php');
}