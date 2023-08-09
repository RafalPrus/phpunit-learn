<?php

namespace Tests\DataProviders;

class RouterDataProvider
{
    public function routeNotFoundCases(): array
    {
        return [
            ['/users', 'patch'],
            ['/invoices', 'post'],
            ['/users', 'get'],
            ['/users', 'post']
        ];
    }
}