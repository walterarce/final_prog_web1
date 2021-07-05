<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle Pelicula</title>
    <link rel="shortcut icon" href="#" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js" integrity="sha512-7oYXeK0OxTFxndh0erL8FsjGvrl2VMDor6fVqzlLGfwOQQqTbYsGPv4ZZ15QHfSk80doyaM0ZJdvkyDcVO7KFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<?php
//trae todos los js que esten en la ruta que defino.
$d = dir("../js/rutas");
while (false !== ($entry = $d-> read()))
{
    if(substr($entry,-3)=='.js'){
        print '<script src="../js/rutas/' . $entry . '"></script>';
    }
}
$d->close();
?>
<body data-ng-app="DetalleApp">
<div class="container">
<detallemovie></detallemovie>
</div>
</body>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min_hero.css" media="screen" />


</html>