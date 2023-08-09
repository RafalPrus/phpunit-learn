<?php

declare(strict_types=1);

namespace Test\Unit;

use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /** @test */
    public function itRegisterARoute(): void
    {
        // given router object
        $router = new Router();

        // when we call a register method
        $router->register('get', '/users', ['Users', 'index']);

        $expected = [
            'get' => [
                '/users' => ['Users', 'index']
            ]
        ];

        // then we assert route
        $this->assertEquals($expected, $router->routes());
    }

    /** @test */
    public function itRegisterAGetRoute(): void
    {
        $router = new Router();


        $router->get('/users', ['Users', 'index']);

        $expected = [
            'get' => [
                '/users' => ['Users', 'index']
            ]
        ];


        $this->assertEquals($expected, $router->routes());
    }

    /** @test */
    public function itRegisterAPostRoute(): void
    {
        $router = new Router();


        $router->post('/users', ['Users', 'store']);

        $expected = [
            'post' => [
                '/users' => ['Users', 'store']
            ]
        ];


        $this->assertEquals($expected, $router->routes());
    }

    /** @test */
    public function thereAreNoRoutesWhenRouterIsCreated(): void
    {
        $router = new Router();

        $this->assertEmpty($router->routes());
    }
}