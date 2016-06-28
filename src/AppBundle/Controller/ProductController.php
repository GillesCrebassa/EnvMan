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
    
    public function productAction(Request $request)
    {

        $products = new Product();
        $form= $this->createForm(new ProductType(), $product);

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

//        $form->handleRequest($request);
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
     ** @Route("/product/{productId}", defaults={"productId" = 1}, name="showproduct")
     **/    
/*    
    public function showAction($productId)
    {
        
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->findOneByIdJoinedToCategory($productId);

        $category = $product->getCategory();    
        if (!$category)
            throw $this->createNotFoundException(
                'No category linked to the product '.$productId
            );
//        var_dump(get_class($category));
        $categoryName = $category->getName();
        var_dump('product name: '.$product->getName());
        var_dump('category name: '.$categoryName);
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        // ...
    }    
*/    
    /**
     ** @Route("/showproductsFromCategories/{categoryId}", defaults={ "categoryId" = 1}, name="showcateg")
     **/
    
/*    
    public function showProductsAction($categoryId)
    {
        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find($categoryId);

        $products = $category->getProducts();
        var_dump(get_class($products));
        foreach ($products as $product)
        {
            var_dump ($product->getId().'<br>');
            var_dump ($product->getDescription().'<br>');
        }

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        
        // ...
    }    
    
*/    
    /**
     ** @Route("/testvalidator", name="testvalidator")
     **/        
/*    
    public function testValidatorAction()
    {
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('');

        // relate this product to the category
        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        
        $validator = $this->get('validator');
        
        $errors = $validator->validate($product);

        if (count($errors) > 0) {
        /*
         * Uses a __toString method on the $errors variable which is a
         * ConstraintViolationList object. This gives us a nice string
         * for debugging.
         */
/*    
            $errorsString = (string) $errors;
            var_dump($errorsString);
        }
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        
        // ...
    }    
    
 * 
 */    
    
    
    /**
     ** @Route("/updateProduct", name="updateproduct")
     **/        
/*    
    public function updateAction(Request $request)
    {
        $product = new Product();
        $form= $this->createForm(new ProductType(), $product);

        $category = new Category();
//        $formCategory = $this->createForm(new CategoryType(), $category);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            // the validation passed, do something with the $author object

            return $this->redirectToRoute('homepage');
        }

        return $this->render('product/update.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
*/    
    
    
}

