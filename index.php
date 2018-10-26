<?php

require_once './config/vendor/autoload.php';
$loader=new Twig_Loader_Filesystem('./views');
$twig=new Twig_Environment($loader,[]);


// echo "<h1>Hola Mundo de Pruebask</h1> <br/>";
//
// k$command="./../../../../home/ilmachine/Escritorio/Pruebasphp/pruebac";
// //$command="cd /../../../../home/ilmachine/pvm3/bin/LINUX64/; ./maestro suma";
// exec($command,$resultado);
//
// // print_r($resultado);
//
// //echo count($resultado);
// foreach($resultado as $clave => $valor) {
//      echo "$valor"k."</br>";
// }

echo $twig->render('index.html');

?>
