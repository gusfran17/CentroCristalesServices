<?php

namespace LCS\WebServiceBundle\Controller;

use LCS\WebServiceBundle\Form\PedidoPresupuestoType;
use LCS\ServicioBundle\Model\PedidoPresupuesto;
use LCS\ServicioBundle\Service\PedidoPresupuestoService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/v1")
 */
class V1Controller extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
    	$data = array();
    	$data['status'] = 0;
		$data['mensaje'] = "Index";
        return $data;
    }


	/**
	 * @Route("/sendpedidopresupuesto")
	 * @param Request $request
	 * @Method({"POST"})
	 * @return JsonResponse
	 */
	public function sendPedidoPresupuesto(Request $request){

		$data = array();

		try {
			$pedido = new PedidoPresupuesto();

			$form = $this->createForm(new PedidoPresupuestoType(), $pedido);

			$form->submit($request);
			if($form->isValid()) {

				/* @var $pedidoPresupuestoService PedidoPresupuestoService */
				$pedidoPresupuestoService = $this->get('lcs_servicio.service.pedidopresupuesto');

				$pedidoPresupuestoService->sendPedidoPresupuesto($pedido->email, $pedido->mensaje, $pedido->imagen);

				$data['status'] = 0;
				$data['mensaje'] = '';
			}
			else{
				$data['status'] = -1;
				$data['mensaje'] = (string) $form->getErrors(true, false);
			}
		}
		catch(Exception $e) {
			$data['status'] = -1;
			$data['mensaje'] = $e->getMessage();
		}

		return new JsonResponse($data);
	}

	/**
	 * @Route("/sendpedidopresupuestotest")
	 * @param Request $request
	 * @Method({"GET"})
	 * @return JsonResponse
	 */
	public function sendPedidoPresupuestoTest(Request $request){

		$data = array();

		$pedidoPresupuestoService = $this->get('lcs_servicio.service.consultabanner');
		$data['status'] = 100;
		$data['mensaje'] = "Successful Call";
		$data['mensaje2'] = "Successful Call";
	
		return new JsonResponse($data);
	}

}
