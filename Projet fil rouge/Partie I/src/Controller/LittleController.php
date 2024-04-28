<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LittleController extends AbstractController
{
    #[Route('/little', name: 'little')]
    public function index(): Response
    {
        return $this->render('user/little.html.twig', [
            'controller_name' => 'LittleController',
        ]);
    }
}
