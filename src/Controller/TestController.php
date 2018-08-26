<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class TestController
 */
class TestController
{
    /**
     * @var string
     */
    private $test;

    /**
     * TestController constructor.
     * @param string $test
     */
    public function __construct(string $test)
    {
        $this->test = $test;
    }

    /**
     * @return JsonResponse
     */
    public function test(): JsonResponse
    {
        return new JsonResponse(['a' => 'b', 'test' => $this->test]);
    }
}
