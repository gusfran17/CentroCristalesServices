<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cbbfe709f228bb963598a1781f2b446942f0956a03b28e49985f4aae7960e01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_351224d3cdcb0637dbd3e8a113dbba2bde49343045399217fe89538b16e37816 = $this->env->getExtension("native_profiler");
        $__internal_351224d3cdcb0637dbd3e8a113dbba2bde49343045399217fe89538b16e37816->enter($__internal_351224d3cdcb0637dbd3e8a113dbba2bde49343045399217fe89538b16e37816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351224d3cdcb0637dbd3e8a113dbba2bde49343045399217fe89538b16e37816->leave($__internal_351224d3cdcb0637dbd3e8a113dbba2bde49343045399217fe89538b16e37816_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_215e3abc9eddfb9e3c066a000e633704587442138ead31547db31dc864126682 = $this->env->getExtension("native_profiler");
        $__internal_215e3abc9eddfb9e3c066a000e633704587442138ead31547db31dc864126682->enter($__internal_215e3abc9eddfb9e3c066a000e633704587442138ead31547db31dc864126682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_215e3abc9eddfb9e3c066a000e633704587442138ead31547db31dc864126682->leave($__internal_215e3abc9eddfb9e3c066a000e633704587442138ead31547db31dc864126682_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4687fb9df7b08147568dd754063dcf586d1c614e7b6068d18255c1176008088d = $this->env->getExtension("native_profiler");
        $__internal_4687fb9df7b08147568dd754063dcf586d1c614e7b6068d18255c1176008088d->enter($__internal_4687fb9df7b08147568dd754063dcf586d1c614e7b6068d18255c1176008088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4687fb9df7b08147568dd754063dcf586d1c614e7b6068d18255c1176008088d->leave($__internal_4687fb9df7b08147568dd754063dcf586d1c614e7b6068d18255c1176008088d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dc71f11c413b7a7a1605223cd77feff285a5408a800ce658cd3a03b19454b2c = $this->env->getExtension("native_profiler");
        $__internal_9dc71f11c413b7a7a1605223cd77feff285a5408a800ce658cd3a03b19454b2c->enter($__internal_9dc71f11c413b7a7a1605223cd77feff285a5408a800ce658cd3a03b19454b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9dc71f11c413b7a7a1605223cd77feff285a5408a800ce658cd3a03b19454b2c->leave($__internal_9dc71f11c413b7a7a1605223cd77feff285a5408a800ce658cd3a03b19454b2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
