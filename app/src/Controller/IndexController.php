<?php

namespace App\Controller;

use App\Service\TestService;
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
     * @param TestService $testService
     *
     * @return Response
     */
    public function test(TestService $testService): Response
    {
        return new JsonResponse(['message' => $testService->test()]);
    }
}
