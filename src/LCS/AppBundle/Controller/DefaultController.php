<?php

namespace LCS\AppBundle\Controller;

use LCS\AppBundle\Form\ConsultaOtType;
use LCS\AppBundle\Form\PedidoPresupuestoType;
use LCS\AppBundle\Services\DTOs\ActualizarDatosRequest;
use LCS\AppBundle\Services\DTOs\ObtenerPedidoServicioRequest;
use LCS\AppBundle\Services\DTOs\TurnosDisponiblesRequest;
use LCS\ServicioBundle\Model\ConsultaOt;
use LCS\ServicioBundle\Model\PedidoPresupuesto;
use LCS\ServicioBundle\Service\ConsultaOrdenTrabajoService;
use LCS\ServicioBundle\Service\PedidoPresupuestoService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 *
 * @package LCS\AppBundle\Controller
 */
class DefaultController extends BaseController
{
	/**
	 * @Route("/", name="homepage")
	 */
    public function indexAction()
    {
	    $companias = $this->getParameter('lcs_app.companias');
        return $this->render(
	        'LCSAppBundle:Default:index.html.twig',
	        array(
		        'companias' => $companias
	        )
        );
    }

	/**
	 * @Route("/ops/{companiaId}/{siniestro}", name="lcs_app.default.obtenerpedidoservicio", options={"expose"=true},  requirements={"siniestro"=".+"})
	 * @param Request $request
	 * @param         $siniestro
	 * @param         $companiaId
	 * @return JsonResponse
	 */
	public function obtenerPedidoServicioAction(Request $request, $companiaId, $siniestro)
	{
		try {
			$obtenerPedidoRequest = new ObtenerPedidoServicioRequest();
			$obtenerPedidoRequest->setSiniestro($siniestro);
			$obtenerPedidoRequest->setCompaniaId($companiaId);

			$client = $this->get('lcs_app.clients.service1');

			$response = $client->obtenerPedidoServicio($obtenerPedidoRequest);

			return $this->JsonOk($response);
		}
		catch(Exception $e) {
			return $this->JsonError($e->getMessage());
		}
	}

	/**
	 * @Route("/td/{nroOt}/{fechaDesde}/{fechaHasta}", name="lcs_app.default.turnosdisponibles", options={"expose"=true})
	 * @param Request $request
	 * @param         $nroOt
	 * @param         $fechaDesde
	 * @param         $fechaHasta
	 * @return JsonResponse
	 * @internal param $siniestro
	 * @internal param $companiaId
	 */
	public function turnosDisponibles(Request $request, $nroOt, $fechaDesde, $fechaHasta)
	{
		try {
			$turnosDisponiblesRequest = new TurnosDisponiblesRequest();
			$turnosDisponiblesRequest->setNroOt($nroOt);
			$turnosDisponiblesRequest->setFechaDesde($fechaDesde);
			$turnosDisponiblesRequest->setFechaHasta($fechaHasta);

			$client = $this->get('lcs_app.clients.service1');

			$response = $client->turnosDisponibles($turnosDisponiblesRequest);

			return $this->JsonOk($response);
		}
		catch(Exception $e) {
			return $this->JsonError($e->getMessage());
		}
	}

	/**
	 * @Route("/ad", name="lcs_app.default.actualizardatos", options={"expose"=true})
	 * @Method({"POST"})
	 * @param Request $request
	 * @return JsonResponse
	 */
	public function actualizarDatos(Request $request)
	{
		try {
			$actualizarDatosRequest = new ActualizarDatosRequest();
			$actualizarDatosRequest->setNroOt($request->get('nroOt'));
			$actualizarDatosRequest->setNombre($request->get('nombre'));
			$actualizarDatosRequest->setPatente($request->get('patente'));
			$actualizarDatosRequest->setCelular($request->get('celular'));
			$actualizarDatosRequest->setTurno($request->get('turno'));

			$client = $this->get('lcs_app.clients.service1');

			$response = $client->actualizarDatos($actualizarDatosRequest);

			return $this->JsonOk($response);
		}
		catch(Exception $e) {
			return $this->JsonError($e->getMessage());
		}
	}


	/**
	 * @Route("/pedidopresupuesto", name="lcs_app.default.pedidopresupuesto")
	 * @Method("GET")
	 */
	public function pedidoPresupuestoAction()
	{
		$form = $this->createForm(new PedidoPresupuestoType());

		return $this->render(
			'LCSAppBundle:Default:pedido_presupuesto.html.twig',
			array(
				'form' => $form->createView()
			)
		);
	}

	/**
	* @Route("/pedidopresupuestosend", name="lcs_app.default.pedidopresupuestosend")
	 * @Method("POST")
	*/
	public function pedidoPresupuestoSendAction(Request $request)
	{
		$pedido = new PedidoPresupuesto();
		$form = $this->createForm(new PedidoPresupuestoType(), $pedido);
		$form->submit($request);
		if($form->isValid()) {

			try {
				/* @var $pedidoPresupuestoService PedidoPresupuestoService */
				$pedidoPresupuestoService = $this->get('lcs_servicio.service.pedidopresupuesto');

				$pedidoPresupuestoService->sendPedidoPresupuesto($pedido->email, $pedido->mensaje, $pedido->imagen);

				return $this->render(
					'LCSAppBundle:Default:pedido_presupuesto.html.twig',
					array(
						'form' => $this->createForm(new PedidoPresupuestoType())->createView(),
						'message' => "El pedido se envío con exito, a la brevedad nos pondremos en contacto con usted"
					)
				);
			}
			catch(\Exception $e) {
				$form->addError(new FormError($e->getMessage()));
			}
		}

		return $this->render(
			'LCSAppBundle:Default:pedido_presupuesto.html.twig',
			array(
				'form' => $form->createView()
			)
		);
	}

	/**
	 * @Route("/consultaot", name="lcs_app.default.consultaot")
	 * @Method("GET")
	 */
	public function consultaOrdenTrabajoAction()
	{
		$form = $this->createForm(new ConsultaOtType());

		return $this->render(
			'LCSAppBundle:Default:consulta_ot.html.twig',
			array(
				'form' => $form->createView()
			)
		);
	}

	/**
	 * @Route("/consultaot", name="lcs_app.default.consultaotsend")
	 * @Method("POST")
	 */
	public function consultaOrdenTrabajoSendAction(Request $request)
	{
		$mensajes = $this->getParameter('lcs_app.mensajes.estado_ot');
		$mensaje = '';

		$consultaOt = new \LCS\AppBundle\Model\ConsultaOt();
		$form = $this->createForm(new ConsultaOtType(), $consultaOt);
		$form->submit($request);
		if($form->isValid()) {

			try {

				/* @var ConsultaOrdenTrabajoService $consultaOtService */
				$consultaOtService = $this->get('lcs_servicio.service.consultaordentrabajo');

				$ordenTrabajo = $consultaOtService->consultaOrdenTrabajo($consultaOt->ordenTrabajo, $consultaOt->dominio);

				if($ordenTrabajo->estado == 0){
					$mensaje = $mensajes[$ordenTrabajo->ordenTrabajo->estado];
				}
				else{
					$mensaje = $mensajes["NOENCONTRADA"];
				}
			}
			catch(\Exception $e) {
				$mensaje = "Ocurrió un error: [".$e->getMessage()."]";
			}
		}

		return $this->render(
			'LCSAppBundle:Default:consulta_ot_resultado.html.twig',
			array(
				'descripcion_estado' => $mensaje
			)
		);
	}
}
