<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'lcs_webservice_v1_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ws/v1/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_webservice_v1_sendpedidopresupuesto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::sendPedidoPresupuesto',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ws/v1/sendpedidopresupuesto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_webservice_v1_bannerimage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::bannerImage',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ws/v1/bannerimage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_webservice_v1_bannerlink' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::bannerLink',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ws/v1/bannerlink',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.obtenerpedidoservicio' => array (  0 =>   array (    0 => 'companiaId',    1 => 'siniestro',  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::obtenerPedidoServicioAction',  ),  2 =>   array (    'siniestro' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'siniestro',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'companiaId',    ),    2 =>     array (      0 => 'text',      1 => '/ops',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.turnosdisponibles' => array (  0 =>   array (    0 => 'nroOt',    1 => 'fechaDesde',    2 => 'fechaHasta',  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::turnosDisponibles',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fechaHasta',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fechaDesde',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nroOt',    ),    3 =>     array (      0 => 'text',      1 => '/td',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.actualizardatos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::actualizarDatos',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.pedidopresupuesto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::pedidoPresupuestoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedidopresupuesto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.pedidopresupuestosend' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::pedidoPresupuestoSendAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedidopresupuestosend',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.consultaot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::consultaOrdenTrabajoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultaot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lcs_app.default.consultaotsend' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::consultaOrdenTrabajoSendAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultaot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
