<?php

	namespace s4smithe\VitrineBundle\Controller;

	use s4smithe\VitrineBundle\Entity\Category;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

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

			return $this->render(
				's4smitheVitrineBundle:Category:index.html.twig', array(
					'categories' => $categories,
			));
		}
		
		/**
		 * Creates a new Category entity.
		 *
		 */
		public function newAction(Request $request) {
			$category = new Category();
			$form = $this->createForm('s4smithe\VitrineBundle\Form\Type\CategoryType', $category);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();

				return $this->redirectToRoute( '', array( 'id' => $category->getId() ) );
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
			$editForm = $this->createForm('s4smithe\VitrineBundle\Form\Type\CategoryType', $category);
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

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function listeCategorieAction() {
			$categories = $this->findAllCtge();

			return $this->render(
				's4smitheVitrineBundle:Category:listeCategorie.html.twig', array(
				'categories' => $categories
			)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function listeCategorieFooterAction() {
			$categories = $this->findAllCtge();

			return $this->render(
				's4smitheVitrineBundle:Category:listeCategorieFooter.html.twig', array(
				'categories' => $categories
			)
			);
		}

		/**
		 * @param $catId
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function articlesParCategorieAction( $catId ) {
			$catObj = $this->findCtge( $catId );

			return $this->render(
				's4smitheVitrineBundle:Default:articlesParFiltre.html.twig', array(
				'filter' => $catObj
			)
			);
		}


		/**
		 * @return array
		 */
		private function findAllCtge() {
			$ctges = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Category' )
				->findAllOrderedByName();

			if ( !$ctges ) {
				throw $this->createNotFoundException( 'Produit non trouvé avec id ' );
			}

			return $ctges;
		}


		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		private function findCtge( $id ) {
			$ctge = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Category' )
				->findOneById( $id );

			if ( !$ctge ) {
				throw $this->createNotFoundException( 'Produit non trouvé avec id ' . $id );
			}

			return $ctge;
		}

	}
