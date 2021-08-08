<?php
namespace October\Rain\Config\Tests;

use October\Rain\Config\ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        $app['path.config'] = __DIR__ . '/fixtures/config';

        return [
            ServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['path.config'] = __DIR__ . '/fixtures/config';
    }
}