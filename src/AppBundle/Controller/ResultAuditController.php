<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Process\Process;

use AppBundle\Entity\Product;
use AppBundle\Entity\ProductParameter;
use AppBundle\Entity\Server;
use AppBundle\Entity\Environment;






class ResultAuditController extends Controller {

    /**
     * TODO ADD PARAMETERS Server, environment, parameter
     * @Route("/audit/check", name="audit_check")
     */
    public function auditCheckListAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->find('1');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find('1');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $environment = $repository->find('1');

        $folder_of_custom_ssh = '/var/www/html/symfony/envMan/.ssh';
        $ip_server = '172.18.50.229';
        $user_environment = 'pf1';
        $command = 'gcc -v';
        $process = new Process('/usr/bin/ssh -i "'.$folder_of_custom_ssh.'" '.$user_environment.'@'.$ip_server.' "'.$command.'"');

        $pid = $process->run();
        //getOutput
        //getErrorOutput
        
        
        
        return new Response('<html><body>Hello '.$process->getErrorOutput().'!</body></html>');
        
        
        
    }

}

