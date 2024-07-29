<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
        table{
            border-collapse: collapse;           
        }
        td{
            border: 2px solid black;
        }
     </style>

<body>

<?php

echo "<h1>Galeria de imagens</h1>";
echo "<h4>Bob Esponja</h4>";
echo "<table><tr>";
    for ($x=1; $x<=5; $x++) {
        echo "<td><img src= 'img/foto", $x, ".jpg'></td>";
    }
    echo "</tr></table>";
    echo "<table><tr>";
    for ($x=6; $x<=10; $x++) {
        echo "<td><img src= 'img/foto", $x, ".jpg'></td>";
    }
    echo "</tr></table>";









?>

</body>
</html>