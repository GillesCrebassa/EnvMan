<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ServerCategory;
use AppBundle\Form\ServerCategoryType;

class ServerCategoryController extends Controller
{
    /**
     * @Route("/servercategory/", name="servercategory_summary")
     */
    public function serverCategoryListAction(Request $request)
    {
        $servercategory = new ServerCategory();
        $repository = $this->getDoctrine()->getRepository('AppBundle:ServerCategory');
        $servercategory = $repository->findAllOrderedByName();

/*        
        if (!$servercategory) {
            throw $this->createNotFoundException(
                'No server category found'
            );
        }        
*/
        return $this->render('servercategory/list.html.twig', array(
            'servercategory' => $servercategory,
        ));
    }
    
    
    /**
     * @Route("/servercategory/add/", name="servercategory_add")
     */
    
    public function serverCategoryAddAction(Request $request)
    {

        $servercategory = new ServerCategory();
        $form= $this->createForm(new ServerCategoryType(), $servercategory);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $server object
                $em = $this->getDoctrine()->getManager();
                $em->persist($servercategory);
                $em->flush();

                $this->addFlash(
                        'success',
                        'Your new server category were saved!'
                );            
                return $this->redirectToRoute('servercategory_summary');
            }
            else {
                $this->addFlash(
                        'warning',
                        'some fields are not correct!'
                );                        
            }
        }
        return $this->render('servercategory/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    

    /**
     * @Route("/servercategory/edit/{serverCategoryId}", name="servercategory_edit")
     */
    
    public function serverCategoryEditAction($serverCategoryId,Request $request)
    {
        $logger = $this->get('logger');
        $servercategory = new ServerCategory();
        $servercategory = $this->getDoctrine()
            ->getRepository('AppBundle:ServerCategory')
            ->find($serverCategoryId);
//        var_dump($servercategory->getProduct()->name);
        $logger->info('GCR:before createform');
        $form= $this->createForm(ServerCategoryType::class, $servercategory);
        $logger->info('GCR:after createform');
        
        if ($request->getMethod() == 'POST') {
        $logger->info('GCR:POST YES');
        $logger->info('GCR:request:'.$request);

            $form->handleRequest($request);
        $logger->info('GCR:handleRequest YES');

            if ($form->isValid()) {
        $logger->info('GCR:isValid YES');
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
        $logger->info('GCR:before getdata');
                $servercategory = $form->getData();
        $logger->info('GCR:after getdata');
                $em->persist($servercategory);
        $logger->info('GCR:after persist');
                $em->flush();
        $logger->info('GCR:after flush');
            
                $this->addFlash(
                        'success',
                        'Your server category were saved!'
                );  
                return $this->redirectToRoute('servercategory_summary');
            }
        }
        return $this->render('servercategory/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }    
    /**
     * @Route("/servercategory/view/{serverCategoryId}", name="servercategory_view")
     */
    
    public function serverCategoryViewAction($serverCategoryId,Request $request)
    {
        $servercategory = new ServerCategory();
        $servercategory = $this->getDoctrine()
            ->getRepository('AppBundle:ServerCategory')
            ->find($serverCategoryId);
        $form= $this->createForm(new ServerType(), $servercategory);

        if ($request->getMethod() == 'POST') {
                return $this->redirectToRoute('servercategory_summary');
        }
        return $this->render('servercategory/view.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/servercategory/delete/{serverCategoryId}", name="servercategory_delete")
     */
    public function serverCategoryDeleteAction($serverCategoryId,Request $request)
    {
        $servercategory = new ServerCategory();
        $servercategory = $this->getDoctrine()
            ->getRepository('AppBundle:ServerCategory')
            ->find($serverCategoryId);
        $form= $this->createForm(new ServerCategoryType(), $servercategory);

        if ($request->getMethod() == 'POST') {
            // the validation passed, do something with the $server object
            $em = $this->getDoctrine()->getManager();
            $em->remove($servercategory);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Your server category were removed!'
            );  
            return $this->redirectToRoute('servercategory_summary');
        }
        return $this->render('servercategory/delete.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

