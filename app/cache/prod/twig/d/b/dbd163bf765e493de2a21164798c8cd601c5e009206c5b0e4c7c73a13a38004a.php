<?php

/* LCSAppBundle:Default:index.html.twig */
class __TwigTemplate_dbd163bf765e493de2a21164798c8cd601c5e009206c5b0e4c7c73a13a38004a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LCSAppBundle:Default:index.html.twig", 1);
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
        echo "
    <div id=\"consulta-main-container\">
        <form id=\"form-consulta-ot\" action=\"dummy\" class=\"form-horizontal\" novalidate>
            <div class=\"form-group\">
               <label for=\"compania\" class=\"col-sm-2 control-label\">Compañía</label>
               <div class=\"col-sm-10\">
                   <select name=\"compania\" id=\"compania\" class=\"form-control\" required>
                       <option value=\"\">Seleccione</option>
                       ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companias"]) ? $context["companias"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["nombre"]) {
            // line 13
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "</option>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                   </select>
               </div>
            </div>
            <div class=\"form-group\">
                <label for=\"siniestro\" class=\"col-sm-2 control-label\">Siniestro</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"siniestro\" id=\"siniestro\" placeholder=\"Número de Siniestro\" required value=\"\">
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" id=\"btn-buscar-pedido\" class=\"btn btn-default\" data-loading-text=\"Buscando...\" disabled>Buscar</button>
                </div>
            </div>
        </form>
        <div id=\"div-datos-pedido-error\" class=\"row\" style=\"display: none\">
            <span id=\"datos-pedido-error\"></span>
        </div>
        <form id=\"form-actualizacion-datos\" action=\"dummy\"  class=\"form-horizontal\" novalidate>
            <div id=\"div-datos-pedido\" style=\"display: none\">
                <span id=\"datos-pedido-info\"></span>
                <div class=\"form-group\">
                    <label for=\"nroOt\" class=\"col-sm-2 control-label\">Número OT</label>
                    <div class=\"col-sm-10\">
                        <p class=\"form-control-static\" name=\"nroOtStatic\" id=\"nroOtStatic\"></p>
                        <input type=\"hidden\" name=\"nroOt\" id=\"nroOt\" value=\"\" >
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"fechaAlta\" class=\"col-sm-2 control-label\">Fecha OT</label>
                    <div class=\"col-sm-10\">
                        <p class=\"form-control-static\" name=\"fechaAltaStatic\" id=\"fechaAltaStatic\"></p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
                    <div class=\"col-sm-10\">
                         <input type=\"text\" class=\"form-control form-datos-ot\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre del cliente\" value=\"\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"patente\" class=\"col-sm-2 control-label\">Patente</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control form-datos-ot\" name=\"patente\" id=\"patente\" placeholder=\"Patente\" value=\"\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"celular\" class=\"col-sm-2 control-label\">Celular</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control form-datos-ot\" name=\"celular\" id=\"celular\" placeholder=\"Celular\" value=\"\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"turnoSeleccionado\" class=\"col-sm-2 control-label\">Turno</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" name=\"turnoSeleccionado\" id=\"turnoSeleccionado\" placeholder=\"Turno\" value=\"\" readonly required>
                        <input type=\"hidden\" class=\"form-control\" name=\"turnoSeleccionadoDate\" id=\"turnoSeleccionadoDate\" placeholder=\"Turno\" value=\"\" readonly>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"sucursal\" class=\"col-sm-2 control-label\">Sucursal</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" name=\"sucursal\" id=\"sucursal\" placeholder=\"Sucursal\" value=\"\" readonly>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"horasEstimadas\" class=\"col-sm-2 control-label\">Horas Estimadas</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" name=\"horasEstimadas\" id=\"horasEstimadas\" placeholder=\">Horas Estimadas\" value=\"\" readonly>
                    </div>
                </div>


                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Consulta de Turnos</label>
                    <div class='col-xs-12 col-sm-offset-2 col-sm-10'>
                        <div class='col-sm-2 col-md-1'>
                            <div class=\"form-group\">
                                <label class=control-label\">Período</label>
                            </div>
                        </div>
                        <div class='col-sm-3'>
                            <div class=\"form-group\">
                                <div class='input-group date' id='turnos-fechadesde'>
                                    <input type='text' class=\"form-control\" />
                                    <span class=\"input-group-addon\">
                                        <span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-3'>
                            <div class=\"form-group\">
                                <div class='input-group date' id='turnos-fechahasta'>
                                    <input type='text' class=\"form-control\" />
                                    <span class=\"input-group-addon\">
                                        <span class=\"glyphicon glyphicon-calendar\"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-2 col-md-1'>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"btn-buscar-turnos\" class=\"btn btn-default\" data-loading-text=\"Consultando...\">Consultar turnos</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"div-turnos-disponibles-container\" class=\"form-group\" >
                    <div id=\"div-turnos-disponibles\" class=\"col-sm-offset-2 col-sm-10\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-4 col-md-2\">
                        <button type=\"submit\" id=\"btn-actualizar-datos\" class=\"btn btn-default\" data-loading-text=\"Confirmando...\">Confirmar Turno</button>
                    </div>
                    <div class=\"col-sm-6 col-md-8\">
                        <div id=\"alert-actualizardatos\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id=\"confirmacion-main-container\" style=\"display: none\">
        <div class=\"page-header hidden-print\">
            <h1>Turno confirmado!<small>&nbsp;&nbsp;Por favor, verifique los datos</small></h1>
        </div>
        <div class=\"page-header visible-print-block\">
            <h1>Confirmación de turno</h1>
        </div>
        <div class=\"row\">
            <div class=\"form-group\">
                <label for=\"nombre\" class=\"col-xs-2 control-label\">Nombre</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-nombre\" id=\"confirm-nombre\"></p>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"patente\" class=\"col-xs-2 control-label\">Patente</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-patente\" id=\"confirm-patente\"></p>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"celular\" class=\"col-xs-2 control-label\">Celular</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-celular\" id=\"confirm-celular\"></p>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"turnoSeleccionado\" class=\"col-xs-2 control-label\">Turno</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-turnoSeleccionado\" id=\"confirm-turnoSeleccionado\"></p>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"sucursal\" class=\"col-xs-2 control-label\">Sucursal</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-sucursal\" id=\"confirm-sucursal\"></p>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"horasEstimadas\" class=\"col-xs-2 control-label\">Horas Estimadas</label>
                <div class=\"col-xs-10\">
                    <p class=\"form-control-static\" name=\"confirm-horasEstimadas\" id=\"confirm-horasEstimadas\"></p>
                </div>
            </div>
            <div class=\"form-group hidden-print\">
                <div class=\"col-xs-offset-2 col-xs-10 align text-left\">
                    <button type=\"button\" id=\"confirm-imprimir\" class=\"btn btn-success\" >Imprimir</button>
                    <button type=\"button\" id=\"confirm-otraConsulta\" class=\"btn btn-default\" >Otra consulta</button>
                </div>
            </div>
        </div>
    </div>


    <script type=\"html/template\" id=\"template-turno-dia\">
        <div class=\"col-xs-12 col-sm-6\">
            <fieldset  style=\"margin-bottom:20px\">
                <legend style=\"margin-bottom:0\"></legend>
                <div class=\"control-group horas-container\"></div>
            </fieldset>
        </div>
    </script>

    <script type=\"html/template\" id=\"template-turno-hora\">
        <label class=\"radio-inline\" style=\"padding: 7px; padding-left: 27px; margin-right: 7px\">
            <input class=\"form-datos-ot\" type=\"radio\" name=\"turno\" value=\"\">
        </label>
    </script>


    <style>
        .bootstrap-datetimepicker-widget table td.disabled,
        .bootstrap-datetimepicker-widget table td.disabled:hover
        {
            color: #efefef;
        }

        .turno-selected{
            color: white;
            font-width: bold;
            background-color: #369536;
        }

    </style>

";
    }

    // line 228
    public function block_javascripts($context, array $blocks = array())
    {
        // line 229
        echo "
    ";
        // line 230
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2e3641e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2e3641e_0") : $this->env->getExtension('asset')->getAssetUrl("js/2e3641e_index_1.js");
            // line 232
            echo "
        <script src=\"";
            // line 233
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        } else {
            // asset "2e3641e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2e3641e") : $this->env->getExtension('asset')->getAssetUrl("js/2e3641e.js");
            // line 232
            echo "
        <script src=\"";
            // line 233
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>

    ";
        }
        unset($context["asset_url"]);
        // line 236
        echo "
";
    }

    public function getTemplateName()
    {
        return "LCSAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 236,  296 => 233,  293 => 232,  285 => 233,  282 => 232,  278 => 230,  275 => 229,  272 => 228,  57 => 15,  46 => 13,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
