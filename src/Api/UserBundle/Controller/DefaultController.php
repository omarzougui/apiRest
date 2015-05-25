<?php

namespace Api\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends FOSRestController {

    /**
     * GET page index.
     * 
     * @Get("/omar/index")
     */
    public function indexAction() {
        $a = '5';
        $b = '10';
        $omarrrr = $a + $b;
        $data['status'] = 'ok'; // get data, in this case list of users.
        $data['res'] = $omarrrr; // get data, in this case list of users.
        $view = $this->view($data, 200);

        return $this->handleView($view);
//        return $this->render('ApiUserBundle:Default:index.html.twig', array('name' => 'test'));
    }

    /**
     * GET page omar with params.
     * 
     * @Get("/omar/somme/{a}/{b}")
     * 
     * @ApiDoc(
     *  description="Retourne la somme de deux entiers",
     *  requirements={
     *      {
     *          "name"="limit",
     *          "dataType"="integer",
     *          "requirement"="\d+",
     *          "description"="how many objects to return"
     *      }
     *  },
     *  parameters={
     *      {"name"="a", "dataType"="integer", "required"=true, "description"="La première partie de la somme"},
     *      {"name"="b", "dataType"="integer", "required"=true, "description"="La deuxième partie de la somme"}
     *  }
     * )
     */
    public function sommeAction($a, $b) {
        $res = $a + $b;
        $omarrrr = $a + $b;
        $data['status'] = 'ok'; // get data, in this case list of users.
        $data['res'] = $omarrrr; // get data, in this case list of users.
        $view = $this->view($data, 200);

        return $this->handleView($view);
//        return $this->render('ApiUserBundle:Default:index.html.twig', array('name' => 'test'));
    }

    public function carreAction($x) {

        $data['status'] = 'ok'; // get data, in this case list of users.
        $data['res'] = $x * $x; // get data, in this case list of users.
        $view = $this->view($data, 200);

        return $this->handleView($view);
//        return $this->render('ApiUserBundle:Default:index.html.twig', array('name' => 'test'));
    }

}
