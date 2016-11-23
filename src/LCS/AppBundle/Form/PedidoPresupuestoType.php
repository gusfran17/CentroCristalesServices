<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 08/07/2016
 * Time: 02:15 PM
 */

namespace LCS\AppBundle\Form;

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
			->add('email', 'text', array(
				'label' => 'Email para respuesta',
				'attr' => array(
					'data-rule-email' => 'true'

				)
			))
			->add('mensaje', 'textarea', array(
				'label' => 'Escriba su mensaje'
			))
			->add('imagen', 'image', array(
				'label' => 'Imagen'
			))
			->add('enviar', 'submit')
		;

	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			                       'data_class' => 'LCS\ServicioBundle\Model\PedidoPresupuesto'
		                       ));
	}

	/**
	 * Returns the name of this type.
	 *
	 * @return string The name of this type
	 */
	public function getName()
	{
		return "lcs_app_pedidopresupuesto";
	}
}