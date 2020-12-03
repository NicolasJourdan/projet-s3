<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 *
 * @package App\Controller
 */
class IndexController extends Controller
{
    /**
     * @return Response
     */
    public function test(): Response
    {
        return new JsonResponse(['message' => "ok"]);
    }
}
