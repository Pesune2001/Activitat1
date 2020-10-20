<?php
$peliculas = array(['Pelicula' => 'Coco','Año' => '2017','Productora' => 'Disney'],
                    ['Pelicula' => 'Star Wars','Año' => '1999','Productora' => 'Lucas Film'],
                    ['Pelicula' => 'Harry Potter','Año' => '2001','Productora' => 'Warner B'],
                    ['Pelicula' => 'Toy Story 4','Año' => '2019','Productora' => 'Disney'],
                    ['Pelicula' => 'Rey Leon','Año' => '1994','Productora' => 'Disney']);
    if(isset($_GET['Pelicula'])){
        $LinkPelicula = $_GET["Pelicula"];
        foreach($peliculas as $pelicula){

            if(array_search($LinkPelicula,$pelicula)){
            $nombre = $pelicula['Pelicula'];
            $Fecha = $pelicula['Año'];
            $Productora = $pelicula['Productora'];
            echo "Información sobre la pelicula <strong>$nombre</strong><br>";
            echo "Basat en la teva entrada, aquí tens la informació: <br>";
            echo "$nombre va ser produida per $Productora l'any $Fecha";
            break;
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form.php</title>
</head>
<body>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="GET">
    <label for="Pelicula">Nombre pelicula</label>
    <input type="text" name="Pelicula" id="Pelicula">
    <input type="submit" value="Envia">
    </form>
    

</body>
</html>
