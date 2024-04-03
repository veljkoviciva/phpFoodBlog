<?php

if($_FILES["imageRecipe"]["type"]=="image/png" || $_FILES["imageRecipe"]["type"]=="image/jpeg"){
    $pocetna = $_FILES["imageRecipe"]["tmp_name"];
    $krajnja = "../../phpRecipeBlog/images/" . $_FILES["imageRecipe"]["name"];
    move_uploaded_file($pocetna, $krajnja);
}
echo "<br>";

$maksimalnaVisina = 400;
$maksimalnaDuzina = 400;

$dimenzije = getimagesize($krajnja);

$tacnaDuzina = $dimenzije[0];
$tacnaVisina = $dimenzije[1];

if($tacnaDuzina<=$maksimalnaDuzina && $tacnaVisina<=$maksimalnaVisina){
    echo "<img src=\"$krajnja\" alt='Greska'>";
}
else
    echo "<img src=\"$krajnja\" alt='Greska' width=50% height=50%>";
