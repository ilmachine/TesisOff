<?php
#!/usr/bin/php
echo "<h1>Hola Mundo de Pruebas</h1> <br/>";

// $command="cd ~/Escritorio/Pruebasphp;./pruebac";
$command="cd /home/ilmachine/pvm3/bin/LINUX64;./maestro suma";
passthru($command,$resultado);

print_r($resultado);

// echo count($resultado);
// foreach($resultado as $clave => $valor) {
//      echo "$valor <br/>";
// }

echo "<h3> final </h3>";
?>
