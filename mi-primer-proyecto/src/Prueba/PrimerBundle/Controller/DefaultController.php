<?php

namespace Prueba\PrimerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Prueba\PrimerBundle\Model\PruebaModel;
use AppBundle\Entity\Movimiento;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    protected $PruebaModel;
    public function __construct(){
        $this->PruebaModel = new PruebaModel();
    }

    public function indexAction()
    {
        return $this->render('PruebaPrimerBundle:Default:index.html.twig');
    }

    public function insertarMovAction(Request $request)
    {
        //Se decoda el json de la request
        $post = $request->getContent();
        $post = JSON_DECODE($post,true);

        //En result se guarda lo que viene en el post
        $result=$this->PruebaModel->setMovimientos($post);

        //Regresa lo que viene en result
        return $this->jsonResponse($result);
    }

    public function selectMovAction(Request $request)
    {
        //Se decoda el json de la request
        $post = $request->getContent();
        $post = JSON_DECODE($post,true);

        //En result se guarda lo que viene en el post
        $result=$this->PruebaModel->getMovimientos($post);

        //Regresa lo que viene en result
        return $this->jsonResponse($result);
    }
    protected function jsonResponse($data)
    {
        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
