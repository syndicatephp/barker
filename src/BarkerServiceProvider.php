<?php

namespace Syndicate\Barker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Syndicate\Barker\Commands\BarkerCommand;

class BarkerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('barker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_barker_table')
            ->hasCommand(BarkerCommand::class);
    }
}
