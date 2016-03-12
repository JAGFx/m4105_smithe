<?php

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

			$marques = $em->getRepository('s4smitheVitrineBundle:Marque')->findAll();

			return $this->render('marque/index.html.twig', array(
					'marques' => $marques,
			));
		}

		/**
		 * Creates a new Marque entity.
		 *
		 */
		public function newAction(Request $request) {
			$marque = new Marque();
			$form = $this->createForm('s4smithe\VitrineBundle\Form\MarqueType', $marque);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($marque);
				$em->flush();

				return $this->redirectToRoute('marque_show', array('id' => $marque->getId()));
			}

			return $this->render('marque/new.html.twig', array(
					'marque' => $marque,
					'form' => $form->createView(),
			));
		}

		/**
		 * Finds and displays a Marque entity.
		 *
		 */
		public function showAction(Marque $marque) {
			$deleteForm = $this->createDeleteForm($marque);

			return $this->render('marque/show.html.twig', array(
					'marque' => $marque,
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Displays a form to edit an existing Marque entity.
		 *
		 */
		public function editAction(Request $request, Marque $marque) {
			$deleteForm = $this->createDeleteForm($marque);
			$editForm = $this->createForm('s4smithe\VitrineBundle\Form\MarqueType', $marque);
			$editForm->handleRequest($request);

			if ($editForm->isSubmitted() && $editForm->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($marque);
				$em->flush();

				return $this->redirectToRoute('marque_edit', array('id' => $marque->getId()));
			}

			return $this->render('marque/edit.html.twig', array(
					'marque' => $marque,
					'edit_form' => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Deletes a Marque entity.
		 *
		 */
		public function deleteAction(Request $request, Marque $marque) {
			$form = $this->createDeleteForm($marque);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->remove($marque);
				$em->flush();
			}

			return $this->redirectToRoute('marque_index');
		}
		
		
		
		public function listeMarqueAction() {
			$marques = $this->findAllMarque();
			
			return $this->render('s4smitheVitrineBundle:Marque:listeMarque.html.twig', array(
				'marques' => $marques
			));
		}

		public function listeMarqueFooterAction() {
			$marques = $this->findAllMarque( 5 );
			
			return $this->render('s4smitheVitrineBundle:Marque:listeMarquesFooter.html.twig', array(
				'marques' => $marques
			));
		}
		
		public function articlesParMarqueAction( $markId ) {
			$markObj = $this->findMarque($markId);
			
			return $this->render('s4smitheVitrineBundle:Default:articlesParFiltre.html.twig', array(
				'filter' => $markObj
			));
		}

		
		
		private function findAllMarque( $limit = -1 ){
			
			$marque = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Marque')
				->findAllOrderedByName( $limit );
			
			if (!$marque) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $marque;
		}
		
		private function findMarque($id){
			$mark = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Marque')
				->findOneById($id);
			
			if (!$mark) {
				throw $this->createNotFoundException('Produit non trouvé avec id ' . $id);
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
		private function createDeleteForm(Marque $marque) {
			return $this->createFormBuilder()
					->setAction($this->generateUrl('marque_delete', array('id' => $marque->getId())))
					->setMethod('DELETE')
					->getForm()
			;
		}

	}
	