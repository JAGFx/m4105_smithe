<?php

	/*
	 * Fichier : MarqueController.php
	 * Auteur: SMITH Emmanuel
	 * Création: 04/03/2016
	 * Modification: 01/04/2016
	 *
	 * Controôleur pour la gestion des entitiés Marques
	 */

	namespace s4smithe\VitrineBundle\Controller;

	use s4smithe\VitrineBundle\Entity\Marque;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Marque controller.
	 *
	 */
	class MarqueController extends Controller {

		/**
		 * Lists all Marque entities.
		 *
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$marques = $em->getRepository( 's4smitheVitrineBundle:Marque' )->findAll();

			return $this->render(
				's4smitheVitrineBundle:Marque:index.html.twig', array(
					'marques' => $marques,
				)
			);
		}

		/**
		 * Creates a new Marque entity.
		 *
		 */
		public function newAction( Request $request ) {
			$marque = new Marque();
			$form = $this->createForm( 's4smithe\VitrineBundle\Form\Type\MarqueType', $marque );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $marque );
				$em->flush();

				return $this->redirectToRoute( 'marque_show', array( 'id' => $marque->getId() ) );
			}

			return $this->render(
				's4smitheVitrineBundle:Marque:new.html.twig', array(
					'marque' => $marque,
					'form'   => $form->createView(),
				)
			);
		}

		/**
		 * Finds and displays a Marque entity.
		 *
		 */
		public function showAction( Marque $marque ) {
			$deleteForm = $this->createDeleteForm( $marque );

			return $this->render(
				's4smitheVitrineBundle:Marque:show.html.twig', array(
					'marque'      => $marque,
					'delete_form' => $deleteForm->createView(),
				)
			);
		}

		/**
		 * Displays a form to edit an existing Marque entity.
		 *
		 */
		public function editAction( Request $request, Marque $marque ) {
			$deleteForm = $this->createDeleteForm( $marque );
			$editForm = $this->createForm( 's4smithe\VitrineBundle\Form\Type\MarqueType', $marque );
			$editForm->handleRequest( $request );

			if ( $editForm->isSubmitted() && $editForm->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $marque );
				$em->flush();

				return $this->redirectToRoute( 'marque_edit', array( 'id' => $marque->getId() ) );
			}

			return $this->render(
				's4smitheVitrineBundle:Marque:edit.html.twig', array(
					'marque'      => $marque,
					'edit_form'   => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
				)
			);
		}

		/**
		 * Deletes a Marque entity.
		 *
		 */
		public function deleteAction( Request $request, Marque $marque ) {
			$form = $this->createDeleteForm( $marque );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->remove( $marque );
				$em->flush();
			}

			return $this->redirectToRoute( 'marque_index' );
		}
		
		
		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function listeMarqueAction() {
			$marques = $this->findAllMarque();
			
			return $this->render(
				's4smitheVitrineBundle:Marque:listeMarque.html.twig', array(
				'marques' => $marques
				)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function listeMarqueFooterAction() {
			$marques = $this->findAllPopular();
			
			return $this->render(
				's4smitheVitrineBundle:Marque:listeMarquesFooter.html.twig', array(
				'marques' => $marques
				)
			);
		}
		
		/**
		 * @param $markId
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function articlesParMarqueAction( $markId ) {
			$markObj = $this->findMarque( $markId );

			return $this->render(
				's4smitheVitrineBundle:Product:articlesParFiltre.html.twig', array(
				'filter' => $markObj
				)
			);
		}

		
		/**
		 * @param int $limit
		 *
		 * @return array
		 */
		private function findAllMarque() {
			
			$marques = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Marque' )
				->findAllOrderedByName();
			
			if ( !$marques ) {
				throw $this->createNotFoundException( 'Produit non trouvé avec id ' );
			}
			
			return $marques;
		}

		/**
		 * @return array
		 */
		private function findAllPopular() {

			$marques = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Marque' )
				->findAllPopular();

			if ( !$marques ) {
				throw $this->createNotFoundException( 'Produit non trouvé avec id ' );
			}

			return $marques;
		}
		
		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		private function findMarque( $id ) {
			$mark = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Marque' )
				->findOneById( $id );
			
			if ( !$mark ) {
				throw $this->createNotFoundException( 'Produit non trouvé avec id ' . $id );
			}
			
			return $mark;
		}
		
		
		/**
		 * Creates a form to delete a Marque entity.
		 *
		 * @param Marque $marque The Marque entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm( Marque $marque ) {
			return $this->createFormBuilder()
				->setAction( $this->generateUrl( 'marque_delete', array( 'id' => $marque->getId() ) ) )
				->setMethod( 'DELETE' )
				->getForm();
		}

	}
