<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PoursuiteController extends AbstractController
{
    /**
     * @Route("/poursuite", name="poursuite")
     */
    public function index()
    {
        return $this->render('poursuite/index.html.twig', [
            'controller_name' => 'PoursuiteController',
        ]);
    }
}
