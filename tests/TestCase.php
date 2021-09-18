<?php

namespace Mdhesari\VoyagerDataTypes\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mdhesari\VoyagerDataTypes\VoyagerDataTypesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mdhesari\\VoyagerDataTypes\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            VoyagerDataTypesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_voyager-data-types_table.php.stub';
        $migration->up();
        */
    }
}
