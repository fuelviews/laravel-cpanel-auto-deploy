<?php

namespace Fuelviews\CpanelAutoDeploy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fuelviews\CpanelAutoDeploy\Commands\CpanelAutoDeployCommand;

class CpanelAutoDeployServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cpanel-auto-deploy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-cpanel-auto-deploy_table')
            ->hasCommand(CpanelAutoDeployCommand::class);
    }
}
