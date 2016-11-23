<?php

/* LCSWebServiceBundle:V1:pedidoPresupuesto.mail.html.twig */
class __TwigTemplate_308070349104e819dfa706ae803a69559dff6c530684e65e12c533ee382467ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>Se ha enviado el siguiente pedido de presupuesto.</div>
<div>Responda este mail para contestar el pedido.</div>
<br>
<br>
<div>Enviado por: <em>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "</em></div>
<div>Mensaje:</div>
<hr>
<em>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</em>
<hr>";
    }

    public function getTemplateName()
    {
        return "LCSWebServiceBundle:V1:pedidoPresupuesto.mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  25 => 5,  19 => 1,);
    }
}
