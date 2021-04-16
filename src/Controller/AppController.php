<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route("/map", name="map")
     */
    public function map(): Response
    {
        return $this->render('app/map.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route("/connect", name="connect")
     */
    public function connect(): Response
    {
        return $this->render('app/connect.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }


}
