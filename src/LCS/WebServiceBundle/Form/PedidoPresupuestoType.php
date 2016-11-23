<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 15/06/2016
 * Time: 09:37 PM
 */

namespace LCS\WebServiceBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PedidoPresupuestoType extends AbstractType
{


	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('email', 'text')
			->add('mensaje', 'text')
			->add('imagen', 'file');
	}


	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			                       'data_class'      => 'LCS\ServicioBundle\Model\PedidoPresupuesto',
			                       'csrf_protection' => false
		                       ));
	}

	/**
	 * Returns the name of this type.
	 *
	 * @return string The name of this type
	 */
	public function getName()
	{
		return "lcs_webservice_pedidopresupuesto";
	}
}