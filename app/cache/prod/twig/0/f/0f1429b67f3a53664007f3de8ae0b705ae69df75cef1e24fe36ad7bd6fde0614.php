<?php

/* LCSAppBundle:Default:consulta_ot.html.twig */
class __TwigTemplate_0f1429b67f3a53664007f3de8ae0b705ae69df75cef1e24fe36ad7bd6fde0614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LCSAppBundle:Default:consulta_ot.html.twig", 1);
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

        ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@LCSApp/Template/Message/success.html.twig", array("message" => (isset($context["message"]) ? $context["message"] : null)), false);
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <form id=\"form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lcs_app.default.consultaotsend");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>

            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </form>
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
        return "LCSAppBundle:Default:consulta_ot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  90 => 25,  87 => 24,  79 => 25,  76 => 24,  72 => 22,  69 => 21,  66 => 20,  56 => 13,  51 => 11,  47 => 10,  44 => 9,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
