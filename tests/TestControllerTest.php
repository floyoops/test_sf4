<?php

namespace App\Tests;



use App\UI\Http\Rest\Controller\TestController;

/**
 * Class TestControllerTest
 */
class TestControllerTest extends \PHPUnit\Framework\TestCase
{
    public const valueTest = 'statan';

    public function testA(): void
    {
        $c = new TestController(self::valueTest);
        $r = json_decode($c->test()->getContent(), true);
        self::assertEquals('b', $r['a']);
        self::assertEquals(self::valueTest, $r['test']);
    }
}
