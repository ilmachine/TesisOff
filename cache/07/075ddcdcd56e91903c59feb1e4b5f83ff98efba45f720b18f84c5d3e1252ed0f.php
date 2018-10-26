<?php

/* leerArchivos.html.twig */
class __TwigTemplate_b8595961c77d146bf018fc47e9cb89cd9dddafaebd55a5aa4894d36e466bb778 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "leerArchivos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'invar' => array($this, 'block_invar'),
            'contenido' => array($this, 'block_contenido'),
            'piePagina' => array($this, 'block_piePagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido@";
    }

    // line 3
    public function block_invar($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("invar", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "
<h1> Histórico: Carga de archivos <hr></h1>

<table class=\"table\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Archivo</th>
      <th scope=\"col\">Rut</th>
      <th scope=\"col\">Nombre</th>
      <th scope=\"col\">Usuario</th>
      <th scope=\"col\">Fecha modificación</th>
    </tr>
  </thead>
  <cwd>
    ";
        // line 21
        if ((($context["cantFilas"] ?? null) > 0)) {
            // line 22
            echo "      <tbody>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
                // line 24
                echo "        <tr>
          <th>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "fich_id", array()), "html", null, true);
                echo "</th>
          <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "fich_nombre", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "per_rut", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "per_digito_verificador", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "per_nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "per_apellido_paterno", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "per_apellido_materno", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "tusu_descripcion", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fila"], "fich_fch_trx", array()), "html", null, true);
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </tbody>
    </table>
    ";
        } else {
            // line 35
            echo "      <thead class=\"thead-light\">
        <tr>
          <th colspan=\"6\">SIN MOVIMIENTOS</th>
        </tr>
      </thead>
    </table>
  ";
        }
        // line 42
        echo "
";
    }

    // line 44
    public function block_piePagina($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "leerArchivos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  130 => 42,  121 => 35,  116 => 32,  108 => 30,  104 => 29,  96 => 28,  90 => 27,  86 => 26,  82 => 25,  79 => 24,  75 => 23,  72 => 22,  70 => 21,  53 => 6,  50 => 5,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Bienvenido@{% endblock title %}
{% block invar %} {{parent()}}
{% endblock invar %}
{% block contenido %}

<h1> Histórico: Carga de archivos <hr></h1>

<table class=\"table\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Archivo</th>
      <th scope=\"col\">Rut</th>
      <th scope=\"col\">Nombre</th>
      <th scope=\"col\">Usuario</th>
      <th scope=\"col\">Fecha modificación</th>
    </tr>
  </thead>
  <cwd>
    {% if cantFilas > 0 %}
      <tbody>
      {% for fila in filas %}
        <tr>
          <th>{{ fila.fich_id }}</th>
          <td>{{ fila.fich_nombre }}</td>
          <td>{{ fila.per_rut }}-{{ fila.per_digito_verificador }}</td>
          <td>{{ fila.per_nombre }} {{ fila.per_apellido_paterno }} {{ fila.per_apellido_materno }}</td>
          <td>{{ fila.tusu_descripcion }}</td>
          <td>{{ fila.fich_fch_trx }}</td>
    {% endfor %}
      </tbody>
    </table>
    {% else %}
      <thead class=\"thead-light\">
        <tr>
          <th colspan=\"6\">SIN MOVIMIENTOS</th>
        </tr>
      </thead>
    </table>
  {% endif %}

{% endblock contenido %}
{% block piePagina %}
{% endblock piePagina %}
", "leerArchivos.html.twig", "/var/www/WSE/views/leerArchivos.html.twig");
    }
}
