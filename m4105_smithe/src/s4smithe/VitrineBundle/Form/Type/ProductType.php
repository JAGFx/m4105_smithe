<?php

	/*
	 * Fichier : ProductType.php
	 * Auteur: SMITH Emmanuel
	 * Création: 08/03/2016
	 * Modification: 22/03/2016
	 *
	 * Form builder pour l'entitée Product
	 */

	namespace s4smithe\VitrineBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\FileType;
	use Symfony\Component\Form\Extension\Core\Type\MoneyType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;

	/**
	 * Class ProductType
	 *
	 * @package s4smithe\VitrineBundle\Form\Type
	 */
	class ProductType extends AbstractType {
		/**
		 * @param FormBuilderInterface $builder
		 * @param array                $options
		 */
		public function buildForm( FormBuilderInterface $builder, array $options ) {
			$builder
				->add( 'name', null, array( 'label' => 'Nom' ) )
				->add( 'file', FileType::class, array( 'label' => 'Photo', 'required' => false ) )
				->add(
					'price', MoneyType::class,
					array( 'label' => 'Prix Unitaire', 'grouping' => true )
				)
				->add( 'stock', null, array( 'label' => 'Quantité en stock' ) )
				->add( 'description', null, array( 'label' => 'Description' ) )
				->add( 'category', null, array( 'label' => 'Catégorie associé' ) )
				->add( 'marque', null, array( 'label' => 'Marque' ) );
		}

		/**
		 * @param OptionsResolver $resolver
		 */
		public function configureOptions( OptionsResolver $resolver ) {
			$resolver->setDefaults(
				array(
					'data_class' => 's4smithe\VitrineBundle\Entity\Product'
				)
			);
		}
	}
