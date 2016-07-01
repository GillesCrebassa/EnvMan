<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductParameter;
use AppBundle\Form\ProductParameterType;
use AppBundle\Entity\Server;


class ProductParameterController extends Controller {

    /**
     * @Route("/parameter/{productId}", name="parameter_summary")
     */
    public function parameterListAction($productId) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->findAllByProductId($productId);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($productId);

        return $this->render('productparameter/list.html.twig', array(
                    'productparameter' => $productParameter ,
                    'product' => $product,
        ));
    }

    /**
     * @Route("/parameter/{productId}/add", name="parameter_add")
     */
    public function parameterAddAction($productId, Request $request) {
        $productParameter = new ProductParameter();
        $form = $this->createForm(new ProductParameterType(), $productParameter);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($productParameter);
                $em->flush();

                $this->addFlash(
                        'success', 'Your new parameter of an product were saved!'
                );
                return $this->redirectToRoute('parameter_summary', array('productId' => $productId));
            } else {
                $this->addFlash(
                        'warning', 'some fields are not correct!'
                );
            }
        }
        return $this->render('productparameter/add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/parameter/{productId}/view/{parameterId}", name="parameter_view")
     */
    public function parameterViewAction($productId, $parameterId, Request $request) {
        $productParameter = new ProductParameter();
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->find($parameterId);
        $form = $this->createForm(new ProductParameterType(), $productParameter);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {

            if ($form->get('save')->isClicked()) {
                return $this->redirectToRoute('parameter_summary', array('productId' => $productId));
            }
        }
        return $this->render('productparameter/view.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/parameter/{productId}/delete/{parameterId}", name="parameter_delete")
     */
    public function parameterDeleteAction($productId, $parameterId, Request $request) {

        $productParameter = new ProductParameter();
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->find($parameterId);
        $form = $this->createForm(new ProductParameterType(), $productParameter);

        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
        
            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->remove($productParameter);
                $em->flush();

                $this->addFlash(
                        'success', 'Your parameter of an product were removed!'
                );
                return $this->redirectToRoute('parameter_summary', array('productId' => $productId));
            } else {
                $this->addFlash(
                        'warning', 'some fields are not correct!'
                );
            }
        }
        return $this->render('productparameter/delete.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/parameter/{productId}/edit/{parameterId}", name="parameter_edit")
     */
    public function parameterEditAction($productId, $parameterId, Request $request) {
        
        $productParameter = new ProductParameter();
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->find($parameterId);
        $form = $this->createForm(new ProductParameterType(), $productParameter);

        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {

            if ($form->isValid()) {
                // the validation passed, do something with the $author object
                $em = $this->getDoctrine()->getManager();
                $em->persist($productParameter);
                $em->flush();

                $this->addFlash(
                        'success', 'Your parameter of a product were saved!'
                );
                return $this->redirectToRoute('parameter_summary', array('productId' => $productId));
            } else {
                $this->addFlash(
                        'warning', 'some fields are not correct!'
                );
            }
        }
        return $this->render('productparameter/edit.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}

