<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
class CustomController extends AbstractController
{
    public function __invoke(): JsonResponse
    {
        $data = [
            'message' => 'Hello World',
            'timestamp' => time(),
        ];

        return new JsonResponse($data);
    }
}
