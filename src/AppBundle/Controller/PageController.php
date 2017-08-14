<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller{

  /**
   * @Route("/page/{pageName}")
   */
  public  function showActio($pageName){

    $links = [
      'home',
      'about',
      'services'
    ];

    return  $this->render('page/show.html.twig',[
      'name' => $pageName,
      'links' => $links
    ]);

  }

}

