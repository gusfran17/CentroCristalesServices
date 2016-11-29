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
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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
        return array();
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
	 * @Route("/bannerimage")
	 * @param Request $request
	 * @Method({"GET"})
	 * @return JsonResponse
	 */
	public function bannerImage(Request $request){

		$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LCSServicioBundle:Banner')->find(1);	
		
		$file = $entity->getFile();

		$response = new Response(stream_get_contents($file));

		$disposition = $response->headers->makeDisposition(
		    ResponseHeaderBag::DISPOSITION_ATTACHMENT,
		    $entity->getFileName()
		);

		// set a HTTP response header
		$response->headers->set('Content-Type', 'image/jpg');
		$response->headers->set('Content-Disposition', $disposition);
		
		return $response;
	}

	/**
	 * @Route("/bannerliink")
	 * @param Request $request
	 * @Method({"GET"})
	 * @return JsonResponse
	 */
	public function bannerLink(Request $request){

		$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LCSServicioBundle:Banner')->find(1);	
		
		$link = $entity->getLink();

		$response = new JsonResponse($link);

		return $response;
	}

}
