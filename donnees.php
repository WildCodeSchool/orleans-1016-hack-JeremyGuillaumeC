<?php

$ville= $_POST['ville'];
$lettre= $_POST['lettre'];


$meteo= file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $ville . "," . $lettre . "&appid=7dc40b875723a7d6e4b6e47f3a4cce32");


$var = json_decode($meteo,true);






if($var['weather'][0]['main'] == "Clouds") {
echo "<img src='img/nuage2.png'><br /><br />";
}
elseif($var['weather'][0]['main'] == "Rain") {
echo "<img src='img/pluie.jpg'><br /><br />";
}
elseif($var['weather'][0]['main'] == "Clear") {
echo "<img src='img/soleil.png'><br /><br />";
}
elseif($var['weather'][0]['main'] == "Sun") {
echo "<img src='img/soleil.png'><br /><br />";
}
elseif($var['weather'][0]['main'] == "thunderstorm") {
echo "<img src='img/orage.jpg'><br /><br />";
}

/* ----------------------------FIN METEO DEBUT DEEZER---------------------------------------------- */

$temps= $var['weather'][0]['main'];

$deezer= file_get_contents("https://api.deezer.com/search?q=".$temps);

$vard = json_decode($deezer,true);



echo "<iframe style='background-color: white; border: none; margin-bottom: 0; height: 100px; width: 100%;' src='" . $vard['data'][0]['preview'] . "'></iframe>";

?>

























