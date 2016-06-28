<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Server;
use AppBundle\Form\ServerType;

class ServerController extends Controller
{
    /**
     * @Route("/server/", name="server_summary")
     */
    public function serversListAction(Request $request)
    {

        $servers = new Server();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Server');
        $servers = $repository->findAllOrderedByName();

        if (!$servers) {
            throw $this->createNotFoundException(
                'No server found'
            );
        }        

        return $this->render('server/list.html.twig', array(
            'servers' => $servers,
        ));
    }
    
    
    /**
     * @Route("/server/add", name="server_add")
     */
    
    public function ServerAddAction(Request $request)
    {

        $server = new Server();
        $form= $this->createForm(new ServerType(), $server);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // the validation passed, do something with the $author object
            $em = $this->getDoctrine()->getManager();
            $em->persist($server);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Your new server were saved!'
            );            
            return $this->redirectToRoute('server_summary');
        }
        else {
            $this->addFlash(
                    'warning',
                    'some fields are not correct!'
            );                        
        }
        return $this->render('server/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    
}

