
<?php
    $conexion = new mysqli('localhost','root','','ejemplo');
    
    if($resultado = $conexion -> query("SELECT * FROM alumnos WHERE codigo=2")){
        while($dato = $resultado->fetch_array()){
            print_r($dato['nombre']); print"<br>";
        }

    }else{
        print"HAPETADO";
        print $conexion->error;
    }
    $conexion->close();

?>