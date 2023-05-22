<?php
$cx=mysqli_connect("localhost","root","","cecytem");
if(isset($_REQUEST["mensaje"])){
$mensaje=$_REQUEST["mensaje"];
$cx->query("INSERT INTO mensaje VALUES (NULL,'".$mensaje."')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bienvenidos</title>
</head>
<body >
    <center>
    <h1>Bienvenidos</h1>
    <form action="index.php" method="post">
        <h2>Mensaje</h2>
        <input type="text" name="mensaje"><br>
        <input type="submit" value="Enviar">
    </form>
</center>
<script src="app.js"></script>
</body>
</html>