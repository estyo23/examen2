<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bwlnhq3viyc8gqeitiib-mysql.services.clever-cloud.com","bwlnhq3viyc8gqeitiib","u7ntap5aj2oetgsa","bwlnhq3viyc8gqeitiib");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }