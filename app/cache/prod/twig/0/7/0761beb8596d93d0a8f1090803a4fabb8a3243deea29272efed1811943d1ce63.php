<?php

/* @LCSApp/Template/Message/success.html.twig */
class __TwigTemplate_0761beb8596d93d0a8f1090803a4fabb8a3243deea29272efed1811943d1ce63 extends Twig_Template
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
        echo "<div class=\"alert alert-success\" role=\"alert\">";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@LCSApp/Template/Message/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
