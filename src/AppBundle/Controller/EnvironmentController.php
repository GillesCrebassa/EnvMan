<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Environment;
use AppBundle\Entity\EnvDetails;
use AppBundle\Form\EnvironmentType;
use AppBundle\Entity\EnvDetailsType;
/*
use AppBundle\Form\ProductType;
*/

class EnvironmentController extends Controller
{
    
    
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->redirectToRoute('environment_summary');
    }
    
    
    /**
     * @Route("/environment/", name="environment_summary")
     */
    public function environmentsListAction(Request $request)
    {

        $environments = new Environment();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $environments = $repository->findAllOrderedByName();
/*
        if (!$environments) {
            throw $this->createNotFoundException(
                'No environment found'
            );
        }        
*/
        return $this->render('environment/list.html.twig', array(
            'environments' => $environments,
        ));
    }
    
    
    /**
     * @Route("/environment/add", name="environment_add")
     */
    
    public function environmentAddAction(Request $request)
    {

        $environment = new Environment();
        $form= $this->createForm(new EnvironmentType(), $environment);

        if ($request->getMethod() == 'POST') {        
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($environment);
                $em->flush();

                $this->addFlash(
                        'success',
                        'Your new environment were saved!'
                );            
                return $this->redirectToRoute('environment_summary');
            }
            else {
                $this->addFlash(
                        'warning',
                        'some fields are not correct!'
                );                        
            }
        }
        return $this->render('environment/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    

    /**
     * @Route("/environment/view/{envid}", name="environment_view")
     */
    
    public function environmentViewAction($envid,Request $request)
    {
        $environment = new Environment();
        $environment = $this->getDoctrine()
            ->getRepository('AppBundle:Environment')
            ->find($envid);
        $form= $this->createForm(new EnvironmentType(), $environment);

        
        if (!$environment)
            throw $this->createNotFoundException(
                'No environment linked to this id '.$envid
            );

        if ($request->getMethod() == 'POST') {        
            $form->handleRequest($request);
            
            if ($form->get('save')->isClicked()) {
                return $this->redirectToRoute('environment_summary');
            }
        }
        
        return $this->render('environment/view.html.twig', array(
            'form' => $form->createView(),
        ));
        
        
    }

    /**
     * @Route("/environment/edit/{envid}", name="environment_edit")
     */
    public function environmentEditAction($envid,Request $request)
    {
        $environment = new Environment();
        $environment = $this->getDoctrine()
            ->getRepository('AppBundle:Environment')
            ->find($envid);
        $form= $this->createForm(new EnvironmentType(), $environment);

        
        if (!$environment)
            throw $this->createNotFoundException(
                'No environment linked to this id '.$envid
            );

        if ($request->getMethod() == 'POST') {        
            $form->handleRequest($request);
            
            if ($form->get('save')->isClicked()) {
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($environment);
                    $em->flush();

                    $this->addFlash(
                            'success',
                            'Your new environment were Updated!'
                    );            
                    return $this->redirectToRoute('environment_summary');
                }
                else {
                    $this->addFlash(
                            'warning',
                            'some fields are not correct!'
                    );                        
                }
            }
        }
        
        return $this->render('environment/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
        
    }

    
    /**
     * @Route("/environment/delete/{envid}", name="environment_delete")
     */
    public function environmentDeleteAction($envid,Request $request)
    {
        $environment = new Environment();
        $environment = $this->getDoctrine()
            ->getRepository('AppBundle:Environment')
            ->find($envid);
        $form= $this->createForm(new EnvironmentType(), $environment);

        
        if (!$environment)
            throw $this->createNotFoundException(
                'No environment linked to this id '.$envid
            );

        if ($request->getMethod() == 'POST') {        
            $form->handleRequest($request);
            
            if ($form->get('save')->isClicked()) {
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($environment);
                    $em->flush();

                    $this->addFlash(
                            'success',
                            'Your new environment were Updated!'
                    );            
                    return $this->redirectToRoute('environment_summary');
                }
                else {
                    $this->addFlash(
                            'warning',
                            'some fields are not correct!'
                    );                        
                }
            }
        }
        
        return $this->render('environment/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
        
    }
    
}

