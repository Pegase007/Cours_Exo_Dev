<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction($id)
    {
    	$url=$this->get('router')->generate("new",array('id'=>1));
       return $this->render('AppBundle:default:index.html.twig',array('id'=>$id, 'url'=>$url));
      
    }

    public function editAction($id)
    {
       /* return $this->render('default/index.html.twig');*/
       return new Response("un autre message");
    }

     public function viewsAction($id)
    {
       $idbis=$id+1;
    	$url=$this->get('router')->generate("exo",array('id'=>$idbis));
       return $this->render('AppBundle:default:index.html.twig',array('id'=>$id, 'url'=>$url));
       
    }
}
