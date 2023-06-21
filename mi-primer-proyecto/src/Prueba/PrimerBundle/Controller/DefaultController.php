<?php

namespace Prueba\PrimerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prueba\PrimerBundle\Model\PruebaModel;

class DefaultController extends Controller
{

    protected $PruebaModel;
    public function __construct(){
        $this->PruebaModel = new PruebaModel();
    }

    public function indexAction()
    {

        $result=$this->PruebaModel->getMovimientos();

        return $this->render('PruebaPrimerBundle:Default:index.html.twig', array('datos'=>$result));
    }
}
