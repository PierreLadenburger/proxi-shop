<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StorekeeperController extends AbstractController
{
    /**
     * @Route("/storekeeper", name="storekeeper")
     */
    public function index(): Response
    {
        return $this->render('storekeeper/index.html.twig', [
            'controller_name' => 'StorekeeperController',
        ]);
    }
}
