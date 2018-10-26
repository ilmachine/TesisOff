<?php

/* base.html.twig */
class __TwigTemplate_4a105cc347cfbd5733e9d1145e3cedfcd6b877fc5080c136c76bf9236e2d8f08 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'invar' => array($this, 'block_invar'),
            'contenido' => array($this, 'block_contenido'),
            'piePagina' => array($this, 'block_piePagina'),
            'scriptis' => array($this, 'block_scriptis'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>
<body>
\t";
        // line 24
        $this->displayBlock('invar', $context, $blocks);
        // line 83
        echo "
\t<div class=\"container\">
\t\t";
        // line 85
        if ((($context["valMsg"] ?? null) == "1")) {
            // line 86
            echo "\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t<strong>";
            // line 87
            echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
            echo "</strong>.
\t\t\t<button type=\"button\" class=\"close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t\t";
        }
        // line 93
        echo "\t\t";
        if ((($context["valMsg"] ?? null) == "2")) {
            // line 94
            echo "\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<strong>";
            // line 95
            echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
            echo "</strong>.
\t\t\t\t<button type=\"button\" class=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 101
        echo "\t</div>

\t<div class=\"container\">
\t\t";
        // line 104
        $this->displayBlock('contenido', $context, $blocks);
        // line 106
        echo "\t</div>
\t<footer>
\t\t";
        // line 108
        $this->displayBlock('piePagina', $context, $blocks);
        // line 110
        echo "\t</footer>
\t";
        // line 111
        $this->displayBlock('scriptis', $context, $blocks);
        // line 125
        echo "
 </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- CSS de Bootstrap -->
\t<!-- <link href=\"./views/bootstrap2018/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<link href=\"./views/bootstrap2018/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"> -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
\t<script src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js\"></script>
\t<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script> -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" crossorigin=\"anonymous\"></script>

\t<title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 24
    public function block_invar($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 navbar-dark bg-primary\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"./leerOperaciones.php\">CodeSearch</a>
\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t";
        // line 30
        if ((($context["idTipoUsu"] ?? null) == "2")) {
            // line 31
            echo "\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tArchivos
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./leerArchivos.php\">Histórico</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./cargarArchivo.php\">Subir Archivo</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./logout.php\"><span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tUsuarios
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./leerProfe.php\">Listar</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./crearProfe.php\">Crear</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Actualizar</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Eliminar</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./cargarArchivo.php\">Archivos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t      <li class=\"nav-item\">
\t\t\t\t        <a class=\"nav-link\" href=\"#\"></a>
\t\t\t\t      </li>
\t\t\t\t\t\t<div class=\"w-100 bg-warning\"/>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 navbar-dark bg-primary\">
\t\t\t\t\t<form class=\"form-inline my-2\" action=\"./controller/pruebaC.php\" method=\"get\">
\t\t\t\t\t\t<input class=\"col form-control \" type=\"search\" placeholder=\"¿Qué desea buscar?\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"btn btn-info btn-sm my-2 my-sm-0\" type=\"submit\">Buscar</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 navbar-dark bg-primary \">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto form-inline my-2\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./logout.php\">Salir</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    // line 104
    public function block_contenido($context, array $blocks = array())
    {
        // line 105
        echo "\t\t";
    }

    // line 108
    public function block_piePagina($context, array $blocks = array())
    {
        // line 109
        echo "\t\t";
    }

    // line 111
    public function block_scriptis($context, array $blocks = array())
    {
        // line 112
        echo "\t\t<script>
\t\t\$(document).ready(function(){
\t\t\t\t\$(\".alert\").alert(); window.setTimeout(
\t\t\t\t\tfunction() { \$(\".alert\").alert('close'); }, 5000);
\t\t});
\t\t</script>
\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"./views/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"./views/js/bootstrap.bundle.js\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  215 => 111,  211 => 109,  208 => 108,  204 => 105,  201 => 104,  176 => 61,  170 => 57,  142 => 31,  140 => 30,  133 => 25,  130 => 24,  120 => 20,  103 => 5,  100 => 4,  93 => 125,  91 => 111,  88 => 110,  86 => 108,  82 => 106,  80 => 104,  75 => 101,  66 => 95,  63 => 94,  60 => 93,  51 => 87,  48 => 86,  46 => 85,  42 => 83,  40 => 24,  36 => 22,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
\t{% block head %}
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- CSS de Bootstrap -->
\t<!-- <link href=\"./views/bootstrap2018/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<link href=\"./views/bootstrap2018/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"> -->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
\t<script src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js\"></script>
\t<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script> -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" crossorigin=\"anonymous\"></script>

\t<title>{% block title %}{% endblock title %}</title>
\t{% endblock head %}
</head>
<body>
\t{% block invar %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 navbar-dark bg-primary\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"./leerOperaciones.php\">CodeSearch</a>
\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t{% if idTipoUsu == '2' %}
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tArchivos
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./leerArchivos.php\">Histórico</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./cargarArchivo.php\">Subir Archivo</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./logout.php\"><span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tUsuarios
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./leerProfe.php\">Listar</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"./crearProfe.php\">Crear</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Actualizar</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Eliminar</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./cargarArchivo.php\">Archivos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t      <li class=\"nav-item\">
\t\t\t\t        <a class=\"nav-link\" href=\"#\"></a>
\t\t\t\t      </li>
\t\t\t\t\t\t<div class=\"w-100 bg-warning\"/>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 navbar-dark bg-primary\">
\t\t\t\t\t<form class=\"form-inline my-2\" action=\"./controller/pruebaC.php\" method=\"get\">
\t\t\t\t\t\t<input class=\"col form-control \" type=\"search\" placeholder=\"¿Qué desea buscar?\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"btn btn-info btn-sm my-2 my-sm-0\" type=\"submit\">Buscar</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-1 navbar-dark bg-primary \">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto form-inline my-2\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"./logout.php\">Salir</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock invar %}

\t<div class=\"container\">
\t\t{% if valMsg == '1' %}
\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t<strong>{{ mensaje }}</strong>.
\t\t\t<button type=\"button\" class=\"close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t\t{% endif %}
\t\t{% if valMsg == '2' %}
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t<strong>{{ mensaje }}</strong>.
\t\t\t\t<button type=\"button\" class=\"close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endif %}
\t</div>

\t<div class=\"container\">
\t\t{% block contenido %}
\t\t{% endblock contenido %}
\t</div>
\t<footer>
\t\t{% block piePagina %}
\t\t{% endblock piePagina %}
\t</footer>
\t{% block scriptis %}
\t\t<script>
\t\t\$(document).ready(function(){
\t\t\t\t\$(\".alert\").alert(); window.setTimeout(
\t\t\t\t\tfunction() { \$(\".alert\").alert('close'); }, 5000);
\t\t});
\t\t</script>
\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"./views/js/bootstrap.bundle.min.js\"></script>
\t\t<script src=\"./views/js/bootstrap.bundle.js\"></script>
\t{% endblock scriptis %}

 </body>
</html>
", "base.html.twig", "/var/www/WSE/views/base.html.twig");
    }
}
