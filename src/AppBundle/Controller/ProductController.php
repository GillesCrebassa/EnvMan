<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;

class ProductController extends Controller
{
    /**
     * @Route("/product/", name="product_summary")
     */
    public function productsListAction(Request $request)
    {

        $products = new Product();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAllOrderedByName();

        if (!$products) {
            throw $this->createNotFoundException(
                'No product found'
            );
        }        

        return $this->render('product/list.html.twig', array(
            'products' => $products,
        ));
    }
    
    
    /**
     * @Route("/product/add/", name="product_add")
     */
    
    public function productAddAction(Request $request)
    {

        $products = new Product();
        $form= $this->createForm(new ProductType(), $product);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($products);
                $em->flush();

                $this->addFlash(
                        'success',
                        'Your new product were saved!'
                );            
                return $this->redirectToRoute('product_summary');
            }
            else {
                $this->addFlash(
                        'warning',
                        'some fields are not correct!'
                );                        
            }
        }
        return $this->render('product/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    

    /**
     * @Route("/product/edit/{productId}", name="product_edit")
     */
    
    public function productEditAction($productId,Request $request)
    {
        $product = new Product();
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);
        $form= $this->createForm(new ProductType(), $product);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);        
                $em->flush();
            
                $this->addFlash(
                        'success',
                        'Your product were saved!'
                );  
                return $this->redirectToRoute('product_summary');
            }
        }
        return $this->render('product/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }    
    /**
     * @Route("/product/view/{productId}", name="product_view")
     */
    
    public function productViewAction($productId,Request $request)
    {
        $product = new Product();
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);
        $form= $this->createForm(new ProductType(), $product);

        if ($request->getMethod() == 'POST') {

                return $this->redirectToRoute('product_summary');
        }
        return $this->render('product/view.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/product/delete/{productId}", name="productId_delete")
     */
    public function productDeleteAction($productId,Request $request)
    {
        $product = new Product();
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);
        $form= $this->createForm(new ProductType(), $product);

        if ($request->getMethod() == 'POST') {
            // the validation passed, do something with the $product object
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);        
            $em->flush();

            $this->addFlash(
                    'success',
                    'Your product were saved!'
            );  
            return $this->redirectToRoute('product_summary');
        }
        return $this->render('product/delete.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    
}

