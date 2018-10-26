<?php
require_once 'vendor/autoload.php';

function render($plantilla, $parametros) {
    //Twig_Autoloader::register();
    $directorioVistas = './views';
    //echo $directorioVistas;
    $loader = new Twig_Loader_Filesystem($directorioVistas);
    $twig = new Twig_Environment($loader, array(
        'cache' => false,
        'auto_reload' => true,
        'debug' => true
    ));
    //
    $template = $twig->loadTemplate($plantilla);
    echo $template->render($parametros);
}
?>
