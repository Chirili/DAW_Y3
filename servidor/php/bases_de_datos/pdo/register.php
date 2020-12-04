<?php
$conexion = new PDO('mysql:host=localhost;dbname=ejemplo','root','');
print_r($_REQUEST);
if(!empty($_REQUEST["usuario"]) && !empty($_REQUEST["password"]) && isset($_REQUEST["rol"])){
    print "entra";
    $insert = $conexion->prepare('INSERT INTO usuarios(nombre,`password`,rol) VALUES (?,?,?)');
    $insert->execute(array($_REQUEST["usuario"]),md5($_REQUEST["password"]),$_REQUEST["rol"]);
}else{
    print "Por favor introduce datos correctos";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Introduce el nombre de usuario: <input type="text" name="usuario" id=""><br>
        Introduce la contraseña: <input type="text" name="password" id=""><br>
        <select name="rol" id="">
        <option value="-1">Selecciona el rol</option>
        <?php
        $consultaRoles = $conexion->query("SELECT * FROM roles");
        $datos = $consultaRoles->fetchAll(PDO::FETCH_ASSOC);
        foreach($datos as $rol){
            print "<option value=$rol[role_id]>$rol[nombre]</option>";
        }
        $conexion = null;
        ?>
        </select><br>
    <button type="submit">Registrar Usuario</button>
    </form>
</body>
</html>