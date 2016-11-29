<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/ws/v1')) {
            // lcs_webservice_v1_index
            if (rtrim($pathinfo, '/') === '/ws/v1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lcs_webservice_v1_index');
                }

                return array (  '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::indexAction',  '_route' => 'lcs_webservice_v1_index',);
            }

            // lcs_webservice_v1_sendpedidopresupuesto
            if ($pathinfo === '/ws/v1/sendpedidopresupuesto') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lcs_webservice_v1_sendpedidopresupuesto;
                }

                return array (  '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::sendPedidoPresupuesto',  '_route' => 'lcs_webservice_v1_sendpedidopresupuesto',);
            }
            not_lcs_webservice_v1_sendpedidopresupuesto:

            // lcs_webservice_v1_bannerimage
            if ($pathinfo === '/ws/v1/bannerimage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lcs_webservice_v1_bannerimage;
                }

                return array (  '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::bannerImage',  '_route' => 'lcs_webservice_v1_bannerimage',);
            }
            not_lcs_webservice_v1_bannerimage:

            // lcs_webservice_v1_bannerlink
            if ($pathinfo === '/ws/v1/bannerlink') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lcs_webservice_v1_bannerlink;
                }

                return array (  '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::bannerLink',  '_route' => 'lcs_webservice_v1_bannerlink',);
            }
            not_lcs_webservice_v1_bannerlink:
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // lcs_app.default.obtenerpedidoservicio
        if (0 === strpos($pathinfo, '/ops') && preg_match('#^/ops/(?P<companiaId>[^/]++)/(?P<siniestro>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lcs_app.default.obtenerpedidoservicio')), array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::obtenerPedidoServicioAction',));
        }

        // lcs_app.default.turnosdisponibles
        if (0 === strpos($pathinfo, '/td') && preg_match('#^/td/(?P<nroOt>[^/]++)/(?P<fechaDesde>[^/]++)/(?P<fechaHasta>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lcs_app.default.turnosdisponibles')), array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::turnosDisponibles',));
        }

        // lcs_app.default.actualizardatos
        if ($pathinfo === '/ad') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_lcs_appdefaultactualizardatos;
            }

            return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::actualizarDatos',  '_route' => 'lcs_app.default.actualizardatos',);
        }
        not_lcs_appdefaultactualizardatos:

        if (0 === strpos($pathinfo, '/pedidopresupuesto')) {
            // lcs_app.default.pedidopresupuesto
            if ($pathinfo === '/pedidopresupuesto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lcs_appdefaultpedidopresupuesto;
                }

                return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::pedidoPresupuestoAction',  '_route' => 'lcs_app.default.pedidopresupuesto',);
            }
            not_lcs_appdefaultpedidopresupuesto:

            // lcs_app.default.pedidopresupuestosend
            if ($pathinfo === '/pedidopresupuestosend') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lcs_appdefaultpedidopresupuestosend;
                }

                return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::pedidoPresupuestoSendAction',  '_route' => 'lcs_app.default.pedidopresupuestosend',);
            }
            not_lcs_appdefaultpedidopresupuestosend:

        }

        if (0 === strpos($pathinfo, '/consultaot')) {
            // lcs_app.default.consultaot
            if ($pathinfo === '/consultaot') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lcs_appdefaultconsultaot;
                }

                return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::consultaOrdenTrabajoAction',  '_route' => 'lcs_app.default.consultaot',);
            }
            not_lcs_appdefaultconsultaot:

            // lcs_app.default.consultaotsend
            if ($pathinfo === '/consultaot') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lcs_appdefaultconsultaotsend;
                }

                return array (  '_controller' => 'LCS\\AppBundle\\Controller\\DefaultController::consultaOrdenTrabajoSendAction',  '_route' => 'lcs_app.default.consultaotsend',);
            }
            not_lcs_appdefaultconsultaotsend:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
