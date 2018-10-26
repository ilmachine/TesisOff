<?php

/* leerOperaciones.html.twig */
class __TwigTemplate_cc35b14e4253bbac88d4647006b6e5b2292e35f48d63d0e7adf7362319f68b34 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "leerOperaciones.html.twig", 1);
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
<h1> Histórico Operaciones <hr></h1>

<table class=\"table\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Rut</th>
      <th scope=\"col\">Nombre</th>
      <th scope=\"col\">Tipo</th>
      <th scope=\"col\">Operación</th>
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
            $context['_seq'] = twig_ensure_traversable(($context["operaciones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["operacion"]) {
                // line 24
                echo "        <tr>
          <th>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "idRegOperacion", array()), "html", null, true);
                echo "</th>
          <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "per_rut", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "per_dv", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "per_nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "per_ap_pat", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "per_ap_mat", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "tus_desc", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "ope_nombre", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operacion"], "fechaOperacion", array()), "html", null, true);
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operacion'], $context['_parent'], $context['loop']);
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
        return "leerOperaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  130 => 42,  121 => 35,  116 => 32,  108 => 30,  104 => 29,  100 => 28,  92 => 27,  86 => 26,  82 => 25,  79 => 24,  75 => 23,  72 => 22,  70 => 21,  53 => 6,  50 => 5,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Bienvenido@{% endblock title %}
{% block invar %} {{parent()}}
{% endblock invar %}
{% block contenido %}

<h1> Histórico Operaciones <hr></h1>

<table class=\"table\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">id</th>
      <th scope=\"col\">Rut</th>
      <th scope=\"col\">Nombre</th>
      <th scope=\"col\">Tipo</th>
      <th scope=\"col\">Operación</th>
      <th scope=\"col\">Fecha modificación</th>
    </tr>
  </thead>
  <cwd>
    {% if cantFilas > 0 %}
      <tbody>
      {% for operacion in operaciones %}
        <tr>
          <th>{{ operacion.idRegOperacion }}</th>
          <td>{{ operacion.per_rut }}-{{ operacion.per_dv }}</td>
          <td>{{ operacion.per_nom }} {{ operacion.per_ap_pat }} {{ operacion.per_ap_mat }}</td>
          <td>{{ operacion.tus_desc }}</td>
          <td>{{ operacion.ope_nombre }}</td>
          <td>{{ operacion.fechaOperacion }}</td>
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
", "leerOperaciones.html.twig", "/var/www/WSE/views/leerOperaciones.html.twig");
    }
}
