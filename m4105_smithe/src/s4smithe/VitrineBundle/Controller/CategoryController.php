<?php

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use s4smithe\VitrineBundle\Entity\Category;
	use s4smithe\VitrineBundle\Form\CategoryType;

	/**
	 * Category controller.
	 *
	 */
	class CategoryController extends Controller {

		/**
		 * Lists all Category entities.
		 *
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$categories = $em->getRepository('s4smitheVitrineBundle:Category')->findAll();

			return $this->render('category/index.html.twig', array(
					'categories' => $categories,
			));
		}
		
		/**
		 * Creates a new Category entity.
		 *
		 */
		public function newAction(Request $request) {
			$category = new Category();
			$form = $this->createForm('s4smithe\VitrineBundle\Form\CategoryType', $category);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();

				return $this->redirectToRoute('category_show', array('id' => $category->getId()));
			}

			return $this->render('category/new.html.twig', array(
					'category' => $category,
					'form' => $form->createView(),
			));
		}

		/**
		 * Finds and displays a Category entity.
		 *
		 */
		public function showAction(Category $category) {
			$deleteForm = $this->createDeleteForm($category);

			return $this->render('category/show.html.twig', array(
					'category' => $category,
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Displays a form to edit an existing Category entity.
		 *
		 */
		public function editAction(Request $request, Category $category) {
			$deleteForm = $this->createDeleteForm($category);
			$editForm = $this->createForm('s4smithe\VitrineBundle\Form\CategoryType', $category);
			$editForm->handleRequest($request);

			if ($editForm->isSubmitted() && $editForm->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();

				return $this->redirectToRoute('category_edit', array('id' => $category->getId()));
			}

			return $this->render('category/edit.html.twig', array(
					'category' => $category,
					'edit_form' => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Deletes a Category entity.
		 *
		 */
		public function deleteAction(Request $request, Category $category) {
			$form = $this->createDeleteForm($category);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->remove($category);
				$em->flush();
			}

			return $this->redirectToRoute('category_index');
		}
		
		
		public function listeCategorieAction() {
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Category:listeCategorie.html.twig', array(
				'categories' => $categories
			));
		}
		
		public function listeCategorieFooterAction() {
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Category:listeCategorieFooter.html.twig', array(
				'categories' => $categories
			));
		}
		
		public function articlesParCategorieAction( $catId ) {
			$catObj = $this->findCtge($catId);
			
			return $this->render('s4smitheVitrineBundle:Default:articlesParFiltre.html.twig', array(
				'filter' => $catObj
			));
		}
		
		
		
		
		

		
		
		private function findAllCtge(){
			$ctges = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findAllOrderedByName();
			
			if (!$ctges) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $ctges;
		}
		
		private function findCtge($id){
			$ctge = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findOneById($id);
			
			if (!$ctge) {
				throw $this->createNotFoundException('Produit non trouvé avec id ' . $id);
			}
			
			return $ctge;
		}
		
		
		/**
		 * Creates a form to delete a Category entity.
		 *
		 * @param Category $category The Category entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm(Category $category) {
			return $this->createFormBuilder()
					->setAction($this->generateUrl('category_delete', array('id' => $category->getId())))
					->setMethod('DELETE')
					->getForm()
			;
		}

	}
	