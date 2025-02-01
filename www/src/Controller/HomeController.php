<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Services\GenerateValues;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, GenerateValues $generateValues): JsonResponse
    {
        $mean = $request->get("mean") ?? "10000";
        $stdDeviation = $request->get("std_deviation") ?? "2000";
        $samplesAmount = $request->get("samples") ?? "20";

        $values = $generateValues
            ->setMean((int) $mean)
            ->setStdDeviation((int) $stdDeviation)
            ->setSamplesAmount((int) $samplesAmount)
            ->generateSamples();
        
        return $this->json($values);
    }
}
