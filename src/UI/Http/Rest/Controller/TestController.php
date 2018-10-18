<?php

namespace App\UI\Http\Rest\Controller;

use App\Application\Command\Message\SendOneMessage\SendOneMessageCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;


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

    /**
     * @param MessageBusInterface $bus
     * @return JsonResponse
     */
    public function test2(MessageBusInterface $bus): JsonResponse
    {
        $bus->dispatch(new SendOneMessageCommand('test aaa'));

        return new JsonResponse(['message' => 'ok']);
    }
}
