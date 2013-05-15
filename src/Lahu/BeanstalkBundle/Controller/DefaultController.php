<?php

namespace Lahu\BeanstalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$bstalk = $this->get("leezy.pheanstalk.primary");
    	$tubes = $bstalk->listTubes();

        return $this->render('LahuBeanstalkBundle:Default:index.html.twig', array('tubes' => $tubes));
    }
}
