<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Environment;
use AppBundle\Entity\EnvDetails;
use AppBundle\Form\EnvDetailsType;
use AppBundle\Entity\Server;
/*
use AppBundle\Form\ProductType;
*/

class EnvDetailsController extends Controller
{
    /**
     * @Route("/envdetails/{envId}", name="envdetails_summary")
     */
    public function envdetailsListAction($envId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $envdetails = $repository->findAllByIdJoinedToEnvironment($envId);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $environment = $repository->find($envId);
    
        return $this->render('envdetails/list.html.twig', array(
            'envdetails' => $envdetails,
            'environment' => $environment,
        ));
    }


    /**
     * @Route("/envdetails/{envId}/add", name="envdetails_add")
     */
    public function envdetailsAddAction($envId,Request $request)
    {
        $envdetails = new EnvDetails();        
        $form= $this->createForm(new EnvDetailsType(), $envdetails);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($envdetails);
                $em->flush();

                $this->addFlash(
                        'success',
                        'Your new details of an environment were saved!'
                );            
                return $this->redirectToRoute('envdetails_summary', array('envId' => $envId));
    }
            else {
                $this->addFlash(
                        'warning',
                        'some fields are not correct!'
                );
            }
        }
        return $this->render('envdetails/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    
    /**
     * @Route("/envdetails/{envId}/view/{endDetailsId}", name="envdetails_view")
     */
    public function envdetailsViewAction($envId,Request $request)
    {
    
        $envdetails = new EnvDetails();
        $repository = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $envdetails = $repository->findAllByIdJoinedToEnvironment($envId);        
        $form= $this->createForm(new EnvDetailsType(), $envdetails);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->get('save')->isClicked()) {
                return $this->redirectToRoute('envdetails_summary', array('envId' => $envId));
            }
        }
        return $this->render('envdetails/view.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
    /**
     * @Route("/envdetails/{envId}/delete/{endDetailsId}", name="envdetails_delete")
     */
    public function envdetailsDeleteAction($envId,Request $request)
    {

        $envdetails = new envdetails();
        $form= $this->createForm(new EnvDetailsType(), $envdetails);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // the validation passed, do something with the $author object
            $em = $this->getDoctrine()->getManager();
            $em->persist($envdetails);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Your new details of an environment were saved!'
            );            
            return $this->redirectToRoute('envdetails_summary', array('envid' => $envid));
        }
        else {
            $this->addFlash(
                    'warning',
                    'some fields are not correct!'
            );                        
        }
        return $this->render('envdetails/delete.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
}

