<?php
include_once "conexion.php";

class mascotas
{
    private $IdMascota;
    private $Mascotas;

    public function Guardarmascotas($Idmas,$Mas)
    {
        /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into refugiodemascotas (IdMascota,Mascotas) values ("."'".$_POST['IdMascota']."','".$_POST['Mascotas']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }

       header("Location: VistaMascota.php");

    }

    public function ListarMascota()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascota");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }
    

}