<?php

/* LCSAppBundle:Default:pedido_presupuesto.html.twig */
class __TwigTemplate_3ed6e739369370f0715e0a8419d512389701a388a85f7e3ca34dd11755fe8cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LCSAppBundle:Default:pedido_presupuesto.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo $this->env->getExtension('routing')->getPath("lcs_app.default.pedidopresupuestosend");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\" novalidate>

            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        </form>
    </div>

    <style>
        div.fileinput-preview.thumbnail
        {
            cursor: pointer;
        }
    </style>

";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lcsapp/jasny-bootstrap/css/jasny-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "
    ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7052765_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7052765_0") : $this->env->getExtension('asset')->getAssetUrl("js/7052765_pedido-presupuesto_1.js");
            // line 38
            echo "
    <script src=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
            // asset "7052765_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7052765_1") : $this->env->getExtension('asset')->getAssetUrl("js/7052765_jasny-bootstrap.min_2.js");
            // line 38
            echo "
    <script src=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "7052765"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7052765") : $this->env->getExtension('asset')->getAssetUrl("js/7052765.js");
            // line 38
            echo "
    <script src=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "LCSAppBundle:Default:pedido_presupuesto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  121 => 39,  118 => 38,  110 => 39,  107 => 38,  100 => 39,  97 => 38,  93 => 35,  90 => 34,  87 => 33,  80 => 29,  77 => 28,  74 => 27,  57 => 13,  52 => 11,  48 => 10,  45 => 9,  39 => 7,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
