<?php

namespace Mdhesari\VoyagerDataTypes;

use Mdhesari\VoyagerDataTypes\Commands\VoyagerDataTypesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VoyagerDataTypesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('voyager-data-types')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_voyager-data-types_table')
            ->hasCommands([
                VoyagerDataTypesCommand::class,
            ]);
    }
}
