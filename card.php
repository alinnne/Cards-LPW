<?php

$nomeAlbm = $_POST["nomeAlbum"];
$cantor= $_POST["Cantor"];
$AnoLnc= $_POST["anoLanc"];
$capa =$_POST["capa"];


echo '<div style="background: black; color: red;">';
echo"<img src=". $capa. " class='card-img-top' >";
echo"<div class='card-body'>";
echo"<h1>" . $nomeAlbm;
echo"<p>" . "cantor " . $cantor ."</p>". "<br>" ;
echo "<p>". "Ano Lançamento" . $AnoLnc."</p>";
echo"</div>";


  

