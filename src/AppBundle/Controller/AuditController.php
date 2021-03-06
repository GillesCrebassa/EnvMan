<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Process\Process;
use \Symfony\Component\Process\Exception\ProcessFailedException;
use \RuntimeException;
use Ssh;
use Ssh\SshConfigFileConfiguration;
use Ssh\Session;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductParameter;
use AppBundle\Entity\Server;
use AppBundle\Entity\Environment;
use AppBundle\Entity\Audit;

class AuditController extends Controller {

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
        $ssh_dir = $root_dir . '/../ssh';



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
        $scripts_local_dir = $root_dir . '/../scripts';
        $ssh_local_script_path = $scripts_local_dir . '/em_os.sh';
        $ssh_remote_script_path = $ssh_remote_home_dir . '/em_os.sh';
        try {
            $configuration = new Ssh\Configuration('ip');
            $authentication = new Ssh\Authentication\Password('user', 'pass');
            
    
            $session = new Session($configuration, $authentication);
            if ($session != null)
            {
                $sftp = $session->getSftp();
                $sftp->mkdir($ssh_remote_home_dir);
                $sftp->send($ssh_local_script_path, $ssh_remote_script_path);
                $sftp->chmod($ssh_remote_script_path, 0700);
                $exec = $session->getExec();
                $result = $exec->run($ssh_remote_script_path, null, array(), 80, 25, SSH2_TERM_UNIT_CHARS, 1);
            }
        }
        catch (\RuntimeException $e)
        {
            if ($e instanceof HandledErrorException) {
                $e->cleanOutput();
            }
            return new Response('<html><body>Error : ' . $e->getMessage(). ' !</body></html>');
        }

//        return new Response('<html><body>Hello '.$process->getErrorOutput().' : root_dir:'.$ssh_dir.': command:'.$command.' result : '.$result.' !</body></html>');
        return new Response('<html><body>Hello result : ' . $result . ' !</body></html>');
    }

    /**
     * @Route("/audit/environment/{envId}", name="audit_environment_summary",requirements  = { "envId" = "\d+" },)
     */
    public function auditEnvironmentListAction($envId) {
        $dataSummary = [];
        $envdetails = [];
        $repository = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $environment = $repository->findByEnvId($envId);
        if ($environment != null) {
            $envdetails = $environment->getEnvDetails();
            $envName = $environment->getName();
            //        var_dump("environmentName:".$environment->getName());
            foreach ($envdetails as $envdetails_row) {
                //            var_dump("envdetaileId:".$envdetails_row->getId());
                //            var_dump("serverName:".$envdetails_row->getServer()->getName());
                //            var_dump("serverUser:".$envdetails_row->getUser());
                //            var_dump("servernameCategory:".$envdetails_row->getServerCategory()->getName());
                $serverCategory = $envdetails_row->getServerCategory();
                $products = $serverCategory->getProduct();
                foreach ($products as $products_row) {
                    //                var_dump("Product:".$products_row->getName());
                    $productParameter = $products_row->getProductParameter();
                    foreach ($productParameter as $productParameter_row) {
                        //                    var_dump("parameter:".$productParameter_row->getName());
                        $environmentId = $environment->getId();
                        $environmentName = $environment->getName();
                        $envdetailsId = $envdetails_row->getId();
                        $serverId = $envdetails_row->getServer()->getId();
                        $serverName = $envdetails_row->getServer()->getName();
                        $servernameCategory = $envdetails_row->getServerCategory()->getName();
                        $serverUser = $envdetails_row->getUser();
                        $productId = $products_row->getId();
                        $productName = $products_row->getName();
                        $parameterId = $productParameter_row->getId();
                        $parameterName = $productParameter_row->getName();
                        $parameterHardcoded = $productParameter_row->getHardcoded();
                        $dataSummary[] = array(
                            'environmentId' => $environmentId,
                            'environmentName' => $environmentName,
                            'envdetailsId' => $envdetailsId,
                            'serverId' => $serverId,
                            'serverName' => $serverName,
                            'servernameCategory' => $servernameCategory,
                            'serverUser' => $serverUser,
                            'productId' => $productId,
                            'productName' => $productName,
                            'parameterId' => $parameterId,
                            'parameterName' => $parameterName,
                            'parameterHardcoded'=>$parameterHardcoded,
                            'fileexist' => $this->auditCheckParamExist($envdetails_row->getId(), $productParameter_row->getId()),
                            'lastValue' => $this->auditLastValue($envdetails_row->getId(), $productParameter_row->getId()),
                        );
                        //                    var_dump($dataSummary);
                    }
                }
            }
        }
        return $this->render('audit/list_environment.html.twig', array(
                    'envId' => $envId,
                    'envName' =>$envName,
                    'dataSummary' => $dataSummary,
        ));

//        return new Response('<html><body>Hello result : OK !</body></html>');
    }

    
    
    /**
     * @Route("/audit/productparameter/{productparameterId}", name="audit_product_parameter_summary",requirements  = { "productparameterId" = "\d+" },)
     */
    public function auditProductParameterListAction($productparameterId) {
        $dataSummary = [];
        $envdetails = [];
        $ProductParameterRepo = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $ProductParameterRepo->find($productparameterId);
        if ($productParameter != null) {
            $product = $productParameter->getProduct();
            $productName = $product->getName();
            
            
            $ServerCategoryRepo = $this->getDoctrine()->getRepository('AppBundle:ServerCategory');
            $ServerCategory = $ServerCategoryRepo->findAllByProductId($product->getId());
            //        var_dump("environmentName:".$environment->getName());
            foreach ($ServerCategory as $ServerCategory_row) {
                var_dump($ServerCategory_row->getName());
                /*
                foreach ($products as $products_row) {
                    //                var_dump("Product:".$products_row->getName());
                    $productParameter = $products_row->getProductParameter();
                    foreach ($productParameter as $productParameter_row) {
                        //                    var_dump("parameter:".$productParameter_row->getName());
                        $environmentId = $environment->getId();
                        $environmentName = $environment->getName();
                        $envdetailsId = $envdetails_row->getId();
                        $serverId = $envdetails_row->getServer()->getId();
                        $serverName = $envdetails_row->getServer()->getName();
                        $servernameCategory = $envdetails_row->getServerCategory()->getName();
                        $serverUser = $envdetails_row->getUser();
                        $productId = $products_row->getId();
                        $productName = $products_row->getName();
                        $parameterId = $productParameter_row->getId();
                        $parameterName = $productParameter_row->getName();
                        $parameterHardcoded = $productParameter_row->getHardcoded();
                        $dataSummary[] = array(
                            'environmentId' => $environmentId,
                            'environmentName' => $environmentName,
                            'envdetailsId' => $envdetailsId,
                            'serverId' => $serverId,
                            'serverName' => $serverName,
                            'servernameCategory' => $servernameCategory,
                            'serverUser' => $serverUser,
                            'productId' => $productId,
                            'productName' => $productName,
                            'parameterId' => $parameterId,
                            'parameterName' => $parameterName,
                            'parameterHardcoded'=>$parameterHardcoded,
                            'fileexist' => $this->auditCheckParamExist($envdetails_row->getId(), $productParameter_row->getId()),
                            'lastValue' => $this->auditLastValue($envdetails_row->getId(), $productParameter_row->getId()),
                        );
                        //                    var_dump($dataSummary);
                    }
                }
                 * 
                 */
            }
            
        }
        return $this->render('audit/list_product_parameter.html.twig', array(
                    'productparameterId' => $productparameterId,
                    'productparameterName' => $productparameterName,
                    'productName' => $productName,
                    'dataSummary' => $dataSummary,
        ));

//        return new Response('<html><body>Hello result : OK !</body></html>');
    }
    
    
    /**
     * TODO ADD PARAMETERS Server, environment, parameter
     * @Route("/audit/checkparam/{envId}/{envDetailsId}/{paramId}", name="audit_checkparam")
     */
    public function auditCheckParamListAction($envId,$envDetailsId, $paramId) {


        try {
            $this->auditCheckParamDetails($envDetailsId, $paramId);
        }
        catch(\RuntimeException $e )
        {
//            return new Response('<html><body>Error : ' . $e->getMessage(). ' !</body></html>');
            $this->addFlash(
                   'danger', $e->getMessage()
                    );          
        }
//        return new Response('<html><body>Hello '.$process->getErrorOutput().' : root_dir:'.$ssh_dir.': command:'.$command.' result : '.$result.' !</body></html>');


//        return new Response('<html><body>Hello result : ' . $result . ' !</body></html>');
        return $this->redirectToRoute('audit_environment_summary',array('envId'=>$envId));
    }

    /**
     * TODO ADD PARAMETERS Server, environment, parameter
     * @Route("/audit/editparam/{envId}/{envDetailsId}/{paramId}", name="audit_editparam")
     */
    public function auditCheckParamListAction2($envId,$envDetailsId, $paramId) {

// TODO change to edit mode if the param is hardcoded
        try {
            $this->auditCheckParamDetails($envDetailsId, $paramId);
        }
        catch(\RuntimeException $e )
        {
//            return new Response('<html><body>Error : ' . $e->getMessage(). ' !</body></html>');
            $this->addFlash(
                   'danger', $e->getMessage()
                    );          
        }
//        return new Response('<html><body>Hello '.$process->getErrorOutput().' : root_dir:'.$ssh_dir.': command:'.$command.' result : '.$result.' !</body></html>');


//        return new Response('<html><body>Hello result : ' . $result . ' !</body></html>');
        return $this->redirectToRoute('audit_summary',array('envId'=>$envId));
    }
    
    /**
     * TODO ADD PARAMETERS Server, environment, parameter
     * @Route("/audit/checkall/{envId}", name="audit_checkall")
     */
    public function auditCheckAllListAction($envId) {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Environments');
        $environments = $repository->findByEnvId($envId);
        // Check envdetails from environment_id (environment)
        // check server_category from servercategory_id (envdetails)
        // check product_servercategory from server_caterory_id (server_category)
        // check id from product_parameter (product_id)
        // 
        try {
            $this->auditCheckParamDetails($envDetailsId, $paramId);
        }
        catch(\RunTimeException $e)
        {
//            return new Response('<html><body>Error : ' . $e->getMessage(). ' !</body></html>');
            $this->addFlash(
                   'danger', $e->getMessage()
                    );          
        }
//        return new Response('<html><body>Hello '.$process->getErrorOutput().' : root_dir:'.$ssh_dir.': command:'.$command.' result : '.$result.' !</body></html>');


//        return new Response('<html><body>Hello result : ' . $result . ' !</body></html>');
        return $this->redirectToRoute('audit_summary',array('envId'=>$envId));
    }
    
    
    
    public function auditCheckParamDetails($envDetailsId, $paramId) {
        
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditCheckParamListAction');    
        // Check if script exists
        if (!$this->auditCheckParamExist($envDetailsId, $paramId))
        {
            throw new \RuntimeException("The script not existing");    
        }
        // TODO add debug with product name and parameter name
            $repository = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
            $envdetails = $repository->find($envDetailsId);
            $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
            $productParameter = $repository->find($paramId);

            $user_ssh = $envdetails->getUser();
            // TODO change by a password
            $pass_ssh = $envdetails->getUser();
            $server_ssh = $envdetails->getServer()->getName();
            $productParameterName = $productParameter->getName();
            $productName = $productParameter->getProduct()->getName();
            $parameter = $envdetails->getParameter();
            // TODO change by /hosttype/product_parameter
            $logger->debug('GCR:user_ssh:' . $user_ssh);
            $logger->debug('GCR:pass_ssh:' . $pass_ssh);
            $logger->debug('GCR:server_ssh:' . $server_ssh);
            $logger->debug('GCR:productParameterName:' . $productParameterName);
            $logger->debug('GCR:productName:' . $productName);
            $logger->debug('GCR:parameter:'.$parameter);
            $OSType = $envdetails->getServer()->getOs();
            $script_name = $OSType . '/' . $productName . '_' . $productParameterName . '.sh';
            $logger->debug('GCR:script_name:' . $script_name);

            $root_dir = $this->container->getParameter('kernel.root_dir');
        //        $ssh_dir = $root_dir.'/../ssh';



            $ssh_remote_home_dir = '/home/' . $user_ssh . '/em/';
            $scripts_local_dir = $root_dir . '/../scripts';
            $logger->debug('GCR:ssh_remote_home_dir:' . $ssh_remote_home_dir);
            $logger->debug('GCR:scripts_local_dir:' . $scripts_local_dir);

            // change name based on the /hosttype/product_parameter
            $ssh_local_script_path = $scripts_local_dir . '/' . $script_name;
            $ssh_remote_script_path = $ssh_remote_home_dir . '/' . $script_name;
            $configuration = new Ssh\Configuration($server_ssh);
            $authentication = new Ssh\Authentication\Password($user_ssh, $pass_ssh);
            $logger->debug('GCR:session started');
            try
            {
                $session = new Session($configuration, $authentication);
                $logger->debug('GCR:session done');
                $sftp = $session->getSftp();
                $sftp->mkdir($ssh_remote_home_dir);
                $sftp->mkdir($ssh_remote_home_dir . '/' . $OSType);
                // TODO in case of issue... folder not existing
                $sftp->send($ssh_local_script_path, $ssh_remote_script_path);
                $sftp->chmod($ssh_remote_script_path, 0700);
                $exec = $session->getExec();
                if (!Empty($parameter))
                {
                    $ssh_remote_script_path = $ssh_remote_script_path." \"".$parameter."\"";
                }
                $logger->debug('GCR:ssh_remote_script_path:'.$ssh_remote_script_path);
                $result = $exec->run($ssh_remote_script_path, null, array(), 80, 25, SSH2_TERM_UNIT_CHARS, 1);

                $audit = new Audit();
                $audit->setEnvDetails($envdetails);
                $audit->setProductParameter($productParameter);
                $audit->setResult($result);
                $em = $this->getDoctrine()->getManager();
                $em->persist($audit);
                $em->flush();
            }
            catch(\RuntimeException $e )
            {
                throw $e;
            }
    }
    
    
    public function auditCheckParamExist($envDetailsId, $paramId) {


        $logger = $this->get('logger');
        $logger->debug('GCR:before auditCheckParamListAction');
        $repository = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $envdetails = $repository->find($envDetailsId);
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $productParameter = $repository->find($paramId);

        $productParameterName = $productParameter->getName();
        $productName = $productParameter->getProduct()->getName();
        // TODO change by /hosttype/product_parameter
        $logger->debug('GCR:productParameterName:' . $productParameterName);
        $logger->debug('GCR:productName:' . $productName);
        $OSType = $envdetails->getServer()->getOs();
        $script_name = $OSType . '/' . $productName . '_' . $productParameterName . '.sh';
        $logger->debug('GCR:script_name:' . $script_name);

        $root_dir = $this->container->getParameter('kernel.root_dir');
//        $ssh_dir = $root_dir.'/../ssh';



        $scripts_local_dir = $root_dir . '/../scripts';
        $logger->debug('GCR:scripts_local_dir:' . $scripts_local_dir);

        // change name based on the /hosttype/product_parameter
        $ssh_local_script_path = $scripts_local_dir . '/' . $script_name;

        return file_exists($ssh_local_script_path);
    }

    public function auditLastValue($envDetailsId, $paramId) {
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditLastValue');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Audit');
        $audit = $repository->findByEnvDetailsIdAndParamId($envDetailsId, $paramId);
        if ($audit != null) {
            return $audit->getResult();
        } else {
            return "";
        }
    }

    /**
     * @Route("/audit/checkparamjson/{envDetailsId}/{paramId}", name="audit_checkparamjson")
     */
    public function auditCheckParamJson($envDetailsId, $paramId) {
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditCheckParamJson');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Audit');
        $audit = $repository->findByEnvDetailsIdAndParamId($envDetailsId, $paramId);
        if ($audit != null) {
            return new JsonResponse(array('result' => $audit->getResult()));
        } else {
            return new JsonResponse(array('error' => '2'));
        }
    }

    /**
     * @Route("/audit/dashboard", name="audit_dashboard")
     */
    public function auditDashboard() {
        $resultChart = array();
        // [Product1][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}
        // [Product1][parameter2] --> {[key 1],[value number]}, {[key 2],[value number]}
        // [Product2][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}, {[key 4],[value number]}
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditDashboard');
        $repositoryEnv = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $repositoryEnvDetails = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $repositoryProducts = $this->getDoctrine()->getRepository('AppBundle:Product');
        $repositoryParam = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $repositoryAudit = $this->getDoctrine()->getRepository('AppBundle:Audit');

            // list all products
            $products = $repositoryProducts->findAll();            
            $productsvalue= array();
            foreach ($products as $product) {
                $productsParamvalue = array();
                $productsParams = $repositoryParam->findAllByProductId($product->getId());
                foreach ($productsParams as $productsParam) {
                    $listvalue = array();
                    $productParamId = $productsParam->getId();
                    $logger->debug('GCR:productParamId:' . $productParamId);
                    $environments = $repositoryEnv->findAll();
                    if ($environments != null) {
                    foreach ($environments as $environment) {
                        // list all env
                        $envId = $environment->getId();
                        $logger->debug('GCR:envId:' . $envId);
                        $envDetails = $repositoryEnvDetails->findAllByEnvId($envId);
                        foreach ($envDetails as $envDetails_row) {
                            $envDetailsId = $envDetails_row->getId();
                            $logger->debug('GCR:envDetailsId:' . $envDetailsId);

                            $audit_row = $repositoryAudit->findByEnvDetailsIdAndParamId($envDetailsId, $productParamId);
                            if ($audit_row != null) {
                                $value = trim($audit_row->getResult());
                                $numberDetected = 1;
                                $valueEnv = array();
/*                                
                                var_dump($value);
                                var_dump($listvalue);
                                var_dump('array_key_exists($value,$listvalue)');
                                var_dump(array_key_exists($value,$listvalue));
 */
                                if (array_key_exists($value,$listvalue) == true)
                                {
/*
                                    var_dump("LOL 1!!");
                                    var_dump($listvalue[$value]);
                                    var_dump("LOL 2!!");                                    
 */
//                                    $numberDetected = $listvalue[$value] + 1;
                                    $valueEnv = $listvalue[$value];
                                }
                                $valueEnv[] = $environment->getName().'-'.$envDetails_row->getServercategory()->getName().'-'.$envDetails_row->getServer()->getName();
//                                $listvalue[$value] = $numberDetected;
                                $listvalue[$value] = $valueEnv;
                                $logger->debug('GCR:value:' . $value);
                            }
                        }
                    }
                    if ($listvalue != null)
                    {
//                        var_dump($listvalue);
                    }
                    $productsParamvalue[$productsParam->getName()] = $listvalue;
                }
                $productsvalue[$product->getName()] = $productsParamvalue;
            }
          //  var_dump($productsvalue);
        }
        
        return new JsonResponse(array('result' => $productsvalue));
    }

    
    /**
     * @Route("/audit/dashboardpart/{productId}/{paramId}", name="audit_dashboardpart", requirements={"web"})
     * <script type="text/javascript" src="{{ asset('bundles/andreyboloninchartjs/js/Chart.min.js') }}"></script>
     */
    public function auditDashboardpart($productId,$paramId) {
        $resultChart = array();
        // [Product1][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}
        // [Product1][parameter2] --> {[key 1],[value number]}, {[key 2],[value number]}
        // [Product2][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}, {[key 4],[value number]}
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditDashboard');
        $repositoryEnv = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $repositoryEnvDetails = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $repositoryProducts = $this->getDoctrine()->getRepository('AppBundle:Product');
        $repositoryParam = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $repositoryAudit = $this->getDoctrine()->getRepository('AppBundle:Audit');

            // list all products
                $productsvalue= array();
                $productsParams = $repositoryParam->findAllByProductId($productId); // productId
                foreach ($productsParams as $productsParam) {
                    $listvalue = array();
                    $productParamId = $paramId;
                    $logger->debug('GCR:productParamId:' . $productParamId);
                    $environments = $repositoryEnv->findAll();
                    if ($environments != null) {
                    foreach ($environments as $environment) {
                        // list all env
                        $envId = $environment->getId();
                        $logger->debug('GCR:envId:' . $envId);
                        $envDetails = $repositoryEnvDetails->findAllByEnvId($envId);
                        foreach ($envDetails as $envDetails_row) {
                            $envDetailsId = $envDetails_row->getId();
                            $logger->debug('GCR:envDetailsId:' . $envDetailsId);

                            $audit_row = $repositoryAudit->findByEnvDetailsIdAndParamId($envDetailsId, $productParamId);
                            if ($audit_row != null) {
                                $value = trim($audit_row->getResult());
                                $numberDetected = 1;
                                $valueEnv = array();
/*                                
                                var_dump($value);
                                var_dump($listvalue);
                                var_dump('array_key_exists($value,$listvalue)');
                                var_dump(array_key_exists($value,$listvalue));
 */
                                if (array_key_exists($value,$listvalue) == true)
                                {
/*
                                    var_dump("LOL 1!!");
                                    var_dump($listvalue[$value]);
                                    var_dump("LOL 2!!");                                    
 */
//                                    $numberDetected = $listvalue[$value] + 1;
                                    $valueEnv = $listvalue[$value];
                                }
                                $valueEnv[] = $environment->getName().'-'.$envDetails_row->getServercategory()->getName().'-'.$envDetails_row->getServer()->getName();
//                                $listvalue[$value] = $numberDetected;
                                $listvalue[$value] = $valueEnv;
                                $logger->debug('GCR:value:' . $value);
                            }
                        }
                    }
                    if ($listvalue != null)
                    {
//                        var_dump($listvalue);
                    }
                    /* Sample 
                     * 
                            var data = {
                                labels: [
                                    "Red",
                                    "Blue",
                                    "Yellow"
                                ],
                                datasets: [
                                    {
                                        data: [300, 50, 100],
                                        tooltipItem: [
                                            "sdfsf",
                                            "dsfsdf",
                                            "sdfsf"
                                        ],
                                        backgroundColor: [
                                            "#FF6384",
                                            "#36A2EB",
                                            "#FFCE56"
                                        ],
                                        hoverBackgroundColor: [
                                            "#FF6384",
                                            "#36A2EB",
                                            "#FFCE56"
                                        ]
                                    }],
                                data.datasets[0].data[tooltipItem
                            };                     
                     * 
                     * 
                     * data["lablels"]->{"Red","Blue","Yellow"};
                     * data["datasets"]->data
                     * 
                     * 
                     */
                    $dataEnv = array();
                    $data = array();
                    $dataEnv[]="Red"; // for envs all env for 1 version 
                    $dataEnv[]="Blue";
                    $dataEnv[]="Yellow";
                    $datasets = array();
                    $datavalue = array();
                    $datavalue[] = 300;
                    $datavalue[] = 50;
                    $datavalue[] = 100;
                    $datasets[data] = $datavalue; 
                    $data[labels]=$dataEnv;
                    $data[datasets]=array($datasets);
                    
//                    $productsParamvalue[$productsParam->getName()] = $listvalue;
//                    $productsvalue = $productsParamvalue;                    
            }
          //  var_dump($productsvalue);
        }
        // thtp://www.chartjs.org/docs/#doughnut-pie-chart
        
        
        
//        return new JsonResponse(array('result' => $listvalue));
        $datajson = Json_decode($data);
//        var_dump($datajson);
        return $this->render('audit/chart.html.twig', array(
                    'data' => $datajson,
        ));
//        return new JsonResponse($data);
    }
    
    /**
     * @Route("/audit/dashboardpartjson/{productId}/{paramId}", name="audit_dashboardpartjson", requirements={"rest"})
     * <script type="text/javascript" src="{{ asset('bundles/andreyboloninchartjs/js/Chart.min.js') }}"></script>
     */
    public function auditDashboardjson($productId,$paramId) {
        $resultChart = array();
        // [Product1][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}
        // [Product1][parameter2] --> {[key 1],[value number]}, {[key 2],[value number]}
        // [Product2][parameter1] --> {[key 1],[value number]}, {[key 2],[value number]}, {[key 3],[value number]}, {[key 4],[value number]}
        $logger = $this->get('logger');
        $logger->debug('GCR:before auditDashboard');
        $repositoryEnv = $this->getDoctrine()->getRepository('AppBundle:Environment');
        $repositoryEnvDetails = $this->getDoctrine()->getRepository('AppBundle:EnvDetails');
        $repositoryProducts = $this->getDoctrine()->getRepository('AppBundle:Product');
        $repositoryParam = $this->getDoctrine()->getRepository('AppBundle:ProductParameter');
        $repositoryAudit = $this->getDoctrine()->getRepository('AppBundle:Audit');

            // list all products
                $productsvalue= array();
                $productsParams = $repositoryParam->findAllByProductId($productId); // productId
                foreach ($productsParams as $productsParam) {
                    $listvalue = array();
                    $productParamId = $paramId;
                    $logger->debug('GCR:productParamId:' . $productParamId);
                    $environments = $repositoryEnv->findAll();
                    if ($environments != null) {
                    foreach ($environments as $environment) {
                        // list all env
                        $envId = $environment->getId();
                        $logger->debug('GCR:envId:' . $envId);
                        $envDetails = $repositoryEnvDetails->findAllByEnvId($envId);
                        foreach ($envDetails as $envDetails_row) {
                            $envDetailsId = $envDetails_row->getId();
                            $logger->debug('GCR:envDetailsId:' . $envDetailsId);

                            $audit_row = $repositoryAudit->findByEnvDetailsIdAndParamId($envDetailsId, $productParamId);
                            if ($audit_row != null) {
                                $value = trim($audit_row->getResult());
                                $numberDetected = 1;
                                $valueEnv = array();
/*                                
                                var_dump($value);
                                var_dump($listvalue);
                                var_dump('array_key_exists($value,$listvalue)');
                                var_dump(array_key_exists($value,$listvalue));
 */
                                if (array_key_exists($value,$listvalue) == true)
                                {
/*
                                    var_dump("LOL 1!!");
                                    var_dump($listvalue[$value]);
                                    var_dump("LOL 2!!");                                    
 */
//                                    $numberDetected = $listvalue[$value] + 1;
                                    $valueEnv = $listvalue[$value];
                                }
                                $valueEnv[] = $environment->getName().'-'.$envDetails_row->getServercategory()->getName().'-'.$envDetails_row->getServer()->getName();
//                                $listvalue[$value] = $numberDetected;
                                $listvalue[$value] = $valueEnv;
                                $logger->debug('GCR:value:' . $value);
                            }
                        }
                    }
                    if ($listvalue != null)
                    {
//                        var_dump($listvalue);
                    }
                    /* Sample 
                     * 
                            var data = {
                                labels: [
                                    "Red",
                                    "Blue",
                                    "Yellow"
                                ],
                                datasets: [
                                    {
                                        data: [300, 50, 100],
                                        tooltipItem: [
                                            "sdfsf",
                                            "dsfsdf",
                                            "sdfsf"
                                        ],
                                        backgroundColor: [
                                            "#FF6384",
                                            "#36A2EB",
                                            "#FFCE56"
                                        ],
                                        hoverBackgroundColor: [
                                            "#FF6384",
                                            "#36A2EB",
                                            "#FFCE56"
                                        ]
                                    }],
                                data.datasets[0].data[tooltipItem
                            };                     
                     * 
                     * 
                     * data["lablels"]->{"Red","Blue","Yellow"};
                     * data["datasets"]->data
                     * 
                     * 
                     */
                    $dataEnv = array();
                    $data = array();
                    $dataEnv[]="Red"; // for envs all env for 1 version 
                    $dataEnv[]="Blue";
                    $dataEnv[]="Yellow";
                    $datasets = array();
                    $datavalue = array();
                    $datavalue[] = 300;
                    $datavalue[] = 50;
                    $datavalue[] = 100;
                    $datasets[data] = $datavalue; 
                    $data[labels]=$dataEnv;
                    $data[datasets]=array($datasets);
                    
//                    $productsParamvalue[$productsParam->getName()] = $listvalue;
//                    $productsvalue = $productsParamvalue;                    
            }
          //  var_dump($productsvalue);
        }
        // thtp://www.chartjs.org/docs/#doughnut-pie-chart
        
        
        
//        return new JsonResponse(array('result' => $listvalue));
        $datajson = Json_decode($data);
//        var_dump($datajson);
/*        return $this->render('audit/chart.html.twig', array(
                    'data' => $datajson,
        ));
 */
        return new JsonResponse($data);
    }
    
}



