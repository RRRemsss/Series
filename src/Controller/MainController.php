<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET','POST'])]

    public function home() {
        echo "Coucou";
        die();
    }
    #[Route('/test', name: 'app_test', methods: ['GET','POST'])]

    public function test() {
        echo "testounet";
        die();
    }


}