<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use MathPHP\Probability\Distribution\Continuous\Normal;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): JsonResponse
    {
        $mean = 10000;
        $stdDeviation = 2000;
        
        $normal = new Normal($mean, $stdDeviation);

        $values = [];
        for ($i = 0; $i < 20; $i++) {
            $values[] = $normal->rand();
        }
        
        return $this->json($values);
    }
}
