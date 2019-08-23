<?php

//pasamos el curso
$datos="Filosofia";

$host= $_SERVER["HTTP_HOST"];


//Iniciamos cURL.
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://" . $host . '/practica/json/result.php');


curl_setopt ($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_COOKIE, 'COOKIE O SESION');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows
NT 6.1; es-ES; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13");//Enviamos los datos por post

curl_setopt ($ch, CURLOPT_POSTFIELDS, "nombre_cursos=".urlencode($datos));

echo curl_exec($ch);

?>