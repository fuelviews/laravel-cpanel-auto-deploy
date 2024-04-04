<?php

namespace Fuelviews\CpanelAutoDeploy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CpanelAutoDeployServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-cpanel-auto-deploy');
    }

    public function packageRegistered(): void
    {
        $this->app->booted(function () {
            $this->publishScriptToRoot();
        });
    }

    protected function publishScriptToRoot(): void
    {
        $sourcePath = __DIR__ . '/../resources/scripts/cpanel-auto-deploy.sh.stub';
        $destinationPath = base_path('cpanel-auto-deploy.sh');

        copy($sourcePath, $destinationPath);

        chmod($destinationPath, 0755);
    }
}
