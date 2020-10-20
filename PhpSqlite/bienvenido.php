<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    session_start();
    session_destroy();

    ?>
    <style>
    #link{
        color: black;
        text-decoration: none;  
    }
    </style>
</head>
<body>
    <h1>BIENVENID@ <?php echo htmlspecialchars($_SESSION["nombre"])?></h1>

    <a id="link" href="index.php">Para volver al inicio clicame</a>
</body>
</html>