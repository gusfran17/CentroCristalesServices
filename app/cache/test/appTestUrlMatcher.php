<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/ws/v1')) {
            // lcs_webservice_v1_index
            if (rtrim($pathinfo, '/') === '/ws/v1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lcs_webservice_v1_index');
                }

                return array (  '_controller' => 'LCS\\WebServiceBundle\\Controller\\V1Controller::indexAction',  '_route' => 'lcs_webservice_v1_index',);
            }

            if (0 === strpos($pathinfo, '/ws/v1/sendpedidopresupuesto')) {
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

            }

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
