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
     * @Route("/envdetails/{envid}", name="envdetails_summary")
     */
    public function envdetailsListAction($envid)
    {
/*
        $envdetails = new EnvDetails();
        $environment = new Environment();
 */
        $repository = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $envdetails = $repository->findAllByIdJoinedToEnvironment($envid);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $environment = $repository->find($envid);
/*        
        $envdetails = $environment->getEnvDetails();
/*
        if (!$environments) {
            throw $this->createNotFoundException(
                'No environment found'
            );
        }        
*/
/*        
*/
       var_dump('envname'.$environment->getName());
    
        return $this->render('envdetails/list.html.twig', array(
            'envdetails' => $envdetails,
            'environment' => $environment,
        ));


    }
    
    
    /**
     * @Route("/envdetails/{envid}/add", name="envdetails_add")
     */
    
    public function envdetailsAddAction($envid,Request $request)
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
        return $this->render('envdetails/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
}

