<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
</head>
<body>
<?php
        session_start();
        ini_set('display_errors','On');
        require __DIR__. '/src/connect.php';
        require __DIR__. '/src/registrodatos.php';
        $nombre= filter_input(INPUT_POST,"nombre",FILTER_SANITIZE_SPECIAL_CHARS);
        $contraseña= filter_input(INPUT_POST,"contraseña",FILTER_SANITIZE_SPECIAL_CHARS);
        $registro= filter_input(INPUT_POST,"registro",FILTER_SANITIZE_SPECIAL_CHARS);
        $dbname="Usuarios";
        $base=connectSqlite($dbname);
        schemaGenerator($base);
        if(isset($registro)){
                InsertSchema($base, $nombre, $contraseña);
        }
        else if($nombre != NULL && $contraseña != NULL){
            $login=LoginSchema($base, $nombre, $contraseña); //para arrays usamos print_r
            if($login != NULL){
                header("Location:bienvenido.php");
                if(!isset($_SESSION['nombre'])){ //si no existe crealo
                    $_SESSION['nombre']=$nombre; //asignale el valor de nombre
                }     
            }else{
                echo "Usuario y contraseña no encontrados,vuelva a intentarlo";
            }
         }
        
    ?>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    <label>NOMBRE: </label><input type="text" name="nombre"/><br>
    <label>CONTRASEÑA: </label><input type="password" name="contraseña"/><br>
    <label>REGISTRATE</label><input type="checkbox" name="registro"/><br>
    <input type="submit" value=Envia>
</body>
</html>