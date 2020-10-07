<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpecialitesController extends AbstractController
{
    /**
     * @Route("/specialites", name="specialites")
     */
    public function index()
    {
        return $this->render('specialites/index.html.twig', [
            'controller_name' => 'SpecialitesController',
        ]);
    }
}
