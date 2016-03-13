<?php

	namespace s4smithe\VitrineBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;

	/**
	 * Class MarqueType
	 *
	 * @package s4smithe\VitrineBundle\Form
	 */
	class MarqueType extends AbstractType {
		/**
		 * @param FormBuilderInterface $builder
		 * @param array                $options
		 */
		public function buildForm( FormBuilderInterface $builder, array $options ) {
			$builder->add( 'name' );
		}

		/**
		 * @param OptionsResolver $resolver
		 */
		public function configureOptions( OptionsResolver $resolver ) {
			$resolver->setDefaults(
				array(
					'data_class' => 's4smithe\VitrineBundle\Entity\Marque'
				)
			);
		}
	}
