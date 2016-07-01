<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Server;
use AppBundle\Form\ServerType;

class ServerController extends Controller
{
    /**
     * @Route("/server/", name="server_summary")
     */
    public function serverListAction(Request $request)
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
     * @Route("/server/add/", name="server_add")
     */
    
    public function serverAddAction(Request $request)
    {

        $servers = new Server();
        $form= $this->createForm(new ServerType(), $servers);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $server object
                $em = $this->getDoctrine()->getManager();
                $em->persist($servers);
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
        }
        return $this->render('server/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }    

    /**
     * @Route("/server/edit/{serverId}", name="server_edit")
     */
    
    public function serverEditAction($serverId,Request $request)
    {
        $server = new Server();
        $server = $this->getDoctrine()
            ->getRepository('AppBundle:Server')
            ->find($serverId);
        $form= $this->createForm(new ServerType(), $server);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($server);
                $em->flush();
            
                $this->addFlash(
                        'success',
                        'Your server were saved!'
                );  
                return $this->redirectToRoute('server_summary');
            }
        }
        return $this->render('server/edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }    
    /**
     * @Route("/server/view/{serverId}", name="server_view")
     */
    
    public function serverViewAction($serverId,Request $request)
    {
        $server = new Server();
        $server = $this->getDoctrine()
            ->getRepository('AppBundle:Server')
            ->find($serverId);
        $form= $this->createForm(new ServerType(), $server);

        if ($request->getMethod() == 'POST') {
                return $this->redirectToRoute('server_summary');
        }
        return $this->render('server/view.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/server/delete/{serverId}", name="server_delete")
     */
    public function serverDeleteAction($serverId,Request $request)
    {
        $server = new Server();
        $server = $this->getDoctrine()
            ->getRepository('AppBundle:Server')
            ->find($serverId);
        $form= $this->createForm(new ServerType(), $server);

        if ($request->getMethod() == 'POST') {
            // the validation passed, do something with the $server object
            $em = $this->getDoctrine()->getManager();
            $em->remove($server);
            $em->flush();

            $this->addFlash(
                    'success',
                    'Your server were removed!'
            );  
            return $this->redirectToRoute('server_summary');
        }
        return $this->render('server/delete.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

