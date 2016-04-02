<?php

	/*
	 * Fichier : ProductController.php
	 * Auteur: SMITH Emmanuel
	 * Création: 08/03/2016
	 * Modification: 01/04/2016
	 *
	 * Controôleur pour la gestion des entitées Products (Artilces)
	 */

	namespace s4smithe\VitrineBundle\Controller;

	use s4smithe\VitrineBundle\Entity\Product;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Filesystem\Filesystem;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Product controller.
	 *
	 */
	class ProductController extends Controller {

		const PATH_UPLOAD = '/../web/uploads/products';

		/**
		 * Lists all Product entities.
		 *
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$products = $em->getRepository( 's4smitheVitrineBundle:Product' )->findAllOrderedByName();

			return $this->render(
				's4smitheVitrineBundle:Product:index.html.twig', array(
					'products' => $products,
				)
			);
		}

		/**
		 * Creates a new Product entity.
		 *
		 */
		public function newAction( Request $request ) {
			$product = new Product();
			$form = $this->createForm( 's4smithe\VitrineBundle\Form\Type\ProductType', $product );

			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();

				$file = $product->getFile();

				if ( !empty( $file ) ) {
					$em->persist( $product );
					$fileName = $product->getId() . '.' . $file->guessExtension();

					$imageDir = $this->container->getParameter(
							'kernel.root_dir'
						) . ProductController::PATH_UPLOAD;
					$file->move( $imageDir, $fileName );

					$product->setImage( $fileName );
				}

				$em->persist( $product );
				$em->flush();

				return $this->redirectToRoute( 'product_show', array( 'id' => $product->getId() ) );
			}

			return $this->render(
				's4smitheVitrineBundle:Product:new.html.twig', array(
					'product' => $product,
					'form'    => $form->createView(),
				)
			);
		}

		/**
		 * Finds and displays a Product entity.
		 *
		 */
		public function showAction( Product $product ) {
			$deleteForm = $this->createDeleteForm( $product );

			return $this->render(
				's4smitheVitrineBundle:Product:show.html.twig', array(
					'product'     => $product,
					'delete_form' => $deleteForm->createView(),
				)
			);
		}

		/**
		 * Displays a form to edit an existing Product entity.
		 *
		 */
		public function editAction( Request $request, Product $product ) {
			$deleteForm = $this->createDeleteForm( $product );
			$deleteImageForm = $this->createDeleteImageForm( $product );
			$editForm = $this->createForm( 's4smithe\VitrineBundle\Form\Type\ProductType', $product );
			$editForm->handleRequest( $request );

			if ( $editForm->isSubmitted() && $editForm->isValid() ) {
				$em = $this->getDoctrine()->getManager();

				$file = $product->getFile();

				if ( !empty( $file ) ) {
					$fileName = $product->getId() . '.' . $file->guessExtension();

					$imageDir = $this->container->getParameter(
							'kernel.root_dir'
						) . ProductController::PATH_UPLOAD;
					$file->move( $imageDir, $fileName );

					$product->setImage( $fileName );
				}

				$em->persist( $product );
				$em->flush();

				$message = array(
					'type'    => 'success',
					'title'   => "Article modifié",
					'message' => 'L\'article à bien été modifié'
				);

				$this->getRequest()->getSession()->getFlashBag()->add( 'message', $message );

				return $this->redirectToRoute( 'product_edit', array( 'id' => $product->getId() ) );
			}

			return $this->render(
				's4smitheVitrineBundle:Product:edit.html.twig', array(
					'product'           => $product,
					'edit_form'         => $editForm->createView(),
					'delete_form'       => $deleteForm->createView(),
					'delete_image_form' => $deleteImageForm->createView()
				)
			);
		}

		/**
		 * Deletes a Product entity.
		 *
		 */
		public function deleteAction( Request $request, Product $product ) {
			$form = $this->createDeleteForm( $product );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$fs = new Filesystem();
				$image = $this->container->getParameter(
						'kernel.root_dir'
					) . ProductController::PATH_UPLOAD . '/' . $product->getImage();
				$fs->remove( array( $image ) );

				$em = $this->getDoctrine()->getManager();
				$em->remove( $product );
				$em->flush();
			}

			return $this->redirectToRoute( 'product_index' );
		}

		/**
		 * @param Request $request
		 * @param Product $product
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function deleteImageAction( Request $request, Product $product ) {
			$form = $this->createDeleteImageForm( $product );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {

				if ( !empty( $product->getImage() ) ) {
					$fs = new Filesystem();
					$image = $this->container->getParameter(
							'kernel.root_dir'
						) . ProductController::PATH_UPLOAD . '/' . $product->getImage();
					$fs->remove( array( $image ) );

					$em = $this->getDoctrine()->getManager();
					$product->setImage();
					$em->flush();

					$message = array(
						'type'    => 'success',
						'title'   => "Image supprimé",
						'message' => 'L\'image à bien été supprimié'
					);

					$this->getRequest()->getSession()->getFlashBag()->add( 'message', $message );
				}
			}

			return $this->redirectToRoute( 'product_edit', array( 'id' => $product->getId() ) );
		}

		/**
		 * Creates a form to delete a Product entity.
		 *
		 * @param Product $product The Product entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm( Product $product ) {
			return $this->createFormBuilder()
				->setAction(
					$this->generateUrl( 'product_delete', array( 'id' => $product->getId() ) )
				)
				->setMethod( 'DELETE' )
				->getForm();
		}

		/**
		 * @param Product $product
		 *
		 * @return \Symfony\Component\Form\Form
		 */
		private function createDeleteImageForm( Product $product ) {
			return $this->createFormBuilder()
				->setAction(
					$this->generateUrl( 'product_delete_image', array( 'id' => $product->getId() ) )
				)
				->setMethod( 'DELETE' )
				->getForm();
		}

	}
