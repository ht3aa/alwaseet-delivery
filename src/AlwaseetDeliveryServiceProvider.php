<?php

namespace Ht3aa\AlwaseetDelivery;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ht3aa\AlwaseetDelivery\Commands\AlwaseetDeliveryCommand;

class AlwaseetDeliveryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('alwaseet-delivery')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_alwaseet_delivery_table')
            ->hasCommand(AlwaseetDeliveryCommand::class);
    }
}
