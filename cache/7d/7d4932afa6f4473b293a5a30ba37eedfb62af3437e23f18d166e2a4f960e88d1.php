<?php

/* login.html.twig */
class __TwigTemplate_f9de462f051deb254e3b1536b8cfd0165a1e294e691aebac60ed00d31ae1035b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>Inicio de sesión</title>
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- CSS de Bootstrap -->
\t<link href=\"./views/css/login.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
</head>
<body>
    <div id=\"login-form\">
        <h1>Inicio de sesión</h1>
        <fieldset>
            <form action=\"./login.php\" method=\"POST\">
                <input type=\"text\" name=\"username\" placeholder=\"Rut\" pattern=\"[0-9]{7,8}[0-9]|[0-9]{7,8}[kK]\" required autofocus > <!-- JS because of IE support; better: placeholder=\"Email\" -->
                <input type=\"password\" name=\"password\" placeholder=\"Contraseña\" required> <!-- JS because of IE support; better: placeholder=\"Password\" -->
                <input type=\"submit\" value=\"Login\">
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button btn-danger\" onclick=\"history.go(-1); return false;\" value=\"Volver\">
            </form>
        </fieldset>
    </div> <!-- end login-form -->

\t\t";
        // line 30
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "
\t\t<!-- Librería jQuery requerida por los plugins de JavaScript -->
\t\t<script src=\"http://code.jquery.com/jquery.js\"></script>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\"></script>
\t\t<!-- Todos los plugins JavaScript de Bootstrap (también puedes
\t\t\t\t incluir archivos JavaScript individuales de los únicos
\t\t\t\t plugins que utilices) -->
\t\t<script src=\"./views/js/bootstrap.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 30,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>Inicio de sesión</title>
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->

\t<!-- CSS de Bootstrap -->
\t<link href=\"./views/css/login.min.css\" rel=\"stylesheet\" media=\"screen\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
</head>
<body>
    <div id=\"login-form\">
        <h1>Inicio de sesión</h1>
        <fieldset>
            <form action=\"./login.php\" method=\"POST\">
                <input type=\"text\" name=\"username\" placeholder=\"Rut\" pattern=\"[0-9]{7,8}[0-9]|[0-9]{7,8}[kK]\" required autofocus > <!-- JS because of IE support; better: placeholder=\"Email\" -->
                <input type=\"password\" name=\"password\" placeholder=\"Contraseña\" required> <!-- JS because of IE support; better: placeholder=\"Password\" -->
                <input type=\"submit\" value=\"Login\">
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button btn-danger\" onclick=\"history.go(-1); return false;\" value=\"Volver\">
            </form>
        </fieldset>
    </div> <!-- end login-form -->

\t\t{{ error }}
\t\t<!-- Librería jQuery requerida por los plugins de JavaScript -->
\t\t<script src=\"http://code.jquery.com/jquery.js\"></script>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\"></script>
\t\t<!-- Todos los plugins JavaScript de Bootstrap (también puedes
\t\t\t\t incluir archivos JavaScript individuales de los únicos
\t\t\t\t plugins que utilices) -->
\t\t<script src=\"./views/js/bootstrap.min.js\"></script>
</body>
</html>
", "login.html.twig", "/var/www/WSE/views/login.html.twig");
    }
}
