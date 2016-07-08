<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Process\Process;
use \Symfony\Component\Process\Exception\ProcessFailedException;


use Ssh;
use Ssh\SshConfigFileConfiguration;
use Ssh\Session;

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
        $root_dir = $this->container->getParameter('kernel.root_dir');
        $ssh_dir = $root_dir.'/../ssh';
        
        
        
/*       
        if (!file_exists($ssh_dir) && !is_dir($ssh_dir)) {
            mkdir($ssh_dir);
            chmod($ssh_dir, 0700);
            $command = '/usr/bin/ssh-keygen -t rsa -C "your_email@example.com" -P "" -f '.$ssh_dir.'/id_rsa';
            $process = new Process($command);
            $pid = $process->run();
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
 * 
 */
/*            
            $command = 'ssh-add '.$ssh_dir.'/id_rsa';
            $process = new Process($command);
            $pid = $process->run();            
*/            

/*        
            $command = 'ssh-copy-id '.$ssh_dir.'/id_rsa.pub pf1@cw1902';
            $process = new Process($command);
            $pid = $process->run();
//            if (!$process->isSuccessful()) {
//                throw new ProcessFailedException($process);
//            }
            
            
        }
/*
        $folder_of_custom_ssh = '/var/www/html/symfony/envMan/.ssh';
        $ip_server = '172.18.50.229';
        $user_environment = 'pf1';
        $command = 'gcc -v';
        $process = new Process('/usr/bin/ssh -i "'.$ssh_dir.'" '.$user_environment.'@'.$ip_server.' "'.$command.'"');

        $pid = $process->run();
        //getOutput
        //getErrorOutput
 */       
        $ssh_remote_home_dir = '/home/pff/em/';
        $scripts_local_dir = $root_dir.'/../scripts';
        $ssh_local_script_path = $scripts_local_dir.'/em_os.sh';
        $ssh_remote_script_path = $ssh_remote_home_dir.'/em_os.sh';
        $configuration = new Ssh\Configuration('ip');
        $authentication = new Ssh\Authentication\Password('user', 'pass');
        $session = new Session($configuration, $authentication);
        $sftp = $session->getSftp();
        $sftp->mkdir($ssh_remote_home_dir);
        $sftp->send($ssh_local_script_path, $ssh_remote_script_path);
        $sftp->chmod($ssh_remote_script_path, 0700);
        $exec = $session->getExec();
        $result =  $exec->run($ssh_remote_script_path, null, array(), 80, 25, SSH2_TERM_UNIT_CHARS,1);

//        return new Response('<html><body>Hello '.$process->getErrorOutput().' : root_dir:'.$ssh_dir.': command:'.$command.' result : '.$result.' !</body></html>');
        return new Response('<html><body>Hello result : '.$result.' !</body></html>');
        
        
        
    }

}

