<?php

/* LCSAppBundle:Default:consulta_ot_resultado.html.twig */
class __TwigTemplate_360e5ec6cb1799205fed3762b27e10e41d59a3bb626906d079d39c5a5ea40269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LCSAppBundle:Default:consulta_ot_resultado.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"main-container\">

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"jumbotron\">
                    <h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["descripcion_estado"]) ? $context["descripcion_estado"] : null), "html", null, true);
        echo "</h2>
                    <br>
                    <p><a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lcs_app.default.consultaot");
        echo "\" role=\"button\">Hacer otra consulta</a></p>
                </div>
            </div>
        </div>

    </div>

";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "
    ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ea92cd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea92cd9_0") : $this->env->getExtension('asset')->getAssetUrl("js/ea92cd9_consulta-ot_1.js");
            // line 24
            echo "
    <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "ea92cd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea92cd9") : $this->env->getExtension('asset')->getAssetUrl("js/ea92cd9.js");
            // line 24
            echo "
    <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "LCSAppBundle:Default:consulta_ot_resultado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  80 => 25,  77 => 24,  69 => 25,  66 => 24,  62 => 22,  59 => 21,  56 => 20,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
